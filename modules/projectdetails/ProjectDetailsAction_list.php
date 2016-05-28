<?php
include_once("ProjectDetailsManager.php");
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="modules/housetransfer/jquery-1.10.2.js"></script>
<script type='text/javascript'>
    function submitsearchForm() {
        document.frmsearch.submit();
    }

    function cancelForm() {
        window.location = "index.php?m=projectdetails&a=ProjectDetails";
    }

    function validateAndSubmit() {
        var nofrecords = Number(document.getElementById('rowcount').value);
        var j = 0;
       
        var all_data = new Array();
        
        for (j = 0; j < nofrecords; j++) {
            var blockno = document.getElementById('blockno' + j);
            var blocksize = document.getElementById('blocksize' + j);
            var blockprice = document.getElementById('blockprice' + j);
            var status = document.getElementById('blockstatus' + j);
            
            if (blockno.value == "") {
                blockno.value = "Not Defined";
            }

            if (blocksize.value == "" || !IsNumeric(blocksize.value)) {
                blocksize.value = "0";
            }
            if (blockprice.value == "" || !IsNumeric(blockprice.value)) {
                blockprice.value = "0.00";
            }
            
            var blockno1 = document.getElementById('blockno' + j).value;
            var blocksize1 = document.getElementById('blocksize' + j).value;
            var blockprice1 = document.getElementById('blockprice' + j).value;
            var status1 = document.getElementById('blockstatus' + j).value;
            var row = document.getElementById('row' + j).value;
            
            all_data += [row,blockno1,blocksize1,blockprice1,status1+"`"];
            
            
        }
        
        $.ajax({
                type: "POST",
                url: 'modules/projectdetails/UpdateProjectDetails.php',
                data: {'key':all_data},
                success: function(data) {
                    alert(data);
                },
                error: function(data) {
                    
                }

            });

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
                    //document.getElementById('selectedrow_3').value = slctdrowRefno;
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
                    //document.getElementById('selectedrow_3').value = slctdrowRefno;
                }
            }
        }

        //rowselected.style.backgroundColor = 'red';
        //alert(rowvalue.id);
    }

//
//function editProject(){
//	var selectedRefno = document.getElementById('selectedrow');
//	//alert(selectedRefno.value);
//	if(selectedRefno.value != 0){
//		document.frmeditproject.submit();
//	}
//	
//}
//
//
//function deleteproject(){
//	var selectedRefno = document.getElementById('selectedrow_2');
//	//alert(selectedRefno.value);
//	if(selectedRefno.value != 0){
//		var s = confirm("Are you sure you want to delete this Project");
//		if(s==true){
//			var r = confirm("This Action Will Delete All The Relavant Fields In The Projects Details File \n Continue Anyway?");
//			if(r==true){
//				document.frmsdeleteproject.submit();
//			}else{
//				//
//				}
//		}else{
//			//	
//			}
//		
//	}
//}

    function showMessageDiv(msg, divid) {
        //alert("saved success fully");
        document.write("<div class='" + divid + "' id='" + divid + "'>");
        document.write("<strong>" + msg + "</strong>");
        document.write("</div>");

        setTimeout("hideMessageDiv('" + divid + "')", 3000);
    }

    function hideMessageDiv(divid) {
        document.getElementById(divid).style.display = 'none';
        // window.location = "index.php?m=projectdetails&a=ProjectDetails";
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
                    <td><h3>Project Details</h3></td>
                </tr>
                <tr>
                    <td>
                        <?php include('searchForm.php'); ?>
                    </td>
                </tr>

            </table>

        </td></tr>

    <tr><td>
            <table class='contenttable'>
                <tr>
                    <td>
                        <?php include('projectdetailsList.php'); ?>
                    </td>
                </tr>

            </table>
        </td></tr>
</table>