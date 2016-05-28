<?php 
 include_once("action/Action.php");
 require_once("ReceiptsManager.php");
 require_once("sales/SalesManager.php");
 require_once("customer/customerFunctions.php");
 require_once 'reports/report_sql.php';
 require_once('components/textHandler.php');
 require_once 'FacilityExportValidator.php';
 
 class AddNewReceiptAction implements Action{ 
 	 public function execute(){ 
 	 //showActionFileOutput(20);
 	 if(isset($_POST['search'])){

 	 		$searchby = $_POST['searchcriteria'];
	  		$searchfor = $_POST['searchkeywordbox'];
	  		//$searchresult = "";
	  		//$salesresult = "";
	  		
	  			switch($searchby)
	  			{
	  				case 0:
	  					$searchresult = SalesManager::getInstance()->searchCustomerByPassportNumber($searchfor);
	  					if(sizeof($searchresult) > 0){
	  						$salesresult = ReceiptsManager::getInstance()->getSalesDetailsByCustomerCode($searchresult->getCustomercode());
	  					}
	  					//echo $searchresult->getCustomercode();
	  					break;
	  				case 1:
	  					$searchresult = SalesManager::getInstance()->searchCustomerByCustomerCode($searchfor);
	  					if(sizeof($searchresult) > 0){ 
	  						$salesresult = ReceiptsManager::getInstance()->getSalesDetailsByCustomerCode($searchresult->getCustomercode());
	  					}
	  					//echo $searchresult->getCustomercode(); 					
	  					break;
	  				case 2:
	  					$projectcode = $_POST['projects'];
	  					$blockref_number = $_POST['drop_blocklisting'];
	  					//$searchresult = ReceiptsManager::getInstance()->getCustomercodeByProjectAndBlockNumber($projectcode,$blockref_number);
	  					$projectdetails = ReceiptsManager::getInstance()->getCustomercodeByProjectAndBlockNumber($projectcode,$blockref_number);
	  					echo " projectdetails: ".sizeof($projectdetails);
	  					if(sizeof($projectdetails) == 1){
	  						
	  						$searchresult = SalesManager::getInstance()->searchCustomerByCustomerCode($projectdetails->getCustomercode());
		  			
	  					}
	  					
	  					if(sizeof($searchresult) > 0){ 
	  						$salesresult = ReceiptsManager::getInstance()->getSalesDetailsByCustomerCode($searchresult->getCustomercode());
	  					}
	  						
	  					break;	  				
	  			}
	  			
	  			//$locations = SalesManager::getInstance()->listLocations();
	  			
		  		$_REQUEST['searchresults'] = $searchresult;
		  		$_REQUEST['salesresults'] = $salesresult;
 	 	}
 	 	else if(isset($_POST['totalpaid'])){
 	 		$totalpaid = $_POST['totalpaid'];
 	 		$salerefno = $_POST['salerefno'];
 	 		$paidfor = $_POST['paidfor'];
 	 		$rcptbookno = $_POST['rcptbookno'];
 	 		
 	 		if($totalpaid != 0){
 	 			
 	 			$saledetails = ReceiptsManager::getInstance()->getSaleDetailsByPK($salerefno);
 	 			if(sizeof($saledetails) == 1){
 	 				$locationcode = $saledetails->getLocationcode();
 	 				$projectcode = $saledetails->getProjectcode();
 	 				$customercode = $saledetails->getCustomercode();
 	 				$blocknumber = $saledetails->getBlockrefnumber();
 	 				$receiptdate = strtotime($_POST['start_dt']);
 	 				 	 				
 	 				
 	 				//**********************************************************************************
 	 				
 	 				//orignal data duplication restriction code.....
 	 				
 	 				//$checkreceiptexists = ReceiptsManager::getInstance()->checkifreceiptexists($salerefno,$locationcode,$projectcode,$customercode,$receiptdate,$blocknumber,$totalpaid,$paidfor);
 	 				
 	 				//later this code had to be added instead of the original duplication restriction code.
 	 				
 	 				//echo $_POST['submissionId'] ."|".$_SESSION['nextValidSubmission'];
 	 				if($_POST['submissionId'] == $_SESSION['nextValidSubmission']){
 	 					$checkreceiptexists = 0;
 	 					unset($_SESSION['nextValidSubmission']);
 	 				}
 	 				else{
 	 					$checkreceiptexists = 1;
 	 				}
 	 				//**********************************************************************************
                                        
                                    if(!FacilityExportValidator::exec_($salerefno)) {
 	 				if($checkreceiptexists == 0){
	 	 				$newreceipt = ReceiptsManager::getInstance()->AddNewReceipt($salerefno,$locationcode,$projectcode,$customercode,$receiptdate,$blocknumber,$totalpaid,$paidfor,$rcptbookno);
	 	 				if(sizeof($newreceipt) > 0){
	 	 					$receiptno = $newreceipt->getReceiptno();
	 	 					$success = addMethodOfPayment($receiptno);
                                                        
	 	 					if($success != ''){
                                                              $report_sql = new report_sql();
                                                              
                                                              
                                                              /*$measage = "Customer Name :".$_POST['customername2']." \n".
                                                                      "NIC :".$_POST['hcusnic']." \n"
                                                                      ."Receipt Date :".$_POST['start_dt']." \n".
                                                                      "Sale Details :".$_POST['sales_token']." \n".
                                                                      "Payment Type :".$_POST['paymentype']." \n".
                                                                      "Total Amount Paid  :".$_POST['totalpaid'];*/
                                                              $message = array(
                                                                        'Receipt No'=>$receiptno,
                                                                        'Amount Paid'=> number_format($_POST['totalpaid'],2),
                                                                        'Payment Type'=>$_POST['paymentype'],
                                                                        'Sale Details'=>$_POST['sales_token'],
                                                                        'Customer Name'=>$_POST['customername2'],
                                                                        'NIC'=>$_POST['hcusnic'],
                                                                        'payment_type'=>$success,
                                                                  );
                                                              
                                                              //$report_sql->sendSMS('777661702',$measage);
                                                              $txt = textHandler::fireSms(null,$message);
                                                              $_REQUEST['msg_success'] = "New Receipt Addedd Successfully.".var_dump($txt);
	 	 					}else{
	 	 						$_REQUEST['msg_error'] = "Ann Error Occurred Saving Data.";
	 	 					}
	 	 				}
 	 				}	//echo "locationcode-$locationcode ? projectcode-$projectcode ? customercode-$customercode ? blocknumber-$blocknumber ? receiptdate-$receiptdate ? salerefno-$salerefno ? totalpaid-$totalpaid";
                                    }
                                    else{
                                            //die('xxx');
                                            $_REQUEST['msg_error'] = "This sale has been exported to Facility Manager";
                                            return "form";
                                    }
 	 			}
 	 			else{
 	 				$_REQUEST['msg_error'] = "An Error Occurrered Caused By Trying to Duplicate Data";
 	 			}
 	 		} 
 	 		
 	 	}
 	 return "form"; 
	} 
}



