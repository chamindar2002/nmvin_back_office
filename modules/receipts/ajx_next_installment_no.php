<?php
include_once("../../wsbootstrap.php");
require_once("ReceiptsManager.php");
require_once("receiptFunctions.php");
require_once '../sales/SalesManager.php';

if(isset($_POST['sale_ref_no'])){
    $sale_ref_no = $_POST['sale_ref_no'];
    $sale = SalesManager::getInstance()->getSaleByRefno($sale_ref_no);
    if($sale){
    $insallments = SalesManager::getInstance()->listInstallmentReceiptsBySaleRefno($sale_ref_no);
    
    $pplan = SalesManager::getInstance()->getPaymentPlanByPK($sale->getPayplanrefno());
    
    $bal_in_installments = $pplan->gettotalpayable()-$pplan->getrsvfee()-$pplan->getdownpayment()-$pplan->getbankloan()-$pplan->getadtnlland()-$pplan->getinfrastructure()-$pplan->getoccupation()-$pplan->getdevechargers1()-$pplan->getdevechargers2();
    echo $bal_in_installments;
  
    $lastReceipt = ReceiptsManager::getInstance()->getLastReceiptBySaleReferenceNumber($sale_ref_no);
    
    $lastPPreceipt = ReceiptsManager::getInstance()->getLastPartPaymentReceipt($sale_ref_no);
 
    if($lastReceipt){
        echo 'Last Installment : '.$lastReceipt[0]->getReceiptdate().' | Installment No: '.$lastReceipt[0]->getinstallmentno();
        echo ' | Receipt No : '.$lastReceipt[0]->getreceiptno() . ' | Amount : '.number_format($lastReceipt[0]->getpaidamount(),2);
        //echo ' | Payment Type: '.$paidfor[$lastReceipt[0]->getpaidfor()];
    }else{echo 'x';}
   
    }
}
?>