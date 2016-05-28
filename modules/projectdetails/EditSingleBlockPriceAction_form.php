<!-- <link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->


<script type="text/javascript">
        function showMessageDiv(msg,divid){
            //alert("saved success fully");
            document.write("<div class='"+divid+"' id='"+divid+"'>");
            document.write ("<strong>"+msg+"</strong>");
            document.write("</div>");

            setTimeout("hideMessageDiv('"+divid+"')", 3000);
        }

        function hideMessageDiv(divid){
            document.getElementById(divid).style.display = 'none';
            //window.location = "?m=projectdetails&a=ProjectDetails";
        }
</script>

<?php
if (isset($_REQUEST['blockobj'])) {
    $blockobj = $_REQUEST['blockobj'];
    //var_dump($blockobj);
    $blockref = $blockobj->getRefno();
    $locationcode = $blockobj->getLocationcode();
    $projctcode = $blockobj->getProjectcode();
    $blockNumber = $blockobj->getBlocknumber();
    $blockprice = $blockobj->getBlockprice();

    $projectobj = ProjectDetailsManager::getInstance()->getProjectNameByPK($projctcode);
    if (sizeof($projectobj) == 1) {
        $projectname = $projectobj->getProjectname();
    }

    $locationobj = ProjectDetailsManager::getInstance()->getLocationByPK($locationcode);
    if (sizeof($locationobj) == 1) {
        $locationname = $locationobj->getLocationname();
    }
    ?>

   
    <script type="text/javascript">
        function validateSave(){
            var blockprice = document.getElementById('blockprice');
            if(blockprice.value == ""){
                alert("Error: Block Price Is Blank");
                blockprice.focus();
            }else if(isNaN(blockprice.value)){
                alert("Error: Block Price Is Not Numeric");
                blockprice.focus();
            }else{
                document.frmeditsingleblock.submit();
            }
        }
        
        
    </script>


    

    <form method="POST" action="index.php?m=projectdetails&a=EditSingleBlockPrice" name="frmeditsingleblock" id="frmeditsingleblock">
        <table class='container'>
            <tr><td>
                    <table class='contenttable'>
                        <tr>
                            <td>
                                <h3>Edit Block </h3>
                                <br>

                                <?php echo "<strong>$locationname :: $projectname ::</strong> <b>$blockNumber</b>" ?>

                            </td>

                        </tr>

                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td>Block Price</td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name='blockprice' id='blockprice' class="reqtextboxmedium" value="<?php echo $blockprice; ?>">
                                &nbsp;
                                <input type="button" name="btnsave" id="btnsave" value="Save" class="buttontype1" onClick='validateSave()'>
                                <input type="hidden" name="hdn_blockref" id="hdn_blockref" value="<?php echo $blockref; ?>">
                            </td>
                        </tr>

                    </table>
                </td></tr>
        </table>
    </form>
    <?php
} else {
   if (isset($_REQUEST['msg_success'])) {
        $message = $_REQUEST['msg_success'];
        $divid = "message_success";
        echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
    } else if (isset($_REQUEST['msg_error'])) {
        $message = $_REQUEST['msg_error'];
        $divid = "message_error";
        echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
    }
}
?>

    