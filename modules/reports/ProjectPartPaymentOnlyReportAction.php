<?php 
 include_once("action/Action.php");
 require_once("customer/customerFunctions.php");
 require_once("ReportsManager.php");
 require_once("receipts/receiptFunctions.php");
 
 
 class ProjectPartPaymentOnlyReportAction implements Action{ 
 	 public function execute(){ 
  		//showActionFileOutput(20);
  		if(isset($_POST['rptcode5'])){
 	 		$projectcode = $_POST['projects3'];
 	 		$sales = ReportsManager::getInstance()->getfSalesByProject($projectcode);
 	 		$prjectobj = ReportsManager::getInstance()->getProjectByPK($projectcode);
 	 		if(sizeof($prjectobj) == 1){
 	 			$projectname = $prjectobj->getProjectname();	
 	 		}
 	 		
 	 		if(sizeof($sales)>0){
 	 			include_once('reports_fpdf.php');
				$pdf = new FPDF('p','mm','A4');
				$pdf->SetPageHeadning("Part Payment Only Customers Of $projectname");
				
				$pdf->AddPage();
				
				$pdf->SetFont('Arial','B',7);
				$pdf->Cell(90,4,"Customer",1,0,'L');
				$pdf->Cell(10,4,"Block #",1,0,'L');
				$pdf->Cell(15,4,"Receipt #",1,0,'L');
				$pdf->Cell(20,4,"Date",1,0,'L');
				$pdf->Cell(20,4,"Paid For",1,0,'L');
				$pdf->Cell(15.8,4,"Amount",1,1,'L');
				
				$pdf->SetFont('Arial','',8);
				//$pdf->Cell(190,4,"Project Summary Break Down Report",0,0,'C');
				
 	 				foreach($sales As $s){
 	 					$salerefno = $s->getRefno();	
 	 					$customer_code = $s->getCustomercode();
 	 					$block_refnumber = $s->getBlockrefnumber();
 	 					//$receipt_number = "";
 	 					
 	 					$lastreceipt = ReportsManager::getInstance()->getLastReceiptBySaleReferenceNumber($salerefno);
  						if(sizeof($lastreceipt) == 1){
	 	 					$lastreceipt = current($lastreceipt);
	  						$receipt_number = $lastreceipt->getReceiptno();
	  						$receipt_date = $lastreceipt->getReceiptdate();
	  						$receipt_paidfor = $lastreceipt->getPaidfor();
	  						$receipt_amount = $lastreceipt->getPaidamount();
	  						
	  						if($receipt_paidfor == "PP"){
	  						
	  						
		  						$customer = ReportsManager::getInstance()->getCustomerByPK($customer_code);
		  						if(sizeof($customer) == 1){
		  							$customer_name = $customer->getFirstname(). " ".$customer->getFamilyname();
		  						}
		  						
		  						$projectdetail = ReportsManager::getInstance()->getBlockNoByPK($block_refnumber);
		  						if(sizeof($projectdetail) == 1){
		  							$block_number = $projectdetail->getblocknumber(); 	
		  						}
		  						
		  						$paid_for = displayPaidfor($receipt_paidfor);
		  						
		  						$pdf->Cell(90,4,$customer_name,0,0,'L');
								$pdf->Cell(10,4,$block_number,0,0,'L');
								$pdf->Cell(15,4,$receipt_number,0,0,'C');
								$pdf->Cell(20,4,$receipt_date,0,0,'L');
								$pdf->Cell(20,4,$paid_for,0,0,'L');
								$pdf->Cell(15.8,4,number_format($receipt_amount,2),0,1,'R');
	  						
  							}
//  						
//  						$customer = ReportsManager::getInstance()->getCustomerByPK($customer_code);
//  						if(sizeof($customer) == 1){
//  							$customer_name = $customer->getFirstname(). " ".$customer->getFamilyname();
//  						}
//  						
//  						$projectdetail = ReportsManager::getInstance()->getBlockNoByPK($block_refnumber);
//  						if(sizeof($projectdetail) == 1){
//  							$block_number = $projectdetail->getblocknumber(); 	
//  						}
//  						
//  						$paid_for = displayPaidfor($receipt_paidfor);
  						
  						//*****************write data to pdf********************
  						
//						$pdf->Cell(90,4,$customer_name,0,0,'L');
//						$pdf->Cell(10,4,$block_number,0,0,'L');
//						$pdf->Cell(15,4,$receipt_number,0,0,'C');
//						$pdf->Cell(20,4,$receipt_date,0,0,'L');
//						$pdf->Cell(20,4,$paid_for,0,0,'L');
//						$pdf->Cell(15.8,4,number_format($receipt_amount,2),0,1,'R');
						
  						//*************************************************
  						
  						//echo "$receipt_number ? $customer_name ? $block_number ? $paid_for ? $receipt_amount<br>";
  						}	
 	 				}
 	 				$pdf->Output("partpaycustomer_report.pdf",'D');	
 	 			}
 	 		
  		}
 	 return "print"; 
	} 
} 
?>