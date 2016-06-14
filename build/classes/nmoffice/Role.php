<?php

require 'nmoffice/om/BaseRole.php';


/**
 * Skeleton subclass for representing a row from the 'role' table.
 *
 * User Role
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    nmoffice
 */
class Role extends BaseRole {

	/**
	 * Initializes internal state of Role object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}
	
    public function getUsers($c = null) {
	     $users = array();
	     foreach($this->getUserRoleRefsJoinUser($c) as $ref) {
	        $users[] = $ref->getUser();
	     }
	     return $users;
  	}
  	
  	public function getActionPermissions($c = null) {
     $actions = array();
     
     foreach($this->getRoleActionPermissionRefsJoinActionPermission($c) as $ref) {
        $actions[] = $ref->getActionPermission();
     }
     
     return $actions;
  	}
} // Role
