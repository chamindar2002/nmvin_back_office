<?php 
 include_once("action/Action.php");
 include_once 'CustomerDetailsManager.php';
 
 class ChangeLoginInfoAction implements Action{ 
 	 public function execute(){ 
             if(isset($_POST['hdn_confirmpwdchange'])){
                 $currentpassword = stripslashes(htmlspecialchars($_POST['password_old']));
                 $newpassword = stripslashes(htmlspecialchars($_POST['password_new']));
                 
                 $user = $_SESSION[SYSTEMNAME.'logid'];
                 $onlineuserobj = CustomerDetailsManager::getInstance()->getUserByPk($user);
                 
                 if(sizeof($onlineuserobj)){
                    $username = $onlineuserobj->getLoginname();
                    $password = $onlineuserobj->getPassword();


                    if(md5($currentpassword) == $password){
                       $newpasswordobj = CustomerDetailsManager::getInstance()->updatePassword($user,$newpassword);
                       $_REQUEST['msg_success'] = "Password has been changed successfully";
                    }
                    else{
                        $_REQUEST['msg_error'] = "Paswords Do not match";
                    }
                 }
             }
 	 return "form"; 
	} 
} 
?>