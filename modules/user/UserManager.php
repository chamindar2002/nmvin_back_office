<?php

//include_once "User.php";

class UserManager {
	
	const ANONYMOUS_USER = "anonymous";
	
	/* Define singleton - start */
	private static $instance;
	
	public function __construct() {
		
	}
	
	public static function getInstance() {
		if (UserManager::$instance == null) {
			UserManager::$instance = new UserManager();
		}
		
		return UserManager::$instance;
	}
	/* Define singleton - end */
	
	
	public function listAllUsers() {
		$objects = UserPeer::doSelect(new Criteria());
		return $objects;
	}
	
	public function addNewUser($loginName, $firstName, $familyName, $password, $enabled) {
		$user = new User(); // User - Propel generated class
		$user->setLoginname($loginName);
		$user->setFamilyname($familyName);
		$user->setFirstname($firstName);
		$user->setPassword($this->encryptPassword($password));
		$user->setEnabled($enabled);
		try {
			$user->save();
		} catch (PropelException $e) {
			return null;
		}
		return $user;
	}
	
	public function encryptPassword($password) {
		return md5($password);
	}
	
	public function authenticateUser($login, $plainTextPassword) {
                        
		$SYS_ID = SYSTEMNAME.uniqid();
                
		
		$c = new Criteria();
		$c->add(UserPeer::LOGINNAME, $login);
		$users = UserPeer::doSelect($c);
		$user = current($users);
		
		if ($user == null) {
			return false;
		}
		
		 
		if (!ENFORCE_AUTHENTICATION) {
			$_SESSION[SYSTEMNAME.'login'] = $user->getLogin();
			$_SESSION[SYSTEMNAME.'logid'] = $user->getUid();
			$_SESSION[SYSTEMNAME.'sysid'] = $SYS_ID;		
			return true;
		}
		
		// Check password
		if ($user->getEnabled() && $user->getPassword() == $this->encryptPassword($plainTextPassword)) {
			// Login successful
			$_SESSION[SYSTEMNAME.'login'] = $user->getLoginname();
			$_SESSION[SYSTEMNAME.'logid'] = $user->getUid();
			$_SESSION[SYSTEMNAME.'sysid'] = $SYS_ID;
                       
			return true;
		}
		
		// login name, password mismatch
	return false;
	}
	
	public function logoutUser() {
		
		if (isset($_COOKIE[$_SESSION[SYSTEMNAME.'login']])){
			setcookie($_SESSION[SYSTEMNAME.'login'],'',time()-42000, '/');
		}
		
		if (isset($_COOKIE[$_SESSION[SYSTEMNAME.'sysid']])){
			setcookie($_SESSION[SYSTEMNAME.'sysid'],'',time()-42000, '/');
		}
		
		if (isset($_COOKIE[$_SESSION[SYSTEMNAME.'logid']])){
			setcookie($_SESSION[SYSTEMNAME.'logid'],'',time()-42000, '/');
		}
		
		unset($_SESSION[SYSTEMNAME.'login']);
		unset($_SESSION[SYSTEMNAME.'sysid']);
		unset($_SESSION[SYSTEMNAME.'logid']);
//		session_destroy()		
		
//		----------- Mr.Kamal -------------s
//		// Unset all of the session variables.
//		$_SESSION = array();
//	
//		// If it's desired to kill the session, also delete the session cookie.
//		// Note: This will destroy the session, and not just the session data!
//		if (isset($_COOKIE[session_name()])) {
//		    setcookie(session_name(), '', time()-42000, '/');
//		}
//		
//		// Finally, destroy the session.
//		session_destroy();
	}

	public function isUserLoggedIn() {
		if (isset($_SESSION[SYSTEMNAME.'login'])) {
			return true;
		}
		
		return false;
	}

	public function getLoginName() {
		if (isset($_SESSION[SYSTEMNAME.'login'])) {
			return $_SESSION[SYSTEMNAME.'login'];
		}
		
		// A special user name. Someone who has not logged into the system.
		return ANONYMOUS_USER;
	}
	
	public function getUser() {
		$c = new Criteria();
		$c->add(UserPeer::LOGINNAME, $this->getLoginName());
		$users = UserPeer::doSelect($c);
		return current($users);
	}
	
	public function getUserByLogin($loginname) {
		$c = new Criteria();
		$c->add(UserPeer::LOGINNAME, $loginname);
		$results = UserPeer::doSelect($c);
		return $results;
	}
	
