<?php

require 'nmoffice/om/BaseCustomerreceipts.php';


/**
 * Skeleton subclass for representing a row from the 'customerreceipts' table.
 *
 * customer payment receipts
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    nmoffice
 */
class Customerreceipts extends BaseCustomerreceipts {

	/**
	 * Initializes internal state of Customerreceipts object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

} // Customerreceipts
