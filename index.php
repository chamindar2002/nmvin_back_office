<?php
//error_reporting(2);
//Set Default Time Zone
ini_set('date.timezone', 'Asia/Colombo'); 




// Some utility functions
include_once "utils/pathmanager.php";
include_once "utils/messages.php";



// Mandatory include directories
add_include_path("modules");
add_include_path("build/classes");

// Load the configuration file
include_once "config-default.php";
// Initialize Propel engine
//$appDirectory = '';
include_once "utils/propel-init.php";

// For security checks
include_once "user/UserManager.php";
include_once "logbookentry/LogBookEntryManager.php";


// Identify module
if (isset($_GET['m'])) {
	$module = trim($_GET['m']);
} else {
	$module = "";
}

// If no module, what should be the default?
if ("$module" == "") {
	$module = "home";
}


// Make sure the op is something we expect
// Otherwise, other files will be included by a hacker
/*if (! ereg("^[a-zA-Z0-9]+$", $module)) {
	$module = "home";
}*/

if(! preg_replace("[^A-Za-z0-9]", "", strtolower($value['name']))){
    $module = "home";
}

if (isset($_GET['a'])) {
	$action = trim($_GET['a']);
} else {
	$action = "";
}

if ("$action" == "") {
	$module = "home";
	$action = "HomePage"; // home?
}


// Make sure the action is something we expect
// Otherwise, other files will be included by a hacker //change 
/*if (! ereg("^[a-zA-Z0-9]+$", $action)) {
	$module = "home";
	$action = "HomePage"; // home?
}*/


// Verify if the user is logged in
session_start();
//$isLoggedIn = check_user_login();


/*
 * Check permission to execute the action
 * Execute the action, capture status
 * Include the view
 */
$actionClassName = $action."Action";

if (!isset($_SESSION[SYSTEMNAME.'sysid']) ){

	if (UserManager::getInstance()->checkActionPermission($module, $actionClassName)) {
         
	$actionFile = $module."/".$actionClassName.".php"; 

	require_once($actionFile);
	$class = new ReflectionClass($actionClassName); // How to identity the class location?
	
	$actionInstance = $class->newInstance();
	$status = $actionInstance->execute(); // Invoke the execute method of the action
	
	$moduleDir = "modules"; // How to identify the moduleDirectory?
	
	$file = $moduleDir."/".$module."/".$action."Action_". $status.".php";

	$ActionName= $action."Action_". $status;
	
	} else {
		$file = "error_pages/no_permission.php";
              
	}
	
	if (!file_exists($file)) {
		$file = "error_pages/missing_view.php";
	}
	        
	
} else {
    
	if (UserManager::getInstance()->checkActionPermission($module, $actionClassName)) {
		$actionFile = $module."/".$actionClassName.".php"; 
	
		//Get User id Befor SESSION End
		if (isset($_SESSION[SYSTEMNAME.'login'] )){
			$uid=$_SESSION[SYSTEMNAME.'login'];
		}
		
		require_once($actionFile);
		$class = new ReflectionClass($actionClassName); // How to identity the class location?
		
		$actionInstance = $class->newInstance();
		$status = $actionInstance->execute(); // Invoke the execute method of the action
		
		$moduleDir = "modules"; // How to identify the moduleDirectory?
		
		$file = $moduleDir."/".$module."/".$action."Action_". $status.".php";
	
		$ActionName= $action."Action_". $status;
		
		//Get User id when SESSION Start
		if (isset($_SESSION[SYSTEMNAME.'login'] )){
			$uid=$_SESSION[SYSTEMNAME.'login'];
		}
		
		
		LogBookEntryManager::getInstance()-> AddEntrytoLogBook($uid,$ActionName); 
	} else {
		$file = "error_pages/no_permission.php";
                
            
	}
	
	if (!file_exists($file)) {
		$file = "error_pages/missing_view.php";
	}
}



// Start output buffering
ob_start();

// Executing the page (which includes various functions)
// WARNING - check if this file is suitable to be included! (i.e. something within the modules directory and so on....)
include $file;

// End output buffering

$content = ob_get_clean();

// Construct the page
// Determine the theme to be used
//$theme = UserManager::getInstance()->getThemeForUser();
//$theme = $_REQUEST['theme'];
$theme = 'nimavinlantheme';




/*
 * swap themes here.
 */

//-------------------------------------------------------
//    if($module == "online" || $module == "onlinepayment" || $module == "onlinecustomer"){
//        $theme = "nimavin_online_theme";
//    }
//-------------------------------------------------------
     
include "themes/".$theme."/page.tpl.php";	

?>
