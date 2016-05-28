<?php
if(isset($_REQUEST['searchresults'])){
	$customer = $_REQUEST['searchresults'];
	$ccode = $customer->getCustomercode();
	$customerName = strtoupper(" ".$customer->getTitle().". ".$customer->getFirstname()." ".$customer->getFamilyname().", \t");
	$customerName .= $customer->getAddressline1()." ".$customer->getAddressline2()." ".$customer->getPostcode().", ".$customer->getCountry().".";
	$passportno = $customer->getPassportno();
}
?>

<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<form method='post' action='?m=sales&a=AddNewSale' name='frmsearch' id='frmsearch'>
<table class='formstable' border='0'>

	<tr>
		<td width='30%' colspan='5'>Customer Name</td>
	</tr>
	<tr>
		<td>
                    <input type="text" name="customername" id="customername" value="<?php if(isset($customerName)){echo $customerName;} ?>" class='textboxlarge' readonly="readonly">
		</td>
	</tr>
	<tr>
		<td width='30%' colspan='5'>Passport Number</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="passportno" id="passportno" value="<?php if(isset($passportno)){echo $passportno;}  ?>" class='textboxmedium' readonly="readonly">
		</td>
	</tr>
	<tr>
		<td colspan='5'>	
			<input type='hidden' name='search' id='search' value='true'>
		</td>
	</tr>
</table>
</form>