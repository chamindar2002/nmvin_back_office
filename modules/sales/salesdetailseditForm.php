<?php
if(isset($_REQUEST['locationslist'])){
	$locationslist = $_REQUEST['locationslist'];
}

$sdate = date("d-m-Y");
$salesrefno = 0;
if(isset($_POST['selectedrow'])){
	$salesrefno = $_POST['selectedrow'];
}

if(isset($_REQUEST['salesrecord'])){
	$salesobj = $_REQUEST['salesrecord'];
	if(sizeof($salesobj) == 1){
		$locationcode_selected = $salesobj->getLocationcode();
		$prcode_selected = $salesobj->getProjectcode();
		$blockno_selected = $salesobj->getBlockrefnumber();
		$pplan_selected = $salesobj->getPayplanrefno();
		
		$projects = SalesManager::getInstance()->listProjectByLocationCode($locationcode_selected);
		$projectdls = SalesManager::getInstance()->listProjectDetailsByPrCode($prcode_selected);
		$pmntplans = SalesManager::getInstance()->listPaymentPlayByProjectCode($prcode_selected);
	}
}




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

<form method='post' action='?m=sales&a=EditSales' name='frmeditsalesdetails' id='frmeditsalesdetails'>
<table class='formstable' border='0'>
	<tr>
		<td>Date</td>
	</tr>
	
	<tr>
		<td width="150">
			<input id="start_dt" name="start_dt" class='datepicker' size='11' value="<?php echo $sdate;?>" />
		</td> 
	</tr>
	<tr><td>Location</td></tr>
	<tr><td>
		<?php
			if(sizeof($locationslist)>0){
				echo "<select name='location' id='location' class='selectbox' onchange='loadProjects(this.value)'>";
				echo "<option value='0'></option>";
					foreach($locationslist As $lst){
						if($locationcode_selected == $lst->getLocationcode()){
							echo "<option value=".$lst->getLocationcode()." selected>".$lst->getLocationname()."</option>";
						}
						else{
							echo "<option value=".$lst->getLocationcode().">".$lst->getLocationname()."</option>";
						}
					}
				echo "</select>";
			}
		?>
	</td></tr>
	
	<tr><td>Project</td></tr>
	<tr><td><div id='div_projects'>
		<?php
			if(sizeof($projects) > 0){
				echo "<select name='projects' id='projects' class='selectbox' onchange='loadBlocks(this.value)'>";
				echo "<option value='0'></option>";
					foreach($projects As $pr){
						$prcode = $pr->getProjectcode();
						$prname = $pr->getProjectname();
						if($prcode_selected == $prcode){
							echo "<option value=\"$prcode\" selected>$prname</option>";
						}
						else{
							echo "<option value=\"$prcode\">$prname</option>";
						}
					}
				echo "</select>";
			}
		?>
	</div></td></tr>
	
	<tr><td>Block Number</td></tr>
	<tr><td><div id='div_projectdetails'>
		<?php
		if(sizeof($projectdls) > 0){
			echo "<select name='projectdetails' id='projectdetails' class='selectbox' onchange='loadPaymentplan(this.value)'>";
			echo "<option value='0'></option>";
				foreach($projectdls As $pr){
					$refno = $pr->getRefno();
					$blcno = $pr->getBlocknumber();
					$rsv_status = $pr->getReservestatus();
					if($blockno_selected == $refno){
						echo "<option value=\"$refno\" selected>$blcno</option>";
					}else{
						if($rsv_status == 0){
							echo "<option value=\"$refno\">$blcno</option>";
						}
					}
				}
			echo "</select>";
		}
		?>
	</div></td></tr>
	
	<tr><td>Payment Plan</td></tr>
	<tr><td><div id='div_paymentplan'>
		<?php
			if(sizeof($pmntplans) > 0){
				echo "<select name='paymentplan' id='paymentplan' class='selectbox' onchange='loadPaymentplan(this.value)'>";
				echo "<option value='0'></option>";
					foreach($pmntplans As $pr){
						$refno = $pr->getRefno();
						$desc = $pr->getDescription();
						$nofinstall = $pr->getNofinstallments();
						$installamt = $pr->getInstallamount();
						if($pplan_selected == $refno){
							echo "<option value=\"$refno\" selected>$desc \t---> [$nofinstall X $installamt]</option>";
						}else{
							echo "<option value=\"$refno\">$desc \t---> [$nofinstall X $installamt]</option>";
						}	
					}
				echo "</select>";
			}
		?>
	</div></td></tr>
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
		&nbsp;
		<input type="button" name="save" id="save" value="Save" class='buttontype1' onclick="submitForm()">
		<input type="button" name="cancel" id="cancel" value="Cancel" class='buttontype1' onclick="cancelForm()">
		&nbsp;
		<input type='hidden' name='customercode' id='customercode' value="<?php echo $ccode; //refered from customerdetailsForm.php Line no: 4 ?>">
		<input type='hidden' name='editsalesrec' id='editsalesrec' value="<?php echo $salesrefno;?>">
		<input type='hidden' name='originalblockrefno' id='originalblockrefno' value="<?php echo $blockno_selected;?>">
		<?php		
			}
		?>
	</td></tr>
	
	
	
</table>
</form>