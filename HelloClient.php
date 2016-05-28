<?php # HelloClient.php
# Copyright (c) 2005 by Dr. Herong Yang
#
   $client = new SoapClient(null, array(
      'location' => "http://www.dm-lk.com/HelloServer.php",
      'uri'      => "urn://www.dm-lk.com/",
      'cache_wsdl' => WSDL_CACHE_NONE,
      'trace'    => 1 ));

   $return = $client->__soapCall("hello",array("10.79"));
   echo("\nReturning value of __soapCall() call: ".$return);

   echo("\nDumping request headers:\n" 
      .$client->__getLastRequestHeaders());

   echo("\nDumping request:\n".$client->__getLastRequest());

   echo("\nDumping response headers:\n"
      .$client->__getLastResponseHeaders());

   echo("\nDumping response:\n".$client->__getLastResponse());
?>