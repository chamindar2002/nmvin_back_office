<!--<meta http-equiv="refresh" content="0;url=index.php?m=receipts&a=VoidedReceiptsList">-->
<?php 
if(isset($_REQUEST['restored'])){
	$restored = $_REQUEST['restored'];
	if($restored == 1){
		$_SESSION['restorereceipt_success'] = "Receipt Restored Successfully.";
	}else{
		$_SESSION['deletereceipt_failed'] = "An Error Occured Trying to Restore Receipt.";
	}
}
header('Location: index.php?m=receipts&a=VoidedReceiptsList');
?>