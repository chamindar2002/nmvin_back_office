<?php
include_once("../../wsbootstrap.php");
include_once 'DefaultersManager.php';

if(isset($_GET['q'])){
	$blockref = $_GET['q'];
        
        $block_price = DefaultersManager::getInstance()->getBlockPrice($blockref);
        if(isset($block_price)){
            echo "<input type='text' name='blockprice' id='blockprice' class='textboxsmall' value=\"$block_price\" readonly>";
        }else{
            echo "<input type='text' name='blockprice' id='blockprice' class='textboxsmall' value=\"0.00\" readonly>";
        }
	
}else{
    echo "<input type='text' name='blockprice' id='blockprice' class='textboxsmall' value=\"0.00\" readonly>";
}

//echo $blockref;
?>