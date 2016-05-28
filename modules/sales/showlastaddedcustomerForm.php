<?php
require_once("SalesManager.php");

$lastcustomer = SalesManager::getInstance()->getLastCustomer();
if(sizeof($lastcustomer) > 0){
	echo "<table width='auto' class='tblwithborder'>";
	foreach($lastcustomer As $l){
	$fullname = strtoupper($l->getFirstname()." ".$l->getFamilyname());
	$pport = $l->getPassportno();
	}
	echo "<tr><td><strong>Last Added Customer</strong></td></tr>";
	echo "<tr class='justrow' onclick='searchlastaddedCustomer()'>
			<td>
				$fullname | $pport
				<input type='hidden' name='lastaddedcustomer' id='lastaddedcustomer' value=\"$pport\">
			</td>";
	echo "</table>";
}
//print_r($lastcustomer);
?>

