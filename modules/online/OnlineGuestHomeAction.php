<?php 
 include_once("action/Action.php");
 include_once 'OnlineCustomerManager.php';
 
 class OnlineGuestHomeAction implements Action{ 
 	 public function execute(){ 
             
             if(isset($_GET['blockref'])){
                 //echo $_GET['blockref'];
                 //exit;
                 $_REQUEST['blockref'] = $_GET['blockref'];
             }
 	 return "form"; 
	} 
} 
?>