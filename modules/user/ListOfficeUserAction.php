<?php
include_once("action/Action.php");
include_once("user/UserManager.php");

class ListOfficeUserAction implements Action {
	
	public function execute() {
        $allRoles = UserManager::getInstance()->listAllRoles();
      	$users=array();
        foreach ( $allRoles as $rle){
			if(CLIENT_ROLE_ID != $rle->getRid()){
		    	//$users = array_merge($users,$rle->getUsers());
		    	if ($moreUsers = $rle->getUsers()) {
		    	
		    		foreach($moreUsers as $user) {
		    			if ($user == null) {
							echo "<pre>";print_r($moreUsers); echo "</pre>"; exit;
		    			}
		    			$users[$user->getUid()] = $user;
		    		}
		    	}	
		       
		    }
		}
   
		$allRoles = UserManager::getInstance()->listAllRoles();
		$_REQUEST['allRoles'] = $allRoles;
		$_REQUEST['allUsers'] = $users;
      	return "list";
	}
}
?>