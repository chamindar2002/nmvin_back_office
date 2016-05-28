<?php
include_once("action/Action.php");
include_once("ProjectsManager.php");      
require_once("customer/customerFunctions.php");

class EditProjectAction implements Action {
	
	public function execute(){
		//showActionFileOutput(20);
		if(isset($_POST['selectedrow'])){
			$projectcode = $_POST['selectedrow'];
			$project = ProjectsManager::getInstance()->getProjectByPk($projectcode);
			$blockssold = ProjectsManager::getInstance()->checkIfBlocksSold($projectcode);
			$_REQUEST['project'] = $project;	
			$_REQUEST['blockssold'] = $blockssold;
		}
		else if(isset($_POST['confirmedit'])){
			$prcode = $_POST['projectcode'];
			$locationcode = $_POST['locations'];
			$projectname = $_POST['projectname'];
			$nofblocks = $_POST['nofblocks'];
			$prexists = ProjectsManager::getInstance()->checkIfProjectExists($locationcode,$projectname,$nofblocks);
			if($prexists == 0){
				$editprojectobj = ProjectsManager::getInstance()->editProject($prcode,$locationcode,$projectname,$nofblocks);
				if($editprojectobj == 1){
					$_REQUEST['msg_success'] = "Changes Saved Successfully";	
				}
				else{
					$_REQUEST['msg_error'] = "An Error Occured Saving Data";
				}
			}else{
					$_REQUEST['msg_error'] = "A Project Already Exists With The Given Name";
			}
		}
				
		return "form";
	}
}
?>