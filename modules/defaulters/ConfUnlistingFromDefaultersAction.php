<?php 
 include_once("action/Action.php");
 include_once("DefaultersManager.php");
 require_once("refunds/RefundsManager.php");
 require_once("sales/SalesManager.php");
 
 class ConfUnlistingFromDefaultersAction implements Action{ 
 	 public function execute(){
             
             if(isset($_POST['selectedrow'])){
                 $saleref = $_POST['selectedrow'];
                 $sale = DefaultersManager::getInstance()->getSaleByPk($saleref);
                 $_REQUEST['sale'] = $sale;
                 
                 
             }else if(isset($_POST['hdnsaleref'])){
                 $saleref = $_POST['hdnsaleref'];
                 
                 $customer_code = DefaultersManager::getInstance()->getCustomerCode($saleref);
                 $block_refno = DefaultersManager::getInstance()->getBlockRefNumber($saleref);
                 
                 $lock_block = DefaultersManager::getInstance()->releaseBlock($block_refno,2);
                 $unmark = DefaultersManager::getInstance()->unmarkAdDefaulted($saleref);
                 $newDefaultersEntry = DefaultersManager::getInstance()->addNewDefaultersEntry($saleref,$customer_code,$block_refno,0,2);
                 
                 $_REQUEST['msg_success'] = "The sale was restored to original block successfully";
                 return "form"; 
                 
             }else if(isset($_POST['avblblocks'])){
                 $new_block_ref = $_POST['avblblocks'];
                 
                 
                 $old_blockref = $_POST['hdn_old_blockref'];
                 $saleref = $_POST['hdn_saleref'];
                 $customer_code = $_POST['hdn_ccode'];
                 
                 $updateBlockInSale = DefaultersManager::getInstance()->updateBlockInSalesFile($saleref,$new_block_ref);
                 $newDefaultersEntry = DefaultersManager::getInstance()->addNewDefaultersEntry($saleref,$customer_code,$old_blockref,$new_block_ref,3);
                 
                 if($new_block_ref != -1){
                     $setblocksoldout = SalesManager::getInstance()->setBlockSoldOut($new_block_ref,$customer_code);
                 }
                 
                 $_REQUEST['msg_success'] = "New block has been allocated successfully";
                 return "form"; 
             }
             
             
  
 	 return "form"; 
	} 
} 
?>