<?php
if(isset($_REQUEST['receiptdetails'])){
	$receiptdetails = $_REQUEST['receiptdetails'];
	
	$receiptno = $receiptdetails->getReceiptno();
	$locationcode = $receiptdetails->getLocationcode();
	$projectcode = $receiptdetails->getProjectcode();
	$blockno = $receiptdetails->getBlocknumber();
	$customercode = $receiptdetails->getCustomercode();
	$paidamount = $receiptdetails->getPaidamount();
	$salerefno = $receiptdetails->getSalerefno();
	$paidforindex = $receiptdetails->getPaidfor();
	
	
	$location_obj = ReceiptsManager::getInstance()->getLocationByPK($locationcode);
	if(isset($location_obj)){
		$locationName = $location_obj->getLocationname();
	}
							
	$project_obj = ReceiptsManager::getInstance()->getProjectByPK($projectcode);
	if(isset($project_obj)){
		$projectName = $project_obj->getProjectname();
	}
							
	$prjectdls_obj = ReceiptsManager::getInstance()->getBlockNumberByPK($blockno);
	if(isset($prjectdls_obj)){
		$blockNo = $prjectdls_obj->getBlocknumber();	
	}
	
	$customer_obj = ReceiptsManager::getInstance()->getCustomerByPK($customercode);
	if(isset($customer_obj)){
		$customerName = "<strong>".$customer_obj->getTitle()." ";
		$customerName .= strtoupper($customer_obj->getFirstname())." ";
		$customerName .= strtoupper($customer_obj->getFamilyname())."</strong><br>";
		$customerName .= $customer_obj->getAddressline1()." ".$customer_obj->getAddressline2()." ".$customer_obj->getPostcode()." ".$customer_obj->getCountry();
	}
}


?>

<table class='printviewtable' cellpadding='3px' border='0'>
<tr><td width='10%'>Received From</td><td width='40%' valign='top'><?php echo $customerName; ?></td><td rowspan='8' width='50%' valign='top'><?php include('receiptInfo_methodofPayment.php');?></td></tr>
<tr><td width='10%'>Receipt Number</td><td width='40% valign='top'><?php echo $receiptno; ?></td></tr>
<tr><td width='10%'>Sale Ref. Number</td><td width='40% valign='top'><?php echo $salerefno; ?></td></tr>
<tr><td width='10%'>Payment Type</td><td width='40% valign='top'><?php echo $paidfor[$paidforindex]; ?></td></tr>
<tr><td width='10%'>Location</td><td width='40% valign='top'><?php echo $locationName; ?></td></tr>
<tr><td width='10%'>Project Name</td><td width='40% valign='top'><?php echo $projectName; ?></td></tr>
<tr><td width='10%'>Block Number</td><td width='40% valign='top'><?php echo $blockNo; ?></td></tr>
<tr><td width='10%'>Paid Amount</td><td width='40% valign='top'><?php echo number_format($paidamount,2); ?></td></tr>
<tr><td colspan='3' align='right'><input type='button' name='back' id='back' value='Back' class='buttontype1' onclick='goBack()'></td></tr>
</table>