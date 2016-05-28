<?php
class LocationManager{
	
	/* Define singleton - start */
	private static $instance;
	
	private function __construct() {
		
	}
	
	public static function getInstance() {
		if (LocationManager::$instance == null) {
			LocationManager::$instance = new LocationManager();
		}
		
		return LocationManager::$instance;
	}
	
	public function ListLocations(){
		$c = new Criteria();
		$c->add(LocationPeer::DELETED,false,CRITERIA::EQUAL);
		$c->addDescendingOrderByColumn(LocationPeer::LOCATIONCODE);
		$locationlist = LocationPeer::doSelect($c);
		return $locationlist;
	}
	
	public function AddNewLocation($locationname){
		$location = new Location();
		$location->setLocationname($locationname);
		$location->setLocationcity($locationname);
		$location->setAddedby($_SESSION[SYSTEMNAME.'logid']);
		$location->setAddeddate(strtotime(date('mm-dd-yyyy')));
		$location->setAddedtime(date("h:i:s"));
		$location->save();
		return 1;
	}
	
	public function UpdateLocation($lcode,$lname){
		$location = LocationPeer::retrieveByPK($lcode);
		$location->setLocationname($lname);
		$location->setLocationcity($lname);
		$location->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
		$location->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
		$location->setLastmodifiedtime(date("h:i:s"));
		$location->save();
		return 1;
	}
	
	public function CheckIfLocationExists($locationname){
		$c = new Criteria();
		$c->add(LocationPeer::LOCATIONNAME,$locationname,CRITERIA::EQUAL);
		$lctnexists = LocationPeer::doCount($c);
		return $lctnexists;
	}
	
	public function getLocationByPk($locationcode){
		return LocationPeer::retrieveByPK($locationcode);
	}
	
	public function DeleteLocation($locationcode){
		$location = LocationPeer::retrieveByPK($locationcode);
		$location->setDeleted(true);
		$location->setDeletedby($_SESSION[SYSTEMNAME.'logid']);
		$location->setDeleteddate(strtotime(date('mm-dd-yyyy')));
		$location->setDeletedtime(date("h:i:s"));
		$location->save();
		return 1;
	}
	
}
?>