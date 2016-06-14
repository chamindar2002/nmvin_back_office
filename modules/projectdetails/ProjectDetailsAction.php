<?php

$app = "$_SERVER[DOCUMENT_ROOT]/nimavin/trunk/web";
$pathaction = "$app/modules/action/Action.php";
$pathpmd = "$app/modules/projectdetails/ProjectDetailsManager.php";
$pathcustomer = "$app/modules/customer/customerFunctions.php";

//$pathaction = "/var/www/nimavin/trunk/web/modules/action/Action.php";
//$pathpmd = "/var/www/nimavin/trunk/web/modules/projectdetails/ProjectDetailsManager.php";
//$pathcustomer = "/var/www/nimavin/trunk/web/modules/customer/customerFunctions.php";

//die($pathcustomer);

include_once($pathaction);
include_once($pathpmd);
require_once($pathcustomer);

class ProjectDetailsAction implements Action{
   
    public function execute() {
        
        if (isset($_POST['search'])) {
            $projectcode = $_POST['projects'];

            $blockscount = ProjectDetailsManager::getInstance()->countProjectDetailsByProjectCode($projectcode);
            $prdetailslist = ProjectDetailsManager::getInstance()->listProjectDetailsByProjectCode($projectcode);

            //if ($blockscount > MIN_CLUSTERING_NUMBER) {
                $_REQUEST['blockscount'] = "$blockscount";
                //$_REQUEST['prdetailslist'] = $prdetailslist;
                //return "count";
          //  } else {

                $_REQUEST['prdetailslist'] = $prdetailslist;
           // }*/
            //************************************************************** 
        }//$_POST['key']
        
        return "list";
        
    }

}

?>