<?php
$searchCriteria = Array();

$searchCriteria[0] = "Passport / NIC Number";
$searchCriteria[1] = "Customer Code";


function printSelectCriteria2($selected){
	global $searchCriteria;
	echo "<select class='selectboxlarge' name='searchcriteria' id='searchcriteria'>";
		foreach($searchCriteria As $key=>$value){
			if($selected == $key){
				echo "<option value=\"$key\" selected>$value</option>";
			}else{
				echo "<option value=\"$key\">$value</option>";
			}
		}
	echo "</select>";
}



?>