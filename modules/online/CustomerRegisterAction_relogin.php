<meta http-equiv="refresh" content="3;url=index.php?m=online&a=CustomerLogin">

<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>

<script type="text/javascript">

$(window).load(function(){
    $('.errormesages').fadeIn(1000);
    $('.errormesages').html("Your Registration Has Been Successfull. &nbsp;&nbsp; Please Wait You Will Be Redirected to Login Page");
    //$('div.errormesages').delay(5000).fadeOut();
    $(".errormesages").fadeOut(5000);
});


</script>
<?php
//sleep(10);
//header("Location: index.php?m=online&a=CustomerLogin");
?>

<div class="errormesages" id="validation_messages_div2" style="display: none">&nbsp;</div>