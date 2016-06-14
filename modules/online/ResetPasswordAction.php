<?php 
 include_once("action/Action.php");
 include_once("OnlineCustomerManager.php");
 include_once 'includefiles/emailsender.php';
 class ResetPasswordAction implements Action{ 
 	 public function execute(){ 
             
             if(isset($_POST['email'])){
                 
                 $username = $_POST['email'];
                 $rcv_attempts = (int)$_SESSION['recover_attempt_count'];
                 $clients_ip = $_SERVER['REMOTE_ADDR']; 
                 
                 $isBlockedIp = OnlineCustomerManager::getInstance()->isBlockedIp($clients_ip);
                 
                 if($isBlockedIp != 0){
                     $_REQUEST['msg'] = "Your IP has been blocked. Please Contact Nimavin Developers.";
                     return "form";
                 }
                 
                 
                 $validuser = OnlineCustomerManager::getInstance()->checkIfUserreadyExists($username);
                                  
                 if($validuser == 0){
                     
                     if($rcv_attempts == MAX_PWD_RCV_ATTEMPTS){
                         $addIpToBlockedList = OnlineCustomerManager::getInstance()->blockIp($clients_ip,$username);
                         unset($_SESSION['recover_attempt_count']);
                     }
                     
                     $rcv_attempts++;
                     $_SESSION['recover_attempt_count'] = $rcv_attempts;
                     
                 }else{
                     
                     $userobj = OnlineCustomerManager::getInstance()->getOnlineUserIdByUsername($username);
                     
                     if(sizeof($userobj) > 0){
                         $uid = $userobj->getUid();
                         $newpwd = generatePassword();
                         $setnewpwd = OnlineCustomerManager::getInstance()->resetOnlineUserPassword($newpwd,$uid);
                         if($setnewpwd == 1){
                             
                             
                             //--------------
                             $title = "Password Reset";
                             $emailto = $username;
                             $emailfrom = "nimavingreenpark@gmail.com";
                             $subject = "Password has been reset";
                             $message = "Your new password is : <strong>$newpwd</strong>";
                             $message .="<br><br>Please visit <a href='http://online.nimavingreenpark.com/index.php?m=online&a=CustomerLogin'>Login Page</a>";
                             $message .="<br><br>Thank you for using this service,<br><br><i>Team-Nimavin Developers.</i>";
                             $heading = "<h1>You have successfully reset your password</h1>";
                             $logo = "http://backoffice.nimavingreenpark.com/themes/nimavin_online_theme/images/nimavin_logo.png";
                             $contactinfo = "No. 187, First Floor,<br>
                                            Ward Place,<br>
                                            Colombo - 07,<br>
                                            SRI LANKA<br>
                                            Hot Line<br>
                                            0094 0777 661 702,
                                            0094 0722 861 674";
                                     
                             $emailobj = new emailsender($title,$emailto,$emailfrom,$subject,$message,$heading,$logo,$contactinfo);
                             $emailobj->send_email();
                             
                             //--------------        
                                     
                            $_REQUEST['msg']= "Your password has been reset successfully. Please check you email for the new password.";
                         }else{
                            $_REQUEST['msg']= "Your password was not reset.";
                         }
                         
                         unset($_SESSION['recover_attempt_count']);
                     }
                 }
                 
                 
                 
                 //echo "$username | $rcv_attempts | $clients_ip | $newpwd";
                 
                 
                 
                 
                 
                 
                 
                 //unset($_SESSION['recover_attempt_count']);
                 //exit;
                 
                 
             }
  
 	 return "form"; 
	} 
} 


function generatePassword() {

$password_length = 5;

function make_seed() {
  list($usec, $sec) = explode(' ', microtime());
  return (float) $sec + ((float) $usec * 100000);
}

srand(make_seed());

$alfa = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
$token = "";
for($i = 0; $i < $password_length; $i ++) {
  $token .= $alfa[rand(0, strlen($alfa))];
}    
return $token;
}
?>