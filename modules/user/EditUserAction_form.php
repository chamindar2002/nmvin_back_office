<?php
  
//  if (isset($_POST['submit'])) {
//     $name = $_POST['Name'];
//     $enabled = $_POST['enabled'];
//     if ($enabled){
//     	$enabled= "checked";
//     }else{
//     	$enabled= "";
//     }
//  } else {
  	$user = $_REQUEST['user'];
  	
    $Lname = $user->getLoginname();
    $uid = $user->getUid();
    $Firstname = $user->getFirstname();
    $Familyname = $user->getFamilyname();
    
  	if ($user->getEnabled()){
     	$enabled= "checked";
     }else{
     	$enabled= "";
     }
    
//  }
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
			
			<form method="post" action="?m=user&a=EditUser&id=<?php echo $uid; ?>">
				<input type="hidden" name="uid" value="<?php echo $uid; ?>">
				<table class="contenttable"  border="0">
				 
				   <tr>
<!--				   		<td  align="left"> -->
<!--				   		<img src="themes/exsalarytheme/images/user_account.png"  width="75"/></td>-->
			        	<td  valign="top" colspan='2'><h3><b><font face="calibri"  size='5' color="#002EB8">Change an account</font></b></h3></td>     	
			       </tr>
				   
				   
			       <!-- <tr><td>UserID</td><td><?php echo $uid; ?></td></tr> -->
			       <tr><td width='15%'>Login</td><td><b><?php echo $Lname; ?></b></td></tr>
			       <tr><td>Familiy Name</td><td><input type="text" name="familyname" size="50" value="<?php echo $Familyname; ?>"></td></tr>
			       <tr><td>First Name </td><td><input type="text" name="firstname" size="50" value="<?php echo $Firstname; ?>"></td></tr>
			       <tr><td>New Password</td><td><input type="password" name="newpassword" size="50"></td></tr>
			       <tr><td>New Password (Retype)</td><td><input type="password" name="newpassword2" size="50"></td></tr>      
			       <tr><td>Enabled</td><td><input type="checkbox" name="enabled" <?php echo $enabled; ?>></td></tr>
			       <tr>
			       		<td>Roles</td>
			       		<td>
			       			<?php
			       				foreach($_REQUEST['roles'] as $role) {
			       					$found = false;
			       					
			       					foreach($_REQUEST['rolesOfThisUser'] as $thisUserRole) {
			       						if ($role->getRid() == $thisUserRole->getRid()) {
											$found = true;
											break;       							
			       						}
			       					}
			       					
			       					if ($found) {
			       						echo "<input type=\"checkbox\" name=\"roles[]\" value=\"".$role->getRid()."\" checked>".$role->getName()."</input><br/>";
			       					} else {
			       						echo "<input type=\"checkbox\" name=\"roles[]\" value=\"".$role->getRid()."\">".$role->getName()."</input><br/>";
			       					}
			       				}
			       			?>
			       		</td>
			       	</tr>
			       	<tr><td colspan="2" align="right"><input type="submit" name="submit" class='buttontype1' value="Change Account"></td></tr>
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
