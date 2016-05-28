<?php

require 'nmoffice/om/BaseSales.php';


/**
 * Skeleton subclass for representing a row from the 'sales' table.
 *
 * house sales of projects
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    nmoffice
 */
class Sales extends BaseSales {

	/**
	 * Initializes internal state of Sales object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

} // Sales
