<?php

$pageTitle = "All Users";

$allUsers = $_REQUEST['allUsers'];
 $allRoles=$_REQUEST['allRoles'];
?>
<form method="post" action="?m=user&a=Search">
<table>
       <tr><td>Login Name</td><td><input type="text" name="name"></td> 
        <td colspan="2"><input type="submit" name="searchbylogin" value="Search"></td></tr>
    <tr><td>Role</td><td>  <select name="rlist">
		<?php
 			foreach ($allRoles as $lst){
 				$name= $lst->getName();
 				$RID= $lst->getRid();
 			 echo("<option value=". $RID. ">" . $name . "</option>");
			//	// echo("<option value=". $name. ">" . $name . "</option>");
 				 }
		?>
</select> </td><td colspan="2"><input type="submit" name="searchbyrole" value="Search"></td></tr>
</table>


<a href="?m=user&a=AddNewUser">Add New User</a>
<table class="datatable">
    <tr class="headerline"><th>&nbsp;</th><th>Login Name</th><th>First Name</th><th>Family Name</th><th>Edit</th><th>Delete</th></tr>

<?php
$row = 1;
foreach($allUsers as $usr) {
    echo "<tr><td>".$row."</td><td>".$usr->getLoginname()."</td><td>".$usr->getFirstname()."</td><td>".$usr->getFamilyname()."</td><td><a href=\"?m=user&a=EditUser&id=".$usr->getUid()."\">edit</a></td><td><a href=\"?m=user&a=DeleteUser&id=".$usr->getUid()."\">Delete</a></td></tr>";
    $row ++;
}

?>
</table>
</form>