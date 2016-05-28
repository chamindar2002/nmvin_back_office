<?php
 include_once('receiptFunctions.php');
 require_once("ReceiptsManager.php");
?>
<link rel="stylesheet" type="text/css" href="calendar/datepicker.css" />

<script type="text/javascript" src="calendar/datepicker.js"></script> 
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
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

function restoreVoidedReceipt(){
	var receiptno = document.getElementById('selectedrow');
	if(receiptno.value != 0){
		document.frmrestorereceipt.submit();
	}
}


function loadsearch_criteria(v){
	
	if(v == 1){
		var x = document.getElementById('div_searchbyccode').style.display = "block";
		var y = document.getElementById('div_searchbydrange').style.display = "none";
		//alert(x);
	}else{
		var x = document.getElementById('div_searchbyccode').style.display = "none";
		var y = document.getElementById('div_searchbydrange').style.display = "block";
		//alert(x);
		}
}

function loadReceiptDetails(){
	var selectedreceipt = document.getElementById('selectedrow_2');
	if(selectedreceipt.value != 0){
		document.frmshowdetails.submit();
	}
}


function loadVoidReceipts(){
	var selectedreceipt = document.getElementById('selectedrow_3');
	if(selectedreceipt.value != 0){
		var s = confirm("Are you sure you want to void this Receipt");
		if(s==true){
			document.frmvoid.submit();
		}
	}
}

function loadPrint(){
	var selectedreceipt = document.getElementById('selectedrow');
	if(selectedreceipt.value != 0){
		document.frmprintreceipt.submit();
	}
}

function showMessageDiv(msg,divid){
	//alert("saved success fully");
	document.write("<div class='"+divid+"' id='"+divid+"'>");
	document.write ("<strong>"+msg+"</strong>");
	document.write("</div>");

	setTimeout("hideMessageDiv('"+divid+"')", 3000);
}

function hideMessageDiv(divid){
	document.getElementById(divid).style.display = 'none';
	window.location = "index.php?m=receipts&a=VoidedReceiptsList";
}
</script>


