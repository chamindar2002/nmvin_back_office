<?php

/**
 * Base class that represents a row from the 'onlinecustomer' table.
 *
 * onlinecustomer
 *
 * @package    nmoffice.om
 */
abstract class BaseOnlinecustomer extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        OnlinecustomerPeer
	 */
	protected static $peer;

	/**
	 * The value for the customercode field.
	 * @var        int
	 */
	protected $customercode;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the familyname field.
	 * @var        string
	 */
	protected $familyname;

	/**
	 * The value for the firstname field.
	 * @var        string
	 */
	protected $firstname;

	/**
	 * The value for the addressline1 field.
	 * @var        string
	 */
	protected $addressline1;

	/**
	 * The value for the addressline2 field.
	 * @var        string
	 */
	protected $addressline2;

	/**
	 * The value for the postcode field.
	 * @var        string
	 */
	protected $postcode;

	/**
	 * The value for the country field.
	 * @var        string
	 */
	protected $country;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the skype field.
	 * @var        string
	 */
	protected $skype;

	/**
	 * The value for the landline field.
	 * @var        string
	 */
	protected $landline;

	/**
	 * The value for the mobile field.
	 * @var        string
	 */
	protected $mobile;

	/**
	 * The value for the workphone field.
	 * @var        string
	 */
	protected $workphone;

	/**
	 * The value for the fax field.
	 * @var        string
	 */
	protected $fax;

	/**
	 * The value for the proffession field.
	 * @var        string
	 */
	protected $proffession;

	/**
	 * The value for the gender field.
	 * @var        string
	 */
	protected $gender;

	/**
	 * The value for the passportno field.
	 * @var        string
	 */
	protected $passportno;

	/**
	 * The value for the sladdressline1 field.
	 * @var        string
	 */
	protected $sladdressline1;

	/**
	 * The value for the sladdressline2 field.
	 * @var        string
	 */
	protected $sladdressline2;

	/**
	 * The value for the sladdressline3 field.
	 * @var        string
	 */
	protected $sladdressline3;

	/**
	 * The value for the sllandline field.
	 * @var        string
	 */
	protected $sllandline;

	/**
	 * The value for the slmobile field.
	 * @var        string
	 */
	protected $slmobile;

	/**
	 * The value for the slcontactperson field.
	 * @var        string
	 */
	protected $slcontactperson;

	/**
	 * The value for the onlineuserid field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $onlineuserid;

	/**
	 * The value for the paymentsuccess field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $paymentsuccess;

	/**
	 * The value for the blockrefno field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $blockrefno;

	/**
	 * The value for the paidamt field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $paidamt;

	/**
	 * The value for the paidamtissuedreceiptstatus field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $paidamtissuedreceiptstatus;

	/**
	 * The value for the utilized field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $utilized;

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
		$this->onlineuserid = 0;
		$this->paymentsuccess = false;
		$this->blockrefno = 0;
		$this->paidamt = 0;
		$this->paidamtissuedreceiptstatus = false;
		$this->utilized = false;
		$this->deleted = false;
	}

	/**
	 * Initializes internal state of BaseOnlinecustomer object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [customercode] column value.
	 * Customer Code
	 * @return     int
	 */
	public function getCustomercode()
	{
		return $this->customercode;
	}

	/**
	 * Get the [title] column value.
	 * Title
	 * @return     string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Get the [familyname] column value.
	 * family name
	 * @return     string
	 */
	public function getFamilyname()
	{
		return $this->familyname;
	}

	/**
	 * Get the [firstname] column value.
	 * first name
	 * @return     string
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}

	/**
	 * Get the [addressline1] column value.
	 * Address Line1
	 * @return     string
	 */
	public function getAddressline1()
	{
		return $this->addressline1;
	}

	/**
	 * Get the [addressline2] column value.
	 * Address Line2
	 * @return     string
	 */
	public function getAddressline2()
	{
		return $this->addressline2;
	}

	/**
	 * Get the [postcode] column value.
	 * Post Code
	 * @return     string
	 */
	public function getPostcode()
	{
		return $this->postcode;
	}

	/**
	 * Get the [country] column value.
	 * Country
	 * @return     string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Get the [email] column value.
	 * Email
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [skype] column value.
	 * Skype Id
	 * @return     string
	 */
	public function getSkype()
	{
		return $this->skype;
	}

	/**
	 * Get the [landline] column value.
	 * Land Phone No
	 * @return     string
	 */
	public function getLandline()
	{
		return $this->landline;
	}

	/**
	 * Get the [mobile] column value.
	 * Mobile phone No
	 * @return     string
	 */
	public function getMobile()
	{
		return $this->mobile;
	}

	/**
	 * Get the [workphone] column value.
	 * Office Phone No
	 * @return     string
	 */
	public function getWorkphone()
	{
		return $this->workphone;
	}

	/**
	 * Get the [fax] column value.
	 * fax No
	 * @return     string
	 */
	public function getFax()
	{
		return $this->fax;
	}

	/**
	 * Get the [proffession] column value.
	 * proffession
	 * @return     string
	 */
	public function getProffession()
	{
		return $this->proffession;
	}

	/**
	 * Get the [gender] column value.
	 * gender
	 * @return     string
	 */
	public function getGender()
	{
		return $this->gender;
	}

	/**
	 * Get the [passportno] column value.
	 * Passport No
	 * @return     string
	 */
	public function getPassportno()
	{
		return $this->passportno;
	}

	/**
	 * Get the [sladdressline1] column value.
	 * Address In SL L1
	 * @return     string
	 */
	public function getSladdressline1()
	{
		return $this->sladdressline1;
	}

	/**
	 * Get the [sladdressline2] column value.
	 * Address In SL L2
	 * @return     string
	 */
	public function getSladdressline2()
	{
		return $this->sladdressline2;
	}

	/**
	 * Get the [sladdressline3] column value.
	 * Address In SL L3 / city
	 * @return     string
	 */
	public function getSladdressline3()
	{
		return $this->sladdressline3;
	}

	/**
	 * Get the [sllandline] column value.
	 * Land Phone No in SL
	 * @return     string
	 */
	public function getSllandline()
	{
		return $this->sllandline;
	}

	/**
	 * Get the [slmobile] column value.
	 * Mobile phone No in SL
	 * @return     string
	 */
	public function getSlmobile()
	{
		return $this->slmobile;
	}

	/**
	 * Get the [slcontactperson] column value.
	 * Contact Person In SL
	 * @return     string
	 */
	public function getSlcontactperson()
	{
		return $this->slcontactperson;
	}

	/**
	 * Get the [onlineuserid] column value.
	 * user id for online users
	 * @return     int
	 */
	public function getOnlineuserid()
	{
		return $this->onlineuserid;
	}

	/**
	 * Get the [paymentsuccess] column value.
	 * payment success
	 * @return     boolean
	 */
	public function getPaymentsuccess()
	{
		return $this->paymentsuccess;
	}

	/**
	 * Get the [blockrefno] column value.
	 * Reserved Block Number
	 * @return     int
	 */
	public function getBlockrefno()
	{
		return $this->blockrefno;
	}

	/**
	 * Get the [paidamt] column value.
	 * Reservation charges
	 * @return     double
	 */
	public function getPaidamt()
	{
		return $this->paidamt;
	}

	/**
	 * Get the [paidamtissuedreceiptstatus] column value.
	 * A receipt added to customer receipts
	 * @return     boolean
	 */
	public function getPaidamtissuedreceiptstatus()
	{
		return $this->paidamtissuedreceiptstatus;
	}

	/**
	 * Get the [utilized] column value.
	 * Utilized for customerdetails File
	 * @return     boolean
	 */
	public function getUtilized()
	{
		return $this->utilized;
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
	 * Set the value of [customercode] column.
	 * Customer Code
	 * @param      int $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setCustomercode($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->customercode !== $v) {
			$this->customercode = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::CUSTOMERCODE;
		}

		return $this;
	} // setCustomercode()

	/**
	 * Set the value of [title] column.
	 * Title
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [familyname] column.
	 * family name
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setFamilyname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->familyname !== $v) {
			$this->familyname = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::FAMILYNAME;
		}

		return $this;
	} // setFamilyname()

	/**
	 * Set the value of [firstname] column.
	 * first name
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setFirstname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->firstname !== $v) {
			$this->firstname = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::FIRSTNAME;
		}

		return $this;
	} // setFirstname()

	/**
	 * Set the value of [addressline1] column.
	 * Address Line1
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setAddressline1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->addressline1 !== $v) {
			$this->addressline1 = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::ADDRESSLINE1;
		}

		return $this;
	} // setAddressline1()

	/**
	 * Set the value of [addressline2] column.
	 * Address Line2
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setAddressline2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->addressline2 !== $v) {
			$this->addressline2 = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::ADDRESSLINE2;
		}

		return $this;
	} // setAddressline2()

	/**
	 * Set the value of [postcode] column.
	 * Post Code
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setPostcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->postcode !== $v) {
			$this->postcode = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::POSTCODE;
		}

		return $this;
	} // setPostcode()

	/**
	 * Set the value of [country] column.
	 * Country
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->country !== $v) {
			$this->country = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::COUNTRY;
		}

		return $this;
	} // setCountry()

	/**
	 * Set the value of [email] column.
	 * Email
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [skype] column.
	 * Skype Id
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setSkype($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->skype !== $v) {
			$this->skype = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::SKYPE;
		}

		return $this;
	} // setSkype()

	/**
	 * Set the value of [landline] column.
	 * Land Phone No
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setLandline($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->landline !== $v) {
			$this->landline = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::LANDLINE;
		}

		return $this;
	} // setLandline()

	/**
	 * Set the value of [mobile] column.
	 * Mobile phone No
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setMobile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->mobile !== $v) {
			$this->mobile = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::MOBILE;
		}

		return $this;
	} // setMobile()

	/**
	 * Set the value of [workphone] column.
	 * Office Phone No
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setWorkphone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->workphone !== $v) {
			$this->workphone = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::WORKPHONE;
		}

		return $this;
	} // setWorkphone()

	/**
	 * Set the value of [fax] column.
	 * fax No
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setFax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fax !== $v) {
			$this->fax = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::FAX;
		}

		return $this;
	} // setFax()

	/**
	 * Set the value of [proffession] column.
	 * proffession
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setProffession($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->proffession !== $v) {
			$this->proffession = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::PROFFESSION;
		}

		return $this;
	} // setProffession()

	/**
	 * Set the value of [gender] column.
	 * gender
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setGender($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->gender !== $v) {
			$this->gender = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::GENDER;
		}

		return $this;
	} // setGender()

	/**
	 * Set the value of [passportno] column.
	 * Passport No
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setPassportno($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->passportno !== $v) {
			$this->passportno = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::PASSPORTNO;
		}

		return $this;
	} // setPassportno()

	/**
	 * Set the value of [sladdressline1] column.
	 * Address In SL L1
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setSladdressline1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sladdressline1 !== $v) {
			$this->sladdressline1 = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::SLADDRESSLINE1;
		}

		return $this;
	} // setSladdressline1()

	/**
	 * Set the value of [sladdressline2] column.
	 * Address In SL L2
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setSladdressline2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sladdressline2 !== $v) {
			$this->sladdressline2 = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::SLADDRESSLINE2;
		}

		return $this;
	} // setSladdressline2()

	/**
	 * Set the value of [sladdressline3] column.
	 * Address In SL L3 / city
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setSladdressline3($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sladdressline3 !== $v) {
			$this->sladdressline3 = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::SLADDRESSLINE3;
		}

		return $this;
	} // setSladdressline3()

	/**
	 * Set the value of [sllandline] column.
	 * Land Phone No in SL
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setSllandline($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sllandline !== $v) {
			$this->sllandline = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::SLLANDLINE;
		}

		return $this;
	} // setSllandline()

	/**
	 * Set the value of [slmobile] column.
	 * Mobile phone No in SL
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setSlmobile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->slmobile !== $v) {
			$this->slmobile = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::SLMOBILE;
		}

		return $this;
	} // setSlmobile()

	/**
	 * Set the value of [slcontactperson] column.
	 * Contact Person In SL
	 * @param      string $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setSlcontactperson($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->slcontactperson !== $v) {
			$this->slcontactperson = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::SLCONTACTPERSON;
		}

		return $this;
	} // setSlcontactperson()

	/**
	 * Set the value of [onlineuserid] column.
	 * user id for online users
	 * @param      int $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setOnlineuserid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->onlineuserid !== $v || $this->isNew()) {
			$this->onlineuserid = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::ONLINEUSERID;
		}

		return $this;
	} // setOnlineuserid()

	/**
	 * Set the value of [paymentsuccess] column.
	 * payment success
	 * @param      boolean $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setPaymentsuccess($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->paymentsuccess !== $v || $this->isNew()) {
			$this->paymentsuccess = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::PAYMENTSUCCESS;
		}

		return $this;
	} // setPaymentsuccess()

	/**
	 * Set the value of [blockrefno] column.
	 * Reserved Block Number
	 * @param      int $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setBlockrefno($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->blockrefno !== $v || $this->isNew()) {
			$this->blockrefno = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::BLOCKREFNO;
		}

		return $this;
	} // setBlockrefno()

	/**
	 * Set the value of [paidamt] column.
	 * Reservation charges
	 * @param      double $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setPaidamt($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->paidamt !== $v || $this->isNew()) {
			$this->paidamt = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::PAIDAMT;
		}

		return $this;
	} // setPaidamt()

	/**
	 * Set the value of [paidamtissuedreceiptstatus] column.
	 * A receipt added to customer receipts
	 * @param      boolean $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setPaidamtissuedreceiptstatus($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->paidamtissuedreceiptstatus !== $v || $this->isNew()) {
			$this->paidamtissuedreceiptstatus = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::PAIDAMTISSUEDRECEIPTSTATUS;
		}

		return $this;
	} // setPaidamtissuedreceiptstatus()

	/**
	 * Set the value of [utilized] column.
	 * Utilized for customerdetails File
	 * @param      boolean $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setUtilized($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->utilized !== $v || $this->isNew()) {
			$this->utilized = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::UTILIZED;
		}

		return $this;
	} // setUtilized()

	/**
	 * Set the value of [deleted] column.
	 * Record deleted
	 * @param      boolean $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setDeleted($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->deleted !== $v || $this->isNew()) {
			$this->deleted = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::DELETED;
		}

		return $this;
	} // setDeleted()

	/**
	 * Set the value of [addedby] column.
	 * Added by
	 * @param      int $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setAddedby($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->addedby !== $v) {
			$this->addedby = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::ADDEDBY;
		}

		return $this;
	} // setAddedby()

	/**
	 * Sets the value of [addeddate] column to a normalized version of the date/time value specified.
	 * Added date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Onlinecustomer The current object (for fluent API support)
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
				$this->modifiedColumns[] = OnlinecustomerPeer::ADDEDDATE;
			}
		} // if either are not null

		return $this;
	} // setAddeddate()

	/**
	 * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
	 * Added time
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Onlinecustomer The current object (for fluent API support)
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
				$this->modifiedColumns[] = OnlinecustomerPeer::ADDEDTIME;
			}
		} // if either are not null

		return $this;
	} // setAddedtime()

	/**
	 * Set the value of [lastmodifiedby] column.
	 * Last modified by
	 * @param      int $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setLastmodifiedby($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->lastmodifiedby !== $v) {
			$this->lastmodifiedby = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::LASTMODIFIEDBY;
		}

		return $this;
	} // setLastmodifiedby()

	/**
	 * Sets the value of [lastmodifieddate] column to a normalized version of the date/time value specified.
	 * Last modified date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Onlinecustomer The current object (for fluent API support)
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
				$this->modifiedColumns[] = OnlinecustomerPeer::LASTMODIFIEDDATE;
			}
		} // if either are not null

		return $this;
	} // setLastmodifieddate()

	/**
	 * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
	 * Last modified time
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Onlinecustomer The current object (for fluent API support)
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
				$this->modifiedColumns[] = OnlinecustomerPeer::LASTMODIFIEDTIME;
			}
		} // if either are not null

		return $this;
	} // setLastmodifiedtime()

	/**
	 * Set the value of [deletedby] column.
	 * Deleted by
	 * @param      int $v new value
	 * @return     Onlinecustomer The current object (for fluent API support)
	 */
	public function setDeletedby($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->deletedby !== $v) {
			$this->deletedby = $v;
			$this->modifiedColumns[] = OnlinecustomerPeer::DELETEDBY;
		}

		return $this;
	} // setDeletedby()

	/**
	 * Sets the value of [deleteddate] column to a normalized version of the date/time value specified.
	 * Deleted Date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Onlinecustomer The current object (for fluent API support)
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
				$this->modifiedColumns[] = OnlinecustomerPeer::DELETEDDATE;
			}
		} // if either are not null

		return $this;
	} // setDeleteddate()

	/**
	 * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
	 * Deleted Time
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Onlinecustomer The current object (for fluent API support)
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
				$this->modifiedColumns[] = OnlinecustomerPeer::DELETEDTIME;
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
			if ($this->onlineuserid !== 0) {
				return false;
			}

			if ($this->paymentsuccess !== false) {
				return false;
			}

			if ($this->blockrefno !== 0) {
				return false;
			}

			if ($this->paidamt !== 0) {
				return false;
			}

			if ($this->paidamtissuedreceiptstatus !== false) {
				return false;
			}

			if ($this->utilized !== false) {
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

			$this->customercode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->familyname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->firstname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->addressline1 = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->addressline2 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->postcode = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->country = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->email = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->skype = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->landline = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->mobile = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->workphone = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->fax = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->proffession = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->gender = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->passportno = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->sladdressline1 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->sladdressline2 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->sladdressline3 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->sllandline = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->slmobile = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->slcontactperson = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->onlineuserid = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
			$this->paymentsuccess = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
			$this->blockrefno = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
			$this->paidamt = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
			$this->paidamtissuedreceiptstatus = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
			$this->utilized = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
			$this->deleted = ($row[$startcol + 29] !== null) ? (boolean) $row[$startcol + 29] : null;
			$this->addedby = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
			$this->addeddate = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
			$this->addedtime = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
			$this->lastmodifiedby = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
			$this->lastmodifieddate = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
			$this->lastmodifiedtime = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
			$this->deletedby = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
			$this->deleteddate = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
			$this->deletedtime = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 39; // 39 = OnlinecustomerPeer::NUM_COLUMNS - OnlinecustomerPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Onlinecustomer object", $e);
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
			$con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = OnlinecustomerPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

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
			$con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				OnlinecustomerPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				OnlinecustomerPeer::addInstanceToPool($this);
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

			if ($this->isNew() ) {
				$this->modifiedColumns[] = OnlinecustomerPeer::CUSTOMERCODE;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = OnlinecustomerPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setCustomercode($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += OnlinecustomerPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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


			if (($retval = OnlinecustomerPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$criteria = new Criteria(OnlinecustomerPeer::DATABASE_NAME);

		if ($this->isColumnModified(OnlinecustomerPeer::CUSTOMERCODE)) $criteria->add(OnlinecustomerPeer::CUSTOMERCODE, $this->customercode);
		if ($this->isColumnModified(OnlinecustomerPeer::TITLE)) $criteria->add(OnlinecustomerPeer::TITLE, $this->title);
		if ($this->isColumnModified(OnlinecustomerPeer::FAMILYNAME)) $criteria->add(OnlinecustomerPeer::FAMILYNAME, $this->familyname);
		if ($this->isColumnModified(OnlinecustomerPeer::FIRSTNAME)) $criteria->add(OnlinecustomerPeer::FIRSTNAME, $this->firstname);
		if ($this->isColumnModified(OnlinecustomerPeer::ADDRESSLINE1)) $criteria->add(OnlinecustomerPeer::ADDRESSLINE1, $this->addressline1);
		if ($this->isColumnModified(OnlinecustomerPeer::ADDRESSLINE2)) $criteria->add(OnlinecustomerPeer::ADDRESSLINE2, $this->addressline2);
		if ($this->isColumnModified(OnlinecustomerPeer::POSTCODE)) $criteria->add(OnlinecustomerPeer::POSTCODE, $this->postcode);
		if ($this->isColumnModified(OnlinecustomerPeer::COUNTRY)) $criteria->add(OnlinecustomerPeer::COUNTRY, $this->country);
		if ($this->isColumnModified(OnlinecustomerPeer::EMAIL)) $criteria->add(OnlinecustomerPeer::EMAIL, $this->email);
		if ($this->isColumnModified(OnlinecustomerPeer::SKYPE)) $criteria->add(OnlinecustomerPeer::SKYPE, $this->skype);
		if ($this->isColumnModified(OnlinecustomerPeer::LANDLINE)) $criteria->add(OnlinecustomerPeer::LANDLINE, $this->landline);
		if ($this->isColumnModified(OnlinecustomerPeer::MOBILE)) $criteria->add(OnlinecustomerPeer::MOBILE, $this->mobile);
		if ($this->isColumnModified(OnlinecustomerPeer::WORKPHONE)) $criteria->add(OnlinecustomerPeer::WORKPHONE, $this->workphone);
		if ($this->isColumnModified(OnlinecustomerPeer::FAX)) $criteria->add(OnlinecustomerPeer::FAX, $this->fax);
		if ($this->isColumnModified(OnlinecustomerPeer::PROFFESSION)) $criteria->add(OnlinecustomerPeer::PROFFESSION, $this->proffession);
		if ($this->isColumnModified(OnlinecustomerPeer::GENDER)) $criteria->add(OnlinecustomerPeer::GENDER, $this->gender);
		if ($this->isColumnModified(OnlinecustomerPeer::PASSPORTNO)) $criteria->add(OnlinecustomerPeer::PASSPORTNO, $this->passportno);
		if ($this->isColumnModified(OnlinecustomerPeer::SLADDRESSLINE1)) $criteria->add(OnlinecustomerPeer::SLADDRESSLINE1, $this->sladdressline1);
		if ($this->isColumnModified(OnlinecustomerPeer::SLADDRESSLINE2)) $criteria->add(OnlinecustomerPeer::SLADDRESSLINE2, $this->sladdressline2);
		if ($this->isColumnModified(OnlinecustomerPeer::SLADDRESSLINE3)) $criteria->add(OnlinecustomerPeer::SLADDRESSLINE3, $this->sladdressline3);
		if ($this->isColumnModified(OnlinecustomerPeer::SLLANDLINE)) $criteria->add(OnlinecustomerPeer::SLLANDLINE, $this->sllandline);
		if ($this->isColumnModified(OnlinecustomerPeer::SLMOBILE)) $criteria->add(OnlinecustomerPeer::SLMOBILE, $this->slmobile);
		if ($this->isColumnModified(OnlinecustomerPeer::SLCONTACTPERSON)) $criteria->add(OnlinecustomerPeer::SLCONTACTPERSON, $this->slcontactperson);
		if ($this->isColumnModified(OnlinecustomerPeer::ONLINEUSERID)) $criteria->add(OnlinecustomerPeer::ONLINEUSERID, $this->onlineuserid);
		if ($this->isColumnModified(OnlinecustomerPeer::PAYMENTSUCCESS)) $criteria->add(OnlinecustomerPeer::PAYMENTSUCCESS, $this->paymentsuccess);
		if ($this->isColumnModified(OnlinecustomerPeer::BLOCKREFNO)) $criteria->add(OnlinecustomerPeer::BLOCKREFNO, $this->blockrefno);
		if ($this->isColumnModified(OnlinecustomerPeer::PAIDAMT)) $criteria->add(OnlinecustomerPeer::PAIDAMT, $this->paidamt);
		if ($this->isColumnModified(OnlinecustomerPeer::PAIDAMTISSUEDRECEIPTSTATUS)) $criteria->add(OnlinecustomerPeer::PAIDAMTISSUEDRECEIPTSTATUS, $this->paidamtissuedreceiptstatus);
		if ($this->isColumnModified(OnlinecustomerPeer::UTILIZED)) $criteria->add(OnlinecustomerPeer::UTILIZED, $this->utilized);
		if ($this->isColumnModified(OnlinecustomerPeer::DELETED)) $criteria->add(OnlinecustomerPeer::DELETED, $this->deleted);
		if ($this->isColumnModified(OnlinecustomerPeer::ADDEDBY)) $criteria->add(OnlinecustomerPeer::ADDEDBY, $this->addedby);
		if ($this->isColumnModified(OnlinecustomerPeer::ADDEDDATE)) $criteria->add(OnlinecustomerPeer::ADDEDDATE, $this->addeddate);
		if ($this->isColumnModified(OnlinecustomerPeer::ADDEDTIME)) $criteria->add(OnlinecustomerPeer::ADDEDTIME, $this->addedtime);
		if ($this->isColumnModified(OnlinecustomerPeer::LASTMODIFIEDBY)) $criteria->add(OnlinecustomerPeer::LASTMODIFIEDBY, $this->lastmodifiedby);
		if ($this->isColumnModified(OnlinecustomerPeer::LASTMODIFIEDDATE)) $criteria->add(OnlinecustomerPeer::LASTMODIFIEDDATE, $this->lastmodifieddate);
		if ($this->isColumnModified(OnlinecustomerPeer::LASTMODIFIEDTIME)) $criteria->add(OnlinecustomerPeer::LASTMODIFIEDTIME, $this->lastmodifiedtime);
		if ($this->isColumnModified(OnlinecustomerPeer::DELETEDBY)) $criteria->add(OnlinecustomerPeer::DELETEDBY, $this->deletedby);
		if ($this->isColumnModified(OnlinecustomerPeer::DELETEDDATE)) $criteria->add(OnlinecustomerPeer::DELETEDDATE, $this->deleteddate);
		if ($this->isColumnModified(OnlinecustomerPeer::DELETEDTIME)) $criteria->add(OnlinecustomerPeer::DELETEDTIME, $this->deletedtime);

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
		$criteria = new Criteria(OnlinecustomerPeer::DATABASE_NAME);

		$criteria->add(OnlinecustomerPeer::CUSTOMERCODE, $this->customercode);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCustomercode();
	}

	/**
	 * Generic method to set the primary key (customercode column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCustomercode($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Onlinecustomer (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setTitle($this->title);

		$copyObj->setFamilyname($this->familyname);

		$copyObj->setFirstname($this->firstname);

		$copyObj->setAddressline1($this->addressline1);

		$copyObj->setAddressline2($this->addressline2);

		$copyObj->setPostcode($this->postcode);

		$copyObj->setCountry($this->country);

		$copyObj->setEmail($this->email);

		$copyObj->setSkype($this->skype);

		$copyObj->setLandline($this->landline);

		$copyObj->setMobile($this->mobile);

		$copyObj->setWorkphone($this->workphone);

		$copyObj->setFax($this->fax);

		$copyObj->setProffession($this->proffession);

		$copyObj->setGender($this->gender);

		$copyObj->setPassportno($this->passportno);

		$copyObj->setSladdressline1($this->sladdressline1);

		$copyObj->setSladdressline2($this->sladdressline2);

		$copyObj->setSladdressline3($this->sladdressline3);

		$copyObj->setSllandline($this->sllandline);

		$copyObj->setSlmobile($this->slmobile);

		$copyObj->setSlcontactperson($this->slcontactperson);

		$copyObj->setOnlineuserid($this->onlineuserid);

		$copyObj->setPaymentsuccess($this->paymentsuccess);

		$copyObj->setBlockrefno($this->blockrefno);

		$copyObj->setPaidamt($this->paidamt);

		$copyObj->setPaidamtissuedreceiptstatus($this->paidamtissuedreceiptstatus);

		$copyObj->setUtilized($this->utilized);

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


		$copyObj->setNew(true);

		$copyObj->setCustomercode(NULL); // this is a auto-increment column, so set to default value

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
	 * @return     Onlinecustomer Clone of current object.
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
	 * @return     OnlinecustomerPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new OnlinecustomerPeer();
		}
		return self::$peer;
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
		} // if ($deep)

	}

} // BaseOnlinecustomer
