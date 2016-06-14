<?php
$user_name=  "gb_admingoldoff";
$pwd= "GoldBirdbow";
$database="gb_backofweb";
$server="127.0.0.1";



$opn_Connection = mysql_connect($server,$user_name,$pwd);
$opn_Dbf = mysql_select_db($database, $opn_Connection);

if ($opn_Connection) {
   if ($opn_Dbf){
      $fileXML = "data\products.xml";
      if (file_exists($fileXML)) {
	      $xml = simplexml_load_file($fileXML);		
	      	
	      foreach ($xml as $XM){

            $ProductCode =0;
            $ProductName="";
            $WSprice = 0;       
            $Sprice = 0;
            
            $Category = 0;
            $SubCategory = 0;
       
       		$ProductCode =$XM->productcode;
       		$ProductName =htmlspecialchars($XM->productname);
       		$WSprice =$XM->wsprice;
       		$Sprice =$XM->sprice;
       		$Category =$XM->category;
       		$SubCategory =$XM->subcategory;
       
	      	
	      	$user =1;
			$date_today= date('Y-m-d');
			$time_now= date("h:i:s");

			echo $ProductCode.','.$ProductName.','.$WSprice.','.$Sprice.','.$Category.','.$SubCategory.','.$user.','.$date_today.','.$time_now."\n";
			
            $SQLstr_pHeader = "INSERT INTO fgproducts(description,wsprice,dbprice,sellingprice,fgcategorycode,fgsubcategorycode,addedby,addeddate,addedtime)
	      	                                           values ('$ProductName','$WSprice','$WSprice','$Sprice','$Category','$SubCategory','$user','$date_today','$time_now')";
			$result = mysql_query($SQLstr_pHeader) or die ('Error');	                           
			
	      }  
	      echo "Loading invoice details finished\n";    
      } else {	
	      echo "PRODUCTS XML Does Not Exist" ;
      }       
   } else {
      echo "Database Not Found"	;
   }  
} else {
   echo "Connection Could Not Be Establish".mysql_error(); 	        
}
mysql_close($opn_Connection);

?>