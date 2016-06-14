<?php
include_once("action/Action.php");
include_once("CustomerManager.php");      
require_once("customerFunctions.php");

class EditCustomerAction implements Action {
	 
	  public function execute() {
	  	//showActionFileOutput(20);
	  		if(isset($_POST['selectedrow'])){
	  			$customercode = $_POST['selectedrow'];
	  			$customer = CustomerManager::getInstance()->getCustomerByPK($customercode);
	  			if(sizeof($customer) == 1){
	  				$_REQUEST['customer'] = $customer;
	  			}
	  			else{
	  				$_REQUEST['msg_error'] = "Could Not Load Customer.";
	  			}
	  		}
	  		else if(isset($_POST['confirmedit'])){
	  			$customercode = $_POST['customercode'];
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
		  		$slcontact = htmlspecialchars($_POST['slcontactperson']);
	  			$customer = CustomerManager::getInstance()->editCustomer($customercode,$title,$familyname,$fristname,$addl1,$addl2,$postcode,$country,
								   $email,$skype,$lanline,$mobile,$workphone,$fax,$passportno,$sladd1,
								   $sladd2,$sllandline,$slmobile,$slcontact);
				if($customer == 1){
					$_REQUEST['msg_success'] = "Updations Saved Successfully.";
				}else{
					$_REQUEST['msg_error'] = "An Error Occured Trying To Save Updations.";
				}
	  		}
	  	return "form";
	  }
}
?>