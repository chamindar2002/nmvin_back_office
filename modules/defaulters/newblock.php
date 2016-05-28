<script type="text/javascript">
function SubmitConfirm(){
   
    var avblblocks = document.getElementById('avblblocks');
     
    var old_block_price = document.getElementById('old_block_price');
    
    var new_block_price = document.getElementById('blockprice');
    
    if(avblblocks.value == 0){
         alert('Error: Please select New Block');
    }else if(old_block_price.value != new_block_price){
         alert('Error: Prices of block prices do not match');
    }else{
        var conf = confirm("Confirm Allocating This Block?");
        if(conf == true){
            document.frmcnfnewblock.submit();
        }
    }
    
//    if(avblblocks.value != 0){
//        var conf = confirm("Confirm Allocating This Block?");
//        if(conf == true){
//            document.frmcnfnewblock.submit();
//        }
//    }else{
//        alert('Error: Please select New Block');
//    }
}

function SubmitForRefund(){
    document.frmnewrefund.submit();
}


function loadBlockPrice(blockref){
        //alert(blockref);
        var xmlhttp;
        if (blockref.length==0)
        {
            document.getElementById("div_blockprice").innerHTML="";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("div_blockprice").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","modules/defaulters/ajx_blockDetails.php?q="+blockref,true);
        xmlhttp.send();
}

function goBakToList(){
    window.location = "index.php?m=defaulters&a=UnlistFromDefaulters";
}
</script>

<form method="post" name="frmcnfnewblock" id="frmcnfnewblock" action="?m=defaulters&a=ConfUnlistingFromDefaulters">
<table class='container'>
<tr><td>
	<table class='contenttable' border="0">
            
            <tr>
                <td colspan="3">
                    <strong>Allocate New Block</strong>
                </td>
            </tr>    
	<tr>
            <td width="10%">Customer</td>
            <td colspan='8'><input type="text" value="<?php echo $customerName.' '.$passporNo ; ?>" class="textboxlarge" readonly></td>
        </tr>
        <tr>
            <td>Block</td>
            <td colspan='8'><input type="text" value="<?php echo $blockNumber ; ?>" class="textboxsmall" readonly></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td colspan='8'>
                <input type="hidden" name="hdn_saleref" id="hdn_saleref" value="<?php echo $saleref ; ?>">
                <input type="hidden" name="hdn_old_blockref" id="hdn_old_blockref" value="<?php echo $blockrefno; ?>">
                <input type="hidden" name="hdn_ccode" id="hdn_ccode" value="<?php echo $customercode; ?>">
            </td>
        </tr>
        <tr>
            <td>Available Blocks</td>
            <td><?php echo printblocks(0,$projctcode);?></td>
        </tr>
        
        <tr>
            <td>Block Price</td>
            <td>
                
                <input type="hidden" name="old_block_price" id="old_block_price" value="<?php echo $old_block_price; ?>">
                    
                <div id="div_blockprice">
                    <input type="text" name="blockprice" id="blockprice" class="textboxsmall" value="0.00" readonly>
                </div>
            </td>
        </tr>
        
        <tr>
            <td colspan="2" align="right">
                
                <input type="button" name="btnbacktolist" id="btnbacktolist" onclick="goBakToList()" value="Back" class="buttontype1">
                &nbsp;
                <input type="button" name="btnconf" id="btnconf" onclick="SubmitConfirm()" value="Confirm" class="buttontype1">
                &nbsp;
                <input type="button" name="btnrefund" id="btnrefund" onclick="SubmitForRefund()" value="Refund" class="buttontype1">
            </td>
        </tr>
        </table>
    </td></tr>        
        
</table>
</form>


<form method='post' action='?m=refunds&a=AddNewRefund' name='frmnewrefund' id='frmnewrefund'>
	<input type='hidden' name="selectedrow" id="selectedrow" value="<?php echo $saleref; ?>">
        <input type='hidden' name="refund_defaulter" id="refund_defaulter" value="<?php echo $saleref; ?>">
</form>


<?php
function printblocks($selected,$projctcode){
    
    $unsoldBlocks = DefaultersManager::getInstance()->getBlocksByProject($projctcode);
	echo "<select name=\"avblblocks\" id=\"avblblocks\" class='selectboxlarge' onchange=\"loadBlockPrice(this.value)\">";
	echo "<option value='0'> </option>";
		if(sizeof($unsoldBlocks)>0){
			foreach($unsoldBlocks As $list){
				$blockref = $list->getRefno();
				$blocknumber = $list->getBlocknumber();
				if($blockref == $selected){
					echo "<option value=\"$blockref\" selected>$blocknumber</option>";
				}
				else{
					echo "<option value=\"$blockref\">$blocknumber</option>";
				}			
			}
		}
        //echo "<option value='-1'>Release Block For Refund</option>";
	echo "</select>";
}
?>