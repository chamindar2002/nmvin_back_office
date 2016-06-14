<?php
function printProjects_($selected){
	$projectlist = ProjectDetailsManager::getInstance()->listProjects();
		//showActionFileOutput(20);
	echo "<select name='projects' id='projects' class='selectboxlarge' onchange='submitsearchForm()'>";
	echo "<option value='0'> </option>";
		if(sizeof($projectlist)>0){
			foreach($projectlist As $list){
				$projectcode = $list->getProjectcode();
				$projectname = $list->getProjectname();
				if($projectcode == $selected){
					echo "<option value=\"$projectcode\" selected>$projectname</option>";
				}
				else{
					echo "<option value=\"$projectcode\">$projectname</option>";
				}			
			}
		}
	echo "</select>";
}

function printblocks($dropdown_name,$arrblock_list,$selected){
  
	echo "<select name=\"projects$dropdown_name\" id=\"projects$dropdown_name\" class='selectboxlarge' onchange=\"loadData_$dropdown_name(this.value)\">";
	echo "<option value='0'> </option>";
		if(sizeof($arrblock_list)>0){
			foreach($arrblock_list As $list){
				$blockref = $list->getRefno();
				$blocknumber = $list->getBlocknumber();
				if($blockref == $selected){
					echo "<option value=\"$blockref\" selected>$blocknumber</option>";
				}
				else{
					echo "<option value=\"$blockref\">$blocknumber</option>";
				}			
			}
		}
	echo "</select>";
}


function getBlockDetails($blockrefno,$controlname){
	//$controlname:blockswapfrom/blockswapto
	include_once("BlockSwapManager.php");
	include_once("projectdetails/projectdetailFunctions.php");
	
	$blockdetails = BlockSwapManager::getInstance()->getBlockDetailsByPk($blockrefno);
	if(sizeof($blockdetails) == 1){
		$blockno = $blockdetails->getBlocknumber();
		$customercode = $blockdetails->getCustomercode();
		$blockstat = $blockdetails->getReservestatus();
		$blockprice = $blockdetails->getBlockprice();
		
		$salerefno = 0;
		
		$img = showAllocationTypeButton($blockstat); //projectdetails/projectdetailFunctions.php
		
		$customer = BlockSwapManager::getInstance()->getCustomerByPk($customercode);
		if(isset($customer)){
			$customerName = "<strong>".$customer->getTitle()." ".$customer->getFirstname()." ".$customer->getFamilyname()."</strong></br>";
			$customerName .= $customer->getAddressline1()." ".$customer->getAddressline2()." ".$customer->getPostcode()." ".$customer->getCountry();
		}
		
		$sale = BlockSwapManager::getInstance()->getSaleRefNumberByBlockRefNumber($blockrefno);
		if(sizeof($sale) == 1){
			$salerefno = $sale->getRefno();
		}
		
		$out = "$customerName<br>";
		$out .= "Block Status [ <img src=\"themes/buttons/$img\" width='7px' height='7px'> ]<br>";
		$out .= "Block Price [ ".number_format($blockprice,2)." ]<br>";
		$out .= "<input type='hidden' name=\"blockref_$controlname\" id=\"blockref_$controlname\" value=\"$blockrefno\">";
		$out .= "<input type='hidden' name=\"blockstat_$controlname\" id=\"blockstat_$controlname\" value=\"$blockstat\">";
		$out .= "<input type='hidden' name=\"ccode_$controlname\" id=\"ccode_$controlname\" value=\"$customercode\">";
		$out .= "<input type='hidden' name=\"saleref_$controlname\" id=\"saleref_$controlname\" value=\"$salerefno\">";
		$out .= "<input type='hidden' name=\"blockprice_$controlname\" id=\"blockprice_$controlname\" value=\"$blockprice\">";
	}
	else{
		$out = "No records";
	}
	echo $out;
	
}


?>