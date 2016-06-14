<?php
include_once("action/Action.php");
include_once("ProjectsManager.php");      
require_once("customer/customerFunctions.php");

class AddNewProjectAction implements Action {
	
	public function execute(){
		//showActionFileOutput(20);
		if(isset($_POST['confirmsave'])){
			$locationcode = $_POST['locations'];
			$projectname = $_POST['projectname'];
			$nofblocks = $_POST['nofblocks'];
			$projectcode = 0;
			$prexists = ProjectsManager::getInstance()->checkIfProjectExists_2($locationcode,$projectname);
			
			if($prexists == 0){
				
				//insert new project
				$newproject = ProjectsManager::getInstance()->addNewProject($locationcode,$projectname,$nofblocks);
				
				if(isset($newproject)){
					//get insert id of the new record
					$projectcode = $newproject->getProjectcode();
				}
				
				if(sizeof($newproject) == 1){
					//if new project successfull insert details records  
					$detailsOK = addProjectDetails($projectcode,$locationcode,$nofblocks);
				}
				
				if($detailsOK == 1){
					//all data created successfully
					$_REQUEST['msg_success'] = "New Project Saved Successfully";	
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

function addProjectDetails($projectcode,$locationcode,$nofblocks){
	for($i=0;$i<$nofblocks;$i++){
		$prdetail = ProjectsManager::getInstance()->addNewProjectDetail($locationcode,$projectcode);
		//echo "$i <br>";
	}
	return 1;
}
?>