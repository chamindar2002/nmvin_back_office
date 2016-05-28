<a style="text-decoration: none;text-align: center"></a>
<script type="text/javascript">
    function remove_bloc(block_id) {

        /*
         * get login user type
         */

        var cuname = $('#login_curent_user').val();
        $.ajax({
            url: 'modules/receipts/UserResRe.php?username=' + cuname + '',
            data: "",
            dataType: 'json',
            success: function(data) {
                if (data == 1) {
                    var s = confirm("Are you sure you want to remove this block");
                    if (s == true) {
                        $.ajax({
                            type: "POST",
                            url: 'modules/projectdetails/UpdateProjectDetails.php',
                            data: {'block_no': block_id},
                            success: function(data) {
                                alert(data);
                                location.reload();
                            },
                            error: function(data) {

                            }

                        });
                    }
                } else {
                    alert("Sorry, you do not have the required permission to perform this operation.");
                }
            }
        });


    }
    var new_block = 0;
    function add_new_block() {
        new_block++;
        $('#tbl_blocklist').append(
                '<tr>'
                + '<td><input type="text" id="txt_block_no_' + new_block + '" name="txt_block_no_' + new_block + '"></td>'
                + '<td><input type="text" id="txt_block_size_' + new_block + '" name="txt_block_size_' + new_block + '"></td>'
                + '<td><input type="text" id="txt_block_price_' + new_block + '" name="txt_block_price_' + new_block + '"></td>'
                + '<td><select name="block_combo_' + new_block + '" id="block_combo_' + new_block + '" class="selectboxlarge"><option value="-1"> </option><option value="0" selected="">Available</option><option value="1">Reserved</option><option value="3">Not For Sale</option></select></td>'
                + '</tr>'
                );
        $('#tvy_rows').val(new_block);
    }

    function save_new_blocks() {

        var cuname = $('#login_curent_user').val();
        $.ajax({
            url: 'modules/receipts/UserResRe.php?username=' + cuname + '',
            data: "",
            dataType: 'json',
            success: function(data) {
                if (data == 1) {
                    var s = confirm("Are you sure you want to update this block");
                    if (s == true) {
                        var select_value = $("#projects option:selected").val();
                        $('#project_code').val(select_value);
                        new_block++;

                        $.ajax({
                            url: 'modules/projectdetails/UpdateProjectDetails.php',
                            type: 'POST',
                            data: $('#new_form_data').serialize(),
                            success: function(data) {
                                alert(data);
                                location.reload();

                            },
                            error: function(data) {

                            }

                        });
                    }
                } else {
                    alert("Sorry, you do not have the required permission to perform this operation.");
                }
            }
        });


    }

</script>

<form method='post'  name='frmupdate' id='frmupdate'>
    <input type="hidden" id="login_curent_user" value="<?php echo $_SESSION[SYSTEMNAME . 'login']; ?>">    
    <!--<input type='hidden' name='updateprojectdetails' id='updateprojectdetails' value='true'>-->

    <table class='datatable' border='0' >
        <tr>
            <td colspan='8'>
                <!--		<a href='index.php?m=projects&a=AddNewProject'>Add</a>&nbsp;-->
                <!--		<a href='#' onClick=''>Edit</a>&nbsp;-->
                <!--		<a href='#' onClick=''>Delete</a>-->

<!--	<input type="button" name='save' id='save' value='Save Updates' class='buttontype1' onclick='validateAndSubmit()'>-->
                <!--	&nbsp;-->
                <!--	<input type="button" name='csl' id='csl' value='Cancel' class='buttontype1' onclick='cancelForm()'>-->
            </td>
        </tr>

        <tr><td><b>Ref#</b></td><td>&nbsp;</td><td><b>Block #</b></td><td><b>Block Size (Perchesess)</b></td><td><b>Block Price (Rs.)</b></td><td><b>Reserve Status</b></td><td><b>Edit Price</b></td><td><b>Remove Block</b></td></tr>
        <?php
        if (isset($_REQUEST['prdetailslist'])) {
            $projectlist = $_REQUEST['prdetailslist'];
            if (sizeof($projectlist) != 0) {

                $i = 0;
                $class = "";
                foreach ($projectlist As $list) {

                    $oddeven = $i % 2;
                    $projectname = "";
                    if ($oddeven == 0) {
                        $class = "roweven";
                    } else {
                        $class = "rowodd";
                    }

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
                    echo "<td align='center'><a style='text-decoration: none;text-align: center' href='#' onclick=\"remove_bloc($refno)\">Remove</a></td>";
                    echo "</tr>";

                    $i++;
                }

                echo "<tr><td colspan='8' align='left'>" .
                "[<img src=\"themes/buttons/" . showAllocationTypeButton(0) . "\" width='7px' height='7px'> Available ] " .
                "[<img src=\"themes/buttons/" . showAllocationTypeButton(1) . "\" width='7px' height='7px'> Reserved ] " .
                "[<img src=\"themes/buttons/" . showAllocationTypeButton(2) . "\" width='7px' height='7px'> Sold ] " .
                "[<img src=\"themes/buttons/" . showAllocationTypeButton(3) . "\" width='7px' height='7px'> Not for sale ] " .
                "</td></tr>";

                echo "<tr>
		    	<td colspan='8'align='right'>
				<input type='button' name='btnnewrow' id='btnnewrow' value='add new block' class='buttontype1' onclick='add_new_block();'>
                                <input type='button' name='save'2 id='save2' value='Save Updates' class='buttontype1' onclick='validateAndSubmit()'>
				
				&nbsp;
				<input type='button' name='csl2' id='csl2' value='Cancel' class='buttontype1' onclick='cancelForm()'>
				</td>
			</tr>";
            } else {
                echo "<tr><td colspan='6' align='center'><h3>No Records Found</h3></td></tr>";
            }
        } else {
            echo "<tr><td colspan='6' align='center'><h3>Select A Location</h3></td></tr>";
        }
        ?>

        <tr>
            <td colspan='8' align='center'>
                <input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i; ?>">

                <form method='post' action='index.php?m=projects&a=EditProject' name='frmeditproject' id='frmeditproject'>
                    <input type='hidden' name="selectedrow" id="selectedrow" value="0">
                </form>

                <form method='post' action='index.php?m=projects&a=DeleteProject' name='frmsdeleteproject' id='frmsdeleteproject'>
                    <input type='hidden' name="selectedrow_2" id="selectedrow_2" value="0">
                </form>

<!--		<input type='text' name='updateprojectdetails' id='updateprojectdetails' value='true'>-->

                <!--		<form method='post' action='?m=customer&a=DeleteCustomer' name='frmdeletecustomer' id='frmdeletecustomer'>-->
                <!--			<input type='hidden' name="selectedrow_3" id="selectedrow_3" value="0">-->
                <!--		</form>-->
            </td>
        </tr>

    </table>
    <form name="new_form_data" id="new_form_data" method="post">  
        <input type="hidden" name="tvy_rows" id="tvy_rows">
        <input type="hidden" name="project_code" id="project_code">

        <table  class='datatable' id="tbl_blocklist" border="1">
            <tr>
                <td><b>Block #</b></td>
                <td><b>Block Size (Perchesess)</b></td>
                <td><b>Block Price (Rs.)</b></td>
                <td><b>Reserve Status</b></td>
            </tr>
            <tfoot>
                <tr>
                    <td>
                        <input type='button' name='btnnewrow' id='btnnewrow' value='save new blocks' class='buttontype1' onclick='save_new_blocks();'>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</form>