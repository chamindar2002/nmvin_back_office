<?php 
 include_once 'online/OnlineCustomerManager.php';
 //include 'online/includefiles/welcomenote.php';
 ?>

<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>

<script type="text/javascript">
   

$(document).ready(function(){
  $(".btnconfirm").click(function(){
      
      m = validaterequired_fileds();
      if(m != "OK"){
         
           $('.errormesages').fadeIn(1000);
           $('.errormesages').html(m);
           $('.errormesages').fadeOut(5000);
          

      }else{
        document.frmchangelogin.submit();
        //alert('OK');
      }
     
  });
});



function validaterequired_fileds(){
    
    var pwd_old = document.getElementById('password_old');
    var pwd_new = document.getElementById('password_new');
    var pwd_cnf = document.getElementById('password_cnf');
    var message = "";
    
    if(pwd_old.value == ""){
        message = "Current Password Not Entered.";
	pwd_old.focus();
    }else if(pwd_new.value == "" || pwd_new.value.length < 4){
        message = "Pease Enter a Valid Pasword Minimum of 4 and Maximum of 8 Characters.";
        pwd_new.focus();
    }else if(pwd_cnf.value != pwd_new.value){
        message = "New Password and the Password Confirmation do not Match.";
        pwd_cnf.focus();
    }else{
        message = "OK";
    }
    return message;
}
</script>







<link href="themes/nimavin_online_theme/css/nimavin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/*Main Menu End*/
#body_warp {
	position:absolute;
	left:-500px;
	top:0px;
	width:1000px;
	height:600px;
	z-index:10;
	margin-left: 50%;
}
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

#content{
   
    margin-top: 120px;
    margin-left: 12px;
    z-index:-1;
}
</style>


</head>

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
<div id="body_warp">
<div id="main_mnu">
    <?php include 'online/includefiles/submenu.php'; ?>
  </div>
  <div id="logo"></div>
  
  <div id='content'>

      <?php include 'online/includefiles/welcomenote.php'; ?>
      
            <div class="errormesages" id="validation_messages_div" style="display: none">&nbsp;</div>
            <div class="errormesages2" id="validation_messages_div2" style="display: none">&nbsp;</div>
        <div class="divroundedcorders5">
            <form method='post' action='?m=onlinecustomer&a=ChangeLoginInfo' name='frmchangelogin' id='frmchangelogin'>
            <table class='formstable' border='0'>
                <tr><td colspan='4'><h3>Change My Password</h3></td></tr>

        <!--           <tr><td>Login:</td></tr>
                <tr><td><input type="text" size="15"  class='textboxmedium' name="loginName" value="<?php echo $loginName; ?>"></td></tr>-->
                <tr><td>Password:</td></tr>
                <tr><td><input type="password" size="15" class='reqtextboxsmall' maxlength="8" id="password_old" name="password_old"></td></tr>
                <tr>
                <tr><td>New Password:</td></tr>
                <tr><td><input type="password" size="15" class='reqtextboxsmall' maxlength="8" id="password_new" name="password_new"></td></tr>
                <tr><td>Confirm New Password:</td></tr>
                <tr><td><input type="password" size="15" class='reqtextboxsmall' maxlength="8" id="password_cnf" name="password_cnf"></td></tr>
                <tr> 
                    <td>
                        
                        <input type="button" name="btnchangelogin" value="Confirm" id='buttontype1' class="btnconfirm">
                        <input type="hidden" name="hdn_blockref" value="<?php echo $blockref; ?>">
                        <input type="hidden" name="hdn_confirmpwdchange" id="hdn_confirmpwdchange" value="true">    
                    </td>
                </tr>

            </table>
            </form>
        </div>
      
      
  </div>
  
</div>

<div id="shading"></div>












