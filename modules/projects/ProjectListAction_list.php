<?php
require_once("ProjectsManager.php");

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


function editProject(){
	var selectedRefno = document.getElementById('selectedrow');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		document.frmeditproject.submit();
	}
	
}


function deleteproject(){
	var selectedRefno = document.getElementById('selectedrow_2');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		var s = confirm("Are you sure you want to delete this Project");
		if(s==true){
			var r = confirm("This Action Will Delete All The Relavant Fields In The Projects Details File \n Continue Anyway?");
			if(r==true){
				document.frmsdeleteproject.submit();
			}else{
				//
				}
		}else{
			//	
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
	window.location = "index.php?m=projects&a=ProjectList";
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
	  	<td><h3>Projects</h3></td>
	 </tr>
	  <tr>
	  	<td>
	  		<?php include('searchForm.php');?>
	  	</td>
	  </tr>
	  
	</table>

</td></tr>

<tr><td>
	<table class='contenttable'>
	<tr>
		<td>
	  		<?php include('projectList.php');?>
	  	</td>
	</tr>
	  
	</table>
</td></tr>
</table>