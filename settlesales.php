<?php
/*/
 * This script was developed to remove the Rs 8/= balance in the totalpayable field in the sales table
 */

include_once 'modules/sales/SalesManager.php';

// Some utility functions
include_once "utils/pathmanager.php";


// Mandatory include directories
add_include_path("modules");
add_include_path("build/classes");

// Load the configuration file
include_once "config.php";
// Initialize Propel engine
include_once "utils/propel-init.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
define('MATCH_DIGIT','8');

$matching_sales = Array();

$salesList = SalesManager::getInstance()-> listSales();
$i = 0;
foreach($salesList As $sl){
    $i++;
    $lastdigit = substr((int)$sl->getTotalpayable(), -1, 1);
    //echo $sl->getTotalpayable()."<br>";
    echo $sl->getRefno()." [";
    echo "$lastdigit]  (".$sl->getTotalpayable().")<br>";
    if($lastdigit == MATCH_DIGIT){
        $matching_sales[$sl->getRefno()] = $sl->getTotalpayable();
    }
}
echo "<br>Found $i records.";
echo "<br>";
echo sizeof($matching_sales). " matches found for ". MATCH_DIGIT;
echo "<hr>";

foreach($matching_sales As $key=>$value){
    
    $newAmt = ($value - MATCH_DIGIT);
    $saleObj = SalesManager::getInstance()->updateTotalPayabel($key,$newAmt);
    echo "$key => OK <br>";
}
?>
