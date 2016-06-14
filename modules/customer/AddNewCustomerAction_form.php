<?php
require_once("customerFunctions.php");
?>


<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
    function cancel() {
        window.location = "index.php?m=customer&a=AddNewCustomer";
    }

    function submitForm() {
        var fname = document.getElementById('firstname');
        var lname = document.getElementById('lasttname');
        var passportno = document.getElementById('passportno');
        var addl1 = document.getElementById('addl1');
        var addl2 = document.getElementById('addl2');
        var landphone = document.getElementById('landline');
        var mobile = document.getElementById('mobile');

        if (fname.value == "" || fname.value.length < 4) {
            alert("Error: First Name Is Invalid");
            fname.focus();
        } else if (lname.value == "" || lname.value.length < 4) {
            alert("Error: Last Name Is Invalid");
            lname.focus();
        } else if (passportno.value == "" || passportno.value.length < 8) {
            alert("Error: Invalid Passport Number");
            passportno.focus();
        } else if (addl1.value == "" || addl1.value.length < 5) {
            alert("Error: Invalid Address Line 1");
            addl1.focus();
        } else if (addl2.value == "" || addl2.value.length < 5) {
            alert("Error: Invalid Address Line 2");
            addl2.focus();
        } else if (!IsNumeric(mobile.value) || mobile.value.length < 10) {
            alert("Error: Invalid Mobile Phone Number");
            mobile.focus();
        } else if (!IsNumeric(landphone.value) || landphone.value.length < 10) {
            alert("Error: Invalid Land Phone Number");
            landphone.focus();
        }
        else {
            document.frmaddcustomer.submit();
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
        window.location = "index.php?m=customer&a=AddNewCustomer";
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
            <table class='contenttable'>
                <tr>
                    <td><h3>New Customer</h3></td>
                </tr>

                <tr>
                    <td>
                        <?php include('newcustomerForm.php'); ?>
                    </td>
                </tr>

            </table>

        </td></tr>
</table>
