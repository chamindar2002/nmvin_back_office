<?php 
 include_once("action/Action.php");
 require_once("customer/customerFunctions.php");
 require_once("ReportsManager.php");
 require_once("refunds/RefundsManager.php");
 
 class PaymentsOverdueReportAction implements Action{ 
 	 public function execute(){ 
  		//showActionFileOutput(20);
  		if(isset($_POST['rptcode2'])){
  			
  			$arr_overduereceipts = Array();
  			$nofmonths = $_POST['overduemonths'];
                        
                        $projectCode = $_POST['projectsrptoverdue'];
  			//echo "Find $nofmonths Months Back<br>";
  			$today = date('d-m-Y');
  			$overduemonths_in_string = strtotime($today."-$nofmonths month");
                       	$overduemonths =Date("d-M-Y",$overduemonths_in_string);
			                       
			if($nofmonths == "5"){
                            $nofmonths = "3";
                            $overduemonths_in_string = strtotime($today."-$nofmonths days");
                            $overduemonths =Date("d-M-Y",$overduemonths_in_string);
                        }			
			$saleslist = ReportsManager::getInstance()->listSales($projectCode);
			if(sizeof($saleslist) > 0){
                            foreach($saleslist As $sl){
					$salerefno = $sl->getRefno();
                                       // echo $salerefno."<br>";
					$receiptsList = RefundsManager::getInstance()->getLastReceiptBySelesRef($salerefno);			
					if(sizeof($receiptsList)>0){
						foreach($receiptsList As $rl){
							$receiptno = $rl->getReceiptno();
							$receiptdate = new DateTime($rl->getReceiptdate());
							$newreceiptdate = strtotime($receiptdate->format("d-m-Y"));
							
							if($newreceiptdate < $overduemonths_in_string){
								$arr_overduereceipts[$receiptno] = $salerefno;
								//echo "$receiptno <br>";
							}
						}
					}
				}
			}
			//echo sizeof($saleslist)."sdf";
			printreport($arr_overduereceipts,$nofmonths,$overduemonths);
  		}
 	 return "print"; 
	} 
} 



