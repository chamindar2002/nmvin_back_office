<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of emailsender
 *
 * @author Administrator
 */
class emailsender {
    //put your code here
    var $title;
    var $emailto;
    var $emailfrom;
    var $subject;
    var $message;
    var $heading;
    var $logo;
    var $contactinfo;
    
    public function __construct($title,$emailto,$emailfrom,$subject,$message,$heading,$logo,$contactinfo) {
        $this->title = $title;
        $this->emailto = $emailto;
        $this->emailfrom = $emailfrom;
        $this->subject = $subject;
        $this->message = $message;
        $this->heading = $heading;
        $this->logo = $logo;
        $this->contactinfo = $contactinfo;
    }
    
    
    public function send_email(){
        $content = "
        <html>
        <head>
        <title>".$this->title."</title>
        </head>
        <body>
        <p>".$this->heading."</p>
        <table width='100%' border='0'>
            <tr>
                
                <td><strong>".$this->contactinfo."</strong></td>
                <td align='left'><img src=".$this->logo." height='100px' width='195px'></img></td>
                
            </tr>
            
            <tr>
                <td colspan='2'>".$this->message."</td>
            </tr>
        </table>
        </body>
        </html>
        ";
        
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        //$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
        //$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
        $headers .= "From:".$this->emailfrom;
        //$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
        $headers .= 'Bcc: pinnacle@sltnet.lk,chamindar2002@yahoo.com,gemunu71@gmail.com' . "\r\n";

        // Mail it
        mail($this->emailto,$this->subject, $content, $headers);
    }
}

?>
