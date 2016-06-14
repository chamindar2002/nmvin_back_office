<?php
require_once("customerFunctions.php");
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<form method='post' action='?m=customer&a=AddNewCustomer' name='frmaddcustomer' id='frmaddcustomer'>
<table class='formstable' border='0'>
	<tr>
		<td width='10%'>Title</td>
		<td colspan='6' align='left'>
			<?php
				printTitles("MR");
			?>
		</td>
	</tr>
	
	<tr>
		<td width='10%'>First Name</td>
		<td colspan='0' width='40%'>
			<input type="text" class='reqtextboxlarge' name="firstname" id="firstname" value="">
		</td>
		<td>Last Name</td>
		<td width='40%'>
			<input type="text" class='reqtextboxlarge' name="lastname" id="lasttname" value="">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Passport/NIC Number</td>
		<td colspan='6'>
			<input type="text" class='reqtextboxsmall' name="passportno" id="passportno" value="" maxlength="10">
			<br>
			<font size='1px' color='#fff'>Please make sure the NIC/Passport no. is correct before saving.<br> Once Saved NIC/Passport no. cannot be modified</font>
		</td>
		
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Address Line1</td>
		<td colspan='0'>
			<input type="text" class='reqtextboxlarge' name="addl1" id="addl1" value="">
		</td>
		<td>Address Line2</td>
		<td>
			<input type="text" class='reqtextboxlarge' name="addl2" id="addl2" value="">
		</td>
		
	</tr>
	
	<tr>
		<td width='10%'>Post/Zip Code</td>
		<td  colspan='6'>
			<input type="text" class='textboxsmall' name="pcode" id="pcode" value="">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Country</td>
		<td colspan='6'>
		<?php printCountries("LK");?>
		</td>
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Email</td>
		<td>
			<input type="text" class='textboxlarge' name="email" id="email" value="">
		</td>
		<td width='10%'>Skype</td>
		<td colspan='6'>
			<input type="text" class='textboxsmall' name="skype" id="skype" value="">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Mobile</td>
		<td>
			<input type="text" class='reqtextboxsmall' name="mobile" id="mobile" value="">
		</td>
		<td width='10%'>Land Line</td>
		<td  colspan='6'>
			<input type="text" class='reqtextboxsmall' name="landline" id="landline" value="">
		</td>
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Work Phone</td>
		<td>
			<input type="text" class='textboxsmall' name="wrkphone" id="wrkhone" value="">
		</td>
		<td width='10%'>Fax Number</td>
		<td  colspan='6'>
			<input type="text" class='textboxsmall' name="fax" id="fax" value="">
		</td>
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Contact Person in Sri Lanka</td>
		<td colspan = '6'>
			<input type="text" class='textboxlarge' name="slcontactperson" id="slcontactperson" value="">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Address In SL Line1</td>
		<td>
			<input type="text" class='textboxmedium' name="sladdl1" id="sladdl1" value="">
		</td>
		<td width='10%'>Address In SL Line2</td>
		<td  colspan='6'>
			<input type="text" class='textboxmedium' name="sladdl2" id="sladdl2" value="">
		</td>
		
	</tr>
	
	<tr>
		<td width='10%'>Land Line</td>
		<td>
			<input type="text" class='textboxsmall' name="sllandline" id="sllandline" value="">
		</td>
		<td width='10%'>Mobile</td>
		<td  colspan='6'>
			<input type="text" class='textboxsmall' name="slmobile" id="slmobile" value="">
		</td>
	</tr>
	
	<tr>
		<td colspan='8' align='right'>
			<input type='hidden' value='true' name='confirmsave' id='confirmsave'>
			<input type='button' class='buttontype1' name='save' id='save' value='Save' onClick="setTimeout('submitForm()', 1000)">
<!--				<input type='submit' class='buttontype1' name='save' id='save' value='Save'>-->
			&nbsp;&nbsp;
			<input type='button' class='buttontype1' name='cancel' id='cancel' value='Cancel' onClick="setTimeout('cancel()', 1000)">
			</td>
	</tr>
</table>
</form>