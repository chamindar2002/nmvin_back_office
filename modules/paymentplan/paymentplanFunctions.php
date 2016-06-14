<?php
function printProjects($selected){
	$projectlist = ProjectDetailsManager::getInstance()->listProjects();
		//showActionFileOutput(20);
	echo "<select name='projects' id='projects' class='selectboxlarge' onchange='submitsearchForm()'>";
	echo "<option value='0'> </option>";
		if(sizeof($projectlist)>0){
			foreach($projectlist As $list){
				$projectcode = $list->getProjectcode();
				$projectname = $list->getProjectname();
				$locationcity = "";
				$lccode = $list->getLocationcode();
				
				$location = ProjectDetailsManager::getInstance()->getLocationByPK($lccode);
				if(sizeof($location) == 1){
					$locationcity = $location->getLocationcity();
				}
				
				if($projectcode == $selected){
					echo "<option value=\"$projectcode\" selected>$projectname -> $locationcity</option>";
				}
				else{
					echo "<option value=\"$projectcode\">$projectname  -> $locationcity</option>";
				}			
			}
		}
	echo "</select>";
}
?>