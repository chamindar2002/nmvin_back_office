<?php
include_once '../../build/conf/db_conn.php';
$customer_code = $_GET['code'];
$block_no = $_GET['blockno'];
 $owner_no  = null;
  $rows = array();
  
  $query = "SELECT block_no FROM transferdetails WHERE block_no='$block_no'";
  $rows_count = mysqli_query($query);
  $mysql_num_rows = mysqli_num_rows($rows_count);
  if($mysql_num_rows != 0){
      $mysql_num_rows++;
      $owner_no = "Owner : " . $mysql_num_rows;
      $query = "INSERT INTO transferdetails (cutomer_code, block_no,ownertype) VALUES ('$customer_code','$block_no','$owner_no')";
     $mysql_query = mysqli_query($query) or die(mysqli_error());
  }  else {
      $mysql_num_rows = 1;
      $owner_no = "Owner : " . $mysql_num_rows;
      $query = "INSERT INTO transferdetails (cutomer_code, block_no,ownertype) VALUES ('$customer_code','$block_no','$owner_no')";
      $mysql_query = mysqli_query($query) or die(mysqli_error());
  }
 
  $rows[0] = $owner_no;
  //cutomer_code, block_no, ownertype, tr_date
  print json_encode($rows);
?>
