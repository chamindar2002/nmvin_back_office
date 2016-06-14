<?php
include_once("action/Action.php");
include_once("CustomerManager.php");      
require_once("customerFunctions.php");

class CustomerInfoAction implements Action {
	 
	  public function execute() {
	  	//showActionFileOutput(20);
	  	if(isset($_POST['selectedrow_2'])){
	  			$customercode = $_POST['selectedrow_2'];
	  			echo $customercode;
	  			$customer = CustomerManager::getInstance()->getCustomerByPK($customercode);
	  			$_REQUEST['customerdls'] = $customer; 
	  	}
	  	return "form";
	  }
}
?>