<?php 
 include_once("action/Action.php");
 include_once 'online/OnlineCustomerManager.php';
 include_once 'CustomerDetailsManager.php';
 
 class OnlineCustomerDetailsAction implements Action{ 
 	 public function execute(){ 
                
             $user = $_SESSION[SYSTEMNAME.'logid'];
             $onlinecustomerobj = CustomerDetailsManager::getInstance()->getOnlineCustomerByUserId($user);
             $_REQUEST['$onlinecustomerobj'] = $onlinecustomerobj;
             
             if(isset($_POST['confirmedit_unconfrmdcustomer'])){
//                $blockref = $_POST['hdn_blockref'];
                $customercode = $_POST['customercode'];
                $title = htmlspecialchars($_POST['titles']);
                $familyname = stripslashes(htmlspecialchars($_POST['lastname']));
                $fristname = stripslashes(htmlspecialchars($_POST['firstname']));
                $addl1 = stripslashes(htmlspecialchars($_POST['addl1']));
                $addl2 = stripslashes(htmlspecialchars($_POST['addl2']));
                $postcode = htmlspecialchars($_POST['pcode']);
                $country = htmlspecialchars($_POST['countries']);
                $email = htmlspecialchars($_POST['email']);
//                $pwd = htmlspecialchars($_POST['password1']);
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
                
                if(isset($customercode)){
                    $customer = OnlinecustomerPeer::retrieveByPK($customercode);
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
                    //$customer->setOnlineuserid($newuserid);
                    //$customer->setBlockrefno($blockref);
                    $customer->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
                    $customer->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
                    $customer->setLastmodifiedtime(date("h:i:s"));
                    
                    $confmsave = CustomerDetailsManager::getInstance()->editOnlineCustomer($customer);
                    if($confmsave == 1){
                        $_REQUEST['msg_success'] = "Changes Saved Successfully";
                    }else{
                        $_REQUEST['msg_error'] = "Changes were not Saved Successfully";
                    }
                    
                }
                
             }else if(isset($_POST['confirmedit_confrmdcustomer'])){
                 //                $blockref = $_POST['hdn_blockref'];
                $customercode = $_POST['customercode'];
                $title = htmlspecialchars($_POST['titles']);
                $familyname = stripslashes(htmlspecialchars($_POST['lastname']));
                $fristname = stripslashes(htmlspecialchars($_POST['firstname']));
                $addl1 = stripslashes(htmlspecialchars($_POST['addl1']));
                $addl2 = stripslashes(htmlspecialchars($_POST['addl2']));
                $postcode = htmlspecialchars($_POST['pcode']);
                $country = htmlspecialchars($_POST['countries']);
                $email = htmlspecialchars($_POST['email']);
//                $pwd = htmlspecialchars($_POST['password1']);
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
                
                if(isset($customercode)){
                    $customer = CustomerdetailsPeer::retrieveByPK($customercode);
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
                    //$customer->setOnlineuserid($newuserid);
                    //$customer->setBlockrefno($blockref);
                    $customer->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
                    $customer->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
                    $customer->setLastmodifiedtime(date("h:i:s"));
                    
                    $confmsave = CustomerDetailsManager::getInstance()->editOnlineCustomer($customer);
                    if($confmsave == 1){
                        $_REQUEST['msg_success'] = "Changes Saved Successfully";
                    }else{
                        $_REQUEST['msg_error'] = "Changes were not Saved Successfully";
                    }
                    
                }
             }
         
             
             
 	 return "form"; 
	} 
} 
?>