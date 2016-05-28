<?php 
 
class OnlineCustomerManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(OnlineCustomerManager::$instance == null){
 		  OnlineCustomerManager::$instance = new OnlineCustomerManager();
 	 	}
 		  return OnlineCustomerManager::$instance;  
 	}
        
        
        public function getBlockRefByPk($blockref){
            return ProjectdetailsPeer::retrieveByPK($blockref);
        }
        
        public function getLocationByPk($locationcode){
            return LocationPeer::retrieveByPK($locationcode);
        }
        
        public function getProjectByPk($projectcode){
            return ProjectPeer::retrieveByPK($projectcode);
        }
        
        public function getCustomerByUserId($userid){
            $c = new Criteria();
            $c->add(OnlinecustomerPeer::DELETED,false,CRITERIA::EQUAL);
            $c->addAnd(OnlinecustomerPeer::UTILIZED,false,CRITERIA::EQUAL);
            $c->addAnd(OnlinecustomerPeer::ONLINEUSERID,$userid,CRITERIA::EQUAL);
            return OnlinecustomerPeer::doSelectOne($c);
        }
        
        public function getCustomerByUserId_2($userid){
            $c = new Criteria();
            $c->add(CustomerdetailsPeer::DELETED,false,CRITERIA::EQUAL);
            $c->addAnd(CustomerdetailsPeer::ONLINEUSERID,$userid,CRITERIA::EQUAL);
            return CustomerdetailsPeer::doSelectOne($c);
        }
        
        public function checkIfUserreadyExists($email){
            $c = new Criteria();
            $c->add(UserPeer::DELETED,false,CRITERIA::EQUAL);
            $c->addAnd(UserPeer::LOGINNAME,$email,CRITERIA::EQUAL);
            $exists = UserPeer::doCount($c);
            return $exists;
        }
        
        public function addNewOnlineCustomer($newonlinecustomer){
            $newonlinecustomer->save();
            return 1;        
        }
        
        public function getUserByUserId($uid){
            return UserPeer::retrieveByPK($uid);
        }
        
        
        public function addNewUserRoleRef($uid,$rid){
            $urf = new UserRoleRef();
            $urf->setUid($uid);
            $urf->setRid($rid);
            $urf->save();
            return 1;
        }
        
        public function checkBlockAvailability($blockref){
            $c = new Criteria();
            $c->add(ProjectdetailsPeer::DELETED,false,CRITERIA::EQUAL);
            $c->addAnd(ProjectdetailsPeer::REFNO,$blockref,CRITERIA::EQUAL);
            $c->addAnd(ProjectdetailsPeer::RESERVESTATUS,0,CRITERIA::EQUAL);
            return ProjectdetailsPeer::doCount($c);
        }
        
        public function LockProjectDetailsTable(){
//	   $con = Propel::getConnection();
//           $sql = "LOCK TABLES projectdetails WRITE;";
//	   $stmt = $con->prepare($sql);
//	   $stmt->execute();
//	
//	   $result = ProjectdetailsPeer::populateObjects($stmt);
//	   return $result;
            
            
            $db = Propel::getDB(ProjectdetailsPeer::DATABASE_NAME);
            $connection = Propel::getConnection(ProjectdetailsPeer::DATABASE_NAME);
            $db->lockTable($connection,ProjectdetailsPeer::TABLE_NAME);
            // do something
            //$db-> unlockTable($connection,ProjectdetailsPeer::TABLE_NAME);
            
            return 1;
		
	}
        
        public function isBlockedIp($ipaddr){
            $c = new Criteria();
            $c->add(BlockedipsPeer::STATUS,TRUE,CRITERIA::EQUAL);
            $c->addAnd(BlockedipsPeer::BLOCKED_IP,$ipaddr,CRITERIA::EQUAL);
            $blocked = BlockedipsPeer::doCount($c);
            return $blocked;
        }
        
        public function blockIp($ipaddr,$email){
            $blockip = new Blockedips();
            $blockip->setBlockedEmail($email);
            $blockip->setBlockedIp($ipaddr);
            $blockip->save();
            return 1;
        }
        
        public function getOnlineUserIdByUsername($username){
            $c = new Criteria();
            $c->add(UserPeer::DELETED,false,CRITERIA::EQUAL);
            $c->addAnd(UserPeer::ENABLED,true,CRITERIA::EQUAL);
            $c->addAnd(UserPeer::LOGINNAME,$username,CRITERIA::EQUAL);
            return UserPeer::doSelectOne($c);
        }
        
        public function resetOnlineUserPassword($newpwd,$userid){
            $hashedpwd = md5($newpwd);
            $userobj = UserPeer::retrieveByPK($userid);
            $userobj->setPassword($hashedpwd);
            $userobj->save();
            return 1;
        }
       
 } 
?>