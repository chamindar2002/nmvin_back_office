<?php
  if (isset($_POST['loginName'])) {
     $loginName = $_POST['loginName'];
     
  } else {
      
     $loginName = "";
  }
  
  if (isset($_POST['familyName'])) {
     $familyName = $_POST['familyName'];
     
  } else {
      $familyName  = "";
  }
    if (isset($_POST['firstName'])) {
     $firstName = $_POST['firstName'];
     
  } else {
      $firstName  = "";
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
       
		<form method="post" action="?m=user&a=AddNewUser">
			<table class="contenttable" border="0">
					
			        
			        <tr>
<!--			        <td width="100" align="left"> <img src="themes/exsalarytheme/images/user_account.png"  width="75"/></td>-->
			        	<td  valign="top" colspan='2'><h3><b><font face="calibri"  size='5' color="#002EB8">Create new user account</font></b></h3>
			        	
			        	<p><strong> When multiple users are working on a software system,some times data can be accidently changed, 
			                                                                            or may require to avoid sensitive data been exposed to others. With user accounts, A Manager/Administrator can
			                                                                            control data been handled by users and grant access to view and modify data. </strong></p>
			        	</td>     	
			        </tr>
			        
			       <tr><td width="15%"></td></tr>
			       <tr><td>Login</td><td><input type="text" name="loginName" value="<?php echo $loginName; ?>"></td></tr>
			       <tr><td>Family name</td><td><input type="text" name="familyName" value="<?php echo $familyName; ?>"></td></tr>
			       <tr><td>First name</td><td><input type="text" name="firstName" value="<?php echo $firstName; ?>"></td></tr>
			       <tr><td>Password</td><td><input type="password" name="password"></td></tr>
			       <tr><td>Password (Retype)</td><td><input type="password" name="password2"></td></tr>
			       <tr><td>Enabled</td><td><input type="checkbox" name="enabled" CHECKED></td></tr>
			       <tr>
			       		<td>Roles</td>
			       		<td>
			       			<?php
			       				foreach($_REQUEST['roles'] as $role) { 
			       					echo "<input type=\"checkbox\" name=\"roles[]\" value=\"".$role->getRid()."\">".$role->getName()."</input><br/>";
			       				}
			       			?>
			       		</td>
			       	</tr>
			       <tr><td colspan="2" align="right"><input type="submit" name="submit" value="Create Account" class='buttontype1'></td></tr>
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
