<?php 
 include_once("action/Action.php");
 require_once("customer/customerFunctions.php");
 require_once("RefundsManager.php");
  require_once("sales/SalesManager.php");
  
 class AddNewRefundAction implements Action{ 
 	
 	 public function execute(){
 	 	
  	 	//showActionFileOutput(25);
  	 	if(isset($_POST['selectedrow'])){
  	 		$salerefno = $_POST['selectedrow'];
  	 		$saleDetails = RefundsManager::getInstance()->getSaleByPK($salerefno);
  	 		$receiptlist = RefundsManager::getInstance()->listReceiptsBySalerefno($salerefno);
  	 		
  	 		$_REQUEST['saledetails'] = $saleDetails;
  	 		$_REQUEST['receiptlist'] = $receiptlist;
  	 	}
  	 	else if(isset($_POST['selectedrow_4'])){
  	 		//force refund directed from sales list
  	 		$salerefno = $_POST['selectedrow_4'];
  	 		$saleDetails = RefundsManager::getInstance()->getSaleByPK($salerefno);
  	 		$receiptlist = RefundsManager::getInstance()->listReceiptsBySalerefno($salerefno);
  	 		
  	 		$_REQUEST['saledetails'] = $saleDetails;
  	 		$_REQUEST['receiptlist'] = $receiptlist;
  	 	}
  	 	else if(isset($_POST['addnewrefund'])){
  	 		$saleref = $_POST['salerefno'];
  	 		$customercode = $_POST['customerCode'];
  	 		$locationcode = $_POST['locationCode'];
  	 		$projectcode = $_POST['prCode'];
  	 		$blockrefno = $_POST['blockRefno'];
  	 		$pplanrefno = $_POST['pplanRefno'];
  	 		$refundamt = $_POST['refundamt2'];
  	 		
  	 		if($refundamt != 0){
  	 			$addnewrefund = RefundsManager::getInstance()->AddNewRefund($saleref,$customercode,$locationcode,$projectcode,$blockrefno,$pplanrefno,$refundamt);
  	 		}else{
  	 			$_REQUEST['msg_error'] = "Cannot Refund $refundamt.";
  	 		}
  	 			
  	 		
  	 		if($addnewrefund == 1){
  	 			$deletesale = SalesManager::getInstance()->deleteSale($saleref);
  	 			$deletereceipts = RefundsManager::getInstance()->DeleteReceipts($saleref);
                                
                                /*
                                 * if sale is a defaulted one and the block has been sold to some one else
                                 * do not unset(make the block available for sale) the block.
                                 */
                                
                                if(!isset($_POST['conf_defaulter'])){
                                    $unsetblock = SalesManager::getInstance()->UnsetBlockSoldOut($blockrefno,$customercode);
                                }
                                
  	 			$_REQUEST['msg_success'] = "Refund Details Saved Successfully.";
  	 		}
  	 		else{
  	 			$_REQUEST['msg_error'] = "An Error Occured Trying to Save Data.";
  	 		}
  	 		
  	 	}
  	 	 	
 	 return "form"; 
	} 
} 
?>