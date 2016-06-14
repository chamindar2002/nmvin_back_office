<?php
include_once("../../wsbootstrap.php");
require_once("ReceiptsManager.php");
require_once("receiptFunctions.php");

if(isset($_GET['q'])){
	$projectref = $_GET['q'];
	$sel = $_GET['m'];
	$blocklist_obj = ReceiptsManager::getInstance()->getBlockListingByProjectCode($projectref);
	if(sizeof($blocklist_obj)){
		echo "<select name='drop_blocklisting' id='drop_blocklisting' class='selectboxlarge'>";
			foreach($blocklist_obj As $blst){
				$blockref = $blst->getRefno();
				$blockno = $blst->getBlocknumber();
				if($blockref == $sel){
					echo "<option value=\"$blockref\" selected>$blockno</option>";
				}else{
					echo "<option value=\"$blockref\">$blockno</option>";
				}
			}
		echo "</select>";
	}
	else{
		echo "<select class='selectboxlarge'></select>";
	}
}
?>