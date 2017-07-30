<?php
$user_name=  "gb_admingoldoff";
$pwd= "GoldBirdbow";
$database="gb_backofweb";
$server="127.0.0.1";



$opn_Connection = mysqli_connect($server,$user_name,$pwd);
$opn_Dbf = mysqli_select_db($database, $opn_Connection);

if ($opn_Connection) {
   if ($opn_Dbf){
      $fileXML = "data\RMSuppliers.xml";
      if (file_exists($fileXML)) {
	      $xml = simplexml_load_file($fileXML);		
	      	
	      foreach ($xml as $XM){

            $SupplierNo =0;
            $SupplierName="";
       
            $Address1 ="";
            $Address2 ="";
            $Address3 ="";
            
            $Contact ="";
            $OfficePhone1 ="";
            $OfficePhone2 ="";
            $Fax ="";
      
       		$SupplierNo = $XM->supplierno;
       		$SupplierName= $XM->suppliername;
       		$Address1 = $XM->address1;
       		$Address2 = $XM->address2;
       		$Address3 = $XM->address3;
       		$Contact = $XM->contact;
       		$OfficePhone1 = $XM->officephone1;
       		$OfficePhone2 = $XM->officephone2;
       		$Fax = $XM->fax;
            
	      	$user =1;
			$date_today= date('Y-m-d');
			$time_now= date("h:i:s");

			echo $SupplierName.','.$Address1.','.$Address2.','.$Address3.','.$Contact.','.$OfficePhone1.','.$OfficePhone2.','.$Fax.','.$user.','.$date_today.','.$time_now."\n";
			
            $SQLstr_pHeader = "INSERT INTO rmsupplier(suppliername,address1,address2,address3,contactperson,telephonegen1,telephonegen2,fax1,addedby,addeddate,addedtime)
	      	                                           values ('$SupplierName','$Address1','$Address2','$Address3','$Contact','$OfficePhone1','$OfficePhone2','$Fax','$user','$date_today','$time_now')";
			$result = mysqli_query($SQLstr_pHeader) or die ('Error');	                           
			
	      }  
	      echo "Loading invoice details finished\n";    
      } else {	
	      echo "AGENT XML Does Not Exist" ;
      }       
   } else {
      echo "Database Not Found"	;
   }  
} else {
   echo "Connection Could Not Be Establish".mysqli_error(); 	        
}
mysqli_close($opn_Connection);

?>