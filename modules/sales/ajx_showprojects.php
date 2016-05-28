<?php
//echo 'here';
//die($_SERVER[DOCUMENT_ROOT]);
include_once('../../wsbootstrap.php');
require_once('SalesManager.php');

if(isset($_GET['q'])){
	$q = $_GET['q'];
	$projects = SalesManager::getInstance()->listProjectByLocationCode($q);
	if(sizeof($projects) > 0){
		echo "<select name='projects' id='projects' class='selectbox' onchange='loadBlocks(this.value)'>";
		echo "<option value='0'></option>";
			foreach($projects As $pr){
				$prcode = $pr->getProjectcode();
				$prname = $pr->getProjectname();
				echo "<option value=\"$prcode\">$prname</option>";
			}
		echo "</select>";
	}
	else{
		echo "<select class='selectbox' name='projects' id='projects'><option value='0'></option></select>";
	}
}

?>