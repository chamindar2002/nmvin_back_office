<?php 
include_once("action/Action.php");
include_once("PaymentPlanManager.php");      
require_once("customer/customerFunctions.php");


 class EditPaymentPlanAction implements Action{ 
 	 public function execute(){ 
  		//showActionFileOutput(25);
  		
  		$refno = $_POST['selectedrow_2'];
                  
  		$pplan = PaymentPlanManager::getInstance()->getPaymentDetailsByPK($refno);
  		$_REQUEST['pplan'] = $pplan;
  		
  		if(isset($_POST['confirmedit'])){
  			$refno = $_POST['confirmedit'];
  			$project = $_POST['projects'];
			$nofinstall = $_POST['nofinstallments'];
			$installamt = $_POST['installamt'];
			$rsvfee = $_POST['rsvfee'];
			$bankloan = $_POST['bankloan'];
			$adtnlland = $_POST['adtnlland'];
			$downpmnt = $_POST['downpamnt'];
			$amtpayable = $_POST['amtpayable'];
			$dscription = $_POST['description'];
			
                        $devcharge1 = $_POST['devcharge1'];
			$devcharge2 = $_POST['devcharge2'];
			$infastct = $_POST['infastct'];
			$ocupation = $_POST['ocupation'];
                        
			$pplanExists = PaymentPlanManager::getInstance()->checkifPplanExists($project,$nofinstall,$installamt,$rsvfee,$downpmnt,$bankloan,$adtnlland,$devcharge1,$devcharge2,$infastct,$ocupation);
			if($pplanExists == 1){
				$pplan = PaymentPlanManager::getInstance()->UpdatePayamentPlan($refno,$project,$nofinstall,$installamt,$rsvfee,$downpmnt,$amtpayable,$dscription,$bankloan,$adtnlland,$devcharge1,$devcharge2,$infastct,$ocupation);
				if($pplan == 1){
					$_REQUEST['msg_success'] = "Changes Saved Successfully";
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