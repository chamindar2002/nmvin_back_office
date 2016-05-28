<?php 
 
class SalerightOffManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(SalerightOffManager::$instance == null){
 		  SalerightOffManager::$instance = new SalerightOffManager();
 	 	}
 		  return SalerightOffManager::$instance;  
 	}
 	
 	public function countReceiptsBySalesRef($saleref){
 		$c = new Criteria();
 		$c->add(CustomerreceiptsPeer::DELETED,false,CRITERIA::EQUAL);
 		$c->addAnd(CustomerreceiptsPeer::SALEREFNO,$saleref,CRITERIA::EQUAL);
 		$countofreceipts = CustomerreceiptsPeer::doCount($c);
 		return $countofreceipts;
 	}
 	
 	public function getSalesByPk($saleref){
 		return SalesPeer::retrieveByPK($saleref); 		
 	}
 	
 	public function getCustomerByPK($customercode){
 		return CustomerdetailsPeer::retrieveByPK($customercode); 
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
	
	
	
	public function setNewSaleRightOff($saleref,$amtpayable,$rightoffamt,$rmks,$status){
		$sale = SalesPeer::retrieveByPK($saleref);
		$sale->setTotalpayable($amtpayable);
		$sale->setSalerightoffAmt($rightoffamt);
		$sale->setSalerightoffComment($rmks);
		$sale->setSalerightoffStatus($status);
		$sale->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
		$sale->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
		$sale->setLastmodifiedtime(date("h:i:s"));
		$sale->save();
		return 1;
	}
	
	public function getProjectByProjectCode($prc){
		return ProjectPeer::retrieveByPK($prc);
	}
	
	
	public function getBlocknumberByPk($blockref){
		return ProjectdetailsPeer::retrieveByPK($blockref);
	}
	
	
	
 } 
?>