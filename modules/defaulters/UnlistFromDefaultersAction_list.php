<?php
//require_once("refunds/RefundsManager.php");

?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function submitsearchform(){
	document.frmsearch.submit();
}

function submitDefaultersForm(){
    document.frmdefaults.submit();
}
</script>

<table class='container'>
<tr><td>
	<table class='contenttable'>
	<tr>
	  	<td><strong>Defaulter's Search</strong></td>
	 </tr>
	  <tr>
	  	<td>
                        
	  		<?php
                        $page_action = "?m=defaulters&a=UnlistFromDefaulters";
                        include('defaultersSearchForm.php');
                        ?>
	  	</td>
	  </tr>
	  
	</table>

</td></tr>

<tr><td>
	<table class='contenttable'>
	<tr>
		<td>
	  		<?php include('defaulterList.php');?>
	  	</td>
	</tr>
	  
	</table>
</td></tr>
</table>