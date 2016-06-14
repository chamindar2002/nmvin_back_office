<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<script type='text/javascript'>
function goBack(){
	window.location = "index.php?m=sales&a=SalesList";
}


var gAutoPrint = true; // Flag for whether or not to automatically call the print function

function printSpecial()  {
   if (document.getElementById != null){
      var html = '<HTML>\n<HEAD>\n';
       html += "<link href=\"themes/nimawinbackofficetheme/css/formstyles.css\" rel=\"stylesheet\" type=\"text/css\" />";

      if (document.getElementsByTagName != null){
         var headTags = document.getElementsByTagName("head");
         if (headTags.length > 0)
            html += headTags[0].innerHTML;
      }
      
      html += '\n</HE' + 'AD>\n<BODY>\n';
//
//      html += "<table>";
//      html += "<tr><td align='left'><img src='themes/nimawinbackofficetheme/images/logo2.gif' width='36px' height='45px'></img></td></tr>";
//      html += "<tr><td align='left'>No. 187, First Floor, Ward Place, Colombo 7</td></tr>";
//      html += "<tr><td align='left'>Phone: (+94) 11 2695717,(+94) 11 2695728</td></tr>";
//      html += "<tr><td align='left'>Fax: (+94) 11 2667900</td></tr>";
//      html += "<tr><td align='left'>Email: nimawingreenpark@gmail.com</td></tr>";
//      html += "<tr><td align='left'>Skype: nimawin.greenpark</td></tr>";
//      //html += "<tr><td align='left'></td></tr>";
//      html += "</table>";
//	  html += "<h3>Block Allocation Confirmation Note</h3>";	
      
      var printReadyElem = document.getElementById("printReady");
      
      if (printReadyElem != null){
          html += printReadyElem.innerHTML;
      } else {
          alert("Could not find the printReady section in the HTML");
          return;
      }
      
      html += '\n</BO' + 'DY>\n</HT' + 'ML>';

      var printWin = window.open("","printSpecial");
      printWin.document.open();
      printWin.document.write(html);
      printWin.document.close();
      if (gAutoPrint)
        printWin.print();
      } else {
        alert("Sorry, the print ready feature is only available in modern browsers.");
      }
}
</script>

<style type='text/css'>

#tblprintdata{
 border:1px solid #000000;
}

#tdleft{
	border-right:1px solid; #000000;
}

#tdbordertop{
	border-top:1px solid #000000;
}
</style>
<?php 
require_once("sales/SalesManager.php");


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

<table class='printviewtable' cellpadding='3px' border='0'>
<tr><td align='center'>
<div id='printReady'>

<table border='0px' cellpadding='3px' id='tblprintdata'>
	<tr>
		<td colspan='2' width='100px'><img src='themes/nimawinbackofficetheme/images/nimavin-01.jpg' width='70px' height='80px'></td>
	</tr>
	
	<tr>
		<td colspan='2' align='right'>
			<h3>Nimavin Developers (Pvt) Ltd.</h3>
			<hr>
		</td>
	</tr>
	
	<tr>
		<td colspan='2'>
		<?php echo $customerName;?>
		<hr>
		</td>
	</tr>
	
	<tr>
		<td colspan='2'>
			<table>
				<tr>
				<td width='25%'>Project Name</td><td><strong><?php echo $projectName;?></strong></td>
				<td width='25%'>Block Number</td><td><strong><?php echo $blockNo;?></strong></td>
				</tr>
			</table>
			<hr>
		</td>
	</tr>
	
	<tr>
		<td width='80%' valign="top" id='tdleft'>
			<table border='0' width='100%'>
				<tr><td colspan='4'><strong>Total Payable</strong></td></tr>
				<tr><td colspan='4'><strong>Payments</strong></td></tr>
				<tr><td width='40%'>Date</td><td width='40%'>Receipt#</td><td width='20%'>&nbsp;</td><td>&nbsp;</td></tr>
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
					<tr><td><?php echo $rdate;?></td><td><?php echo $rno; ?></td><td align='right'><?php echo number_format($ramount,2);?></td><td>&nbsp;</td></tr>
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
				<tr><td>&nbsp;</td><td>&nbsp;</td><td id='tdbordertop'></td><td>&nbsp;</td></tr>	
				
				<tr><td align='left' colspan='4'>Total Paid</td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td align='left' colspan='4'><strong>Due Amount</strong></td></tr>
			</table>
		</td>
		
		<td width='20%' valign="top" align="right">
			<table border='0' width='100%'>
				<tr><td align='right' colspan='4'><strong><?php echo number_format($totalpayable,2);?></strong></td></tr>
				<tr><td align='right' colspan='4'>&nbsp;</td></tr>
				<tr><td align='right' colspan='4'>&nbsp;</td></tr>
					<?php
	
					$receipts = SalesManager::getInstance()->listReceiptsBySaleRefno($salerefno);
						if(sizeof($receipts > 0)){
							//$receiptstotal = 0;
							foreach($receipts As $r){
							
				 	?>
<!--					<tr><td>&nbsp;</td><td>&nbsp;</td><td align='right'>&nbsp;</td><td>&nbsp;</td></tr>-->
					<tr><td align='right' colspan='4'>&nbsp;</td></tr>
					<?php 								
							}
						
						}
   					?>
   						
   				<tr><td align='right' colspan='4'>&nbsp;</td></tr>	
   				<tr><td align='right' colspan='4'><?php echo number_format($receiptstotal,2);?></td></tr>
   				<tr><td id='tdbordertop'>&nbsp;</td></tr>
				<tr><td align='right' colspan='4'><strong><?php echo number_format($outstandings,2); ?></strong></td></tr>
			</table>
		</td>
	</tr>
	
</table>

</div>
</td></tr></table>
<br>

<table class='printviewtable' cellpadding='3px' border='0'>
<tr>
<td colspan='4' align='right'>
<input type="button" name='print' id='print' value='[l&#8801;l]' class='buttontype1' onclick='printSpecial()'>
<input type='button' name='back' id='back' value='Back' class='buttontype1' onclick='goBack()'>
</td>
</tr>
</table>






<!--		-------------------------------------------------------------------- --><!--


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


*************************************Payment Details **************************************************************

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
-->