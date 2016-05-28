<?php
include_once("action/Action.php");
include_once("ProjectsManager.php");      
require_once("customer/customerFunctions.php");

class ProjectListAction implements Action {
	
	public function execute(){
		//showActionFileOutput(20);
		if(isset($_POST['search'])){
			$locationcode = $_POST['locations'];
			$projectlist = ProjectsManager::getInstance()->listProjectsByLocation($locationcode);
			$_REQUEST['projectlist'] = $projectlist;
		}
		return "list";
	}
}
?>