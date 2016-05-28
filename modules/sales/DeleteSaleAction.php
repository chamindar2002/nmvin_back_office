<?php 
 include_once("action/Action.php");
 require_once("SalesManager.php");
 require_once("customer/customerFunctions.php");
 
 class DeleteSaleAction implements Action{ 
 	 
 	public function execute(){ 
  		//showActionFileOutput(20);
  		$deleted = false;
 	 	if(isset($_POST['selectedrow_3'])){
 	 		$sale_refno = $_POST['selectedrow_3'];
 	 		$receiptsIssued = SalesManager::getInstance()->CheckIfReceiptsIssued($sale_refno);
 	 		if($receiptsIssued == 0){
	  			$success = SalesManager::getInstance()->deleteSale($sale_refno);
	  			$sale = SalesManager::getInstance()-> getSaleByRefno($sale_refno);
	  			if(sizeof($sale) == 1){
	  				$blockrefno = $sale->getBlockrefnumber();
	  				$customercode = $sale->getCustomercode();
	  				$unsetblock = SalesManager::getInstance()->UnsetBlockSoldOut($blockrefno,$customercode);
	  			}
 	 		}//if($receiptsIssued)
 	 		
  			if($success == 1){
  				$deleted = true;
  			}
  		}
  	 $_REQUEST['deleted'] = $deleted;	 		
 	 return "success"; 
	} 
} 
?>