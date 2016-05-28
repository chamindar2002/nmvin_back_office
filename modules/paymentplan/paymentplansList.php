
<form method='post' action='?m=projectdetails&a=ProjectDetails' name='frmupdate' id='frmupdate'>
    <table class='datatable' border='0' style="width: 1500px;" cellpadding=8">
<tr>
	<td colspan='8'>
<!--		<a href='?m=paymentplan&a=NewPaymentPlan'>Add</a>&nbsp;-->
<!--		<a href='#' onClick='editPaymentPlan()'>Edit</a>&nbsp;-->
<!--		<a href='#' onClick='deletePaymentPlan()'>Delete</a>-->
		
		<ul class='submenu1'>
			<li><a href="?m=paymentplan&a=NewPaymentPlan" title="Add New">+</a></li>
<!--		<li><a href="#" onClick='loadDetailsView()' title="More Details">&#157</a></li>-->
			<li><a href="#" onClick='editPaymentPlan()' title="Edit">--|-</a></li>
			<li><a href="#" onClick='deletePaymentPlan()' title="Delete">x</a></li>
		</ul>
	</td>
</tr>

<tr><td><b>Description</b></td><td><b>Down Payment</b></td><td><b>DEVELOPMENT CHARGERS 01</b></td><td><b>DEVELOPMENT CHARGERS 02</b></td>
    <td><b>INFRASTRUCTURE CHARGERS</b></td><td><b>ON THE TIME OF OCCUPATION &ensp;</b></td><td><b>Bank Loan </b>
    </td><td><b>Ex Land </b></td><td><b>Installment Amount</b></td><td><b>Number Of Installments</b>
    </td><td><b>Total Payable</b></td></tr>

<?php
//INFRASTRUCTURE CHARGERS Ex Land
if(isset($_REQUEST['paymentplan'])){
	$paymentplanlist = $_REQUEST['paymentplan'];
	if(sizeof($paymentplanlist) > 0){
	  $i = 0;
	  $class = "";
		foreach($paymentplanlist As $list){
			$oddeven = $i%2;
			$locationname = "";
			if($oddeven == 0){$class = "roweven";}else{$class = "rowodd";}

                        $nofinstallments = $list->getNofinstallments();
				$description = $list->getDescription();
				$downpmnt = $list->getDownpayment();
				$devechargers1 = $list->getDevechargers1();
				$devechargers2 = $list->getDevechargers2();
				$infrastructure = $list->getInfrastructure();
				$occupation = $list->getOccupation();
                                $bankloan = $list->getBankloan();
				$adtnland = $list->getAdtnlland();
				$installamt = $list->getInstallamount();
				$amtpayable = $list->getTotalpayable();
				
				echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
				echo "<td width='50%'>".
				 	 "<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$list->getRefno().">";
				echo "$description</td>";
				echo "<td width='10%'>".number_format($downpmnt,2)."</td>";
				echo "<td width='10%'>".number_format($devechargers1,2)."</td>";
				echo "<td width='10%'>".number_format($devechargers2,2)."</td>";
				echo "<td width='10%'>".number_format($infrastructure,2)."</td>";
				echo "<td width='40%'>".number_format($occupation,2)."</td>";
				echo "<td width='40%'>".number_format($bankloan,2)."</td>";
				echo "<td>".number_format($adtnland,2)."</td>";
				echo "<td>".number_format($installamt,2)."</td>";
				echo "<td>$nofinstallments</td>";
				echo "<td>".number_format($amtpayable,2)."</td>";
				echo "</tr>";
			$i++;
		}
			
	}else{
		echo "<tr><td colspan='8' align='center'><h3>No Records Found</h3></td></tr>";
	}
}else{
	echo "<tr><td colspan='8' align='center'><h3>Select A Project</h3></td></tr>";
}
?>

<tr>
	<td colspan='8' align='center'>
		<input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i;?>">
	
		<form method='post' action='?m=paymentplan&a=EditPaymentPlan' name='' id=''>
			<input type='hidden' name="selectedrow" id="selectedrow" value="0">
		</form>
			
		<form method='post' action='?m=paymentplan&a=EditPaymentPlan' name='editpaymentplanform' id='editpaymentplanform'>
			<input type='hidden' name="selectedrow_2" id="selectedrow_2" value="0">
		</form>

		<form method='post' action='?m=paymentplan&a=DeletePaymentPlan' name='frmdeletepplan' id='frmdeletepplan'>
			<input type='hidden' name="selectedrow_3" id="selectedrow_3" value="0">
		</form>
	</td>
</tr>

</table>
</form>