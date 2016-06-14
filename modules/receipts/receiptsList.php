<?php
require_once("ReceiptsManager.php");
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<table class='datatable'>
	<tr>
		<td colspan='8'>
		<ul class='submenu1'>
			<li><a href="?m=receipts&a=AddNewReceipt" title="Add New">+</a></li>
			<li><a href="#" onClick='loadReceiptDetails();' title="More Details">D</a></li>
			<li><a href="#" onClick='loadPrint();' title="Print">[l&#8801;l]</a></li>
                        
                        <li><a href="#" onClick='loadVoidReceipts();' title="Void Receipt">	&#8212;</a></li>
		</ul>
		</td>
	</tr>
	
	
	<tr><td><b>Date</b></td><td><b>Receipt #</b></td><td><b>Project</b></td><td><b>Block Number</b></td><td><b>Customer</b></td><td><b>Receipt Amount</b></td></tr>
	
 	<?php
 		if(isset($_REQUEST['saleslist'])){
			
			$search = $_REQUEST['saleslist'];
			
			if(sizeof($search) != 0){
					$i = 0;
					$class = "";
					
 					echo "<tr><td colspan='8'><strong><i>Search Results</i></strong></td></tr>"; 					
					foreach($search As $s){
						$oddeven = $i%2;
									
						if($oddeven == 0){
							$class = "roweven";
						}else{
							$class = "rowodd";
						}
						
						$projectName = "";
 						$customerName = "";
 						$locationNname = "";
						$salerefno = $s->getSalerefno();
						$locationcode = $s->getLocationcode();
						$projectcode = $s->getProjectcode();
						$customercode = $s->getCustomercode();
						$blockno = $s->getBlocknumber();
						$paidamt = number_format($s->getPaidamount(),2);

						$location_obj = ReceiptsManager::getInstance()->getLocationByPK($locationcode);
						if(isset($location_obj)){
							//$locationNname = $location_obj;
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
						
						echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
						echo "<td width='10%'>"."<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$s->getReceiptno().">".$s->getReceiptdate()."</td>";
						echo "<td width='8%'>".$s->getReceiptno()."</td>";
						echo "<td>$projectName</td>";	 
						echo "<td width='10%'>$blockNo</td>";
						echo "<td>$customerName</td>";
						echo "<td>$paidamt</td>";
						
						echo "</tr>";
						
						$i++;
					}
			}
			else{
				echo "<tr><td colspan='8' align='center'><h3>No records found</h3></td></tr>";
			}
		} 
		else{
			//echo "<tr><td colspan='8' align='center'><h3>No records found</h3></td></tr>";
			if(isset($_REQUEST['todaysliset'])){
				$saleslist = $_REQUEST['todaysliset'];
				
				if(sizeof($saleslist) != 0){
						$i = 0;
						$class = "";
						$total = 0;
						echo "<tr><td colspan='8'><strong><i>Todays Receipts</i></strong></td></tr>";
						foreach($saleslist As $s){ 		
							$oddeven = $i%2;
										
							if($oddeven == 0){
								$class = "roweven";
							}else{
								$class = "rowodd";
							}
							
							$projectName = "";
	 						$customerName = "";
	 						$locationNname = "";
							$salerefno = $s->getSalerefno();
							$locationcode = $s->getLocationcode();
							$projectcode = $s->getProjectcode();
							$customercode = $s->getCustomercode();
							$blockno = $s->getBlocknumber();
							$paidamt = number_format($s->getPaidamount(),2);
							$total += $s->getPaidamount();
							$location_obj = ReceiptsManager::getInstance()->getLocationByPK($locationcode);
							if(isset($location_obj)){
								//$locationNname = $location_obj;
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
							
							echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
							echo "<td width='10%'>"."<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$s->getReceiptno().">".$s->getReceiptdate()."</td>";
							echo "<td width='8%'>".$s->getReceiptno()."</td>";
							echo "<td>$projectName</td>";	 
							echo "<td width='10%'>$blockNo</td>";
							echo "<td>$customerName</td>";
							echo "<td>$paidamt</td>";
							
							echo "</tr>";
							
							$i++;
						}
						echo "<tr><td colspan='5' align='right'>Receipts Total &rarr;</td><td><strong>".number_format($total,2)."</strong></td></tr>";
					}else{
							echo "<tr><td colspan='8' align='center'><h3>No receipts today so far</h3></td></tr>";
						 }
				}
			
		}
	?>
	<tr>
		<td colspan='8' align='center'>
			<input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i;?>">
			<form method='post' action='?m=receipts&a=PrintReceipt' name='frmprintreceipt' id='frmprintreceipt'>
				<input type='hidden' name="selectedrow" id="selectedrow" value="0">
			</form>
			
			<form method='post' action='?m=receipts&a=ReceiptDetails' name='frmshowdetails' id='frmshowdetails'>
				<input type='hidden' name="selectedrow_2" id="selectedrow_2" value="0">
			</form>
			
			<form method='post' action='?m=receipts&a=DeleteReceipt' name='frmvoid' id='frmvoid'>
				<input type='hidden' name="selectedrow_3" id="selectedrow_3" value="0">
			</form>
		</td>
	</tr>
</table>