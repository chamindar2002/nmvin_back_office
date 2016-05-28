<?php 
 include_once("action/Action.php");
 require_once("customer/customerFunctions.php");
 require_once("ReportsManager.php");
require_once 'reports/report_sql.php';
   
 class BlockAllocationDetailReportAction implements Action{ 
 	 
 	public function execute(){ 
 		
            if(!isset($_POST['xls'])){
                
 	 	if(isset($_POST['rptcode7'])){
 	 		
                    
                    
 	 		$prcode = $_POST['projects5'];
                        
                        //---------------------------------------modified 25/8/2015
                        if(isset($_POST['cust_664'])){ //blocks allocated to mr duminda
                        
                            $prdetailslist = ReportsManager::getInstance()->getProjectDetailsByProjectCustomer($prcode,664);
                        }else{
                            $prdetailslist = ReportsManager::getInstance()->getProjectDetailsByProject($prcode);
                        }
                        
                        
                        //---------------------------------------
 	 		if(sizeof($prdetailslist) > 0){
 	 			$full_pro_name = '';
 	 			$project = ReportsManager::getInstance()->getProjectByPK($prcode);
 	 			if(sizeof($project) == 1){
 	 				$projectname = $project->getProjectname();
 	 				$locationcode = $project->getLocationcode();
                                          $report_sql = new report_sql();
                                          $_location_name = $report_sql->get_location_name($locationcode);
                                          //$projectname."jksdhgfksh";
                                          $full_pro_name = $projectname.' - '.$_location_name;
 	 			}
 	 			$count =  0;
 	 			$heading = "Block Allocation Detail Report of $full_pro_name";
  				
  				include_once('reports_fpdf.php');
				$pdf = new FPDF('p','mm','A4');
				$pdf->SetPageHeadning("$heading");
				$pdf->AddPage();
					
				$pdf->SetFont('Arial','B',9);
				$pdf->Cell(30,4,"Block #",1,0,'C');
				$pdf->Cell(90,4,"Customer",1,0,'C');
				$pdf->Cell(25,4,"House Val",1,0,'L');
				$pdf->Cell(25,4,"Payments",1,0,'L');
				$pdf->Cell(25,4,"Dues",1,1,'L');
				$pdf->SetFont('Arial','',8);
 	 			foreach($prdetailslist As $lst){
 	 				$blockno = $lst->getBlocknumber();
 	 				$blockrefno = $lst->getRefno();
 	 				$customercode = $lst->getCustomercode();
 	 				$salerefno = "-";
 	 				$totalpayable = 0;
 	 				$receipttotal = 0;
 	 				$rightoff_status = false;
 	 				$customer_name = '';
 	 				$customer = ReportsManager::getInstance()->getCustomerByPK($customercode);
  					if(sizeof($customer) == 1){
  						//$customer_name = substr($customer->getFirstname(). " ".$customer->getFamilyname()." [".$customer->getPassportno()."]",0,59);
  						$customer_firstname = substr($customer->getFirstname(). " ".$customer->getFamilyname(),0,70);
  						$customer_otherdtls = " [".$customer->getPassportno()."]  Phone:".$customer->getMobile();
  						//$customer_name = $customer->getFirstname(). " ".$customer->getFamilyname()." [".$customer->getPassportno()."]  Phone:".$customer->getLandline()." Mobile: ".$customer->getMobile();
  						$customer_name = $customer_firstname . $customer_otherdtls;
  						$count++;
  					}
  					
  					
  					//-------------------------------
  					$sale = ReportsManager::getInstance()->getSeleByBlockRefno($blockrefno);
  					if(isset($sale)){
  						$salerefno = $sale->getRefno();
  						$totalpayable = $sale->getTotalpayable();
  						$rightoff_status = $sale->getSalerightoffStatus();
  					}
  					
  					$receipt = ReportsManager::getInstance()->getReceiptsSUMbySaleRefno($salerefno);
  					if($receipt != 0){
  						$receipttotal = $receipt;
  					}
  					//-------------------------------
                                        
                                        //-----------------------added on 04/10/2012------------------
                                        if($customercode == 664){
                                            $pdf->SetTextColor(0,0,255);
                                        }else{
                                            $pdf->SetTextColor(0,0,0);
                                        }
                                        //------------------------------------------------------------
  					
 	 				//echo "$blockno $customer_name<br>";
 	 				$pdf->Cell(30,4,"$blockno",0,0,'L');
 	 				$pdf->SetFont('Arial','',8);
					$pdf->Cell(90,4,"$customer_name",0,0,'L');
 	 				$customer_name = "--";
 	 				$pdf->SetFont('Arial','',8);
 	 				$pdf->Cell(25,4,number_format($totalpayable,2),0,0,'R');
 	 				$pdf->Cell(25,4,number_format($receipttotal,2),0,0,'R');
 	 				
 	 				if($rightoff_status == true){
 	 					$pdf->Cell(25,4,'W/OFF',0,1,'R');
 	 				}else{
                                                /*
                                                 * if its a sold block and dues = 0 then display as 'settled' on the report
                                                 * $totalpayable != 0 means its a sold block
                                                 */
                                                if($totalpayable != 0 && ($totalpayable-$receipttotal) == 0){
                                                    $pdf->Cell(25,4,'SETTLED',0,1,'R');
                                                }else{
                                                    /*
                                                     * else display dues
                                                     */
                                                    $pdf->Cell(25,4,number_format(($totalpayable-$receipttotal),2),0,1,'R');
                                                }
 	 				}
 	 				
 	 			}
 	 			//echo $count;
 	 		}
 	 		$pdf->Cell(190,4,"$count Blocks Sold",1,1,'C');
 	 		$pdf->Output("BlockAllocation_report.pdf",'D');
 	 		
 	 	} 
            }else{
                
                    
 	 		$prcode = $_POST['projects5'];
 	 		$prdetailslist = ReportsManager::getInstance()->getProjectDetailsByProject($prcode);
 	 		if(sizeof($prdetailslist) > 0){
 	 			$full_pro_name = '';
 	 			$project = ReportsManager::getInstance()->getProjectByPK($prcode);
 	 			if(sizeof($project) == 1){
 	 				$projectname = $project->getProjectname();
 	 				$locationcode = $project->getLocationcode();
                                          $report_sql = new report_sql();
                                          $_location_name = $report_sql->get_location_name($locationcode);
                                          //$projectname."jksdhgfksh";
                                          $full_pro_name = $projectname.' - '.$_location_name;
 	 			}
 	 			$count =  0;
 	 			$heading = "Block Allocation Detail Report of $full_pro_name";
  				
                                
                                
  				include_once('reports_fpdf.php');
				$pdf = new FPDF('L','mm','A3');
				$pdf->SetPageHeadning("$heading");
				$pdf->AddPage();
					
				$pdf->SetFont('Arial','B',9);
				$pdf->Cell(30,4,"Block #",1,0,'C');
				$pdf->Cell(90,4,"Customer",1,0,'C');
				$pdf->Cell(25,4,"House Val",1,0,'L');
				$pdf->Cell(25,4,"Payments",1,0,'L');
				$pdf->Cell(25,4,"Dues",1,0,'L');
                                $pdf->Cell(10,4,"Arrears",1,0,'L');
                                $pdf->Cell(10,4,"6/15",1,0,'C');
                                $pdf->Cell(10,4,"7/15",1,0,'C');
                                $pdf->Cell(10,4,"8/15",1,0,'C');
                                $pdf->Cell(10,4,"9/15",1,0,'C');
                                $pdf->Cell(10,4,"10/15",1,0,'C');
                                $pdf->Cell(10,4,"11/15",1,0,'C');
                                $pdf->Cell(10,4,"12/15",1,0,'C');
                                $pdf->Cell(10,4,"1/16",1,0,'C');
                                $pdf->Cell(10,4,"2/16",1,0,'C');
                                $pdf->Cell(10,4,"3/16",1,0,'C');
                                $pdf->Cell(10,4,"4/16",1,0,'C');
                                $pdf->Cell(10,4,"5/16",1,0,'C');
                                $pdf->Cell(10,4,"6/16",1,0,'C');
                                $pdf->Cell(10,4,"7/16",1,0,'C');
                                $pdf->Cell(10,4,"8/16",1,0,'C');
                                $pdf->Cell(10,4,"9/16",1,0,'C');
                                $pdf->Cell(10,4,"10/16",1,0,'C');
                                $pdf->Cell(10,4,"11/16",1,0,'C');
                                $pdf->Cell(10,4,"12/16",1,1,'C');
                                
                                
                                
				$pdf->SetFont('Arial','',8);
                                $i = 1;
                                
                               
                                
 	 			foreach($prdetailslist As $lst){
 	 				$blockno = $lst->getBlocknumber();
 	 				$blockrefno = $lst->getRefno();
 	 				$customercode = $lst->getCustomercode();
 	 				$salerefno = "-";
 	 				$totalpayable = 0;
 	 				$receipttotal = 0;
 	 				$rightoff_status = false;
 	 				$customer_name = '';
 	 				$customer = ReportsManager::getInstance()->getCustomerByPK($customercode);
  					if(sizeof($customer) == 1){
  						//$customer_name = substr($customer->getFirstname(). " ".$customer->getFamilyname()." [".$customer->getPassportno()."]",0,59);
  						$customer_firstname = substr($customer->getFirstname(). " ".$customer->getFamilyname(),0,70);
  						$customer_otherdtls = " [".$customer->getPassportno()."]  Phone:".$customer->getMobile();
  						//$customer_name = $customer->getFirstname(). " ".$customer->getFamilyname()." [".$customer->getPassportno()."]  Phone:".$customer->getLandline()." Mobile: ".$customer->getMobile();
  						$customer_name = $customer_firstname . $customer_otherdtls;
  						$count++;
  					}
  					
  					
  					//-------------------------------
  					$sale = ReportsManager::getInstance()->getSeleByBlockRefno($blockrefno);
  					if(isset($sale)){
  						$salerefno = $sale->getRefno();
  						$totalpayable = $sale->getTotalpayable();
  						$rightoff_status = $sale->getSalerightoffStatus();
  					}
  					
  					$receipt = ReportsManager::getInstance()->getReceiptsSUMbySaleRefno($salerefno);
  					if($receipt != 0){
  						$receipttotal = $receipt;
  					}
  					//-------------------------------
                                        
                                        //-----------------------added on 04/10/2012------------------
                                        if($customercode == 664){
                                            $pdf->SetTextColor(0,0,255);
                                        }else{
                                            $pdf->SetTextColor(0,0,0);
                                        }
                                        //------------------------------------------------------------
                                        if($i == 59){
                                            
                                            $pdf->AddPage();
                                            $pdf->SetFont('Arial','B',9);
                                            $pdf->Cell(30,4,"Block #",1,0,'C');
                                            $pdf->Cell(90,4,"Customer",1,0,'C');
                                            $pdf->Cell(25,4,"House Val",1,0,'L');
                                            $pdf->Cell(25,4,"Payments",1,0,'L');
                                            $pdf->Cell(25,4,"Dues",1,0,'L');
                                            $pdf->Cell(10,4,"Arrears",1,0,'L');
                                            $pdf->Cell(10,4,"6/15",1,0,'C');
                                            $pdf->Cell(10,4,"7/15",1,0,'C');
                                            $pdf->Cell(10,4,"8/15",1,0,'C');
                                            $pdf->Cell(10,4,"9/15",1,0,'C');
                                            $pdf->Cell(10,4,"10/15",1,0,'C');
                                            $pdf->Cell(10,4,"11/15",1,0,'C');
                                            $pdf->Cell(10,4,"12/15",1,0,'C');
                                            $pdf->Cell(10,4,"1/16",1,0,'C');
                                            $pdf->Cell(10,4,"2/16",1,0,'C');
                                            $pdf->Cell(10,4,"3/16",1,0,'C');
                                            $pdf->Cell(10,4,"4/16",1,0,'C');
                                            $pdf->Cell(10,4,"5/16",1,0,'C');
                                            $pdf->Cell(10,4,"6/16",1,0,'C');
                                            $pdf->Cell(10,4,"7/16",1,0,'C');
                                            $pdf->Cell(10,4,"8/16",1,0,'C');
                                            $pdf->Cell(10,4,"9/16",1,0,'C');
                                            $pdf->Cell(10,4,"10/16",1,0,'C');
                                            $pdf->Cell(10,4,"11/16",1,0,'C');
                                            $pdf->Cell(10,4,"12/16",1,1,'C');



                                            $pdf->SetFont('Arial','',8);
                                            $i = 1;
                                        }
 	 				//echo "$blockno $customer_name<br>";
 	 				$pdf->Cell(30,4,"$blockno",0,0,'L');
 	 				$pdf->SetFont('Arial','',8);
					$pdf->Cell(90,4,"$customer_name",0,0,'L');
 	 				$customer_name = "--";
 	 				$pdf->SetFont('Arial','',8);
 	 				$pdf->Cell(25,4,number_format($totalpayable,2),0,0,'R');
 	 				$pdf->Cell(25,4,number_format($receipttotal,2),0,0,'R');
 	 				
 	 				if($rightoff_status == true){
 	 					$pdf->Cell(25,4,'W/OFF',0,0,'R');
 	 				}else{
                                                /*
                                                 * if its a sold block and dues = 0 then display as 'settled' on the report
                                                 * $totalpayable != 0 means its a sold block
                                                 */
                                                if($totalpayable != 0 && ($totalpayable-$receipttotal) == 0){
                                                    $pdf->Cell(25,4,'SETTLED',0,0,'R');
                                                }else{
                                                    /*
                                                     * else display dues
                                                     */
                                                    $pdf->Cell(25,4,number_format(($totalpayable-$receipttotal),2),0,0,'R');
                                                }
 	 				}
                                        $pdf->Cell(10,4,'0.00',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,0,'R');
                                        $pdf->Cell(10,4,'25000',0,1,'R');
                                        
                                        
 	 				$i++;
 	 			}
 	 			//echo $count;
 	 		}
 	 		$pdf->Cell(190,4,"$count Blocks Sold",1,1,'C');
 	 		$pdf->Output("BlockAllocation_report.pdf",'D');
            }
                  
 	 return "print"; 
	} 
} 
?>
