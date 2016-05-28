<?php 
 include_once("action/Action.php");
 include_once 'CustomerDetailsManager.php';
 
 class UpProjectsRegstRemoveAction implements Action{ 
 	 public function execute(){ 
               
             if(isset($_GET['project'])){
                 $projectname = $_GET['project'];
                 $userid = $_SESSION[SYSTEMNAME.'logid'];
                 $project = CustomerDetailsManager::getInstance()->getReferenceNoForUpdating($userid,$projectname);
                 
                 if($project == -1){
                     $_REQUEST['msg'] = "Error: Attempt of updating non existing record";
                     return "form"; 
                 }else{
                     $remove = CustomerDetailsManager::getInstance()->removeRemoveRegisteredUpcomingProject($project);
                     if($remove == 1){
                        $_REQUEST['msg_success'] = "Removed Successfully.";
                     }else{
                        $_REQUEST['msg'] = "Project Was Not Removed Successfully."; 
                     }
                 }
                 
             }
 	 return "form"; 
	} 
} 
?>