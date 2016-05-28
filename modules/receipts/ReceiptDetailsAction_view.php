<?php
 require_once("ReceiptsManager.php");
 require_once("receiptFunctions.php");
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function goBack(){
	window.location = "index.php?m=receipts&a=ReceiptsList";
}

</script>


<table class='container'>
<tr><td>
	
<tr><td>
	<table class='contenttable'>
	<tr>
		<td>
			<strong>Receipt Details</strong>
		</td>
	</tr>
	  <tr>
	  	<td>
	  		<?php include('receiptInfo.php');?>
	  	</td>
	  </tr>
	  
	</table>
</td></tr>

</table>