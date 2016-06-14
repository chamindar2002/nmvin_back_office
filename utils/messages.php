<?php

// This defines a function which can be used to capture all the error messages and so on.

define("MESSAGE_ERROR", 1);
define("MESSAGE_INFO", 2);
define("MESSAGE_WARNING", 3);

function addMessage($messageType, $message) {
	if (! isset($_SESSION['displayMessages'])) {
		$_SESSION['displayMessages'] = array();
	}
	
	$_SESSION['displayMessages'][] = array($messageType => $message);	
}

// If format is true, returns html. Otherwise, returns the array itself
function getMessages($format = true, $clean = false) {
	if (! isset($_SESSION['displayMessages'])) {
		return "";
	}
	
	$displayMessages = $_SESSION['displayMessages'];
	
	if ($format) {
		if (sizeof($displayMessages) > 0) {
			$html = "<ul>";
			
			foreach($displayMessages as $message) {
				$message = each($message);
				$html .= "<li class=\"".getMessageCSSClass($message['key'])."\">". $message['value']."</li>"; // Print the value		
			}
			
			$html .= "</ul>";
			
			if($clean) {
				$_SESSION['displayMessages'] = null;
			}
			return $html;
		} else {
			return "";
		}
	} else {
		if($clean) {
			$_SESSION['displayMessages'] = null;
		}
		return $displayMessages;
	}
}

function getMessageCSSClass($messageType) {
	switch($messageType) {
		case MESSAGE_ERROR: return "messageError";
		case MESSAGE_INFO: return "messageInfo";
		case MESSAGE_WARNING: return "messageWarning";
		default: return "message";
	}
}