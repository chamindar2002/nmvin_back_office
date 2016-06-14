<?php
//redirect("index.php?m=onlinepayment&a=NewOnlinePayment");
if(isset($_REQUEST['rqst_blockrefno'])){
    $br = $_REQUEST['rqst_blockrefno'];
    //redirect("index.php?m=onlinepayment&a=NewOnlinePayment&blockref=$br");
    redirect("index.php?m=online&a=OnlineGuestHome&blockref=$br");
}
?>


<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>-->

<?php
    
?>

<!--<script type="text/javascript">
  
$(window).load(function(){
    $('.errormesages').fadeIn(1000);
    $('.errormesages').html("Your Registration Has Been Successfull.");
    //$('div.errormesages').delay(5000).fadeOut();
    $(".errormesages").fadeOut(5000);
});

$(document).ready(function(){
  $(".submitcnfpaymt").click(function(){
       document.frmconfmpmnt.submit();
  
 });
});

</script>


<div class="errormesages" id="validation_messages_div2" style="display: none">&nbsp;</div>

<div class="divroundedcorders2">
    <form method='post' action='?m=online&a=BlockReservationConfirm' name='frmconfmpmnt' id='frmconfmpmnt'>
        <table class='formstable' border='0'>
            
            <tr>
                <td colspan='6'>
                    <input class="submitcnfpaymt" type="button" name="confirmpayment" id='buttontype1' value="Confirm Payment" id="buttontype1">
                </td>
            </tr>
        </table>
    </form>
</div>-->

<?php 
//include 'includefiles/welcomenote.php';
//include_once 'includefiles/blockdetails.php';
echo "<p><strike> This is a situation where a Fresh Customer Attempts to Buy a house after successfull registration</strike>";
?>