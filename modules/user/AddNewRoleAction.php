<?php

include_once("action/Action.php");
include_once("user/UserManager.php");

class AddNewRoleAction implements Action {
	
	public function execute() {
       // if the form has been submitted, do the authentication
        if (isset($_POST['submit'])) {
		    $name = $_POST['name'];
		    $description = $_POST['description'];
		    
      		$role = UserManager::getInstance()->addNewRole($name, $description);
      		
      		if ($role) {
				addMessage(MESSAGE_INFO, "New role added successfully.");
      			// Add all the action permissions
	      		if (isset($_POST['actions'])) {
					$actionIds = $_POST['actions'];
		      		$actions = array();
		      		if($actionIds != null && sizeof($actionIds) > 0) {
		      			foreach ($actionIds as $actionId) {
		      				$actions[] = UserManager::getInstance()->getActionPermission($actionId);
		      			}
		      			UserManager::getInstance()->setActionPermissionsForRole($role, $actions);
		      			addMessage(MESSAGE_INFO, "Adding permissions to the role successful.");
		      		}
	      		}
      			
		    	$_REQUEST['newRole'] = $role;
		    	
		    	return "success";
      		} else {
      			addMessage(MESSAGE_ERROR, "Role name addition failed. Did you use an already used role name?");
      		}
			
      		return "form"; // Same role name used previously?
        } else {
       		return "form";
        }

	}
	
}

?>
