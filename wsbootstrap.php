<?php
//echo $appDirectory;
// Load the configuration file
include_once "config-default.php";


// Some utility functions
include_once "$appDirectory/utils/pathmanager.php";
include_once "$appDirectory/utils/messages.php";

// Mandatory include directories
add_include_path($appDirectory);
add_include_path("$appDirectory/modules");
add_include_path("$appDirectory/build/classes");


// Initialize Propel engine
include_once "utils/propel-init.php";

header("Content-type: application/xml");
?>