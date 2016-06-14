<?php 
 include_once("action/Action.php");
 require_once("SalesManager.php");
 require_once("customer/customerFunctions.php");
 
 class SalesDetailsAction implements Action{ 
 	 public function execute(){ 
  		//showActionFileOutput(20);
  		if(isset($_POST['selectedrow_2'])){
  			$sale_refno = $_POST['selectedrow_2'];
  			$saledetails = SalesManager::getInstance()->getSaleByRefno($sale_refno);
  			$_REQUEST['salesdetails'] = $saledetails;
  			//echo $sale_refno;
  		}
  		
 	 return "view"; 
	} 
} 
?>