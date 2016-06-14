<?php
include_once("../../wsbootstrap.php");
include_once('blockswapFunctions.php');

if(isset($_GET['q'])){
	$blockref = $_GET['q'];
	getBlockDetails($blockref,"blockswapto");	
}
?>