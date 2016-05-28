<?php
require_once("RefundsManager.php");

?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function submitsearchform(){
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

function loadAddNewRefundForm(){
	var selectedRefno = document.getElementById('selectedrow');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		document.frmeditsales.submit();
	}
}


</script>


<?php
//session variables set @ DeleteCustomerAction_success.php page
	if(isset($_SESSION['deleteproject_success'])){
		$message = $_SESSION['deleteproject_success'];
		unset($_SESSION['deleteproject_success']);
		$divid = "message_success";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
	else if(isset($_SESSION['deleteproject_failed'])){
		$message = $_SESSION['deleteproject_failed'];
		unset($_SESSION['deleteproject_failed']);
		$divid = "message_error";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
?>

<table class='container'>
<tr><td>
	<table class='contenttable'>
	<tr>
	  	<td><strong>Refunds</strong></td>
	 </tr>
	  <tr>
	  	<td>
	  		<?php include('refundssearchForm.php');?>
	  	</td>
	  </tr>
	  
	</table>

</td></tr>

<tr><td>
	<table class='contenttable'>
	<tr>
		<td>
	  		<?php include('refundableList.php');?>
	  	</td>
	</tr>
	  
	</table>
</td></tr>
</table>