	// Kamal: Where is this being used? Why an array only with the names returned?
	public function getUserRoles() {
		$roleNameArray = array();
		
		if ($user = $this->getUser()) {
			$roles = $user->getRoles();
		
			foreach($roles as $role) {
				$roleNameArray[] = $role->getName(); 
			}
		}
		
		return $roleNameArray;
	}
	
	public function isUserInRole($roleName) {
		if ($roleName."" != "" && in_array($roleName, $this->getUserRoles())) {
			return true;
		}
		
		return false;
	}
	
	/*
	 * This function returns true if the user has permission to execute the action,
	 * false otherwise.
	 */
	public function checkActionPermission($module, $action) {
		if (! ENFORCE_AUTHORIZATION) {
			return true;
		}
		// Handle the special case where Login form needs to be displayed.
		// This can also be removed from here and granted as a permission to the anonymous user.
		if ($module == "user" && $action == "LoginAction") {
			return true;
		}
		
                if ($module == "online" && $action == "CustomerLoginAction") {
			return true;
		}
                
                if ($module == "online" && $action == "CustomerRegisterAction") {
			return true;
		}
                
                if ($module == "online" && $action == "ResetPasswordAction") {
			return true;
		}
                
		// Unauthenticated execution of email delivery queue
		//if ($module == "email" && $action == "ProcessDeliveryQueueAction") {
		//	return true;
		//}
		
		// Check the terms and conditions, privacy policy
		//if ($module == "docs" && $action == "ShowDocAction") {
		//	return true;
		//}
		
		// Online reservation page
		//if ($module == "client" && $action == "OnlineReservationAction") {
		//	return true;
		//}
		
		// Retry online reservation
//		if ($module == "client" && $action == "OnlineReservationRetryAction") {
//			return true;
//		}
		
		// Bank confirmation
//		if ($module == "client" && $action == "OnlinePaymentBankConfirmationAction") {
//			return true;
//		}
		
		// Online reservation page
//		if ($module == "rates" && $action == "CalculatorAction") {
//			return true;
//		}
		
		// Online reservation page
//		if ($module == "home" && $action == "HomePageAction") {
//			return true;
//		}
		
		// Todo
		// Check the roles associated with this user
		// Check the permission
		// Return accordingly
		if ($actionPermission = $this->findActionPermission($module, $action)) {
			$roles = $actionPermission->getRoles();
			foreach($roles as $role) {
				if ($this->isUserInRole($role->getName())) {
					return true; // Found!
				}
			}
		} else {
//			echo "Action was not found! $module/$action"; exit;
		}
		
		
		return false;
	}
	
	public function listAllRoles() {
		$objects = RolePeer::doSelect(new Criteria());
		return $objects;
	}
	
	public function addNewRole($name, $description) {
		$obj = new Role();
		$obj->setName($name);
		$obj->setDescription($description);
		try {
			$obj->save();
		} catch (PropelException $e) {
			return null;
		}
		return $obj;
	}
	
	public function updateRole($rid, $name, $desc) {
		$role = RolePeer::retrieveByPK($rid);
		$role->setDescription($desc);
		$role->setName($name);
		$role->save();
		
		return $role;
	}
	
	public function addUserToRole($user, $roleId) {
		$role = RolePeer::retrieveByPK($roleId);
		
		$userRoleRef = new UserRoleRef();
		$userRoleRef->setUser($user);
		$userRoleRef->setRole($role);
	
		$userRoleRef->save();
	}
	
	public function removeUserFromRole(User $user, $roleId) {
		$userRoleRef = UserRoleRefPeer::retrieveByPK($user->getUid(), $roleId);
		$userRoleRef->delete();
	}
	
	public function setUserRoles($user, $roleIds) {
		if ($roleIds == null) { // Someone needs to remove all the present roles of the user
			$roleIds = array(); // Empty array to be used below.
		}

		// $presentRoles = $user->getRoles(); -- Comment By Dumidu 
		$presentRoles = $user->getUserRoleRefs();
		if ($presentRoles == null) { // Will this get executed. Does the getRoles() return null?
			$presentRoles = array();
		}

		foreach($roleIds as $roleId) {
			// If this is a new role for the user, add it
			$found = false;
			
			foreach($presentRoles as $presentRole) {
				if ($roleId == $presentRole->getRid()) {
					$found = true;
					break;		
				}
			} 
			
			if (! $found) {
				$this->addUserToRole($user, $roleId);
			}
		}

		// Remove the roles that were previously present, but not selected now
		foreach($presentRoles as $presentRole) {
			$found = false;
			
			foreach($roleIds as $roleId) {
				if ($roleId == $presentRole->getRid()) {
					$found = true;
					break;		
				}
			}
			
			if (! $found) {
				$this->removeUserFromRole($user, $presentRole->getRid());
			}
		}
	}
	
