<?php 
 
class ReportsManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(ReportsManager::$instance == null){
 		  ReportsManager::$instance = new ReportsManager();
 	 	}
 		  return ReportsManager::$instance;  
 	}
 	
	public function getReceiptsForCollectionReports($sdate,$edate,$cashier){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,false);
 		$c->addAnd(CustomerreceiptsPeer::RECEIPTDATE,$sdate,CRITERIA::GREATER_EQUAL);
 		$c->addAnd(CustomerreceiptsPeer::RECEIPTDATE,$edate,CRITERIA::LESS_EQUAL);
                if($cashier != 0){
                    $c->addAnd(CustomerreceiptsPeer::ADDEDBY,$cashier,CRITERIA::EQUAL);
                }
 		$rcptfcr = CustomerreceiptsPeer::doSelect($c);
 		return $rcptfcr;
 		
 	}
 	
 	public function getReceiptsForCollectionReports_ByProject($sdate,$edate,$projectcode,$cashier){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,false);
 		$c->addAnd(CustomerreceiptsPeer::RECEIPTDATE,$sdate,CRITERIA::GREATER_EQUAL);
 		$c->addAnd(CustomerreceiptsPeer::RECEIPTDATE,$edate,CRITERIA::LESS_EQUAL);
 		$c->addAnd(CustomerreceiptsPeer::PROJECTCODE,$projectcode,CRITERIA::EQUAL);
                if($cashier != 0){
                    $c->addAnd(CustomerreceiptsPeer::ADDEDBY,$cashier,CRITERIA::EQUAL);
                }
 		$rcptfcr = CustomerreceiptsPeer::doSelect($c);
 		return $rcptfcr;
 		
 	}
 	
 	public function getReceiptsMethodOfPayment($receiptno){
 		$c = new Criteria();
 		$c->add(CustomerReceiptmethodofpaymentPeer::RECEIPTNO,$receiptno);
 		$mofpmnt = CustomerReceiptmethodofpaymentPeer::doSelect($c);
 		return $mofpmnt;
 	}
 	
 	public function listSales($projectcode){
 		$c = new Criteria();
 		$c->Add(SalesPeer::DELETED,false);
                $c->addAnd(SalesPeer::PROJECTCODE,$projectcode,CRITERIA::EQUAL);
 		$saleslist = SalesPeer::doSelect($c);
 		return $saleslist;
 	}
        
        public function listAllSales(){
 		$c = new Criteria();
 		$c->Add(SalesPeer::DELETED,false);
                //$c->addAnd(SalesPeer::PROJECTCODE,$projectcode,CRITERIA::EQUAL);
 		$saleslist = SalesPeer::doSelect($c);
 		return $saleslist;
 	}
        
 	
 	public function getCustomerReceiptsByPk($receiptno){
 		return CustomerreceiptsPeer::retrieveByPK($receiptno);
 	}
 	
 	public function getLocationByPK($lcode){
 		return LocationPeer::retrieveByPK($lcode);
 	}
 	
 	public function getProjectByPK($prcode){
		return ProjectPeer::retrieveByPK($prcode);
	}
	
	public function getSaleByPK($salerefno){
		return SalesPeer::retrieveByPK($salerefno);
	}
	
	public function getBlockNoByPK($blockno){
		return ProjectdetailsPeer::retrieveByPK($blockno);
	}
	
	public function getCustomerByPK($ccode){
		return CustomerdetailsPeer::retrieveByPK($ccode);
	}
	
	public function getProjects(){
		$c = new Criteria();
		$c->add(ProjectPeer::DELETED,false);
		$projects = ProjectPeer::doSelect($c);
		return $projects;
	}
	
	public function getfSalesByProject($prcode){
		$c = new Criteria();
		$c->add(SalesPeer::DELETED,false);
		$c->addAnd(SalesPeer::PROJECTCODE,$prcode);
		$salesbypr = SalesPeer::doSelect($c);
		return $salesbypr; 
	}
	
	public function getProjectDetailsByProject($prcode){
		$c = new Criteria();
		$c->add(ProjectdetailsPeer::DELETED,false);
		$c->addAnd(ProjectdetailsPeer::PROJECTCODE,$prcode);
		$prdls = ProjectdetailsPeer::doSelect($c);
		return $prdls;
	}
        
        public function getProjectDetailsByProjectCustomer($prcode,$customer){
		$c = new Criteria();
		$c->add(ProjectdetailsPeer::DELETED,false);
		$c->addAnd(ProjectdetailsPeer::PROJECTCODE,$prcode);
                $c->addAnd(ProjectdetailsPeer::CUSTOMERCODE,$customer);
		$prdls = ProjectdetailsPeer::doSelect($c);
		return $prdls;
	}
	
//	public function getReceiptsByProjectCode($projectcode){
//		$c = new Criteria();
//		$c->add(CustomerreceiptsPeer::DELETED,false);
//		$c->addAnd(CustomerreceiptsPeer::PROJECTCODE,$projectcode);
//		$receipts = CustomerreceiptsPeer::doSelect($c);
//		return $receipts;
//	}
	
	public function getLastReceiptBySaleReferenceNumber($salerefno){
		$con = Propel::getConnection();
		//$sql = "SELECT * FROM customerreceipts WHERE deleted='0' AND projectcode='$projectcode' ORDER BY receiptno DESC LIMIT 1";
		  $sql = "SELECT * FROM customerreceipts WHERE deleted='0' AND salerefno='$salerefno' ORDER BY receiptno DESC LIMIT 1";
		$stmt = $con->prepare($sql);
	    $stmt->execute();
	
	    $result = CustomerreceiptsPeer::populateObjects($stmt);
	    return $result;
		
	}
	
	
	public function getSeleByBlockRefno($blockrefno){
	//rpt7 blockallocation detail report
		$c = new Criteria();
		$c->add(SalesPeer::DELETED,false);
		$c->addAnd(SalesPeer::BLOCKREFNUMBER,$blockrefno);
		$sale = SalesPeer::doSelectOne($c);
		return $sale;	
	}
	
	public function getReceiptsSUMbySaleRefno($salerefno){
		/*$con = Propel::getConnection();
		$sql = "SELECT SUM(paidamount) AS RECEIPTTOTAL FROM customerreceipts WHERE deleted='0' AND salerefno='$salerefno'";
		$stmt = $con->prepare($sql);
	    $stmt->execute();
	
	    $result = CustomerreceiptsPeer::populateObjects($stmt);
	    return $result;*/
		
		$c = new criteria();
		$c->add(CustomerreceiptsPeer::DELETED,false);
		$c->addAnd(CustomerreceiptsPeer::SALEREFNO,$salerefno);
		$c->addSelectColumn("SUM(".CustomerreceiptsPeer::PAIDAMOUNT.") as recpttotal");
		$stmt = CustomerreceiptsPeer::doSelectStmt($c);
		$row = $stmt->fetch();
		return $row['recpttotal'];
	}
	
 } 
?>