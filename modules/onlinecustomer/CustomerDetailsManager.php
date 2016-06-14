<?php 
 
class CustomerDetailsManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(CustomerDetailsManager::$instance == null){
 		  CustomerDetailsManager::$instance = new CustomerDetailsManager();
 	 	}
 		  return CustomerDetailsManager::$instance;  
 	}
        
        public function getOnlineCustomerByUserId($userid){
            $c = new Criteria();
            $c->add(OnlinecustomerPeer::DELETED,false,CRITERIA::EQUAL);
//            $c->addAnd(OnlinecustomerPeer::UTILIZED,false,CRITERIA::EQUAL);
            $c->addAnd(OnlinecustomerPeer::ONLINEUSERID,$userid,CRITERIA::EQUAL);
            return OnlinecustomerPeer::doSelectOne($c);
        }
        
        
         public function getCustomerByUserId($userid){
            $c = new Criteria();
            $c->add(CustomerdetailsPeer::DELETED,false,CRITERIA::EQUAL);
            $c->addAnd(CustomerdetailsPeer::ONLINEUSERID,$userid,CRITERIA::EQUAL);
            return CustomerdetailsPeer::doSelectOne($c);
        }
        
        
        public function addNewUpcomingProjectRegistrationEntry($uid,$prid,$prname){
            $pr = new Upcomprjctsregister();
            $pr->setUid($uid);
            $pr->setUpcprojectid($prid);
            $pr->setUpcprojectname($prname);   
            $pr->setStatus(false);
            $pr->save();
            return 1;
        }
        
        public function getUpcomingRegistrationsByUid($uid){
            $c = new Criteria();
            $c->add(UpcomprjctsregisterPeer::UID,$uid,CRITERIA::EQUAL);
            $c->add(UpcomprjctsregisterPeer::STATUS,false,CRITERIA::EQUAL);
            $p = UpcomprjctsregisterPeer::doSelect($c);
            return $p;
        }
        
        public function getReferenceNoForUpdating($uid,$project){
            $c = new Criteria();
            $c->add(UpcomprjctsregisterPeer::STATUS,false,CRITERIA::EQUAL);
            $c->addAnd(UpcomprjctsregisterPeer::UPCPROJECTNAME,$project,CRITERIA::EQUAL);
            $c->addAnd(UpcomprjctsregisterPeer::UID,$uid,CRITERIA::EQUAL);
            $pr = UpcomprjctsregisterPeer::doSelectOne($c);
            
            if(sizeof($pr) > 0){
                return $pr->getRefno();
            }else{
                return -1;
            }
            
            
        }
        
        public function removeRemoveRegisteredUpcomingProject($refno){
            $upc = UpcomprjctsregisterPeer::retrieveByPK($refno);
            $upc->setStatus(true);
            $upc->save();
            return 1;
        }
        
        public function editOnlineCustomer($customerobj){
            $customerobj->save();
            return 1;
        }
        
        public function getUserByPk($uid){
            return UserPeer::retrieveByPK($uid);
        }
        
        public function updatePassword($uid,$newpwd){
             $onlineuserobj = UserPeer::retrieveByPK($uid);
             $onlineuserobj->setPassword(md5($newpwd));
             $onlineuserobj->save();
             return 1;
        }
 } 
?>