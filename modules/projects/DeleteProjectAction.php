<?php
include_once("action/Action.php");
include_once("ProjectsManager.php");      
require_once("customer/customerFunctions.php");

class DeleteProjectAction implements Action {
	
	public function execute(){
		$deleted = false;
		if(isset($_POST['selectedrow_2'])){
			$projectcode = $_POST['selectedrow_2'];
						
			$blockssoldfromproject = ProjectsManager::getInstance()->CheckIfBlockSoldBeforeDelete($projectcode);
			//if a block has been sold from the project then cannot delete the project.
			if($blockssoldfromproject == 0)
			{
				$deleteproject = ProjectsManager::getInstance()->deleteProject($projectcode);
				
				if($deleteproject == 1){
					
					$deleteprdetails = ProjectsManager::getInstance()-> deleteProjectDetails($projectcode);
					
					if($deleteprdetails == 1){
						$deleted = true;
					}
				}
			}
		}
		$_REQUEST['deleted'] = $deleted;
		return "success";
	}
}

?>