<?php
include_once("action/Action.php");
include_once("LocationManager.php");      
require_once("customer/customerFunctions.php");

class EditLocationAction implements Action {
	
	public function execute(){
		//showActionFileOutput(20);
		if(isset($_POST['selectedrow'])){
			$locationcode = $_POST['selectedrow'];
			$location = LocationManager::getInstance()->getLocationByPk($locationcode);
			$_REQUEST['location'] = $location; 
		}	
		else if(isset($_POST['confirmedit'])){
			$locationname = $_POST['locationname'];
			$locationcode = $_POST['locationcode'];
			
			$locationExist = LocationManager::getInstance()->CheckIfLocationExists($locationname);
			if($locationExist == 0){
				$newlocation = LocationManager::getInstance()->UpdateLocation($locationcode,$locationname);
				if($newlocation == 1){
					$_REQUEST['msg_success'] = "Location Updated Successfully.";
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