<?php 
	require_once('projectdetails/ProjectDetailsManager.php');
	include_once('blockswapFunctions.php');
	
	
	if(isset($_REQUEST['blocklist'])){
	 	$blockList = $_REQUEST['blocklist'];
	}
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function submitsearchForm(){
	//alert('xdfg');
        document.frmsearch.submit();
}
/*
 * 
 * 
 */
function loadData_swap_from(v){
	var xmlhttp;
	if (v.length==0)
	  {
	  document.getElementById("divswapfrom").innerHTML="";
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
	    document.getElementById("divswapfrom").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","modules/blockswap/ajx_loadswap_fromData.php?q="+v,true);
	xmlhttp.send();
	//alert(v);
}

function loadData_swap_to(v){
	var sfrom = document.getElementById('projectsswap_from'); // drop down list swap from
	var blokstat = document.getElementById('blockstat_blockswapfrom');

	var xmlhttp;
	if(sfrom.value == 0){
			alert("Error: Block To Be Swapped Not Selected.");
			cancelForm();
		}else if(sfrom.value == v){
				alert("Error: Cannot Swap Same Block.");
				document.getElementById('btnsave').disabled = true;
			}else if(blokstat.value != 2){
				alert("Error: Cannot Swap An Unsold Block.");
				document.getElementById('btnsave').disabled = true;
				}else{
						if (v.length==0)
						  {
						  document.getElementById("divswapto").innerHTML="";
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
						    document.getElementById("divswapto").innerHTML=xmlhttp.responseText;
						    }
						  }
						xmlhttp.open("GET","modules/blockswap/ajx_loadswap_toData.php?q="+v,true);
						xmlhttp.send();
						sfrom.disabled = true;
						document.getElementById('btnsave').disabled = false;
				}
}

function cancelForm(){
	window.location = "index.php?m=blockswap&a=NewBlockSwap";
}

function validateForm(){
	var blockprice_from = document.getElementById('blockprice_blockswapfrom');
	var blockprice_to = document.getElementById('blockprice_blockswapto');

	if(Number(blockprice_from.value) != Number(blockprice_to.value)){
		alert("Error: Cannot Swap Blocks Of Different Prices.");
		//document.getElementById('btnsave').disabled = true;
	}else{
		var s = confirm("Are you sure you want to swap this block?");
		if(s == true){
			document.frmnewblockswap.submit();
		}else{

			}
		//document.frmnewblockswap.submit();
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
	window.location = "index.php?m=blockswap&a=NewBlockSwap";
}
</script>


<?php
	if(isset($_REQUEST['msg_success'])){
		$message = $_REQUEST['msg_success'];
		$divid = "message_success";
		 echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
	else if(isset($_REQUEST['msg_error'])){
		$message = $_REQUEST['msg_error'];
		$divid = "message_error";
		 echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
?>

<table class='container'>
<tr><td>
	
<tr><td>
	<table class='contenttable'>
	 <tr>
	  	<td><h3>Block Swapper</h3></td>
	 </tr>
	 <tr>
	  	<td>
	  		<?php include('searchForm.php');?>
	  	</td>
	 </tr>
	 
	 <tr>
	  	<td>
	  		<?php include('blockswapForm.php');?>
	  	</td>
	 </tr>
	  
	</table>
</td></tr>

</table>