<?php
include_once("action/Action.php");
include_once("LocationManager.php");      
require_once("customer/customerFunctions.php");

class AddNewLocationAction implements Action {
	
	public function execute(){
		//showActionFileOutput(20);
		if(isset($_POST['confirmsave'])){
			$locationname = $_POST['locationname'];
			
			$locationExist = LocationManager::getInstance()->CheckIfLocationExists($locationname);
			if($locationExist == 0){
				$newlocation = LocationManager::getInstance()->AddNewLocation($locationname);
				if($newlocation == 1){
					$_REQUEST['msg_success'] = "New Location Added Successfully.";
				}
			}
			else{
				$_REQUEST['msg_error'] = "A Record Already Exists With The Given Location Name.";
			}
		}
		return "form";
	}
}
?>