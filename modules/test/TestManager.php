<?php
class TestManager{
	
	/* Define singleton - start */
	private static $instance;
	
	private function __construct() {
		
	}
	
	public static function getInstance() {
		if (TestManager::$instance == null) {
			TestManager::$instance = new TestManager();
		}
		
		return TestManager::$instance;
	}
}

?>