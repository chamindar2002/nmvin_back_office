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
					echo "<option value=\"$projectcode\">$projectname -> $locationcity</option>";
				}			
			}
		}
	echo "</select>";
}

$blockallocation = Array();
$blockallocation[0] = "Available";
$blockallocation[1] = "Reserved";
$blockallocation[2] = "Sold Out";
$blockallocation[3] = "Not For Sale";

function printAllocationStatus($selected,$i){
	global $blockallocation;
	echo "<select name='blockstatus$i' id='blockstatus$i' class='selectboxlarge'>";
	echo "<option value='-1'> </option>";
		foreach($blockallocation As $key=>$value){
			if($selected == $key){
				echo "<option value=\"$key\" selected>$value</option>";
			}
			else{
				echo "<option value=\"$key\">$value</option>";
			}
		}
	echo "</select>";
}




function showAllocationTypeButton($v){
	$image = "";
	switch ($v)
	{
	case 0:
	  $image = "x_green2.gif";
	  break;
	case 1:
	  $image = "x_amber2.gif";
	  break;
	case 2:
	  $image = "x_red2.gif";
	  break;
	case 3: 
		$image = "x_blue2.gif";
		break;
	}
	return $image;
}

?>