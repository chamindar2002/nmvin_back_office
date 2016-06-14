<?php
include_once("../../wsbootstrap.php");
include_once('owntransferFunctions.php');

if(isset($_GET['q'])){
	$passporNo = $_GET['q'];
        searchCustomer($passporNo);
}
?>
