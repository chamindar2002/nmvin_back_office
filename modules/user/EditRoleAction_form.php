<?php

$role = $_REQUEST['role'];
$desc = $role->getDescription();
$name = $role->getname();
$rfcode = $role->getRid();

?>
<!--
<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<div id="Dregion">
    <div id="nifty">
       <b class="rtop">
           <b class="r1"></b>
           <b class="r2"></b>
           <b class="r3"></b>
           <b class="r4"></b>
       </b>
        
       <div id="Dregion">       

			<form method="post" action="?m=user&a=EditRole">
				<input type="hidden" name="roleid" value="<?php echo $rfcode; ?>">
				<table class="contenttable">
			       <tr><td>Role Name</td><td><input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
			       <tr><td>Role Description</td><td><input type="text" name="desc" value="<?php echo $desc; ?>"></td></tr>
			        <tr><td valign="top">Action Permissions</td><td valign="top">
			       <?php 
			       $actions  = UserManager::getInstance()->listAllActionPermissions();
			       foreach ($actions as $action) {
			       		$found = false;
			       		foreach ($role->getActionPermissions() as $presentAction) {
			       			if ($presentAction->getId() == $action->getId()) {
			       				$found = true;
			       				break;
			       			}
			       		}
			       		
			       		if ($found) {
			            	echo "<input type=\"checkbox\" name=\"actions[]\" value=\"".$action->getId()."\" checked>".$action->getModule()."/".$action->getAction()."</input><br/>";
			       		} else {
			       			echo "<input type=\"checkbox\" name=\"actions[]\" value=\"".$action->getId()."\" >".$action->getModule()."/".$action->getAction()."</input><br/>";
			       		}
			       }
			       ?>
			       </td></tr>
			       <tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
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
