<?php

// Load the classes automatically without many include()s.
//function __autoload($class_name) {
//    require_once $class_name . '.php';
//}

// Add to the include path
function add_include_path ($path) {
    foreach (func_get_args() AS $path) {
        if (!file_exists($path) OR (file_exists($path) && filetype($path) !== 'dir')) {
            trigger_error("Include path '{$path}' not exists", E_USER_WARNING);
            continue;
        }
       
        $paths = explode(PATH_SEPARATOR, get_include_path());
       
        if (array_search($path, $paths) === false)
            array_push($paths, $path);
       
        set_include_path(implode(PATH_SEPARATOR, $paths));
    }
}


function redirect($path) {
	global $appWebPath;
	
	header("Location: ".$appWebPath.$path);
	exit(0);
}

// Whenever a hyperlink is to be created, this is the correct function to be used.
function l($text, $path, $target = null) {
	global $appWebPath;
	if($target) {
		return "<a href=\"".$appWebPath.$path."\" target=\"$target\">$text</a>";
	} else {
		return "<a href=\"".$appWebPath.$path."\">$text</a>";
	}
}
?>
