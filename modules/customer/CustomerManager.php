<?php
class CustomerManager{
	
	/* Define singleton - start */
	private static $instance;
	
	private function __construct() {
		
	}
	
	public static function getInstance() {
		if (CustomerManager::$instance == null) {
			CustomerManager::$instance = new CustomerManager();
		}
		
		return CustomerManager::$instance;
	}
	
//	public function searchCustomerByFamilyName($q){
//		$c = new Criteria();
//		$c->add(CustomerdetailsPeer::DELETED,false);
//		$c->addAnd(CustomerdetailsPeer::FAMILYNAME,"%".$q."%",CRITERIA::LIKE);
//		$customer = CustomerdetailsPeer::doSelect($c);
//		return $customer;
//	}
	
	public function searchCustomer($sql){
		$con = Propel::getConnection();
		//$sql = "SELECT * FROM customerdetails WHERE familyname LIKE '%$q%'";
		$stmt = $con->prepare($sql);
	    $stmt->execute();
	
	    $result = CustomerdetailsPeer::populateObjects($stmt);
	    return $result;
		
	}
	
	public function checkIfCustomerExists($passportno){
		$c = new Criteria();
		$c->add(CustomerdetailsPeer::PASSPORTNO,$passportno,CRITERIA::EQUAL);
		$exists = CustomerdetailsPeer::doCount($c);
		return $exists;
	}
	
	public function getCustomerByPK($customercode){
		return CustomerdetailsPeer::retrieveByPK($customercode);
	}
	
	public function addNewCustomer($title,$familyname,$fristname,$addl1,$addl2,$postcode,$country,
								   $email,$skype,$lanline,$mobile,$workphone,$fax,$passportno,$sladd1,
								   $sladd2,$sllandline,$slmobile,$slcontact){
		
		$customer = new Customerdetails();
		$customer->setTitle($title);
		$customer->setFamilyname($familyname);
		$customer->setFirstname($fristname);
		$customer->setAddressline1($addl1);
		$customer->setAddressline2($addl2);
		$customer->setPostcode($postcode);
		$customer->setCountry($country);
		$customer->setEmail($email);
		$customer->setSkype($skype);
		$customer->setLandline($lanline);
		$customer->setMobile($mobile);
		$customer->setWorkphone($workphone);
		$customer->setFax($fax);
		$customer->setPassportno($passportno);
		$customer->setSladdressline1($sladd1);
		$customer->setSladdressline2($sladd2);
		$customer->setSllandline($sllandline);
		$customer->setSlmobile($slmobile);
		$customer->setSlcontactperson($slcontact);
		$customer->setAddedby($_SESSION[SYSTEMNAME.'logid']);
		$customer->setAddeddate(strtotime(date('mm-dd-yyyy')));
		$customer->setAddedtime(date("h:i:s"));
		$customer->save();
								   	
	}
	
	public function editCustomer($customercode,$title,$familyname,$fristname,$addl1,$addl2,$postcode,$country,
								   $email,$skype,$lanline,$mobile,$workphone,$fax,$passportno,$sladd1,
								   $sladd2,$sllandline,$slmobile,$slcontact){
								
		$customer = CustomerdetailsPeer::retrieveByPK($customercode);
		$customer->setTitle($title);
		$customer->setFamilyname($familyname);
		$customer->setFirstname($fristname);
		$customer->setAddressline1($addl1);
		$customer->setAddressline2($addl2);
		$customer->setPostcode($postcode);
		$customer->setCountry($country);
		$customer->setEmail($email);
		$customer->setSkype($skype);
		$customer->setLandline($lanline);
		$customer->setMobile($mobile);
		$customer->setWorkphone($workphone);
		$customer->setFax($fax);
		$customer->setPassportno($passportno);
		$customer->setSladdressline1($sladd1);
		$customer->setSladdressline2($sladd2);
		$customer->setSllandline($sllandline);
		$customer->setSlmobile($slmobile);
		$customer->setSlcontactperson($slcontact);
		$customer->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
		$customer->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
		$customer->setLastmodifiedtime(date("h:i:s"));
		$customer->save();
		return 1;							   	
	}

	public function deleteCustomer($customercode){
		$customer = CustomerdetailsPeer::retrieveByPK($customercode);
		$customer->setDeleted(true);
		$customer->setDeletedby($_SESSION[SYSTEMNAME.'logid']);
		$customer->setDeleteddate(strtotime(date('mm-dd-yyyy')));
		$customer->setDeletedtime(date("h:i:s"));
		$customer->save();
		return 1;
	}
}

?>