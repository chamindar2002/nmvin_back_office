<?php 
 include_once("action/Action.php");
  include_once 'CustomerDetailsManager.php';
 
 class UpcomingProjectsAction implements Action{ 
 	 public function execute(){ 
             $userid = $_SESSION[SYSTEMNAME.'logid'];
  
             if(isset($_POST['hdn_rcount'])){
                $count = $_POST['hdn_rcount'];
                
               
                for($i=0;$i<$count;$i++){
                    if(isset($_POST["chk_$i"])){
                        $projectname = $_POST["chk_$i"];
                        $prid = 0;
                        $addentry = CustomerDetailsManager::getInstance()->addNewUpcomingProjectRegistrationEntry($userid,$prid,$projectname);
                        
                    }
                }
             }
             
             $upcprojectregistrations = CustomerDetailsManager::getInstance()->getUpcomingRegistrationsByUid($userid);
             $_REQUEST['upcprojectregistrations'] = $upcprojectregistrations;
             
             //exit;
             
 	 return "form"; 
	} 
} 
?>