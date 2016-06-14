<?php

include_once("action/Action.php");
include_once("user/UserManager.php");

class AddNewUserAction implements Action {
	
	public function execute() {
       // if the form has been submitted, do the authentication
        if (isset($_POST['submit'])) {
            $loginName = $_POST['loginName'];
		    $firstName = $_POST['firstName'];
		    $familyName = $_POST['familyName'];
		    $password = $_POST['password'];
		    $password2 = $_POST['password2'];
		    $enabled = $_POST['enabled'];
		    $enabledBoolean = $enabled == "on" ? true: false;
		    
            if ($password != $password2) {
               return "form";
            }
		    
      		if ($newUser = UserManager::getInstance()->addNewUser($loginName, $firstName, $familyName, $password, $enabledBoolean)) {
      		
	      		// Set roles
	      		$roleIds = $_POST['roles']; // Todo: are these integers?
	      		if($roleIds != null && sizeof($roleIds) > 0) {
	      			UserManager::getInstance()->setUserRoles($newUser, $roleIds);
	      		}
	      		
			    $_REQUEST['newUser'] = $newUser;
	
			    addMessage(MESSAGE_INFO, "New user added successfully.");
	      		return "success";
      		} else {
	        	// Load all the roles in the system
	        	$roles = RolePeer::doSelect(new Criteria());
	        	$_REQUEST['roles'] = $roles;
      			
      			addMessage(MESSAGE_ERROR, "A user with this user name already exists.");
	      		
      			return "form";
      		}
        } else {
        	// Load all the roles in the system
        	$roles = RolePeer::doSelect(new Criteria());
        	$_REQUEST['roles'] = $roles;
        	
       		return "form";
        }

	}
	
}

?>
