<?php 
 
class SalesManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(SalesManager::$instance == null){
 		  SalesManager::$instance = new SalesManager();
 	 	}
 		  return SalesManager::$instance;  
 	}
 	
 	public function searchSalesResults($sdate,$edate){
 		$c = new Criteria();
 		$c->add(SalesPeer::DELETED,false);
 		$c->addAnd(SalesPeer::AGREMENTSTARTDATE,$sdate,CRITERIA::GREATER_EQUAL);
 		$c->addAnd(SalesPeer::AGREMENTSTARTDATE,$edate,CRITERIA::LESS_EQUAL);
 		$srchresults = SalesPeer::doSelect($c);
 		return $srchresults;
 	}
 	
 	public function searchSalesResultsByCustomercode($ccode){
 		$c = new Criteria();
 		$c->add(SalesPeer::DELETED,false);
 		$c->addAnd(SalesPeer::CUSTOMERCODE,$ccode);
 		$srchresults = SalesPeer::doSelect($c);
 		return $srchresults;
 	}
 	
 	public function ListTodaysSalesList($today){
 		$c = new Criteria();
 		$c->add(SalesPeer::DELETED,false);
 		$c->addAnd(SalesPeer::ADDEDDATE,$today,CRITERIA::EQUAL);
 		$slst = SalesPeer::doSelect($c);
 		return $slst;
 	}
 	
 	public function countTodaysSales(){
 		$today = strtotime(date("m.d.y"));
 		$c = new Criteria();
 		$c->add(SalesPeer::DELETED,false);
 		$c->addAnd(SalesPeer::ADDEDDATE,$today,CRITERIA::EQUAL);
 		$slst = SalesPeer::doCount($c);
 		return $slst;
 	}
 	
 	public function getProjectByPK($prcode){
 		return ProjectPeer::retrieveByPK($prcode);
 	}
 	
 	public function getBlockNumberByPK($refno){
 		return ProjectdetailsPeer::retrieveByPK($refno);
 	}
 	
 	public function getCustomerByPK($customerno){
 		return CustomerdetailsPeer::retrieveByPK($customerno);
 	}
 	
 	public function searchCustomerByPassportNumber($passportno){
 		$c = new Criteria();
 		$c->add(CustomerdetailsPeer::DELETED,false);
 		$c->addAnd(CustomerdetailsPeer::PASSPORTNO,$passportno);
 		$customer = CustomerdetailsPeer::doSelectOne($c);
 		return $customer;
 	}
 	
 	public function searchCustomerByCustomerCode($ccode){
 		$c = new Criteria();
 		$c->add(CustomerdetailsPeer::DELETED,false);
 		$c->addAnd(CustomerdetailsPeer::CUSTOMERCODE,$ccode);
 		$customer = CustomerdetailsPeer::doSelectOne($c);
 		return $customer;
 	}
 	
	public function listLocations(){
		$c = new Criteria();
		$c->add(LocationPeer::DELETED,false);
		$location = LocationPeer::doSelect($c);
		return $location;
	}
	
	public function listProjectByLocationCode($locationcode){
		$c = new Criteria();
		$c->add(ProjectPeer::DELETED,false);
		$c->addAnd(ProjectPeer::LOCATIONCODE,$locationcode);
		$projects = ProjectPeer::doSelect($c);
		return $projects;
	}
	
	public function listProjectDetailsByPrCode($prcode){
		$c =  new Criteria();
		$c->add(ProjectdetailsPeer::DELETED,false);
		$c->addAnd(ProjectdetailsPeer::PROJECTCODE,$prcode);
		//$c->addAnd(ProjectdetailsPeer::RESERVESTATUS,0);
		$prdetails = ProjectdetailsPeer::doSelect($c);
		return $prdetails;
	}
 	
	
	
	public function listPaymentPlayByProjectCode($prcode){
		$c = new Criteria();
		$c->add(PaymentplanPeer::DELETED,false);
		$c->addAnd(PaymentplanPeer::PROJECTCODE,$prcode);
		$pplan = PaymentplanPeer::doSelect($c);
		return $pplan;
	}
	
	public function getPaymentPlanByPK($refno){
		return PaymentplanPeer::retrieveByPK($refno); 
	}
	
	public function getLastCustomer(){
		$con = Propel::getConnection();
		$sql = "SELECT * FROM customerdetails WHERE deleted <> '1' ORDER BY customercode DESC LIMIT 1";
		$stmt = $con->prepare($sql);
	    $stmt->execute();
	
	    $result = CustomerdetailsPeer::populateObjects($stmt);
	    return $result;
		
	}
	
	public function AddNewSalesRecord($customercode,$location,$project,$blockref,
									  $pplan,$nofinstallmts,$desc,$installamt,$totpayable,
									  $dueday,$agreementstartdate,$agreementexpdate){
		
		$newsale = new Sales();
		$newsale->setCustomercode($customercode);
		$newsale->setLocationcode($location);
		$newsale->setProjectcode($project);
		$newsale->setBlockrefnumber($blockref);
		$newsale->setPayplanrefno($pplan);
		$newsale->setNofinstallments($nofinstallmts);
		$newsale->setDescription($desc);
		$newsale->setInstallamount($installamt);
		$newsale->setTotalpayable($totpayable);
		$newsale->setPaymentduedate($dueday);
		$newsale->setAgrementstartdate(strtotime($agreementstartdate));
		$newsale->setAgrementfinishdate(strtotime($agreementexpdate));
		$newsale->setAddedby($_SESSION[SYSTEMNAME.'logid']);
		$newsale->setAddeddate(strtotime(date('mm-dd-yyyy')));
		$newsale->setAddedtime(date("h:i:s"));
		$newsale->save();
		return 1;
		
		
	}
	
	
	public function EditSalesRecord($sale_refno,$customercode,$location,$project,$blockref,
									  $pplan,$nofinstallmts,$desc,$installamt,$totpayable,
									  $dueday,$agreementstartdate,$agreementexpdate){
		
		$sale = SalesPeer::retrieveByPK($sale_refno);
		$sale->setCustomercode($customercode);
		$sale->setLocationcode($location);
		$sale->setProjectcode($project);
		$sale->setBlockrefnumber($blockref);
		$sale->setPayplanrefno($pplan);
		$sale->setNofinstallments($nofinstallmts);
		$sale->setDescription($desc);
		$sale->setInstallamount($installamt);
		$sale->setTotalpayable($totpayable);
		$sale->setPaymentduedate($dueday);
		$sale->setAgrementstartdate(strtotime($agreementstartdate));
		$sale->setAgrementfinishdate(strtotime($agreementexpdate));
		$sale->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
		$sale->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
		$sale->setLastmodifiedtime(date("h:i:s"));
		$sale->save();
		return 1;
									  	
									  	
									  	
									  	
	}
	
	
	
	public function setBlockSoldOut($refno,$customercode){
		$block = ProjectdetailsPeer::retrieveByPK($refno);
		$block->setReservestatus(2);//soldout
		$block->setCustomercode($customercode);
		$block->setReservedate(strtotime(date('mm-dd-yyyy')));
		$block->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
		$block->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
		$block->setLastmodifiedtime(date("h:i:s"));
		$block->save();
	}
	
	public function UnsetBlockSoldOut($refno,$customercode){
		$block = ProjectdetailsPeer::retrieveByPK($refno);
		$block->setReservestatus(0);//soldout
		$block->setCustomercode(0);
		$block->setReservedate(strtotime(date('mm-dd-yyyy')));
		$block->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
		$block->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
		$block->setLastmodifiedtime(date("h:i:s"));
		$block->save();
	}
	
	public function deleteSale($sale_refno){
		$sale = SalesPeer::retrieveByPK($sale_refno);
		$sale->setDeleted(true);
		$sale->setDeletedby($_SESSION[SYSTEMNAME.'logid']);
		$sale->setDeleteddate(strtotime(date('mm-dd-yyyy')));
		$sale->setDeletedtime(date("h:i:s"));
		$sale->save();
		return 1;
	}
	
	public function getSaleByRefno($refno){
		return SalesPeer::retrieveByPK($refno);
	}
	
	
	public function listReceiptsBySaleRefno($salerefno){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,false);
 		$c->addAnd(CustomerreceiptsPeer::SALEREFNO,$salerefno);
 		$sales = CustomerreceiptsPeer::doSelect($c);
 		return $sales;
 	}
	
 	public function CheckIfReceiptsIssued($salerefno){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,false);
 		$c->addAnd(CustomerreceiptsPeer::SALEREFNO,$salerefno);
 		$receiptscount = CustomerreceiptsPeer::doCount($c);
 		return $receiptscount; 
 	}
        
        
        //-----------------------------------------------
        
        /*
         * these scripts are utilized in the sttlesales.php file located in the root folder
         * 
         */
            public function listSales(){
                $c = new Criteria();
                $c->add(SalesPeer::DELETED,false,CRITERIA::EQUAL);
                return SalesPeer::doSelect($c);
            }
            
            public function updateTotalPayabel($refno,$newAmt){
                $sale = SalesPeer::retrieveByPK($refno);
                $sale->setTotalpayable($newAmt);
                $sale->save();
            }
            //-----------------------------------------------
        
 	
 } 
?>