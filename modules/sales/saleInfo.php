<?php
 require_once("SalesManager.php");


if(isset($_REQUEST['salesdetails'] )){
	$salesdetails = $_REQUEST['salesdetails'] ;
	if(sizeof($salesdetails) > 0){
		$salerefno = $salesdetails->getRefno();
		$customercode = $salesdetails->getCustomercode();
		$locationcode = $salesdetails->getLocationcode();
		$projectcode = $salesdetails->getProjectcode();
		$blockrefno = $salesdetails->getBlockrefnumber();
		$pplanrefno = $salesdetails->getPayplanrefno();
		$nofinstall = $salesdetails->getNofinstallments();
		$installamt = $salesdetails->getInstallamount();
		$plandesc = $salesdetails->getDescription();
		$totalpayable = $salesdetails->getTotalpayable();
		$paymentduedate = $salesdetails->getPaymentduedate();
		$agrementsdate = $salesdetails->getAgrementstartdate();
		$agrementtfdate = $salesdetails->getAgrementfinishdate();
		
		$today = explode("-",date("d-m-Y"));
		$nextduedate_in_string = strtotime("$paymentduedate-$today[1]-$today[2]"."+1 month");
		$nextduedate = date("d-M-Y",$nextduedate_in_string);
	
		$agsDate = new DateTime($agrementsdate);
		$newagrementsdate = $agsDate->format("d-M-Y");
		
		$agfDate = new DateTime($agrementtfdate);
		$newagrementtfdate = $agfDate->format("d-M-Y");
		
	$project = SalesManager::getInstance()->getProjectByPK($projectcode);
	if(isset($project)){
		$projectName = $project->getProjectname();
	}
						
	$projectdetail = SalesManager::getInstance()->getBlockNumberByPK($blockrefno);
	if(isset($projectdetail)){
		$blockNo = $projectdetail->getBlocknumber();
	}
						
	$customer = SalesManager::getInstance()->getCustomerByPK($customercode);
	if(isset($customer)){
		$customerName = "<strong>".$customer->getTitle()." ".strtoupper($customer->getFirstname())." ".strtoupper($customer->getFamilyname())."</strong>\t";
		$customerName .= $customer->getAddressline1()." ".$customer->getAddressline2()." ".$customer->getPostcode()." ".$customer->getCountry();
	}
		
	$pplan = SalesManager::getInstance()->getPaymentPlanByPK($pplanrefno);
	if(isset($pplan)){
		$reservationfee = $pplan->getRsvfee();
		$downpayment = $pplan->getDownpayment();
		$bankloan = $pplan->getBankloan();
		$adtlland = $pplan->getAdtnlland();
	}
	
?>
<div id='printReady'>
<table class='printviewtable' cellpadding='3px' border='0'>
<tr><td colspan='4'><?php echo $customerName;?></td></tr>
<tr><td width='25%'>Project Name</td><td><strong><?php echo $projectName;?></strong></td></tr>
<tr><td width='25%'>Block Number</td><td><strong><?php echo $blockNo;?></strong></td></tr>
<tr><td width='25%'>Payment Plan</td><td><strong><?php echo $plandesc;?></strong></td></tr>
<tr><td width='25%'>Reservation Fee</td><td><strong><?php echo number_format($reservationfee,2);?></strong></td></tr>
<tr><td width='25%'>Down Payment</td><td><strong><?php echo number_format($downpayment,2);?></strong></td></tr>
<tr><td width='25%'>Installments</td><td><strong><?php echo $nofinstall." X ".number_format($installamt,2);?></strong></td></tr>
<tr><td width='25%'>Bank Loan</td><td><strong><?php echo number_format($bankloan,2);?></strong></td></tr>
<tr><td width='25%'>Additiona Land Cost</td><td><strong><?php echo number_format($adtlland,2);?></strong></td></tr>
<tr><td width='25%'>Total Payable</td><td><strong><?php echo number_format($totalpayable,2);?></strong></td></tr>
<tr><td width='25%'>Next Payment Due On</td><td><strong><?php echo $nextduedate;?></strong></td></tr>
<tr><td width='25%'>Agreement Start Date</td><td><strong><?php echo $newagrementsdate;?></strong></td></tr>
<tr><td width='25%'>Agreement Finish Date</td><td><strong><?php echo $newagrementtfdate;?></strong></td></tr>
</table>


<br>


<!--*************************************Payment Details **************************************************************-->

<a href="#" id='docoratedAnchotag1' class="show_hide">Payment Details</a><br />


	<div class="slidingDiv">
	<table class='printviewtable' cellpadding='3px' border='0'>
	<tr><td width='20%'><strong>Receipt Date</strong></td><td width='20%'><strong>Receipt Number</strong></td><td width='20%'><strong>Receipt Amount</strong></td><td width='40%'>&nbsp;</td></tr>
	<?php
	
	$receipts = SalesManager::getInstance()->listReceiptsBySaleRefno($salerefno);
		if(sizeof($receipts > 0)){
			$receiptstotal = 0;
			foreach($receipts As $r){
				$rno = $r->getReceiptno();
				$rdate = $r->getReceiptdate();
				$ramount = $r->getPaidamount();
				$receiptstotal += $ramount;
	?>
		<tr><td><?php echo $rdate;?></td><td><?php echo $rno; ?></td><td><?php echo number_format($ramount,2);?></td><td>&nbsp;</td></tr>
	<?php 
				
			}
		$outstandings = $totalpayable - $receiptstotal;
		$installmentsleft = ceil($outstandings/$installamt);
		$excesspaid = 0;
		
		
					if($receiptstotal >= $installamt){
						$excesspaid = $receiptstotal%$installamt;
					}
		
		
		
		}
	
		
	?>
	<tr><td colspan='2' align='right'><i><strong>Total Paid</strong></i></td><td><?php echo number_format($receiptstotal,2);?></td><td>&nbsp;</td></tr>
	<tr><td>Balance</td><td colspan='2'><?php echo number_format($outstandings,2); ?></td><td>&nbsp;</td></tr>
	<tr><td>Installments Left</td><td colspan='2'><?php echo $installmentsleft; ?></td><td>&nbsp;</td></tr>
	<tr><td>Excess Paid</td><td colspan='2'><?php echo number_format($excesspaid,2); ?></td><td>&nbsp;</td></tr>
	</table>
	</div>
	
	
	<?php		
		}//if(sizeof($salesdetails) > 0) LN 6
	}//isset($_REQUEST['salesdetails'] )) LN 5
	?>
</div>

<br>
<table class='printviewtable' cellpadding='3px' border='0'>
<tr>
<td colspan='4' align='right'>
<input type="button" name='print' id='print' value='[l&#8801;l]' class='buttontype1' onclick='printSpecial()'>
<input type='button' name='back' id='back' value='Back' class='buttontype1' onclick='goBack()'>
</td>
</tr>
</table>








