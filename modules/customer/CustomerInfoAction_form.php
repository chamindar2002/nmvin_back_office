<?php
require_once("customerFunctions.php");
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function goBack(){
	window.location = "index.php?m=customer&a=CustomerDetails";
}

</script>


<table class='container'>
<tr><td>
	
<tr><td>
	<table class='contenttable'>
	 <tr>
	 	<td>
	 		<strong>Customer Details</strong>
	 	</td>
	 </tr>
	  <tr>
	  	<td>
	  		<?php include('customerInfo.php');?>
	  	</td>
	  </tr>
	  
	</table>
</td></tr>

</table>