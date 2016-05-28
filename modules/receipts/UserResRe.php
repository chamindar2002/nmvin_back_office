<?php
include '../../build/conf/db_conn.php';
  $log_name = $_GET['username'];
  $rows = array();
    mysql_select_db('nmwndb');
    $query = "select c.firstname from user c NATURAL JOIN user_role_ref u WHERE c.loginname='$log_name' AND u.rid='1'";
    $mysql_query = mysql_query($query);
    $mysql_num_rows = mysql_num_rows($mysql_query);
    $rows[0] = $mysql_num_rows;
    print json_encode($rows);


?>
