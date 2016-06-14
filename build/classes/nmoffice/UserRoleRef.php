<?php

require 'nmoffice/om/BaseUserRoleRef.php';


/**
 * Skeleton subclass for representing a row from the 'user_role_ref' table.
 *
 * User - Role Mapping
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    nmoffice
 */
class UserRoleRef extends BaseUserRoleRef {
	
	/**
	 * Initializes internal state of UserRoleRef object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}
	
} // UserRoleRef
