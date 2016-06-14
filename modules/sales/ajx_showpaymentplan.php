<?php
include_once('../../wsbootstrap.php');
require_once('SalesManager.php');

if(isset($_GET['q'])){
	$q = $_GET['q'];
	$projects = SalesManager::getInstance()->listPaymentPlayByProjectCode($q);
	if(sizeof($projects) > 0){
		echo "<select name='paymentplan' id='paymentplan' class='selectbox' onchange='loadPaymentplan(this.value)'>";
		echo "<option value='0'></option>";
			foreach($projects As $pr){
				$refno = $pr->getRefno();
				$desc = $pr->getDescription();
				$nofinstall = $pr->getNofinstallments();
				$installamt = $pr->getInstallamount();
                                $tolpayable = number_format($pr->getTotalpayable(),2);
				echo "<option value=\"$refno\">$desc \t---> [$nofinstall X $installamt]  &nbsp; Rs.$tolpayable</option>";
			}
		echo "</select>";
	}
	else{
		echo "<select class='selectbox' name='paymentplan' id='paymentplan' class='selectbox'><option value='0'></option></select>";
	}
}

?>