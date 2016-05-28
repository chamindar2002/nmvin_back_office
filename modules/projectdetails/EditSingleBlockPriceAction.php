<?php 
 include_once("action/Action.php");
 include_once("ProjectDetailsManager.php");  
 
 class EditSingleBlockPriceAction implements Action{ 
 	 public function execute(){ 
                if(isset($_GET['blockref'])){
                    $blockref = $_GET['blockref'];
                    $block_obj = ProjectDetailsManager::getInstance()->getBlockByPk($blockref);
                    
                    $_REQUEST['blockobj'] = $block_obj;
                }
                else if(isset($_POST['hdn_blockref'])){
                    $blockref = $_POST['hdn_blockref'];
                    $blockprice = $_POST['blockprice'];
                    $updateBlock = ProjectDetailsManager::getInstance()->UpdateSingleBlock($blockref,$blockprice);
                    if($updateBlock == 1){
                        $_REQUEST['msg_success'] = "Saved Successfully.";
                    }else{
                        $_REQUEST['msg_error'] = "Error Occured";
                    }
                }
 	 return "form"; 
	} 
} 
?>