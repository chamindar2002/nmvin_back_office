<?php
//require_once("refunds/RefundsManager.php");

?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function submitsearchform(){
	document.frmsearch.submit();
}

function submitDefaultersForm(){
    
    var conf = confirm('Do you want to add selected sales/customers as defaulted?');
    
    if(conf == true){
        document.frmdefaults.submit();
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
	window.location = "index.php?m=defaulters&a=DefaultersList";
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
	<table class='contenttable'>
	<tr>
	  	<td><strong>Defaulter's Search</strong></td>
	 </tr>
	  <tr>
	  	<td>
                        
	  		<?php
                        $page_action = "?m=defaulters&a=DefaultersList";
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
	  		<?php include('pending_defaulterList.php');?>
	  	</td>
	</tr>
	  
	</table>
</td></tr>
</table>