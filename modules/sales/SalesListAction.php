<?php 
 include_once("action/Action.php");
 require_once("customer/customerFunctions.php");
 require_once("SalesManager.php");
 include_once("customer/CustomerManager.php");      
 
 class SalesListAction implements Action{ 
 	 public function execute(){ 
 	 //showActionFileOutput(20);
 
 	 		$today = strtotime(date("m.d.y"));
 	 		$todaysSalesList = SalesManager::getInstance()->ListTodaysSalesList($today);
 	 		$_REQUEST['todaysliset'] = $todaysSalesList;
 	 
 	 	/*if (isset($_POST['search'])){
 	 		$startdate = strtotime($_POST['start_dt']);
 	 		$enddate = strtotime($_POST['end_dt']);
 	 		
 	 		$searchResulsts = SalesManager::getInstance()->searchSalesResults($startdate,$enddate);
 	 		$_REQUEST['searchresults'] = $searchResulsts;
 	 		
 	 		
 	 	}*/

 	 	//******************************************************************************************************
 	 	if(isset($_POST['searchby'])){
  			//showActionFileOutput(25);
  			$searchby = $_POST['searchby'];
  			if($searchby == 'ccode'){
//  				$customercode = $_POST['customercode'];
//  				$salesList = ReceiptsManager::getInstance()->listReceiptsByCustomerCode($customercode);
				  if(isset($_POST['customercode'])){
  				  	$passportno = $_POST['customercode'];
  				  	$customer = SalesManager::getInstance()->searchCustomerByPassportNumber($passportno);
  				  	if(sizeof($customer)==1){
  				  		$customercode = $customer->getCustomercode();
  				  	}
	  				  	if(sizeof($customercode) > 0){
	  				  		$searchResulsts = SalesManager::getInstance()->searchSalesResultsByCustomercode($customercode);
	  				  		//echo sizeof($searchResulsts);
	  				  	}
				  }
  				  
  			}else if($searchby == 'drange'){
  				$sdate = strtotime($_POST['start_dt']);
  				$edate = strtotime($_POST['end_dt']);
  				//$salesList = ReceiptsManager::getInstance()->listReceiptsBySdateAndEdate($sdate,$edate);
  				$searchResulsts = SalesManager::getInstance()->searchSalesResults($sdate,$edate);
  			}
  			$_REQUEST['searchresults'] = $searchResulsts;
  		}
	   //*******************************************************************************************************
  		
  		else if(isset($_POST['selectedrow_4'])){
  			$customercode = $_POST['selectedrow_4'];
  			$searchResulsts = SalesManager::getInstance()->searchSalesResultsByCustomercode($customercode);
  			$_REQUEST['searchresults'] = $searchResulsts;
  		}
  		
 	 return "list"; 
	} 
} 


?>