<?php 
 include_once("action/Action.php");
 require_once("ReceiptsManager.php");
 require_once("sales/SalesManager.php");
 require_once("customer/customerFunctions.php");
 
 
 class ReceiptDetailsAction implements Action{ 
 	 
 	public function execute(){
 		//showActionFileOutput(20); 
  		if(isset($_POST['selectedrow_2'])){
  			$receiptno = $_POST['selectedrow_2'];
  			$receiptdetails = ReceiptsManager::getInstance()->getReceipstByPK($receiptno);
  			$receiptmop = ReceiptsManager::getInstance()->getMethodOfPaymentByReceiptNo($receiptno);
  			
  			$_REQUEST['receiptdetails'] = $receiptdetails;
			$_REQUEST['receiptmop'] = $receiptmop;
  			
  		}
 	 return "view"; 
	} 
} 
?>