<?php
require_once("customerFunctions.php");

if(isset($_REQUEST['customer'])){
	$customer = $_REQUEST['customer'];
	$customercode = $customer->getCustomercode();
	$title = $customer->getTitle();
	$familyname = $customer->getFamilyname();
	$fristname = $customer->getFirstname();
	$addl1 = $customer->getAddressline1();
	$addl2 = $customer->getAddressline2();
	$postcode = $customer->getPostcode();
	$country = $customer->getCountry();
	$email = $customer->getEmail();
	$skype = $customer->getSkype();
	$lanline = $customer->getLandline();
	$mobile = $customer->getMobile();
	$workphone = $customer->getWorkphone();
	$fax = $customer->getFax();
	$passportno = $customer->getPassportno();
	$sladd1 = $customer->getSladdressline1();
	$sladd2 = $customer->getSladdressline2();
	$sllandline = $customer->getSllandline();
	$slmobile = $customer->getSlmobile();
	$slcontact =  $customer->getSlcontactperson();
}
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<form method='post' action='?m=customer&a=EditCustomer' name='frmeditcustomer' id='frmeditcustomer'>
<table class='formstable' border='0'>
	<tr>
		<td width='10%'>Title</td>
		<td colspan='6' align='left'>
			<?php
				printTitles($title);
			?>
		</td>
	</tr>
	
	<tr>
		<td width='10%'>First Name</td>
		<td colspan='0' width='40%'>
			<input type="text" class='reqtextboxmedium' name="firstname" id="firstname" value="<?php echo $fristname; ?>">
		</td>
		<td width='10%'>Last Name</td>
		<td>
			<input type="text" class='reqtextboxmedium' name="lastname" id="lasttname" value="<?php echo $familyname;?>">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Passport/NIC Number</td>
		<td colspan='6'>
                   <?php
                    if($_SESSION[SYSTEMNAME.'logid'] == 1 || $_SESSION[SYSTEMNAME.'logid'] == 7 || $_SESSION[SYSTEMNAME.'logid'] == 4){
                   ?>
                        <input type="text" class='reqtextboxsmall' name="passportno" id="passportno" value="<?php echo $passportno;?>">
                     
                   <?php
                    }else{
                   ?>
			<input type="text" class='reqtextboxsmall' name="passportno" id="passportno" value="<?php echo $passportno;?>" readonly="readonly">
                   <?php
                   }
                   ?>
		</td>
		
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Address Line1</td>
		<td colspan='0'>
			<input type="text" class='reqtextboxlarge' name="addl1" id="addl1" value="<?php echo $addl1;?>">
		</td>
		<td>Address Line2</td>
		<td colspan='6'>
			<input type="text" class='reqtextboxlarge' name="addl2" id="addl2" value="<?php echo $addl2;?>">
		</td>
		
	</tr>
	
	<tr>
		<td width='10%'>Post/Zip Code</td>
		<td  colspan='6'>
			<input type="text" class='textboxsmall' name="pcode" id="pcode" value="<?php echo $postcode;?>">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Country</td>
		<td colspan='6'>
		<?php printCountries($country);?>
		</td>
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Email</td>
		<td>
			<input type="text" class='textboxlarge' name="email" id="email" value="<?php echo $email;?>">
		</td>
		<td width='10%'>Skype</td>
		<td  colspan='6'>
			<input type="text" class='textboxsmall' name="skype" id="skype" value="<?php echo $skype;?>">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Mobile</td>
		<td>
			<input type="text" class='reqtextboxsmall' name="mobile" id="mobile" value="<?php echo $mobile;?>">
		</td>
		<td width='10%'>Land Line</td>
		<td  colspan='6'>
			<input type="text" class='reqtextboxsmall' name="landline" id="landline" value="<?php echo $lanline;?>">
		</td>
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Work Phone</td>
		<td>
			<input type="text" class='textboxsmall' name="wrkphone" id="wrkhone" value="<?php echo $workphone;?>">
		</td>
		<td width='10%'>Fax Number</td>
		<td  colspan='6'>
			<input type="text" class='textboxsmall' name="fax" id="fax" value="<?php echo $fax;?>">
		</td>
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Contact Person in Sri Lanka</td>
		<td colspan = '6'>
			<input type="text" class='textboxlarge' name="slcontactperson" id="slcontactperson" value="<?php echo $slcontact;?>">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Address In SL Line1</td>
		<td>
			<input type="text" class='textboxmedium' name="sladdl1" id="sladdl1" value="<?php echo $sladd1;?>">
		</td>
		<td width='10%'>Address In SL Line2</td>
		<td  colspan='6'>
			<input type="text" class='textboxmedium' name="sladdl2" id="sladdl2" value="<?php echo $sladd2;?>">
		</td>
		
	</tr>
	
	<tr>
		<td width='10%'>Land Line</td>
		<td>
			<input type="text" class='textboxsmall' name="sllandline" id="sllandline" value="<?php echo $sllandline;?>">
		</td>
		<td width='10%'>Mobile</td>
		<td  colspan='6'>
			<input type="text" class='textboxsmall' name="slmobile" id="slmobile" value="<?php echo $slmobile;?>">
		</td>
	</tr>
	
	<tr>
		<td colspan='8' align='right'>
			<input type='hidden' value='true' name='confirmedit' id='confirmedit'>
			<input type='hidden' value="<?php echo $customercode; ?>" name='customercode' id='customercode'>
			<input type='button' class='buttontype1' name='save' id='save' value='Save' onClick="setTimeout('submitForm()', 1000)">
<!--				<input type='submit' class='buttontype1' name='save' id='save' value='Save'>-->
			&nbsp;&nbsp;
			<input type='button' class='buttontype1' name='cancel' id='cancel' value='Cancel' onClick="setTimeout('cancel()', 1000)">
			</td>
	</tr>
</table>
</form>