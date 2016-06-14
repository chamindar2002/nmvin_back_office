<?php 
 
class BlockSwapManager{ 
 	 private static $instance;
 	 private function __construct() { 
 
 	 }
 	 public static function getInstance(){
 		 if(BlockSwapManager::$instance == null){
 		  BlockSwapManager::$instance = new BlockSwapManager();
 	 	}
 		  return BlockSwapManager::$instance;  
 	}
 	
	public function listBlocksByProjectcode($prcode){
 		$c = new Criteria();
 		$c->add(ProjectdetailsPeer::DELETED,false);
 		$c->addAnd(ProjectdetailsPeer::PROJECTCODE,$prcode);
 		$list = ProjectdetailsPeer::doSelect($c);
 		return $list;
 	}
 	
 	public function getBlockDetailsByPk($blockref){
 		return ProjectdetailsPeer::retrieveByPK($blockref);
 	}
 	
 	public function getCustomerByPk($custcode){
 		return CustomerdetailsPeer::retrieveByPK($custcode);
 	}
 	
 	public function getSaleRefNumberByBlockRefNumber($blockref){
 		$c = new Criteria();
 		$c->add(SalesPeer::DELETED,false);
 		$c->addAnd(SalesPeer::BLOCKREFNUMBER,$blockref);
 		$sale = SalesPeer::doSelectOne($c);
 		return $sale;
 	}
 	
 	
 	public function AddNewBlockTransfer($blockswapfrom_blockref,$blockswapfrom_ccode,$blockswapfrom_saleref,
									    $blockswapto_blockref,$blockswapto_ccode){
									
		$newtransfer = new Tranferedbloks();
		$newtransfer->setCustomercode($blockswapfrom_ccode);
		$newtransfer->setSalerefno($blockswapfrom_saleref);
		$newtransfer->setBlockrefnumberPrevious($blockswapfrom_blockref);
		$newtransfer->setBlockrefnumberCurrent($blockswapto_blockref);
		$newtransfer->setCurrentblockPreviouscustomer($blockswapto_ccode);
		$newtransfer->setAddedby($_SESSION[SYSTEMNAME.'logid']);
		$newtransfer->setAddeddate(strtotime(date('mm-dd-yyyy')));
		$newtransfer->setAddedtime(date("h:i:s"));
		$newtransfer->save();
		return 1;
	}
 	

	public function UpdateSale($saleref,$blockref){
		$sale = SalesPeer::retrieveByPK($saleref);
		$sale->setBlockrefnumber($blockref);
		$sale->setLastmodifiedby($_SESSION[SYSTEMNAME.'logid']);
		$sale->setAddeddate(strtotime(date('mm-dd-yyyy')));
		$sale->setLastmodifiedtime(date("h:i:s"));
		$sale->save();
		return 1;
	}
 	
}
?>