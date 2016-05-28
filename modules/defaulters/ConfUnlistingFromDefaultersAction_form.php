<?php

if (isset($_REQUEST['sale'])) {
    $sale = $_REQUEST['sale'];

    if (sizeof($sale) > 0) {

        $customercode = $sale->getCustomercode();
        $blockrefno = $sale->getBlockrefnumber();
        $saleref = $sale->getRefno();
        $projctcode = $sale->getProjectcode();
        
        $customer_obj = RefundsManager::getInstance()->getCustomerByPK($customercode);
        if (sizeof($customer_obj) == 1) {
            $customerName =  $customer_obj->getTitle() . " " . $customer_obj->getFirstname() . " " . $customer_obj->getFamilyname()." ";
            $customerName .= $customer_obj->getAddressline1() . " " . $customer_obj->getAddressline2() . " " . $customer_obj->getPostcode() . " " . $customer_obj->getCountry();
            $passporNo = $customer_obj->getPassportno();

        }

        $projectdetails_obj = RefundsManager::getInstance()->getBlockNoByPK($blockrefno);
        if (sizeof($projectdetails_obj) == 1) {
            $blockNumber = $projectdetails_obj->getBlocknumber();
            $block_status = $projectdetails_obj->getReservestatus();
            $old_block_price = $projectdetails_obj->getBlockprice();
        }
        
        ?>


<?php
if($block_status == 0){
?>
<form method="post" name="frmcnfunlisting" id="frmcnfunlisting" action="?m=defaulters&a=ConfUnlistingFromDefaulters">
<table class='container'>
<tr><td>    
<table class='contenttable' border="0">
    <tr>
        <td>
            <strong>Confirm Unlisting Of Following Block From Payment Defaulter's List</strong>
        </td>
    </tr>
    <tr>
        
        <td>
            <table width="45%">
                <tr><td><strong>Block</strong></td><td><?php echo $blockNumber;?></td></tr>
                <tr><td  valign="top"><strong>Customer</strong></td><td><?php echo $customerName; ?><br><?php echo $passporNo;?></td></tr>
                <tr><td colspan="2" align="right">
                        <input type="hidden" name="hdnsaleref" id="hdnsaleref" value="<?php echo $saleref;?>">
                        <input type="button" name="btnsubmint" id="btnsubmint" value="Confirm" class="buttontype1" onclick='submitConfirm()'>
                        &nbsp;
                        <input type="button" name="btnback" id="btnback" value="Back" class="buttontype1" onclick='goBack()'>
                </td></tr>
            </table>
        </td>
    </tr>    
</table>
</td></tr>
</table>
</form>    
<?php
    }else {
        //echo "<strong>This Block Is Not Available Anymore</strong>";
        include 'newblock.php';
}

    }
}
?>


<script type="text/javascript">
    function goBack(){
        window.location = "?m=defaulters&a=UnlistFromDefaulters";
    }
    
    function submitConfirm(){
        document.frmcnfunlisting.submit();
    }


function showMessageDiv(msg,divid){
	//alert("saved success fully");
	document.write("<div class='"+divid+"' id='"+divid+"'>");
	document.write ("<strong>"+msg+"</strong>");
	document.write("</div>");

	setTimeout("hideMessageDiv('"+divid+"')", 3000);
}

function hideMessageDiv(divid){
	document.getElementById(divid).style.display = 'none';
	window.location = "index.php?m=defaulters&a=UnlistFromDefaulters";
}
</script>


<?php
	if(isset($_REQUEST['msg_success'])){
		$message = $_REQUEST['msg_success'];
		$divid = "message_success";
		 echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
	else if(isset($_REQUEST['msg_error'])){
		$message = $_REQUEST['msg_error'];
		$divid = "message_error";
		 echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
?>
