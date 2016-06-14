<?php
//require_once("customerFunctions.php");

include('salesFunctions.php');
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
            minDate: -0

        });
    }

    function cancelForm() {
        window.location = "index.php?m=sales&a=AddNewSale";
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
        var location = document.getElementById('location');
        var projects = document.getElementById('projects');
        var projectdetails = document.getElementById('projectdetails');
        var paymentplan = document.getElementById('paymentplan');

        if (location.value == 0) {
            alert("Error: Location Not Selected.");
        } else if (projects.value == 0) {
            alert("Error: Project Not Selected.");
        } else if (projectdetails.value == 0) {
            alert("Error: Block Number Not Selected.");
        } else if (paymentplan.value == 0) {
            alert("Error: Payment Plan Not Selected.");
        } else {
            document.frmsalesdetails.submit();
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

    function showMessageDiv(msg, divid) {
        //alert("saved success fully");
        document.write("<div class='" + divid + "' id='" + divid + "'>");
        document.write("<strong>" + msg + "</strong>");
        document.write("</div>");

        setTimeout("hideMessageDiv('" + divid + "')", 3000);
    }

    function hideMessageDiv(divid) {
        document.getElementById(divid).style.display = 'none';
        window.location = "index.php?m=sales&a=SalesList";
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
                    <td><h3>New Sale</h3></td>
                </tr>

                <tr>
                    <td>
                        <?php include('customersearchForm.php'); ?>
                    </td>
                </tr>

                <tr><td>&nbsp;</td></tr>

                <tr>
                    <td><strong>Customer Details</strong></td>
                </tr>

                <tr>
                    <td>
                        <?php include('customerdetailsForm.php'); ?>
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
