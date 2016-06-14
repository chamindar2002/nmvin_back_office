<?php

/**
 * Base class that represents a row from the 'sales' table.
 *
 * house sales of projects
 *
 * @package    nmoffice.om
 */
abstract class BaseSales extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SalesPeer
	 */
	protected static $peer;

	/**
	 * The value for the refno field.
	 * @var        int
	 */
	protected $refno;

	/**
	 * The value for the customercode field.
	 * @var        int
	 */
	protected $customercode;

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
	 * The value for the blockrefnumber field.
	 * @var        int
	 */
	protected $blockrefnumber;

	/**
	 * The value for the payplanrefno field.
	 * @var        int
	 */
	protected $payplanrefno;

	/**
	 * The value for the nofinstallments field.
	 * @var        int
	 */
	protected $nofinstallments;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the installamount field.
	 * @var        double
	 */
	protected $installamount;

	/**
	 * The value for the totalpayable field.
	 * @var        double
	 */
	protected $totalpayable;

	/**
	 * The value for the paymentduedate field.
	 * @var        int
	 */
	protected $paymentduedate;

	/**
	 * The value for the agrementstartdate field.
	 * @var        string
	 */
	protected $agrementstartdate;

	/**
	 * The value for the agrementfinishdate field.
	 * @var        string
	 */
	protected $agrementfinishdate;

	/**
	 * The value for the saletype field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $saletype;

	/**
	 * The value for the salerightoff_amt field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $salerightoff_amt;

	/**
	 * The value for the salerightoff_status field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $salerightoff_status;

	/**
	 * The value for the salerightoff_comment field.
	 * @var        string
	 */
	protected $salerightoff_comment;

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
	 * @var        Customerdetails
	 */
	protected $aCustomerdetails;

	/**
	 * @var        Projectdetails
	 */
	protected $aProjectdetails;

	/**
	 * @var        Paymentplan
	 */
	protected $aPaymentplan;

	/**
	 * @var        Project
	 */
	protected $aProject;

	/**
	 * @var        Location
	 */
	protected $aLocation;

	/**
	 * @var        array Customerreceipts[] Collection to store aggregation of Customerreceipts objects.
	 */
	protected $collCustomerreceiptss;

	/**
	 * @var        Criteria The criteria used to select the current contents of collCustomerreceiptss.
	 */
	private $lastCustomerreceiptsCriteria = null;

	/**
	 * @var        array Refunds[] Collection to store aggregation of Refunds objects.
	 */
	protected $collRefundss;

	/**
	 * @var        Criteria The criteria used to select the current contents of collRefundss.
	 */
	private $lastRefundsCriteria = null;

	/**
	 * @var        array Tranferedbloks[] Collection to store aggregation of Tranferedbloks objects.
	 */
	protected $collTranferedblokss;

	/**
	 * @var        Criteria The criteria used to select the current contents of collTranferedblokss.
	 */
	private $lastTranferedbloksCriteria = null;

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
		$this->saletype = false;
		$this->salerightoff_amt = 0;
		$this->salerightoff_status = false;
		$this->deleted = false;
	}

	/**
	 * Initializes internal state of BaseSales object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [refno] column value.
	 * reference number
	 * @return     int
	 */
	public function getRefno()
	{
		return $this->refno;
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
	 * Get the [blockrefnumber] column value.
	 * block reference number
	 * @return     int
	 */
	public function getBlockrefnumber()
	{
		return $this->blockrefnumber;
	}

	/**
	 * Get the [payplanrefno] column value.
	 * payment plan reference number
	 * @return     int
	 */
	public function getPayplanrefno()
	{
		return $this->payplanrefno;
	}

	/**
	 * Get the [nofinstallments] column value.
	 * number of installments
	 * @return     int
	 */
	public function getNofinstallments()
	{
		return $this->nofinstallments;
	}

	/**
	 * Get the [description] column value.
	 * payment plan description
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [installamount] column value.
	 * Installment amount
	 * @return     double
	 */
	public function getInstallamount()
	{
		return $this->installamount;
	}

	/**
	 * Get the [totalpayable] column value.
	 * Total Amount Payable (nofinstallments * installamount)
	 * @return     double
	 */
	public function getTotalpayable()
	{
		return $this->totalpayable;
	}

	/**
	 * Get the [paymentduedate] column value.
	 * Payment due day (day of month)
	 * @return     int
	 */
	public function getPaymentduedate()
	{
		return $this->paymentduedate;
	}

	/**
	 * Get the [optionally formatted] temporal [agrementstartdate] column value.
	 * agreement start date
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAgrementstartdate($format = '%x')
	{
		if ($this->agrementstartdate === null) {
			return null;
		}


		if ($this->agrementstartdate === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->agrementstartdate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->agrementstartdate, true), $x);
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
	 * Get the [optionally formatted] temporal [agrementfinishdate] column value.
	 * agreement finish date
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAgrementfinishdate($format = '%x')
	{
		if ($this->agrementfinishdate === null) {
			return null;
		}


		if ($this->agrementfinishdate === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->agrementfinishdate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->agrementfinishdate, true), $x);
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
	 * Get the [saletype] column value.
	 * 0:office,1:online
	 * @return     boolean
	 */
	public function getSaletype()
	{
		return $this->saletype;
	}

	/**
	 * Get the [salerightoff_amt] column value.
	 * Sale Right Off Amount (discount on full settlement)
	 * @return     double
	 */
	public function getSalerightoffAmt()
	{
		return $this->salerightoff_amt;
	}

	/**
	 * Get the [salerightoff_status] column value.
	 * Sale Right Off Status
	 * @return     boolean
	 */
	public function getSalerightoffStatus()
	{
		return $this->salerightoff_status;
	}

	/**
	 * Get the [salerightoff_comment] column value.
	 * remarks of rightoff
	 * @return     string
	 */
	public function getSalerightoffComment()
	{
		return $this->salerightoff_comment;
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
	 * reference number
	 * @param      int $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setRefno($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->refno !== $v) {
			$this->refno = $v;
			$this->modifiedColumns[] = SalesPeer::REFNO;
		}

		return $this;
	} // setRefno()

	/**
	 * Set the value of [customercode] column.
	 * customer code
	 * @param      int $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setCustomercode($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->customercode !== $v) {
			$this->customercode = $v;
			$this->modifiedColumns[] = SalesPeer::CUSTOMERCODE;
		}

		if ($this->aCustomerdetails !== null && $this->aCustomerdetails->getCustomercode() !== $v) {
			$this->aCustomerdetails = null;
		}

		return $this;
	} // setCustomercode()

	/**
	 * Set the value of [locationcode] column.
	 * Location Code
	 * @param      int $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setLocationcode($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->locationcode !== $v) {
			$this->locationcode = $v;
			$this->modifiedColumns[] = SalesPeer::LOCATIONCODE;
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
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setProjectcode($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->projectcode !== $v) {
			$this->projectcode = $v;
			$this->modifiedColumns[] = SalesPeer::PROJECTCODE;
		}

		if ($this->aProject !== null && $this->aProject->getProjectcode() !== $v) {
			$this->aProject = null;
		}

		return $this;
	} // setProjectcode()

	/**
	 * Set the value of [blockrefnumber] column.
	 * block reference number
	 * @param      int $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setBlockrefnumber($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->blockrefnumber !== $v) {
			$this->blockrefnumber = $v;
			$this->modifiedColumns[] = SalesPeer::BLOCKREFNUMBER;
		}

		if ($this->aProjectdetails !== null && $this->aProjectdetails->getRefno() !== $v) {
			$this->aProjectdetails = null;
		}

		return $this;
	} // setBlockrefnumber()

	/**
	 * Set the value of [payplanrefno] column.
	 * payment plan reference number
	 * @param      int $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setPayplanrefno($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->payplanrefno !== $v) {
			$this->payplanrefno = $v;
			$this->modifiedColumns[] = SalesPeer::PAYPLANREFNO;
		}

		if ($this->aPaymentplan !== null && $this->aPaymentplan->getRefno() !== $v) {
			$this->aPaymentplan = null;
		}

		return $this;
	} // setPayplanrefno()

	/**
	 * Set the value of [nofinstallments] column.
	 * number of installments
	 * @param      int $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setNofinstallments($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nofinstallments !== $v) {
			$this->nofinstallments = $v;
			$this->modifiedColumns[] = SalesPeer::NOFINSTALLMENTS;
		}

		return $this;
	} // setNofinstallments()

	/**
	 * Set the value of [description] column.
	 * payment plan description
	 * @param      string $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = SalesPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [installamount] column.
	 * Installment amount
	 * @param      double $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setInstallamount($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->installamount !== $v) {
			$this->installamount = $v;
			$this->modifiedColumns[] = SalesPeer::INSTALLAMOUNT;
		}

		return $this;
	} // setInstallamount()

	/**
	 * Set the value of [totalpayable] column.
	 * Total Amount Payable (nofinstallments * installamount)
	 * @param      double $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setTotalpayable($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->totalpayable !== $v) {
			$this->totalpayable = $v;
			$this->modifiedColumns[] = SalesPeer::TOTALPAYABLE;
		}

		return $this;
	} // setTotalpayable()

	/**
	 * Set the value of [paymentduedate] column.
	 * Payment due day (day of month)
	 * @param      int $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setPaymentduedate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->paymentduedate !== $v) {
			$this->paymentduedate = $v;
			$this->modifiedColumns[] = SalesPeer::PAYMENTDUEDATE;
		}

		return $this;
	} // setPaymentduedate()

	/**
	 * Sets the value of [agrementstartdate] column to a normalized version of the date/time value specified.
	 * agreement start date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setAgrementstartdate($v)
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

		if ( $this->agrementstartdate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->agrementstartdate !== null && $tmpDt = new DateTime($this->agrementstartdate)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->agrementstartdate = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = SalesPeer::AGREMENTSTARTDATE;
			}
		} // if either are not null

		return $this;
	} // setAgrementstartdate()

	/**
	 * Sets the value of [agrementfinishdate] column to a normalized version of the date/time value specified.
	 * agreement finish date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setAgrementfinishdate($v)
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

		if ( $this->agrementfinishdate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->agrementfinishdate !== null && $tmpDt = new DateTime($this->agrementfinishdate)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->agrementfinishdate = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = SalesPeer::AGREMENTFINISHDATE;
			}
		} // if either are not null

		return $this;
	} // setAgrementfinishdate()

	/**
	 * Set the value of [saletype] column.
	 * 0:office,1:online
	 * @param      boolean $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setSaletype($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->saletype !== $v || $this->isNew()) {
			$this->saletype = $v;
			$this->modifiedColumns[] = SalesPeer::SALETYPE;
		}

		return $this;
	} // setSaletype()

	/**
	 * Set the value of [salerightoff_amt] column.
	 * Sale Right Off Amount (discount on full settlement)
	 * @param      double $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setSalerightoffAmt($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->salerightoff_amt !== $v || $this->isNew()) {
			$this->salerightoff_amt = $v;
			$this->modifiedColumns[] = SalesPeer::SALERIGHTOFF_AMT;
		}

		return $this;
	} // setSalerightoffAmt()

	/**
	 * Set the value of [salerightoff_status] column.
	 * Sale Right Off Status
	 * @param      boolean $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setSalerightoffStatus($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->salerightoff_status !== $v || $this->isNew()) {
			$this->salerightoff_status = $v;
			$this->modifiedColumns[] = SalesPeer::SALERIGHTOFF_STATUS;
		}

		return $this;
	} // setSalerightoffStatus()

	/**
	 * Set the value of [salerightoff_comment] column.
	 * remarks of rightoff
	 * @param      string $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setSalerightoffComment($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->salerightoff_comment !== $v) {
			$this->salerightoff_comment = $v;
			$this->modifiedColumns[] = SalesPeer::SALERIGHTOFF_COMMENT;
		}

		return $this;
	} // setSalerightoffComment()

	/**
	 * Set the value of [deleted] column.
	 * Record deleted
	 * @param      boolean $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setDeleted($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->deleted !== $v || $this->isNew()) {
			$this->deleted = $v;
			$this->modifiedColumns[] = SalesPeer::DELETED;
		}

		return $this;
	} // setDeleted()

	/**
	 * Set the value of [addedby] column.
	 * Added by
	 * @param      int $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setAddedby($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->addedby !== $v) {
			$this->addedby = $v;
			$this->modifiedColumns[] = SalesPeer::ADDEDBY;
		}

		return $this;
	} // setAddedby()

	/**
	 * Sets the value of [addeddate] column to a normalized version of the date/time value specified.
	 * Added date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Sales The current object (for fluent API support)
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
				$this->modifiedColumns[] = SalesPeer::ADDEDDATE;
			}
		} // if either are not null

		return $this;
	} // setAddeddate()

	/**
	 * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
	 * Added time
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Sales The current object (for fluent API support)
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
				$this->modifiedColumns[] = SalesPeer::ADDEDTIME;
			}
		} // if either are not null

		return $this;
	} // setAddedtime()

	/**
	 * Set the value of [lastmodifiedby] column.
	 * Last modified by
	 * @param      int $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setLastmodifiedby($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->lastmodifiedby !== $v) {
			$this->lastmodifiedby = $v;
			$this->modifiedColumns[] = SalesPeer::LASTMODIFIEDBY;
		}

		return $this;
	} // setLastmodifiedby()

	/**
	 * Sets the value of [lastmodifieddate] column to a normalized version of the date/time value specified.
	 * Last modified date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Sales The current object (for fluent API support)
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
				$this->modifiedColumns[] = SalesPeer::LASTMODIFIEDDATE;
			}
		} // if either are not null

		return $this;
	} // setLastmodifieddate()

	/**
	 * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
	 * Last modified time
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Sales The current object (for fluent API support)
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
				$this->modifiedColumns[] = SalesPeer::LASTMODIFIEDTIME;
			}
		} // if either are not null

		return $this;
	} // setLastmodifiedtime()

	/**
	 * Set the value of [deletedby] column.
	 * Deleted by
	 * @param      int $v new value
	 * @return     Sales The current object (for fluent API support)
	 */
	public function setDeletedby($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->deletedby !== $v) {
			$this->deletedby = $v;
			$this->modifiedColumns[] = SalesPeer::DELETEDBY;
		}

		return $this;
	} // setDeletedby()

	/**
	 * Sets the value of [deleteddate] column to a normalized version of the date/time value specified.
	 * Deleted Date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Sales The current object (for fluent API support)
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
				$this->modifiedColumns[] = SalesPeer::DELETEDDATE;
			}
		} // if either are not null

		return $this;
	} // setDeleteddate()

	/**
	 * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
	 * Deleted Time
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Sales The current object (for fluent API support)
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
				$this->modifiedColumns[] = SalesPeer::DELETEDTIME;
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
			if ($this->saletype !== false) {
				return false;
			}

			if ($this->salerightoff_amt !== 0) {
				return false;
			}

			if ($this->salerightoff_status !== false) {
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
			$this->customercode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->locationcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->projectcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->blockrefnumber = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->payplanrefno = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->nofinstallments = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->description = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->installamount = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
			$this->totalpayable = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
			$this->paymentduedate = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->agrementstartdate = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->agrementfinishdate = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->saletype = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
			$this->salerightoff_amt = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
			$this->salerightoff_status = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
			$this->salerightoff_comment = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->deleted = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
			$this->addedby = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
			$this->addeddate = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->addedtime = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->lastmodifiedby = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->lastmodifieddate = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->lastmodifiedtime = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->deletedby = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
			$this->deleteddate = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
			$this->deletedtime = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 27; // 27 = SalesPeer::NUM_COLUMNS - SalesPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Sales object", $e);
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

		if ($this->aCustomerdetails !== null && $this->customercode !== $this->aCustomerdetails->getCustomercode()) {
			$this->aCustomerdetails = null;
		}
		if ($this->aLocation !== null && $this->locationcode !== $this->aLocation->getLocationcode()) {
			$this->aLocation = null;
		}
		if ($this->aProject !== null && $this->projectcode !== $this->aProject->getProjectcode()) {
			$this->aProject = null;
		}
		if ($this->aProjectdetails !== null && $this->blockrefnumber !== $this->aProjectdetails->getRefno()) {
			$this->aProjectdetails = null;
		}
		if ($this->aPaymentplan !== null && $this->payplanrefno !== $this->aPaymentplan->getRefno()) {
			$this->aPaymentplan = null;
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
			$con = Propel::getConnection(SalesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SalesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCustomerdetails = null;
			$this->aProjectdetails = null;
			$this->aPaymentplan = null;
			$this->aProject = null;
			$this->aLocation = null;
			$this->collCustomerreceiptss = null;
			$this->lastCustomerreceiptsCriteria = null;

			$this->collRefundss = null;
			$this->lastRefundsCriteria = null;

			$this->collTranferedblokss = null;
			$this->lastTranferedbloksCriteria = null;

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
			$con = Propel::getConnection(SalesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				SalesPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SalesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				SalesPeer::addInstanceToPool($this);
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

			if ($this->aCustomerdetails !== null) {
				if ($this->aCustomerdetails->isModified() || $this->aCustomerdetails->isNew()) {
					$affectedRows += $this->aCustomerdetails->save($con);
				}
				$this->setCustomerdetails($this->aCustomerdetails);
			}

			if ($this->aProjectdetails !== null) {
				if ($this->aProjectdetails->isModified() || $this->aProjectdetails->isNew()) {
					$affectedRows += $this->aProjectdetails->save($con);
				}
				$this->setProjectdetails($this->aProjectdetails);
			}

			if ($this->aPaymentplan !== null) {
				if ($this->aPaymentplan->isModified() || $this->aPaymentplan->isNew()) {
					$affectedRows += $this->aPaymentplan->save($con);
				}
				$this->setPaymentplan($this->aPaymentplan);
			}

			if ($this->aProject !== null) {
				if ($this->aProject->isModified() || $this->aProject->isNew()) {
					$affectedRows += $this->aProject->save($con);
				}
				$this->setProject($this->aProject);
			}

			if ($this->aLocation !== null) {
				if ($this->aLocation->isModified() || $this->aLocation->isNew()) {
					$affectedRows += $this->aLocation->save($con);
				}
				$this->setLocation($this->aLocation);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = SalesPeer::REFNO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SalesPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setRefno($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += SalesPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collCustomerreceiptss !== null) {
				foreach ($this->collCustomerreceiptss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collRefundss !== null) {
				foreach ($this->collRefundss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTranferedblokss !== null) {
				foreach ($this->collTranferedblokss as $referrerFK) {
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

			if ($this->aCustomerdetails !== null) {
				if (!$this->aCustomerdetails->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCustomerdetails->getValidationFailures());
				}
			}

			if ($this->aProjectdetails !== null) {
				if (!$this->aProjectdetails->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProjectdetails->getValidationFailures());
				}
			}

			if ($this->aPaymentplan !== null) {
				if (!$this->aPaymentplan->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPaymentplan->getValidationFailures());
				}
			}

			if ($this->aProject !== null) {
				if (!$this->aProject->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProject->getValidationFailures());
				}
			}

			if ($this->aLocation !== null) {
				if (!$this->aLocation->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aLocation->getValidationFailures());
				}
			}


			if (($retval = SalesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCustomerreceiptss !== null) {
					foreach ($this->collCustomerreceiptss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collRefundss !== null) {
					foreach ($this->collRefundss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTranferedblokss !== null) {
					foreach ($this->collTranferedblokss as $referrerFK) {
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
		$criteria = new Criteria(SalesPeer::DATABASE_NAME);

		if ($this->isColumnModified(SalesPeer::REFNO)) $criteria->add(SalesPeer::REFNO, $this->refno);
		if ($this->isColumnModified(SalesPeer::CUSTOMERCODE)) $criteria->add(SalesPeer::CUSTOMERCODE, $this->customercode);
		if ($this->isColumnModified(SalesPeer::LOCATIONCODE)) $criteria->add(SalesPeer::LOCATIONCODE, $this->locationcode);
		if ($this->isColumnModified(SalesPeer::PROJECTCODE)) $criteria->add(SalesPeer::PROJECTCODE, $this->projectcode);
		if ($this->isColumnModified(SalesPeer::BLOCKREFNUMBER)) $criteria->add(SalesPeer::BLOCKREFNUMBER, $this->blockrefnumber);
		if ($this->isColumnModified(SalesPeer::PAYPLANREFNO)) $criteria->add(SalesPeer::PAYPLANREFNO, $this->payplanrefno);
		if ($this->isColumnModified(SalesPeer::NOFINSTALLMENTS)) $criteria->add(SalesPeer::NOFINSTALLMENTS, $this->nofinstallments);
		if ($this->isColumnModified(SalesPeer::DESCRIPTION)) $criteria->add(SalesPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(SalesPeer::INSTALLAMOUNT)) $criteria->add(SalesPeer::INSTALLAMOUNT, $this->installamount);
		if ($this->isColumnModified(SalesPeer::TOTALPAYABLE)) $criteria->add(SalesPeer::TOTALPAYABLE, $this->totalpayable);
		if ($this->isColumnModified(SalesPeer::PAYMENTDUEDATE)) $criteria->add(SalesPeer::PAYMENTDUEDATE, $this->paymentduedate);
		if ($this->isColumnModified(SalesPeer::AGREMENTSTARTDATE)) $criteria->add(SalesPeer::AGREMENTSTARTDATE, $this->agrementstartdate);
		if ($this->isColumnModified(SalesPeer::AGREMENTFINISHDATE)) $criteria->add(SalesPeer::AGREMENTFINISHDATE, $this->agrementfinishdate);
		if ($this->isColumnModified(SalesPeer::SALETYPE)) $criteria->add(SalesPeer::SALETYPE, $this->saletype);
		if ($this->isColumnModified(SalesPeer::SALERIGHTOFF_AMT)) $criteria->add(SalesPeer::SALERIGHTOFF_AMT, $this->salerightoff_amt);
		if ($this->isColumnModified(SalesPeer::SALERIGHTOFF_STATUS)) $criteria->add(SalesPeer::SALERIGHTOFF_STATUS, $this->salerightoff_status);
		if ($this->isColumnModified(SalesPeer::SALERIGHTOFF_COMMENT)) $criteria->add(SalesPeer::SALERIGHTOFF_COMMENT, $this->salerightoff_comment);
		if ($this->isColumnModified(SalesPeer::DELETED)) $criteria->add(SalesPeer::DELETED, $this->deleted);
		if ($this->isColumnModified(SalesPeer::ADDEDBY)) $criteria->add(SalesPeer::ADDEDBY, $this->addedby);
		if ($this->isColumnModified(SalesPeer::ADDEDDATE)) $criteria->add(SalesPeer::ADDEDDATE, $this->addeddate);
		if ($this->isColumnModified(SalesPeer::ADDEDTIME)) $criteria->add(SalesPeer::ADDEDTIME, $this->addedtime);
		if ($this->isColumnModified(SalesPeer::LASTMODIFIEDBY)) $criteria->add(SalesPeer::LASTMODIFIEDBY, $this->lastmodifiedby);
		if ($this->isColumnModified(SalesPeer::LASTMODIFIEDDATE)) $criteria->add(SalesPeer::LASTMODIFIEDDATE, $this->lastmodifieddate);
		if ($this->isColumnModified(SalesPeer::LASTMODIFIEDTIME)) $criteria->add(SalesPeer::LASTMODIFIEDTIME, $this->lastmodifiedtime);
		if ($this->isColumnModified(SalesPeer::DELETEDBY)) $criteria->add(SalesPeer::DELETEDBY, $this->deletedby);
		if ($this->isColumnModified(SalesPeer::DELETEDDATE)) $criteria->add(SalesPeer::DELETEDDATE, $this->deleteddate);
		if ($this->isColumnModified(SalesPeer::DELETEDTIME)) $criteria->add(SalesPeer::DELETEDTIME, $this->deletedtime);

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
		$criteria = new Criteria(SalesPeer::DATABASE_NAME);

		$criteria->add(SalesPeer::REFNO, $this->refno);

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
	 * @param      object $copyObj An object of Sales (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCustomercode($this->customercode);

		$copyObj->setLocationcode($this->locationcode);

		$copyObj->setProjectcode($this->projectcode);

		$copyObj->setBlockrefnumber($this->blockrefnumber);

		$copyObj->setPayplanrefno($this->payplanrefno);

		$copyObj->setNofinstallments($this->nofinstallments);

		$copyObj->setDescription($this->description);

		$copyObj->setInstallamount($this->installamount);

		$copyObj->setTotalpayable($this->totalpayable);

		$copyObj->setPaymentduedate($this->paymentduedate);

		$copyObj->setAgrementstartdate($this->agrementstartdate);

		$copyObj->setAgrementfinishdate($this->agrementfinishdate);

		$copyObj->setSaletype($this->saletype);

		$copyObj->setSalerightoffAmt($this->salerightoff_amt);

		$copyObj->setSalerightoffStatus($this->salerightoff_status);

		$copyObj->setSalerightoffComment($this->salerightoff_comment);

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

			foreach ($this->getCustomerreceiptss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCustomerreceipts($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getRefundss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addRefunds($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTranferedblokss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTranferedbloks($relObj->copy($deepCopy));
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
	 * @return     Sales Clone of current object.
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
	 * @return     SalesPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SalesPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Customerdetails object.
	 *
	 * @param      Customerdetails $v
	 * @return     Sales The current object (for fluent API support)
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
			$v->addSales($this);
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
			   $this->aCustomerdetails->addSaless($this);
			 */
		}
		return $this->aCustomerdetails;
	}

	/**
	 * Declares an association between this object and a Projectdetails object.
	 *
	 * @param      Projectdetails $v
	 * @return     Sales The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setProjectdetails(Projectdetails $v = null)
	{
		if ($v === null) {
			$this->setBlockrefnumber(NULL);
		} else {
			$this->setBlockrefnumber($v->getRefno());
		}

		$this->aProjectdetails = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Projectdetails object, it will not be re-added.
		if ($v !== null) {
			$v->addSales($this);
		}

		return $this;
	}


	/**
	 * Get the associated Projectdetails object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Projectdetails The associated Projectdetails object.
	 * @throws     PropelException
	 */
	public function getProjectdetails(PropelPDO $con = null)
	{
		if ($this->aProjectdetails === null && ($this->blockrefnumber !== null)) {
			$this->aProjectdetails = ProjectdetailsPeer::retrieveByPk($this->blockrefnumber);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aProjectdetails->addSaless($this);
			 */
		}
		return $this->aProjectdetails;
	}

	/**
	 * Declares an association between this object and a Paymentplan object.
	 *
	 * @param      Paymentplan $v
	 * @return     Sales The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPaymentplan(Paymentplan $v = null)
	{
		if ($v === null) {
			$this->setPayplanrefno(NULL);
		} else {
			$this->setPayplanrefno($v->getRefno());
		}

		$this->aPaymentplan = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Paymentplan object, it will not be re-added.
		if ($v !== null) {
			$v->addSales($this);
		}

		return $this;
	}


	/**
	 * Get the associated Paymentplan object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Paymentplan The associated Paymentplan object.
	 * @throws     PropelException
	 */
	public function getPaymentplan(PropelPDO $con = null)
	{
		if ($this->aPaymentplan === null && ($this->payplanrefno !== null)) {
			$this->aPaymentplan = PaymentplanPeer::retrieveByPk($this->payplanrefno);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aPaymentplan->addSaless($this);
			 */
		}
		return $this->aPaymentplan;
	}

	/**
	 * Declares an association between this object and a Project object.
	 *
	 * @param      Project $v
	 * @return     Sales The current object (for fluent API support)
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
			$v->addSales($this);
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
			   $this->aProject->addSaless($this);
			 */
		}
		return $this->aProject;
	}

	/**
	 * Declares an association between this object and a Location object.
	 *
	 * @param      Location $v
	 * @return     Sales The current object (for fluent API support)
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
			$v->addSales($this);
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
			   $this->aLocation->addSaless($this);
			 */
		}
		return $this->aLocation;
	}

	/**
	 * Clears out the collCustomerreceiptss collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCustomerreceiptss()
	 */
	public function clearCustomerreceiptss()
	{
		$this->collCustomerreceiptss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCustomerreceiptss collection (array).
	 *
	 * By default this just sets the collCustomerreceiptss collection to an empty array (like clearcollCustomerreceiptss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCustomerreceiptss()
	{
		$this->collCustomerreceiptss = array();
	}

	/**
	 * Gets an array of Customerreceipts objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this Sales has previously been saved, it will retrieve
	 * related Customerreceiptss from storage. If this Sales is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array Customerreceipts[]
	 * @throws     PropelException
	 */
	public function getCustomerreceiptss($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCustomerreceiptss === null) {
			if ($this->isNew()) {
			   $this->collCustomerreceiptss = array();
			} else {

				$criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->refno);

				CustomerreceiptsPeer::addSelectColumns($criteria);
				$this->collCustomerreceiptss = CustomerreceiptsPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->refno);

				CustomerreceiptsPeer::addSelectColumns($criteria);
				if (!isset($this->lastCustomerreceiptsCriteria) || !$this->lastCustomerreceiptsCriteria->equals($criteria)) {
					$this->collCustomerreceiptss = CustomerreceiptsPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCustomerreceiptsCriteria = $criteria;
		return $this->collCustomerreceiptss;
	}

	/**
	 * Returns the number of related Customerreceipts objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Customerreceipts objects.
	 * @throws     PropelException
	 */
	public function countCustomerreceiptss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collCustomerreceiptss === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->refno);

				$count = CustomerreceiptsPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->refno);

				if (!isset($this->lastCustomerreceiptsCriteria) || !$this->lastCustomerreceiptsCriteria->equals($criteria)) {
					$count = CustomerreceiptsPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collCustomerreceiptss);
				}
			} else {
				$count = count($this->collCustomerreceiptss);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a Customerreceipts object to this object
	 * through the Customerreceipts foreign key attribute.
	 *
	 * @param      Customerreceipts $l Customerreceipts
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCustomerreceipts(Customerreceipts $l)
	{
		if ($this->collCustomerreceiptss === null) {
			$this->initCustomerreceiptss();
		}
		if (!in_array($l, $this->collCustomerreceiptss, true)) { // only add it if the **same** object is not already associated
			array_push($this->collCustomerreceiptss, $l);
			$l->setSales($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Sales is new, it will return
	 * an empty collection; or if this Sales has previously
	 * been saved, it will retrieve related Customerreceiptss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sales.
	 */
	public function getCustomerreceiptssJoinLocation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCustomerreceiptss === null) {
			if ($this->isNew()) {
				$this->collCustomerreceiptss = array();
			} else {

				$criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->refno);

				$this->collCustomerreceiptss = CustomerreceiptsPeer::doSelectJoinLocation($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->refno);

			if (!isset($this->lastCustomerreceiptsCriteria) || !$this->lastCustomerreceiptsCriteria->equals($criteria)) {
				$this->collCustomerreceiptss = CustomerreceiptsPeer::doSelectJoinLocation($criteria, $con, $join_behavior);
			}
		}
		$this->lastCustomerreceiptsCriteria = $criteria;

		return $this->collCustomerreceiptss;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Sales is new, it will return
	 * an empty collection; or if this Sales has previously
	 * been saved, it will retrieve related Customerreceiptss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sales.
	 */
	public function getCustomerreceiptssJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCustomerreceiptss === null) {
			if ($this->isNew()) {
				$this->collCustomerreceiptss = array();
			} else {

				$criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->refno);

				$this->collCustomerreceiptss = CustomerreceiptsPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->refno);

			if (!isset($this->lastCustomerreceiptsCriteria) || !$this->lastCustomerreceiptsCriteria->equals($criteria)) {
				$this->collCustomerreceiptss = CustomerreceiptsPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		}
		$this->lastCustomerreceiptsCriteria = $criteria;

		return $this->collCustomerreceiptss;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Sales is new, it will return
	 * an empty collection; or if this Sales has previously
	 * been saved, it will retrieve related Customerreceiptss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sales.
	 */
	public function getCustomerreceiptssJoinCustomerdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCustomerreceiptss === null) {
			if ($this->isNew()) {
				$this->collCustomerreceiptss = array();
			} else {

				$criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->refno);

				$this->collCustomerreceiptss = CustomerreceiptsPeer::doSelectJoinCustomerdetails($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->refno);

			if (!isset($this->lastCustomerreceiptsCriteria) || !$this->lastCustomerreceiptsCriteria->equals($criteria)) {
				$this->collCustomerreceiptss = CustomerreceiptsPeer::doSelectJoinCustomerdetails($criteria, $con, $join_behavior);
			}
		}
		$this->lastCustomerreceiptsCriteria = $criteria;

		return $this->collCustomerreceiptss;
	}

	/**
	 * Clears out the collRefundss collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addRefundss()
	 */
	public function clearRefundss()
	{
		$this->collRefundss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collRefundss collection (array).
	 *
	 * By default this just sets the collRefundss collection to an empty array (like clearcollRefundss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initRefundss()
	{
		$this->collRefundss = array();
	}

	/**
	 * Gets an array of Refunds objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this Sales has previously been saved, it will retrieve
	 * related Refundss from storage. If this Sales is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array Refunds[]
	 * @throws     PropelException
	 */
	public function getRefundss($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRefundss === null) {
			if ($this->isNew()) {
			   $this->collRefundss = array();
			} else {

				$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

				RefundsPeer::addSelectColumns($criteria);
				$this->collRefundss = RefundsPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

				RefundsPeer::addSelectColumns($criteria);
				if (!isset($this->lastRefundsCriteria) || !$this->lastRefundsCriteria->equals($criteria)) {
					$this->collRefundss = RefundsPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastRefundsCriteria = $criteria;
		return $this->collRefundss;
	}

	/**
	 * Returns the number of related Refunds objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Refunds objects.
	 * @throws     PropelException
	 */
	public function countRefundss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collRefundss === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

				$count = RefundsPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

				if (!isset($this->lastRefundsCriteria) || !$this->lastRefundsCriteria->equals($criteria)) {
					$count = RefundsPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collRefundss);
				}
			} else {
				$count = count($this->collRefundss);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a Refunds object to this object
	 * through the Refunds foreign key attribute.
	 *
	 * @param      Refunds $l Refunds
	 * @return     void
	 * @throws     PropelException
	 */
	public function addRefunds(Refunds $l)
	{
		if ($this->collRefundss === null) {
			$this->initRefundss();
		}
		if (!in_array($l, $this->collRefundss, true)) { // only add it if the **same** object is not already associated
			array_push($this->collRefundss, $l);
			$l->setSales($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Sales is new, it will return
	 * an empty collection; or if this Sales has previously
	 * been saved, it will retrieve related Refundss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sales.
	 */
	public function getRefundssJoinCustomerdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRefundss === null) {
			if ($this->isNew()) {
				$this->collRefundss = array();
			} else {

				$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

				$this->collRefundss = RefundsPeer::doSelectJoinCustomerdetails($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

			if (!isset($this->lastRefundsCriteria) || !$this->lastRefundsCriteria->equals($criteria)) {
				$this->collRefundss = RefundsPeer::doSelectJoinCustomerdetails($criteria, $con, $join_behavior);
			}
		}
		$this->lastRefundsCriteria = $criteria;

		return $this->collRefundss;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Sales is new, it will return
	 * an empty collection; or if this Sales has previously
	 * been saved, it will retrieve related Refundss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sales.
	 */
	public function getRefundssJoinProjectdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRefundss === null) {
			if ($this->isNew()) {
				$this->collRefundss = array();
			} else {

				$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

				$this->collRefundss = RefundsPeer::doSelectJoinProjectdetails($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

			if (!isset($this->lastRefundsCriteria) || !$this->lastRefundsCriteria->equals($criteria)) {
				$this->collRefundss = RefundsPeer::doSelectJoinProjectdetails($criteria, $con, $join_behavior);
			}
		}
		$this->lastRefundsCriteria = $criteria;

		return $this->collRefundss;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Sales is new, it will return
	 * an empty collection; or if this Sales has previously
	 * been saved, it will retrieve related Refundss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sales.
	 */
	public function getRefundssJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRefundss === null) {
			if ($this->isNew()) {
				$this->collRefundss = array();
			} else {

				$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

				$this->collRefundss = RefundsPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

			if (!isset($this->lastRefundsCriteria) || !$this->lastRefundsCriteria->equals($criteria)) {
				$this->collRefundss = RefundsPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		}
		$this->lastRefundsCriteria = $criteria;

		return $this->collRefundss;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Sales is new, it will return
	 * an empty collection; or if this Sales has previously
	 * been saved, it will retrieve related Refundss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sales.
	 */
	public function getRefundssJoinLocation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRefundss === null) {
			if ($this->isNew()) {
				$this->collRefundss = array();
			} else {

				$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

				$this->collRefundss = RefundsPeer::doSelectJoinLocation($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(RefundsPeer::SALEREFNO, $this->refno);

			if (!isset($this->lastRefundsCriteria) || !$this->lastRefundsCriteria->equals($criteria)) {
				$this->collRefundss = RefundsPeer::doSelectJoinLocation($criteria, $con, $join_behavior);
			}
		}
		$this->lastRefundsCriteria = $criteria;

		return $this->collRefundss;
	}

	/**
	 * Clears out the collTranferedblokss collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTranferedblokss()
	 */
	public function clearTranferedblokss()
	{
		$this->collTranferedblokss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTranferedblokss collection (array).
	 *
	 * By default this just sets the collTranferedblokss collection to an empty array (like clearcollTranferedblokss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initTranferedblokss()
	{
		$this->collTranferedblokss = array();
	}

	/**
	 * Gets an array of Tranferedbloks objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this Sales has previously been saved, it will retrieve
	 * related Tranferedblokss from storage. If this Sales is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array Tranferedbloks[]
	 * @throws     PropelException
	 */
	public function getTranferedblokss($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTranferedblokss === null) {
			if ($this->isNew()) {
			   $this->collTranferedblokss = array();
			} else {

				$criteria->add(TranferedbloksPeer::SALEREFNO, $this->refno);

				TranferedbloksPeer::addSelectColumns($criteria);
				$this->collTranferedblokss = TranferedbloksPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(TranferedbloksPeer::SALEREFNO, $this->refno);

				TranferedbloksPeer::addSelectColumns($criteria);
				if (!isset($this->lastTranferedbloksCriteria) || !$this->lastTranferedbloksCriteria->equals($criteria)) {
					$this->collTranferedblokss = TranferedbloksPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTranferedbloksCriteria = $criteria;
		return $this->collTranferedblokss;
	}

	/**
	 * Returns the number of related Tranferedbloks objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Tranferedbloks objects.
	 * @throws     PropelException
	 */
	public function countTranferedblokss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collTranferedblokss === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(TranferedbloksPeer::SALEREFNO, $this->refno);

				$count = TranferedbloksPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(TranferedbloksPeer::SALEREFNO, $this->refno);

				if (!isset($this->lastTranferedbloksCriteria) || !$this->lastTranferedbloksCriteria->equals($criteria)) {
					$count = TranferedbloksPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collTranferedblokss);
				}
			} else {
				$count = count($this->collTranferedblokss);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a Tranferedbloks object to this object
	 * through the Tranferedbloks foreign key attribute.
	 *
	 * @param      Tranferedbloks $l Tranferedbloks
	 * @return     void
	 * @throws     PropelException
	 */
	public function addTranferedbloks(Tranferedbloks $l)
	{
		if ($this->collTranferedblokss === null) {
			$this->initTranferedblokss();
		}
		if (!in_array($l, $this->collTranferedblokss, true)) { // only add it if the **same** object is not already associated
			array_push($this->collTranferedblokss, $l);
			$l->setSales($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Sales is new, it will return
	 * an empty collection; or if this Sales has previously
	 * been saved, it will retrieve related Tranferedblokss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sales.
	 */
	public function getTranferedblokssJoinCustomerdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(SalesPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTranferedblokss === null) {
			if ($this->isNew()) {
				$this->collTranferedblokss = array();
			} else {

				$criteria->add(TranferedbloksPeer::SALEREFNO, $this->refno);

				$this->collTranferedblokss = TranferedbloksPeer::doSelectJoinCustomerdetails($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TranferedbloksPeer::SALEREFNO, $this->refno);

			if (!isset($this->lastTranferedbloksCriteria) || !$this->lastTranferedbloksCriteria->equals($criteria)) {
				$this->collTranferedblokss = TranferedbloksPeer::doSelectJoinCustomerdetails($criteria, $con, $join_behavior);
			}
		}
		$this->lastTranferedbloksCriteria = $criteria;

		return $this->collTranferedblokss;
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
			if ($this->collCustomerreceiptss) {
				foreach ((array) $this->collCustomerreceiptss as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collRefundss) {
				foreach ((array) $this->collRefundss as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTranferedblokss) {
				foreach ((array) $this->collTranferedblokss as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collCustomerreceiptss = null;
		$this->collRefundss = null;
		$this->collTranferedblokss = null;
			$this->aCustomerdetails = null;
			$this->aProjectdetails = null;
			$this->aPaymentplan = null;
			$this->aProject = null;
			$this->aLocation = null;
	}

} // BaseSales
