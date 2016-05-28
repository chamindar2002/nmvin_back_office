<?php
include_once("action/Action.php");
include_once("user/UserManager.php");

class DeleteUserAction implements Action {
	
	public function execute() {
       // if the form has been submitted, do the authentication
            if (isset($_POST['ok'])) {
           $UserID = $_POST['UID'];
      		 $DeleteUser = UserManager::getInstance()-> DeleteUserByUID($UserID);
		  	 addMessage(MESSAGE_INFO, "User deleted.");
      		 return "success";
            } else {
               if (isset($_POST['cancel'])) {
               	  return "cancel";
               	   } else {
               	  return "form";   
               }
      	 }	 
        
	}
}