function printreport($arr_overduereceipts,$nofmonths,$overduemonths){
	$heading = "Payments Overdue Report ";
	if(sizeof($arr_overduereceipts) > 0){
		include_once('reports_fpdf.php');
		$pdf = new FPDF('p','mm','A4');
		$pdf->SetPageHeadning("$heading");
		$pdf->AddPage();
		
		//$pdf->SetFont('Arial','B',10);
		//$pdf->Cell(190,10,"Payments Overdue Report",0,1,'C');
		$pdf->SetFont('Arial','U',10);
		$pdf->Cell(190,4,"Payments Over $nofmonths Months Overdue  (Last Payment Received Before $overduemonths).",0,1,'C');
		$pdf->SetFont('Arial','B',10);
		$i = 1;
		
			$pdf->Cell(190,4,"",0,1,'C');
			$pdf->Cell(30,4,"Project",1,0,'C');
			$pdf->Cell(72,4,"Customer",1,0,'C');
			$pdf->Cell(25,4,"NIC/Passport",1,0,'C');
			$pdf->Cell(15,4,"Block#",1,0,'C');
			$pdf->Cell(15,4,"LR#",1,0,'C');	
			$pdf->Cell(15,4,"LR Date",1,0,'C');	
			$pdf->Cell(18,4,"LR Amt",1,1,'C');
			$pdf->SetFont('Arial','',9);
					
			foreach($arr_overduereceipts As $key=>$value){
				$receipt_obj = ReportsManager::getInstance()->getCustomerReceiptsByPk($key);
				$customerCode = $receipt_obj->getCustomercode();
				$locationCode = $receipt_obj->getLocationcode();
				$projectCode = $receipt_obj->getProjectcode();
				$blockNumber = $receipt_obj->getBlocknumber();
				$paidAmount = $receipt_obj->getPaidamount();
				
				$rdate = new DateTime($receipt_obj->getReceiptdate());
				$newrdate = $rdate->format("d-m-y");
                                
                                //--------------------------------------------------
                                $fully_paid_flag = '';
                                $sale = ReportsManager::getInstance()->getSaleByPK($value);
                                $sum = ReportsManager::getInstance()->getReceiptsSUMbySaleRefno($value);
                                if($sum >= $sale->getTotalpayable())
                                    $fully_paid_flag = '*';
                                //--------------------------------------------------
		
				
				$customer_obj = ReportsManager::getInstance()->getCustomerByPK($customerCode);
				if(sizeof($customer_obj) == 1){
					//$customerName = $customer_obj->getTitle()." ".$customer_obj->getFirstname()." ".$customer_obj->getFamilyname().", ";
					$customerName = substr($customer_obj->getFirstname()." ".$customer_obj->getFamilyname(),0,42);
					$customerAddress = $customer_obj->getAddressline1().", ".$customer_obj->getAddressline2()." ".$customer_obj->getPostcode().", ".$customer_obj->getCountry();
					$passporNo = $customer_obj->getPassportno();
				
				}
				
				$location_obj = ReportsManager::getInstance()->getLocationByPK($locationCode);
				if(sizeof($location_obj) == 1){
					$locationName = $location_obj->getLocationname();
				}
			
				$project_obj = ReportsManager::getInstance()->getProjectByPK($projectCode);
				if(sizeof($project_obj)==1){
					$projectName = $project_obj->getProjectname();
				}

				$projectdls_obj = ReportsManager::getInstance()-> getBlockNoByPK($blockNumber);
				if(sizeof($projectdls_obj) == 1){
					$blockNumber = $projectdls_obj->getBlocknumber();	
				}
				
				//saleref,blockno,lastreceiptno,lastreceiptdate,lastreceiptamt
				
				
				/*
				$pdf->Cell(190,10,"",0,1,'C');	
				$pdf->Cell(95,4,"[$i]",0,0,'L');
				$pdf->SetFont('Arial','I',10);		
				$pdf->Cell(95,4,"$customerName.   [ $passporNo ]",0,1,'R');
				$pdf->Cell(190,4,"$customerAddress",0,1,'R');
				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(190,4,"$locationName ---- $projectName",0,1,'L');
				
				$pdf->SetFont('Arial','',10);
				$pdf->Cell(38,4,"Sale Ref. No.",1,0,'C');
				$pdf->Cell(38,4,"Block No.",1,0,'C');
				$pdf->Cell(38,4,"Last Receipt No.",1,0,'C');
				$pdf->Cell(38,4,"Last Receipt Date.",1,0,'C');
				$pdf->Cell(38,4,"Last Receipt Amount",1,1,'C');
				
				$pdf->Cell(38,4,"$value",1,0,'C');
				$pdf->Cell(38,4,"$blockNumber",1,0,'C');
				$pdf->Cell(38,4,"$key",1,0,'C');
				$pdf->Cell(38,4,"$newrdate",1,0,'C');
				$pdf->Cell(38,4,"$paidAmount",1,0,'C');
				
				$customerAddress = "";
				$customerName = "";
				$i++;
				*/
				
				
				
				$pdf->Cell(30,4,"[$i] $projectName",0,0,'L');
				//$pdf->Cell(72,4,"$customerName",0,0,'R');
                                $pdf->Cell(72,4,"$customerName"."$fully_paid_flag",0,0,'R');
				$pdf->Cell(25,4,"$passporNo",0,0,'R');
				$pdf->Cell(15,4,"$blockNumber",0,0,'R');
                                $pdf->Cell(15,4,"$key",0,0,'C');	
				$pdf->Cell(15,4,"$newrdate",0,0,'R');	
				$pdf->Cell(18,4,number_format($paidAmount,2),0,1,'R');	
				
				
				$customerAddress = "";
				$customerName = "";
				$i++;
				
			}
		
		$pdf->Output("overdue_report.pdf",'D');
	}
}
?>