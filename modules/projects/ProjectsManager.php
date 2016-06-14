<?php
class ProjectsManager{
	
	/* Define singleton - start */
	private static $instance;
	
	private function __construct() {
		
	}
	
	public static function getInstance() {
		if (ProjectsManager::$instance == null) {
			ProjectsManager::$instance = new ProjectsManager();
		}
		
		return ProjectsManager::$instance;
	}
	
	public function listLocations(){
		$c = new Criteria();
		$c->add(LocationPeer::DELETED,false);
		$location = LocationPeer::doSelect($c);
		return $location;
	}
	
	public function getLocationByPk($lc){
		return LocationPeer::retrieveByPK($lc);	
	}
	
	public function listProjectsByLocation($locationcode){
		$c = new Criteria();
		$c->add(ProjectPeer::DELETED,false);
		$c->addAnd(ProjectPeer::LOCATIONCODE,$locationcode);
		$projectlist = ProjectPeer::doSelect($c);
		return $projectlist;
	}
	
	public function checkIfProjectExists($locationCode,$projectName,$nofblocks){
		$c = new Criteria();
		$c->add(ProjectPeer::DELETED,false);
		$c->addAnd(ProjectPeer::LOCATIONCODE,$locationCode);
		$c->addAnd(ProjectPeer::PROJECTNAME,$projectName);
		$c->addAnd(ProjectPeer::NOFBLOCKS,$nofblocks);
		$e = ProjectPeer::doCount($c);
		return $e;
	}
	
	public function checkIfProjectExists_2($locationCode,$projectName){
		$c = new Criteria();
		$c->add(ProjectPeer::DELETED,false);
		$c->addAnd(ProjectPeer::LOCATIONCODE,$locationCode);
		$c->addAnd(ProjectPeer::PROJECTNAME,$projectName);
		//$c->addAnd(ProjectPeer::NOFBLOCKS,$nofblocks);
		$e = ProjectPeer::doCount($c);
		return $e;
	}
	
	public function addNewProject($locationcode,$prname,$nofblocks){
		$project = new Project();
		$project->setLocationcode($locationcode);
		$project->setProjectname($prname);
		$project->setNofblocks($nofblocks);
		$project->setAddedby($_SESSION[SYSTEMNAME.'logid']);
		$project->setAddeddate(strtotime(date('mm-dd-yyyy')));
		$project->setAddedtime(date("h:i:s"));
		$project->save();
		return $project;
	}
	
	public function addNewProjectDetail($locationcode,$projectcode){
		$prdetail = new Projectdetails();
		$prdetail->setLocationcode($locationcode);
		$prdetail->setProjectcode($projectcode);
		$prdetail->setAddedby($_SESSION[SYSTEMNAME.'logid']);
		$prdetail->setAddeddate(strtotime(date('mm-dd-yyyy')));
		$prdetail->setAddedtime(date("h:i:s"));
		$prdetail->save();
	}
	
	public function editProject($prcode,$locationcode,$prname,$nofblocks){
		$project = ProjectPeer::retrieveByPK($prcode);
		$project->setLocationcode($locationcode);
		$project->setProjectname($prname);
		$project->setNofblocks($nofblocks);
		$project->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
		$project->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
		$project->setLastmodifiedtime(date("h:i:s"));
		$project->save();
		return 1;
	}
	
	public function deleteProject($prcode){
		$project = ProjectPeer::retrieveByPK($prcode);
		$project->setDeleted(true);
		$project->setDeletedby($_SESSION[SYSTEMNAME.'logid']);
		$project->setDeleteddate(strtotime(date('mm-dd-yyyy')));
		$project->setDeletedtime(date("h:i:s"));
		$project->save();
		return 1;
	}
	
	public function deleteProjectDetails($projectcode){
		$con = Propel::getConnection();
	   	$selectCriteria = new Criteria();
		$selectCriteria->add(ProjectdetailsPeer::PROJECTCODE,$projectcode);
		$updateCriteria = new Criteria();
		$updateCriteria->add(ProjectdetailsPeer::DELETED,true);
		BasePeer::doUpdate($selectCriteria,$updateCriteria,$con);
		return 1;
	}
	
	public function getProjectByPk($prcode){
		return ProjectPeer::retrieveByPK($prcode);
	}
	
	public function CheckIfBlockSoldBeforeDelete($prcode){
		$c = new Criteria();
		$c->add(SalesPeer::DELETED,false);
		$c->addAnd(SalesPeer::PROJECTCODE,$prcode);
		$exists = SalesPeer::doCount($c);
		return $exists;
	}
	
	public function checkIfBlocksSold($prcode){
		$c = new Criteria();
		$c->add(SalesPeer::DELETED,false);
		$c->addAnd(SalesPeer::PROJECTCODE,$prcode);
		$existscount = SalesPeer::doCount($c);
		return $existscount;
	}
	
}
?>