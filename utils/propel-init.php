<?php
// Set the include_path to include your generated OM 'classes' dir.
set_include_path($appDirectory."/build/classes" . PATH_SEPARATOR . get_include_path());

require_once $appDirectory.'/vendor/propelorm/runtime/lib/Propel.php';

Propel::init("build/conf/nmoffice-conf.php");

?>
