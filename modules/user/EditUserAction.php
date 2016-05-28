<?php

include_once("action/Action.php");
include_once("user/UserManager.php");

class EditUserAction implements Action {
	
	public function execute() {
      	// if the form has been submitted, do the authentication
        if (isset($_POST['submit'])) {
        	
            $UID = $_POST['uid'];
		    $firstname = $_POST['firstname'];
		    $familyname = $_POST['familyname'];
      		$newpassword = $_POST['newpassword'];
      		$newpassword2 = $_POST['newpassword2'];
      		$enabled = false;
      		if (isset($_POST['enabled'])) {
	      		if ($_POST['enabled'] == "on") {
	      			$enabled = true;
	      		} else {
	      			$enabled = false;
	      		}
      		}
           
      		if ($newpassword != $newpassword2) {
				addMessage(MESSAGE_ERROR, "Passwords do not match.");

				$user = UserManager::getInstance()->getuserByUID($_GET['id']);
	        	
	        	$_REQUEST['user'] = $user;
	        	$_REQUEST['rolesOfThisUser'] = $user->getRoles();
	        	// Load all the roles in the system
	        	$roles = RolePeer::doSelect(new Criteria());
	        	$_REQUEST['roles'] = $roles;
					
				return "form";
            }

            if (isset($_POST['newpassword'])) {
               $user= UserManager::getInstance()->updateUser($UID,$familyname,$firstname,$newpassword, $enabled);
               
      		   // Set roles
      		   $roleIds = $_POST['roles']; // Todo: are these integers?
    	       UserManager::getInstance()->setUserRoles($user, $roleIds);

    	       
      		   $_REQUEST['User'] = $user;
      		   
      		   addMessage(MESSAGE_INFO, "User information updated.");
               return "success";
            }
            
        } else {
        	$user = UserManager::getInstance()->getuserByUID($_GET['id']);
        	
        	$_REQUEST['user'] = $user;
        	$_REQUEST['rolesOfThisUser'] = $user->getRoles();
        		// Load all the roles in the system
        	$roles = RolePeer::doSelect(new Criteria());
        	$_REQUEST['roles'] = $roles;
        	
       		return "form";
       }

	}
}

?>