function addMethodOfPayment($rno){
	$cashamt = 0; $bankdeposit = 0;$chequeamt = 0;$chqcount = 0;
	if(isset($_POST['cashamt'])){$cashamt = $_POST['cashamt'];}
	if(isset($_POST['chqtotal'])){$chequeamt = $_POST['chqtotal'];}
	if(isset($_POST['dpstamt'])){$bankdeposit = $_POST['dpstamt'];}
	if(isset($_POST['count'])){$chqcount = $_POST['count'];}
        $rstatus = '';
	$chqdetails = array();
	//echo "cashamt $cashamt ? bankdeposit $bankdeposit ? cheqeamt $chequeamt ? cheq count $chqcount <br>";
	for($i=0;$i<=$chqcount;$i++){
		
		$chqdetails[0] = $_POST["chqueno$i"];
		$chqdetails[1] = $_POST["bank$i"];
		$chqdetails[2] = $_POST["amt$i"];
		$chqdetails[3] = $_POST["sel$i"];
		//echo "$chqdetails[0] - $chqdetails[1] - $chqdetails[2] -  $chqdetails[3]<br>";
		if($chqdetails[3] != false){
			
			if($chqdetails[0] != "" && $chqdetails[1] != "" && $chqdetails[2] != ""){
				
				//echo "Add [cheque no->$chqdetails[0]][bank->$chqdetails[1]][amount->$chqdetails[2]]<br>";
				$chqdate = strtotime(date('mm-dd-yyyy'));
				$rstatus="CH";
				addMethodofPaymentToDB($rno,$rstatus,$chqdetails[1],$chqdetails[0],$chqdate,$chqdetails[2]);
			}
		}
		$chqdetails[3] = true;
	}
	
	if($cashamt != "" || $cashamt > 0){
		$chqdate = strtotime(date('mm-dd-yyyy'));
		$rstatus="CA";
		$bankdls = "N/A";
		addMethodofPaymentToDB($rno,$rstatus,$bankdls,$bankdls,$chqdate,$cashamt);
	}
	if($bankdeposit != "" || $bankdeposit >0){
		
		$chqdate = strtotime(date('mm-dd-yyyy'));
		$rstatus="BD";
		$bankdls = "N/A";
		$chqno = "N/A";
		
		//---------------------------------------------------------
		if(isset($_POST['casdepositbank'])){
			$bankdls = $_POST['casdepositbank'];	
		}
		//---------------------------------------------------------
		
		addMethodofPaymentToDB($rno,$rstatus,$bankdls,$chqno,$chqdate,$bankdeposit);
	}
	//echo "[casamt:$cashamt][chqtotal:$chequeamt][bank:$bankdeposit][chequecount:$chqcount]";
	return $rstatus;
}


function addMethodofPaymentToDB($rno,$rstatus,$bank,$chqno,$chqdate,$amount){
	$methodofpayment = ReceiptsManager::getInstance()->addMethodofPaymentDetails($rno,$rstatus,$bank,$chqno,$chqdate,$amount);
}








?>
