<?php
include_once('../../wsbootstrap.php');
require_once('SalesManager.php');

if(isset($_GET['q'])){
	$q = $_GET['q'];
	$projects = SalesManager::getInstance()->listProjectDetailsByPrCode($q);
	if(sizeof($projects) > 0){
		echo "<select name='projectdetails' id='projectdetails' class='selectbox' onchange='loadPaymentplan(this.value)'>";
		echo "<option value='0'></option>";
			foreach($projects As $pr){
				$refno = $pr->getRefno();
				$blcno = $pr->getBlocknumber();
				$rsv_status= $pr->getReservestatus();
                                $block_price = number_format($pr->getBlockprice(),2);
				if($rsv_status == 0){
					echo "<option value=\"$refno\">$blcno &nbsp;&nbsp;&nbsp;&nbsp; [Rs.$block_price]</option>";
				}
			}
		echo "</select>";
	}
	else{
		echo "<select class='selectbox' name='projectdetails' id='projectdetails' class='selectbox'><option value='0'></option></select>";
	}
}

?>