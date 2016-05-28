<?php 
 
class ReceiptsManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(ReceiptsManager::$instance == null){
 		  ReceiptsManager::$instance = new ReceiptsManager();
 	 	}
 		  return ReceiptsManager::$instance;  
 	}
 	
 	public function listReceiptsByCustomerCode($ccode){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,false);
 		$c->addAnd(CustomerreceiptsPeer::CUSTOMERCODE,$ccode);
 		$sales = CustomerreceiptsPeer::doSelect($c);
 		return $sales;
 	}
 	
 	
 	
 	public function listReceiptsBySdateAndEdate($sdate,$edate){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,false);
 		$c->addAnd(CustomerreceiptsPeer::RECEIPTDATE,$sdate,CRITERIA::GREATER_EQUAL);
 		$c->addAnd(CustomerreceiptsPeer::RECEIPTDATE,$edate,CRITERIA::LESS_EQUAL);
 		$sales = CustomerreceiptsPeer::doSelect($c);
 		return $sales;
 	}
 	
 	public function getSalesDetailsByCustomerCode($ccode){
 		$c = new Criteria();
 		$c->add(SalesPeer::DELETED,false);
 		$c->addAnd(SalesPeer::CUSTOMERCODE,$ccode);
 		$sale = SalesPeer::doSelect($c);
 		return $sale;
 	}
 	
 	public function listTodaysReceipts($today){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,false);
 		$c->addAnd(CustomerreceiptsPeer::ADDEDDATE,$today);
 		$todayslist = CustomerreceiptsPeer::doSelect($c);
 		return $todayslist;
 	}
 	
 	public function countTodaysReceipts(){
 		$today = strtotime(date("m.d.y"));
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,false);
 		$c->addAnd(CustomerreceiptsPeer::ADDEDDATE,$today);
 		$todayslist = CustomerreceiptsPeer::doCount($c);
 		return $todayslist;
 	}
 	
 	
 	public function getLocationByPK($lcode){
 		return LocationPeer::retrieveByPK($lcode);
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
 	
 	public function getSaleDetailsByPK($salerefno){
 		return SalesPeer::retrieveByPK($salerefno);
 	}
 	
 	public function getReceipstByPK($receiptno){
 		return CustomerreceiptsPeer::retrieveByPK($receiptno);
 	}
 	
 	 	
 	public function getMethodOfPaymentByReceiptNo($receiptno){
 		$c = new Criteria();
 		$c->add(CustomerReceiptmethodofpaymentPeer::RECEIPTNO,$receiptno);
 		$mop = CustomerReceiptmethodofpaymentPeer::doSelect($c);
 		return $mop;
 	}
 	
 	
 	public function checkifreceiptexists($salerefno,$locationcode,$projectcode,$customercode,$receiptdate,$blocknumber,$totalpaid,$paidfor){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,false);
 		$c->addAnd(CustomerreceiptsPeer::SALEREFNO,$salerefno);
 		$c->addAnd(CustomerreceiptsPeer::LOCATIONCODE,$locationcode);
 		$c->addAnd(CustomerreceiptsPeer::PROJECTCODE,$projectcode);
 		$c->addAnd(CustomerreceiptsPeer::CUSTOMERCODE,$customercode);
 		$c->addAnd(CustomerreceiptsPeer::RECEIPTDATE,$receiptdate);
 		$c->addAnd(CustomerreceiptsPeer::BLOCKNUMBER,$blocknumber);
 		$c->addAnd(CustomerreceiptsPeer::PAIDAMOUNT,$totalpaid);
 		$c->addAnd(CustomerreceiptsPeer::PAIDFOR,$paidfor);
 		$exists = CustomerreceiptsPeer::doCount($c);
 		return $exists;
 	}
 	
 	public function AddNewReceipt($salerefno,$locationcode,$projectcode,$customercode,$receiptdate,$blocknumber,$totalpaid,$paidfor,$rcptbookno){
 		$receipt = new Customerreceipts();
 		$receipt->setSalerefno($salerefno);
 		$receipt->setLocationcode($locationcode);
 		$receipt->setProjectcode($projectcode);
 		$receipt->setCustomercode($customercode);
 		$receipt->setReceiptdate($receiptdate);
 		$receipt->setOldreceiptno($rcptbookno);
 		$receipt->setBlocknumber($blocknumber);
 		$receipt->setPaymenttype(0);
 		$receipt->setPaidamount($totalpaid);
 		$receipt->setPaidfor($paidfor);
 		$receipt->setAddedby($_SESSION[SYSTEMNAME.'logid']);
 		$receipt->setAddeddate(strtotime(date('mm-dd-yyyy')));
 		$receipt->setAddedtime(date("h:i:s"));
 		$receipt->save();
 		return $receipt;
 		
 	}
 	
 	public function addMethodofPaymentDetails($rno,$rstatus,$bankdls,$chqno,$chqdate,$amt){
 		           
 		$mop = new CustomerReceiptmethodofpayment();
 		$mop->setReceiptno($rno);
 		$mop->setReceiptstatus($rstatus);
 		$mop->setBank($bankdls);
 		$mop->setChequnumber($chqno);
 		$mop->setChequedate($chqdate);
 		$mop->setAmount($amt);
 		$mop->save();
 		return 1;
 	}
 	
 	
 	public function deleteReceipt($receiptno){
 		$receipt = CustomerreceiptsPeer::retrieveByPK($receiptno);
 		$receipt->setDeleted(true);
 		$receipt->setDeletedby($_SESSION[SYSTEMNAME.'logid']);
 		$receipt->setDeleteddate(strtotime(date('mm-dd-yyyy')));
 		$receipt->setDeletedtime(date("h:i:s"));
 		$receipt->save();
 		return 1;
 	}
 	
	public function RestoreVoidedReceipt($receiptno,$locationcode,$projectcode,$customercode,$blockrefnum){
 		$receipt = CustomerreceiptsPeer::retrieveByPK($receiptno);
 		$receipt->setLocationcode($locationcode);
 		$receipt->setProjectcode($projectcode);
 		$receipt->setCustomercode($customercode);
 		$receipt->setBlocknumber($blockrefnum);
 		$receipt->setDeleted(false);
 		$receipt->setDeletedby($_SESSION[SYSTEMNAME.'logid']);
 		$receipt->setDeleteddate(strtotime(date('mm-dd-yyyy')));
 		$receipt->setDeletedtime(date("h:i:s"));
 		$receipt->save();
 		return 1;
 	}
 	
	public function getUserNameByUserId(){
		$uid = $_SESSION[SYSTEMNAME.'logid'];
		return UserPeer::retrieveByPK($uid);
	}
 	
	public function getReceiptAddedbyUserName($uid){
		$userobj = UserPeer::retrieveByPK($uid);
		return $userobj;
	}
	
 	public function GetVoidedReceiptsByCustomerCode($ccode){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,true);
 		$c->addAnd(CustomerreceiptsPeer::CUSTOMERCODE,$ccode);
 		$vdreceipts = CustomerreceiptsPeer::doSelect($c);
 		return $vdreceipts; 
 	}
 	
	public function ListVoidedReceiptsBySdateAndEdate($sdate,$edate){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,true);
 		$c->addAnd(CustomerreceiptsPeer::RECEIPTDATE,$sdate,CRITERIA::GREATER_EQUAL);
 		$c->addAnd(CustomerreceiptsPeer::RECEIPTDATE,$edate,CRITERIA::LESS_EQUAL);
 		$sales = CustomerreceiptsPeer::doSelect($c);
 		return $sales;
 	}
 	
	public function ListVoidedTodaysReceipts($today){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,true);
 		$c->addAnd(CustomerreceiptsPeer::DELETEDDATE,$today);
 		$todayslist = CustomerreceiptsPeer::doSelect($c);
 		return $todayslist;
 	}
 	
 	
 	public function getCustomercodeByProjectAndBlockNumber($projectcode,$blockrefno){
 		$c = new Criteria();
 		$c->add(ProjectdetailsPeer::DELETED,false);
 		$c->addAnd(ProjectdetailsPeer::RESERVESTATUS,2);
 		$c->addAnd(ProjectdetailsPeer::PROJECTCODE,$projectcode,CRITERIA::EQUAL);
 		$c->addAnd(ProjectdetailsPeer::REFNO,$blockrefno,CRITERIA::EQUAL);
 		$customer = ProjectdetailsPeer::doSelectOne($c);
 		return $customer;
 	}
 	
 	public function getBlockListingByProjectCode($prcode){
 		$c = new Criteria();
 		$c->add(ProjectdetailsPeer::DELETED,false,CRITERIA::EQUAL);
 		$c->addAnd(ProjectdetailsPeer::RESERVESTATUS,2,CRITERIA::EQUAL);
 		$c->addAnd(ProjectdetailsPeer::PROJECTCODE,$prcode,CRITERIA::EQUAL);
 		$blocklist = ProjectdetailsPeer::doSelect($c);
 		return $blocklist;
 		
 	}
        
        public function getLastReceiptBySaleReferenceNumber($salerefno){
            $con = Propel::getConnection();
		//$sql = "SELECT * FROM customerreceipts WHERE deleted='0' AND projectcode='$projectcode' ORDER BY receiptno DESC LIMIT 1";
            $sql = "SELECT * FROM customerreceipts WHERE deleted='0' AND salerefno='$salerefno' AND paidfor='IN' ORDER BY receiptno DESC LIMIT 1";
            $stmt = $con->prepare($sql);
	    $stmt->execute();
	
	    $result = CustomerreceiptsPeer::populateObjects($stmt);
	    return $result;
		
	}
 } 
?>