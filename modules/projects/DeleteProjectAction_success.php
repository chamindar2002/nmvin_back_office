<?php

$deleted = false;

if(isset($_REQUEST['deleted']))
{
	$deleted = $_REQUEST['deleted'];
	if($deleted == true){
		//$_REQUEST['msg_success'] = "Customer Deleted Successfully.";
		$_SESSION['deleteproject_success'] = "Project Deleted Successfully.";
		//echo "x2x $deleted y2y <br>".$_REQUEST['msg_success'];
		
	}
	else{
		//$_REQUEST['msg_error'] = "An Error Occured Trying to Delete Customer.";
		$_SESSION['deleteproject_failed'] = "An Error Occured Trying to Delete Project.";
	}
}
header('Location: index.php?m=projects&a=ProjectList');
?>