<?php
require_once('projectdetails/ProjectDetailsManager.php');
include_once('paymentplanFunctions.php');
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function cancelForm(){
	window.location = "index.php?m=paymentplan&a=PaymentPlanList";
}

function validateForm(){
	var projects = document.getElementById('projects');
	var nofinstall = document.getElementById('nofinstallments');
	var instalmnt = document.getElementById('installamt');
	var desc = document.getElementById('description');
	var amtpayable = document.getElementById('amtpayable');

	
	if(projects.value == 0){
		alert("Error: Projects Not Selected.");
		projects.focus();	
	}else if(nofinstall.value == "" || !IsNumeric(nofinstall.value)){
			alert("Error: Number Of Installments Is Invalid.");
			nofinstall.focus();
		}else if(instalmnt.value == "" || !IsNumeric(instalmnt.value)){
				alert("Error: Installment Amount Is Invalid.");
				instalmnt.focus();
			}else if(desc.value.length < 5){
					alert("Error: Invalid Description.");
					desc.focus();
				}else if(amtpayable.value == 0){
					alert("Error: Amount Payable Cannot Be Zero.");
					instalmnt.focus();
					}else{
						document.frmeditpplan.submit();
						}
}

function calculateAmountPayable(){
	//alert(v);
	var total = 0;
	var nofinstall = document.getElementById('nofinstallments');
	var installamt = document.getElementById('installamt');
	var amtpayable = document.getElementById('amtpayable');

	var downp =  document.getElementById('downpamnt');
	var rsv = document.getElementById('rsvfee');
	var bankloan = document.getElementById('bankloan');
	var adtnlland = document.getElementById('adtnlland');
	
        var devcharge1 = document.getElementById('devcharge1');
        var devcharge2 = document.getElementById('devcharge2');
        var infastct = document.getElementById('infastct');
        var ocupation = document.getElementById('ocupation');
        
	//total += (installamt.value * nofinstall.value);
	total += Number((installamt.value * nofinstall.value)) + Number((downp.value)) + 
                Number((rsv.value))  + Number((bankloan.value))  + Number((adtnlland.value))+
            Number((devcharge1.value))+Number((devcharge2.value))+Number((infastct.value))+Number((ocupation.value));
	amtpayable.value = total;
}

function makedescription(){
	var nofinstall = document.getElementById('nofinstallments');
	var desc = document.getElementById('description');
	
	
	if(!IsNumeric(nofinstall.value)){
		nofinstall.value = "";
		desc.value = "";
		nofinstall.focus();
	}else{
			var months = (nofinstall.value % 12).toFixed(2);
			var years = (nofinstall.value / 12).toFixed(2);
			var newyear = years.substr(0,1);
			var newmonth = months.substr(0,2);
			var description = "";
			
			if(newmonth != 0){			
				description = nofinstall.value + " Month Installment Plan ["+newyear+" Years & "+newmonth+" Months]";
			}
			else{
				description = nofinstall.value + " Month Installment Plan ["+newyear+" Years]";
				}

			if(newyear == 0){
				newmonth = months.substr(0,2);
				description = nofinstall.value + " Month Installment Plan ["+newmonth+" Months]";
				}
			
			desc.value = description;
			
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
	window.location = "index.php?m=paymentplan&a=PaymentPlanList";
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
	  		<h3>Edit Payment Plan</h3>
	  	</td>
	  </tr>
	  
	  <tr>
	  	<td>
	  		<?php include('editpaymentplanForm.php');?>
	  	</td>
	  </tr>
	  
	</table>
</td></tr>

</table>