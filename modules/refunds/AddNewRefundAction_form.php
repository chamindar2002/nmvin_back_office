<?php

?>


<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function cancelForm(){
	window.location = "index.php?m=refunds&a=RefundsList";
}


function submitForm(){
	var rfamt = document.getElementById('refundamt');
	if(rfamt.value == 0){
		alert("Error: Refund Amount Cannot Be Zero");
		framt.focus();		  
	}
	else{
		var s = confirm("Are you sure you want to refund this sale");
		if(s == true){
			 document.frmnewrefund.submit();
		}else{
		 //document.frmnewrefund.submit();
		 //alert('ok');	
		}
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
	window.location = "index.php?m=refunds&a=RefundsList";
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
	<table class='contenttable' border = '0'>
	  <tr>
	  	<td><h3>New Refund</h3></td>
	  </tr>
	  
	  <tr>
	  	<td>
	  		<?php include('addnewrefundsForm.php');?>
	  	</td>
	  </tr>
	  
	</table>
	
</td></tr>

</table>
