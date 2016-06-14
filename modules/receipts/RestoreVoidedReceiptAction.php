<?php 
 include_once("action/Action.php");
  require_once("ReceiptsManager.php");
 require_once("customer/customerFunctions.php");
 
 
  
 class RestoreVoidedReceiptAction implements Action{ 
 	 public function execute(){ 
 	 	//showActionFileOutput(20); 
 	 	$restored = 0;
 	 	if(isset($_POST['selectedrow'])){
  			$vreciptno = $_POST['selectedrow'];
  			if($vreciptno > 0){
  				
  				$receiptdetails = ReceiptsManager::getInstance()->getReceipstByPK($vreciptno);
  				if(sizeof($receiptdetails)== 1){
  					$salerefno = $receiptdetails->getSalerefno();
  					$saleobj = ReceiptsManager::getInstance()->getSaleDetailsByPK($salerefno);
  					if(sizeof($saleobj) == 1){
  						$locationcode = $saleobj->getLocationcode();
  						$projectcode = $saleobj->getProjectcode();
  						$customercode = $saleobj->getCustomercode();
  						$blockrefnum = $saleobj->getBlockrefnumber();
  					}
  				}
  				
  				$receiptobj = ReceiptsManager::getInstance()->RestoreVoidedReceipt($vreciptno,$locationcode,$projectcode,$customercode,$blockrefnum);
  				
  				if($receiptobj == 1){
  					$restored = $receiptobj;
  					
  				}
  			}
 	 	}
  
 	 $_REQUEST['restored'] = $restored;	
 	 return "success"; 
	} 
} 
?>