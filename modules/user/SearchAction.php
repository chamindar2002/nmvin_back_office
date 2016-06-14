<?php

include_once("action/Action.php");
include_once("user/UserManager.php");

class SearchAction implements Action {
	
	public function execute() {
      	// if the form has been submitted, do the authentication
      	if (isset($_GET['searchbyrole'])) {
		  	$id = $_GET['rlist'];
		   	$allUsers  = UserManager::getInstance()->getUsersInRole($id);
		   	$_REQUEST['allUsers'] = $allUsers;
		   	
        	// for listbox Display
        	$allRoles = UserManager::getInstance()->listAllRoles();
		    $_REQUEST['allRoles'] = $allRoles;
		   	return "list";
      	} else if (isset($_GET['searchbylogin'])){
        	$lname = $_GET['name'];
        	$allUsers = UserManager::getInstance()->getUserByLogin($lname);
        	$_REQUEST['allUsers'] = $allUsers;
        	
        	$allRoles = UserManager::getInstance()->listAllRoles();
		    $_REQUEST['allRoles'] = $allRoles;
        	return "list";
        } else {
        	// for listbox Display
        	$allRoles = UserManager::getInstance()->listAllRoles();
		    $_REQUEST['allRoles'] = $allRoles;
      		return "list";
        }
	}
}

?>
