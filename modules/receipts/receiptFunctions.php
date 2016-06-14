<?php
$searchcriteria = array();

$searchcriteria[0] = "";
$searchcriteria[1] = "NIC/Passport Number";
$searchcriteria[2] = "Date Range";

function showsearch_criteria($selected){
	global $searchcriteria;
	echo "<select name='searchcriteria' id='searchcriteria' class='selectboxlarge' onchange='loadsearch_criteria(this.value)'>";
		foreach($searchcriteria As $key=>$value){
			if($key == $selected){
				echo "<option value=\"$key\" selected>$value</option>";
			}else{
				echo "<option value=\"$key\">$value</option>";
			}
		}
	echo "</select>";
}

$paidfor = Array("RC" => "Reservation Charge",
				 "FP" => "Full Payment",
				 "PP" => "Part Payment",
				 "IN" => "Installment"	
				);

$paidfor_sin = Array("RC" => "fjka lsrSfus .dia;=",
				 "FP" => "uq¿ jgskdlu",
				 "PP" => "jgskdlfuka fldgila",
				 "IN" => "udisl uqo,a jYfhka"	
				);				
				
function displayPaidfor($indx){
	global $paidfor;
	return $paidfor[$indx];
}




function convert_number($number) 
{ 
    if (($number < 0) || ($number > 999999999)) 
    { 
    throw new Exception("Number is out of range");
    } 

    $Gn = floor($number / 1000000);  /* Millions (giga) */ 
    $number -= $Gn * 1000000; 
    $kn = floor($number / 1000);     /* Thousands (kilo) */ 
    $number -= $kn * 1000; 
    $Hn = floor($number / 100);      /* Hundreds (hecto) */ 
    $number -= $Hn * 100; 
    $Dn = floor($number / 10);       /* Tens (deca) */ 
    $n = $number % 10;               /* Ones */ 

    $res = ""; 

    if ($Gn) 
    { 
        $res .= convert_number($Gn) . " Million"; 
    } 

    if ($kn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            convert_number($kn) . " Thousand"; 
    } 

    if ($Hn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            convert_number($Hn) . " Hundred"; 
    } 

    $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", 
        "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", 
        "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", 
        "Nineteen"); 
    $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", 
        "Seventy", "Eigthy", "Ninety"); 

    if ($Dn || $n) 
    { 
        if (!empty($res)) 
        { 
            $res .= " and "; 
        } 

        if ($Dn < 2) 
        { 
            $res .= $ones[$Dn * 10 + $n]; 
        } 
        else 
        { 
            $res .= $tens[$Dn]; 

            if ($n) 
            { 
                $res .= "-" . $ones[$n]; 
            } 
        } 
    } 

    if (empty($res)) 
    { 
        $res = "zero"; 
    } 

    return $res; 
} 

function is_decimal( $val )
{
    return is_numeric( $val ) && floor( $val ) != $val;
}


function printProjects($selected){
	$projectlist = ProjectDetailsManager::getInstance()->listProjects();
		//showActionFileOutput(20);
	echo "<select name='projects' id='projects' class='selectboxlarge' onchange='loadblockslist(3)'>";
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