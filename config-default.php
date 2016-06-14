<?php
// Database configuration details
// No need, all db related configs are in build.properties and runtime-conf.xml
// If runtime-conf.xml is modufied, run 'propel-gen thisDir convert-conf' where thisDir can be '.' if you execute the command from this own directory (i.e. trunk/web).

// Application Name
$appName = "Nimawin Developers";

// Application installation directory
// No trailing '/' please
if (PHP_OS == "Linux") {
	//$appDirectory = "/var/www/vhosts/goldenbirdlanka.com/subdomains/backoffice/httpdocs";
	$appDirectory="/var/www/html/nmvin_back_office";
  	$appWebPath = "http://nimavin-backoffice.dev";
  	
} else {
	// Windows - developer machines
	$appDirectory = "C:/xampp/htdocs/nimavin/trunk/web";
	$appWebPath = "http://localhost/nimavin/trunk/web/";
}

/*
 * What's the theme to be used?
 */
$theme = "nimawinbackofficetheme";
$_REQUEST['theme'] = $theme; 
//define("CLIENT_THEME", "paragon");
//define("STAFF_THEME", "reservation");

// Following should be a valid role name as in the database
//define("CLIENT_ROLE_NAME", "Client");
//define("CLIENT_ROLE_ID", 3);

// What should be the user name of an anonymous user?
define("ANONYMOUS_USER", "anonymous");


// Security enablement
// Set the following to 'false' during development
define("ENFORCE_AUTHENTICATION", true);
//define("ENFORCE_AUTHORIZATION", false);
//define("ENFORCE_AUTHORIZATION", true);


// Email Configuration
// Mails will be sent to clients from this email address.
//define("EMAIL_FROM_ADDRESS", "Paragon Sri Lanka <paragonsrilanka@aol.com>");
//define("EMAIL_REPLY_TO_ADDRESS", "Paragon Sri Lanka <paragonsrilanka@aol.com>");
//define("EMAIL_BATCH_DELIVERY_SIZE", 10);


// File upload facility
// NOTE: Don't have the trainling /
// WARNING: This should not be under web root (but for testing you are excluded!)
//define("FILE_UPLOAD_DIR", $appDirectory."/upload");
//define("UPLOAD_MAX_FILE_SIZE", 1000000); // In bytes (also check the php.ini setting)


// Application date display format
define("DATE_DISPLAY_FORMAT", "d-m-Y");
define("DATE_TIME_DISPLAY_FORMAT", "d-m-Y");

// Application name
define("SYSTEMNAME", "NMWINoff");
define("SYSTEM_ID", 1);
// Clinet Name.
define("CLIENT_NAME", "Nimavin Developers");

//break block listing into clusters
define("MIN_CLUSTERING_NUMBER",360);