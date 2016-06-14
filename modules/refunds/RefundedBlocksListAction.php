<?php 
 include_once("action/Action.php");
 include_once("action/Action.php");
 require_once("customer/customerFunctions.php");
 require_once("RefundsManager.php");
 
 
 class RefundedBlocksListAction implements Action{ 
 	 public function execute(){ 
 	 	//showActionFileOutput(25);
  		$projectlist = RefundsManager::getInstance()->ListAllProjects();
  		$_REQUEST['projectlist'] = $projectlist;
  		
  		if(isset($_POST['project'])){
  			$projectcode = $_POST['project'];
  			//$salesbyprc = RefundsManager::getInstance()->listSalesByProjectCode($projectcode);
  			$refundedlist = RefundsManager::getInstance()->listRefundedSalesByProjectcode($projectcode);
  			$_REQUEST['refundedlist'] = $refundedlist;
  			
  		}
 	 return "list"; 
	} 
} 
?>