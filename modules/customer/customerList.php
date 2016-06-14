<?php
require_once("customerFunctions.php");
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<table class='datatable'>
	<tr>
		<td colspan='8'>
<!--		<a href='?m=customer&a=AddNewCustomer'>Add</a>&nbsp;-->
<!--		<a href='#' onClick='loadDetailsView()'>Detail</a>&nbsp;-->
<!--		<a href='#' onClick='loadCustomerEdit()'>Edit</a>&nbsp;-->
<!--		<a href='#' onClick='deleteCustomer()'>Delete</a>-->
		
		<ul class='submenu1'>
			<li><a href="?m=customer&a=AddNewCustomer" title="Add New Customer">+</a></li>
			<li><a href="#" onClick='loadDetailsView()' title="More Details">&#157</a></li>
			<li><a href="#" onClick='loadSaleDetails()' title="Sale Details">>></a></li>
			<li><a href="#" onClick='loadCustomerEdit()' title="Edit Customer">--|-</a></li>
			<li><a href="#" onClick='deleteCustomer()' title="Delete Customer">x</a></li>
		</ul>
		</td>
	</tr>
	
	<tr><td><b>Name</b></td><td><b>NIC/Passport</b></td><td><b>Email</b></td><td><b>Land Phone</b></td><td><b>Mobile</b></td></tr>
 	<?php
		if(isset($_REQUEST['searchresults'])){
							
			$search = $_REQUEST['searchresults'];
			
			if(sizeof($search) != 0){
					$i = 0;
					$class = "";
					foreach($search As $s){
						$oddeven = $i%2;
									
						if($oddeven == 0){
							$class = "roweven";
						}else{
							$class = "rowodd";
						}
						echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
						echo "<td width='50%'>".
							 "<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$s->getCustomercode().">".
							 "<strong>".$s->getTitle()." ".$s->getFirstname()." ".$s->getFamilyname()."</strong><br>".
				 	         " ".$s->getAddressline1()." ".$s->getAddressline2()." ".$s->getPostcode()." ".$s->getCountry()."</td>";
						echo "<td>".$s->getPassportno()."</td>";
						echo "<td>".$s->getEmail()."</td>";
						//echo "<td>".$s->getSkype()."</td>";
						echo "<td>".$s->getLandline()."</td>";
						echo "<td>".$s->getMobile()."</td>";
						
						echo "</tr>";
						
						$i++;
					}
			}
			else{
				echo "<tr><td colspan='8' align='center'><h3>No records found</h3></td></tr>";
			}
		} 
		else{
			echo "<tr><td colspan='8' align='center'><h3>No records found</h3></td></tr>";
		}
	?>
	<tr>
		<td colspan='8' align='center'>
			<input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i;?>">
			<form method='post' action='?m=customer&a=EditCustomer' name='frmeditcustomer' id='frmeditcustomer'>
				<input type='hidden' name="selectedrow" id="selectedrow" value="0">
			</form>
			
			<form method='post' action='?m=customer&a=CustomerInfo' name='frmshowdetails' id='frmshowdetails'>
				<input type='hidden' name="selectedrow_2" id="selectedrow_2" value="0">
			</form>
			
			<form method='post' action='?m=customer&a=DeleteCustomer' name='frmdeletecustomer' id='frmdeletecustomer'>
				<input type='hidden' name="selectedrow_3" id="selectedrow_3" value="0">
			</form>
			
			<form method='post' action='?m=sales&a=SalesList' name='frmcustomersale' id='frmcustomersale'>
				<input type='hidden' name="selectedrow_4" id="selectedrow_4" value="0">
			</form>
		</td>
	</tr>
</table>