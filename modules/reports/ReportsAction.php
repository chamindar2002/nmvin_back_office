<?php 
 include_once("action/Action.php");
 require_once("ReportsManager.php");
 
 class ReportsAction implements Action{ 
 	 public function execute(){ 
  		$projectsList = ReportsManager::getInstance()->getProjects();
  		$_REQUEST['projectsList'] = $projectsList;
 	 return "list"; 
	} 
} 
?>