<?php
class ProjectDetailsManager{
	
	/* Define singleton - start */
	private static $instance;
	
	private function __construct() {
		
	}
	
	public static function getInstance() {
		if (ProjectDetailsManager::$instance == null) {
			ProjectDetailsManager::$instance = new ProjectDetailsManager();
		}
		
		return ProjectDetailsManager::$instance;
	}
	
	public function listProjects(){
		$c = new Criteria();
		$c->add(ProjectPeer::DELETED,false);
		$projects = ProjectPeer::doSelect($c);
		return $projects;
	}
	
	public function listProjectDetailsByProjectCode($projectcode){
		$c = new Criteria();
		$c->add(ProjectdetailsPeer::DELETED,false);
		$c->addAnd(ProjectdetailsPeer::PROJECTCODE,$projectcode);
		$projectdetails = ProjectdetailsPeer::doSelect($c);
		return $projectdetails;
	}
        
        
        public function countProjectDetailsByProjectCode($projectcode){
		$c = new Criteria();
		$c->add(ProjectdetailsPeer::DELETED,false);
		$c->addAnd(ProjectdetailsPeer::PROJECTCODE,$projectcode);
		$count = ProjectdetailsPeer::doCount($c);
		return $count;
	}
	
	public function getProjectNameByPK($prcode){
		return ProjectPeer::retrieveByPK($prcode);
	}
	
	public function updateProjectDetails($refno,$blockno,$blocksize,$blockprice,$blockstatus){
		$prdls = ProjectdetailsPeer::retrieveByPK($refno);
		$prdls->setBlocknumber($blockno);
		$prdls->setBlocksize($blocksize);
		$prdls->setBlockprice($blockprice);
		$prdls->setReservestatus($blockstatus);
		$prdls->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
		$prdls->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
		$prdls->setLastmodifiedtime(date("h:i:s"));
		$prdls->save();
		return 1;
	}
	
	public function getLocationByPK($lccode){
		return LocationPeer::retrieveByPK($lccode);
	}
	
	public function getCustomerByPK($customerno){
 		return CustomerdetailsPeer::retrieveByPK($customerno);
 	}
        
        public function getBlockByPk($blockref){
            return ProjectdetailsPeer::retrieveByPK($blockref);
        }
        
        public function UpdateSingleBlock($refno,$blockprice){
            $prdls = ProjectdetailsPeer::retrieveByPK($refno);
            $prdls->setBlockprice($blockprice);
            $prdls->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
            $prdls->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
            $prdls->setLastmodifiedtime(date("h:i:s"));
            $prdls->save();
            return 1;
        }
}
?>