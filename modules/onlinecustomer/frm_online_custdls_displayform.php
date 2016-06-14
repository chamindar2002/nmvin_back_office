<?php
    //echo "<h3>Unconfirmed Online Customer</h3>";
?>




<link href="themes/nimavin_online_theme/css/nimavin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>
<script type="text/javascript" src="themes/nimavin_online_theme/js/custdetailsvaildation.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $(".savebutton").click(function(){
      
      //var m = "<i><u>Please Check The Following Issues:</u></i><br>";
      /*
       *All validation functions defined in:
       *themes/nimavin_online_theme/js/custdetailsvaildation.js
       **/
      m = validaterequired_fileds();
      if(m != "OK"){
         //alert(m);
         //document.write(m);
           //$('.errormesages').show();
           $('.errormesages').fadeIn(1000);
           $('.errormesages').html(m);
           //$('div.errormesages').delay(5000).fadeOut();
           $(".errormesages").fadeOut(5000);
           //$(".errormesages").slideUp(1000);
         //$('.errormesages').delay(5000).fadeOut();
         //$('.errormesages').append(m);

      }else{
        document.frmolcustomerdls.submit();
        //alert('OK');
      }
     
  });
});


</script>




<style type="text/css">
/*Main Menu End*/
/*#body_warp {
	position:absolute;
	left:-500px;
	top:0px;
	width:1000px;
	height:600px;
	z-index:10;
	margin-left: 50%;
}*/
.txt_area{
	width:250px;
	height::32px;
	}
.txt_bold {
	font-weight: bold;
}
.txtfield {
	font-family:sans-serif;
	font-size:12px;
}
</style>

<?php
    if(isset($_REQUEST['msg_error'])){
        $err_msg = $_REQUEST['msg_error'];
 ?>
 <script type="text/javascript">
  
$(window).load(function(){
    $('.errormesages').fadeIn(1000);
    $('.errormesages').html("<?php echo $err_msg; ?>");
    //$('div.errormesages').delay(5000).fadeOut();
    $(".errormesages").fadeOut(5000);
});
 </script>
<?php
    }
?>
 
<?php
    if(isset($_REQUEST['msg_success'])){
        $err_msg = $_REQUEST['msg_success'];
 ?>
 <script type="text/javascript">
  
$(window).load(function(){
    $('.errormesages2').fadeIn(1000);
    $('.errormesages2').html("<?php echo $err_msg; ?>");
    //$('div.errormesages').delay(5000).fadeOut();
    $(".errormesages2").fadeOut(5000);
});
 </script>
<?php
    }
?> 
 

