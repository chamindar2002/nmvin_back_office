<?php 
 include_once("action/Action.php");
 require_once("customer/customerFunctions.php");
 include_once("BlockSwapManager.php");
 require_once("sales/SalesManager.php");
 
 class NewBlockSwapAction implements Action{ 
 	 
 	public function execute(){ 
  		//showActionFileOutput(20);
	 		if(isset($_POST['search'])){
				$projectcode = $_POST['projects'];
				$blockList = BlockSwapManager::getInstance()->listBlocksByProjectcode($projectcode);
				$_REQUEST['blocklist'] = $blockList;

			}else if(isset($_POST['confirmsave'])){
				$blockswapfrom_blockref = $_POST['blockref_blockswapfrom'];
				$blockswapfrom_blockstat = $_POST['blockstat_blockswapfrom'];
				$blockswapfrom_ccode = $_POST['ccode_blockswapfrom'];
				$blockswapfrom_saleref = $_POST['saleref_blockswapfrom'];
				
				$blockswapto_blockref = $_POST['blockref_blockswapto'];
				$blockswapto_blockstat = $_POST['blockstat_blockswapto'];
				$blockswapto_ccode = $_POST['ccode_blockswapto'];
				$blockswapto_saleref = $_POST['saleref_blockswapto'];
				
				echo "$blockswapfrom_blockref | $blockswapfrom_blockstat | $blockswapfrom_ccode | $blockswapfrom_saleref <br>";
				echo "$blockswapto_blockref | $blockswapto_blockstat | $blockswapto_ccode | $blockswapto_saleref <br>";
				$ok = 0;	
					if($blockswapto_blockstat == 0){
						$ok = swaptoUnoccupiedBlock($blockswapfrom_blockref,$blockswapfrom_blockstat,$blockswapfrom_ccode,$blockswapfrom_saleref,
											  $blockswapto_blockref,$blockswapto_blockstat,$blockswapto_ccode,$blockswapto_saleref);
					}else if($blockswapto_blockstat == 2){
						$ok = swaptoOccupiedBlocks($blockswapfrom_blockref,$blockswapfrom_blockstat,$blockswapfrom_ccode,$blockswapfrom_saleref,
											  $blockswapto_blockref,$blockswapto_blockstat,$blockswapto_ccode,$blockswapto_saleref);
					}
					
					if($ok == 1){
						$_REQUEST['msg_success'] = "An Occupid Block Tranfered To An Unoccupied Block Successfully.";
					}else if($ok == 2){
						$_REQUEST['msg_success'] = "Blocks Swapped Successfully";
					}
					else{
						$_REQUEST['msg_error'] = "An Error Occured";
					}
			}
  		
 	 return "form"; 
	} 
} 


function swaptoUnoccupiedBlock($blockswapfrom_blockref,$blockswapfrom_blockstat,$blockswapfrom_ccode,$blockswapfrom_saleref,
								$blockswapto_blockref,$blockswapto_blockstat,$blockswapto_ccode,$blockswapto_saleref){

	//echo "Occupied To Unoccupied <br>";
	
	//a change status of corresponding blocks
	
	//$setblocksoldout = SalesManager::getInstance()->setBlockSoldOut($newblockrefno,$customercode);
	//$unsetBlock = SalesManager::getInstance()->UnsetBlockSoldOut($originalblockrefno,$customercode);
	
	$setblocksoldout = SalesManager::getInstance()->setBlockSoldOut($blockswapto_blockref,$blockswapfrom_ccode); //set to sold
	$unsetBlock = SalesManager::getInstance()->UnsetBlockSoldOut($blockswapfrom_blockref,0); // unset to available
	
	$sale = BlockSwapManager::getInstance()->UpdateSale($blockswapfrom_saleref,$blockswapto_blockref);//update sales record to new blocknumber
	
	$newTransfer = BlockSwapManager::getInstance()->AddNewBlockTransfer($blockswapfrom_blockref,$blockswapfrom_ccode,$blockswapfrom_saleref,
									    								$blockswapto_blockref,$blockswapto_ccode);
	
	//echo "$blockswapfrom_blockref | $blockswapfrom_blockstat | $blockswapfrom_ccode | $blockswapfrom_saleref <br>";
	//echo "$blockswapto_blockref | $blockswapto_blockstat | $blockswapto_ccode | $blockswapto_saleref <br>";
	return $newTransfer;
}

function swaptoOccupiedBlocks($blockswapfrom_blockref,$blockswapfrom_blockstat,$blockswapfrom_ccode,$blockswapfrom_saleref,
					 $blockswapto_blockref,$blockswapto_blockstat,$blockswapto_ccode,$blockswapto_saleref){
											  	
	//echo "Occupied To Occupied <br>";
	
	$sale = BlockSwapManager::getInstance()->UpdateSale($blockswapfrom_saleref,$blockswapto_blockref);//(swap block no)update sales record to new blocknumber
	$sale = BlockSwapManager::getInstance()->UpdateSale($blockswapto_saleref,$blockswapfrom_blockref);//(swap block no)update sales record to new blocknumber
	
	$newTransfer = BlockSwapManager::getInstance()->AddNewBlockTransfer($blockswapfrom_blockref,$blockswapfrom_ccode,$blockswapfrom_saleref,
									    								$blockswapto_blockref,$blockswapto_ccode);
	$setblocksoldout = SalesManager::getInstance()->setBlockSoldOut($blockswapto_blockref,$blockswapfrom_ccode); //set to sold

	

	$newTransfer += BlockSwapManager::getInstance()->AddNewBlockTransfer($blockswapto_blockref,$blockswapto_ccode,$blockswapto_saleref,
									    								$blockswapfrom_blockref,$blockswapfrom_ccode);
	$setblocksoldout = SalesManager::getInstance()->setBlockSoldOut($blockswapfrom_blockref,$blockswapto_ccode); //set to sold
									    								
	//echo "$blockswapfrom_blockref | $blockswapfrom_blockstat | $blockswapfrom_ccode | $blockswapfrom_saleref <br>";
	//echo "$blockswapto_blockref | $blockswapto_blockstat | $blockswapto_ccode | $blockswapto_saleref <br>";
	return $newTransfer;							  	
}

?>