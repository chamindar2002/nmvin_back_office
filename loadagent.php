<?php
$user_name=  "gb_admingoldoff";
$pwd= "GoldBirdbow";
$database="gb_backofweb";
$server="127.0.0.1";



$opn_Connection = mysql_connect($server,$user_name,$pwd);
$opn_Dbf = mysql_select_db($database, $opn_Connection);

if ($opn_Connection) {
   if ($opn_Dbf){
      $fileXML = "data\agent.xml";
      if (file_exists($fileXML)) {
	      $xml = simplexml_load_file($fileXML);		
	      	
	      foreach ($xml as $XM){

            $AgentNo =0;
            $AgentName="";
            $AgentShortName = "";
       
            $Address1 = "";
            $Address2 = "";
            $Address3 = "";
       
            $OfficePhone1 = "";
            $MobilePhone1 = "";
            $fixedline = "";
       
            $AgentNo =$XM->agentno;
            $AgentName =htmlspecialchars($XM->name);
            $AgentShortName =htmlspecialchars($XM->shortname);
            
            $Address1 =htmlspecialchars($XM->address1);
            $Address2 =htmlspecialchars($XM->address2);
            $Address3 =htmlspecialchars($XM->address3);
            $OfficePhone1 =$XM->officephone1;
            $MobilePhone1 =$XM->mobilephone;
            $$fixedline =$XM->fixedline;
	      	
	      	$user =1;
			$date_today= date('Y-m-d');
			$time_now= date("h:i:s");

			echo $AgentName.','.$AgentShortName.','.$Address1.','.$Address2.','.$Address3.','.$OfficePhone1.','.$MobilePhone1.','.$fixedline.','.$user.','.$date_today.','.$time_now."\n";
			
            $SQLstr_pHeader = "INSERT INTO agent(agentname,agentshortname,address1,address2,address3,officephone1,mobile,fixedline,addedby,addeddate,addedtime)
	      	                                           values ('$AgentName','$AgentShortName','$Address1','$Address2','$Address3','$OfficePhone1','$MobilePhone1','$fixedline','$user','$date_today','$time_now')";
			$result = mysql_query($SQLstr_pHeader) or die ('Error');	                           
			
	      }  
	      echo "Loading invoice details finished\n";    
      } else {	
	      echo "AGENT XML Does Not Exist" ;
      }       
   } else {
      echo "Database Not Found"	;
   }  
} else {
   echo "Connection Could Not Be Establish".mysql_error(); 	        
}
mysql_close($opn_Connection);

?>