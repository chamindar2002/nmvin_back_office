<?php
require_once("customerFunctions.php");

if(isset($_REQUEST['customerdls'])){
	$customerdls = $_REQUEST['customerdls'];
	
	$customercode = $customerdls->getCustomercode();
	$title = $customerdls->getTitle();
	$familyname = strtoupper($customerdls->getFamilyname());
	$fristname = strtoupper($customerdls->getFirstname());
	
	$addl1 =  stripslashes($customerdls->getAddressline1());
	$addl2 =  stripslashes($customerdls->getAddressline2());
	$postcode = $customerdls->getPostcode();
	$country = $customerdls->getCountry();
	$email = $customerdls->getEmail();
	$skype = $customerdls->getSkype();
	$lanline = $customerdls->getLandline();
	$mobile = $customerdls->getMobile();
	$workphone = $customerdls->getWorkphone();
	$fax = $customerdls->getFax();
	$passportno = $customerdls->getPassportno();
	$sladd1 = stripslashes($customerdls->getSladdressline1());
	$sladd2 = stripslashes($customerdls->getSladdressline2());
	$sllandline = $customerdls->getSllandline();
	$slmobile = $customerdls->getSlmobile();
	$slcontact =  $customerdls->getSlcontactperson();
}
?>


	<?php 
		if(sizeof($customerdls)==1){
			echo "<table class='printviewtable' cellpadding='3px'>";
			
				echo "<tr><td colspan='2'>".
					 "<strong>$title. $fristname $familyname </strong><i>$addl1 $addl2 $postcode $country.</i><br><br>".
					 "</td></tr>";
				echo "<tr><td width='20%'>Customer Code</td><td><strong>$customercode</strong></td></tr>";
				echo "<tr><td width='20%'>Passport Number</td><td><strong>$passportno</strong></td></tr>";
				echo "<tr><td width='20%'>Email</td><td><strong>$email</strong></td></tr>";
				echo "<tr><td width='20%'>Skype</td><td><strong>$skype</strong></td></tr>";
				echo "<tr><td width='20%'>Land Phone</td><td><strong>$lanline</strong></td></tr>";
				echo "<tr><td width='20%'>Mobile</td><td><strong>$mobile</strong></td></tr>";
				echo "<tr><td width='20%'>Work Phone</td><td><strong>$workphone</strong></td></tr>";
				echo "<tr><td width='20%'>Fax</td><td><strong>$fax</strong></td></tr>";
				echo "<tr><td width='20%'>Contact Person In Sri Lanka</td><td><strong>$slcontact</strong></td></tr>";
				echo "<tr><td width='20%'>Address In Sri Lanka</td><td><strong>$sladd1 $sladd2</strong></td></tr>";
				echo "<tr><td width='20%'>Land Phone SL</td><td><strong>$sllandline</strong></td></tr>";
				echo "<tr><td width='20%'>Mobile Phone SL</td><td><strong>$slmobile</strong></td></tr>";
				echo "<tr><td colspan='2' align='right'>".
					 "<input type='button' name='back' id='back' value='Back' class='buttontype1' onclick='goBack()'>";
					 "</td></tr>";

			echo "</table>";
		}else{ 
	?>
	
	
<table class='printviewtable'>
<tr><td>No Records To Display</td></tr>	
</table>
<?php }?>		
