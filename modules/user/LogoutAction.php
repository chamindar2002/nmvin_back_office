<?php

include_once("action/Action.php");
include_once("user/UserManager.php");

class LogoutAction implements Action {
	
	public function execute() {
      	UserManager::getInstance()->logoutUser();
      	addMessage(MESSAGE_INFO, "You have successfully logged out. Thank you.");
      	return "success";
	}
}

?>
