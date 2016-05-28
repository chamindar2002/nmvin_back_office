<?php 
 include_once("action/Action.php");
 require_once("SalesManager.php");
 require_once("customer/customerFunctions.php");
 
 class EditSalesAction implements Action{ 
 	 public function execute(){ 
 	 	//showActionFileOutput(20);
 	 	
  		if(isset($_POST['selectedrow'])){
  			$salesrefno = $_POST['selectedrow'];
  			if($salesrefno != 0){
  				$salesobj = SalesManager::getInstance()->getSaleByRefno($salesrefno);
  				if(sizeof($salesobj) == 1){
  					$customercode = $salesobj->getCustomercode();
  				}
  				$searchresult = SalesManager::getInstance()->getCustomerByPK($customercode);
  				$locations = SalesManager::getInstance()->listLocations();
	  			
  				$_REQUEST['salesrecord'] = $salesobj;
		  		$_REQUEST['locationslist'] = $locations;
  				$_REQUEST['searchresults'] = $searchresult;
  			}
  		}
  		else if(isset($_POST['editsalesrec'])){
  			$salesrefno = $_POST['editsalesrec'];
  			if($salesrefno != 0){
  				
  				$originalblockrefno = $_POST['originalblockrefno'];
  				$newblockrefno = $_POST['projectdetails'];
  				
  				$customercode = $_POST['customercode'];
  				
  				$location = $_POST['location'];
 	 			$project = $_POST['projects'];
 	 			
 	 			$pplan = $_POST['paymentplan'];
 	 			$dueday = $_POST['duedate'];
 	 			
 	 			$agreementstartdate = $_POST['start_dt'];
 	 			
 	 			$receiptsIssued = SalesManager::getInstance()->CheckIfReceiptsIssued($salesrefno);
 	 			if($receiptsIssued == 0){
 	 			
 	 			$success = EditSalesRecord($salesrefno,$customercode,$location,$project,$originalblockrefno,$newblockrefno,$pplan,$dueday,$agreementstartdate);
	  				if($success == 1){
						$_REQUEST['msg_success'] = "Changes Saved Successfully.";
					}else{
						$_REQUEST['msg_error'] = "An Error Occured Saving Data.";
					}
 	 			}//if $receiptsIssued
 	 			else{
 	 				$_REQUEST['msg_error'] = "Cannot Edit Record. Reason:Receipts Have Been Issued To This Sale.";
 	 			}
  			}
  		}
 	 return "form"; 
	} 
} 

function EditSalesRecord($salesrefno,$customercode,$location,$project,$originalblockrefno,$newblockrefno,$pplan,$dueday,$agreementstartdate){
	
	$pplaobj = SalesManager::getInstance()->getPaymentPlanByPK($pplan);
	$installments = 0;
	if(sizeof($pplan)!=0){
		$desc = $pplaobj->getDescription();
		$installments = $pplaobj->getNofinstallments();
		$installamt = $pplaobj->getInstallamount();
		$totpayable = $pplaobj->getTotalpayable();
	}
	
	
	//------------convert due day in to a valid date format-----------------
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
	
	if($newblockrefno != $originalblockrefno){ //a change has been done to the block number
		$setblocksoldout = SalesManager::getInstance()->setBlockSoldOut($newblockrefno,$customercode);
		$unsetBlock = SalesManager::getInstance()->UnsetBlockSoldOut($originalblockrefno,$customercode);
	}
	
	$editSale = SalesManager::getInstance()->EditSalesRecord($salesrefno,$customercode,$location,$project,$newblockrefno,
									  		$pplan,$installments,$desc,$installamt,$totpayable,
									  		$dueday,$agreementstartdate,$agreementexpdate);
																 
	return $editSale;
	
}


?>