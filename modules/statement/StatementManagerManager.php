<?php 
 
class StatementManagerManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(StatementManagerManager::$instance == null){
 		  StatementManagerManager::$instance = new StatementManagerManager();
 	 	}
 		  return StatementManagerManager::$instance;  
 	}
 } 
?>