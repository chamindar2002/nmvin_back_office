<?php
require_once 'modules/reports/report_sql.php';
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<div id='printReady'>
<table class='datatable'>
	<tr>
		<td colspan='8'>
<!--		<a href='?m=sales&a=AddNewSale'>Add</a>&nbsp;-->
<!--		<a href='#' onClick='loadSalesDetails()'>Detail</a>&nbsp;-->
<!--		<a href='#' onClick='loadSalesEdit()'>Edit</a>&nbsp;-->
<!--		<a href='#' onClick='deleteSale()'>Delete</a>-->
		
		<ul class='submenu1'>
			<li><a href="?m=sales&a=AddNewSale" title="Add New">+</a></li>
			<li><a href="#" onClick='loadSalesDetails()' title="More Details">D</a></li>
			<li><a href="#" onClick='loadSalesEdit()' title="Edit">--|-</a></li>
			<li><a href="#" onClick='deleteSale()' title="Delete">x</a></li>
			<li><a href="#" onClick='loadprintStatement()' title="Print Statement">I&equiv;I</a></li>
			<li><a href="#" onClick='loadForceRefund()' title="Force Refund">Refund</a></li>
			<li><a href="#" onClick='loadloadrightoff()' title="Write Off Sale">Write Off</a></li>		
		</ul>
		</td>
	</tr>
	
	
	<tr><td><b>Date</b></td><td><b>Project</b></td><td><b>Block Number</b></td><td><b>Customer</b></td><td><b>Payment Plan</b></td></tr>
	
 	<?php
                $i = 0;
 		if(isset($_REQUEST['searchresults'])){
			
			$search = $_REQUEST['searchresults'];
			
			if(sizeof($search) != 0){
					
					$class = "";
					$projectName = "";
 					$blockNo = "";
 					$customerName = "";
 					echo "<tr><td colspan='8'><strong><i>Search Results</i></strong></td></tr>"; 					
					foreach($search As $s){
                                            
						$oddeven = $i%2;
									
						if($oddeven == 0){
							$class = "roweven";
						}else{
							$class = "rowodd";
						}
						$location = '';
						$project = SalesManager::getInstance()->getProjectByPK($s->getProjectcode());
						if(isset($project)){
							$projectName = $project->getProjectname();
							$locationcode = $project->getLocationcode();
                                                        $report_sql = new report_sql();
                                                        $location = $report_sql->get_location_name($locationcode);
						}
						
						$projectdetail = SalesManager::getInstance()->getBlockNumberByPK($s->getBlockrefnumber());
						if(isset($projectdetail)){
							$blockNo = $projectdetail->getBlocknumber();
						}
						
						$customer = SalesManager::getInstance()->getCustomerByPK($s->getCustomercode());
						if(isset($customer)){
							$customerName = "<strong>".$customer->getTitle()." ".$customer->getFirstname()." ".$customer->getFamilyname()."</strong></br>";
							$customerName .= $customer->getAddressline1()." ".$customer->getAddressline2()." ".$customer->getPostcode()." ".$customer->getCountry();
						}
													
						echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
						echo "<td width='10%'>"."<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$s->getRefno().">".$s->getAgrementstartdate()."</td>";
						echo "<td>$projectName - $location</td>";	 
						echo "<td width='10%'>$blockNo</td>";
						echo "<td>$customerName</td>";
						echo "<td>".$s->getDescription()."</td>";
						
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
						$projectName = "";
	 					$blockNo = "";
	 					$customerName = "";
	 					echo "<tr><td colspan='8'><strong><i>Today's Sales</i></strong></td></tr>";  					
						foreach($saleslist As $s){
							$oddeven = $i%2;
										
							if($oddeven == 0){
								$class = "roweven";
							}else{
								$class = "rowodd";
							}
							
							$project = SalesManager::getInstance()->getProjectByPK($s->getProjectcode());
							if(isset($project)){
								$projectName = $project->getProjectname();
							}
							
							$projectdetail = SalesManager::getInstance()->getBlockNumberByPK($s->getBlockrefnumber());
							if(isset($projectdetail)){
								$blockNo = $projectdetail->getBlocknumber();
							}
							
							$customer = SalesManager::getInstance()->getCustomerByPK($s->getCustomercode());
							if(isset($customer)){
								$customerName = "<strong>".$customer->getTitle()." ".$customer->getFirstname()." ".$customer->getFamilyname()."</strong></br>";
								$customerName .= $customer->getAddressline1()." ".$customer->getAddressline2()." ".$customer->getPostcode()." ".$customer->getCountry();
							}
														
							echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
							echo "<td width='10%'>"."<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$s->getRefno().">".$s->getAgrementstartdate()."</td>";
							echo "<td>$projectName</td>";	 
							echo "<td width='10%'>$blockNo</td>";
							echo "<td>$customerName</td>";
							echo "<td>".$s->getDescription()."</td>";
							
							echo "</tr>";
							
							$i++;
						}
				}else{
					echo "<tr><td colspan='8' align='center'><h3>No sales today so far</h3></td></tr>";
				}
			}
		}
	?>
	
	<?php if($i > 0){?>
	<!-- added on 20-06-2012 -->
		<tr><td colspan='8'>
			<input type="button" name='print' id='print' value='[l&#8801;l]' class='buttontype1' onclick='printSpecial()'>
		</td></tr>
	<?php }?>
	
	
	<tr><td colspan='8' align='center'><strong><?php if($i == ""){echo "0 Records Found";}else{echo "$i Records Found";}?></strong></td></tr>
	<tr>
		<td colspan='8' align='center'>
			<input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i;?>">
			<form method='post' action='?m=sales&a=EditSales' name='frmeditsales' id='frmeditsales'>
				<input type='hidden' name="selectedrow" id="selectedrow" value="0">
			</form>
			
			<form method='post' action='?m=sales&a=SalesDetails' name='frmshowdetails' id='frmshowdetails'>
				<input type='hidden' name="selectedrow_2" id="selectedrow_2" value="0">
			</form>
			
			<form method='post' action='?m=sales&a=DeleteSale' name='frmdeletesale' id='frmdeletesale'>
				<input type='hidden' name="selectedrow_3" id="selectedrow_3" value="0">
			</form>
			
			<form method='post' action='?m=refunds&a=AddNewRefund' name='frmforcerefund' id='frmforcerefund'>
				<input type='hidden' name="selectedrow_4" id="selectedrow_4" value="0">
			</form>
			
			<form method='post' action='?m=statement&a=NewPaymentStatement' name='frmprintstatement' id='frmprintstatement'>
				<input type='hidden' name="selectedrow_5" id="selectedrow_5" value="0">
			</form>
			
			<form method='post' action='?m=rightoff&a=SaleRightOff' name='frmrightoffsale' id='frmrightoffsale'>
				<input type='hidden' name="selectedrow_6" id="selectedrow_6" value="0">
			</form>
		</td>
	</tr>
</table>
</div>