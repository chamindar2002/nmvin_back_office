<?php
class LogBookEntryManager {
	
private static $instance;
	
	private function __construct() {
		
	}
	
	public static function getInstance() {
        if (LogBookEntryManager::$instance== null) { 
		    LogBookEntryManager::$instance = new LogBookEntryManager(); 
		}
		
		return LogBookEntryManager::$instance;
	}
	
	Public Function AddEntrytoLogBook($userid,$description){

                 
            $Textfile = "logentry/".date('Y-m-d').".TXT";
            $date_today= date('Y-m-d');
			$time_now= date("h:i:s");
			
            
            //$ip=@$REMOTE_ADDR;            
            $ip=$_SERVER['REMOTE_ADDR'];
            //$ip= GetHostByName($REMOTE_ADDR);
          
            
            $DataStrin = $userid." ".$date_today." ".$time_now." ".$description." ".$ip."\n";
            
            if (file_exists($Textfile)) {
                 $FileHandle = fopen($Textfile,'a');
            } else	{
	             $FileHandle = fopen($Textfile,'w'); 
            }

            fwrite($FileHandle,$DataStrin);
            fclose($FileHandle);		
		
	 return	null;
	}
	
}
?>