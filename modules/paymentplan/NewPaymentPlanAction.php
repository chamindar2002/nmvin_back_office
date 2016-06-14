<?php
include_once("action/Action.php");
include_once("PaymentPlanManager.php");      
require_once("customer/customerFunctions.php");

class NewPaymentPlanAction implements Action {
	
	public function execute(){
		//showActionFileOutput(25);
		if(isset($_POST['confirmsave'])){
			$project = $_POST['projects'];
			$nofinstall = $_POST['nofinstallments'];
			$installamt = $_POST['installamt'];
			$rsvfee = $_POST['rsvfee'];
			$bankloan = $_POST['bankloan'];
			$adtnlland = $_POST['adtnlland'];
			$downpmnt = $_POST['downpamnt'];
			$amtpayable = $_POST['amtpayable'];
			$dscription = $_POST['description'];
                        
                        /*
                         * edit by knet
                         * 
                         */
			$devcharge1 = $_POST['devcharge1'];
			$devcharge2 = $_POST['devcharge2'];
			$infastct = $_POST['infastct'];
			$ocupation = $_POST['ocupation'];
                        
			$pplanExists = PaymentPlanManager::getInstance()->checkifPplanExists($project,$nofinstall,$installamt,$rsvfee,$downpmnt,$bankloan,$adtnlland,$devcharge1,$devcharge2,$infastct,$ocupation);
			if($pplanExists == 0){
				$pplan = PaymentPlanManager::getInstance()->AddNewPaymentPlan($project,$nofinstall,$installamt,$rsvfee,$downpmnt,$amtpayable,$dscription,$bankloan,$adtnlland,$devcharge1,$devcharge2,$infastct,$ocupation);
				if($pplan == 1){
					$_REQUEST['msg_success'] = "New Payment Plan Saved Successfully";
				}else{
					$_REQUEST['msg_error'] = "An Error Occured Saving Data.";
				}
			}else{
				$_REQUEST['msg_error'] = "A Record Already Exists With The Given Data.";
			}	
			
			//echo "$project ? $nofinstall ? $installamt ? $amtpayable ? $dscription";
		}
		return "form";
	}
}

?>