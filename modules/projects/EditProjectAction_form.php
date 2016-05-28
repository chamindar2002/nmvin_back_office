<?php

?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function cancelForm(){
	window.location="index.php?m=projects&a=ProjectList";
}

function validateForm(){
	var location = document.getElementById('locations');
	var prname = document.getElementById('projectname');
	var nofblocks = document.getElementById('nofblocks');
	
	if(location.value == 0){
		alert("Error: Location Not Selected.");
		location.focus();
	}
	else if(prname.value.length < 5){
		alert("Error: Invalid Project Name.");
		prname.focus();
	}
	else if(nofblocks.value == "" || !IsNumeric(nofblocks.value)){
		alert("Error: Invalid Number Of Blocks.");
		nofblocks.focus();
	}
	else{
			document.frmeditproject.submit();
		}
}

function IsNumeric(strString)
//check for valid numeric strings	
{
	var strValidChars = "0123456789.-";
	var strChar;
	var blnResult = true;
	
	if (strString.length == 0) return false;
	
	//test strString consists of valid characters listed above
	for (i = 0; i < strString.length && blnResult == true; i++)
	{
	strChar = strString.charAt(i);
	if (strValidChars.indexOf(strChar) == -1)
	{
	blnResult = false;
	}
	}
	return blnResult;
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
	window.location = "index.php?m=projects&a=ProjectList";
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
	  	<td>
	  		<strong>Edit Project</strong>
	  	</td>
	  </tr>
	  
	  <tr>
	  	<td>
	  		<?php
		  		include('editprojectForm.php');
	  		 ?>
	  	</td>
	  </tr>
	  
	</table>
</td></tr>

</table>