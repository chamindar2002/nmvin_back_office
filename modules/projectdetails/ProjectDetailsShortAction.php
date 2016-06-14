<?php 
 include_once("action/Action.php");
 
 class ProjectDetailsShortAction implements Action{ 
 	 public function execute(){ 
                
             if(isset($_GET['cluster'])){
                 $cluster = $_GET['cluster'];
                 $_REQUEST['cluster'] = stripslashes($cluster);
             }
 	 return "form"; 
	} 
} 
?>