<?php
require_once getcwd().'/build/conf/db_conn_2.php';


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacilityExportValidator
 *
 * @author Oracle
 */
class FacilityExportValidator {
    
    public static function exec_($salerefno){
        
        $query = "SELECT id FROM nmwndb_asiast.facility_master WHERE sales_ref_no='$salerefno' AND deleted='0'";
        $rows_count = mysqli_query($query);
        $mysql_num_rows = mysqli_num_rows($rows_count);
       
        if($mysql_num_rows != 0){
            return true;
        }
        
        return false;
        
    }
}

?>
