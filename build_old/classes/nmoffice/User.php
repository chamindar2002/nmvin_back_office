<?php
require 'nmoffice/om/BaseUser.php';


/**
 * Skeleton subclass for representing a row from the 'user' table.
 *
 * User
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.nmoffice
 */
class User extends BaseUser {

	/**
	 * Initializes internal state of User object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}
	
/**
   * Convenience method to fetch all related Roles objects.
   * @param Criteria $c An [optional] Criteria to limit results
   * @return array Role[]
   */
  public function getRoles($c = null) {
     $roles = array();
     
     foreach($this->getUserRoleRefsJoinRole($c) as $ref) {
        $roles[] = $ref->getRole();
     }
     
     return $roles;
  }
} // User
