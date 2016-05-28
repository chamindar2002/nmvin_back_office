<?php 
 include_once("action/Action.php");
 include_once("DefaultersManager.php");
 require_once("refunds/RefundsManager.php");
 
 class UnlistFromDefaultersAction implements Action{ 
 	 public function execute(){ 
             
             $projectlist = RefundsManager::getInstance()->ListAllProjects();
             $_REQUEST['projectlist'] = $projectlist;
             
             if(isset($_POST['project'])){
  			$projectcode = $_POST['project'];
  			$salesbyprc = DefaultersManager::getInstance()->listDefaultedSalesByProjectcode($projectcode);
  			$_REQUEST['salesbyprc'] = $salesbyprc;
  			
            }
  
 	 return "list"; 
	} 
} 
?>