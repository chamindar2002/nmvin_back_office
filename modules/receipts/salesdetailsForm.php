<?php
if (isset($_REQUEST['salesresults'])) {
    $saleresult = $_REQUEST['salesresults'];

    $sdate = date("d-m-Y");
}

//$paidfor = Array("RC" => "Reservation Charge",
//				 "FP" => "Full Payment",
//				 "PP" => "Part Payment",
//				 "IN" => "Installment"	
//				)


$_SESSION['nextValidSubmission'] = rand(1000000, 9999999);
//echo $_SESSION['nextValidSubmission'];
?>


<link rel="stylesheet" type="text/css" href="calendar/datepicker.css" /> 
<script type="text/javascript" src="calendar/datepicker.js"></script> 

<form method='post' action='?m=receipts&a=AddNewReceipt' name='frmreceiptdetails' id='frmreceiptdetails'>
    <table class='formstable' border='0'>
        <tr>
            <td>Receipt Date</td>
        </tr>

        <tr>
            <td width="150">
                <div id="div_date">
                
                <input style="width: 205px;" id="start_dt" name="start_dt"  size='11' onmouseover="rl_date();" value="<?php echo $sdate;?>"readonly="readonly"  />
                <input type="button" value="..." id="date_overide_popup" name="date_overide_popup" disabled>
                </div>
            </td> 
        </tr>

        <tr><td>Receipt Book Number</td></tr>
        <tr><td>
                <input type="text" name="rcptbookno" id="rcptbookno" maxlength="5" class="textboxsmall">
            </td></tr>


        <tr>
            <td>Sale Details</td>
        </tr>
        <tr>
            <td>
                <select name='salerefno' id='salerefno' class='selectboxlarge'>
                    <option value='0'></option>
                    <?php
                    foreach ($saleresult As $s) {
                        $refno = $s->getRefno();

                        $location_obj = ReceiptsManager::getInstance()->getLocationByPK($s->getLocationcode());
                        if (isset($location_obj)) {
                            $locationName = $location_obj->getLocationname();
                            //echo $locationName;
                        }

                        $project_obj = ReceiptsManager::getInstance()->getProjectByPK($s->getProjectcode());
                        if (isset($project_obj)) {
                            $projectName = $project_obj->getProjectname();
                        }

                        $prjectdls_obj = ReceiptsManager::getInstance()->getBlockNumberByPK($s->getBlockrefnumber());
                        if (isset($prjectdls_obj)) {
                            $blockNo = $prjectdls_obj->getBlocknumber();
                        }

                        $sale_rightoffstatus = $s->getSalerightoffStatus();

                        $sale_desc = "$locationName --> $projectName --> $blockNo";

                        if ($sale_rightoffstatus == true) {//ensure no receipts will be entered if the sale has bee written off
                            echo "<option value='0'>$sale_desc ***This sale has been written off***.</option>";
                        } else {
                            echo "<option value=\"$refno\">$sale_desc</option>";
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr><td>Payment Type</td></tr>
        <tr><td>
                <select name='paidfor' id='paidfor' class='selectbox' onchange="getNextInstallmentDate(this.value,<?php echo $refno; ?>)">
                    <option value='0'></option>
                    <?php
                    foreach ($paidfor As $key => $value) {
                        echo "<option value=\"$key\">$value</option>";
                    }
                    ?>
                </select>
            </td></tr>

        <tr><td>

                <!--	*************************************tabs*******************************************-->
                <?php include('paymentDetails.php'); ?>
                <!--	***********************************end tabs*****************************************-->

            </td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;Total Amount Paid &nbsp;</td></tr>
        <tr>
            <td>
                &nbsp;
                <input type="text"  name='totalpaid' id='totalpaid' value='0.00' class='reqtextboxsmall' readonly="readonly">
                &nbsp;
                <input type="button" name='save' id='save' value='Confirm/Save' onclick='submitForm()' class='buttontype1'>
                <input type="hidden" name="submissionId" id="submissionId" value="<?php echo $_SESSION['nextValidSubmission']; ?>">
            </td>
        </tr>


    </table>
    <input type="hidden" id="customername2" name="customername2" value="N/A">
    <input type="hidden" id="hcusnic" name="hcusnic" value="N/A"/>
    <input type="hidden" id="sales_token" name="sales_token" value="N/A" />
    <input type="hidden" id="paymentype" name="paymentype" value="N/A"/>
</form>

<style>
       
#lightbox-shadow {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #000;
	filter: alpha(opacity=75);
	-moz-opacity: 0.75;
	-khtml-opacity: 0.75;
	opacity: 0.75;
	z-index: 1000;
	display: none;
}

#lightbox {
	position: absolute;
	top: 0;
	left: 50%;
        top: 30%;
	width: 500px;
	margin-left: -250px;
	background: #fff;
	z-index: 1001;
	display: none;
        border: 3px solid #ccc;
}
</style>

<div id="lightbox-shadow"></div>
<div id="lightbox">
    <p>
    <table>
        <tr>
            <td>Override Receipt Date</td>
            <td width="150">
                <div id="div_back_date">
                
                <input style="width: 205px;" id="receipt_back_dt" name="receipt_back_dt"  size='11' onmouseover="rl_back_date();" value="<?php echo $sdate;?>"readonly="readonly" >
                </div>
            </td> 
            <td>
                <input type="hidden" name="curr_date" id="curr_date" value="<?php echo $sdate; ?>">
                <input type="button" name="btn_select_back_date" id="btn_select_back_date" value="Cancel">
            </td>
        </tr>
    </table>
</p>
</div>

<script type="text/javascript">
$( "#btn_select_back_date" ).click(function() {
  $("#lightbox-shadow").hide();
  //$("#lightbox").hide();
  $("#lightbox").animate({width:'toggle'},350);
});

$(document).ready(function(){
    $("#receipt_back_dt").change(function(){
        $("#start_dt").val($("#receipt_back_dt").val());
        $("#lightbox-shadow").hide();
        //$("#lightbox").hide();
        $("#lightbox").animate({width:'toggle'},350);
    });
});
$("#date_overide_popup").click(function(){
  $("#lightbox-shadow").show();
  //$("#lightbox").show();
  

    $("#lightbox").animate({width:'toggle'},350);


    
});

$(function() {
    $("#casdepositbank").change(function() {
        var bank_selected =  $('option:selected', this).text();
        if(bank_selected == 'Asia Asset'){
             $("#date_overide_popup").removeAttr('disabled');
        }else{
            $("#start_dt").val($("#curr_date").val());
            $("#date_overide_popup").prop("disabled", true);
        }
    });
});

$(function() {
    $(".chq_bank_selctd").change(function() {
        var bank_selected =  $('option:selected', this).text();
        if(bank_selected == 'Asia Asset'){
             $("#date_overide_popup").removeAttr('disabled');
        }else{
            $("#start_dt").val($("#curr_date").val());
            $("#date_overide_popup").prop("disabled", true);
        }
    });
});
</script>