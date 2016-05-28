<?php 
 include_once("action/Action.php");
 require_once("ReceiptsManager.php");
 require_once("sales/SalesManager.php");
 require_once("customer/customerFunctions.php");
 include_once("receiptFunctions.php");
 
 include_once("banksArray.php");
 //receipt_fpdf.php
 class PrintReceiptAction implements Action{ 
 	
 	 public function execute(){ 
  		//showActionFileOutput(20);
                global $banks;
  		$receiptno = $_POST['selectedrow'];
  		$receipt_obj = ReceiptsManager::getInstance()->getReceipstByPK($receiptno);
  		$receiptmetodofpmnt_obj = ReceiptsManager::getInstance()-> getMethodOfPaymentByReceiptNo($receiptno);
 	 	if(sizeof($receipt_obj) == 1){
 	 		$salerefno = $receipt_obj->getSalerefno();
 	 		$locationcode = $receipt_obj->getLocationcode();
 	 		$projectcode = $receipt_obj->getProjectcode();
 	 		$blocrefno = $receipt_obj->getBlocknumber();
 	 		$customercode = $receipt_obj->getCustomercode();
 	 		$receiptdate = new DateTime($receipt_obj->getReceiptdate());
 	 		$newreceiptdate = $receiptdate->format("d-M-Y");
                        $receipttime = new DateTime($receipt_obj->getAddedtime());
                        $receipttime = $receipttime->format("H:i");
 	 		$receipttotal = $receipt_obj->getPaidamount();
 	 		$receiptAddedby = $receipt_obj->getAddedby();
 	 		
 	 		$paidforindex = $receipt_obj->getPaidfor();
 	 		//$paidforindex = "RC";
 	 		$pfor = displayPaidfor($paidforindex); 
 	 		//echo $paidfor[$paidforindex];
 	 		
 	 		$cheque_amt = $receipttotal;
			if(is_numeric($cheque_amt)){
				if(!is_decimal($cheque_amt)){
						try
					    {
					    	 $amountinwords = convert_number($cheque_amt)." Rupees Only.";
					    }
						catch(Exception $e)
					    {
					    	echo $e->getMessage();
					    }
				}else{
					$cheque_amt_decimal = explode(".",$cheque_amt);
					
						try
					    {
					    	$rupees = convert_number($cheque_amt_decimal[0]);
					    	$cents = convert_number($cheque_amt_decimal[1]);
					    	$amountinwords =  "$rupees Rupees And Cents $cents Only.";
					    	
					    }
						catch(Exception $e)
					    {
					    	echo $e->getMessage();
					    } 
				}
			//echo "$cheque_amt <br>";
			//echo $amountinwords;
			}
 	 		
 	 	}
  		
  		$location_obj = ReceiptsManager::getInstance()->getLocationByPK($locationcode);
			if(isset($location_obj)){
				$locationNname = $location_obj->getLocationname();
			}
							
		$project_obj = ReceiptsManager::getInstance()->getProjectByPK($projectcode);
			if(isset($project_obj)){
				$projectName = $project_obj->getProjectname();
			}
							
		$prjectdls_obj = ReceiptsManager::getInstance()->getBlockNumberByPK($blocrefno);
			if(isset($prjectdls_obj)){
				$blockNo = $prjectdls_obj->getBlocknumber();
				$blockPrice = $prjectdls_obj->getBlockprice();	
			}
							
		$customer_obj = ReceiptsManager::getInstance()->getCustomerByPK($customercode);
			if(isset($customer_obj)){
				$customerName = $customer_obj->getTitle().". ";
				$customerName .= strtoupper($customer_obj->getFirstname())." ";
				$customerName .= strtoupper($customer_obj->getFamilyname())." ";
				$customerName2 = htmlspecialchars_decode ($customer_obj->getAddressline1().", ".$customer_obj->getAddressline2().", ".$customer_obj->getPostcode().", ".$customer_obj->getCountry());
				//htmlspecialchars_decode -> avoid printing '&quot' for double quotations
			}

		$user = ReceiptsManager::getInstance()->getUserNameByUserId();
		if(sizeof($user) == 1){
			$username = $user->getLoginname();
		}

		$rcptaddedbyobj = ReceiptsManager::getInstance()->getReceiptAddedbyUserName($receiptAddedby);
		if(sizeof($rcptaddedbyobj) == 1){
			$rcptaddedbyname = $rcptaddedbyobj->getLoginname();
		}	
			//---------------------------------------------------------------------------------------------
			
			include_once('receipt_fpdf.php');
			$pdf = new FPDF('L','mm','A5');
			$pdf->AddFont('FMMalithix','','FM_MALIT.php');
			
			$pdf->AddPage();
			//$pdf->Ln(4);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(95,4,"RECEIPT No: 00$receiptno",0,0,'R');
			$pdf->SetFont('Arial','I',8);
			//$pdf->Cell(95,4,"(Reg.No.PV-21702)",0,1,'R');
			$pdf->Cell(95,4,"",0,1,'R');
			
			$pdf->SetFont('Arial','',10);
		
			$pdf->Cell(190,2," ",0,1,'L');
			$pdf->Cell(35,4,"Received from",0,0,'L');
			$pdf->Cell(95,4,"",0,0,'L');
			$pdf->Cell(15,4,"Date/",0,0,'R');
			$pdf->SetFont('FMMalithix','',10);
			$pdf->Cell(15,4,"oskh(",0,0,'L');
			$pdf->SetFont('Arial','',10);
			$pdf->Cell(30,4,"$newreceiptdate",0,1,'R');
			$pdf->SetFont('FMMalithix','',10);
			$pdf->Cell(35,4,"f.jq whf.a ku(",0,0,'L');
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(155,4,"$customerName",0,1,'L');
			$pdf->Cell(35,4,"",0,0,'L');
			$pdf->SetFont('Arial','I',10);
			$pdf->Cell(155,4,"$customerName2",0,1,'L');
						
//			$pdf->Cell(190,1,"",1,1,'L');
//			$pdf->SetFont('Arial','',10);
//			$pdf->Cell(15,4,"Details/",1,0,'L');
//			$pdf->SetFont('FMMalithix','',10);
//			$pdf->Cell(15,4,"jssia;rh(",1,0,'L');			
//			$pdf->SetFont('Arial','',10);
//			$pdf->Cell(35,4,$pfor,1,0,'L');
//			$pdf->Cell(125,4,"",1,1,'L');
						
			$pdf->Cell(190,2,"",0,1,'L');
			$pdf->Cell(15,4,"Details/",0,0,'L');
			$pdf->SetFont('FMMalithix','',10);
			$pdf->Cell(15,4,"jssia;rh(",0,0,'L');
			$pdf->SetFont('Arial','',10);
			$pdf->Cell(35,4,"} $pfor",0,0,'L');			
						
			$pdf->Cell(35,4,"Name Of Scheme",0,1,'L');
			$pdf->SetFont('FMMalithix','',10);
			$pdf->Cell(65,4,"",0,0,'L');
			$pdf->Cell(35,4,"ksjdi ixlSrKfha ku(",0,0,'L');
			$pdf->SetFont('Arial','',10);
			$pdf->Cell(90,4,"} $locationNname - $projectName",0,1,'L');
			
			$pdf->Cell(190,1,"",0,1,'L');
			$pdf->Cell(65,4,"",0,0,'L');
			$pdf->Cell(35,4,"House Number",0,1,'L');
			$pdf->Cell(65,4,"",0,0,'L');
			$pdf->SetFont('FMMalithix','',10);
			$pdf->Cell(35,4,"ksjfia wxlh(",0,0,'L');
			$pdf->SetFont('Arial','',10);
			$pdf->Cell(90,4,"} $blockNo",0,1,'L');
			
			$pdf->Cell(190,1,"",0,1,'L');
			$pdf->Cell(65,4,"",0,0,'L');
			$pdf->Cell(35,4,"Value Of House Rs.",0,1,'L');
			$pdf->SetFont('FMMalithix','',10);
			$pdf->Cell(65,4,"",0,0,'L');
			$pdf->Cell(35,4,"ksjfia jgskdlu re'",0,0,'L');
			$pdf->SetFont('Arial','',10);
			$pdf->Cell(90,4,"} ".number_format($blockPrice,2),0,1,'L');
			
//			$pdf->SetFont('FMMalithix','',10);
//			$pdf->Cell(35,4,"ksjfia jgskdlu re'",0,0,'L');
//			$pdf->SetFont('Arial','',10);
//			$pdf->Cell(50,4,number_format($blockPrice,2),0,1,'L');
			
			$pdf->Cell(190,2,"",0,1,'L');
			
			

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(30,4,"Mode Of Payment/",0,0,'L');
			$pdf->SetFont('FMMalithix','',10);
			$pdf->Cell(30,4," f.jQ wdldrh ",0,0,'L');
			$pdf->Cell(81,4,"",0,0,'L');
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(24.5,4,"Amount/",0,0,'R');
			$pdf->SetFont('FMMalithix','',10);
			$pdf->Cell(24.5,4,"jgskdlu",0,1,'L');
			
			$pdf->SetFont('Arial','',10);
			
			if(sizeof($receiptmetodofpmnt_obj) > 0){
				foreach($receiptmetodofpmnt_obj As $rcmpnt){
					$methodofpayment = $rcmpnt->getReceiptstatus();
					$bank = $rcmpnt->getBank();
					$chequeno = $rcmpnt->getChequnumber();
					$amount = $rcmpnt->getAmount();
					//$totalpaid += $amount;
					
					if($methodofpayment == "CA"){
						/*$pdf->Cell(47,5,"CASH",0,0,'L');
						$pdf->Cell(47,4,"--",0,0,'C');
						$pdf->Cell(47,4,"--",0,0,'C');
						$pdf->Cell(49,4,number_format($amount,2),0,1,'R');*/
                                                 
                                                /*
                                                 * upon request of mr.duminda printing the 'amouunt twice' as to what he sees it as.
                                                 * makes a confusion with customers refunding the amount in the receipt 
                                                 * modified on 4th June 2015
                                                 */
                                            
                                                $pdf->Cell(47,5,"CASH",0,0,'L');
						$pdf->Cell(47,4," ",0,0,'C');
						$pdf->Cell(47,4," ",0,0,'C');
						$pdf->Cell(49,4," ",0,1,'R');
					}
					
					if($methodofpayment == "BD"){
						$pdf->Cell(47,5,"BANK DEPOSIT : ".$banks[$rcmpnt->getBank()],0,0,'L');
						$pdf->Cell(47,4,"***",0,0,'C');
						$pdf->Cell(47,4,"***",0,0,'C');
						//$pdf->Cell(49,4,number_format($amount,2),0,1,'R');
                                                $pdf->Cell(49,4," ",0,1,'R');
					}
					
					if($methodofpayment == "CH"){
						$pdf->Cell(47,4,"CHEQUE",0,0,'L');
						$pdf->Cell(47,4,$banks[$bank],0,0,'L');
						$pdf->Cell(47,4,"$chequeno",0,0,'L');
						//$pdf->Cell(49,4,number_format($amount,2),0,1,'R');
                                                $pdf->Cell(49,4," ",0,1,'R');
					}
					
				}
			}
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(81,4,"",0,0,'R');
			$pdf->Cell(30,4,"Amount Paid /",0,0,'R');
			$pdf->SetFont('FMMalithix','',10);
			$pdf->Cell(30,4," f.jQ uqo,(",0,0,'L');
			$pdf->SetFont('Arial','BU',10);
			$pdf->Cell(49,4,number_format($receipttotal,2),0,1,'R');
			
			$pdf->Cell(190,2,"",0,1,'R');
			$pdf->SetFont('Arial','I',9);
			$pdf->Cell(190,3,"($amountinwords)",0,1,'R');
			
			$pdf->SetFont('Arial','',8);
			$pdf->Cell(190,4,"This receipt is not valid until cheque subject to realization.",0,1,'L');
			$pdf->SetFont('FMMalithix','',8);
			$pdf->Cell(190,4,"fplam;a uqo,a j,g mrsjra;kh jk f;la fuh j,x.= fkdfjs'",0,1,'L');
			
			//$pdf->Cell(190,1," ",1,1,'R');
			$pdf->Cell(160,4,"",0,0,'R');
			$pdf->SetFont('FMMalithix','',10);
			$pdf->Cell(15,18,"uqoaorh",1,1,'C');
			$pdf->SetFont('Arial','',10);
			//$pdf->Cell(190,4,"_______________________",0,1,'R');
			$pdf->SetFont('Arial','',8);
			$pdf->Cell(95,4,"Prepared By:$rcptaddedbyname, Printed By:$username, Reference: SRF$salerefno/CCD$customercode, Time: $receipttime ",0,0,'LR');
			$pdf->SetFont('Arial','',10);
			//$pdf->Cell(95,4,"Authorised Signature",0,1,'R');
			
//			$pdf->SetFont('Arial','',8);
//			$pdf->Cell(190,4,"Prepare By:$username, Reference: $salerefno/$customercode",0,1,'L');
			
//			$pdf->SetXY(70,32);
//			$pdf->Cell(141,4,"Signature",1,1,'R');
			
			
			$pdf->Output("receipt.pdf",'D');
			
			
			
 	 return "print"; 
	} 
} 
?>