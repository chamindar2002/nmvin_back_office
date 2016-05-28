<?php

?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
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
				//document.getElementById('selectedrow_3').value = slctdrowRefno;
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
				//document.getElementById('selectedrow_3').value = slctdrowRefno;
				}
		}
	}
	
	//rowselected.style.backgroundColor = 'red';
	//alert(rowvalue.id);
}


function showEditLocationForm(){
	var selectedRefno = document.getElementById('selectedrow');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		
    	document.frmeditlocation.submit();
		
	}
}


function deleteLocation(){
	var selectedRefno = document.getElementById('selectedrow');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		if(selectedRefno.value != 0){
			var s = confirm("Are you sure you want to delete this location?");
			if(s==true){
				document.frmdeletelocation.submit();
			}else{

				}
			
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
	window.location = "index.php?m=locations&a=LocationList";
}
</script>


<?php
//session variables set @ DeleteCustomerAction_success.php page
	if(isset($_SESSION['deletecustomer_success'])){
		$message = $_SESSION['deletecustomer_success'];
		unset( $_SESSION['deletecustomer_success']);
		$divid = "message_success";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
	else if(isset($_SESSION['deletecustomer_failed'])){
		$message = $_SESSION['deletecustomer_failed'];
		unset($_SESSION['deletecustomer_failed']);
		$divid = "message_error";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
?>

<table class='container'>
<tr><td>
	
<tr><td>
	<table class='contenttable'>
	 <tr>
	  	<td><h3>Locations</h3></td>
	 </tr>
	 <tr>
	  	<td>
	  		<?php include('locationsList.php');?>
	  	</td>
	 </tr>
	  
	</table>
</td></tr>

</table>