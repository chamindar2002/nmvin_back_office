<?php
include_once("action/Action.php");
include_once("CustomerManager.php");      
require_once("customerFunctions.php");

class CustomerDetailsAction implements Action {
	 
	  public function execute() {
	  
	  //showActionFileOutput(20);
	  
	  	if(isset($_POST['search'])){
	  		$sql = "";
	  		if($_POST['searchkeywordbox'] != ""){
	  			$searchby = $_POST['searchcriteria'];
	  			$searchfor = $_POST['searchkeywordbox'];
	  			switch($searchby)
	  			{
	  				case 0:
	  					$sql = "SELECT * FROM customerdetails WHERE familyname LIKE '%$searchfor%' AND deleted='true'";
	  					break;
	  				case 1:
	  					$sql = "SELECT * FROM customerdetails WHERE firstname LIKE '%$searchfor%' AND deleted='true'";
	  					break;
	  				case 2:
	  					$sql = "SELECT * FROM customerdetails WHERE passportno LIKE '%$searchfor%' AND deleted='true'";
	  					break;
	  				case 3:
	  					$sql = "SELECT * FROM customerdetails WHERE email LIKE '%$searchfor%' AND deleted='true'";
	  					break;
	  				case 4:
	  					$sql = "SELECT * FROM customerdetails WHERE Skype LIKE '%$searchfor%' AND deleted='true'";
	  					break;
	  				case 5:
	  					$sql = "SELECT * FROM customerdetails WHERE mobile LIKE '%$searchfor%' AND deleted='true'";
	  					break;
	  				case 6:
	  					$sql = "SELECT * FROM customerdetails WHERE landline LIKE '%$searchfor%' AND deleted='true'";
	  					break;
	  			}
	  			
		  		$_REQUEST['searchresults'] = searchForFamilyName($sql);
	  		}	  		
	  	}
	   	return "form";
	  }
}

function searchForFamilyName($sql){

	$searchObj = CustomerManager::getInstance()->searchCustomer($sql);
	//print_r($searchObj);
	return $searchObj;
	//echo $searchby."|".$searchfor;
}
?>