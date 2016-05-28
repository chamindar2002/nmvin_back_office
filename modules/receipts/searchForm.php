<?php
//$s = $_REQUEST['saleslist'];
//echo sizeof($s)."xxxxx";
?>
<link rel="stylesheet" type="text/css" href="calendar/datepicker.css" /> 
<script type="text/javascript" src="calendar/datepicker.js"></script> 



<script type='text/javascript'>
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

//function submitsearchform(form_name){
//	//alert(form_name);
//	var frmname = document.getElementById(form_name);
//	alert(frmname);
//	frmname.submit();
//}
</script>

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
				<form method='POST' action='?m=receipts&a=ReceiptsList' name="frmsearchbyccode" id="frmsearchbyccode">
				
				<table width='100%' border='0'>
				<tr><td><input type='hidden' name='searchby' id='searchby' value='ccode'></td></tr>
					<tr><td>
						<input type='text' name='customercode' id='customercode' class='textboxmedium'>
						&nbsp;
						<input type="submit" name='search' id='search' value='Search' class='buttontype1' onclick="submitsearchform('frmsearchbyccode')">
					</td></tr>
				</table>
				
				</form>
			</div>
			
			<div id='div_searchbydrange' style="display:none;">
				<form method='POST' action='?m=receipts&a=ReceiptsList' name='frmsearchbydrange' id='frmsearchbydrange'>
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
