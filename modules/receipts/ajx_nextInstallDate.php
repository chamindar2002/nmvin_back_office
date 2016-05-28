<?php
include_once("../../wsbootstrap.php");
require_once("ReceiptsManager.php");
require_once("receiptFunctions.php");
require_once 'reports/ReportsManager.php';

if(isset($_GET['q'])){
	$saleref = $_GET['q'];
       
	//$blocklist_obj = ReceiptsManager::getInstance()->getBlockListingByProjectCode($projectref);
        $lastReceipt = ReceiptsManager::getInstance()->getLastReceiptBySaleReferenceNumber($saleref);
        $sale = ReceiptsManager::getInstance()->getSaleDetailsByPK($saleref);
        
        var_dump($lastReceipt);
        
        if($lastReceipt){
            $lastReceiptDate = $lastReceipt->getReceiptdate();
            
            
            echo "v $lastReceiptDate v";
            //echo sizeof($lastReceipt);
            $dateOneMonthAdded = strtotime(date("Y-m-d", strtotime($lastReceiptDate)) . "+1 month");
            $arr_strdate = explode('-',date('d-m-Y',$dateOneMonthAdded));

            $paymentDueDay = $sale->getPaymentduedate();

            $arr_strdate[0] = $paymentDueDay;
            $str_next_install_due_day = implode('-',$arr_strdate);
            var_dump($str_next_install_due_day);
        }else{
            echo 'no receipts';
        }
        
}
?>
