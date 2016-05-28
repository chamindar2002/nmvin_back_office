<?php
include_once("action/Action.php");
require_once("ReportsManager.php");
require_once("customer/customerFunctions.php");
require_once 'receipts/banksArray.php';

class CollectionReportByBankAction implements Action{
    
    public function execute(){ 
  		//showActionFileOutput(20);
                  global $banks;
                  if(isset($_POST['rptcode9'])){
  			$start_dt_rpt1 = strtotime($_POST['start_dt_rpt9']);
  			$end_dt_rpt1 = strtotime($_POST['end_dt_rpt9']);
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
				$heading = "Collections Report of ASIA ASSET From: ".$_POST['start_dt_rpt9']."  To: ".$_POST['end_dt_rpt9']." Of Manchester City "." User: $cashierName";
  				
  				include_once('reports_fpdf.php');
				$pdf = new FPDF('p','mm','A4');
				$pdf->SetPageHeadning("$heading");
				$pdf->AddPage();
				
				//$pdf->SetFont('Arial','',10);								
				//$pdf->Cell(190,10,"Collections Report",0,1,'C');
				//$pdf->Cell(190,4,"From: ".$_POST['start_dt_rpt9']."  To: ".$_POST['end_dt_rpt9'],0,1,'C');
				
				$pdf->SetFont('Arial','B',8);
				$pdf->Cell(23.75,4,"Receipt#",0,0,'C');
				//$pdf->Cell(20,4,"ReceiptBook",0,0,'C');
				$pdf->Cell(20,4,"Block#",0,0,'C');
				$pdf->Cell(23.75,4,"Date",0,0,'C');
				$pdf->Cell(95,4,"Name",0,0,'L');
				$pdf->Cell(27.5,4,"Amount",0,1,'R');
					
                    $bd_total = 0;
                    $cheque_total = 0;
                    $cash_total = 0;
                    $total_by_date = array();
					
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
                                            
                                            if($mop->getBank() == 'ASST'){
						$pdf->SetFont('Arial','',8);
						$pdf->Cell(23.75,4,"$receiptNo",0,0,'C');
						//$pdf->Cell(20,4,"$rcptbookNo",0,0,'C');
						$pdf->Cell(20,4,"$blocknumber",0,0,'R');		
						$pdf->Cell(23.75,4,"$receiptDate   ",0,0,'C');	
						$receiptstatus = $mop->getReceiptstatus();
														
							if($receiptstatus == "CH"){
                                                                                                                     
								$cheque_no = $mop->getChequnumber();
								$cheque_bank = $banks[$mop->getBank()];
								$cheque_amt = $mop->getAmount();
								$cheque_total += $cheque_amt;
                                                                if(isset($total_by_date[$receiptDate])){
                                                                    $total_by_date[$receiptDate] += $cheque_amt;
                                                                }else{
                                                                    $total_by_date[$receiptDate] = $cash_amt;
                                                                }
								$pdf->Cell(47.5,4,"[Cheq]$customer_name",0,0,'L');
								$pdf->Cell(47.5,4,"$cheque_bank  $cheque_no",0,0,'L');
								$pdf->Cell(27.5,4,number_format($cheque_amt,2),0,1,'R');
								
							}else if($receiptstatus == "CA"){
								$cash_amt = $mop->getAmount();
								$cash_total += $cash_amt;
                                                                 if(isset($total_by_date[$receiptDate])){
                                                                    $total_by_date[$receiptDate] += $cash_amt;
                                                                 }else{
                                                                     $total_by_date[$receiptDate] = $cash_amt;
                                                                 }
								$pdf->Cell(95,4,"[Cash]		$customer_name",0,0,'L');
								$pdf->Cell(27.5,4,number_format($cash_amt,2),0,1,'R');
							}
							else if($receiptstatus == "BD"){
								$bd_amt = $mop->getAmount();
                                                                $cheque_bank = $banks[$mop->getBank()];
								$bd_total += $bd_amt;
                                                                if(isset($total_by_date[$receiptDate])){
                                                                    $total_by_date[$receiptDate] += $bd_amt;
                                                                }else{
                                                                    $total_by_date[$receiptDate] = $bd_amt;
                                                                }
								$pdf->Cell(47.5,4,"$customer_name",0,0,'L');
                                                                //$pdf->Cell(47.5,4,"$cheque_bank",0,0,'L');
                                                                $pdf->Cell(47.5,4,"",0,0,'L');
								$pdf->Cell(27.5,4,number_format($bd_amt,2),0,1,'R');
							}
                                                        
                                            }
								
					}

				}//foreach($collectionList)
				
				

                                       /* $pdf->SetFont('Arial','',8);
					$pdf->Cell(47.5,4,"Total Cheques",0,0,'R');
					$pdf->Cell(47.5,4,number_format($cheque_total,2),0,1,'R');
					
					$pdf->Cell(47.5,4,"Total Cash",0,0,'R');
					$pdf->Cell(47.5,4,number_format($cash_total,2),0,1,'R');
					
					$pdf->Cell(47.5,4,"Total Bank Deposits",0,0,'R');
					$pdf->Cell(47.5,4,number_format($bd_total,2),0,1,'R'); */
					
					$totalcollection = $cheque_total + $cash_total + $bd_total;
					//$pdf->Cell(190,4,"",0,1,'R');
					
                                        /*$pdf->SetFont('Arial','B',8);
					$pdf->Cell(47.5,4,"Total Collection",0,0,'R');
					$pdf->SetFont('Arial','BU',8);
					$pdf->Cell(47.5,4,number_format($totalcollection,2),0,1,'R');*/
                                        
					//$pdf->Cell(142.5,6,"Total Collections : ".number_format($totalcollection,2),0,1,'R');//bank
					//------------------------------------------------
                                        $pdf->SetFont('Arial','B',8);
                                        foreach($total_by_date As $k=>$v){
                                            $pdf->Cell(47.5,4,$k,0,0,'R');
                                            $pdf->Cell(47.5,4,number_format($v,2),0,1,'R');
                                        }
                                        //-----------------------------------------------
                                        $pdf->SetFont('Arial','B',8);
					$pdf->Cell(47.5,4,"Total Collection",0,0,'R');
					$pdf->SetFont('Arial','BU',8);
					$pdf->Cell(47.5,4,number_format($totalcollection,2),0,1,'R');
                                        
					$pdf->SetFont('Arial','',10);
				$pdf->Output("collection_report_asia_asset.pdf",'D');
				//************************************************************************************************
				
				
  			}
  		}
 	 return "print"; 
	}
    
}

?>
