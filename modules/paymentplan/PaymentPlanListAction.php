<?php
include_once("action/Action.php");
include_once("PaymentPlanManager.php");      
require_once("customer/customerFunctions.php");

class PaymentPlanListAction implements Action {
	
	public function execute(){
		//showActionFileOutput(20);
		if(isset($_POST['search'])){
			$projectcode = $_POST['projects'];
			$paymentplan = PaymentPlanManager::getInstance()->getPaymentPlansByProjectCode($projectcode);
			$_REQUEST['paymentplan'] = $paymentplan;
			//echo "$projectcode ".$_POST['search'];
		}
		return "list";
	}
}

?>