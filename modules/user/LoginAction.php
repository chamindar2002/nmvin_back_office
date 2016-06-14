<?php

include_once("action/Action.php");
include_once("user/UserManager.php");

class LoginAction implements Action {
	
	public function execute() {
      	// if the form has been submitted, do the authentication
      	if (isset($_POST['submit'])) {
			if (UserManager::getInstance()->authenticateUser($_POST['loginName'], $_POST['password'])) {
				return "success";
           	} else {
           		return "failed";
           	}
        } else {
       		return "form";
        }
	}
        
        
}

?>
