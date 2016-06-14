<?php 
 include_once("action/Action.php");
 require_once("StatementManagerManager.php");
 require_once("customer/customerFunctions.php");
 require_once("sales/SalesManager.php");
   
 class NewPaymentStatementAction implements Action{ 
 	 
 	public function execute(){ 
 		//showActionFileOutput(25);
  		if(isset($_POST['selectedrow_5'])){
  			$sale_refno = $_POST['selectedrow_5'];
  			$saledetails = SalesManager::getInstance()->getSaleByRefno($sale_refno);
  			$_REQUEST['salesdetails'] = $saledetails;
  		}
 	 return "print"; 
	} 
} 
?>