<?php 
 include_once("action/Action.php");
 include_once("PaymentPlanManager.php");      
 require_once("customer/customerFunctions.php");

 class DeletePaymentPlanAction implements Action{ 
 	 public function execute(){ 
 	 	$deleted = false;
  		if(isset($_POST['selectedrow_3'])){
  			$refno = $_POST['selectedrow_3'];
  			if($refno != 0){
  				$pplanDeleted = PaymentPlanManager::getInstance()->DeletePaymentPlan($refno);
  				if($pplanDeleted == 1){
  					$deleted = true;
  				}
  			}
  			
  		}
  	 $_REQUEST['deleted'] = $deleted;
 	 return "success"; 
	} 
} 
?>