<?php
include_once("action/Action.php");
include_once("user/UserManager.php");

class ListRolesAction implements Action {
	
	public function execute() {
	    $_REQUEST['allRoles'] = UserManager::getInstance()->listAllRoles();
		   
   		return "list";
	}
}
?>