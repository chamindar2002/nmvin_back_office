<?php
require_once('projectdetails/ProjectDetailsManager.php');
include_once('paymentplanFunctions.php');
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function submitsearchForm(){
	document.frmsearch.submit();
}

function changeColorToSelected(r){
	
	var rowselected = document.getElementById('tr'+r);
	var rowcount = document.getElementById('rowcount').value;

	for(i=0;i<=rowcount;i++){
		var oddeven = i%2;
		var row = "";
		if(oddeven == 0){	
			if(i != r){
				row = document.getElementById('tr'+i);
				row.style.backgroundColor = '#DEE2E6';
					
			}else{
				rowselected.style.backgroundColor = '#CCCCFF'; //selected
				var slctdrowRefno = document.getElementById('row'+r).value;
				document.getElementById('selectedrow').value = slctdrowRefno;
				document.getElementById('selectedrow_2').value = slctdrowRefno;
				document.getElementById('selectedrow_3').value = slctdrowRefno;
			}
		}
		else{
			if(i != r){
				row = document.getElementById('tr'+i);
				row.style.backgroundColor = '#F7FBFF';
			}
			else{
				rowselected.style.backgroundColor = '#CCCCFF';//selected
				var slctdrowRefno = document.getElementById('row'+r).value;
				document.getElementById('selectedrow').value = slctdrowRefno;
				document.getElementById('selectedrow_2').value = slctdrowRefno;
				document.getElementById('selectedrow_3').value = slctdrowRefno;
				}
		}
	}
	
	//rowselected.style.backgroundColor = 'red';
	//alert(rowvalue.id);
}


function editPaymentPlan(){
	var selectedRefno = document.getElementById('selectedrow_2');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		
		document.editpaymentplanform.submit();
		
	}
	
}


function deletePaymentPlan(){
	var selectedRefno = document.getElementById('selectedrow_3');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		var s = confirm("Are you sure you want to delete this Payment Plan?");
		if(s==true){
			
			document.frmdeletepplan.submit();
		
		}else{
				
			}
		
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
	window.location = "index.php?m=paymentplan&a=PaymentPlanList";
}
</script>


<?php
//session variables set @ DeleteCustomerAction_success.php page
	if(isset($_SESSION['deletepaymentplan_success'])){
		$message = $_SESSION['deletepaymentplan_success'];
		unset($_SESSION['deletepaymentplan_success']);
		$divid = "message_success";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
	else if(isset($_SESSION['deletepaymentplan_failed'])){
		$message = $_SESSION['deletepaymentplan_failed'];
		unset($_SESSION['deletepaymentplan_failed']);
		$divid = "message_error";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
?>

<table class='container'>
<tr><td>
	
<tr><td>
	<table class='contenttable'>
	  <tr>
	  	<td><h3>Payment Plan</h3></td>
	  </tr>
	  <tr>
	  	<td>
	  		<?php include('searchForm.php');?>
	  	</td>
	  </tr>
	  
	  <tr>
	  	<td>
	  		<?php include('paymentplansList.php');?>
	  	</td>
	  </tr>
	  
	</table>
</td></tr>

</table>