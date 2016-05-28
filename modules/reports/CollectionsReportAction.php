<?php 
 include_once("action/Action.php");
 require_once("ReportsManager.php");
 require_once("customer/customerFunctions.php");
 
 class CollectionsReportAction implements Action{ 
 	 
 	public function execute(){ 
  		//showActionFileOutput(20);
  		if(isset($_POST['rptcode1'])){
  			$start_dt_rpt1 = strtotime($_POST['start_dt_rpt1']);
  			$end_dt_rpt1 = strtotime($_POST['end_dt_rpt1']);
  			$projectcode = $_POST['projects_withAll'];
                        $cashier = $_POST['CashierListing'];
  			$projectname = "";
                        
                        $cashierObj = UserManager::getInstance()->getuserByUID($cashier);
                        $cashierName = '';
                        if($cashierObj){
                            $cashierName = $cashierObj->getloginname();
                        }else{
                            $cashierName = 'All';
                        }
                        
  			if($projectcode == 0){
  				$collectionList = ReportsManager::getInstance()->getReceiptsForCollectionReports($start_dt_rpt1,$end_dt_rpt1,$cashier);
  				$projectname = "All Projects";	
  			}else{
  				$collectionList = ReportsManager::getInstance()->getReceiptsForCollectionReports_ByProject($start_dt_rpt1,$end_dt_rpt1,$projectcode,$cashier);
  				//get project name
  				$project = ReportsManager::getInstance()->getProjectByPK($projectcode);
 	 			if(sizeof($project) == 1){
 	 				$projectname = $project->getProjectname();
 	 			}
  			}
  			
  			if(sizeof($collectionList) > 0){
//  				$chequesArray = Array();
//  				$cashArray = Array();
//  				$bdArray = Array(); 				
				$heading = "Collections Report From: ".$_POST['start_dt_rpt1']."  To: ".$_POST['end_dt_rpt1']." Of $projectname "." User: $cashierName";
  				
  				include_once('reports_fpdf.php');
				$pdf = new FPDF('p','mm','A4');
				$pdf->SetPageHeadning("$heading");
				$pdf->AddPage();
				
				//$pdf->SetFont('Arial','',10);								
				//$pdf->Cell(190,10,"Collections Report",0,1,'C');
				//$pdf->Cell(190,4,"From: ".$_POST['start_dt_rpt1']."  To: ".$_POST['end_dt_rpt1'],0,1,'C');
				
				$pdf->SetFont('Arial','B',8);
				$pdf->Cell(23.75,4,"Receipt#",0,0,'C');
				//$pdf->Cell(20,4,"ReceiptBook",0,0,'C');
				$pdf->Cell(20,4,"Block#",0,0,'C');
				$pdf->Cell(23.75,4,"Date",0,0,'C');
				$pdf->Cell(95,4,"Description",0,0,'C');
				$pdf->Cell(27.5,4,"Amount",0,1,'R');
					
					$bd_total = 0;
                    $cheque_total = 0;
                    $cash_total = 0;
					
				foreach($collectionList As $cl){
					$receiptNo = $cl->getReceiptno();
					$rcptbookNo = $cl->getOldreceiptno();
					$receiptDate = $cl->getReceiptdate();
					$receiptTotal = $cl->getPaidamount();
					$customer_code = $cl->getCustomercode();
					$blockrefno = $cl->getBlocknumber();
					$blocknumber = "";
//					$methodofPayment = ReportsManager::getInstance()->getReceiptsMethodOfPayment($receiptNo);
					//$pdf->Cell(190,10,"$receiptNo",1,1,'L');
					
					$customer = ReportsManager::getInstance()->getCustomerByPK($customer_code);
  					if(sizeof($customer) == 1){
  						$customer_name = substr($customer->getFirstname(). " ".$customer->getFamilyname(),0,59);
  					}
					
  					$block = ReportsManager::getInstance()->getBlockNoByPK($blockrefno);
  					if(sizeof($block) == 1){
  						$blocknumber = $block->getBlocknumber();
  					}
  					
					$pdf->SetFont('Arial','',10);
					//$pdf->Cell(190,6,"Receipt Number: $receiptNo	Date: $receiptDate   ",0,1,'L');
					
					$methodofPayment = ReportsManager::getInstance()->getReceiptsMethodOfPayment($receiptNo);
					
					foreach($methodofPayment As $mop){
						$pdf->SetFont('Arial','',8);
						$pdf->Cell(23.75,4,"$receiptNo",0,0,'C');
						//$pdf->Cell(20,4,"$rcptbookNo",0,0,'C');
						$pdf->Cell(20,4,"$blocknumber",0,0,'R');		
						$pdf->Cell(23.75,4,"$receiptDate   ",0,0,'C');	
						$receiptstatus = $mop->getReceiptstatus();
														
							if($receiptstatus == "CH"){
                                                                                                                     
								$cheque_no = $mop->getChequnumber();
								$cheque_bank = $mop->getBank();
								$cheque_amt = $mop->getAmount();
								$cheque_total += $cheque_amt;
								$pdf->Cell(47.5,4,"[Cheq]$customer_name",0,0,'L');
								$pdf->Cell(47.5,4,"$cheque_bank  $cheque_no",0,0,'L');
								$pdf->Cell(27.5,4,number_format($cheque_amt,2),0,1,'R');
								
							}else if($receiptstatus == "CA"){
								$cash_amt = $mop->getAmount();
								$cash_total += $cash_amt;
								$pdf->Cell(95,4,"[Cash]		$customer_name",0,0,'L');
								$pdf->Cell(27.5,4,number_format($cash_amt,2),0,1,'R');
							}
							else if($receiptstatus == "BD"){
								$bd_amt = $mop->getAmount();
								$bd_total += $bd_amt;
								$pdf->Cell(95,4,"[Bank]		$customer_name",0,0,'L');
								$pdf->Cell(27.5,4,number_format($bd_amt,2),0,1,'R');
							}
								
					}
					//$pdf->Cell(95,4,"Receipt Total",1,0,'R');
					//$pdf->Cell(47.5,4,number_format($receiptTotal,2),1,1,'R');
					//*********************Method of Payments*********************************************************
					
//					if(sizeof($methodofPayment)>0){
//						foreach($methodofPayment As $mop){
//							$receiptstatus = $mop->getReceiptstatus();
//							
//							//+++++++++++++++++++cheques++++++++++++++++++
//							if($receiptstatus == "CH"){
//								$cheque_no = $mop->getChequnumber();
//								$cheque_bank = $mop->getBank();
//								$cheque_amt = $mop->getAmount();
//								$cheque_total += $cheque_amt;
//								
//								$chequesArray[$cheque_no] = "$cheque_bank:$cheque_amt";
//							}
//							//++++++++++++++++++++++++++++++++++++++++++++
//							
//							//+++++++++++++++++++cash++++++++++++++++++++
//							else if($receiptstatus == "CA"){
//								
//								$cash_amt = $mop->getAmount();
//								$cash_total += $cash_amt;
//								
//								$cashArray[] = $cash_amt;
//							}
//							//++++++++++++++++++++++++++++++++++++++++++++
//							
//							//+++++++++++++++++++bank deposit+++++++++++++
//							else if($receiptstatus == "BD"){
//								
//								$bd_amt = $mop->getAmount();
//								$bd_total += $bd_amt;
//								
//								$bdArray[] = $bd_amt;
//							}
//							//++++++++++++++++++++++++++++++++++++++++++++
//							
//							
//						}//foreach($methodofPayment)
//					}//if(sizeof($mthodofPayment)
					
					//*************************************************************************************
					//$pdf->Cell(190,2," ",0,1,'L');
				}//foreach($collectionList)
				
				
				//**************************print to pdf**********************************************************
//				include_once('reports_fpdf.php');
//				$pdf = new FPDF('p','mm','A4');
//				$pdf->AddPage();
//				//$pdf->Ln(4);
//				$pdf->SetFont('Arial','',10);
//				
//				$pdf->Cell(190,10,"Collections Report",0,1,'C');
//				$pdf->Cell(190,4,"From: ".$_POST['start_dt_rpt1']."  To: ".$_POST['end_dt_rpt1'],0,1,'C');
//				
//				
//				$pdf->Cell(190,6,"CHEQUES",0,1,'L');
				
//					foreach($chequesArray As $key=>$value){
//						$pdf->Cell(47.5,4,"$key",1,0,'L');
//						$splitvalue = explode(":",$value);
//						$pdf->Cell(47.5,4,$splitvalue[0],1,0,'L');//bank
//						$pdf->Cell(47.5,4,number_format($splitvalue[1],2),1,1,'R');//amount
//						
//					}
//					
//					$pdf->SetFont('Arial','BI',10);
//					$pdf->Cell(142.5,4,"Cheques Total : ".number_format($cheque_total,2),1,1,'R');//bank
//					$pdf->SetFont('Arial','',10);
//					
//										
//					$pdf->Cell(190,6,"CASH",0,1,'L');
//					foreach($cashArray As $ca){
//						$pdf->Cell(95,4,"Cash Payment",1,0,'L');
//						$pdf->Cell(47.5,4,number_format($ca,2),1,1,'R');
//					}
//					
//					$pdf->SetFont('Arial','BI',10);
//					$pdf->Cell(142.5,4,"Cash Total : ".number_format($cash_total,2),1,1,'R');//bank
//					$pdf->SetFont('Arial','',10);
//					
//					
//					
//					$pdf->Cell(190,6,"BANK DEPOSITS",0,1,'L');
//					foreach($bdArray As $bd){
//						$pdf->Cell(95,4,"Bank Deposit",1,0,'L');
//						$pdf->Cell(47.5,4,number_format($bd,2),1,1,'R');
//					}
//					
//					$pdf->SetFont('Arial','BI',10);
//					$pdf->Cell(142.5,4,"Bank Deposit Total : ".number_format($bd_total,2),1,1,'R');//bank
					
                                        $pdf->SetFont('Arial','',8);
					$pdf->Cell(47.5,4,"Total Cheques",0,0,'R');
					$pdf->Cell(47.5,4,number_format($cheque_total,2),0,1,'R');
					
					$pdf->Cell(47.5,4,"Total Cash",0,0,'R');
					$pdf->Cell(47.5,4,number_format($cash_total,2),0,1,'R');
					
					$pdf->Cell(47.5,4,"Total Bank Deposits",0,0,'R');
					$pdf->Cell(47.5,4,number_format($bd_total,2),0,1,'R');
					
					$totalcollection = $cheque_total + $cash_total + $bd_total;
					//$pdf->Cell(190,4,"",0,1,'R');
					$pdf->SetFont('Arial','B',8);
					$pdf->Cell(47.5,4,"Total Collection",0,0,'R');
					$pdf->SetFont('Arial','BU',8);
					$pdf->Cell(47.5,4,number_format($totalcollection,2),0,1,'R');
					//$pdf->Cell(142.5,6,"Total Collections : ".number_format($totalcollection,2),0,1,'R');//bank
					
					$pdf->SetFont('Arial','',10);
				$pdf->Output("collection_report.pdf",'D');
				//************************************************************************************************
				
				
  			}
  		}
 	 return "print"; 
	} 
} 
?>