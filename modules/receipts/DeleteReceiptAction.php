<?php 
 include_once("action/Action.php");
 require_once("ReceiptsManager.php");
 require_once("sales/SalesManager.php");
 require_once("customer/customerFunctions.php");
 
 class DeleteReceiptAction implements Action{ 
 	 public function execute(){ 
  		//showActionFileOutput(20);
  		$deleted = false;
  		if(isset($_POST['selectedrow_3'])){
  			$receiptno = $_POST['selectedrow_3'];
  			if($receiptno > 0){//a valid receipt
  				$receipt = ReceiptsManager::getInstance()->deleteReceipt($receiptno);
  				if($receipt == 1){
  					$deleted = true;
  				}
  				
  			}
  		}
  	 $_REQUEST['deleted'] = $deleted;	
 	 return "success"; 
	} 
} 
?>