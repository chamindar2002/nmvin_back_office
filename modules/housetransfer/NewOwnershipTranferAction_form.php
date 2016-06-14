<?php
include 'owntransferFunctions.php';
if (isset($_REQUEST['blocklist'])) {
    $blockList = $_REQUEST['blocklist'];
}
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="modules/housetransfer/jquery-1.10.2.js"></script>
<script type='text/javascript'>
    function submitsearchForm() {
        document.frmsearch.submit();
    }



    function loadData_swap_from(v) {
        $(document).ready(function() {
            $("#owner_data").find("tr:gt(0)").remove();
        });
        var xmlhttp;
        if (v.length == 0)
        {
            document.getElementById("divswapfrom").innerHTML = "";
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
                document.getElementById("divswapfrom").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "modules/housetransfer/ajx_loadswap_fromData.php?q=" + v, true);
        xmlhttp.send();

        $(function() {
            var blockno = $("#projectsswap_from option:selected").text();
            $.ajax({
                url: 'modules/housetransfer/GetOwners.php?blockno=' + blockno + '',
                data: "",
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(key, line) {
                        var parts = line.split('-');
                        $('#owner_data').append('<tr>'
                                + '<td>' + parts[0] + '</td>'
                                + '<td>' + parts[1] + '</td>'
                                + '<td>' + parts[2] + '</td>'
                                + '</tr>');
                    });

                }

            });

        });
        //alert(v);
    }

    function customerLookup(v) {
        var sfrom = document.getElementById('projectsswap_from'); // drop down list swap from
        var blokstat = document.getElementById('blockstat_blockswapfrom');

        var xmlhttp;
        if (sfrom.value == 0) {
            alert("Error: House To Be Transfered Not Selected.");
            cancelForm();
        } else if (blokstat.value != 2) {
            alert("Error: Cannot Transfer An Unsold Block.");
            document.getElementById('btnsave').disabled = true;
        } else {
            if (v.length == 0)
            {
                document.getElementById("divswapto").innerHTML = "";
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
                    document.getElementById("divswapto").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "modules/housetransfer/ajx_loadcustomer.php?q=" + v, true);
            xmlhttp.send();
            sfrom.disabled = true;
            document.getElementById('btnsave').disabled = false;
        }
    }

    function cancelForm() {
        window.location = "?m=housetransfer&a=NewOwnershipTranfer";
    }

    function validateForm() {
//    var blockprice_from = document.getElementById('blockprice_blockswapfrom');
//    var blockprice_to = document.getElementById('blockprice_blockswapto');
//
//    if(Number(blockprice_from.value) != Number(blockprice_to.value)){
//        alert("Error: Cannot Swap Blocks Of Different Prices.");
//        //document.getElementById('btnsave').disabled = true;
//    }else{
//        var s = confirm("Are you sure you want to swap this block?");
//        if(s == true){
//            document.frmnewblockswap.submit();
//        }else{
//
//        }
//        //document.frmnewblockswap.submit();
//    }

        var transferfromcustomer_code = document.getElementById('ccode_blockswapfrom');
        var tranfertocustomer_code = document.getElementById('ccode_tranferto');

        if (transferfromcustomer_code.value == tranfertocustomer_code.value) {
            alert("Cannot Transfer House To Same Owner.");
        } else {
            var s = confirm("Arfge you sure you want to transfer this block?");
            if (s == true) {

                $(function() {
                    var ccode = $('#ccode_blockswapfrom').val();
                    var blockno = $("#projectsswap_from option:selected").text();

                    $.ajax({
                        url: 'modules/housetransfer/NewOwner.php?code=' + ccode + '&blockno=' + blockno + '',
                        data: "",
                        dataType: 'json',
                        success: function(data) {
                            document.frmnewblockswap.submit();
                        }

                    });

                });
            } else {

            }
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
        window.location = "index.php?m=housetransfer&a=NewOwnershipTranfer";
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

    <tr><td>
            <table class='contenttable'>
                <tr>
                    <td><h3>House Ownership Transfer</h3></td>
                </tr>
                <tr>
                    <td>
                        <?php include('searchForm.php'); ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <?php include('transferForm.php'); ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div id="owners" style="color: #24478F;">
                            <table border="1" cellspacing="0" cellpadding="0" id="owner_data" >
                                <th style="width: 150px;">Owner History </th>  
                                <th style="width: 220px;">Owner Name</th>  
                                <th style="width: 550px;">Owner Address</th>  
                            </table>                            
                        </div>

                    </td>
                </tr>

            </table>
        </td></tr>

</table>