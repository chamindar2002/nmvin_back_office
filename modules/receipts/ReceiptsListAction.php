<?php 
 include_once("action/Action.php");
 include_once("ReceiptsManager.php");
 require_once("sales/SalesManager.php");
 require_once("customer/customerFunctions.php");
 
 class ReceiptsListAction implements Action{ 
 	 public function execute(){ 
 	 	
 	 	$today = strtotime(date("m.d.y"));
 	 	$todayslist = ReceiptsManager::getInstance()->listTodaysReceipts($today);
 	 	$_REQUEST['todaysliset'] = $todayslist;
 	 	
  		if(isset($_POST['searchby'])){
  			//showActionFileOutput(25);
  			$searchby = $_POST['searchby'];
  			$customercode = "";
  			if($searchby == 'ccode'){
  				$passportnumber = $_POST['customercode'];
  				$customer = SalesManager::getInstance()->searchCustomerByPassportNumber($passportnumber);
  				if(sizeof($customer) == 1){
  					$customercode = $customer->getCustomercode();
  				}
  				$salesList = ReceiptsManager::getInstance()->listReceiptsByCustomerCode($customercode);
  			}else if($searchby == 'drange'){
  				$sdate = strtotime($_POST['start_dt']);
  				$edate = strtotime($_POST['end_dt']);
  				$salesList = ReceiptsManager::getInstance()->listReceiptsBySdateAndEdate($sdate,$edate);
  			}
  			$_REQUEST['saleslist'] = $salesList;
  		}
 	 	
 	 return "list"; 
	} 
} 
?>