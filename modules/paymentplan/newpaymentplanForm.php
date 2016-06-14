
<form method='post' action="?m=paymentplan&a=NewPaymentPlan" name='frmnewpplan' id='frmnewpplan'> 
<table class='formstable' border='0'>
<tr>
	<td>Project</td>
</tr>
<tr>
	<td>
		<?php printProjects(0);?>
	</td>
</tr>
<tr>
	<td>Number Of Installments</td>
</tr>
<tr>
	<td>
		<input type="text" name="nofinstallments" id="nofinstallments" value="" class='reqtextboxsmall' maxlength='2' onkeyup="calculateAmountPayable()">		
	</td>
</tr>
<tr>
	<td>Installment Amount</td>
</tr>
<tr>
	<td>
		<input type="text" name='installamt' id='installamt' value="" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>Down Payment</td>
</tr>
<tr>
	<td>
		<input type="text" name='downpamnt' id='downpamnt' value="" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>DEVELOPMENT CHARGERS 01</td>
</tr>
<tr>
	<td>
		<input type="text" name='devcharge1' id='devcharge1' value="" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>DEVELOPMENT CHARGERS 02</td>
</tr>
<tr>
	<td>
		<input type="text" name='devcharge2' id='devcharge2' value="" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>INFRASTRUCTURE CHARGERS</td>
</tr>
<tr>
	<td>
		<input type="text" name='infastct' id='infastct' value="" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>ON THE TIME OF OCCUPATION </td>
</tr>
<tr>
	<td>
		<input type="text" name='ocupation' id='ocupation' value="" class='reqtextboxsmall' maxlength='7'  onkeyup='calculateAmountPayable()'>
	</td>
</tr>

<tr>
	<td>Reservation Fee</td>
</tr>
<tr>
	<td>
		<input type="text" name='rsvfee' id='rsvfee' value="5000" class='textboxsmall' readonly='readonly'>
	</td>
</tr>

<!-- -------------------------------- -->
<tr>
	<td>Bank Loan</td>
</tr>
<tr>
	<td>
		<input type="text" name='bankloan' id='bankloan' value="" class='textboxsmall'   onkeyup='calculateAmountPayable()'>
	</td>
</tr>


<tr>
	<td>Additional Land Cost</td>
</tr>
<tr>
	<td>
		<input type="text" name='adtnlland' id='adtnlland' value="" class='textboxsmall'   onkeyup='calculateAmountPayable()'>
	</td>
</tr>
<!-- -------------------------------- -->

<tr>
	<td><strong>Amount Payable</strong></td>
</tr>
<tr>
	<td>
<!--		<input type="text" name='amtpayable' id='amtpayable' value="0.00" class='textboxsmall' readonly="readonly">-->
            
            <?php
            if($_SESSION[SYSTEMNAME.'logid'] == 7 || $_SESSION[SYSTEMNAME.'logid'] == 4){
            ?>
                <input type="text" name='amtpayable' id='amtpayable' value="0.00" class='textboxsmall'>
            <?php
            }else{
            ?>
                <input type="text" name='amtpayable' id='amtpayable' value="0.00" class='textboxsmall' readonly="readonly">
            <?php
            }
            ?>     
	</td>
</tr>


<tr>
	<td>Description</td>
</tr>
<tr>
	<td>
		<input type="text" name='description' id='description' value="" class='reqtextboxlarge' maxlength='40' onfocus="makedescription()">
	</td>
</tr>

<tr>
	<td align='right'>
		<input type="button" name="save" id="save" value="Save" class="buttontype1" onclick="validateForm()"> &nbsp;
		<input type="button" name="cancel" id="cancel" value="Cancel" class="buttontype1" onclick="cancelForm()"> 
		<input type="hidden" name="confirmsave" id="confirmsave" value="true">
	</td>
</tr>


</table>
</form>