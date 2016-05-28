<?php
include_once("action/Action.php");
include_once("user/UserManager.php");

class ListUserAction implements Action {
	
	public function execute() {
       // if the form has been submitted, do the authentication
             
      		$allUsers = UserManager::getInstance()->listAllUsers();
		    $_REQUEST['allUsers'] = $allUsers;
		   //for roles
		   $allRoles = UserManager::getInstance()->listAllRoles();
		    $_REQUEST['allRoles'] = $allRoles;
      		return "list";
	}
}
?>