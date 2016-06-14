<?php
  if (isset($_POST['name'])) {
     $name = $_POST['name'];
     $description = $_POST['desciption'];
  } else {
     $name = "";
     $description = "";
  }
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

			<form method="post" action="?m=user&a=AddNewRole">
			<table>
			       <tr><td>Name</td><td><input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
			       <tr><td>Description</td><td><input type="text" name="description" value="<?php echo $description; ?>"></td></tr>
			       <tr><td valign="top">Action Permissions</td><td valign="top">
			       <?php 
			       $actions  = UserManager::getInstance()->listAllActionPermissions();
			       foreach ($actions as $action) {
			           echo "<input type=\"checkbox\" name=\"actions[]\"  value=\"".$action->getId()."\">".$action->getModule()."/".$action->getAction()."</input><br/>";
			       }
			       ?>
			       </td></tr>
			       
			       
			       <tr><td colspan="2"><input type="submit" name="submit" value="Add"></td></tr>
			</table>
			</form>
