<?php
include_once("action/Action.php");
include_once("CustomerManager.php");      
require_once("customerFunctions.php");

class AddNewCustomerAction implements Action {
	 
	  public function execute() {
	  	//showActionFileOutput(30);
	  	if(isset($_POST['confirmsave'])){
	  		$title = htmlspecialchars($_POST['titles']);
	  		$familyname = stripslashes(htmlspecialchars($_POST['lastname']));
	  		$fristname = stripslashes(htmlspecialchars($_POST['firstname']));
	  		$addl1 = stripslashes(htmlspecialchars($_POST['addl1']));
	  		$addl2 = stripslashes(htmlspecialchars($_POST['addl2']));
	  		$postcode = htmlspecialchars($_POST['pcode']);
	  		$country = htmlspecialchars($_POST['countries']);
	  		$email = htmlspecialchars($_POST['email']);
	  		$skype = htmlspecialchars($_POST['skype']);
	  		$lanline = htmlspecialchars($_POST['landline']);
	  		$mobile = htmlspecialchars($_POST['mobile']);
	  		$workphone = htmlspecialchars($_POST['wrkphone']);
	  		$fax = htmlspecialchars($_POST['fax']);
	  		$passportno = htmlspecialchars($_POST['passportno']);
	  		$sladd1 = stripslashes(htmlspecialchars($_POST['sladdl1']));
	  		$sladd2 = stripslashes(htmlspecialchars($_POST['sladdl2']));
	  		$sllandline = htmlspecialchars($_POST['sllandline']);
	  		$slmobile = htmlspecialchars($_POST['slmobile']);
	  		$slcontact = stripslashes(htmlspecialchars($_POST['slcontactperson']));
	  		
	  		$customerExists = CustomerManager::getInstance()->checkIfCustomerExists($passportno);
	  		if($customerExists == 0){
	  			$addnewcustomer = CustomerManager::getInstance()->addNewCustomer($title,$familyname,$fristname,$addl1,$addl2,$postcode,$country,
								   $email,$skype,$lanline,$mobile,$workphone,$fax,$passportno,$sladd1,
								   $sladd2,$sllandline,$slmobile,$slcontact);
				$_REQUEST['msg_success'] = "New Customer Saved Successfully";
	  		}else{
	  			$_REQUEST['msg_error'] = "A Customer Already Exists With The Given Passport Number";
	  		}

	  	}
	  	return "form";
	  }
}
?>
