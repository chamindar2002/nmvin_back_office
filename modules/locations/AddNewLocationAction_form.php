<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function cancelForm(){
	window.location = "index.php?m=locations&a=LocationList";
}

function validateForm(){
	var locationname = document.getElementById('locationname').value;
	if(locationname.length < 5){
		alert("Error: Invalid Location Name");
		document.getElementById('locationname').focus();
	}else{
			document.frmnewlocation.submit();
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
	window.location = "index.php?m=locations&a=LocationList";
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
	  	<td><h3>New Location</h3></td>
	 </tr>
	 <tr>
	  	<td>
	  		<?php include('newlocationForm.php');?>
	  	</td>
	 </tr>
	  
	</table>
</td></tr>

</table>