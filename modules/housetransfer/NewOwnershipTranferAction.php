<?php

include_once("action/Action.php");
include_once 'TransferManager.php';
require_once("sales/SalesManager.php");

class NewOwnershipTranferAction implements Action {

    public function execute() {

        if (isset($_POST['search'])) {
            $projectcode = $_POST['projects'];
            $blockList = TransferManager::getInstance()->listBlocksByProjectcode($projectcode);
            $_REQUEST['blocklist'] = $blockList;
        } else if (isset($_POST['confirmsave'])) {
            $blockswapfrom_blockref = $_POST['blockref_blockswapfrom'];
            $blockswapfrom_blockstat = $_POST['blockstat_blockswapfrom'];
            $blockswapfrom_ccode = $_POST['ccode_blockswapfrom'];
            $blockswapfrom_saleref = $_POST['saleref_blockswapfrom'];

           
            $blocknewowner_ccode = $_POST['ccode_tranferto'];
            

//            echo "$blockswapfrom_blockref | $blockswapfrom_blockstat | $blockswapfrom_ccode | $blockswapfrom_saleref <br>";
//            echo "$blocknewowner_ccode <br>";
//            exit;
            
            $newhtf = TransferManager::getInstance()->newHouseTransfer($blocknewowner_ccode,$blockswapfrom_ccode,$blockswapfrom_saleref,$blockswapfrom_blockref);
            $updatesale = TransferManager::getInstance()->UpdateSale($blockswapfrom_saleref,$blocknewowner_ccode);
            $setblocksoldout = SalesManager::getInstance()->setBlockSoldOut($blockswapfrom_blockref,$blocknewowner_ccode);
//            $ok = 0;
//            if ($blockswapto_blockstat == 0) {
//                $ok = swaptoUnoccupiedBlock($blockswapfrom_blockref, $blockswapfrom_blockstat, $blockswapfrom_ccode, $blockswapfrom_saleref, $blockswapto_blockref, $blockswapto_blockstat, $blockswapto_ccode, $blockswapto_saleref);
//            } else if ($blockswapto_blockstat == 2) {
//                $ok = swaptoOccupiedBlocks($blockswapfrom_blockref, $blockswapfrom_blockstat, $blockswapfrom_ccode, $blockswapfrom_saleref, $blockswapto_blockref, $blockswapto_blockstat, $blockswapto_ccode, $blockswapto_saleref);
//            }
//
//            if ($ok == 1) {
//                $_REQUEST['msg_success'] = "An Occupid Block Tranfered To An Unoccupied Block Successfully.";
//            } else if ($ok == 2) {
//                $_REQUEST['msg_success'] = "Blocks Swapped Successfully";
//            } else {
//                $_REQUEST['msg_error'] = "An Error Occured";
//            }
            if(($newhtf+$updatesale) == 2){
                $_REQUEST['msg_success'] = "House tranfer was saved successfull.";
                return "form";
            }else{
                $_REQUEST['msg_error'] = "An Error Occured. Transfer was not successfull.";
            }
        }


        return "form";
    }

}

?>