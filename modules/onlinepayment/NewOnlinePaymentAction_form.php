<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>

<?php
 if(isset($_SESSION['ssn_blockrefno'])){
     $blockref = (int)$_SESSION['ssn_blockrefno'];
     include_once 'online/OnlineCustomerManager.php';
     
?>


<?php 
 if(!isset($_GET['flag'])){
     /*
      * if request is comming from CustomerLoginAction_success.php then do not 
      * display the the message div called by the jqry script below.
      */
?>

<script type="text/javascript">
  
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
<?php
  }
?>


<div class="errormesages" id="validation_messages_div2" style="display: none">&nbsp;</div>


<link href="themes/nimavin_online_theme/css/nimavin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/*Main Menu End*/
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
</head>
<div id="body_warp">
<div id="main_mnu">
    <?php include 'online/includefiles/submenu.php'; ?>
  </div>
  <div id="logo"></div>
  
  <div id='content'>

          <?php
          include_once 'online/includefiles/welcomenote.php';
          include_once 'online/includefiles/blockdetails.php';
          ?>
                  
          <div class="divroundedcorders2">
              <form method='post' action='?m=online&a=BlockReservationConfirm' name='frmconfmpmnt' id='frmconfmpmnt'>
                  <table class='formstable' border='0'>

                      <tr>
                          <td colspan='6'>
                              <?php
                              if($blockstatus == 0){
                              ?>
                              <input class="submitcnfpaymt" type="button" name="confirmpayment" id='buttontype1' value="Confirm Payment" id="buttontype1">
                              <?php
                              }else{
                                  echo "<strong>This block is not available</strong>";
                              }
                              ?>
                          </td>
                      </tr>
                  </table>
              </form>
          </div>
        
          <?php
      }
      ?>
    
      <?php
//include 'includefiles/welcomenote.php';
//include_once 'includefiles/blockdetails.php';
      echo "<p> This is a situation where a Customer Attempts to Buy a house after successfull registration/loged in";
      ?>
  </div>
  
</div>

<div id="shading"></div>










