<?php

$pageTitle = "Users";
if (isset($_REQUEST['allUsers'])) {
	$allUsers=$_REQUEST['allUsers'];	
}


$allRoles=$_REQUEST['allRoles'];
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

			<!--  Show the form first -->
			<form method="get" action="">
			    <input type="hidden" name="m" value="user"/>
			    <input type="hidden" name="a" value="Search"/>
				<table border="0" class="contenttable" >
				
					<tr><td></td></tr>
			        
			        <tr><td width="75" align="left" valign="top"> <img src="themes/buttons/user_account.png" height="83"  width="82"/></td>
			        	<td colspan="3" valign="top"><h3><b><font face="calibri"  size='4' color="#002EB8">Search user account</font></b></h3></td>
			        </tr>
				    <tr><td>&nbsp;</td><td colspan="4" valign="top"><a href="?m=user&a=AddNewUser">Add new user</a></td></tr>
				    <tr><td></td><td width="100">Login Name</td><td width="100"><input type="text" name="name"></td><td colspan="2"><input type="submit" name="searchbylogin" value="Search" class='buttontype1'></td></tr>
				    <tr><td></td><td>Role</td><td>  <select name="rlist">
						<?php
							foreach ($allRoles as $lst){
								$name= htmlspecialchars($lst->getName());
								$RID= $lst->getRid();
								echo("<option value=". $RID. ">" . $name . "</option>");
							}
						?>
				        </select> </td><td colspan="2"><input type="submit" name="searchbyrole" value="Search" class='buttontype1'></td></tr>
				</table>
			</form>
			
			<!--  Then data, if any -->
			
			<?php 
				if (isset($allUsers)) {
			?>
			<table class="contenttable" border='1'>
			    <tr class="headerline"><th>&nbsp;</th><th>Login Name</th><th>Family Name</th><th>First Name</th><th>Roles</th><th>Enabled</th><th>Edit</th><th>Delete</th></tr>
			
			<?php
			$row = 1;
			 
			foreach($allUsers as $usr) {
				$deleted = $usr->getDeleted();
				if($deleted){
				   $linkToEdit="<font color='gray'>edit</font>";	
				   $linkToDelete="<font color='red'><b>Deleted</b></font>";	
				}else {
				   $linkToEdit = "<a href=\"?m=user&a=EditUser&id=".$usr->getUid()."&lnm=".$usr->getLoginname()."\">edit</a>"; 					   
				   $linkToDelete = "<a href=\"?m=user&a=DeleteUser&id=".$usr->getUid()."&lnm=".$usr->getLoginname()."\">Delete</a>";				   
				}
				
			    echo "<tr><td>".$row."</td><td>".$usr->getLoginname()."</td><td>".$usr->getFamilyname()."</td><td>".$usr->getFirstname()."</td><td>";
			       
			    $allRoles  = $usr->getRoles();
			    $firstPrinted = false;
			    foreach($allRoles as $rle) {
			    	// User can have more than i roles
			    	if ($firstPrinted) {
			        	echo ", ";
			    	}
			    	
			    	echo $rle->getName();
			    	$firstPrinted = true;
			    }
			    
			    $row ++;
			    echo "</td>";
				if ($usr->getEnabled()) {
					$enabled = "Enabled";
				} else {
					$enabled = "<font color=\"red\">Disabled</font>";
				}
				echo "<td>$enabled</td>";
			    echo "<td>$linkToEdit</td>";
			    echo "<td>$linkToDelete</td></tr>";
			}
			
			?>
			</table>
			
			<?php 
				}
			?>


