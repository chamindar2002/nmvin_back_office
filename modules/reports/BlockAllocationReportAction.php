<?php 
 include_once("action/Action.php");
 require_once("ReportsManager.php");
 require_once("customer/customerFunctions.php");
 
 class BlockAllocationReportAction implements Action{ 
 	
 	 public function execute(){
 	 	//showActionFileOutput(5);
 	 	if(isset($_POST['rptcode6'])){
 	 		
 	 		$prcode = $_POST['projects4'];
 	 		$prdetailslist = ReportsManager::getInstance()->getProjectDetailsByProject($prcode);
 	 		if(sizeof($prdetailslist) > 0){
 	 			
 	 			$project = ReportsManager::getInstance()->getProjectByPK($prcode);
 	 			if(sizeof($project) == 1){
 	 				$projectname = $project->getProjectname();
 	 			}
 	 			$count =  0;
 	 			$heading = "Block Allocation Report of $projectname";
  				
  				include_once('reports_fpdf.php');
				$pdf = new FPDF('p','mm','A4');
				$pdf->SetPageHeadning("$heading");
				$pdf->AddPage();
					
				$pdf->SetFont('Arial','B',9);
				$pdf->Cell(30,4,"Block Number",1,0,'C');
				$pdf->Cell(160,4,"Customer",1,1,'C');
				$pdf->SetFont('Arial','',8);
 	 			foreach($prdetailslist As $lst){
 	 				$blockno = $lst->getBlocknumber();
 	 				$customercode = $lst->getCustomercode();
 	 				
 	 				$customer = ReportsManager::getInstance()->getCustomerByPK($customercode);
  					if(sizeof($customer) == 1){
  						//$customer_name = substr($customer->getFirstname(). " ".$customer->getFamilyname()." [".$customer->getPassportno()."]",0,59);
  						$customer_name = $customer->getFirstname(). " ".$customer->getFamilyname()." [".$customer->getPassportno()."]  Phone:".$customer->getLandline()." Mobile: ".$customer->getMobile();
                                                $customer_name .= '['.$customer->getAddressline1().', '.$customer->getAddressline2().']';
  						$count++;
  					}
 	 				//echo "$blockno $customer_name<br>";
                                        
                                        //-----------------------added on 04/10/2012------------------
                                        if($customercode == 664){
                                            $pdf->SetTextColor(0,0,255);
                                        }else{
                                            $pdf->SetTextColor(0,0,0);
                                        }
                                        //------------------------------------------------------------
                                        
 	 				$pdf->Cell(30,4,"$blockno",0,0,'R');
 	 				$pdf->SetFont('Arial','',8);
                                        /*if(isset($customer_name))*/
                                        $pdf->SetFont('Arial','',7);
                                        $pdf->Cell(160,4,"$customer_name",0,1,'L');
                                        $pdf->SetFont('Arial','',8);
 	 				$customer_name = "--";
 	 				$pdf->SetFont('Arial','',8);
 	 			}
 	 			//echo $count;
 	 		}
 	 		$pdf->Cell(190,4,"$count Blocks Sold",1,1,'C');
 	 		$pdf->Output("BlockAllocation_report.pdf",'D');
 	 		
 	 	} 

 	 return "form"; 
	} 
} 
?>