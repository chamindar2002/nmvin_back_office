<?php 
 include_once("action/Action.php");
 include_once("ReceiptsManager.php");
 require_once("sales/SalesManager.php");
 require_once("customer/customerFunctions.php");
 
 
 class VoidedReceiptsListAction implements Action{ 
 	 public function execute(){ 
  		//showActionFileOutput(25);
  		
  		$today = strtotime(date("m.d.y"));
  		$voidedtodaysreceipts = ReceiptsManager::getInstance()->ListVoidedTodaysReceipts($today);
  		
  		if(isset($_POST['searchby'])){
  			$searchby = $_POST['searchby'];
  			if($searchby == 'ccode'){
  				$passportnumber = $_POST['customercode'];
  				$customer = SalesManager::getInstance()->searchCustomerByPassportNumber($passportnumber);
  				if(sizeof($customer) == 1){
  					$customercode = $customer->getCustomercode();
  					$voidedreceiptslist = ReceiptsManager::getInstance()->GetVoidedReceiptsByCustomerCode($customercode);
  					//print_r($voidedreceiptslist);
  				}
  			}
  			else if($searchby == 'drange'){
  				$sdate = strtotime($_POST['start_dt']);
  				$edate = strtotime($_POST['end_dt']);
  				$voidedreceiptslist = ReceiptsManager::getInstance()->ListVoidedReceiptsBySdateAndEdate($sdate,$edate);
  			}
  		}
  		//print_r($voidedtodaysreceipts);
  	 $_REQUEST['voidedtodaysreceipts'] = $voidedtodaysreceipts;	
  	 $_REQUEST['voidedreceipts'] = $voidedreceiptslist;	
 	 return "list"; 
	} 
} 
?>