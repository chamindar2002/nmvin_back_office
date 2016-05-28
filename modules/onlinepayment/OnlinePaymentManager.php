<?php 
 
class OnlinePaymentManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(OnlinePaymentManager::$instance == null){
 		  OnlinePaymentManager::$instance = new OnlinePaymentManager();
 	 	}
 		  return OnlinePaymentManager::$instance;  
 	}
 } 
?>