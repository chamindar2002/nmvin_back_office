<?php 
 include_once("action/Action.php");
 include_once("user/UserManager.php");
 
 class CustomerLogoutAction implements Action{ 
 	 public function execute(){ 
                    
            UserManager::getInstance()->logoutUser();
            
            if(isset($_SESSION['ssn_blockrefno'])){
                unset($_SESSION['ssn_blockrefno']);
            }
            
            //addMessage(MESSAGE_INFO, "You have successfully logged out. Thank you.");
            return "success";
    
	} 
} 
?>