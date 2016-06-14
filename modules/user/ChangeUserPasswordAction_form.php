<?php
  if (isset($_POST['loginName'])) {
     $loginName = $_POST['loginName'];
  } else {
     $loginName = "";
  }
  
  if (isset($_POST['fullName'])) {
     $fullName = $_POST['fullName'];
  } else {
     $fullName = "";
  }
  
  if(isset($_REQUEST['errorMessage'])) {
  	echo "<div class=\"errorMessage\">".$_REQUEST['errorMessage']."</div>";
  }
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<div id="Dregion">
    <div id="nifty">
       <b class="rtop">
           <b class="r1"></b>
           <b class="r2"></b>
           <b class="r3"></b>
           <b class="r4"></b>
       </b>
        
       <div id="Dregion">

			<form method="post" action="?m=user&a=ChangeUserPassword">
			
			<table class="contenttable"  border="0">
			        
			       			        
			        <tr>
<!--			        	<td width="75" align="left"> <img src="themes/exsalarytheme/images/password_change.png" height="131"  width="155"/></td>-->
			        	<td  valign="top" colspan='2'><h3><b><font face="calibri"  size='5' color="#002EB8">Change the password of your account</font></b></h3></td>
			        </tr>
				    
				     
				    <tr><td colspan="2">Type the current password:</td></tr>
				    <tr><td colspan="2"><input type="password" name="password" size="50"></td></tr>
			        <tr><td colspan="2">Type a new password:</td></tr>
			        <tr><td colspan="2"><input type="password" name="newpassword" size="50"></td></tr>
			        <tr><td colspan="2">Type the new password agan to confirm</td></tr>
			        <tr><td colspan="2"><input type="password" name="newpassword2" size="50"></td></tr>
			        <tr><td colspan="2">If your password contains capital letters, be sure to type them the same way every time you logon.</td></tr>
			        
			        <tr><td colspan="2" align="right" ><input type="submit" name="submit" class='buttontype1' value="Change Password"></td></tr>
			</table>
			</form>
       </div>
       
       <b class="rbottom">
           <b class="r4"></b>
           <b class="r3"></b>
           <b class="r3"></b>
           <b class="r1"></b>
       </b>
                   
    </div>
</div>