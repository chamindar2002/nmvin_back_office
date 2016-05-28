<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
<?php 
 //include_once 'online/includefiles/welcomenote.php';
 require_once("customer/customerFunctions.php");
 
 if(isset($_REQUEST['$onlinecustomerobj'])){
     $onlinecustomerobj =$_REQUEST['$onlinecustomerobj'];
     $onlincustomerstatus = $onlinecustomerobj->getUtilized();
     
     
        
 }
 
 
 ?>


 <?php 
 
   if($onlincustomerstatus){
       
       $customerobj = CustomerDetailsManager::getInstance()->getCustomerByUserId($_SESSION[SYSTEMNAME.'logid']);
       if(sizeof($customerobj) != 0){
       
       $customercode = $customerobj->getCustomercode();
	$title = $customerobj->getTitle();
	$familyname = $customerobj->getFamilyname();
	$fristname = $customerobj->getFirstname();
	$addl1 = $customerobj->getAddressline1();
	$addl2 = $customerobj->getAddressline2();
	$postcode = $customerobj->getPostcode();
	$country = $customerobj->getCountry();
	$email = $customerobj->getEmail();
	$skype = $customerobj->getSkype();
	$lanline = $customerobj->getLandline();
	$mobile = $customerobj->getMobile();
	$workphone = $customerobj->getWorkphone();
	$fax = $customerobj->getFax();
	$passportno = $customerobj->getPassportno();
	$sladd1 = $customerobj->getSladdressline1();
	$sladd2 = $customerobj->getSladdressline2();
	$sllandline = $customerobj->getSllandline();
	$slmobile = $customerobj->getSlmobile();
	$slcontact =  $customerobj->getSlcontactperson();
        
        include_once 'frm_system_custdls_displayform.php';
       }
 ?>
   

<?php
 }else{

     if(sizeof($onlinecustomerobj) != 0){
        $customercode = $onlinecustomerobj->getCustomercode();
	$title = $onlinecustomerobj->getTitle();
	$familyname = strtoupper($onlinecustomerobj->getFamilyname());
	$fristname = strtoupper($onlinecustomerobj->getFirstname());
	
	$addl1 =  stripslashes($onlinecustomerobj->getAddressline1());
	$addl2 =  stripslashes($onlinecustomerobj->getAddressline2());
	$postcode = $onlinecustomerobj->getPostcode();
	$country = $onlinecustomerobj->getCountry();
	$email = $onlinecustomerobj->getEmail();
	$skype = $onlinecustomerobj->getSkype();
	$lanline = $onlinecustomerobj->getLandline();
	$mobile = $onlinecustomerobj->getMobile();
	$workphone = $onlinecustomerobj->getWorkphone();
	$fax = $onlinecustomerobj->getFax();
	$passportno = $onlinecustomerobj->getPassportno();
	$sladd1 = stripslashes($onlinecustomerobj->getSladdressline1());
	$sladd2 = stripslashes($onlinecustomerobj->getSladdressline2());
	$sllandline = $onlinecustomerobj->getSllandline();
	$slmobile = $onlinecustomerobj->getSlmobile();
	$slcontact =  $onlinecustomerobj->getSlcontactperson();
        
        include_once 'frm_online_custdls_displayform.php';
     }
    ?>
    
<?php 
 }
?>



<?php
if($onlincustomerstatus){
    //include_once 'frm_system_custdls_displayform.php';
    
 }else{
     include_once 'frm_online_custdls_displayform.php';
 }
?>