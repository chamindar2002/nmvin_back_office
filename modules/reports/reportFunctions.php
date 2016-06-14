<?php
require_once 'reports/report_sql.php';

$overduemonthslist = array(
					"5" => "Three Days",
					"1" => "One Month",
					"2" => "Two Months",
					"3" => "Three Months",
					"4" => "Four Months",
					);
					
function printMonths($selected){
	global $overduemonthslist;
	
	echo "<select name='overduemonths' id='overduemonths' class='selectbox'>";
	echo "<option value='0'></option>";
	foreach($overduemonthslist As $key=>$value){
		
		if($key == $selected){
			echo "<option value=\"$key\" selected>$value</option>";
		}else{
			echo "<option value=\"$key\">$value</option>";
		}
		
	}
	echo "</select>";
}


function printProjects($nameext){
	if(isset($_REQUEST['projectsList'])){
		$projectsList = $_REQUEST['projectsList'];
                
		echo "<select name=\"projects$nameext\" id=\"projects$nameext\" class='selectbox'>";
		echo "<option value='0'selected></option>";
			if(sizeof($projectsList) > 0){
                            
				foreach($projectsList As $prl){
					$prcode = $prl->getProjectcode();
					$prname = $prl->getProjectname();
					$locationcode = $prl->getLocationcode();
                                        $report_sql = new report_sql();
                                        //echo $prcode.'-'.$prname.$locationcode."</br>";
                                        $_location_name = $report_sql->get_location_name($locationcode);
					echo "<option value=\"$prcode\">$prname  -  $_location_name</option>";
				}
			}
		echo "</select>";	
	}
}

function printProjects2(){
	if(isset($_REQUEST['projectsList'])){
		$projectsList = $_REQUEST['projectsList'];
		echo "<select name='projects2' id='projects2' class='selectbox'>";
		echo "<option value='0'selected></option>";
			if(sizeof($projectsList) > 0){
				foreach($projectsList As $prl){
					$prcode = $prl->getProjectcode();
					$prname = $prl->getProjectname();
					echo "<option value=\"$prcode\">$prname</option>";
				}
			}
		echo "</select>";	
	}
}


function printProjects3(){
	if(isset($_REQUEST['projectsList'])){
		$projectsList = $_REQUEST['projectsList'];
		echo "<select name='projects_withAll' id='projects_withAll' class='selectbox'>";
		echo "<option value='0'selected>All</option>";
			if(sizeof($projectsList) > 0){
				foreach($projectsList As $prl){
					$prcode = $prl->getProjectcode();
					$prname = $prl->getProjectname();
					echo "<option value=\"$prcode\">$prname</option>";
				}
			}
		echo "</select>";	
	}
}

function printCashiers(){
    $cashOperatorUids = array('8'=>'Tharidu','9'=>'Ruwan');
    
    echo "<select name='CashierListing' id='CashierListing' class='selectbox'>";
		echo "<option value='0'selected>All</option>";
			if(sizeof($cashOperatorUids) > 0){
				foreach($cashOperatorUids As $key=>$value){
					
					echo "<option value=\"$key\">$value</option>";
				}
			}
		echo "</select>";
}
?>