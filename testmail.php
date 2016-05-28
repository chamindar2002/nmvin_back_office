<?php


$from = 'chamindar200210@gmail.com';
            $name='=?UTF-8?B?'.base64_encode('Jinuka').'?=';
            $subject='=?UTF-8?B?'.base64_encode('New Password request').'?=';
            $body = 'Your new password is : 9088u9';
	    $headers="From: $name <{$from}>\r\n".
            "Reply-To: {$from}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

            $x = mail('chamindar2002@yahoo.com',$subject,$body,$headers);
            var_dump($x);
            
            
?>