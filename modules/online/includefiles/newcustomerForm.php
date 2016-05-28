<?php
require_once("customer/customerFunctions.php");

if(isset($_GET['blockref'])){
    $blockref = $_GET['blockref'];
}else if(isset($_REQUEST['rqst_blockrefno'])){
    $blockref = $_REQUEST['rqst_blockrefno'];
}else{
    $blockref = 0;
}

$_SESSION['nextValidSubmission'] = rand(1000000,9999999);
?>
<!DOCTYPE html>
<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>

<script type="text/javascript">
   

$(document).ready(function(){
  $(".savebutton").click(function(){
      //var m = "<i><u>Please Check The Following Issues:</u></i><br>";
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
        document.frmaddcustomer.submit();
        //alert('OK');
      }
     
  });
});

function validaterequired_fileds(){
    var fname = document.getElementById('firstname');
	var lname = document.getElementById('lasttname');
	var passportno = document.getElementById('passportno');
	var addl1 = document.getElementById('addl1');
	var addl2 = document.getElementById('addl2');
        var postcode = document.getElementById('pcode');
        var emailadd = document.getElementById('email');
        
        var pword1 = document.getElementById('password1');
        var pword2 = document.getElementById('password2');
	
        var landphone = document.getElementById('landline');
	var mobile = document.getElementById('mobile');
        var message = "";
        
        var validemail = emailCheck(emailadd.value);
        
	if(fname.value == "" || fname.value.length< 4){
		message += "First Name Is Invalid";
		fname.focus();
	}else if(lname.value == "" || lname.value.length<4){
		message += "Last Name Is Invalid";
		lname.focus();
	}else if(passportno.value == "" || passportno.value.length<8){
		message += "Invalid Passport Number";
		passportno.focus();
	}else if(addl1.value == "" || addl1.value.length<5 ){
		message += "Invalid Address Line 1";
		addl1.focus();
	}else if(addl2.value == "" || addl2.value.length<5 ){
                message += "Invalid Address Line 2";
		addl2.focus();
        }else if(postcode.value == "" || postcode.value.length<3){
                message += "Invalid Post/Zip Code"
                postcode.focus();    
        }else if(emailadd.value == "" || validemail != "emailok"){
                message += validemail;
                emailadd.focus();
        }else if(pword1.value == "" || pword1.value.length < 4){
                message += "Invalid Password, Requires minimum of 4 characters";
                pword1.focus();
        }else if(pword2.value != pword1.value){
                message += "Passwords do not Match";
                pword2.focus();
        }else if(!IsNumeric(mobile.value) || mobile.value.length<10 ){
		message += "Invalid Mobile Phone Number";
		mobile.focus();
	}else if(!IsNumeric(landphone.value) || landphone.value.length<10 ){
		message += "Invalid Land Phone Number";
		landphone.focus();
	}
	else{
		message += "OK";
	}
       
      return message;
}

function IsNumeric(strString)
//check for valid numeric strings	
    {
        var strValidChars = "0123456789.-";
        var strChar;
        var blnResult = true;
        
        if (strString.length == 0) return false;
        
        //test strString consists of valid characters listed above
        for (i = 0; i < strString.length && blnResult == true; i++)
        {
            strChar = strString.charAt(i);
            if (strValidChars.indexOf(strChar) == -1)
            {
                blnResult = false;
            }
        }
        return blnResult;
}


