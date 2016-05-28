<?php

include_once("action/Action.php");
require_once("ReportsManager.php");
require_once("refunds/RefundsManager.php");

class ReminderLettersReportAction implements Action {

    public function execute() {

        if (isset($_POST['rptcode8'])) {

            //$arr_overduereceipts = Array();
            $arr_over_30_days = Array();
            $arr_over_60_days = Array();
            $arr_over_90_days = Array();
            
            $arr_all_in_one = Array();
            
            
            $nofmonths = 1;

            $today = date('d-m-Y');
            //echo "today is: $today </br>";
            $overduemonths_in_string = strtotime($today . "-$nofmonths month");
            $overduemonths = Date("d-M-Y", $overduemonths_in_string);


            for ($i = 0; $i < 5; $i++) {
                //echo '<br>';
            }
            //echo "$overduemonths <br>";
            //echo $today . '<br>';
            //exit;
            
            $projectCode = $_POST['projectsreminders'];
            //echo $projectCode;exit;

            //$saleslist = ReportsManager::getInstance()->listAllSales();
            $saleslist = ReportsManager::getInstance()->listSales($projectCode);
            if (sizeof($saleslist) > 0) {
                foreach ($saleslist As $sl) {
                    $salerefno = $sl->getRefno();
                    $receiptsList = RefundsManager::getInstance()->getLastReceiptBySelesRef($salerefno);
                    if (sizeof($receiptsList) > 0) {
                        foreach ($receiptsList As $rl) {
                            $receiptno = $rl->getReceiptno();
                            $receiptdate = new DateTime($rl->getReceiptdate());
                            $newreceiptdate = strtotime($receiptdate->format("d-m-Y"));

                            if ($newreceiptdate < $overduemonths_in_string) {
                                //$arr_overduereceipts[$receiptno] = $salerefno;
                                //echo "$receiptno <br>";
                                $diff = abs(strtotime($today) - $newreceiptdate);
                                $diff_days = $diff / (60 * 60 * 24); //seconds to days
                                /*    
                                $todayinseconds = $newreceiptdate + $diff;
                                $cv = date('d-M-Y', $todayinseconds);
                                echo $receiptdate->format("d-m-Y") . " -> " . (($diff) / (60 * 60 * 24)) . "($cv)<br>";
                                * 
                                */
                                
                                
                                if($diff_days > 30 && $diff_days <= 60){
                                    //echo "$receiptno ".$receiptdate->format("d-m-Y")." $diff_days [Over 30 Days] <br>";
                                    $arr_over_30_days[$receiptno] = $salerefno;
                                    
                                }else if($diff_days > 60 && $diff_days <=90){
                                    //echo "$receiptno ".$receiptdate->format("d-m-Y")." $diff_days [Over 60 Days] <br>";
                                    $arr_over_60_days[$receiptno] = $salerefno; 
                                    
                                }else if($diff_days > 90){
                                    //echo "$receiptno ".$receiptdate->format("d-m-Y")." $diff_days [Over 90 Days] <br>";
                                    $arr_over_90_days[$receiptno] = $salerefno; 
                                    
                                }  
                                
                                
                                
                            }
                        }
                    }
                }
            }
            //echo sizeof($saleslist)."sdf";
            $arr_all_in_one[0] = $arr_over_30_days;
            $arr_all_in_one[1] = $arr_over_60_days;
            $arr_all_in_one[2] = $arr_over_90_days;
            
            printreport($arr_all_in_one,30,60);
            
        }

        return "print";
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

