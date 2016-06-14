<?php

function printLocations($selected){
	$locationlist = ProjectsManager::getInstance()->listLocations();
		//showActionFileOutput(20);
	echo "<select name='locations' id='locations' class='selectboxlarge' onchange='submitsearchForm()'>";
	echo "<option value='0'> </option>";
		if(sizeof($locationlist)>0){
			foreach($locationlist As $list){
				$locationcode = $list->getLocationcode();
				$locationname = $list->getLocationname();
				if($locationcode == $selected){
					echo "<option value=\"$locationcode\" selected>$locationname</option>";
				}
				else{
					echo "<option value=\"$locationcode\">$locationname</option>";
				}			
			}
		}
	echo "</select>";
}
?>