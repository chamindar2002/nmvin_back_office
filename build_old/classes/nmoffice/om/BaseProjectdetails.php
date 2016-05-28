<?php

/**
 * Base class that represents a row from the 'projectdetails' table.
 *
 * project details
 *
 * @package    nmoffice.om
 */
abstract class BaseProjectdetails extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ProjectdetailsPeer
	 */
	protected static $peer;

	/**
	 * The value for the refno field.
	 * @var        int
	 */
	protected $refno;

	/**
	 * The value for the locationcode field.
	 * @var        int
	 */
	protected $locationcode;

	/**
	 * The value for the projectcode field.
	 * @var        int
	 */
	protected $projectcode;

	/**
	 * The value for the customercode field.
	 * @var        int
	 */
	protected $customercode;

	/**
	 * The value for the housecatcode field.
	 * @var        int
	 */
	protected $housecatcode;

	/**
	 * The value for the blocknumber field.
	 * @var        string
	 */
	protected $blocknumber;

	/**
	 * The value for the blocksize field.
	 * @var        double
	 */
	protected $blocksize;

	/**
	 * The value for the blockprice field.
	 * @var        double
	 */
	protected $blockprice;

	/**
	 * The value for the reservedate field.
	 * @var        string
	 */
	protected $reservedate;

	/**
	 * The value for the reservestatus field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $reservestatus;

	/**
	 * The value for the paymentmethod field.
	 * @var        int
	 */
	protected $paymentmethod;

	/**
	 * The value for the duedate field.
	 * @var        string
	 */
	protected $duedate;

	/**
	 * The value for the deleted field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $deleted;

	/**
	 * The value for the addedby field.
	 * @var        int
	 */
	protected $addedby;

	/**
	 * The value for the addeddate field.
	 * @var        string
	 */
	protected $addeddate;

	/**
	 * The value for the addedtime field.
	 * @var        string
	 */
	protected $addedtime;

	/**
	 * The value for the lastmodifiedby field.
	 * @var        int
	 */
	protected $lastmodifiedby;

	/**
	 * The value for the lastmodifieddate field.
	 * @var        string
	 */
	protected $lastmodifieddate;

	/**
	 * The value for the lastmodifiedtime field.
	 * @var        string
	 */
	protected $lastmodifiedtime;

	/**
	 * The value for the deletedby field.
	 * @var        int
	 */
	protected $deletedby;

	/**
	 * The value for the deleteddate field.
	 * @var        string
	 */
	protected $deleteddate;

	/**
	 * The value for the deletedtime field.
	 * @var        string
	 */
	protected $deletedtime;

	/**
	 * @var        Location
	 */
	protected $aLocation;

	/**
	 * @var        Project
	 */
	protected $aProject;

	/**
	 * @var        Customerdetails
	 */
	protected $aCustomerdetails;

	/**
	 * @var        Housecategory
	 */
	protected $aHousecategory;

	/**
	 * @var        array Sales[] Collection to store aggregation of Sales objects.
	 */
	protected $collSaless;

	/**
	 * @var        Criteria The criteria used to select the current contents of collSaless.
	 */
	private $lastSalesCriteria = null;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->reservestatus = 0;
		$this->deleted = false;
	}

	/**
	 * Initializes internal state of BaseProjectdetails object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [refno] column value.
	 * Project details refno
	 * @return     int
	 */
	public function getRefno()
	{
		return $this->refno;
	}

	/**
	 * Get the [locationcode] column value.
	 * Location Code
	 * @return     int
	 */
	public function getLocationcode()
	{
		return $this->locationcode;
	}

	/**
	 * Get the [projectcode] column value.
	 * project code
	 * @return     int
	 */
	public function getProjectcode()
	{
		return $this->projectcode;
	}

	/**
	 * Get the [customercode] column value.
	 * customer code
	 * @return     int
	 */
	public function getCustomercode()
	{
		return $this->customercode;
	}

	/**
	 * Get the [housecatcode] column value.
	 * house category code
	 * @return     int
	 */
	public function getHousecatcode()
	{
		return $this->housecatcode;
	}

	/**
	 * Get the [blocknumber] column value.
	 * block no
	 * @return     string
	 */
	public function getBlocknumber()
	{
		return $this->blocknumber;
	}

	/**
	 * Get the [blocksize] column value.
	 * size of block (percheses)
	 * @return     double
	 */
	public function getBlocksize()
	{
		return $this->blocksize;
	}

	/**
	 * Get the [blockprice] column value.
	 * price of block
	 * @return     double
	 */
	public function getBlockprice()
	{
		return $this->blockprice;
	}

	/**
	 * Get the [optionally formatted] temporal [reservedate] column value.
	 * Date of reservation
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getReservedate($format = '%x')
	{
		if ($this->reservedate === null) {
			return null;
		}


		if ($this->reservedate === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->reservedate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->reservedate, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [reservestatus] column value.
	 * reservation status 0:unavailable,1:reserved,2:soldout,3:notforsale 
	 * @return     int
	 */
	public function getReservestatus()
	{
		return $this->reservestatus;
	}

	/**
	 * Get the [paymentmethod] column value.
	 * method of payment 1=installmnet,2=bankloan,...
	 * @return     int
	 */
	public function getPaymentmethod()
	{
		return $this->paymentmethod;
	}

	/**
	 * Get the [optionally formatted] temporal [duedate] column value.
	 * due date
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDuedate($format = '%x')
	{
		if ($this->duedate === null) {
			return null;
		}


		if ($this->duedate === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->duedate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->duedate, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [deleted] column value.
	 * Record deleted
	 * @return     boolean
	 */
	public function getDeleted()
	{
		return $this->deleted;
	}

	/**
	 * Get the [addedby] column value.
	 * Added by
	 * @return     int
	 */
	public function getAddedby()
	{
		return $this->addedby;
	}

	/**
	 * Get the [optionally formatted] temporal [addeddate] column value.
	 * Added date
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAddeddate($format = '%x')
	{
		if ($this->addeddate === null) {
			return null;
		}


		if ($this->addeddate === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->addeddate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->addeddate, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [addedtime] column value.
	 * Added time
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAddedtime($format = '%X')
	{
		if ($this->addedtime === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->addedtime);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->addedtime, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [lastmodifiedby] column value.
	 * Last modified by
	 * @return     int
	 */
	public function getLastmodifiedby()
	{
		return $this->lastmodifiedby;
	}

	/**
	 * Get the [optionally formatted] temporal [lastmodifieddate] column value.
	 * Last modified date
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLastmodifieddate($format = '%x')
	{
		if ($this->lastmodifieddate === null) {
			return null;
		}


		if ($this->lastmodifieddate === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->lastmodifieddate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastmodifieddate, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [lastmodifiedtime] column value.
	 * Last modified time
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLastmodifiedtime($format = '%X')
	{
		if ($this->lastmodifiedtime === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->lastmodifiedtime);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastmodifiedtime, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [deletedby] column value.
	 * Deleted by
	 * @return     int
	 */
	public function getDeletedby()
	{
		return $this->deletedby;
	}

	/**
	 * Get the [optionally formatted] temporal [deleteddate] column value.
	 * Deleted Date
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDeleteddate($format = '%x')
	{
		if ($this->deleteddate === null) {
			return null;
		}


		if ($this->deleteddate === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->deleteddate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->deleteddate, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [deletedtime] column value.
	 * Deleted Time
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDeletedtime($format = '%X')
	{
		if ($this->deletedtime === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->deletedtime);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->deletedtime, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Set the value of [refno] column.
	 * Project details refno
	 * @param      int $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setRefno($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->refno !== $v) {
			$this->refno = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::REFNO;
		}

		return $this;
	} // setRefno()

	/**
	 * Set the value of [locationcode] column.
	 * Location Code
	 * @param      int $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setLocationcode($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->locationcode !== $v) {
			$this->locationcode = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::LOCATIONCODE;
		}

		if ($this->aLocation !== null && $this->aLocation->getLocationcode() !== $v) {
			$this->aLocation = null;
		}

		return $this;
	} // setLocationcode()

	/**
	 * Set the value of [projectcode] column.
	 * project code
	 * @param      int $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setProjectcode($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->projectcode !== $v) {
			$this->projectcode = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::PROJECTCODE;
		}

		if ($this->aProject !== null && $this->aProject->getProjectcode() !== $v) {
			$this->aProject = null;
		}

		return $this;
	} // setProjectcode()

	/**
	 * Set the value of [customercode] column.
	 * customer code
	 * @param      int $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setCustomercode($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->customercode !== $v) {
			$this->customercode = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::CUSTOMERCODE;
		}

		if ($this->aCustomerdetails !== null && $this->aCustomerdetails->getCustomercode() !== $v) {
			$this->aCustomerdetails = null;
		}

		return $this;
	} // setCustomercode()

	/**
	 * Set the value of [housecatcode] column.
	 * house category code
	 * @param      int $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setHousecatcode($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->housecatcode !== $v) {
			$this->housecatcode = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::HOUSECATCODE;
		}

		if ($this->aHousecategory !== null && $this->aHousecategory->getHousecatcode() !== $v) {
			$this->aHousecategory = null;
		}

		return $this;
	} // setHousecatcode()

	/**
	 * Set the value of [blocknumber] column.
	 * block no
	 * @param      string $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setBlocknumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->blocknumber !== $v) {
			$this->blocknumber = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::BLOCKNUMBER;
		}

		return $this;
	} // setBlocknumber()

	/**
	 * Set the value of [blocksize] column.
	 * size of block (percheses)
	 * @param      double $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setBlocksize($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->blocksize !== $v) {
			$this->blocksize = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::BLOCKSIZE;
		}

		return $this;
	} // setBlocksize()

	/**
	 * Set the value of [blockprice] column.
	 * price of block
	 * @param      double $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setBlockprice($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->blockprice !== $v) {
			$this->blockprice = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::BLOCKPRICE;
		}

		return $this;
	} // setBlockprice()

	/**
	 * Sets the value of [reservedate] column to a normalized version of the date/time value specified.
	 * Date of reservation
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setReservedate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->reservedate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->reservedate !== null && $tmpDt = new DateTime($this->reservedate)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->reservedate = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = ProjectdetailsPeer::RESERVEDATE;
			}
		} // if either are not null

		return $this;
	} // setReservedate()

	/**
	 * Set the value of [reservestatus] column.
	 * reservation status 0:unavailable,1:reserved,2:soldout,3:notforsale 
	 * @param      int $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setReservestatus($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->reservestatus !== $v || $this->isNew()) {
			$this->reservestatus = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::RESERVESTATUS;
		}

		return $this;
	} // setReservestatus()

	/**
	 * Set the value of [paymentmethod] column.
	 * method of payment 1=installmnet,2=bankloan,...
	 * @param      int $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setPaymentmethod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->paymentmethod !== $v) {
			$this->paymentmethod = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::PAYMENTMETHOD;
		}

		return $this;
	} // setPaymentmethod()

	/**
	 * Sets the value of [duedate] column to a normalized version of the date/time value specified.
	 * due date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setDuedate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->duedate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->duedate !== null && $tmpDt = new DateTime($this->duedate)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->duedate = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = ProjectdetailsPeer::DUEDATE;
			}
		} // if either are not null

		return $this;
	} // setDuedate()

	/**
	 * Set the value of [deleted] column.
	 * Record deleted
	 * @param      boolean $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setDeleted($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->deleted !== $v || $this->isNew()) {
			$this->deleted = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::DELETED;
		}

		return $this;
	} // setDeleted()

	/**
	 * Set the value of [addedby] column.
	 * Added by
	 * @param      int $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setAddedby($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->addedby !== $v) {
			$this->addedby = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::ADDEDBY;
		}

		return $this;
	} // setAddedby()

	/**
	 * Sets the value of [addeddate] column to a normalized version of the date/time value specified.
	 * Added date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setAddeddate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->addeddate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->addeddate !== null && $tmpDt = new DateTime($this->addeddate)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->addeddate = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = ProjectdetailsPeer::ADDEDDATE;
			}
		} // if either are not null

		return $this;
	} // setAddeddate()

	/**
	 * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
	 * Added time
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setAddedtime($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->addedtime !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->addedtime !== null && $tmpDt = new DateTime($this->addedtime)) ? $tmpDt->format('H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->addedtime = ($dt ? $dt->format('H:i:s') : null);
				$this->modifiedColumns[] = ProjectdetailsPeer::ADDEDTIME;
			}
		} // if either are not null

		return $this;
	} // setAddedtime()

	/**
	 * Set the value of [lastmodifiedby] column.
	 * Last modified by
	 * @param      int $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setLastmodifiedby($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->lastmodifiedby !== $v) {
			$this->lastmodifiedby = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::LASTMODIFIEDBY;
		}

		return $this;
	} // setLastmodifiedby()

	/**
	 * Sets the value of [lastmodifieddate] column to a normalized version of the date/time value specified.
	 * Last modified date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setLastmodifieddate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->lastmodifieddate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->lastmodifieddate !== null && $tmpDt = new DateTime($this->lastmodifieddate)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->lastmodifieddate = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = ProjectdetailsPeer::LASTMODIFIEDDATE;
			}
		} // if either are not null

		return $this;
	} // setLastmodifieddate()

	/**
	 * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
	 * Last modified time
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setLastmodifiedtime($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->lastmodifiedtime !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->lastmodifiedtime !== null && $tmpDt = new DateTime($this->lastmodifiedtime)) ? $tmpDt->format('H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->lastmodifiedtime = ($dt ? $dt->format('H:i:s') : null);
				$this->modifiedColumns[] = ProjectdetailsPeer::LASTMODIFIEDTIME;
			}
		} // if either are not null

		return $this;
	} // setLastmodifiedtime()

	/**
	 * Set the value of [deletedby] column.
	 * Deleted by
	 * @param      int $v new value
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setDeletedby($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->deletedby !== $v) {
			$this->deletedby = $v;
			$this->modifiedColumns[] = ProjectdetailsPeer::DELETEDBY;
		}

		return $this;
	} // setDeletedby()

	/**
	 * Sets the value of [deleteddate] column to a normalized version of the date/time value specified.
	 * Deleted Date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setDeleteddate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->deleteddate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->deleteddate !== null && $tmpDt = new DateTime($this->deleteddate)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->deleteddate = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = ProjectdetailsPeer::DELETEDDATE;
			}
		} // if either are not null

		return $this;
	} // setDeleteddate()

	/**
	 * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
	 * Deleted Time
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Projectdetails The current object (for fluent API support)
	 */
	public function setDeletedtime($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->deletedtime !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->deletedtime !== null && $tmpDt = new DateTime($this->deletedtime)) ? $tmpDt->format('H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->deletedtime = ($dt ? $dt->format('H:i:s') : null);
				$this->modifiedColumns[] = ProjectdetailsPeer::DELETEDTIME;
			}
		} // if either are not null

		return $this;
	} // setDeletedtime()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->reservestatus !== 0) {
				return false;
			}

			if ($this->deleted !== false) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->refno = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->locationcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->projectcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->customercode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->housecatcode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->blocknumber = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->blocksize = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
			$this->blockprice = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
			$this->reservedate = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->reservestatus = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->paymentmethod = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->duedate = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->deleted = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
			$this->addedby = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->addeddate = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->addedtime = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->lastmodifiedby = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->lastmodifieddate = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->lastmodifiedtime = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->deletedby = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->deleteddate = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->deletedtime = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 22; // 22 = ProjectdetailsPeer::NUM_COLUMNS - ProjectdetailsPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Projectdetails object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aLocation !== null && $this->locationcode !== $this->aLocation->getLocationcode()) {
			$this->aLocation = null;
		}
		if ($this->aProject !== null && $this->projectcode !== $this->aProject->getProjectcode()) {
			$this->aProject = null;
		}
		if ($this->aCustomerdetails !== null && $this->customercode !== $this->aCustomerdetails->getCustomercode()) {
			$this->aCustomerdetails = null;
		}
		if ($this->aHousecategory !== null && $this->housecatcode !== $this->aHousecategory->getHousecatcode()) {
			$this->aHousecategory = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProjectdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ProjectdetailsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aLocation = null;
			$this->aProject = null;
			$this->aCustomerdetails = null;
			$this->aHousecategory = null;
			$this->collSaless = null;
			$this->lastSalesCriteria = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProjectdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ProjectdetailsPeer::doDelete($this, $con);
				$this->postDelete($con);
				$this->setDeleted(true);
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProjectdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				$con->commit();
				ProjectdetailsPeer::addInstanceToPool($this);
				return $affectedRows;
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aLocation !== null) {
				if ($this->aLocation->isModified() || $this->aLocation->isNew()) {
					$affectedRows += $this->aLocation->save($con);
				}
				$this->setLocation($this->aLocation);
			}

			if ($this->aProject !== null) {
				if ($this->aProject->isModified() || $this->aProject->isNew()) {
					$affectedRows += $this->aProject->save($con);
				}
				$this->setProject($this->aProject);
			}

			if ($this->aCustomerdetails !== null) {
				if ($this->aCustomerdetails->isModified() || $this->aCustomerdetails->isNew()) {
					$affectedRows += $this->aCustomerdetails->save($con);
				}
				$this->setCustomerdetails($this->aCustomerdetails);
			}

			if ($this->aHousecategory !== null) {
				if ($this->aHousecategory->isModified() || $this->aHousecategory->isNew()) {
					$affectedRows += $this->aHousecategory->save($con);
				}
				$this->setHousecategory($this->aHousecategory);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ProjectdetailsPeer::REFNO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ProjectdetailsPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setRefno($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += ProjectdetailsPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collSaless !== null) {
				foreach ($this->collSaless as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aLocation !== null) {
				if (!$this->aLocation->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aLocation->getValidationFailures());
				}
			}

			if ($this->aProject !== null) {
				if (!$this->aProject->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProject->getValidationFailures());
				}
			}

			if ($this->aCustomerdetails !== null) {
				if (!$this->aCustomerdetails->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCustomerdetails->getValidationFailures());
				}
			}

			if ($this->aHousecategory !== null) {
				if (!$this->aHousecategory->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aHousecategory->getValidationFailures());
				}
			}


			if (($retval = ProjectdetailsPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collSaless !== null) {
					foreach ($this->collSaless as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ProjectdetailsPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProjectdetailsPeer::REFNO)) $criteria->add(ProjectdetailsPeer::REFNO, $this->refno);
		if ($this->isColumnModified(ProjectdetailsPeer::LOCATIONCODE)) $criteria->add(ProjectdetailsPeer::LOCATIONCODE, $this->locationcode);
		if ($this->isColumnModified(ProjectdetailsPeer::PROJECTCODE)) $criteria->add(ProjectdetailsPeer::PROJECTCODE, $this->projectcode);
		if ($this->isColumnModified(ProjectdetailsPeer::CUSTOMERCODE)) $criteria->add(ProjectdetailsPeer::CUSTOMERCODE, $this->customercode);
		if ($this->isColumnModified(ProjectdetailsPeer::HOUSECATCODE)) $criteria->add(ProjectdetailsPeer::HOUSECATCODE, $this->housecatcode);
		if ($this->isColumnModified(ProjectdetailsPeer::BLOCKNUMBER)) $criteria->add(ProjectdetailsPeer::BLOCKNUMBER, $this->blocknumber);
		if ($this->isColumnModified(ProjectdetailsPeer::BLOCKSIZE)) $criteria->add(ProjectdetailsPeer::BLOCKSIZE, $this->blocksize);
		if ($this->isColumnModified(ProjectdetailsPeer::BLOCKPRICE)) $criteria->add(ProjectdetailsPeer::BLOCKPRICE, $this->blockprice);
		if ($this->isColumnModified(ProjectdetailsPeer::RESERVEDATE)) $criteria->add(ProjectdetailsPeer::RESERVEDATE, $this->reservedate);
		if ($this->isColumnModified(ProjectdetailsPeer::RESERVESTATUS)) $criteria->add(ProjectdetailsPeer::RESERVESTATUS, $this->reservestatus);
		if ($this->isColumnModified(ProjectdetailsPeer::PAYMENTMETHOD)) $criteria->add(ProjectdetailsPeer::PAYMENTMETHOD, $this->paymentmethod);
		if ($this->isColumnModified(ProjectdetailsPeer::DUEDATE)) $criteria->add(ProjectdetailsPeer::DUEDATE, $this->duedate);
		if ($this->isColumnModified(ProjectdetailsPeer::DELETED)) $criteria->add(ProjectdetailsPeer::DELETED, $this->deleted);
		if ($this->isColumnModified(ProjectdetailsPeer::ADDEDBY)) $criteria->add(ProjectdetailsPeer::ADDEDBY, $this->addedby);
		if ($this->isColumnModified(ProjectdetailsPeer::ADDEDDATE)) $criteria->add(ProjectdetailsPeer::ADDEDDATE, $this->addeddate);
		if ($this->isColumnModified(ProjectdetailsPeer::ADDEDTIME)) $criteria->add(ProjectdetailsPeer::ADDEDTIME, $this->addedtime);
		if ($this->isColumnModified(ProjectdetailsPeer::LASTMODIFIEDBY)) $criteria->add(ProjectdetailsPeer::LASTMODIFIEDBY, $this->lastmodifiedby);
		if ($this->isColumnModified(ProjectdetailsPeer::LASTMODIFIEDDATE)) $criteria->add(ProjectdetailsPeer::LASTMODIFIEDDATE, $this->lastmodifieddate);
		if ($this->isColumnModified(ProjectdetailsPeer::LASTMODIFIEDTIME)) $criteria->add(ProjectdetailsPeer::LASTMODIFIEDTIME, $this->lastmodifiedtime);
		if ($this->isColumnModified(ProjectdetailsPeer::DELETEDBY)) $criteria->add(ProjectdetailsPeer::DELETEDBY, $this->deletedby);
		if ($this->isColumnModified(ProjectdetailsPeer::DELETEDDATE)) $criteria->add(ProjectdetailsPeer::DELETEDDATE, $this->deleteddate);
		if ($this->isColumnModified(ProjectdetailsPeer::DELETEDTIME)) $criteria->add(ProjectdetailsPeer::DELETEDTIME, $this->deletedtime);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProjectdetailsPeer::DATABASE_NAME);

		$criteria->add(ProjectdetailsPeer::REFNO, $this->refno);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getRefno();
	}

	/**
	 * Generic method to set the primary key (refno column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setRefno($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Projectdetails (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setLocationcode($this->locationcode);

		$copyObj->setProjectcode($this->projectcode);

		$copyObj->setCustomercode($this->customercode);

		$copyObj->setHousecatcode($this->housecatcode);

		$copyObj->setBlocknumber($this->blocknumber);

		$copyObj->setBlocksize($this->blocksize);

		$copyObj->setBlockprice($this->blockprice);

		$copyObj->setReservedate($this->reservedate);

		$copyObj->setReservestatus($this->reservestatus);

		$copyObj->setPaymentmethod($this->paymentmethod);

		$copyObj->setDuedate($this->duedate);

		$copyObj->setDeleted($this->deleted);

		$copyObj->setAddedby($this->addedby);

		$copyObj->setAddeddate($this->addeddate);

		$copyObj->setAddedtime($this->addedtime);

		$copyObj->setLastmodifiedby($this->lastmodifiedby);

		$copyObj->setLastmodifieddate($this->lastmodifieddate);

		$copyObj->setLastmodifiedtime($this->lastmodifiedtime);

		$copyObj->setDeletedby($this->deletedby);

		$copyObj->setDeleteddate($this->deleteddate);

		$copyObj->setDeletedtime($this->deletedtime);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getSaless() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addSales($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);

		$copyObj->setRefno(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Projectdetails Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     ProjectdetailsPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ProjectdetailsPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Location object.
	 *
	 * @param      Location $v
	 * @return     Projectdetails The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setLocation(Location $v = null)
	{
		if ($v === null) {
			$this->setLocationcode(NULL);
		} else {
			$this->setLocationcode($v->getLocationcode());
		}

		$this->aLocation = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Location object, it will not be re-added.
		if ($v !== null) {
			$v->addProjectdetails($this);
		}

		return $this;
	}


	/**
	 * Get the associated Location object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Location The associated Location object.
	 * @throws     PropelException
	 */
	public function getLocation(PropelPDO $con = null)
	{
		if ($this->aLocation === null && ($this->locationcode !== null)) {
			$this->aLocation = LocationPeer::retrieveByPk($this->locationcode);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aLocation->addProjectdetailss($this);
			 */
		}
		return $this->aLocation;
	}

	/**
	 * Declares an association between this object and a Project object.
	 *
	 * @param      Project $v
	 * @return     Projectdetails The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setProject(Project $v = null)
	{
		if ($v === null) {
			$this->setProjectcode(NULL);
		} else {
			$this->setProjectcode($v->getProjectcode());
		}

		$this->aProject = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Project object, it will not be re-added.
		if ($v !== null) {
			$v->addProjectdetails($this);
		}

		return $this;
	}


	/**
	 * Get the associated Project object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Project The associated Project object.
	 * @throws     PropelException
	 */
	public function getProject(PropelPDO $con = null)
	{
		if ($this->aProject === null && ($this->projectcode !== null)) {
			$this->aProject = ProjectPeer::retrieveByPk($this->projectcode);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aProject->addProjectdetailss($this);
			 */
		}
		return $this->aProject;
	}

	/**
	 * Declares an association between this object and a Customerdetails object.
	 *
	 * @param      Customerdetails $v
	 * @return     Projectdetails The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCustomerdetails(Customerdetails $v = null)
	{
		if ($v === null) {
			$this->setCustomercode(NULL);
		} else {
			$this->setCustomercode($v->getCustomercode());
		}

		$this->aCustomerdetails = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Customerdetails object, it will not be re-added.
		if ($v !== null) {
			$v->addProjectdetails($this);
		}

		return $this;
	}


	/**
	 * Get the associated Customerdetails object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Customerdetails The associated Customerdetails object.
	 * @throws     PropelException
	 */
	public function getCustomerdetails(PropelPDO $con = null)
	{
		if ($this->aCustomerdetails === null && ($this->customercode !== null)) {
			$this->aCustomerdetails = CustomerdetailsPeer::retrieveByPk($this->customercode);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCustomerdetails->addProjectdetailss($this);
			 */
		}
		return $this->aCustomerdetails;
	}

	/**
	 * Declares an association between this object and a Housecategory object.
	 *
	 * @param      Housecategory $v
	 * @return     Projectdetails The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setHousecategory(Housecategory $v = null)
	{
		if ($v === null) {
			$this->setHousecatcode(NULL);
		} else {
			$this->setHousecatcode($v->getHousecatcode());
		}

		$this->aHousecategory = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Housecategory object, it will not be re-added.
		if ($v !== null) {
			$v->addProjectdetails($this);
		}

		return $this;
	}


	/**
	 * Get the associated Housecategory object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Housecategory The associated Housecategory object.
	 * @throws     PropelException
	 */
	public function getHousecategory(PropelPDO $con = null)
	{
		if ($this->aHousecategory === null && ($this->housecatcode !== null)) {
			$this->aHousecategory = HousecategoryPeer::retrieveByPk($this->housecatcode);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aHousecategory->addProjectdetailss($this);
			 */
		}
		return $this->aHousecategory;
	}

	/**
	 * Clears out the collSaless collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addSaless()
	 */
	public function clearSaless()
	{
		$this->collSaless = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collSaless collection (array).
	 *
	 * By default this just sets the collSaless collection to an empty array (like clearcollSaless());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initSaless()
	{
		$this->collSaless = array();
	}

	/**
	 * Gets an array of Sales objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this Projectdetails has previously been saved, it will retrieve
	 * related Saless from storage. If this Projectdetails is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array Sales[]
	 * @throws     PropelException
	 */
	public function getSaless($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ProjectdetailsPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSaless === null) {
			if ($this->isNew()) {
			   $this->collSaless = array();
			} else {

				$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

				SalesPeer::addSelectColumns($criteria);
				$this->collSaless = SalesPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

				SalesPeer::addSelectColumns($criteria);
				if (!isset($this->lastSalesCriteria) || !$this->lastSalesCriteria->equals($criteria)) {
					$this->collSaless = SalesPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSalesCriteria = $criteria;
		return $this->collSaless;
	}

	/**
	 * Returns the number of related Sales objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Sales objects.
	 * @throws     PropelException
	 */
	public function countSaless(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ProjectdetailsPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collSaless === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

				$count = SalesPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

				if (!isset($this->lastSalesCriteria) || !$this->lastSalesCriteria->equals($criteria)) {
					$count = SalesPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collSaless);
				}
			} else {
				$count = count($this->collSaless);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a Sales object to this object
	 * through the Sales foreign key attribute.
	 *
	 * @param      Sales $l Sales
	 * @return     void
	 * @throws     PropelException
	 */
	public function addSales(Sales $l)
	{
		if ($this->collSaless === null) {
			$this->initSaless();
		}
		if (!in_array($l, $this->collSaless, true)) { // only add it if the **same** object is not already associated
			array_push($this->collSaless, $l);
			$l->setProjectdetails($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Projectdetails is new, it will return
	 * an empty collection; or if this Projectdetails has previously
	 * been saved, it will retrieve related Saless from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Projectdetails.
	 */
	public function getSalessJoinCustomerdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ProjectdetailsPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSaless === null) {
			if ($this->isNew()) {
				$this->collSaless = array();
			} else {

				$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

				$this->collSaless = SalesPeer::doSelectJoinCustomerdetails($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

			if (!isset($this->lastSalesCriteria) || !$this->lastSalesCriteria->equals($criteria)) {
				$this->collSaless = SalesPeer::doSelectJoinCustomerdetails($criteria, $con, $join_behavior);
			}
		}
		$this->lastSalesCriteria = $criteria;

		return $this->collSaless;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Projectdetails is new, it will return
	 * an empty collection; or if this Projectdetails has previously
	 * been saved, it will retrieve related Saless from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Projectdetails.
	 */
	public function getSalessJoinPaymentplan($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ProjectdetailsPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSaless === null) {
			if ($this->isNew()) {
				$this->collSaless = array();
			} else {

				$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

				$this->collSaless = SalesPeer::doSelectJoinPaymentplan($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

			if (!isset($this->lastSalesCriteria) || !$this->lastSalesCriteria->equals($criteria)) {
				$this->collSaless = SalesPeer::doSelectJoinPaymentplan($criteria, $con, $join_behavior);
			}
		}
		$this->lastSalesCriteria = $criteria;

		return $this->collSaless;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Projectdetails is new, it will return
	 * an empty collection; or if this Projectdetails has previously
	 * been saved, it will retrieve related Saless from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Projectdetails.
	 */
	public function getSalessJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ProjectdetailsPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSaless === null) {
			if ($this->isNew()) {
				$this->collSaless = array();
			} else {

				$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

				$this->collSaless = SalesPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

			if (!isset($this->lastSalesCriteria) || !$this->lastSalesCriteria->equals($criteria)) {
				$this->collSaless = SalesPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		}
		$this->lastSalesCriteria = $criteria;

		return $this->collSaless;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Projectdetails is new, it will return
	 * an empty collection; or if this Projectdetails has previously
	 * been saved, it will retrieve related Saless from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Projectdetails.
	 */
	public function getSalessJoinLocation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ProjectdetailsPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSaless === null) {
			if ($this->isNew()) {
				$this->collSaless = array();
			} else {

				$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

				$this->collSaless = SalesPeer::doSelectJoinLocation($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(SalesPeer::BLOCKREFNUMBER, $this->refno);

			if (!isset($this->lastSalesCriteria) || !$this->lastSalesCriteria->equals($criteria)) {
				$this->collSaless = SalesPeer::doSelectJoinLocation($criteria, $con, $join_behavior);
			}
		}
		$this->lastSalesCriteria = $criteria;

		return $this->collSaless;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collSaless) {
				foreach ((array) $this->collSaless as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collSaless = null;
			$this->aLocation = null;
			$this->aProject = null;
			$this->aCustomerdetails = null;
			$this->aHousecategory = null;
	}

} // BaseProjectdetails
