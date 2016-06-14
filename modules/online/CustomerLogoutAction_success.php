<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>

<?php 
    $msg = "<strong>You have successfully loged out. Thank you!</strong>";
?>

<script type="text/javascript">
  
$(window).load(function(){
    $('.errormesages').fadeIn(1000);
    $('.errormesages').html("<?php echo $msg;?>");
    //$('div.errormesages').delay(5000).fadeOut();
    $(".errormesages").fadeOut(9000);
});
 </script>
<div class="errormesages" id="validation_messages_div2" style="display: none">&nbsp;</div> 

<?php
//echo "<div class=\"errorMessage\">Login failed.</div>";
  
  include "online/CustomerLoginAction_form.php";
?>


<?php 
//redirect("index.php?m=online&a=CustomerLogin");
 
?>