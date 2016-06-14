<?php

if(isset($_REQUEST['receiptmop'])){
	$receiptmop = $_REQUEST['receiptmop'];
}

echo "<table width='100%' border='0'>";
foreach($receiptmop As $rmop){
	$methodofpayment = $rmop->getReceiptstatus();
	$amt = $rmop->getAmount();
	$chqno = $rmop->getChequnumber();
	$bank = $rmop->getBank();
	
	if($methodofpayment == "CA"){
		echo "<tr><td>&nbsp;</td><td>Cash Payment</td><td colspan='3'>".number_format($amt,2)."</td></tr>";
	}else if($methodofpayment == "BD"){
		echo "<tr><td>&nbsp;</td><td>Bank Deposit</td><td colspan='3'>".number_format($amt,2)."</td></tr>";
	}else{
		echo "<tr><td><strong>Bank</strong></td><td><strong>Cheque Number</strong></td><td><strong>Amount</strong></td></tr>";
		echo "<tr><td>$bank</td><td>$chqno</td></td><td>".number_format($amt,2)."</td></tr>";
		echo "<tr><td colspan='3'><hr></td></tr>";
	}
}
echo "<tr><td>&nbsp;</td><td><strong><i>Total Paid</i></strong></td><td colspan='3'><strong>".number_format($paidamount,2)."</strong></td></tr>";
echo "</table>";
?>