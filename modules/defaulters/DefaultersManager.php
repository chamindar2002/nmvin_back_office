<?php 
 
class DefaultersManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(DefaultersManager::$instance == null){
 		  DefaultersManager::$instance = new DefaultersManager();
 	 	}
 		  return DefaultersManager::$instance;  
 	}
        
        public function markAsDefaulted($saleref){
            $sale = SalesPeer::retrieveByPK($saleref);
            //$sale->setDefaulted(true);
            $sale->setDeleted(true);
            $sale->save();
            return 1;
        }
        
        
        public function unmarkAdDefaulted($saleref){
            $sale = SalesPeer::retrieveByPK($saleref);
            //$sale->setDefaulted(false);
            $sale->setDeleted(false);
            $sale->save();
            return 1;
        }


        public function getCustomerCode($saleref){
            $result = SalesPeer::retrieveByPK($saleref);
            if($result){
                return $result->getCustomercode();
            }
            
            return 0;
        }
        
        public function getBlockRefNumber($saleref){
            $result = SalesPeer::retrieveByPK($saleref);
            if($result){
                return $result->getBlockrefnumber();
            }
            
            return 0;
        }
        
        
        public function getBlockPrice($blockref){
            $result = ProjectdetailsPeer::retrieveByPK($blockref);
            if(sizeof($result) == 1){
                return $result->getBlockprice();
            }else{
                return 0;
            }
        }
       
        public function listDefaultedSalesByProjectcode($prcode){
            $c = new Criteria();
            $c->add(SalesPeer::PROJECTCODE,$prcode,CRITERIA::EQUAL);
            //$c->addAnd(SalesPeer::DEFAULTED,true,CRITERIA::EQUAL);
            $c->addAnd(SalesPeer::DELETED,true,CRITERIA::EQUAL);
            return SalesPeer::doSelect($c);
        }
        
        public function addNewDefaultersEntry($saleref,$ccode,$blockref,$blockrefno_new,$status){
            $df = new PaymentDefaultedEntries();
            $df->setCustomercode($ccode);
            $df->setSalerefno($saleref);
            $df->setBlockrefnumberOld($blockref);
            $df->setBlockrefnumberNew($blockrefno_new);
            $df->setSatus($status);
            $df->setAddedby($_SESSION[SYSTEMNAME.'logid']);
            $df->setAddeddate(strtotime(date('mm-dd-yyyy')));
            $df->setAddedtime(date("h:i:s"));
            $df->save();
            return 1;
        }
        
        public function getSaleByPk($saleref){
            return SalesPeer::retrieveByPK($saleref);
        }
        
        public function releaseBlock($blockref,$status){
            $result = ProjectdetailsPeer::retrieveByPK($blockref);
            $result->setReservestatus($status);
            $result->save();
            return 1;
        }
        
        
        public function getBlocksByProject($prcode){
            $c = new Criteria();
            $c->add(ProjectdetailsPeer::DELETED,false,CRITERIA::EQUAL);
            $c->addAnd(ProjectdetailsPeer::PROJECTCODE,$prcode,CRITERIA::EQUAL);
            $c->addAnd(ProjectdetailsPeer::RESERVESTATUS,0,CRITERIA::EQUAL);
            return ProjectdetailsPeer::doSelect($c);
        }
        
        public function updateBlockInSalesFile($saleref,$newblockref){
            $sale = SalesPeer::retrieveByPK($saleref);
            $sale->setBlockrefnumber($newblockref);
            $sale->setDeleted(false);
            $sale->save();
            return 1;
        }
       
 } 
?>