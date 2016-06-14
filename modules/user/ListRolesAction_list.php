<?php

$pageTitle = "All Roles";

$allRoles = $_REQUEST['allRoles'];

?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<a href="?m=user&a=AddNewRole">Add New Role</a>

<table class="datatable2">
    <tr class="headerline"><th>&nbsp;</th><th>Role Name</th><th>Role Description</th><th>Edit</th></tr>

<?php
$row = 1;
foreach($allRoles as $role) {
    echo "<tr><td>".$row."</td><td>".$role->getName()."</td><td>".$role->getDescription()."</td><td><a href=\"?m=user&a=EditRole&id=".$role->getRid()."\">Edit</a></td></tr>";
    $row ++;
}

?>
</table>
