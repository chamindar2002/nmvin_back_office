<?php

include_once("action/Action.php");
include_once("user/UserManager.php");

class EditRoleAction implements Action {
	
	public function execute() {
      	 // if the form has been submitted, do the authentication
        if (isset($_POST['submit'])) {
        	$Desc = $_POST['desc'];
            $RID = $_POST['roleid'];
		    $Name = $_POST['name'];
		    
      		$role = UserManager::getInstance()->updateRole($RID, $Name, $Desc);
      		// Update the action permissions
        	if (isset($_POST['actions'])) {
				$actionIds = $_POST['actions'];
		      	$actions = array();
		      	if($actionIds != null && sizeof($actionIds) > 0) {
		      		foreach ($actionIds as $actionId) {
		      			$actions[] = UserManager::getInstance()->getActionPermission($actionId);
		      		}

		      		UserManager::getInstance()->setActionPermissionsForRole($role, $actions);
		      		
		      	}
	      	} else {
	      		// No roles added, delete all roles.
	      		UserManager::getInstance()->setActionPermissionsForRole($role, null);
	      	}
      		
	      	addMessage(MESSAGE_INFO, "Updating role successful.");
		    return "success";
        } else {
        	$role = UserManager::getInstance()->getRole($_GET['id']);
        	$_REQUEST['role'] = $role;
        	
       		return "form";
        }

	}
}

?>
