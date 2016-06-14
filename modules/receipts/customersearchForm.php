<?php
require_once("sales/salesFunctions.php");

require_once("projectdetails/ProjectDetailsManager.php");

$searchfor = "";
$selectedCriteria = "";
$selected_block = "";

if(isset($_POST['searchkeywordbox'])){
	$searchfor = $_POST['searchkeywordbox'];
}
if(isset($_POST['searchcriteria'])){
	$selectedCriteria= $_POST['searchcriteria'];
//	if($selectedCriteria == 2){
//		$selectedCriteria = 0;
//	}
}
if(isset($_POST['projects'])){
	$selectedproject = $_POST['projects'];
}
//$selectedproject = 0;
if(isset($_POST['drop_blocklisting'])){
	$selected_block = $_POST['drop_blocklisting'];
}

$kriteria = array();

$kriteria[0] = "NIC/Passport Number";
$kriteria[1] = "Customer Code";
$kriteria[2] = "Block Number";

function showsearchoptions($selected){
	global $kriteria;
	echo "<select name='searchcriteria' id='searchcriteria' class='selectboxlarge' onchange='loadsearch_criteria(this.value)'>";
		foreach($kriteria As $key=>$value){
			if($key == $selected){
				echo "<option value=\"$key\" selected>$value</option>";
			}else{
				echo "<option value=\"$key\">$value</option>";
			}
		}
	echo "</select>";
}


?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<form method='post' action='?m=receipts&a=AddNewReceipt' name='frmsearch' id='frmsearch'>
<table class='formstable' border='0'>
	<tr>
		<td width='30%' valign='top'>Search Customer By:</td><td width='35%' valign='top'>Search For:</td>
		<td rowspan='2' width='35%' valign='top' align='center'><?php include('sales/showlastaddedcustomerForm.php');?></td>
	</tr>
	
	<tr>
		<td valign='top' width='20%'>

		<?php 
			//printSelectCriteria2($selectedCriteria);
			//function declared in line 28 
			showsearchoptions($selectedCriteria);
		?>
	  				  				
		</td>
	  				
		<td valign='top' width='40%'>
			<div id='div_for_searchkeywordbox'>
			<input type="text" name='searchkeywordbox' id='searchkeywordbox' class='textboxlarge' value="<?php echo $searchfor;?>">
			</div>
			
			<div id='div_for_projects' style='display:none'>
				<table width='100%'>
					<tr>
						<td>Project</td>
						<td><?php printProjects($selectedproject);//function declared in receiptFunctions.php?></td>
					</tr>
					<tr>
						<td>Block</td>
						<td><div id='ajx_blocklist'><select class='selectboxlarge'></select></div></td>
					</tr>
				</table>
				
			</div>
			
			<br>
			
			<input type="submit" name="search" id="search" class='buttontype1' value='Search'>
			<input type='hidden' name='search' id='search' value='true'>
			<input type="hidden" name="selectedblock" id="selectedblock" value="<?php echo $selected_block;?>">
		</td>
	  	
	</tr>
	
	
</table>
</form>	

<script type='text/javascript'>
function loadsearch_criteria(v){
	
	if(v == 2){
		var x = document.getElementById('div_for_searchkeywordbox').style.display = "none";
		var y = document.getElementById('div_for_projects').style.display = "block";
		//alert(x);
	}else{
		var x = document.getElementById('div_for_searchkeywordbox').style.display = "block";
		var y = document.getElementById('div_for_projects').style.display = "none";
		//alert(x);
		}
}

function loadblockslist(m){
	var projectref = document.getElementById('projects').value;
	//alert(projectref.value);

	var xmlhttp;
	if (projectref.length==0)
	  {
	  document.getElementById("ajx_blocklist").innerHTML="";
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
	    document.getElementById("ajx_blocklist").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","modules/receipts/ajx_loadblockdetails.php?q="+projectref+"&m="+m,true);
	xmlhttp.send();
	
}

function loadme(){
	var s = document.getElementById('searchcriteria').value;
	var m = document.getElementById('selectedblock').value;
	if(s == 2){
		var x = document.getElementById('div_for_searchkeywordbox').style.display = "none";
		var y = document.getElementById('div_for_projects').style.display = "block";
	}
	loadblockslist(m);
}
</script>