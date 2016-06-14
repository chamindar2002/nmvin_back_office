<?php

include_once("action/Action.php");
require_once("ReportsManager.php");
require_once("refunds/RefundsManager.php");

class AddressLabelsReportAction implements Action {

    public function execute() {

        if (isset($_POST['rptcode10'])) {
            
            $projectcode = $_POST['projectsaddress_labels'];
            $sales = ReportsManager::getInstance()->getfSalesByProject($projectcode);
            
            $prjectobj = ReportsManager::getInstance()->getProjectByPK($projectcode);
 	 		if(sizeof($prjectobj) == 1){
 	 			$projectname = $prjectobj->getProjectname();	
 	 		}
                        
                        
             if(sizeof($sales)>0){
                 
                 include_once('reports_fpdf.php');
                 $pdf = new FPDF('p','mm','A4');
								
		 $pdf->AddPage();
				
		 $pdf->SetFont('Arial','B',9);
                 
                 $i = 0;
                 foreach($sales As $s){
                        //$salerefno = $s->getRefno();	
 	 		$customer_code = $s->getCustomercode();
 	 		$block_refnumber = $s->getBlockrefnumber();
                        
                        $customer = ReportsManager::getInstance()->getCustomerByPK($customer_code);
	  		if(sizeof($customer) == 1){
	  			$customer_name = $customer->getTitle().'. '.$customer->getFirstname(). " ".$customer->getFamilyname();
                                $customer_add_1 = $customer->getAddressline1() ? $customer->getAddressline1().' ' : '';
                                $customer_add_2 = $customer->getAddressline2() ? $customer->getAddressline2().' ' : '';
                                
                                $projectdetail = ReportsManager::getInstance()->getBlockNoByPK($block_refnumber);
                                if(sizeof($projectdetail) == 1){
	  				$block_number = $projectdetail->getblocknumber(); 	
	  			}
                                                        
                                $pdf->SetFont('Arial','',7);
                                $pdf->Cell(40,4,$block_number,0,1,'L');
                                
                                $pdf->SetFont('Arial','B',9);
                                //if(($i%2) == 0){
                                    $pdf->MultiCell(90,6,"$customer_name\n$customer_add_1\n$customer_add_2",1,1,0,1);
                                    
                                    if(($i % 10) == 0 && $i != 0){
                                        $pdf->AddPage();
                                    }
                                //}else{
                                  //  $pdf->MultiCell(90,5,"$customer_name\n$customer_add_1\n$customer_add_2",1,1,0,0);
                                //}
                                
                                //echo $customer_name.'<br>';
                                //echo $customer_add_1.$customer_add_2.'<br>';
	 		}
                        $i++;
                 }
                 
                 $pdf->Output("address_labels_report.pdf",'D');
             }           
            //echo $projectcode;
            
        
        }

        exit;
        //return "print";
    }

}

function printreport($arr_all,$nofmonths,$overduemonths){
   include_once('reports_fpdf.php');
   $pdf = new FPDF('p','mm','A4');
   $pdf->SetPageHeadning("Reminder Letters Report");
   $pdf->AddPage();
   $pdf->SetFont('Arial','U',10);
   $pdf->Cell(190,4,"Payments Over 30 Days:Green, 60 Days:Blue, 90 Days:Red",0,1,'C');
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
                        
    foreach ($arr_all As $key=>$arr_overduereceipts) {
        
        
        if ($key == 0) {
            $pdf->SetTextColor(0, 128, 0);
        } else if($key == 1){
             $pdf->SetTextColor(0, 0, 255);
        }else{
            $pdf->SetTextColor(255, 0, 0);
        }

        foreach ($arr_overduereceipts As $key => $value) {
            $receipt_obj = ReportsManager::getInstance()->getCustomerReceiptsByPk($key);
            $customerCode = $receipt_obj->getCustomercode();
            $locationCode = $receipt_obj->getLocationcode();
            $projectCode = $receipt_obj->getProjectcode();
            $blockNumber = $receipt_obj->getBlocknumber();
            $paidAmount = $receipt_obj->getPaidamount();

            $rdate = new DateTime($receipt_obj->getReceiptdate());
            $newrdate = $rdate->format("d-m-y");


            $customer_obj = ReportsManager::getInstance()->getCustomerByPK($customerCode);
            if (sizeof($customer_obj) == 1) {
                //$customerName = $customer_obj->getTitle()." ".$customer_obj->getFirstname()." ".$customer_obj->getFamilyname().", ";
                $customerName = substr($customer_obj->getFirstname() . " " . $customer_obj->getFamilyname(), 0, 42);
                $customerAddress = $customer_obj->getAddressline1() . ", " . $customer_obj->getAddressline2() . " " . $customer_obj->getPostcode() . ", " . $customer_obj->getCountry();
                $passporNo = $customer_obj->getPassportno();
            }

            $location_obj = ReportsManager::getInstance()->getLocationByPK($locationCode);
            if (sizeof($location_obj) == 1) {
                $locationName = $location_obj->getLocationname();
            }

            $project_obj = ReportsManager::getInstance()->getProjectByPK($projectCode);
            if (sizeof($project_obj) == 1) {
                $projectName = $project_obj->getProjectname();
            }

            $projectdls_obj = ReportsManager::getInstance()->getBlockNoByPK($blockNumber);
            if (sizeof($projectdls_obj) == 1) {
                $blockNumber = $projectdls_obj->getBlocknumber();
            }

            $pdf->Cell(30, 4, "[$i] $projectName", 0, 0, 'L');
            $pdf->Cell(72, 4, "$customerName", 0, 0, 'R');
            $pdf->Cell(25, 4, "$passporNo", 0, 0, 'R');
            $pdf->Cell(15, 4, "$blockNumber", 0, 0, 'R');
            $pdf->Cell(15, 4, "$key", 0, 0, 'C');
            $pdf->Cell(15, 4, "$newrdate", 0, 0, 'R');
            $pdf->Cell(18, 4, number_format($paidAmount, 2), 0, 1, 'R');


            $customerAddress = "";
            $customerName = "";
            $i++;
        }
    }
    
    $pdf->Output("overdue_report.pdf",'D');
    
}

