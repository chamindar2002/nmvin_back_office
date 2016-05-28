<?php 
 include_once("action/Action.php");
 require_once("customer/customerFunctions.php");
 require_once("ReportsManager.php");
  
 class ProjectSummaryReportAction implements Action{ 
 	 
 	public function execute(){ 
  		//showActionFileOutput(20);
 	 	if(isset($_POST['rptcode3'])){
 	 		$projectcode = $_POST['projects'];
 	 		
 	 		//get number of blocks
 	 		$projectobj = ReportsManager::getInstance()->getProjectByPK($projectcode);
 	 		if(sizeof($projectobj) > 0){
 	 			$nofblocks = $projectobj->getNofblocks();
 	 			$projectname = $projectobj->getProjectname();
 	 		}
 	 		
 	 		$blockdetails = array();
 	 		$totalvalueofblocks_inproject = 0;
 	 		$projectdetailsobjobj1 = ReportsManager::getInstance()->getProjectDetailsByProject($projectcode);
 	 		if(sizeof($projectdetailsobjobj1) > 0){
 	 			foreach($projectdetailsobjobj1 As $prdls1){
 	 				$blockno = $prdls1->getRefno();
 	 				$blockvalue = $prdls1->getBlockprice();
 	 				$blockdetails[$blockno]=$blockvalue;
 	 				$totalvalueofblocks_inproject += $blockvalue;
 	 			}
 	 		}
 	 		
 	 		$salesbyproject = ReportsManager::getInstance()->getfSalesByProject($projectcode);
 	 		
 	 		if(sizeof($salesbyproject) > 0){
 	 			
 	 			$totalvalueofblocks_sold = 0;	
 	 			include_once('reports_fpdf.php');
				$pdf = new FPDF('p','mm','A4');
				$pdf->SetPageHeadning("Project Sales Summary Report");
				$pdf->AddPage();
								
				$count = 0;
				foreach($salesbyproject As $sbp){
					
					$blockrefno = $sbp->getBlockrefnumber();
					$projectdetailsobj2 = ReportsManager::getInstance()-> getBlockNoByPK($blockrefno);
					if(sizeof($projectdetailsobj2) > 0){
						$sold_blockvalue = $projectdetailsobj2->getBlockprice();
						$totalvalueofblocks_sold += $sold_blockvalue;
					}
					
					$count++;
 	 				
				}
				
				
				
				
				
				$pdf->SetFont('Arial','B',9);
				//$pdf->Cell(190,10,"Project Sales Summary Report",0,1,'C');
				$pdf->Cell(95,4,"Name Of Project",1,0,'C');
				$pdf->Cell(47.5,4,"Number Of Blocks Sold",1,0,'C');
				$pdf->Cell(47.5,4,"Number Of Blocks Available",1,1,'C');
				$pdf->SetFont('Arial','I',9);
				$pdf->Cell(95,4,"$projectname",1,0,'C');
				$pdf->Cell(47.5,4,"$count  (".number_format((100/$nofblocks)*$count,2)."%)",1,0,'C');
				$pdf->Cell(47.5,4,$nofblocks-$count." (".number_format((100/$nofblocks)*($nofblocks-$count),2)."%)",1,1,'C');
				$pdf->Cell(190,10,"",0,1,'C');
				
				$pdf->SetFont('Arial','B',9);
				$pdf->Cell(95,4,"Total value of blocks sold",1,0,'C');
				$pdf->Cell(95,4,"Total value of blocks Available",1,1,'C');
				$pdf->SetFont('Arial','I',9);
				$pdf->Cell(95,4,number_format($totalvalueofblocks_sold,2),1,0,'C');
				$pdf->Cell(95,4,number_format($totalvalueofblocks_inproject-$totalvalueofblocks_sold,2),1,1,'C');
				$pdf->Output("projectsummary_report.pdf",'D');
 	 		}
 	 	}
 	 return "print"; 
	} 
} 
?>