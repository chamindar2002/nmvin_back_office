<?php

require_once 'build/conf/db_conn.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of report_sql
 *
 * @author kanishka
 */
class report_sql {

    public function get_location_name($id) {
        $mysql_query = mysql_query("SELECT `locationname` FROM `location` WHERE `locationcode`=$id");
        $mysql_fetch_array = mysql_fetch_array($mysql_query, MYSQL_ASSOC);
        return $mysql_fetch_array['locationname'];
    }

    public function sendSMS($pN, $msg) {
        $this->timestamp = $pN . '_' . date('Y-m-d_H-i-s') . '_' . mt_rand();
        try {
            $path = "$_SERVER[DOCUMENT_ROOT]/nimavin" . '/sendSMS/' . $this->timestamp . '.txt';
            $fh = fopen($path, 'w');
            fwrite($fh, 'To: 94' . $pN . " \n\n" . $msg . " \n");
            fclose($fh);
            chmod($path, 0777);
        } catch (Exception $exc) {
            return $exc . getMessages();
        }
    }

}

?>
