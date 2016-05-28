<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="themes/nimavin_online_theme/css/nimavin.css" rel="stylesheet" type="text/css" />
<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>
<style type="text/css">
    p{
       color:#3366FF;
       font-weight: normal;
    }
</style>

<script type="text/javascript">


$(document).ready(function(){
  $(".resetbutton").click(function(){
      //var m = "<i><u>Please Check The Following Issues:</u></i><br>";
      
      var email = document.getElementById('email');
      m = emailCheck(email.value);
      if(m != "emailok"){
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
        document.frmresetpwd.submit();
        //alert('OK');
      }
     
  });
});


function emailCheck(emailStr) {
        var checkTLD=1;
        var knownDomsPat=/^(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum)$/;
        var emailPat=/^(.+)@(.+)$/;
        var specialChars="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";
        var validChars="\[^\\s" + specialChars + "\]";
        var quotedUser="(\"[^\"]*\")";
        var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
        var atom=validChars + '+';
        var word="(" + atom + "|" + quotedUser + ")";
        var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
        var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
        var matchArray=emailStr.match(emailPat);
        var emailvalidmessages = "";
        
        if (matchArray==null) {
            return("You must supply a valid email address.");
            //return false;
        }
        var user=matchArray[1];
        var domain=matchArray[2];
        for (i=0; i<user.length; i++) {
            if (user.charCodeAt(i)>127) {
                return ("The supplied email user name contains invalid characters.");
                //return false;
            }
        }
        for (i=0; i<domain.length; i++) {
            if (domain.charCodeAt(i)>127) {
                return ("The supplied email domain contains invalid characters.");
                //return false;
            }
        }
        if (user.match(userPat)==null) {
            return ("The supplied email address contains invalid characters.");
            //return false;
        }
        var IPArray=domain.match(ipDomainPat);
        if (IPArray!=null) {
            for (var i=1;i<=4;i++) {
                if (IPArray[i]>255) {
                    return ("The supplied email IP address is invalid.");
                    //return false;
                }
            }
            //return true;
        }
        var atomPat=new RegExp("^" + atom + "$");
        var domArr=domain.split(".");
        var len=domArr.length;
        for (i=0;i<len;i++) {
            if (domArr[i].search(atomPat)==-1) {
                return ("The domain name does not seem to be valid.");
                //return false;
            }
        }
        if (checkTLD && domArr[domArr.length-1].length!=2 &&
            domArr[domArr.length-1].search(knownDomsPat)==-1) {
            return ("The supplied email address must end in a well known domain or two letter " + "country code.");
            //return false;
        }
        if (len<2) {
            return ("The supplied email address is missing a hostname.");
            //return false;
        }
        return "emailok";
    }
    
    
    function goBack(){
        window.location = 'index.php?m=online&a=CustomerLogin';
    }
</script>

</head>
    
<?php 

//unset($_SESSION['recover_attempt_count']);
//echo $_SESSION['recover_attempt_count'];

if(!isset($_SESSION['recover_attempt_count'])){
    $_SESSION['recover_attempt_count'] = 0;
}

?>
    

<?php
    if(isset($_REQUEST['msg'])){
        $err_msg = $_REQUEST['msg'];
 ?>
 <script type="text/javascript">
  
$(window).load(function(){
    $('.errormesages').fadeIn(1000);
    $('.errormesages').html("<?php echo $err_msg; ?>");
    //$('div.errormesages').delay(5000).fadeOut();
    $(".errormesages").fadeOut(10000);
});
 </script>
<?php
    }
?>
<div id="body_warp">

    
<!--  <div id="logo"></div>-->
  
  
  <div id='content'>
      
      <div class="errormesages" id="validation_messages_div" style="display: none">&nbsp;</div> 

      <div class='divroundedcorders2'>
          <form method="post" action="index.php?m=online&a=ResetPassword" name='frmresetpwd' id='frmresetpwd'>
          <table width ="100%">
              <tr><td><span id='spantitle'>Password Reset</span></td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr><td>Email Address</td></tr>
              <tr><td><input type='text' name="email" id="email" class="reqtextboxlarge"></td></tr>
              <tr><td align="right">
                      <input type='button' name="resetpwd" value="Reset" id="buttontype1" class="resetbutton"></input>
                      &nbsp;
                      <input type='button' name="goback" value="Go Back" id="buttontype1" onClick="goBack()"></input>
              </td></tr>
              <tr>
                  <td>
                      <p>
                          Once you enter your email address and click reset button, your old password will be reset.
                          <br>
                          A new temporary password will be issued, which will be sent to your email address provided.
                          <br>
                          <br>
                              <strong>Note: Please make sure that you change the automatic password once you have logged in to your profile.</strong>
                          
                      </p>
                      <p>
                          Thank you,<br>
                              <i>Team - Nimavin Developers.</i>
                      </p>
                  </td>
              </tr>
          </table>
          </form>
      </div>
      
  </div>
  
</div>

<div id="shading"></div>



</body>
</html>
