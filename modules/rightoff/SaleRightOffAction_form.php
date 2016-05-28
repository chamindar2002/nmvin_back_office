<?php
//require_once("customerFunctions.php");
//include('salesFunctions.php');
$receiptcount = 0;
if(isset($_REQUEST['receiptcount']))
{
$receiptcount = $_REQUEST['receiptcount'];
}
//echo $receiptscount;
?>


<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function cancelForm(){
	window.location = "index.php?m=sales&a=SalesList";
}


function submitreverseformForm(){
	var s = confirm("Are you sure you want to reverse this Rightoff Sale");
	if(s==true){
		document.frmnewrightoff.submit();
	}else{

	}
}

function submitForm(){
	var rightoff_amount = document.getElementById('rightoff_amount');
	var rmks_field = document.getElementById('rmks');
	var rmks = ltrim(rmks_field.value);
	
	if(!IsNumeric(rightoff_amount.value)){
		alert('Error: Invalid Charcters in the Right Off Amount Field.');
		rightoff_amount.focus();
	}else if(rmks.length < 5){
				alert("Please Enter a Valid Remark");
				document.getElementById('rmks').focus();
		}else{
		document.frmnewrightoff.submit();
		}
}

function ltrim(str) { 
	for(var k = 0; k < str.length && isWhitespace(str.charAt(k)); k++);
	return str.substring(k, str.length);
}

function rtrim(str) {
	for(var j=str.length-1; j>=0 && isWhitespace(str.charAt(j)) ; j--) ;
	return str.substring(0,j+1);
}
function trim(str) {
	return ltrim(rtrim(str));
}
function isWhitespace(charToCheck) {
	var whitespaceChars = " \t\n\r\f";
	return (whitespaceChars.indexOf(charToCheck) != -1);
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
	window.location = "index.php?m=sales&a=SalesList";
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
	  	<td><h3>Sale Write Off</h3></td>
	  </tr>
	  
	  <?php if($receiptcount != 0){?>
	  <tr>
	  	<td>
	  		<?php include('righoffForm.php');?>
	  	</td>
	  </tr>
	  <?php
		}else{
	   		$msg .= "Receipts Not Issued to This Sale. <br>";
	   } 
	   ?>
	   <tr><td><?php echo $msg;?></td></tr>
	</table>
	
</td></tr>

</table>
