<?php
include_once("action/Action.php");
include_once("LocationManager.php");      
require_once("customer/customerFunctions.php");

class DeleteLocationAction implements Action {
	
	public function execute(){
		$deleted = false;
		if(isset($_POST['selectedrow_2'])){
			$locationcode = $_POST['selectedrow_2'];
			$deletelocation = LocationManager::getInstance()->DeleteLocation($locationcode);
			if($deletelocation == 1){
				$deleted = true;
			}
		}
		$_REQUEST['deleted'] = $deleted;
		return "success";
	}
}

?>