	public function listAllActionPermissions() {
		$c = new Criteria();
		$c->add(ActionPermissionPeer::SYSTEMID,SYSTEM_ID);
		$objects = ActionPermissionPeer::doSelect($c);
		return $objects;
	}

	public function addNewActionPermission($module, $action, $description,$systemid) {
		$obj = new ActionPermission();
		$obj->setModule($module);
		$obj->setAction($action);
		$obj->setDescription($description);
		$obj->setSystemid($systemid);
		$obj->save();
		return $obj;
	}
	
	
	public function addActionPermissionToRole($action, $role) {
		$obj = new RoleActionPermissionRef();
		$obj->setActionPermission($action);
		$obj->setRole($role);
		
		$obj->save();
//		echo "addActionPermissionToRole"; exit;
	}
	
	public function removeActionPermissionFromRole(ActionPermission $action, Role $role) {
		$ref = RoleActionPermissionRefPeer::retrieveByPK($role->getRid(), $action->getId());
		$ref->delete();
	}
	
	public function setActionPermissionsForRole(Role $role, $actions) {
		// Delete all action permissions from role
		foreach($role->getActionPermissions() as $action) {
			$this->removeActionPermissionFromRole($action, $role);
		}
		
		// Add new action permissions to role
		foreach ($actions as $action) {
			$this->addActionPermissionToRole($action, $role);
		}
		
	}
	
	
	public function getThemeForUser() {
		if (! $this->isUserLoggedIn()) {
			return CLIENT_THEME;
		}
		
		if ($this->isUserInRole(CLIENT_ROLE_NAME)) {
			return CLIENT_THEME;
		}

		return STAFF_THEME;
	}
	
	public function changePassword($password,$newpassword) {
		$usr = $this->getUser();
		if ($usr->getPassword() == $this->encryptPassword($password)) {
			$usr->setPassword($this->encryptPassword($newpassword));
			$usr->save();
			return true;
		}
		
		return false;
	}
	
	// By sarath 21/07/2009
	public function getuserByUID($uid) {
		return UserPeer::retrieveByPK($uid);
	}

	public function getActionPermission($id) {
		return ActionPermissionPeer::retrieveByPK($id);
	}
	
	public function findActionPermission($module, $action) {
		$c = new Criteria();
		$c->add(ActionPermissionPeer::MODULE, $module);
		$c->add(ActionPermissionPeer::ACTION, $action);
		
		if ($actions = ActionPermissionPeer::doSelect($c)) {
			return current($actions);
		}
	}
	
	public function getRole($rid) {
		return RolePeer::retrieveByPK($rid);
	}
	 
	//public function getUsersInRole($rid){
	//	$role = RolePeer::retrieveByPK($rid);
		//return $role->getUsers(); - Changed By Dumidu
	//	return $role->getUserRoleRefs(); 
	//}
    
    public function getUsersInRole($rid){
		$role = RolePeer::retrieveByPK($rid);
		return $role->getUsers();
	}
	
	public function updateUser($UID,$familyname,$firstname,$newpassword, $enabled) {
		$User = UserPeer::retrieveByPK($UID);
		$User->setFirstname($firstname);
		$User->setFamilyname($familyname);
		if($newpassword == ""){
		    $User->setPassword($User->getPassword());
                }else {
                    $User->setPassword($this->encryptPassword($newpassword));	
                }   
		$User->setEnabled($enabled);
		$User->save();
		return $User;
	}
	
	public function DeleteUserByUID($UID) {
		$user = UserPeer::retrieveByPK($UID);

		$this->RemoveUserFormPermissionList($UID);
		
        $user->setEnabled(false);
		$user->setDeleted(true);
		$user->save();
	}
	
	public function RemoveUserFormPermissionList($UID){
		$c = new Criteria();
		$c->add(UserRoleRefPeer::UID,$UID);				
		$userRoleRef = UserRoleRefPeer::doSelect($c);
		if (sizeof($userRoleRef)!=0){
			foreach($userRoleRef as $URR){
				$URR->Delete();
			}
		}
	}
        
        public function helloWorld(){
            echo "hello ";
        }
}