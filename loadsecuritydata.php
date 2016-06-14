<?php

// Load action permissions


// Some utility functions
include_once "utils/pathmanager.php";


// Mandatory include directories
add_include_path("modules");
add_include_path("build/classes");

// Load the configuration file
include_once "config.php";
// Initialize Propel engine
include_once "utils/propel-init.php";


// For security checks
include_once "user/UserManager.php";

$um = UserManager::getInstance();


// Go through each directory inside modules directory
// For each directory,
// 	Get a list of files
//	If a file name ends with Action.php
// 		Create an instance of ActionPermission


$dir = "modules";

$dh = opendir($dir);

while (($file = readdir($dh)) !== false) {
    if ($file != ".." && $file != "." && $file != ".svn" && $file != "action") {
     
       
    	$dh2 = opendir($dir."/".$file);
    	
    	while (($file2 = readdir($dh2)) !== false) {
    		if (substr($file2, -10) == "Action.php") {
    			$action = substr($file2, 0, -4);
    			$module = $file;
    			try {
					$um->addNewActionPermission($module, $action, "",SYSTEM_ID);
    			} catch (Exception $e) {
    				// The action already exits
    			}
    		}
    	}
    	
    }
}

closedir($dh);


echo "Loading action permissions finished\n";

?>
