<?php 
 
class RefundsManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(RefundsManager::$instance == null){
 		  RefundsManager::$instance = new RefundsManager();
 	 	}
 		  return RefundsManager::$instance;  
 	}
 	
 	public function ListAllProjects(){
 		$c = new Criteria();
 		$c->add(ProjectPeer::DELETED,false);
 		$prlist = ProjectPeer::doSelect($c);
 		return $prlist;
 	}
 	
 	public function listSalesByProjectCode($projectcode){
 		$c = new criteria();
 		$c->add(SalesPeer::DELETED,false);
 		$c->addAnd(SalesPeer::PROJECTCODE,$projectcode);
 		$salesbypc = SalesPeer::doSelect($c);
 		return $salesbypc;
 	}
 	
 	
 	public function listRefundedSalesByProjectcode($projectcode){
 		$c = new criteria();
 		$c->add(RefundsPeer::DELETED,false);
 		$c->addAnd(RefundsPeer::PROJECTCODE,$projectcode);
 		$refundslist = RefundsPeer::doSelect($c);
 		return $refundslist;
 	}
 	
 	
	public function getLastReceiptBySelesRef($salesrefno){
		$con = Propel::getConnection();
		$sql = "SELECT * FROM customerreceipts WHERE deleted='0' AND salerefno='$salesrefno' ORDER BY receiptno DESC LIMIT 1";
		$stmt = $con->prepare($sql);
	    $stmt->execute();
	
	    $result = CustomerreceiptsPeer::populateObjects($stmt);
	    return $result;
		
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
	
	public function getReceiptsByPk($rno){
		return CustomerreceiptsPeer::retrieveByPK($rno);
	}
	
	public function listReceiptsBySalerefno($salerefno){
		$c = new Criteria();
		$c->add(CustomerreceiptsPeer::DELETED,false);
		$c->addAnd(CustomerreceiptsPeer::SALEREFNO,$salerefno);
		$receiptlist = CustomerreceiptsPeer::doSelect($c);
		return $receiptlist;
	}
	
	public function AddNewRefund($salerefno,$customercode,$locationcode,$projectcode,$blockrefno,$pplanrefno,$refundamt){
		$refund = new Refunds();
		$refund->setSalerefno($salerefno);
		$refund->setCustomercode($customercode);
		$refund->setLocationcode($locationcode);
		$refund->setProjectcode($projectcode);
		$refund->setBlockrefnumber($blockrefno);
		$refund->setPayplanrefno($pplanrefno);
		$refund->setRefundamount($refundamt);
		$refund->setRefundate(strtotime(date('mm-dd-yyyy')));
		$refund->setAddedby($_SESSION[SYSTEMNAME.'logid']);
		$refund->setAddeddate(strtotime(date('mm-dd-yyyy')));
		$refund->setAddedtime(date("h:i:s"));
		$refund->save();
		return 1;
	}
	
	
	public function DeleteReceipts($salerefno){
	    $con = Propel::getConnection();
	   	$selectCriteria = new Criteria();
		$selectCriteria->add(CustomerreceiptsPeer::SALEREFNO,$salerefno);
		$updateCriteria = new Criteria();
		$updateCriteria->add(CustomerreceiptsPeer::DELETED,true);
		BasePeer::doUpdate($selectCriteria,$updateCriteria,$con);
		return 1;
	}
	
	public function getUserNameByUserId($uid){
		//$uid = $_SESSION[SYSTEMNAME.'logid'];
		return UserPeer::retrieveByPK($uid);
	}
        
       
	
	
 } 
?>