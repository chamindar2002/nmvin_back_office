<?php

require 'nmoffice/om/BaseHousecategory.php';


/**
 * Skeleton subclass for representing a row from the 'housecategory' table.
 *
 * house category
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    nmoffice
 */
class Housecategory extends BaseHousecategory {

	/**
	 * Initializes internal state of Housecategory object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

} // Housecategory
