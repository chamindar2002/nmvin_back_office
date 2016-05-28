<?php

include_once("action/Action.php");
include_once("user/UserManager.php");

class HomePageAction implements Action {
	
	public function execute() {
		//if (UserManager::getInstance()->isUserInRole(CLIENT_ROLE_NAME)) {
		//	return "client"; // A client	
		//}
		if (isset($_GET['j'])){
			$page = $_GET['j'];
		} else {
			$page = "";
		}
		
		if ($page=='lo'){
			$pa = "view2";
		} else {
			$pa = "view";
		}
		
		if (! UserManager::getInstance()->isUserLoggedIn()) {
			return $pa; // Show the same page for client
		}
		
		return $pa;
	}
}

?>
