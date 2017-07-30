<?php
include_once '../../build/conf/db_conn.php';
include_once("../../wsbootstrap.php");
require_once("RefundsManager.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $query = "SELECT * FROM view_customer_refund WHERE passportno = '$id' LIMIT 1";
    $mysql_query = mysqli_query($query);
    $rows = mysqli_num_rows($mysql_query);
    
    sleep(1);
    if ($rows != 0) {
     
        while ($row = mysqli_fetch_assoc($mysql_query)) {
            
            $block = RefundsManager::getInstance()->getBlockNoByPK($row['blockrefnumber']);
            $project = RefundsManager::getInstance()->getProjectByPK($row['projectcode']);
             echo '<table>';
                echo    '<tr>';
                echo        '<td><strong>Customer</strong></td>';
                echo        '<td>'.$row['firstname'].' '.$row['familyname'].'</td>';
                echo    '</tr>';

                echo    '<tr>';
                echo        '<td><strong>National ID/Passport No.</strong></td>';
                echo        '<td>'.$row['passportno'].'</td>';
                echo    '</tr>';

                echo    '<tr>';
                echo        '<td><strong>Refunded Date</strong></td>';
                echo        '<td>'.$row['refundate'].'</td>';
                echo    '</tr>';

                echo    '<tr>';
                echo        '<td><strong>Project</strong></td>';
                echo        '<td>'.$project->getProjectname().'</td>';
                echo    '</tr>';

                echo    '<tr>';
                echo        '<td><strong>Block Number</strong></td>';
                echo        '<td>'.$block->getBlocknumber().'</td>';
                echo    '</tr>';

                echo    '<tr>';
                echo        '<td><strong>Refunded Amount</strong></td>';
                echo        '<td>'.  number_format($row['refundamount'],2).'</td>';
                echo    '</tr>';
             echo '</table>';
        }
        
        
    }else{
        echo '<strong>No records found</strong>';
    }
    
    
}

?>
