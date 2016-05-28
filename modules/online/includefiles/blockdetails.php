<div class="divroundedcorders2">
    
    <?php
    $blockstatus = 0;
    
    if($blockref){
        $blockobj = OnlineCustomerManager::getInstance()->getBlockRefByPk($blockref);
        if (sizeof($blockobj)) {
            $blockrefnum = $blockobj->getRefno();
            $blocknumber = $blockobj->getBlocknumber();
            $locationcod = $blockobj->getLocationcode();
            $projectscod = $blockobj->getProjectcode();
            $blocksprice = $blockobj->getBlockprice();
            $blocksize = $blockobj->getBlocksize();
            $blockstatus = $blockobj->getReservestatus();

            $locationobj = OnlineCustomerManager::getInstance()->getLocationByPk($locationcod);
            if (sizeof($locationobj) == 1) {
                $locatinname = $locationobj->getLocationname();
            }
            $projectobj = OnlineCustomerManager::getInstance()->getProjectByPk($projectscod);
            if (sizeof($projectobj) == 1) {
                $projectname = $projectobj->getProjectname();
            }
        }
    }
    ?>
    <table class="datatable" border='0'>
        <tr>
            <td><?php echo $blocknumber;?></td>
            <td><?php echo "$locatinname :: $projectname";?></td>
            <td>LKR&nbsp;<?php echo number_format($blocksprice,2);?></td>
            <td>Perchases&nbsp;<?php echo $blocksize;?></td>
            <td>Status <?php echo $blockstatus;?></td>
        </tr>
        
        <tr>
            <td colspan='6'>
                <input type='hidden' name='hdn_blockdetails_blockrefno' id='hdn_blockdetails_blockrefno' value="<?php echo $blockref;?>"
            </td>
        </tr>
    </table>
</div>