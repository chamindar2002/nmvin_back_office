<?php
$today = date('d-m-Y');
$threemonthsback_in_string = strtotime($today."-3 month");
//$step_three_months_back = date("d-m-Y",$threemonthsback_in_string);
$arr_receipts = array();

if(isset($_REQUEST['salesbyprc'])){
	$salesbyprc = $_REQUEST['salesbyprc'];
	if($salesbyprc > 0){
		
		foreach($salesbyprc As $sbprc){
			$salerefno = $sbprc->getRefno();
			$receiptsList = RefundsManager::getInstance()->getLastReceiptBySelesRef($salerefno);
			foreach($receiptsList As $rcptlst){
				$receiptno = $rcptlst->getReceiptno();
				$saleref = $rcptlst->getSalerefno();
				$receiptamt = $rcptlst->getPaidamount();
				$receiptdate = new DateTime($rcptlst->getReceiptdate());
				$newreceiptdate = strtotime($receiptdate->format("d-m-Y"));
				
				if($newreceiptdate < $threemonthsback_in_string){

					$arr_receipts[$receiptno] = $saleref;
					
				}
			}
		}
	}
}
?>


<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<form method="post" name="frmdefaults" id="frmdefaults" action="?m=defaulters&a=DefaultersList">
<table class='datatable' border="0">
	<tr>
		<td colspan='8'>
		
		<ul class='submenu1'>
			<li><a href="#" title="Unlist From Defaulter' List" onClick='submitConfUnlist()'>Unlist</a></li>
<!--                        <li><a href="#" title="Allocate New Block" onClick=''>Allocate New Block</a></li>-->
<!--			<li><a href="#" onClick='loadSalesDetails()' title="More Details">&#157</a></li>-->
<!--			<li><a href="#" onClick='loadSalesEdit()' title="Edit">--|-</a></li>-->
<!--			<li><a href="#" onClick='deleteSale()' title="Delete">x</a></li>-->
		</ul>
		</td>
	</tr>
	
	
        <tr><td><b>Block Number</b></td><td><b>Customer</b></td><td><b>Passport/NIC Number</b></td><td><b>Last Receipt Number</b></td><td><b>Last Receipt Date</b></td><td><b>Last Receipt Amount</b></td><td><b>#</b></td></tr>
	




<?php
if(sizeof($arr_receipts) > 0){
	$i = 0;
	$class = "";
	
        //echo "<tr><td colspan='8'><strong><i>Payments Over <u>Three Months</u> Overdue</i></strong></td></tr>";  			
	 					
	foreach($arr_receipts As $key=>$value){
		//$key = receiptno    $value = salerefno
		
	$oddeven = $i%2;			
	if($oddeven == 0){$class = "roweven";}else{$class = "rowodd";}
		
		$salesdetails_obj = RefundsManager::getInstance()->getSaleByPK($value);
		//if(sizeof($salesdetails_obj == 1)){
			$blockrefno = $salesdetails_obj->getBlockrefnumber();
			$customercode = $salesdetails_obj->getCustomercode();
		//}
		
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
		
		$receipts_obj = RefundsManager::getInstance()->getReceiptsByPk($key);
		if(sizeof($receipts_obj) == 1){
			$rdate = new DateTime($receipts_obj->getReceiptdate());
			$newrdate = $rdate->format("d-m-Y");
			$ramount = $receipts_obj->getPaidamount();
		}
		
		echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
		echo "<td width='10%'>"."<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$value.">".$blockNumber."</td>";
		echo "<td>$customerName</td>";
		echo "<td>$passporNo</td>";
		echo "<td>$key</td>";
		echo "<td>$newrdate</td>";
		echo "<td>".number_format($ramount,2)."</td>";
		echo "<td><input type='checkbox' name='chk_saleref[]' value=\"$value\" checked disabled></td>";	 
		echo "</tr>";
		$i++;
	}
	
}else{
	echo "<tr><td colspan='8' align='center'><h3>No records found</h3></td></tr>";
}

?>
</table>
<input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i;?>">    
<input type='hidden' name="projectcode" id="projectcode" value="<?php echo $selectedproject;?>">
</form>

<table width="100%" border="0">
    <tr>
        <td colspan="8" align="right">
         
<!--        <input type="button" name="btnsave" onClick="submitDefaultersForm()" class="buttontype1" value="Save">-->
            
        </td>
    </tr>
	<tr>
		<td colspan='8' align='center'>
			
			<form method='post' action='?m=defaulters&a=ConfUnlistingFromDefaulters' name='frmcnfulist' id='frmcnfulist'>
				<input type='hidden' name="selectedrow" id="selectedrow" value="0">
			</form>
			
			<form method='post' action='?m=defaulters&a=SalesDetails' name='frmshowdetails' id='frmshowdetails'>
				<input type='hidden' name="selectedrow_2" id="selectedrow_2" value="0">
			</form>
			
			<form method='post' action='?m=sales&a=DeleteSale' name='frmdeletesale' id='frmdeletesale'>
				<input type='hidden' name="selectedrow_3" id="selectedrow_3" value="0">
			</form>
		</td>
	</tr>
</table>
    
<script type="text/javascript">
    
function changeColorToSelected(r){
	var rowselected = document.getElementById('tr'+r);
	var rowcount = document.getElementById('rowcount').value;

	for(i=0;i<=rowcount;i++){
		var oddeven = i%2;
		var row = "";
		if(oddeven == 0){	
			if(i != r){
				row = document.getElementById('tr'+i);
				row.style.backgroundColor = '#DEE2E6';
					
			}else{
				rowselected.style.backgroundColor = '#CCCCFF'; //selected
				var slctdrowRefno = document.getElementById('row'+r).value;
				document.getElementById('selectedrow').value = slctdrowRefno;
				document.getElementById('selectedrow_2').value = slctdrowRefno;
				document.getElementById('selectedrow_3').value = slctdrowRefno;
			}
		}
		else{
			if(i != r){
				row = document.getElementById('tr'+i);
				row.style.backgroundColor = '#F7FBFF';
			}
			else{
				rowselected.style.backgroundColor = '#CCCCFF';//selected
				var slctdrowRefno = document.getElementById('row'+r).value;
				document.getElementById('selectedrow').value = slctdrowRefno;
				document.getElementById('selectedrow_2').value = slctdrowRefno;
				document.getElementById('selectedrow_3').value = slctdrowRefno;
				}
		}
	}
	
	//rowselected.style.backgroundColor = 'red';
	//alert(rowvalue.id);
}


function submitConfUnlist(){
    document.frmcnfulist.submit();
}
</script>