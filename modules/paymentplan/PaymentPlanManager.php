<?php
class PaymentPlanManager{
	
	/* Define singleton - start */
	private static $instance;
	
	private function __construct() {
		
	}
	
	public static function getInstance() {
		if (PaymentPlanManager::$instance == null) {
			PaymentPlanManager::$instance = new PaymentPlanManager();
		}
		
		return PaymentPlanManager::$instance;
	}
	
	public function getPaymentPlansByProjectCode($prcode){
		$c = new Criteria();
		$c->add(PaymentplanPeer::DELETED,false);
		$c->addAnd(PaymentplanPeer::PROJECTCODE,$prcode);
		$pplan = PaymentplanPeer::doSelect($c);
		return $pplan;
	}
	
	public function getPaymentDetailsByPK($refno){
		return PaymentplanPeer::retrieveByPK($refno);
	}
	
	public function checkifPplanExists($prcode,$nofinstall,$installamt,$rsvfee,$downpmnt,$bankloan,$adtnlland,$devcharge1,$devcharge2,$infastct,$ocupation){
		$c = new Criteria();
		$c->add(PaymentplanPeer::DELETED,false);
		$c->addAnd(PaymentplanPeer::PROJECTCODE,$prcode);
		$c->addAnd(PaymentplanPeer::NOFINSTALLMENTS,$nofinstall);
		$c->addAnd(PaymentplanPeer::INSTALLAMOUNT,$installamt);
		$c->addAnd(PaymentplanPeer::RSVFEE,$rsvfee);
		$c->addAnd(PaymentplanPeer::BANKLOAN,$bankloan);
		$c->addAnd(PaymentplanPeer::ADTNLLAND,$adtnlland);
		$c->addAnd(PaymentplanPeer::DOWNPAYMENT,$downpmnt);
		$c->addAnd(PaymentplanPeer::DEVECHARGERS1,$devcharge1);//kedit
		$c->addAnd(PaymentplanPeer::DEVECHARGERS2,$devcharge2);//kedit
		$c->addAnd(PaymentplanPeer::INFRASTRUCTURE,$infastct);//kedit
		$c->addAnd(PaymentplanPeer::OCCUPATION,$ocupation);//kedit
		$pplan = PaymentplanPeer::doCount($c);
		return $pplan; 
	}
	
	public function AddNewPaymentPlan($prcode,$nofinstall,$installamt,$rsvfee,$downpmnt,$amtpayable,$desc,$bankloan,$adtnlland,$devcharge1,$devcharge2,$infastct,$ocupation){
            //echo $devcharge1,$devcharge2,$infastct,$ocupation;	
            $paymentplan = new Paymentplan();
		$paymentplan->setProjectcode($prcode);
		$paymentplan->setNofinstallments($nofinstall);
		$paymentplan->setInstallamount($installamt);
		$paymentplan->setRsvfee($rsvfee);
		$paymentplan->setBankloan($bankloan);
		$paymentplan->setAdtnlland($adtnlland);
		$paymentplan->setDownpayment($downpmnt);
		$paymentplan->setTotalpayable($amtpayable);
		$paymentplan->setDescription($desc);
		$paymentplan->setAddedby($_SESSION[SYSTEMNAME.'logid']);
		$paymentplan->setAddeddate(strtotime(date('mm-dd-yyyy')));
		$paymentplan->setAddedtime(date("h:i:s"));
                $paymentplan->setDevechargers1($devcharge1);//kedit
                $paymentplan->setDevechargers2($devcharge2);//kedit
                $paymentplan->setInfrastructure($infastct);//kedit
                $paymentplan->setOccupation($ocupation);//kedit
		$paymentplan->save();
		return 1;
	}
	
	public function UpdatePayamentPlan($refno,$prcode,$nofinstall,$installamt,$rsvfee,$downpmnt,$amtpayable,$desc,$bankloan,$adtnlland,$devcharge1,$devcharge2,$infastct,$ocupation){
		$paymentplan = PaymentplanPeer::retrieveByPK($refno);
		$paymentplan->setProjectcode($prcode);
		$paymentplan->setNofinstallments($nofinstall);
		$paymentplan->setInstallamount($installamt);
		$paymentplan->setRsvfee($rsvfee);
		$paymentplan->setBankloan($bankloan);
		$paymentplan->setAdtnlland($adtnlland);
		$paymentplan->setDownpayment($downpmnt);
		$paymentplan->setTotalpayable($amtpayable);
		$paymentplan->setDescription($desc);
		$paymentplan->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
		$paymentplan->setLastmodifieddate(strtotime(date('mm-dd-yyyy')));
		$paymentplan->setLastmodifiedtime(date("h:i:s"));
                $paymentplan->setDevechargers1($devcharge1);//kedit
                $paymentplan->setDevechargers2($devcharge2);//kedit
                $paymentplan->setInfrastructure($infastct);//kedit
                $paymentplan->setOccupation($ocupation);//kedit
		$paymentplan->save();
		return 1;
		
	}
	
	public function DeletePaymentPlan($refno){
		$paymentplan = PaymentplanPeer::retrieveByPK($refno);
		$paymentplan->setDeleted(true);
		$paymentplan->setDeletedby($_SESSION[SYSTEMNAME.'logid']);
		$paymentplan->setDeleteddate(strtotime(date('mm-dd-yyyy')));
		$paymentplan->setDeletedtime(date("h:i:s"));
		$paymentplan->save();
		return 1;
	}
}

?>