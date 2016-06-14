<?php




//$appName = "Nimavin Green Park :: Backoffice System";

if (strpos($_SERVER["HTTP_HOST"], "online") !== false) {    //---Online Config
     //include "config-online.php";
	return;
} else {      //---Default Config
	 include "config-default.php";
//	 include "config-online.php";
	return;
}