<meta http-equiv="refresh" content="3;url=index.php?m=onlinecustomer&a=UpcomingProjects">

<?php 
include_once 'online/OnlineCustomerManager.php';
?>
<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
<link href="themes/nimavin_online_theme/css/nimavin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>

<script type="text/javascript">


</script>

<?php
    if(isset($_REQUEST['msg'])){
        $err_msg = $_REQUEST['msg'];
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
 
<div id="body_warp">
<div id="main_mnu">
    <?php include 'online/includefiles/submenu.php'; ?>
</div>
  <div id="logo"></div>
  
  <div id='content'>
      <?php include 'online/includefiles/welcomenote.php';?>
      <div class="errormesages" id="validation_messages_div" style="display: none">&nbsp;</div>
      <div class="errormesages2" id="validation_messages_div2" style="display: none">&nbsp;</div>
  </div>
  
</div>

<div id="shading"></div>