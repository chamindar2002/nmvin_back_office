<?php
include_once("action/Action.php");
include_once("CustomerManager.php");      
require_once("customerFunctions.php");

class DeleteCustomerAction implements Action {
	 
	  public function execute() {
	  	//showActionFileOutput(20);
	  	$deleted = false;
	  	if(isset($_POST['selectedrow_3'])){
	  		$customercode = $_POST['selectedrow_3'];
	  		$customer = CustomerManager::getInstance()->deleteCustomer($customercode);
	  		if($customer == 1){
	  			$deleted = true;
	  	
	  		}	
	  	}
	  	$_REQUEST['deleted'] = $deleted;
	  	return "success";
	  }
}
?>