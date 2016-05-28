<?php

if(isset($_POST['start_dt'])){
	$sdate = $_POST['start_dt'];
}else{$sdate = "";}

if(isset($_POST['start_dt'])){
	$edate = $_POST['end_dt'];
}else{$edate = "";}
	
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
</script>

<form method='post' action='?m=sales&a=SalesList' name='frmsearch' id='frmsearch'>
<table class='formstable' border='0'>
<!--	<tr>-->
<!--		<td>Search From</td>-->
<!--	</tr>-->
<!--	<tr>-->
<!--		<td width="150">-->
<!--			<input id="start_dt" name="start_dt" class='datepicker' size='11' value="<?php //echo $sdate;?>" />-->
<!--		</td> -->
<!--		-->
<!--	</tr>-->
<!---->
<!--	<tr>-->
<!--		<td>Search To</td>-->
<!--	</tr>-->
<!---->
<!--	<tr>-->
<!--		<td>-->
<!--			<input id="end_dt" name="end_dt" class='datepicker' size='11' value="<?php //echo $edate;?>"; /> -->
<!--			&nbsp;&nbsp;&nbsp;-->
<!--			<input type="submit" name="search" id="search" value="Search" class="buttontype1">-->
<!--		</td>-->
<!--	</tr>-->
	
<!--	********************************************************************************-->

		<tr>
			<td>Search by</td>
		</tr>
	
	<tr>
		<td width='20%'>
			<?php
			$searchcriteria = array();
				
			$searchcriteria[0] = "";
			$searchcriteria[1] = "Passport/NIC Number";
			$searchcriteria[2] = "Date Range";
			echo "<select name='searchcriteria' id='searchcriteria' class='selectboxlarge' onchange='loadsearch_criteria(this.value)'>";
				foreach($searchcriteria As $key=>$value){
			 		if($key == $selected){
						echo "<option value=\"$key\" selected>$value</option>";
					}else{
						echo "<option value=\"$key\">$value</option>";
						}
				}
			 echo "</select>";
				
			?>
		</td>
	</tr>
	<tr>
	
		<td>
			<div id='div_searchbyccode' style='display:none'>
				<form method='POST' action='?m=sales&a=SalesList' name="frmsearchbyccode" id="frmsearchbyccode">
				
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
				<form method='POST' action='?m=sales&a=SalesList' name='frmsearchbydrange' id='frmsearchbydrange'>
					<table width='100%' border='0'>
					<tr><td><input type='hidden' name='searchby' id='searchby' value='drange'></td></tr>
						<tr>
							<td>Search From</td>
						</tr>
						
						<tr>
							<td width="150">
								<input id="start_dt" name="start_dt" class='datepicker' size='11' value="<?php echo $sdate;?>" readonly="readonly" />
							</td> 
							
						</tr>
						
						<tr>
							<td>Search To</td>
						</tr>
						
						<tr>
							<td>		
								<input id="end_dt" name="end_dt" class='datepicker' size='11' value="<?php echo $edate;?>"; readonly="readonly" /> 
								
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
<!--	********************************************************************************-->
	<tr>
		<td width='20%'>

		<?php 
			//printLocations($selected);
		?>
	  				  				
		</td>
<!--	  	<td>-->
<!--	  		<input type="submit" name="search" id="search" class='buttontype1' value='Search'>-->
<!--	  	</td>			-->
	</tr>
	
	<tr>
		<td>
			<input type='hidden' name='search' id='search' value='true'>
		</td>
	</tr>
</table>
</form>	