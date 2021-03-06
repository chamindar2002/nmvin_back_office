<?php

require 'nmoffice/om/BaseRoleActionPermissionRef.php';


/**
 * Skeleton subclass for representing a row from the 'role_action_permission_ref' table.
 *
 * Role - Action_Permission Mapping
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    nmoffice
 */
class RoleActionPermissionRef extends BaseRoleActionPermissionRef {

	/**
	 * Initializes internal state of RoleActionPermissionRef object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}
} // RoleActionPermissionRef
