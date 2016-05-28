<?php

include_once("action/Action.php");
include_once("user/UserManager.php");

class ChangeUserPasswordAction implements Action {
	
	public function execute() {
       // if the form has been submitted, do the authentication
        if (isset($_POST['submit'])) {
            $password = $_POST['password'];
		    $newpassword = $_POST['newpassword'];
		    $newpassword2 = $_POST['newpassword2'];
		    
		    if ($newpassword != $newpassword2) {
		    	$_REQUEST['errorMessage'] = "New password mismatch.";
		    	return "form";
		    }

		    if (UserManager::getInstance()->isUserLoggedIn()) {
	  		 	if (UserManager::getInstance()->changePassword($password,$newpassword)) {
	  		 	 	return "success";
	  		 	} else {
	  		 		$_REQUEST['errorMessage'] = "Current password is wrong.";
	  		 		return "form"; 	
	  		 	}
		    }

      		return "form"; // Will not come to this line
        } else {
       		return "form";
        }
	}
	
}

?>