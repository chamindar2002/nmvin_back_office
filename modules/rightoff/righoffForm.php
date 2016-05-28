<?php
if(isset($_REQUEST['sales_obj'])){
	$sales_obj = $_REQUEST['sales_obj'];
	if(sizeof($sales_obj) != 0){
		$saleref_no = $sales_obj->getRefno();
		$customercode = $sales_obj->getCustomercode();
		$blockrefno = $sales_obj->getBlockrefnumber();
		$totalpayable = $sales_obj->getTotalpayable();
		$blorefcknumber = $sales_obj->getBlockrefnumber();
		$projectcode = $sales_obj->getProjectcode();
		
		$rightoffstatus = $sales_obj->getSalerightoffStatus();
		$rvs_rightoffamt = $sales_obj->getSalerightoffAmt();
		$rvs_remarks = $sales_obj->getSalerightoffComment();
		
	}
	
	$customer_obj = SalerightOffManager::getInstance()->getCustomerByPK($customercode);
	if(sizeof($customer_obj) == 1){
		$customerName = "<strong>".$customer_obj->getTitle()." ".$customer_obj->getFirstname()." ".$customer_obj->getFamilyname()."</strong></br>";
		$customerName .= $customer_obj->getAddressline1()." ".$customer_obj->getAddressline2()." ".$customer_obj->getPostcode()." ".$customer_obj->getCountry();
		$passporNo = $customer_obj->getPassportno();
			
	}
	
	if(isset($_REQUEST['receiptsSum'])){
		$totalpaid = $_REQUEST['receiptsSum'];
	}
	
	$project = SalerightOffManager::getInstance()->getProjectByProjectCode($projectcode);
	if(sizeof($project) == 1){
		$projectname = $project->getProjectname();
	}	
	
	$projectdetails = SalerightOffManager::getInstance()->getBlocknumberByPk($blorefcknumber);
	if(sizeof($projectdetails) == 1){
		$blocknumber = $projectdetails->getBlocknumber();
	}
	
	
	
	$rightoffamount = $totalpayable - $totalpaid;
}
?>
<form method="post" name='frmnewrightoff' id='frmnewrightoff' action="?m=rightoff&a=SaleRightOff">
<?php if($rightoffstatus == 0){?>
<table class='datatable' border='0'>
	<tr><td colspan='3'><?php echo "$customerName &nbsp;<i>$passporNo<i>";?></td></tr>
	<tr><td colspan='3'><?php echo "$projectname :- $blocknumber"; ?></td></tr>
	<tr><td colspan='3'>&nbsp;</td></tr>
	<tr><td><b>Total Payable</b></td><td><b>Total Paid</b></td><td><b>Write Off Amount</b></td></tr>
	
	<tr>
		<td width='33.3%'>
		<input type="text" name="total_payable" id="total_payable" readonly="readonly" class='textboxlarge' value="<?php echo number_format($totalpayable,2);?>">
		</td>
		
		<td width='33.3%'>
			<input type="text" name="total_paid" id="total_paid" readonly="readonly" class='textboxlarge' value="<?php echo number_format($totalpaid,2);?>">	
		</td>
		
		<td width='33.3%'>
			<input type="text" name="rightoff_amount" id="rightoff_amount"  readonly="readonly" class='reqtextboxlarge' value="<?php echo $rightoffamount;?>">	
		</td>
	</tr>
	
	<tr><td colspan='3'>&nbsp;</td></tr>
	
	<tr><td colspan='3'><b>Remarks</b></td></tr>
	
	<tr>
		<td colspan='3'>
			<textarea name="rmks" id="rmks" class='textboxlarge'></textarea>
		</td>
	</tr>
	
	<tr>
		<td colspan='3'>
			<input type="hidden" name="hid_salesref" id="hid_salesref" value="<?php echo $saleref_no;?>">
			<input type="hidden" name="hid_totalpayable" id="hid_totalpayable" value="<?php echo $totalpayable;?>">
			<input type="hidden" name="hid_totalpaid" id="hid_totalpaid" value="<?php echo $totalpaid;?>">
			<input type="hidden" name="confirmsave" id="confirmsave" value="true"> 
		</td>
	</tr>
	
	<tr>
		<td colspan='3' align='right'>
			<input type="button" name="csl" id="csl" value="Cancel" onClick="cancelForm()" class='buttontype1'>
			<input type="button" name="save" id="save" value="Save" onClick="submitForm()" class='buttontype1'>
		</td>
	</tr>
		
</table>




<?php }else{?>
	<table class='datatable'>
		<tr><td colspan='3'><?php echo "$customerName &nbsp;<i>$passporNo<i>";?></td></tr>
		<tr><td colspan='3'><?php echo "$projectname :- $blocknumber"; ?></td></tr>
		<tr><td colspan='3'>&nbsp;</td></tr>
		<tr><td colspan='3'>Innitial House Value: <strong><?php echo number_format($rvs_rightoffamt+$totalpayable,2);?></strong></td></tr>
		<tr><td colspan='3'>Writeoff Amount: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo number_format($rvs_rightoffamt,2);?></strong></td></tr>
		<tr><td colspan='3'>New House Value: &nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo number_format($totalpayable,2);?></strong></td></tr>
		
		<tr>
		<td colspan='3'>
			<input type="hidden" name="hid_salesref" id="hid_salesref" value="<?php echo $saleref_no;?>">
			<input type="hidden" name="hid_totalpayable" id="hid_totalpayable" value="<?php echo $totalpayable;?>">
			<input type="hidden" name="hid_totalpaid" id="hid_totalpaid" value="<?php echo $totalpaid;?>">
			<input type="hidden" name="hid_rightoffamt" id="hid_rightoffamt" value="<?php echo $rvs_rightoffamt;?>">
			<input type="hidden" name="hid_prev_rightoffrmks" id="hid_prev_rightoffrmks" value="<?php echo $rvs_remarks;?>">
			<input type="hidden" name="confirmreverse" id="confirmreverse" value="true"> 
		</td>
		</tr>
		
		
		<tr><td colspan='3'><b>Remarks</b></td></tr>
	
		<tr>
			<td colspan='3'>
			<textarea name="rmks" id="rmks" class='textboxlarge'><?php echo $rvs_remarks;?></textarea>
			</td>
		</tr>
	
		<tr>
		<td colspan='3' align='right'>
			<input type="button" name="csl" id="csl" value="Cancel" onClick="cancelForm()" class='buttontype1'>
			<input type="button" name="save" id="save" value="Reverse" onClick="submitreverseformForm()" class='buttontype1'>
		</td>
	</tr>
	</table>
<?php }?>



</form>