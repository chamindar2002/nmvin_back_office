<?php
require_once("ReceiptsManager.php");
require_once("receiptFunctions.php");
?>
<link rel="stylesheet" type="text/css" href="calendar/new_calnder/jquery-ui.css">
<script type="text/javascript" src="calendar/new_calnder/jquery-1.10.2.js" defer=""></script>
<script type="text/javascript" src="calendar/new_calnder/jquery-ui.js" defer=""></script>
<style type="text/css">
    #ui-datepicker-div { font-size: 12px; }
    .ui-datepicker-current-day .ui-state-active { background: #009900;color: #000 }
 
</style>


<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>

    function rl_date() {//20-11-2014

        $("#start_dt").datepicker({
            dateFormat: "dd-mm-yy",
            altField: "#order_date",
            altFormat: "dd-mm-yy",
            minDate: -0,
           

        });


    }
    
    function rl_back_date(){//20-11-2014

        $("#receipt_back_dt").datepicker({
            dateFormat: "dd-mm-yy",
            altField: "#order_date",
            altFormat: "dd-mm-yy",
            minDate: -180,
            maxDate: 0,
           

        });


    }

    function cancelForm() {
        // window.location = "index.php?m=sales&a=AddNewSale";
    }

    function searchlastaddedCustomer() {
        var passportno = document.getElementById('lastaddedcustomer');
        //alert(passportno.value);
        if (passportno.value != "") {
            var searchbox = document.getElementById('searchkeywordbox');
            searchbox.value = passportno.value;
            //document.frmsearch.submit();
        }
        //alert(v);
    }

    function submitForm() {

        var totalpaid = document.getElementById('totalpaid');
        var chqcount = document.getElementById('count');
        var salerefno = document.getElementById('salerefno');
        var paidfor = document.getElementById('paidfor');

        if (totalpaid.value == 0) {
            alert("Error: No payments were entered.")
        } else if (!IsNumeric(totalpaid.value)) {
            alert("Error: Invalid Amount.");
        } else if (salerefno.value == 0) {
            alert("Error: Sale Details Not Selected.");
        } else if (paidfor.value == 0) {
            alert("Error: Payment Type Not Selected.");
        }
        else {

            $('#customername2').val($('#customername').val());
            $('#hcusnic').val($('#passportno').val());//$("select[name='cmb_tertory'] option:selected").val()
            $('#sales_token').val($("select[name='salerefno'] option:selected").text());
            $('#paymentype').val($("select[name='paidfor'] option:selected").text());

            document.frmreceiptdetails.submit();
        }

    }



    function IsNumeric(strString)
//check for valid numeric strings	
    {
        var strValidChars = "0123456789.-";
        var strChar;
        var blnResult = true;

        if (strString.length == 0)
            return false;

//test strString consists of valid characters listed above
        for (i = 0; i < strString.length && blnResult == true; i++)
        {
            strChar = strString.charAt(i);
            if (strValidChars.indexOf(strChar) == -1)
            {
                blnResult = false;
            }
        }
        return blnResult;
    }


    function getNextInstallmentDate(flag, saleref) {
        return;
        //this function is rudundant


        var str = flag + ':' + saleref;
        if (flag === "IN") {
            if (str.length == 0)
            {
                document.getElementById("div_date").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function()
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                    document.getElementById("div_date").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "modules/receipts/ajx_nextInstallDate.php?q=" + saleref, true);
            xmlhttp.send();
        }
    }


    function showMessageDiv(msg, divid) {
        //alert("saved success fully");
        document.write("<div class='" + divid + "' id='" + divid + "'>");
        document.write("<strong>" + msg + "</strong>");
        document.write("</div>");

        setTimeout("hideMessageDiv('" + divid + "')", 10000);
    }

    function hideMessageDiv(divid) {
        document.getElementById(divid).style.display = 'none';
        window.location = "?m=receipts&a=AddNewReceipt";
    }
</script>


<?php
if (isset($_REQUEST['msg_success'])) {
    $message = $_REQUEST['msg_success'];
    $divid = "message_success";
     echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
} else if (isset($_REQUEST['msg_error'])) {
    $message = $_REQUEST['msg_error'];
    $divid = "message_error";
     echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
}
?>




<table class='container'>
    <tr><td>
            <table class='contenttable' border = '0'>
                <tr>
                    <td><h3>New Receipt</h3></td>
                </tr>

                <tr>
                    <td>
                        <?php
                        include('customersearchForm.php');
                        echo "<script type='text/javascript'>loadme();</script>";
                        ?>
                    </td>
                </tr>

                <tr><td>&nbsp;</td></tr>

                <tr>
                    <td><strong>Customer Details</strong></td>
                </tr>

                <tr>
                    <td>
                        <?php include('sales/customerdetailsForm.php'); ?>	  		
                    </td>
                </tr>
            </table>

        </td></tr>

    <tr><td>

            <?php
            if (isset($_REQUEST['searchresults'])) {
                echo "<table class='contenttable' border = '0'>";
                echo "<tr><td><strong>Sale Details</strong></td></tr>";
                echo "<tr><td>";

                include('salesdetailsForm.php');

                echo "</td></tr>";
                echo "</table>";
            }
            ?>

        </td></tr>
</table>
