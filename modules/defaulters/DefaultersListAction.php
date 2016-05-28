<?php 
 include_once("action/Action.php");
 include_once("DefaultersManager.php");
 require_once("refunds/RefundsManager.php");
 
 class DefaultersListAction implements Action{ 
 	 public function execute(){
             
             $projectlist = RefundsManager::getInstance()->ListAllProjects();
             $_REQUEST['projectlist'] = $projectlist;
             
             if(isset($_POST['project'])){
  			$projectcode = $_POST['project'];
  			$salesbyprc = RefundsManager::getInstance()->listSalesByProjectCode($projectcode);
  			$_REQUEST['salesbyprc'] = $salesbyprc;
  			
            }else if(isset($_POST['rowcount'])){
                
                $salesrefs = $_POST['chk_saleref'];
//                $projectcode = $_POST['projectcode'];
//                $salesbyprc = RefundsManager::getInstance()->listSalesByProjectCode($projectcode);
//                
//                foreach($salesbyprc As $sbprc){
//                    
//			$salerefno = $sbprc->getRefno();
//                        echo $salerefno."<br>";
//                }
                
               $i = 0; 
               if(sizeof($salesrefs)> 0){  
                   
                   //echo sizeof($salesrefs).'<br>';
                   
                    foreach($salesrefs As $srf){
                        
                       $result = DefaultersManager::getInstance()->markAsDefaulted($srf);
                       
                       $customer_code = DefaultersManager::getInstance()->getCustomerCode($srf);
                       $block_refno = DefaultersManager::getInstance()->getBlockRefNumber($srf);
                       $releaseblock = DefaultersManager::getInstance()->releaseBlock($block_refno,0);
                       //$newDefaultersEntry = DefaultersManager::getInstance()->addNewDefaultersEntry($srf,$customer_code,$block_refno);
                       $newDefaultersEntry = DefaultersManager::getInstance()->addNewDefaultersEntry($srf,$customer_code,$block_refno,0,1);
                       
                        
                        
                      $i++;
                      //echo "$i <br>";
                      
                        
                    }
                    
                    if(sizeof($salesrefs) == $i){
                        $_REQUEST['msg_success'] = "Selected Sales Were Saved As Defaulters Successfully.";
                    }else{
                        $_REQUEST['msg_error'] = "An Error Occurred. All Selected Sales Were Not Saved Successfully.";
                    }
               }else{
                 $_REQUEST['msg_error'] = "You did not select any sales.";
               }
                
                
                //print_r($salesrefs);
                //exit;
                
            }
  
 	 return "list"; 
	} 
} 
?>