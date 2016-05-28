<?php
include_once('receiptFunctions.php');


?>

<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="modules/receipts/jquery-1.10.2.js"></script>
<script type='text/javascript'>
    function changeColorToSelected(r) {
        var rowselected = document.getElementById('tr' + r);
        var rowcount = document.getElementById('rowcount').value;

        for (i = 0; i <= rowcount; i++) {
            var oddeven = i % 2;
            var row = "";
            if (oddeven == 0) {
                if (i != r) {
                    row = document.getElementById('tr' + i);
                    row.style.backgroundColor = '#DEE2E6';

                } else {
                    rowselected.style.backgroundColor = '#CCCCFF'; //selected
                    var slctdrowRefno = document.getElementById('row' + r).value;
                    document.getElementById('selectedrow').value = slctdrowRefno;
                    document.getElementById('selectedrow_2').value = slctdrowRefno;
                    document.getElementById('selectedrow_3').value = slctdrowRefno;
                }
            }
            else {
                if (i != r) {
                    row = document.getElementById('tr' + i);
                    row.style.backgroundColor = '#F7FBFF';
                }
                else {
                    rowselected.style.backgroundColor = '#CCCCFF';//selected
                    var slctdrowRefno = document.getElementById('row' + r).value;
                    document.getElementById('selectedrow').value = slctdrowRefno;
                    document.getElementById('selectedrow_2').value = slctdrowRefno;
                    document.getElementById('selectedrow_3').value = slctdrowRefno;
                }
            }
        }

        //rowselected.style.backgroundColor = 'red';
        //alert(rowvalue.id);
    }


    function loadReceiptDetails() {
        var selectedreceipt = document.getElementById('selectedrow_2');
        if (selectedreceipt.value != 0) {
            document.frmshowdetails.submit();
        }
    }

    function loadVoidReceipts() {
        var selectedreceipt = document.getElementById('selectedrow_3');
        if (selectedreceipt.value != 0) {
            $(function() {
                var cuname = $('#login_curent_user').val();
                $.ajax({
                    url: 'modules/receipts/UserResRe.php?username=' + cuname + '',
                    data: "",
                    dataType: 'json',
                    success: function(data) {
                        if (data == 1) {
                            var s = confirm("Are you sure you want to void this Receipt");
                            if (s == true) {
                                document.frmvoid.submit();
                            }
                        } else {
                            alert("you don't have permision to this action");
                        }
                    }
                });
            });
            // document.frmvoid.submit();

        }
    }

    function loadPrint() {
        var selectedreceipt = document.getElementById('selectedrow');
        if (selectedreceipt.value != 0) {
            document.frmprintreceipt.submit();
        }
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
        window.location = "index.php?m=receipts&a=ReceiptsList";
    }
</script>


<?php

//session variables set @ DeleteCustomerAction_success.php page
if (isset($_SESSION['deletereceipt_success'])) {
    $message = $_SESSION['deletereceipt_success'];
    unset($_SESSION['deletereceipt_success']);
    $divid = "message_success";
    echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
} else if (isset($_SESSION['deletereceipt_failed'])) {
    $message = $_SESSION['deletereceipt_failed'];
    unset($_SESSION['deletereceipt_failed']);
    $divid = "message_error";
    echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
}
?>

<input type="hidden" id="login_curent_user" value="<?php echo $_SESSION[SYSTEMNAME . 'login']; ?>">
<table class='container'>
    <tr><td>

    <tr><td>
            <table class='contenttable'>
                <tr><td><strong>Receipts</strong></td></tr>
                <tr>
                    <td>
                        <?php include('searchForm.php'); ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <?php include('receiptsList.php'); ?>
                    </td>
                </tr>

            </table>
        </td></tr>

</table>