<?php
//session variables set @ DeleteCustomerAction_success.php page
	if(isset($_SESSION['deletereceipt_success'])){
		$message = $_SESSION['deletereceipt_success'];
		unset($_SESSION['deletereceipt_success']);
		$divid = "message_success";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
	else if(isset($_SESSION['deletereceipt_failed'])){
		$message = $_SESSION['deletereceipt_failed'];
		unset($_SESSION['deletereceipt_failed']);
		$divid = "message_error";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
?>



<?php 
if(isset($_SESSION['restorereceipt_success'])){
		$message = $_SESSION['restorereceipt_success'];
		unset($_SESSION['restorereceipt_success']);
		$divid = "message_success";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
	else if(isset($_SESSION['restorereceipt_failed'])){
		$message = $_SESSION['restorereceipt_failed'];
		unset($_SESSION['restorereceipt_failed']);
		$divid = "message_error";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}

?>

<table class='container'>
<tr><td>
	
<tr><td>
	<table class='contenttable'>
	<tr><td><strong>Voided Receipts</strong></td></tr>
	<tr>
		<td>
		
		
<!--			-------------------------------------------------------------------------------------- -->

				<table class='formstable' border='0'>
					<tr>
						<td>Search by</td>
					</tr>
					
					<tr>
						<td width='20%'>
							<?php showsearch_criteria(0);?>
						</td>
					</tr>
					
					<tr>
						<td>
							<div id='div_searchbyccode' style='display:none'>
								<form method='POST' action='?m=receipts&a=VoidedReceiptsList' name="frmsearchbyccode" id="frmsearchbyccode">
								
								<table width='100%' border='0'>
								<tr><td><input type='hidden' name='searchby' id='searchby' value='ccode'></td></tr>
									<tr><td>
										<input type='text' name='customercode' id='customercode' class='textboxmedium'>
										&nbsp;
										<input type="submit" name='search' id='search' value='Search' class='buttontype1' onclick="">
									</td></tr>
								</table>
								
								</form>
							</div>
							
							<div id='div_searchbydrange' style="display:none;">
								<form method='POST' action='?m=receipts&a=VoidedReceiptsList' name='frmsearchbydrange' id='frmsearchbydrange'>
									<table width='100%' border='0'>
									<tr><td><input type='hidden' name='searchby' id='searchby' value='drange'></td></tr>
										<tr>
											<td>Search From</td>
										</tr>
										
										<tr>
											<td width="150">
												<input id="start_dt" name="start_dt" class='datepicker' size='11' value="" />
											</td> 
											
										</tr>
										
										<tr>
											<td>Search To</td>
										</tr>
										
										<tr>
											<td>		
												<input id="end_dt" name="end_dt" class='datepicker' size='11' value=""; /> 
												
											</td>
										</tr>
													
										<tr><td>
											<input type="submit" name='search' id='search' value='Search' class='buttontype1' onclick="submitsearchform('frmsearchbydrange')">
										</td></tr>
									</table>
								</form>
							</div>
							
						</td>
					</tr>
				</table>



<!--			-------------------------------------------------------------------------------------- -->
			
			
			
	  	</td>
	 </tr>
	 
	 <tr>
	 	<td>
	 		
<!--	 		------------------------------------------------------------------------------------------------>
				<table class='datatable'>
					<tr>
						<td colspan='8'>
						<?php 
							if($_SESSION[SYSTEMNAME.'logid'] == 1){
								//display restore button only to the pinnacleadmin
						?>
							<ul class='submenu1'>
							<li><a href="#" title="Restore Voided Receipt" onClick='restoreVoidedReceipt()'>Restore</a></li>
							</ul>
						<?php }?>
						</td>
					</tr>
					
					
					<tr><td><b>Date</b></td><td><b>Receipt #</b></td><td><b>Project</b></td><td><b>Block Number</b></td><td><b>Customer</b></td><td><b>Receipt Amount</b></td><td><b>Voided By</b></td></tr>
					
				 	<?php
				 		if(isset($_REQUEST['voidedreceipts'])){
							
							$search = $_REQUEST['voidedreceipts'];
							
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
										
										$deletedby = $s->getDeletedby();
				
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
										
//										$user = ReceiptsManager::getInstance()->getUserNameByUserId();
//										if(sizeof($user) == 1){
//											$username = $user->getLoginname();
//										}
										$username = ".";
										$rcptvoidedbyobj = ReceiptsManager::getInstance()->getReceiptAddedbyUserName($deletedby);
										if(sizeof($rcptvoidedbyobj) == 1){
											$username = $rcptvoidedbyobj->getLoginname();	
										}
										
										echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
										echo "<td width='10%'>"."<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$s->getReceiptno().">".$s->getReceiptdate()."</td>";
										echo "<td width='8%'>".$s->getReceiptno()."</td>";
										echo "<td>$projectName</td>";	 
										echo "<td width='10%'>$blockNo</td>";
										echo "<td>$customerName</td>";
										echo "<td>$paidamt</td>";
										echo "<td>$username</td>";
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
							if(isset($_REQUEST['voidedtodaysreceipts'])){
								$voidedreceiptslist = $_REQUEST['voidedtodaysreceipts'];
								
								if(sizeof($voidedreceiptslist) != 0){
										$i = 0;
										$class = "";
										$total = 0;
										echo "<tr><td colspan='8'><strong><i>Today's Voided Receipts</i></strong></td></tr>";
										foreach($voidedreceiptslist As $s){ 		
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
											$deletedby = $s->getDeletedby();
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
											
//											$user = ReceiptsManager::getInstance()->getUserNameByUserId();
//											if(sizeof($user) == 1){
//												$username = $user->getLoginname();
//											}
					
											$rcptvoidedbyobj = ReceiptsManager::getInstance()->getReceiptAddedbyUserName($deletedby);
											//if(sizeof($rcptvoidedbyobj == 1)){
												$username = $rcptvoidedbyobj->getLoginname();
											//}	
										
											echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
											echo "<td width='10%'>"."<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$s->getReceiptno().">".$s->getReceiptdate()."</td>";
											echo "<td width='8%'>".$s->getReceiptno()."</td>";
											echo "<td>$projectName</td>";	 
											echo "<td width='10%'>$blockNo</td>";
											echo "<td>$customerName</td>";
											echo "<td>$paidamt</td>";
											echo "<td>$username</td>";
											echo "</tr>";
											
											$i++;
										}
										echo "<tr><td colspan='5' align='right'>Voided Receipts Total &rarr;</td><td><strong>".number_format($total,2)."</strong></td></tr>";
									}else{
											echo "<tr><td colspan='8' align='center'><h3>No voided receipts today so far</h3></td></tr>";
										 }
								}
							
						}
					?>
					<tr>
						<td colspan='8' align='center'>
							<input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i;?>">
							<form method='post' action='?m=receipts&a=RestoreVoidedReceipt' name='frmrestorereceipt' id='frmrestorereceipt'>
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
<!--	 		------------------------------------------------------------------------------------------------>	
	 		
	 		
	 	</td>
	 </tr>
	  
	</table>
</td></tr>

</table>