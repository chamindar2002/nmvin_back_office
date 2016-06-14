<?php
$totalpaid = 0;
if(isset($_REQUEST['receiptlist'])){
	$receiptlist = $_REQUEST['receiptlist'];
	if(sizeof($receiptlist) > 0){
		foreach($receiptlist As $s){
			$totalpaid += $s->getPaidamount();
		}
	}
}
?>

<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<form method='post' action='?m=refunds&a=AddNewRefund' name='frmnewrefund' id='frmnewrefund'>
<table class='formstable' border='0'>
<?php
if(isset($_REQUEST['saledetails'])){
	$saleDetails_obj = $_REQUEST['saledetails'];
	if(sizeof($saleDetails_obj) == 1){
		$salerefno = $saleDetails_obj->getRefno();
		$prCode = $saleDetails_obj->getProjectcode();
		$blockRefno = $saleDetails_obj->getBlockrefnumber();
		$customerCode = $saleDetails_obj->getCustomercode();
		$locationCode = $saleDetails_obj->getLocationcode();
		$pplanRefno = $saleDetails_obj->getPayplanrefno();
		
		//$sale_rightoffstatus = $saleDetails_obj->getSalerightoffStatus();
		//$sale_rightoffrmks = $saleDetails_obj->getSalerightoffComment();
		
		$project = RefundsManager::getInstance()->getProjectByPK($prCode);
		if(isset($project)){
			$projectName = $project->getProjectname();
		}
								
		$projectdetail = RefundsManager::getInstance()->getBlockNoByPK($blockRefno);
		if(isset($projectdetail)){
			$blockNo = $projectdetail->getBlocknumber();
		}
								
		$customer = RefundsManager::getInstance()->getCustomerByPK($customerCode);
		if(isset($customer)){
			$customerName = $customer->getTitle()." ".$customer->getFirstname()." ".$customer->getFamilyname()."\t";
			$customerName .= $customer->getAddressline1()." ".$customer->getAddressline2()." ".$customer->getPostcode()." ".$customer->getCountry();
			$passportNo = $customer->getPassportno();
		}
		


?>
<tr><td>Customer Name</td></tr>
<tr><td><input type='text' name='customername' id='customername' value="<?php echo $customerName; ?>" readonly="readonly" class='textboxlarge'></td></tr>
<tr><td>Passport Number</td></tr>
<tr><td><input type='text' name='passportno' id='passportno' value="<?php echo $passportNo; ?>" readonly="readonly" class='textboxsmall'></td></tr>
<tr><td>Project Name</td></tr>
<tr><td><input type='text' name='projectname' id='projectname' value="<?php echo $projectName; ?>" readonly="readonly" class='textboxlarge'></td></tr>
<tr><td>Block Number</td></tr>
<tr><td><input type='text' name='blockno' id='blockno' value="<?php echo $blockNo; ?>" readonly="readonly" class='textboxsmall'></td></tr>
<tr><td>Amount Refundable</td></tr>
<tr><td><input type='text' name='refundamt' id='refundamt' value="<?php echo number_format($totalpaid,2); ?>" readonly="readonly" class='textboxsmall'></td></tr>


<?php 
/*
 * $_POST['refund_defaulter'] post variable origins from defaulters newblock.php file
 * which is included in defaulters/ConfUnlistingFromDefaultersAction.php
 */
if(isset($_POST['refund_defaulter'])){
    //echo 'defaulter';
?>
<tr><td>Defaulter Refund?</td></tr>
<tr><td><input type='text' name='conf_defaulter' id='conf_defaulter' value="YES" readonly="readonly" class='reqtextboxsmall'></td></tr>
<?php 
}
?>



<tr><td>
	<input type='hidden' name='salerefno' id='salerefno' value="<?php echo $salerefno; ?>">
	<input type='hidden' name='customerCode' id='customerCode' value="<?php echo $customerCode; ?>">
	<input type='hidden' name='locationCode' id='locationCode' value="<?php echo $locationCode; ?>">
	<input type='hidden' name='prCode' id='prCode' value="<?php echo $prCode; ?>">
	<input type='hidden' name='blockRefno' id='blockRefno' value="<?php echo $blockRefno; ?>">
	<input type='hidden' name='pplanRefno' id='pplanRefno' value="<?php echo $pplanRefno; ?>">
	<input type='hidden' name='refundamt2' id='refundamt2' value="<?php echo $totalpaid; ?>">
</td></tr>
<tr><td align='right'>
<input type='hidden' name='addnewrefund' id='addnewrefund' value="true">
<input type="button" name="save" id="save" value="Save" onClick="submitForm()" class="buttontype1">
<input type="button" name="cancel" id="cancel" value="Cancel" onClick="cancelForm()" class="buttontype1">
</td></tr>
<?php 		
		
	}
}
?>
<tr><td><?php echo $msg;?></td></tr>
</table>
</form>