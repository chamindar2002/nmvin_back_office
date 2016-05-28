<?php
if(isset($_REQUEST['pplan'])){
	$pplan = $_REQUEST['pplan'];
	$refno = $pplan->getRefno();
        $project = $pplan->getProjectcode();
	$nofinstall = $pplan->getNofinstallments();
	$installamt = $pplan->getInstallamount();
	$rsvfee = $pplan->getRsvfee();
	$bankloan = $pplan->getBankloan();
	$adtnlland = $pplan->getAdtnlland();
	$downpmnt = $pplan->getDownpayment();
	$amtpayable = $pplan->getTotalpayable();
	$description = $pplan->getDescription();
        $devechargers1 = $pplan->getDevechargers1();
	$devechargers2 = $pplan->getDevechargers2();
	$infrastructure = $pplan->getInfrastructure();
	$occupation = $pplan->getOccupation();
}
?>
<form method='post' action="?m=paymentplan&a=EditPaymentPlan" name='frmeditpplan' id='frmeditpplan'> 
<table class='formstable' border='0'>
<tr>
	<td>Project</td>
</tr>
<tr>
	<td>
		<?php printProjects($project);?>
	</td>
</tr>
<tr>
	<td>Number Of Installments</td>
</tr>
<tr>
	<td>
            <input type="text" name="nofinstallments" id="nofinstallments" value="<?php if(isset($nofinstall))echo $nofinstall;?>" class='reqtextboxsmall' maxlength='2' onkeyup="calculateAmountPayable()">		
	</td>
</tr>
<tr>
	<td>Installment Amount</td>
</tr>
<tr>
	<td>
		<input type="text" name='installamt' id='installamt' value="<?php if(isset($installamt))echo $installamt;?>" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>Down Payment</td>
</tr>
<tr>
	<td>
		<input type="text" name='downpamnt' id='downpamnt' value="<?php if(isset($downpmnt))echo $downpmnt;?>" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>DEVELOPMENT CHARGERS 01</td>
</tr>
<tr>
	<td>
		<input type="text" name='devcharge1' id='devcharge1' value="<?php if(isset($devechargers1))echo $devechargers1;?>" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>DEVELOPMENT CHARGERS 02</td>
</tr>
<tr>
	<td>
		<input type="text" name='devcharge2' id='devcharge2' value="<?php if(isset($devechargers2))echo $devechargers2;?>" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>INFRASTRUCTURE CHARGERS</td>
</tr>
<tr>
	<td>
		<input type="text" name='infastct' id='infastct' value="<?php if(isset($infrastructure))echo $infrastructure;?>" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>ON THE TIME OF OCCUPATION </td>
</tr>
<tr>
	<td>
		<input type="text" name='ocupation' id='ocupation' value="<?php if(isset($occupation))echo $occupation;?>" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>Reservation Fee</td>
</tr>
<tr>
	<td>
		<input type="text" name='rsvfee' id='rsvfee' value="<?php if(isset($rsvfee))echo $rsvfee;?>" class='textboxsmall' readonly='readonly'>
	</td>
</tr>


<!-- -------------------------------- -->
<tr>
	<td>Bank Loan</td>
</tr>
<tr>
	<td>
		<input type="text" name='bankloan' id='bankloan' value="<?php if(isset($bankloan))echo $bankloan;?>" class='textboxsmall'   onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>Additional Land Cost</td>
</tr>
<tr>
	<td>
		<input type="text" name='adtnlland' id='adtnlland' value="<?php if(isset($adtnlland))echo $adtnlland;?>" class='textboxsmall'   onkeyup='calculateAmountPayable()'>
	</td>
</tr>
<!-- -------------------------------- -->

<tr>

<tr>
	<td>Amount Payable</td>
</tr>
<tr>
	<td>
		<input type="text" name='amtpayable' id='amtpayable' value="<?php if(isset($amtpayable))echo number_format($amtpayable,2);?>" class='textboxsmall' readonly='readonly'>
	</td>
</tr>
<tr>
	<td>Description</td>
</tr>
<tr>
	<td>
		<input type="text" name='description' id='description' value="<?php if(isset($description))echo $description;?>" class='reqtextboxlarge' maxlength='40' onfocus="makedescription()">
	</td>
</tr>

<tr>
	<td align='right'>
		<input type="button" name="save" id="save" value="Save" class="buttontype1" onclick="validateForm()"> &nbsp;
		<input type="button" name="cancel" id="cancel" value="Cancel" class="buttontype1" onclick="cancelForm()"> 
                <input type="hidden" name="confirmedit" id="confirmedit" value="<?php echo $refno; ?>">
	</td>
</tr>


</table>
</form>