<?php

include_once '../../build/conf/db_conn.php';
$blockno = $_GET['blockno'];
$owners = array(); //id, cutomer_code, block_no, ownertype
$query = "SELECT t.ownertype,c.title,c.firstname,c.familyname,c.addressline1,c.addressline2,c.country FROM transferdetails t  NATURAL JOIN customerdetails c WHERE t.block_no='$blockno' AND c.customercode=t.cutomer_code;";
$mysql_query = mysqli_query($query);
$mysql_num_rows = mysqli_num_rows($mysql_query);
if ($mysql_num_rows != 0) {
    while ($row = mysqli_fetch_assoc($mysql_query)) {
        $title[] = $row['ownertype'] . "-" . $row['title'] ." ". $row['firstname'] . $row['familyname'] ."-". $row['addressline1'] . $row['addressline2'] . $row['country'];
        $owners = $title;
    }
    print json_encode($owners);
}
?>
