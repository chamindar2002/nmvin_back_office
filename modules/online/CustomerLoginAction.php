<?php 
 include_once("action/Action.php");
 include_once("OnlineCustomerManager.php");
 include_once("user/UserManager.php");
 
 class CustomerLoginAction implements Action{ 
    
 	 public function execute(){ 
             
//             for($i=0;$i<20;$i++){
//                 echo "$i<br>";
//             }
//             
             
             if(isset($_POST['submit'])){
                 
                $blockref = $_POST['hdn_blockref']; 
                if (UserManager::getInstance()->authenticateUser($_POST['loginName'], $_POST['password'])) {
                   	$_REQUEST['blockref'] = $blockref;
                    return "success";
                        
           	} else {
                    return "failed";
           	}
                
             }
             
 	 return "form"; 
	} 
} 
?>