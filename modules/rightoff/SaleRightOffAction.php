<?php 
 include_once("action/Action.php");
 include_once("SalerightOffManager.php");
 require_once("customer/customerFunctions.php");
  
 class SaleRightOffAction implements Action{ 
 	 public function execute(){ 
 	 	//showActionFileOutput(25);
 	 	$receiptscount = 0;
  			if(isset($_POST['selectedrow_6'])){
  				$saleref_no = $_POST['selectedrow_6'];
  				$receiptscount = SalerightOffManager::getInstance()->countReceiptsBySalesRef($saleref_no);
  				$sales_obj = SalerightOffManager::getInstance()->getSalesByPk($saleref_no);
  				$receiptsSum = SalerightOffManager::getInstance()->getReceiptsSUMbySaleRefno($saleref_no);
  				
  				$_REQUEST['receiptsSum'] = $receiptsSum;
  				$_REQUEST['sales_obj'] = $sales_obj;
  			}else if(isset($_POST['confirmsave'])){
  				$salesrefno = $_POST['hid_salesref'];
  				$totalpayable = $_POST['hid_totalpayable'];
  				$totalpaid = $_POST['hid_totalpaid'];
  				$rightoffamt = $_POST['rightoff_amount'];
  				$remarks = htmlspecialchars($_POST['rmks']) ;
  				$remarks .= "\n \n *****Rightoff By User Id:".$_SESSION[SYSTEMNAME.'logid'].", On: ".date('d-M-Y').", @ ".date("h:i:s")."*****";
  				
  				$newtotalpayable = $totalpayable - $rightoffamt; 
  				
  				$rightoff = SalerightOffManager::getInstance()->setNewSaleRightOff($salesrefno,$newtotalpayable,$rightoffamt,$remarks,true);
  				if($rightoff == 1){
  					$_REQUEST['msg_success'] = "Sale Rightoff was successfull.";
  				}
  				else{
  					$_REQUEST['msg_error'] = "Error occured, Action was unsuccessfull.";
  				}
  				
  				//echo "$salesrefno ? $totalpayable ? $totalpaid ? $rightoffamt ? $remarks";
  				
  				
  			}else if(isset($_POST['confirmreverse'])){
  				$salesrefno = $_POST['hid_salesref'];
  				$totalpayable = $_POST['hid_totalpayable'];
  				$totalpaid = $_POST['hid_totalpaid'];
  				$rightoffamt = $_POST['hid_rightoffamt'];
  				$remarks = htmlspecialchars($_POST['rmks']);
  				$remarks_previous = $_POST['hid_prev_rightoffrmks'];
  				$remarks .= "\n\n *****Reversed By By User Id:".$_SESSION[SYSTEMNAME.'logid'].", On: ".date('d-M-Y').", @ ".date("h:i:s")."*****";
  				$remarks .= "\n\n *****$remarks_previous*****";
  				
  				$newtotalpayable = $totalpayable + $rightoffamt; 
  				
  				$rightoff = SalerightOffManager::getInstance()->setNewSaleRightOff($salesrefno,$newtotalpayable,$rightoffamt,$remarks,false);
  				if($rightoff == 1){
  					$_REQUEST['msg_success'] = "Sale Rightoff was Reversed successfully.";
  				}
  				else{
  					$_REQUEST['msg_error'] = "Error occured,Reverse Action was unsuccessfull.";
  				}
  			}
  			
  			
  			
 	 		$_REQUEST['receiptcount'] = $receiptscount;
 	 return "form"; 
	} 
} 
?>