<?php
include_once '../../build/conf/db_conn.php';
if(isset($_POST['key'])){
    $array_data = $_POST['key'];   
    $explode_data = explode("`", $array_data);
    
    $row = 0;
    $resulttype = 0;
    foreach ($explode_data as $value) {
       // echo $value;
        $explode = explode(',',$value);
        $row = 0;
        $query_data = array();
        
        foreach ($explode as $value) {
            $row++;
            
            $query_data[$row] = $value;
           if($row == 5){
                 $query = "UPDATE projectdetails SET blocknumber='$query_data[2]',
                 blocksize='$query_data[3]',blockprice='$query_data[4]',reservestatus='$query_data[5]' WHERE refno='$query_data[1]'"; 
                 $result = mysql_query($query);
                 //$num_rows = mysql_num_rows($result);
                // echo $num_rows;
                 if($result){
                     $resulttype++;
                     
                 }
                 
            }
       }
        $row = 0;
    }
    
    if($resulttype != 0){
        echo $resulttype."\t Project Details List Updated Successfully";
    }  else {
         echo "An Error Occured Updating Project Details List";
    }
 /*for ($index = 0; $index < count($explode_data); $index++) {
     echo $explode_data[$index];
 }*/
}


if(isset($_POST['block_no'])){
    $block_no = $_POST['block_no'];
    $query = "UPDATE projectdetails SET deleted='1' WHERE refno='$block_no'";
    $mysql_query = mysql_query($query);
    
    if($mysql_query){
         echo $block_no."\t Block Removed Successfully";
    }  else {
        echo "An Error Occured Updating Project Details List";
    }
    
}


if(isset($_POST['project_code'])){
   $get_project_code = $_POST['project_code'];
   $query = "SELECT locationcode FROM  projectdetails WHERE projectcode='$get_project_code' LIMIT 1";
   $mysql_query = mysql_query($query);
   $result_rows= 0 ;
    while ($row1 = mysql_fetch_array($mysql_query)) {
        $tvy_rows = $_POST['tvy_rows'];
        $tvy_rows++;
       $locationcode =  $row1['locationcode'];
        for($bl_count = 1; $bl_count < $tvy_rows; $bl_count++){
            if(isset($_POST['txt_block_no_'.$bl_count])){
              $txt_block_no = $_POST['txt_block_no_'.$bl_count];
            $txt_block_size = $_POST['txt_block_size_'.$bl_count];
            $txt_block_price = $_POST['txt_block_price_'.$bl_count];
            $block_combo = $_POST['block_combo_'.$bl_count];  
            }
                        
            $new_query = "INSERT INTO `projectdetails`(`locationcode`,`projectcode`,`blocknumber`,`blocksize`,`blockprice`,`reservestatus`) 
                VALUES ($locationcode,$get_project_code,'$txt_block_no',$txt_block_size,$txt_block_price,$block_combo)";
            
            $insert = mysql_query($new_query);
            
            if($insert){
                $result_rows++;
            }
            
        }

        
    }
    
    if($result_rows != 0){
        echo $result_rows."\t Project Details List Updated Successfully";
    }  else {
         echo "An Error Occured Updating Project Details List";
    }
    

}
 
?>