function checkemailDuplications(eml){
   
  if(eml.length != 0){
    loadingtext();
    
    var xmlhttp;
        if (eml.length==0)
        {
            document.getElementById("div_email").innerHTML="";
            return;
            //eml = "-";
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("div_email").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","modules/online/includefiles/ajx_emailchecker.php?q="+eml,true);
        xmlhttp.send();
  }
        
}


function loadingtext(){
  var txt=document.getElementById("div_email")
  //txt.innerHTML="Searching....";
  txt.innerHTML="Please Wait..<img src='themes/nimawinbackofficetheme/images/loadier.gif'>";
}

function goBack(){
        window.location = 'index.php?m=online&a=CustomerLogin';
}
    
$(document).ready(function(){
  $(".cancelbutton").click(function(){
      //var pathname = window.location.pathname;
      //alert(document.URL);
      window.location = document.URL;
  
 });
});
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

<div class="errormesages" id="validation_messages_div" style="display: none">&nbsp;</div> 

<div class="divroundedcorders2">
    
<form method='post' action='?m=online&a=CustomerRegister' name='frmaddcustomer' id='frmaddcustomer'>
<table class='formstable' border='0'>
    <tr><td colspan='6'><span id='spantitle'>Customer Registration</span></td></tr>
<!--    <tr><td colspan='6'>&nbsp;</td></tr>-->
        
	<tr>
		<td width='10%'>Title</td>
		<td colspan='6' align='left'>
			<?php
				printTitles("MR");
			?>
		</td>
	</tr>
	
	<tr>
		<td width='10%'>First Name</td>
		<td colspan='0' width='40%'>
			<input type="text" class='reqtextboxlarge' name="firstname" id="firstname" value="">
		</td>
		<td>Last Name</td>
		<td width='40%'>
			<input type="text" class='reqtextboxlarge' name="lastname" id="lasttname" value="">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Passport/NIC Number</td>
		<td colspan='6'>
			<input type="text" class='reqtextboxsmall' name="passportno" id="passportno" value="" maxlength="10">
<!--			<br>
			<font size='1px' color='#ccc'>Please make sure the NIC/Passport no. is correct before saving.<br> Once Saved NIC/Passport no. cannot be modified</font>
		</td>-->
		
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Address Line1</td>
		<td colspan='0'>
			<input type="text" class='reqtextboxlarge' name="addl1" id="addl1" value="">
		</td>
		<td>Address Line2</td>
		<td>
			<input type="text" class='reqtextboxlarge' name="addl2" id="addl2" value="">
		</td>
		
	</tr>
	
	<tr>
		<td width='10%'>Post/Zip Code</td>
		<td  colspan='6'>
			<input type="text" class='reqtextboxsmall' name="pcode" id="pcode" value="">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Country</td>
		<td colspan='6'>
		<?php printCountries("LK");?>
		</td>
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Email <br>[User Name]</td>
		<td>
                    <div id="div_email"><input type="text" class='reqtextboxlarge' id="email" name="email"  value="" placeholder="This Email address will be your Username" onblur="checkemailDuplications(this.value)"></div>
		</td>
		<td width='10%'>Skype</td>
		<td colspan='6'>
			<input type="text" class='textboxsmall' name="skype" id="skype" value="">
		</td>
	</tr>
	
        <tr>
            <td width='10%'>Password</td>
            <td colspan='6'>
                <input type="password" name='password1' id='password1' class='reqtextboxsmall' maxlength="8" value="">
            </td>
            
        </tr>
        
        <tr>
            <td>
                Retype Password
            </td>
            <td colspan='6'>
                <input type="password" name='password2' id='password2' class='reqtextboxsmall' maxlength="8" value="">
            </td>
        </tr>
        
	<tr>
		<td width='10%'>Mobile</td>
		<td width ='10%'>
			<input type="text" class='reqtextboxsmall' name="mobile" id="mobile" value="">
		</td>
		<td width='10%'>Land Line</td>
		<td  colspan='6'>
			<input type="text" class='reqtextboxsmall' name="landline" id="landline" value="">
		</td>
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Work Phone</td>
		<td>
			<input type="text" class='textboxsmall' name="wrkphone" id="wrkhone" value="">
		</td>
		<td width='10%'>Fax Number</td>
		<td  colspan='6'>
			<input type="text" class='textboxsmall' name="fax" id="fax" value="">
		</td>
	</tr>
	
	<tr><td colspan='8'>&nbsp;</td></tr>
	
	<tr>
		<td width='10%'>Contact Person in Sri Lanka</td>
		<td colspan = '6'>
			<input type="text" class='textboxlarge' name="slcontactperson" id="slcontactperson" value="">
		</td>
	</tr>
	
	<tr>
		<td width='10%'>Address In SL Line1</td>
		<td>
			<input type="text" class='textboxlarge' name="sladdl1" id="sladdl1" value="">
		</td>
		<td width='10%'>Address In SL Line2</td>
		<td  colspan='6'>
			<input type="text" class='textboxlarge' name="sladdl2" id="sladdl2" value="">
		</td>
		
	</tr>
	
	<tr>
		<td width='10%'>Land Line</td>
		<td>
			<input type="text" class='textboxsmall' name="sllandline" id="sllandline" value="">
		</td>
		<td width='10%'>Mobile</td>
		<td  colspan='6'>
			<input type="text" class='textboxsmall' name="slmobile" id="slmobile" value="">
		</td>
	</tr>
	
	<tr>
		<td colspan='8' align='right'>
			<input type='hidden' value="<?php echo $_SESSION['nextValidSubmission'];?>" name='confirmsave' id='confirmsave'>
                        <input type='hidden' value="<?php echo $blockref; ?>" name='hdn_blockref' id='hdn_blockref'>
<!--			<input type='button' class='buttontype1' name='save' id='save' value='Save' onClick="setTimeout('submitForm()', 1000)">-->
                        <input type='button' class='savebutton' id='buttontype1' name='save' id='save' value='Save'>
<!--				<input type='submit' class='buttontype1' name='save' id='save' value='Save'>-->
			&nbsp
			<input type='button' class='cancelbutton' id='buttontype1' name='cancel' id='cancel' value='Cancel' onClick="setTimeout('cancel()', 1000)">
                        &nbsp
                        <input type='button' name="goback" value="Go Back" id="buttontype1" onClick="goBack()">
			</td>
	</tr>
        
        
        <tr>
            <td colspan="8" align='right'>
                <?php
                require_once('recaptcha-php/recaptchalib.php');
                $publickey = "6LdJy9USAAAAAOxX2yOiS3sJMq3MMwCs6ENLE_2h"; // you got this from the signup page
                echo recaptcha_get_html($publickey);
                ?>
            
            </td>
        </tr>
</table>
</form>
</div>
<p>

<script language="JavaScript" type="text/javascript">
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
</script>