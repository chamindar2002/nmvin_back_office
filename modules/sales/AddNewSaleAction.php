<?php 
 include_once("action/Action.php");
 require_once("SalesManager.php");
 require_once("customer/customerFunctions.php");
  
 class AddNewSaleAction implements Action{ 
 	 public function execute(){ 
  		//showActionFileOutput(20);
 	 	if(isset($_POST['search'])){
 	 		$searchby = $_POST['searchcriteria'];
	  		$searchfor = $_POST['searchkeywordbox'];
	  		$searchresult = "";
	  		
	  			switch($searchby)
	  			{
	  				case 0:
	  					$searchresult = SalesManager::getInstance()->searchCustomerByPassportNumber($searchfor);
	  					break;
	  				case 1:
	  					$searchresult = SalesManager::getInstance()->searchCustomerByCustomerCode($searchfor);  					
	  					break;	  				
	  			}
	  			
	  			$locations = SalesManager::getInstance()->listLocations();
	  			
		  		$_REQUEST['searchresults'] = $searchresult;
		  		$_REQUEST['locationslist'] = $locations;
 	 	}
 	 	else if(isset($_POST['customercode'])){
 	 		$customercode = $_POST['customercode'];
 	 		if($customercode){
 	 			$location = $_POST['location'];
 	 			$project = $_POST['projects'];
 	 			$blockref = $_POST['projectdetails'];
 	 			$pplan = $_POST['paymentplan'];
 	 			$dueday = $_POST['duedate'];
 	 			$agreementstartdate = $_POST['start_dt'];
 	 			//echo "$customercode ? $location ? $project ? $blockref ? $pplan ? $dueday";
 	 			$success = insertNewSalesRecord($customercode,$location,$project,$blockref,$pplan,$dueday,$agreementstartdate);
 	 			if($success == 1){
					$_REQUEST['msg_success'] = "New Sale Added Successfully.";
				}else{
					$_REQUEST['msg_error'] = "An Error Occured Saving Data.";
				}
 	 		}
 	 	}
 	 return "form"; 
	} 
} 



function insertNewSalesRecord($customercode,$location,$project,$blockref,$pplan,$dueday,$agreementstartdate){
	$pplaobj = SalesManager::getInstance()->getPaymentPlanByPK($pplan);
	$installments = 0;
	if(sizeof($pplan)!=0){
		$desc = $pplaobj->getDescription();
		$installments = $pplaobj->getNofinstallments();
		$installamt = $pplaobj->getInstallamount();
		$totpayable = $pplaobj->getTotalpayable();
	}
	
	//------------converd due day in to a valid date format-----------------
	//$today = explode("-",date("d-m-Y"));
	$today = explode("-",$agreementstartdate);
	$agreementdate_in_string = strtotime("$dueday-$today[1]-$today[2]");
	$agreementdate = date("d-m-Y",$agreementdate_in_string);
	//----------------------------------------------------------------------
	
	
	//-------------calculate agreement expire date--------------------------	
	
	//echo "$installments <br>";
	$months = $installments % 12;
	
	$years = explode(".",$installments / 12);
	
	//echo "Months $months ? Years $years[0] <br>";
	$totalmonths = $months + ($years[0]*12);
	//echo "Total months: $totalmonths <br>";
	
	$dateMonthsAdded = strtotime(date("d-m-Y", strtotime($agreementdate)) . "+$totalmonths month");
	$agreementexpdate = date("d-m-Y", $dateMonthsAdded);
	//echo "The due date is : $agreementexpdate";
	//---------------------------------------------------------------------
	//echo $pplan;
	
	$addNewSale = SalesManager::getInstance()->AddNewSalesRecord($customercode,$location,$project,$blockref,$pplan,
																 $installments,$desc,$installamt,$totpayable,$dueday,
																 $agreementstartdate,$agreementexpdate);
																 
	$setblocksoldout = SalesManager::getInstance()->setBlockSoldOut($blockref,$customercode);
																 
	return $addNewSale;
	
}

?>