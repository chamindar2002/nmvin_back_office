<?php
include_once("ProjectDetailsManager.php");
include_once 'projectdetailFunctions.php';
?>

<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<script type="text/javascript">
       function cancelForm(){
	window.location = "index.php?m=projectdetails&a=ProjectDetails";
}

function validateAndSubmit(){
	var nofrecords = Number(document.getElementById('rowcount').value);
	var j = 0;
	for(j=0;j<nofrecords;j++){
			var blockno = document.getElementById('blockno'+j);
			var blocksize = document.getElementById('blocksize'+j);
			var blockprice = document.getElementById('blockprice'+j);
//			var status = document.getElementById('blockstatus'+j);
			
			if(blockno.value == ""){
				blockno.value = "Not Defined";
			}
			
			if(blocksize.value == "" || !IsNumeric(blocksize.value)){
				blocksize.value = "0";
			}
			if(blockprice.value == "" || !IsNumeric(blockprice.value)){
				blockprice.value = "0.00";
			}
//			if(status.value == -1){
//				alert('not selected');
//				document.status.focus();
//				//return;
//			}
//			alert(j);
					
	}
	document.frmupdate.submit();
}


function IsNumeric(strString)
//check for valid numeric strings	
{
	var strValidChars = "0123456789.-";
	var strChar;
	var blnResult = true;
	
	if (strString.length == 0) return false;
	
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

function changeColorToSelected(r){
	
	var rowselected = document.getElementById('tr'+r);
	var rowcount = document.getElementById('rowcount').value;

	for(i=0;i<=rowcount;i++){
		var oddeven = i%2;
		var row = "";
		if(oddeven == 0){	
			if(i != r){
				row = document.getElementById('tr'+i);
				row.style.backgroundColor = '#DEE2E6';
					
			}else{
				rowselected.style.backgroundColor = '#CCCCFF'; //selected
				var slctdrowRefno = document.getElementById('row'+r).value;
				document.getElementById('selectedrow').value = slctdrowRefno;
				document.getElementById('selectedrow_2').value = slctdrowRefno;
				//document.getElementById('selectedrow_3').value = slctdrowRefno;
			}
		}
		else{
			if(i != r){
				row = document.getElementById('tr'+i);
				row.style.backgroundColor = '#F7FBFF';
			}
			else{
				rowselected.style.backgroundColor = '#CCCCFF';//selected
				var slctdrowRefno = document.getElementById('row'+r).value;
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

function showMessageDiv(msg,divid){
	//alert("saved success fully");
	document.write("<div class='"+divid+"' id='"+divid+"'>");
	document.write ("<strong>"+msg+"</strong>");
	document.write("</div>");

	setTimeout("hideMessageDiv('"+divid+"')", 3000);
}

function hideMessageDiv(divid){
	document.getElementById(divid).style.display = 'none';
	window.location = "index.php?m=projectdetails&a=ProjectDetails";
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
 


<form method='post' action='?m=projectdetails&a=ProjectDetails' name='frmupdate' id='frmupdate'>
<table class='container'>
    <tr><td>
            <table class='contenttable'>
                <tr>
	  	<td><h3>Project Details</h3></td>
                </tr>
                <tr>
                    <td>
                        <table class='datatable' border='0'>
                            <tr>
                                <td colspan='8'>

                                </td>
                            </tr>

                            <tr><td><b>Ref#</b></td><td>&nbsp;</td><td><b>Block #</b></td><td><b>Block Size (Perchesess)</b></td><td><b>Block Price (Rs.)</b></td><td><b>Reserve Status</b></td></tr>

                            <?php
                            if (isset($_REQUEST['cluster'])) {

                                $cluster = unserialize($_REQUEST['cluster']);

                                $blockRefnos = explode(',', $cluster);
                                $i = 0;
                                $class = "";

                                $oddeven = $i % 2;
                                $projectname = "";
                                if ($oddeven == 0) {
                                    $class = "roweven";
                                } else {
                                    $class = "rowodd";
                                }

                                foreach ($blockRefnos as $key => $value) {
                                    $list = ProjectDetailsManager::getInstance()->getBlockByPk($value);
                                    if (sizeof($list) == 1) {

                                        $refno = $list->getRefno();
                                        $prcode = $list->getProjectcode();
                                        $projectobj = ProjectDetailsManager::getInstance()->getProjectNameByPK($prcode);
                                        if (isset($projectobj)) {
                                            $projectname = $projectobj->getProjectname();
                                        }
                                        $blockno = $list->getBlocknumber();
                                        $blocksize = $list->getBlocksize();
                                        $blockprice = $list->getBlockprice();

                                        $rsvstatus = $list->getReservestatus();
                                        $rsvdate = new DateTime($list->getReservedate());
                                        $rsvdate_2 = $rsvdate->format("d-M-Y");

                                        $img = showAllocationTypeButton($rsvstatus);

                                        //-----------------added on 23/05/2012 to display customer name on blocks soldout-----------------------------
                                        $customer_code = "";
                                        $customerName = "";
                                        $customer_code = $list->getCustomercode();


                                        $customer = ProjectDetailsManager::getInstance()->getCustomerByPK($customer_code);
                                        if (isset($customer)) {
                                            $customerName = $customer->getTitle() . " " . $customer->getFirstname() . " " . $customer->getFamilyname() . "\n";
                                            $customerName .= $customer->getAddressline1() . " " . $customer->getAddressline2() . " " . $customer->getPostcode() . " " . $customer->getCountry();
                                        }
                                        //------------------------------------------------------------------------------------------

                                        echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
                                        echo "<td width='5%'>" .
                                        "<input type='hidden' name=\"row$i\" id=\"row$i\" value=" . $refno . ">";
                                        echo "#$refno</td>";
                                        echo "<td width='5%' align='center'><img src=\"themes/buttons/$img\" width='7px' height='7px'></td>";
                                        echo "<td><input type='text' name='blockno$i' id='blockno$i' class='gridtextboxlarge' value='$blockno'></td>";
                                        echo "<td><input type='text' name='blocksize$i' id='blocksize$i' class='gridtextboxlarge' value=" . $blocksize . "></td>";
                                        //--------------------modifid on 18/05/2012 set to read only-------------
                                        if ($rsvstatus != 2) {
                                            echo "<td><input type='text' name='blockprice$i' id='blockprice$i' class='gridtextboxlarge' value=" . $blockprice . "></td>";
                                        } else {
                                            echo "<td><input type='text' name='blockprice$i' id='blockprice$i' class='gridtextboxlarge' value=" . $blockprice . " readonly='readonly'></td>";
                                        }
                                        //-----------------------------------------------------------------------
                                        echo "<td>";
                                        if ($rsvstatus != 2) {
                                            unset($blockallocation[2]); // remove 'sold out' option.
                                            printAllocationStatus($rsvstatus, $i);
                                        } else {
                                            //echo "<a href='#' id='nostyles_anchor' title=\"Sold On: $rsvdate_2\">Sold Out </a><input type='hidden' name='blockstatus$i' id='blockstatus$i' value=\"$rsvstatus\">";
                                            echo "<a href='#' id='nostyles_anchor' title=\"$customerName [$customer_code]\">Sold Out </a><input type='hidden' name='blockstatus$i' id='blockstatus$i' value=\"$rsvstatus\">";
                                        }
                                        echo "</td>";
                                        //echo "<td>$projectname</td>";
                                        //echo "<td>x</td>";


                                        echo "<td>";
                                        if ($rsvstatus != 2) {
                                            echo "<a href='?m=projectdetails&a=EditSingleBlockPrice&blockref=$refno'>Edit Price</a>";
                                        } else {
                                            echo ".";
                                        }
                                        echo "</td>";

                                        echo "</tr>";

                                        $i++;
                                    }
                                    
                                    
                                }
                            }
                            echo "<tr><td colspan='8' align='left'>" .
                            "[<img src=\"themes/buttons/" . showAllocationTypeButton(0) . "\" width='7px' height='7px'> Available ] " .
                            "[<img src=\"themes/buttons/" . showAllocationTypeButton(1) . "\" width='7px' height='7px'> Reserved ] " .
                            "[<img src=\"themes/buttons/" . showAllocationTypeButton(2) . "\" width='7px' height='7px'> Sold ] " .
                            "[<img src=\"themes/buttons/" . showAllocationTypeButton(3) . "\" width='7px' height='7px'> Not for sale ] " .
                            "</td></tr>";
                            echo "<tr>
                                    <td colspan='8'align='right'>
                                    <input type='button' name='save'2 id='save2' value='Save Updates' class='buttontype1' onclick='validateAndSubmit()'>
                                    &nbsp;
                                    <input type='button' name='csl2' id='csl2' value='Cancel' class='buttontype1' onclick='cancelForm()'>
                                    </td>
                                 </tr>";
                            ?>
                           
                            <input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i;?>">
                            <input type='hidden' name='updateprojectdetails' id='updateprojectdetails' value='true'>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</form>