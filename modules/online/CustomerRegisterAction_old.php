<?php 
 include_once("action/Action.php");
 include_once("customer/CustomerManager.php");      
 include_once 'OnlineCustomerManager.php';
 include_once 'user/UserManager.php';
 require_once('recaptcha-php/recaptchalib.php');
  
 class CustomerRegisterAction implements Action{ 
 	 public function execute(){ 
             if(isset($_POST['confirmsave'])){
                 
                $blockref = $_POST['hdn_blockref'];
                $title = htmlspecialchars($_POST['titles']);
                $familyname = stripslashes(htmlspecialchars($_POST['lastname']));
                $fristname = stripslashes(htmlspecialchars($_POST['firstname']));
                $addl1 = stripslashes(htmlspecialchars($_POST['addl1']));
                $addl2 = stripslashes(htmlspecialchars($_POST['addl2']));
                $postcode = htmlspecialchars($_POST['pcode']);
                $country = htmlspecialchars($_POST['countries']);
                $email = htmlspecialchars($_POST['email']);
                $pwd = htmlspecialchars($_POST['password1']);
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
                
                
                $_REQUEST['rqst_blockrefno'] = $blockref;
                
                //------------------------------------------------
                
                /*if($blockref != 0){
                     if (UserManager::getInstance()->authenticateUser($email,$pwd)) {
			$_SESSION['ssn_blockrefno'] = $blockref;
                        return "payment";
                        
                     }
                 }else{
                     
                     return "relogin";
                 }
                 
                 exit;*/
                //------------------------------------------------
                
                
                /*
                 * recaptcha validations
                 */
                
                $privatekey = "6LdJy9USAAAAANLeTHbwtMl9KdxhIBT32IBqAP7h ";
                $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

                if (!$resp->is_valid) {
                 // What happens when the CAPTCHA was entered incorrectly
                $_REQUEST['msg'] = "The reCAPTCHA wasn't entered correctly. Go back and try it again." .
                                    "(reCAPTCHA said: " . $resp->error . ")";
                return "form";
                } 

                 
                /*
                 * Avoid any possible forced page refreshings to avoid any multiple data entry attempts
                 * $_SESSION['nextValidSubmission'] is set in the CustomerRegistrationAction_form.php file
                 */
                $submissionid = $_POST['confirmsave'];
                if($submissionid != $_SESSION['nextValidSubmission']){
                    $_REQUEST['msg'] = "Possible attempt of Force Refresh of Browser.";
                    return "form";
                }
                
                /*
                 * Check the availability of the block at the last minute before confirmation,
                 * in case block been reserved or sold out within the period of time the online user
                 * selecting the block and completing the registration process.
                 * 
                 */
                if($blockref != 0){
                    $blockavailability = OnlineCustomerManager::getInstance()->checkBlockAvailability($blockref);
                    if($blockavailability != 1){

                        $_REQUEST['msg'] = "This block is not available anymore.";
                        return "form";
                    }
                }
                
                
                $customerExists = CustomerManager::getInstance()->checkIfCustomerExists($passportno);
	  	if($customerExists == 0){
                    
                  if ($newUser = UserManager::getInstance()->addNewUser($email,$fristname,$familyname,$pwd,true)) {
                    $newuserid = $newUser->getUid();
                    
                    $newuserroleref_obj = OnlineCustomerManager::getInstance()->addNewUserRoleRef($newuserid,ROLEIDFORONLINECUSTOMER);
                    
                    $customer = new Onlinecustomer();
                    $customer->setTitle($title);
                    $customer->setFamilyname($familyname);
                    $customer->setFirstname($fristname);
                    $customer->setAddressline1($addl1);
                    $customer->setAddressline2($addl2);
                    $customer->setPostcode($postcode);
                    $customer->setCountry($country);
                    $customer->setEmail($email);
                    $customer->setSkype($skype);
                    $customer->setLandline($lanline);
                    $customer->setMobile($mobile);
                    $customer->setWorkphone($workphone);
                    $customer->setFax($fax);
                    $customer->setPassportno($passportno);
                    $customer->setSladdressline1($sladd1);
                    $customer->setSladdressline2($sladd2);
                    $customer->setSllandline($sllandline);
                    $customer->setSlmobile($slmobile);
                    $customer->setSlcontactperson($slcontact);
                    $customer->setOnlineuserid($newuserid);
                    $customer->setBlockrefno($blockref);
                    //$customer->setAddedby($_SESSION[SYSTEMNAME.'logid']);
                    $customer->setAddeddate(strtotime(date('mm-dd-yyyy')));
                    $customer->setAddedtime(date("h:i:s"));
                    
                    $newcustomerobj = OnlineCustomerManager::getInstance()->addNewOnlineCustomer($customer);
                    $_REQUEST['msg'] = "New Customer Saved Successfully";
                    
                  }  else {
                    $_REQUEST['msg'] = "Could Not Create A User Account";
                    return "form";  
                  }
                    
                        
                        
	  	}else{
	  		$_REQUEST['msg'] = "A Customer Already Exists With The Given Passport Number";
                        return "form";
	  	}  
                 
                 
                 if($blockref != 0){
                     if (UserManager::getInstance()->authenticateUser($email,$pwd)) {
			return "payment";
                     }
                 }else{
                     
                     return "relogin";
                 }
                 
             }
         
 	 return "form"; 
	} 
} 



function AddNewOnlineCustomer(){
    
}
?>