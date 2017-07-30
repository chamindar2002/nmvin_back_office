<?php
$user_name=  "nmadmvin";
$pwd= "NmOffAdmin";
$database="nmwndb";
$server="127.0.0.1";



$opn_Connection = mysqli_connect($server,$user_name,$pwd);
$opn_Dbf = mysqli_select_db($database, $opn_Connection);

if ($opn_Connection) {
   if ($opn_Dbf){
   	  //Open Project Dtl table where project = 'HORANA' and PURCHASED BLOCKS ONLY.
   	  $PrjDtlString = "SELECT * FROM nmwndb.projectdetails where projectcode = '2' and customercode<>0";
   	  $PrjDtl=mysqli_query($PrjDtlString);
   	  while ($Row = mysqli_fetch_assoc($PrjDtl)) {
   	  	   
   	  	   $Refno = $Row['refno'];
   	  	   $HouseCatNo = $Row['housecatcode'];  //New Refnumber stored in this field.
   	  	   $CustomerCode = $Row['customercode'];
           //Ignore if  
   	  	   if ($HouseCatNo!=0){
	   	  	   //UPDATE Project Dtl table with newly assined Refcode
	   	  	   $NewPrjDtlString ="UPDATE nmwndb.projectdetails SET customercode='$CustomerCode',reservestatus='2' where refno = $HouseCatNo";
	   	  	   $result = mysqli_query($NewPrjDtlString) or die ('Error');
	   	  	     
	   	  	   //Remove Customer Code From Old Record
	   	  	   $OldPrjDtlString ="UPDATE nmwndb.projectdetails SET customercode='0',reservestatus='0' where refno = $Refno";
	   	  	   $result = mysqli_query($OldPrjDtlString) or die ('Old record update fail');
	   	  	   
	   	  	   //Open Sales File to get Sales number,
	   	  	   $SalesString = "SELECT * FROM nmwndb.sales where blockrefnumber = $Refno";
	   	  	   $SalRslt = mysqli_query($SalesString) or die ('Error');
	   	  	   $sLRow = mysqli_fetch_assoc($SalRslt);
	   	  	   
	   	  	   $SalesReferanceNo = $sLRow['refno'];
	   	  	   
	   	  	   //Update Slase file
	   	  	   $SalesString2 = "UPDATE nmwndb.sales SET blockrefnumber='$HouseCatNo' where blockrefnumber = $Refno"; 
	   	  	   $SalRslt = mysqli_query($SalesString2) or die ('fail to update blockrefno-sales file');
	   	  	   
	   	  	   //Update Receipts file
	   	  	   $SalesString2 = "UPDATE nmwndb.customerreceipts SET blocknumber='$HouseCatNo' where salerefno = $SalesReferanceNo"; 
	   	  	   $SalRslt = mysqli_query($SalesString2) or die ('fail to update blockrefno-receipt file');
           }
   	  	   
   	  }
   }
}
mysqli_close($opn_Connection);

1 

?>