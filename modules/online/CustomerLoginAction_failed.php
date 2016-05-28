<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>

<?php 
    $msg = "<strong>Login Failed</strong>";
?>

<script type="text/javascript">
  
$(window).load(function(){
    $('.errormesages').fadeIn(1000);
    $('.errormesages').html("<?php echo $msg;?>");
    //$('div.errormesages').delay(5000).fadeOut();
    $(".errormesages").fadeOut(9000);
});
 </script>
<div class="errormesages" id="validation_messages_div" style="display: none">&nbsp;</div> 

<?php
//echo "<div class=\"errorMessage\">Login failed.</div>";
  
  include "online/CustomerLoginAction_form.php";
?>