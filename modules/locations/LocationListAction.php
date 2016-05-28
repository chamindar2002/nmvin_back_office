<?php
include_once("action/Action.php");
include_once("LocationManager.php");      

class LocationListAction implements Action {
	
	public function execute(){
		$locationsList = LocationManager::getInstance()->ListLocations();
		$_REQUEST['locationlist'] = $locationsList;
		return "list";
	}
}



?>