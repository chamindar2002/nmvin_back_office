<?php
include_once("../../wsbootstrap.php");
include_once('owntransferFunctions.php');

if(isset($_GET['q'])){
	$blockref = $_GET['q'];
	getBlockDetails($blockref,"blockswapfrom");	
}
//echo $blockref;
?>