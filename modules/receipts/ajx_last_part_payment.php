<?php
include_once("../../wsbootstrap.php");
require_once("ReceiptsManager.php");
require_once("receiptFunctions.php");
require_once '../sales/SalesManager.php';

if(isset($_POST['sale_ref_no'])){
    $sale_ref_no = $_POST['sale_ref_no'];
    $sale = SalesManager::getInstance()->getSaleByRefno($sale_ref_no);
    if($sale){
    
    
    $lastPPreceipt = ReceiptsManager::getInstance()->getLastPartPaymentReceipt($sale_ref_no);
        if($lastPPreceipt){
            echo 'Last Part Payment : '.$lastPPreceipt[0]->getReceiptdate();
            $d= 'Receipt No : '.$lastPPreceipt[0]->getreceiptno() . ' --> Amount : '.number_format($lastPPreceipt[0]->getpaidamount(),2);
            echo 'Balance : '.number_format($sale->getinstallamount()-$lastPPreceipt[0]->getpaidamount(),2);
?>


            <select name='pp_inv_no' id='pp_inv_no' class='selectbox' onchange="">
                <option value='0'></option>
                <?php
                   echo "<option value=".$lastPPreceipt[0]->getreceiptno().">$d</option>";
                ?>
             </select>
        
<?php   
        }else{
?>
Previous Part Payments
         <select name='pp_inv_no' id='pp_inv_no' class='selectbox' onchange="">
                <option value='0'></option>
                <?php
                   echo "<option value='-1'>No Previous Part Payments</option>";
                ?>
          </select>
<?php
        }
    }
}
?>
<!--<select name='pp_inv_no' id='pp_inv_no' class='selectbox' onchange="">
   <option value='0'></option>
   <?php
      //echo "<option value=".$lastPPreceipt[0]->getreceiptno().">$d</option>";
   ?>
</select>-->
