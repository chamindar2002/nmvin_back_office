<?php
if(isset($_REQUEST['locationslist'])){
	$locationslist = $_REQUEST['locationslist'];
}

$sdate = date("d-m-Y");

$today = explode(".",date("d.m.Y"));
$d = $today[0];
$m = $today[1];
$y = $today[2];
//echo $y;
$duedate = "";
 
if($m != 2){
	if($d >= 25 ){
		$duedate = 24;		
	}else if($d <= 5){
		$duedate = 5;
	}else{
		$duedate = $d;
	}
}
else{
	if($d >= 22 ){
		$duedate = 22;		
	}else if($d <= 5){
		$duedate = 5;
	}else{
		$duedate = $d;
	}
}

//echo $duedate;
?>

<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<script type='text/javascript'>

	function loadProjects(location_id)
	{
	var xmlhttp;
	if (location_id.length==0)
	  {
	  document.getElementById("div_projects").innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    document.getElementById("div_projects").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","modules/sales/ajx_showprojects.php?q="+location_id,true);
	//xmlhttp.open("GET","http://220.247.234.143/modules/sales/ajx_showprojects.php?q="+location_id,true);
	xmlhttp.send();
	//alert(location_id);  
	}

	function loadPaymentPlan(prcode){
		var xmlhttp;
		if (prcode.length==0)
		  {
		  document.getElementById("div_paymentplan").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    document.getElementById("div_paymentplan").innerHTML=xmlhttp.responseText;
		    }
		  }
		xmlhttp.open("GET","modules/sales/ajx_showpaymentplan.php?q="+prcode,true);
		xmlhttp.send();
		//alert(prcode);  
	}

	function loadBlocks(prcode){
		var xmlhttp;
		if (prcode.length==0)
		  {
		  document.getElementById("div_projectdetails").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    document.getElementById("div_projectdetails").innerHTML=xmlhttp.responseText;
		    }
		  }
		xmlhttp.open("GET","modules/sales/ajx_showprojectdetails.php?q="+prcode,true);
		xmlhttp.send();
		//alert(prcode);
		loadPaymentPlan(prcode);  
	}
</script>

<link rel="stylesheet" type="text/css" href="calendar/datepicker.css" /> 
<script type="text/javascript" src="calendar/datepicker.js"></script> 

<form method='post' action='?m=sales&a=AddNewSale' name='frmsalesdetails' id='frmsalesdetails'>
<table class='formstable' border='0'>
	<tr>
		<td>Date</td>
	</tr>
	
	<tr>
		<td width="150">
                    <input style="width: 205px;" id="start_dt" name="start_dt"  size='11' onmouseover="rl_date();" value="<?php echo $sdate;?>" />
		</td> 
	</tr>
	<tr><td>Location</td></tr>
	<tr><td>
		<?php
			if(sizeof($locationslist)>0){
				echo "<select name='location' id='location' class='selectbox' onchange='loadProjects(this.value)'>";
				echo "<option value='0'></option>";
					foreach($locationslist As $lst){
						echo "<option value=".$lst->getLocationcode().">".$lst->getLocationname()."</option>";
					}
				echo "</select>";
			}
		?>
	</td></tr>
	
	<tr><td>Project</td></tr>
	<tr><td>
		<div id='div_projects'>
			<select class='selectbox' name='projects' id='projects'><option value='0'></option></select>
		</div>
	</td></tr>
	
	<tr><td>Block Number</td></tr>
	<tr><td>
		<div id='div_projectdetails'>
			<select class='selectbox' name='projectdetails' id='projectdetails' class='selectbox' ><option value='0'></option></select>
		</div>
	</td></tr>
	
	<tr><td>Payment Plan</td></tr>
	<tr><td>
		<div id='div_paymentplan'>
			<select class='selectbox' name='paymentplan' id='paymentplan' class='selectbox' ><option value='0'></option></select>
		</div>
	</td></tr>
	<tr>
		<td>Payment Due On</td>
	</tr>
	<tr>
		<td>
		<input type="text" name='duedate' id='duedate' value="<?php echo $duedate; ?>" class='textboxsmall' readonly="readonly">
		</td>
	</tr>
	<tr><td align='right'>
		<?php
			if(isset($_REQUEST['locationslist'])){
		?>
		<input type="button" name="save" id="save" value="Save" class='buttontype1' onclick="submitForm()">
		&nbsp;
		<input type="button" name="cancel" id="cancel" value="Cancel" class='buttontype1' onclick="cancelForm()">
		<input type='hidden' name='customercode' id='customercode' value="<?php echo $ccode; //refered from sales/customerdetailsForm.php Line no: 4 ?>">
		<?php		
			}
		?>
	</td></tr>
	
	
	
</table>
</form>