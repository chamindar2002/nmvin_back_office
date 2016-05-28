
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<table class='datatable'>
	<tr>
		<td colspan='8'>
		
		<ul class='submenu1'>
<!--			<li><a href="#" title="Refund Selected Sale" onClick='loadAddNewRefundForm()'>Refund</a></li>-->
<!--			<li><a href="#" onClick='loadSalesDetails()' title="More Details">&#157</a></li>-->
<!--			<li><a href="#" onClick='loadSalesEdit()' title="Edit">--|-</a></li>-->
<!--			<li><a href="#" onClick='deleteSale()' title="Delete">x</a></li>-->
		</ul>
		</td>
	</tr>
	
	
	<tr><td><b>Block Number</b></td><td><b>Customer</b></td><td><b>Passport/NIC Number</b></td><td><b>Refunded Amount</b></td><td><b>Refunded Date</b></td><td><b>Refunded By</b></td></tr>
	




<?php
if(isset($_REQUEST['refundedlist'])){
$refundedlist = $_REQUEST['refundedlist'];
	if(sizeof($refundedlist) > 0){
		$i = 0;
		$class = "";
		echo "<tr><td colspan='8'><strong>Refunded Sales List</strong></td></tr>";  			
		 					
		foreach($refundedlist As $rflst){
			//$key = receiptno    $value = salerefno
			
		$oddeven = $i%2;			
		if($oddeven == 0){$class = "roweven";}else{$class = "rowodd";}
			
			$salerefno = $rflst->getSalerefno();
			$blockrefno = $rflst->getBlockrefnumber();
			$customercode = $rflst->getCustomercode();
			$refundamt = $rflst->getRefundamount();
			$refunddate = new DateTime($rflst->getRefundate());
			$newrefundate = $refunddate->format("d-M-Y");
                        $addedby = $rflst->getAddedby();
			
			$user = RefundsManager::getInstance()->getUserNameByUserId($addedby);
			if(sizeof($user) == 1){
				$addedBy = $user->getLoginname();
			}
			
			$projectdetails_obj = RefundsManager::getInstance()->getBlockNoByPK($blockrefno);
			if(sizeof($projectdetails_obj) == 1){
				$blockNumber = $projectdetails_obj->getBlocknumber();
			}
			
			$customer_obj = RefundsManager::getInstance()->getCustomerByPK($customercode);
			if(sizeof($customer_obj) == 1){
				$customerName = "<strong>".$customer_obj->getTitle()." ".$customer_obj->getFirstname()." ".$customer_obj->getFamilyname()."</strong></br>";
				$customerName .= $customer_obj->getAddressline1()." ".$customer_obj->getAddressline2()." ".$customer_obj->getPostcode()." ".$customer_obj->getCountry();
				$passporNo = $customer_obj->getPassportno();
				
			}
			
			
			echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
			echo "<td width='10%'>"."<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$salerefno.">".$blockNumber."</td>";
			echo "<td>$customerName</td>";
			echo "<td>$passporNo</td>";
			echo "<td>".number_format($refundamt,2)."</td>";
			echo "<td>$newrefundate</td>";
			echo "<td>$addedBy</td>";
			echo "<td></td>";	 
			echo "</tr>";
			$i++;
		}
		
		
	}else{
		echo "<tr><td colspan='8' align='center'><h3>No records found</h3></td></tr>";
	}
}
?>
	<tr>
		<td colspan='8' align='center'>
			<input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i;?>">
			<form method='post' action='?m=refunds&a=AddNewRefund' name='frmeditsales' id='frmeditsales'>
				<input type='hidden' name="selectedrow" id="selectedrow" value="0">
			</form>
			
			<form method='post' action='?m=sales&a=SalesDetails' name='frmshowdetails' id='frmshowdetails'>
				<input type='hidden' name="selectedrow_2" id="selectedrow_2" value="0">
			</form>
			
			<form method='post' action='?m=sales&a=DeleteSale' name='frmdeletesale' id='frmdeletesale'>
				<input type='hidden' name="selectedrow_3" id="selectedrow_3" value="0">
			</form>
		</td>
	</tr>
</table>