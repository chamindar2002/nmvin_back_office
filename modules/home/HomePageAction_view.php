<script>
var alternate=0
var standardbrowser=!document.all&&!document.getElementById

if (standardbrowser)
	document.write('<form name="tick"><input type="text" name="tock" size="11"></form>')

	function show(){
		if (!standardbrowser)
			var clockobj=document.getElementById? document.getElementById("digitalclock") : document.all.digitalclock
			var Digital=new Date()
			var hours=Digital.getHours()
			var minutes=Digital.getMinutes()
			var dn="AM"

			if (hours==12) dn="PM" 
					if (hours>12){
						dn="PM"
						hours=hours-12
			}

			if (hours==0) hours=12
				if (hours.toString().length==1)
					hours="0"+hours
					if (minutes<=9)
						minutes="0"+minutes
						if (standardbrowser){
							if (alternate==0)
								document.tick.tock.value=hours+" : "+minutes+" "+dn
							else
								document.tick.tock.value=hours+"   "+minutes+" "+dn
							}
							else{
								if (alternate==0)
								clockobj.innerHTML=hours+" : "+minutes+" "+"<sup style='font-size:10px'>"+dn+"</sup>"
								else
								clockobj.innerHTML=hours+" : "+minutes+" "+"<sup style='font-size:10px'>"+dn+"</sup>"
							}
	alternate=(alternate==0)? 1 : 0
	setTimeout("show()",1000)
	}
window.onload=show

</script>

<style>
<!--
.styling{
background-color:#474747;
color:#33CC33;
font-weight:bold;
font-size:medium;
padding: 5px;
border:3px solid #ffffff;
}
-->
</style>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<?php
	$today_1 = date('l');
	$today_2 = date(' jS \ ');
	$month = date('F');
	$year = date('Y');
	//echo "$today_1 ? $today_2 ? $month ? $year";
?>
<table class='container'>
<tr><td>
	
	<tr>
		<td>
			
			<table class='contenttable'  border = '0'>
				<tr>
					<td width='10%'>
						<span id="digitalclock" class="styling"></span>
					</td>		
				
					<td width='60%'>
						<h2>
						<?php
						 //echo date('l jS \of F Y ');
						 echo $today_1;
						 ?>
						</h2>
						<h3>
						<?php
						echo "$today_2 $month $year";
						?>
						</h3>
						
					</td>

					<td width='30%'>
<!--						<script src="//www.gmodules.com/ig/ifr?url=http://hosting.gmodules.com/ig/gadgets/file/110798108921287845009/weather_badge.xml&amp;up_gadgetTitle=Weather%20Badge&amp;up_gadgetFontSize=12&amp;up_gadgetHeight=82&amp;up_gadgetBgColor=%23FFFFFF&amp;up_allowInPageSettings=1&amp;up_layout=2&amp;up_theme=0&amp;up_degreeType=0&amp;up_locationType=0&amp;up_WOEID=&amp;up_place=&amp;up_showInPageSettings=false&amp;up_timeToken=0&amp;up_isLocalStorage=0&amp;synd=open&amp;w=400&amp;h=82&amp;lang=all&amp;country=ALL&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>-->
                                            <script src="//www.gmodules.com/ig/ifr?url=http://www.pixelmedia.nl/gmodules/ucc.xml&amp;up_fromcur=USD&amp;up_tocur=LKR&amp;synd=open&amp;w=320&amp;h=110&amp;title=__MSG_title__&amp;lang=en&amp;country=IN&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
                                            
					</td>
				</tr>
				
				<tr><td colspan='3'>
						<strong>Today</strong>
				</td></tr>
				
				<tr><td colspan='3'>
					<?php
					 require_once('sales/SalesManager.php');
					 $salescount = SalesManager::getInstance()->countTodaysSales();
					 $msg = "";
					 if($salescount == 0){
					 	$msg .= "No New Sales";
					 }
					 else if($salescount == 1){
					 	$msg .= "$salescount New Sale";
					 	$msg .= " [ <a href='?m=sales&a=SalesList'>Go To Sales</a> ]";
					 }
					 else{
					 	$msg .= "$salescount New Sales";
					 	$msg .= " [ <a href='?m=sales&a=SalesList'>Go To Sales</a> ]";
					 }
					 //$msg .= " [ <a href='?m=sales&a=SalesList'>Go To Sales</a> ]";
					 echo $msg;
					?>
				</td></tr>
				
				<tr><td colspan='3'>
					<?php
					require_once('receipts/ReceiptsManager.php');
					$receiptscount = ReceiptsManager::getInstance()->countTodaysReceipts();
					$msg = "";
					 if($receiptscount == 0){
					 	$msg .= "No New Receipts";
					 }
					 else if($receiptscount == 1){
					 	$msg .= "$receiptscount New Receipt";
					 	$msg .= " [ <a href='?m=receipts&a=ReceiptsList'>Go To Receipts</a> ]";
					 }
					 else{
					 	$msg .= "$receiptscount New Receipts";
					 	$msg .= " [ <a href='?m=receipts&a=ReceiptsList'>Go To Receipts</a> ]";
					 }
					 //$msg .= " [ <a href='?m=receipts&a=ReceiptsList'>Go To Receipts</a> ]";
					 echo $msg;
					?>
				</td></tr>
				
				
			</table>
	
		</td>
	</tr>
</table>