</head>
<div id="body_warp">
<div id="main_mnu">
    <?php include 'online/includefiles/submenu.php'; ?>
  </div>
  <div id="logo"></div>
  
  <div id='content'>
      <?php include_once 'online/includefiles/welcomenote.php';?>
      <div class="errormesages" id="validation_messages_div" style="display: none">&nbsp;</div> 
      <div class="errormesages2" id="validation_messages_div2" style="display: none">&nbsp;</div> 
      <div class="divroundedcorders5">
        <form method='post' action='?m=onlinecustomer&a=OnlineCustomerDetails' name='frmolcustomerdls' id='frmolcustomerdls'>
            
            <table class='formstable' border='0'>
                <tr><td colspan='4'><h3>My Details :: Status - Pending Confirmation</h3></td></tr>
                <tr>
                    <td width='10%'>Title</td>
                    <td colspan='0' align='left'>
                        <?php
                        printTitles($title);
                        ?>
                    </td>
                </tr>
                
                <tr>
                    <td width='10%'>First Name</td>
                    <td colspan='0' width='40%'>
                        <input type="text" class='reqtextboxmedium' name="firstname" id="firstname" value="<?php echo $fristname; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td width='10%'>Last Name</td>
                    <td colspan='0' width='40%'>
                        <input type="text" class='reqtextboxmedium' name="lastname" id="lasttname" value="<?php echo $familyname; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td width='10%'>Passport/NIC Number</td>
                    <td colspan='0'>
                        <input type="text" class='reqtextboxsmall' name="passportno" id="passportno" value="<?php echo $passportno; ?>" readonly="readonly">
                    </td>

                </tr>
                
                <tr><td colspan='0'>&nbsp;</td></tr>
                
                <tr>
                    <td width='10%'>Address Line1</td>
                    <td colspan='0'>
                        <input type="text" class='reqtextboxlarge' name="addl1" id="addl1" value="<?php echo $addl1; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Address Line2</td>
                    <td colspan='0'>
                        <input type="text" class='reqtextboxlarge' name="addl2" id="addl2" value="<?php echo $addl2; ?>">
                    </td>

                </tr>
                                
                <tr>
                    <td width='10%'>Post/Zip Code</td>
                    <td  colspan='0'>
                        <input type="text" class='textboxsmall' name="pcode" id="pcode" value="<?php echo $postcode; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td width='10%'>Country</td>
                    <td colspan='6'>
                        <?php printCountries($country); ?>
                    </td>
                </tr>
                
                <tr><td colspan='0'>&nbsp;</td></tr>

                <tr>
                    <td width='10%'>Email</td>
                    <td>
                        <input type="text" class='reqtextboxlarge' name="email" id="email" value="<?php echo $email; ?>" readonly="readonly">
                    </td>
                </tr>
                
                <tr>
                    <td width='10%'>Skype</td>
                    <td  colspan='0'>
                        <input type="text" class='textboxsmall' name="skype" id="skype" value="<?php echo $skype; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td width='10%'>Mobile</td>
                    <td>
                        <input type="text" class='reqtextboxsmall' name="mobile" id="mobile" value="<?php echo $mobile; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td width='10%'>Land Line</td>
                    <td>
                        <input type="text" class='reqtextboxsmall' name="landline" id="landline" value="<?php echo $lanline; ?>">
                    </td>
                </tr>
             
               <tr>
                   <td width='10%'>Work Phone</td>
                   <td>
                       <input type="text" class='textboxsmall' name="wrkphone" id="wrkhone" value="<?php echo $workphone; ?>">
                   </td>
               </tr>

               <tr>
                   <td width='10%'>Fax Number</td>
                   <td>
                       <input type="text" class='textboxsmall' name="fax" id="fax" value="<?php echo $fax; ?>">
                   </td>
               </tr>
               
                  
               <tr><td colspan='0'>&nbsp;</td></tr>

               
               <tr>
                   <td width='10%'>Contact Person in Sri Lanka</td>
                   <td colspan = '0'>
                       <input type="text" class='textboxlarge' name="slcontactperson" id="slcontactperson" value="<?php echo $slcontact; ?>">
                   </td>
               </tr>
               
               <tr>
                   <td width='10%'>Address In SL Line1</td>
                   <td>
                       <input type="text" class='textboxmedium' name="sladdl1" id="sladdl1" value="<?php echo $sladd1; ?>">
                   </td>

               </tr>
               
               <tr>
                   <td width='10%'>Address In SL Line2</td>
                   <td>
                       <input type="text" class='textboxmedium' name="sladdl2" id="sladdl2" value="<?php echo $sladd2; ?>">
                   </td>

               </tr>

               <tr>
                   <td width='10%'>Land Line</td>
                   <td>
                       <input type="text" class='textboxsmall' name="sllandline" id="sllandline" value="<?php echo $sllandline; ?>">
                   </td>
               </tr>
               
               <tr>
                   <td width='10%'>Mobile</td>
                   <td>
                       <input type="text" class='textboxsmall' name="slmobile" id="slmobile" value="<?php echo $slmobile; ?>">
                   </td>
               </tr>

               <tr>
                   <td colspan='8' align='right'>
                       <input type='hidden' value='true' name='confirmedit_unconfrmdcustomer' id='confirmedit_unconfrmdcustomer'>
                       <input type='hidden' value="<?php echo $customercode; ?>" name='customercode' id='customercode'>
                       <input type='button' class='savebutton' name='save' id='buttontype1' value='Save'>
<!--                       <input type='submit' class='buttontype1' name='save' id='save' value='Save'>-->
                       &nbsp;&nbsp;
                       <input type='button' class='buttontype1' name='cancel' id='cancel' value='Cancel' onClick="setTimeout('cancel()', 1000)">
                   </td>
               </tr>
            </table>
     
        </form>
    </div>


  </div>
  <p>
</div>

<div id="shading"></div>


















