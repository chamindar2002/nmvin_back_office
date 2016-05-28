<?php


/**
 * Base class that represents a row from the 'onlinecustomer' table.
 *
 * onlinecustomer
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseOnlinecustomer extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OnlinecustomerPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OnlinecustomerPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

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
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

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
     * @return int
     */
    public function getCustomercode()
    {

        return $this->customercode;
    }

    /**
     * Get the [title] column value.
     * Title
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
    }

    /**
     * Get the [familyname] column value.
     * family name
     * @return string
     */
    public function getFamilyname()
    {

        return $this->familyname;
    }

    /**
     * Get the [firstname] column value.
     * first name
     * @return string
     */
    public function getFirstname()
    {

        return $this->firstname;
    }

    /**
     * Get the [addressline1] column value.
     * Address Line1
     * @return string
     */
    public function getAddressline1()
    {

        return $this->addressline1;
    }

    /**
     * Get the [addressline2] column value.
     * Address Line2
     * @return string
     */
    public function getAddressline2()
    {

        return $this->addressline2;
    }

    /**
     * Get the [postcode] column value.
     * Post Code
     * @return string
     */
    public function getPostcode()
    {

        return $this->postcode;
    }

    /**
     * Get the [country] column value.
     * Country
     * @return string
     */
    public function getCountry()
    {

        return $this->country;
    }

    /**
     * Get the [email] column value.
     * Email
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [skype] column value.
     * Skype Id
     * @return string
     */
    public function getSkype()
    {

        return $this->skype;
    }

    /**
     * Get the [landline] column value.
     * Land Phone No
     * @return string
     */
    public function getLandline()
    {

        return $this->landline;
    }

    /**
     * Get the [mobile] column value.
     * Mobile phone No
     * @return string
     */
    public function getMobile()
    {

        return $this->mobile;
    }

    /**
     * Get the [workphone] column value.
     * Office Phone No
     * @return string
     */
    public function getWorkphone()
    {

        return $this->workphone;
    }

    /**
     * Get the [fax] column value.
     * fax No
     * @return string
     */
    public function getFax()
    {

        return $this->fax;
    }

    /**
     * Get the [proffession] column value.
     * proffession
     * @return string
     */
    public function getProffession()
    {

        return $this->proffession;
    }

    /**
     * Get the [gender] column value.
     * gender
     * @return string
     */
    public function getGender()
    {

        return $this->gender;
    }

    /**
     * Get the [passportno] column value.
     * Passport No
     * @return string
     */
    public function getPassportno()
    {

        return $this->passportno;
    }

    /**
     * Get the [sladdressline1] column value.
     * Address In SL L1
     * @return string
     */
    public function getSladdressline1()
    {

        return $this->sladdressline1;
    }

    /**
     * Get the [sladdressline2] column value.
     * Address In SL L2
     * @return string
     */
    public function getSladdressline2()
    {

        return $this->sladdressline2;
    }

    /**
     * Get the [sladdressline3] column value.
     * Address In SL L3 / city
     * @return string
     */
    public function getSladdressline3()
    {

        return $this->sladdressline3;
    }

    /**
     * Get the [sllandline] column value.
     * Land Phone No in SL
     * @return string
     */
    public function getSllandline()
    {

        return $this->sllandline;
    }

    /**
     * Get the [slmobile] column value.
     * Mobile phone No in SL
     * @return string
     */
    public function getSlmobile()
    {

        return $this->slmobile;
    }

    /**
     * Get the [slcontactperson] column value.
     * Contact Person In SL
     * @return string
     */
    public function getSlcontactperson()
    {

        return $this->slcontactperson;
    }

    /**
     * Get the [onlineuserid] column value.
     * user id for online users
     * @return int
     */
    public function getOnlineuserid()
    {

        return $this->onlineuserid;
    }

    /**
     * Get the [paymentsuccess] column value.
     * payment success
     * @return boolean
     */
    public function getPaymentsuccess()
    {

        return $this->paymentsuccess;
    }

    /**
     * Get the [blockrefno] column value.
     * Reserved Block Number
     * @return int
     */
    public function getBlockrefno()
    {

        return $this->blockrefno;
    }

    /**
     * Get the [paidamt] column value.
     * Reservation charges
     * @return double
     */
    public function getPaidamt()
    {

        return $this->paidamt;
    }

    /**
     * Get the [paidamtissuedreceiptstatus] column value.
     * A receipt added to customer receipts
     * @return boolean
     */
    public function getPaidamtissuedreceiptstatus()
    {

        return $this->paidamtissuedreceiptstatus;
    }

    /**
     * Get the [utilized] column value.
     * Utilized for customerdetails File
     * @return boolean
     */
    public function getUtilized()
    {

        return $this->utilized;
    }

    /**
     * Get the [deleted] column value.
     * Record deleted
     * @return boolean
     */
    public function getDeleted()
    {

        return $this->deleted;
    }

    /**
     * Get the [addedby] column value.
     * Added by
     * @return int
     */
    public function getAddedby()
    {

        return $this->addedby;
    }

    /**
     * Get the [optionally formatted] temporal [addeddate] column value.
     * Added date
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAddeddate($format = '%x')
    {
        if ($this->addeddate === null) {
            return null;
        }

        if ($this->addeddate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->addeddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->addeddate, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [addedtime] column value.
     * Added time
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
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
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [lastmodifiedby] column value.
     * Last modified by
     * @return int
     */
    public function getLastmodifiedby()
    {

        return $this->lastmodifiedby;
    }

    /**
     * Get the [optionally formatted] temporal [lastmodifieddate] column value.
     * Last modified date
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastmodifieddate($format = '%x')
    {
        if ($this->lastmodifieddate === null) {
            return null;
        }

        if ($this->lastmodifieddate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->lastmodifieddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastmodifieddate, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [lastmodifiedtime] column value.
     * Last modified time
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
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
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [deletedby] column value.
     * Deleted by
     * @return int
     */
    public function getDeletedby()
    {

        return $this->deletedby;
    }

    /**
     * Get the [optionally formatted] temporal [deleteddate] column value.
     * Deleted Date
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDeleteddate($format = '%x')
    {
        if ($this->deleteddate === null) {
            return null;
        }

        if ($this->deleteddate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->deleteddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->deleteddate, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [deletedtime] column value.
     * Deleted Time
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
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
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [customercode] column.
     * Customer Code
     * @param  int $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setCustomercode($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setFamilyname($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setFirstname($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setAddressline1($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setAddressline2($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setPostcode($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setSkype($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setLandline($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setMobile($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setWorkphone($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setProffession($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setGender($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setPassportno($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setSladdressline1($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setSladdressline2($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setSladdressline3($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setSllandline($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setSlmobile($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setSlcontactperson($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  int $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setOnlineuserid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->onlineuserid !== $v) {
            $this->onlineuserid = $v;
            $this->modifiedColumns[] = OnlinecustomerPeer::ONLINEUSERID;
        }


        return $this;
    } // setOnlineuserid()

    /**
     * Sets the value of the [paymentsuccess] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * payment success
     * @param boolean|integer|string $v The new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setPaymentsuccess($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->paymentsuccess !== $v) {
            $this->paymentsuccess = $v;
            $this->modifiedColumns[] = OnlinecustomerPeer::PAYMENTSUCCESS;
        }


        return $this;
    } // setPaymentsuccess()

    /**
     * Set the value of [blockrefno] column.
     * Reserved Block Number
     * @param  int $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setBlockrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->blockrefno !== $v) {
            $this->blockrefno = $v;
            $this->modifiedColumns[] = OnlinecustomerPeer::BLOCKREFNO;
        }


        return $this;
    } // setBlockrefno()

    /**
     * Set the value of [paidamt] column.
     * Reservation charges
     * @param  double $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setPaidamt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->paidamt !== $v) {
            $this->paidamt = $v;
            $this->modifiedColumns[] = OnlinecustomerPeer::PAIDAMT;
        }


        return $this;
    } // setPaidamt()

    /**
     * Sets the value of the [paidamtissuedreceiptstatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * A receipt added to customer receipts
     * @param boolean|integer|string $v The new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setPaidamtissuedreceiptstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->paidamtissuedreceiptstatus !== $v) {
            $this->paidamtissuedreceiptstatus = $v;
            $this->modifiedColumns[] = OnlinecustomerPeer::PAIDAMTISSUEDRECEIPTSTATUS;
        }


        return $this;
    } // setPaidamtissuedreceiptstatus()

    /**
     * Sets the value of the [utilized] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Utilized for customerdetails File
     * @param boolean|integer|string $v The new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setUtilized($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->utilized !== $v) {
            $this->utilized = $v;
            $this->modifiedColumns[] = OnlinecustomerPeer::UTILIZED;
        }


        return $this;
    } // setUtilized()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Record deleted
     * @param boolean|integer|string $v The new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setDeleted($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->deleted !== $v) {
            $this->deleted = $v;
            $this->modifiedColumns[] = OnlinecustomerPeer::DELETED;
        }


        return $this;
    } // setDeleted()

    /**
     * Set the value of [addedby] column.
     * Added by
     * @param  int $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setAddedby($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setAddeddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addeddate !== null || $dt !== null) {
            $currentDateAsString = ($this->addeddate !== null && $tmpDt = new DateTime($this->addeddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addeddate = $newDateAsString;
                $this->modifiedColumns[] = OnlinecustomerPeer::ADDEDDATE;
            }
        } // if either are not null


        return $this;
    } // setAddeddate()

    /**
     * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
     * Added time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setAddedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->addedtime !== null && $tmpDt = new DateTime($this->addedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addedtime = $newDateAsString;
                $this->modifiedColumns[] = OnlinecustomerPeer::ADDEDTIME;
            }
        } // if either are not null


        return $this;
    } // setAddedtime()

    /**
     * Set the value of [lastmodifiedby] column.
     * Last modified by
     * @param  int $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setLastmodifiedby($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setLastmodifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifieddate !== null && $tmpDt = new DateTime($this->lastmodifieddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = OnlinecustomerPeer::LASTMODIFIEDDATE;
            }
        } // if either are not null


        return $this;
    } // setLastmodifieddate()

    /**
     * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
     * Last modified time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setLastmodifiedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifiedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifiedtime !== null && $tmpDt = new DateTime($this->lastmodifiedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifiedtime = $newDateAsString;
                $this->modifiedColumns[] = OnlinecustomerPeer::LASTMODIFIEDTIME;
            }
        } // if either are not null


        return $this;
    } // setLastmodifiedtime()

    /**
     * Set the value of [deletedby] column.
     * Deleted by
     * @param  int $v new value
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setDeletedby($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setDeleteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->deleteddate !== null && $tmpDt = new DateTime($this->deleteddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleteddate = $newDateAsString;
                $this->modifiedColumns[] = OnlinecustomerPeer::DELETEDDATE;
            }
        } // if either are not null


        return $this;
    } // setDeleteddate()

    /**
     * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
     * Deleted Time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Onlinecustomer The current object (for fluent API support)
     */
    public function setDeletedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deletedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->deletedtime !== null && $tmpDt = new DateTime($this->deletedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deletedtime = $newDateAsString;
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
     * @return boolean Whether the columns in this object are only been set with default values.
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

        // otherwise, everything was equal, so return true
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
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
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
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 39; // 39 = OnlinecustomerPeer::NUM_HYDRATE_COLUMNS.

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
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
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
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
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
            $deleteQuery = OnlinecustomerQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
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
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
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
                OnlinecustomerPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
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
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = OnlinecustomerPeer::CUSTOMERCODE;
        if (null !== $this->customercode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OnlinecustomerPeer::CUSTOMERCODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OnlinecustomerPeer::CUSTOMERCODE)) {
            $modifiedColumns[':p' . $index++]  = '`customercode`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`title`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::FAMILYNAME)) {
            $modifiedColumns[':p' . $index++]  = '`familyname`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::FIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`firstname`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::ADDRESSLINE1)) {
            $modifiedColumns[':p' . $index++]  = '`addressline1`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::ADDRESSLINE2)) {
            $modifiedColumns[':p' . $index++]  = '`addressline2`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::POSTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`postcode`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`country`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::SKYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Skype`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::LANDLINE)) {
            $modifiedColumns[':p' . $index++]  = '`landline`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::MOBILE)) {
            $modifiedColumns[':p' . $index++]  = '`mobile`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::WORKPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`workphone`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::PROFFESSION)) {
            $modifiedColumns[':p' . $index++]  = '`proffession`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::GENDER)) {
            $modifiedColumns[':p' . $index++]  = '`gender`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::PASSPORTNO)) {
            $modifiedColumns[':p' . $index++]  = '`passportno`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::SLADDRESSLINE1)) {
            $modifiedColumns[':p' . $index++]  = '`sladdressline1`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::SLADDRESSLINE2)) {
            $modifiedColumns[':p' . $index++]  = '`sladdressline2`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::SLADDRESSLINE3)) {
            $modifiedColumns[':p' . $index++]  = '`sladdressline3`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::SLLANDLINE)) {
            $modifiedColumns[':p' . $index++]  = '`sllandline`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::SLMOBILE)) {
            $modifiedColumns[':p' . $index++]  = '`slmobile`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::SLCONTACTPERSON)) {
            $modifiedColumns[':p' . $index++]  = '`slcontactperson`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::ONLINEUSERID)) {
            $modifiedColumns[':p' . $index++]  = '`onlineuserid`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::PAYMENTSUCCESS)) {
            $modifiedColumns[':p' . $index++]  = '`paymentsuccess`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::BLOCKREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`blockrefno`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::PAIDAMT)) {
            $modifiedColumns[':p' . $index++]  = '`paidamt`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::PAIDAMTISSUEDRECEIPTSTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`paidamtissuedreceiptstatus`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::UTILIZED)) {
            $modifiedColumns[':p' . $index++]  = '`utilized`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`deleted`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::ADDEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`addedby`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::ADDEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`addeddate`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::ADDEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`addedtime`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::LASTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedby`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::LASTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifieddate`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::LASTMODIFIEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedtime`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::DELETEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`deletedby`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::DELETEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`deleteddate`';
        }
        if ($this->isColumnModified(OnlinecustomerPeer::DELETEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`deletedtime`';
        }

        $sql = sprintf(
            'INSERT INTO `onlinecustomer` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`customercode`':
                        $stmt->bindValue($identifier, $this->customercode, PDO::PARAM_INT);
                        break;
                    case '`title`':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '`familyname`':
                        $stmt->bindValue($identifier, $this->familyname, PDO::PARAM_STR);
                        break;
                    case '`firstname`':
                        $stmt->bindValue($identifier, $this->firstname, PDO::PARAM_STR);
                        break;
                    case '`addressline1`':
                        $stmt->bindValue($identifier, $this->addressline1, PDO::PARAM_STR);
                        break;
                    case '`addressline2`':
                        $stmt->bindValue($identifier, $this->addressline2, PDO::PARAM_STR);
                        break;
                    case '`postcode`':
                        $stmt->bindValue($identifier, $this->postcode, PDO::PARAM_STR);
                        break;
                    case '`country`':
                        $stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`Skype`':
                        $stmt->bindValue($identifier, $this->skype, PDO::PARAM_STR);
                        break;
                    case '`landline`':
                        $stmt->bindValue($identifier, $this->landline, PDO::PARAM_STR);
                        break;
                    case '`mobile`':
                        $stmt->bindValue($identifier, $this->mobile, PDO::PARAM_STR);
                        break;
                    case '`workphone`':
                        $stmt->bindValue($identifier, $this->workphone, PDO::PARAM_STR);
                        break;
                    case '`fax`':
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`proffession`':
                        $stmt->bindValue($identifier, $this->proffession, PDO::PARAM_STR);
                        break;
                    case '`gender`':
                        $stmt->bindValue($identifier, $this->gender, PDO::PARAM_STR);
                        break;
                    case '`passportno`':
                        $stmt->bindValue($identifier, $this->passportno, PDO::PARAM_STR);
                        break;
                    case '`sladdressline1`':
                        $stmt->bindValue($identifier, $this->sladdressline1, PDO::PARAM_STR);
                        break;
                    case '`sladdressline2`':
                        $stmt->bindValue($identifier, $this->sladdressline2, PDO::PARAM_STR);
                        break;
                    case '`sladdressline3`':
                        $stmt->bindValue($identifier, $this->sladdressline3, PDO::PARAM_STR);
                        break;
                    case '`sllandline`':
                        $stmt->bindValue($identifier, $this->sllandline, PDO::PARAM_STR);
                        break;
                    case '`slmobile`':
                        $stmt->bindValue($identifier, $this->slmobile, PDO::PARAM_STR);
                        break;
                    case '`slcontactperson`':
                        $stmt->bindValue($identifier, $this->slcontactperson, PDO::PARAM_STR);
                        break;
                    case '`onlineuserid`':
                        $stmt->bindValue($identifier, $this->onlineuserid, PDO::PARAM_INT);
                        break;
                    case '`paymentsuccess`':
                        $stmt->bindValue($identifier, (int) $this->paymentsuccess, PDO::PARAM_INT);
                        break;
                    case '`blockrefno`':
                        $stmt->bindValue($identifier, $this->blockrefno, PDO::PARAM_INT);
                        break;
                    case '`paidamt`':
                        $stmt->bindValue($identifier, $this->paidamt, PDO::PARAM_STR);
                        break;
                    case '`paidamtissuedreceiptstatus`':
                        $stmt->bindValue($identifier, (int) $this->paidamtissuedreceiptstatus, PDO::PARAM_INT);
                        break;
                    case '`utilized`':
                        $stmt->bindValue($identifier, (int) $this->utilized, PDO::PARAM_INT);
                        break;
                    case '`deleted`':
                        $stmt->bindValue($identifier, (int) $this->deleted, PDO::PARAM_INT);
                        break;
                    case '`addedby`':
                        $stmt->bindValue($identifier, $this->addedby, PDO::PARAM_INT);
                        break;
                    case '`addeddate`':
                        $stmt->bindValue($identifier, $this->addeddate, PDO::PARAM_STR);
                        break;
                    case '`addedtime`':
                        $stmt->bindValue($identifier, $this->addedtime, PDO::PARAM_STR);
                        break;
                    case '`lastmodifiedby`':
                        $stmt->bindValue($identifier, $this->lastmodifiedby, PDO::PARAM_INT);
                        break;
                    case '`lastmodifieddate`':
                        $stmt->bindValue($identifier, $this->lastmodifieddate, PDO::PARAM_STR);
                        break;
                    case '`lastmodifiedtime`':
                        $stmt->bindValue($identifier, $this->lastmodifiedtime, PDO::PARAM_STR);
                        break;
                    case '`deletedby`':
                        $stmt->bindValue($identifier, $this->deletedby, PDO::PARAM_INT);
                        break;
                    case '`deleteddate`':
                        $stmt->bindValue($identifier, $this->deleteddate, PDO::PARAM_STR);
                        break;
                    case '`deletedtime`':
                        $stmt->bindValue($identifier, $this->deletedtime, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setCustomercode($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
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
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
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
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = OnlinecustomerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getCustomercode();
                break;
            case 1:
                return $this->getTitle();
                break;
            case 2:
                return $this->getFamilyname();
                break;
            case 3:
                return $this->getFirstname();
                break;
            case 4:
                return $this->getAddressline1();
                break;
            case 5:
                return $this->getAddressline2();
                break;
            case 6:
                return $this->getPostcode();
                break;
            case 7:
                return $this->getCountry();
                break;
            case 8:
                return $this->getEmail();
                break;
            case 9:
                return $this->getSkype();
                break;
            case 10:
                return $this->getLandline();
                break;
            case 11:
                return $this->getMobile();
                break;
            case 12:
                return $this->getWorkphone();
                break;
            case 13:
                return $this->getFax();
                break;
            case 14:
                return $this->getProffession();
                break;
            case 15:
                return $this->getGender();
                break;
            case 16:
                return $this->getPassportno();
                break;
            case 17:
                return $this->getSladdressline1();
                break;
            case 18:
                return $this->getSladdressline2();
                break;
            case 19:
                return $this->getSladdressline3();
                break;
            case 20:
                return $this->getSllandline();
                break;
            case 21:
                return $this->getSlmobile();
                break;
            case 22:
                return $this->getSlcontactperson();
                break;
            case 23:
                return $this->getOnlineuserid();
                break;
            case 24:
                return $this->getPaymentsuccess();
                break;
            case 25:
                return $this->getBlockrefno();
                break;
            case 26:
                return $this->getPaidamt();
                break;
            case 27:
                return $this->getPaidamtissuedreceiptstatus();
                break;
            case 28:
                return $this->getUtilized();
                break;
            case 29:
                return $this->getDeleted();
                break;
            case 30:
                return $this->getAddedby();
                break;
            case 31:
                return $this->getAddeddate();
                break;
            case 32:
                return $this->getAddedtime();
                break;
            case 33:
                return $this->getLastmodifiedby();
                break;
            case 34:
                return $this->getLastmodifieddate();
                break;
            case 35:
                return $this->getLastmodifiedtime();
                break;
            case 36:
                return $this->getDeletedby();
                break;
            case 37:
                return $this->getDeleteddate();
                break;
            case 38:
                return $this->getDeletedtime();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Onlinecustomer'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Onlinecustomer'][$this->getPrimaryKey()] = true;
        $keys = OnlinecustomerPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCustomercode(),
            $keys[1] => $this->getTitle(),
            $keys[2] => $this->getFamilyname(),
            $keys[3] => $this->getFirstname(),
            $keys[4] => $this->getAddressline1(),
            $keys[5] => $this->getAddressline2(),
            $keys[6] => $this->getPostcode(),
            $keys[7] => $this->getCountry(),
            $keys[8] => $this->getEmail(),
            $keys[9] => $this->getSkype(),
            $keys[10] => $this->getLandline(),
            $keys[11] => $this->getMobile(),
            $keys[12] => $this->getWorkphone(),
            $keys[13] => $this->getFax(),
            $keys[14] => $this->getProffession(),
            $keys[15] => $this->getGender(),
            $keys[16] => $this->getPassportno(),
            $keys[17] => $this->getSladdressline1(),
            $keys[18] => $this->getSladdressline2(),
            $keys[19] => $this->getSladdressline3(),
            $keys[20] => $this->getSllandline(),
            $keys[21] => $this->getSlmobile(),
            $keys[22] => $this->getSlcontactperson(),
            $keys[23] => $this->getOnlineuserid(),
            $keys[24] => $this->getPaymentsuccess(),
            $keys[25] => $this->getBlockrefno(),
            $keys[26] => $this->getPaidamt(),
            $keys[27] => $this->getPaidamtissuedreceiptstatus(),
            $keys[28] => $this->getUtilized(),
            $keys[29] => $this->getDeleted(),
            $keys[30] => $this->getAddedby(),
            $keys[31] => $this->getAddeddate(),
            $keys[32] => $this->getAddedtime(),
            $keys[33] => $this->getLastmodifiedby(),
            $keys[34] => $this->getLastmodifieddate(),
            $keys[35] => $this->getLastmodifiedtime(),
            $keys[36] => $this->getDeletedby(),
            $keys[37] => $this->getDeleteddate(),
            $keys[38] => $this->getDeletedtime(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = OnlinecustomerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setCustomercode($value);
                break;
            case 1:
                $this->setTitle($value);
                break;
            case 2:
                $this->setFamilyname($value);
                break;
            case 3:
                $this->setFirstname($value);
                break;
            case 4:
                $this->setAddressline1($value);
                break;
            case 5:
                $this->setAddressline2($value);
                break;
            case 6:
                $this->setPostcode($value);
                break;
            case 7:
                $this->setCountry($value);
                break;
            case 8:
                $this->setEmail($value);
                break;
            case 9:
                $this->setSkype($value);
                break;
            case 10:
                $this->setLandline($value);
                break;
            case 11:
                $this->setMobile($value);
                break;
            case 12:
                $this->setWorkphone($value);
                break;
            case 13:
                $this->setFax($value);
                break;
            case 14:
                $this->setProffession($value);
                break;
            case 15:
                $this->setGender($value);
                break;
            case 16:
                $this->setPassportno($value);
                break;
            case 17:
                $this->setSladdressline1($value);
                break;
            case 18:
                $this->setSladdressline2($value);
                break;
            case 19:
                $this->setSladdressline3($value);
                break;
            case 20:
                $this->setSllandline($value);
                break;
            case 21:
                $this->setSlmobile($value);
                break;
            case 22:
                $this->setSlcontactperson($value);
                break;
            case 23:
                $this->setOnlineuserid($value);
                break;
            case 24:
                $this->setPaymentsuccess($value);
                break;
            case 25:
                $this->setBlockrefno($value);
                break;
            case 26:
                $this->setPaidamt($value);
                break;
            case 27:
                $this->setPaidamtissuedreceiptstatus($value);
                break;
            case 28:
                $this->setUtilized($value);
                break;
            case 29:
                $this->setDeleted($value);
                break;
            case 30:
                $this->setAddedby($value);
                break;
            case 31:
                $this->setAddeddate($value);
                break;
            case 32:
                $this->setAddedtime($value);
                break;
            case 33:
                $this->setLastmodifiedby($value);
                break;
            case 34:
                $this->setLastmodifieddate($value);
                break;
            case 35:
                $this->setLastmodifiedtime($value);
                break;
            case 36:
                $this->setDeletedby($value);
                break;
            case 37:
                $this->setDeleteddate($value);
                break;
            case 38:
                $this->setDeletedtime($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = OnlinecustomerPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setCustomercode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFamilyname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFirstname($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAddressline1($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAddressline2($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPostcode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCountry($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEmail($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSkype($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLandline($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMobile($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setWorkphone($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFax($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setProffession($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setGender($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPassportno($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSladdressline1($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSladdressline2($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSladdressline3($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSllandline($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setSlmobile($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setSlcontactperson($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setOnlineuserid($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setPaymentsuccess($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setBlockrefno($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setPaidamt($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setPaidamtissuedreceiptstatus($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setUtilized($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDeleted($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAddedby($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setAddeddate($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setAddedtime($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setLastmodifiedby($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setLastmodifieddate($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setLastmodifiedtime($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setDeletedby($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDeleteddate($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDeletedtime($arr[$keys[38]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
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
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(OnlinecustomerPeer::DATABASE_NAME);
        $criteria->add(OnlinecustomerPeer::CUSTOMERCODE, $this->customercode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getCustomercode();
    }

    /**
     * Generic method to set the primary key (customercode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCustomercode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getCustomercode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Onlinecustomer (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTitle($this->getTitle());
        $copyObj->setFamilyname($this->getFamilyname());
        $copyObj->setFirstname($this->getFirstname());
        $copyObj->setAddressline1($this->getAddressline1());
        $copyObj->setAddressline2($this->getAddressline2());
        $copyObj->setPostcode($this->getPostcode());
        $copyObj->setCountry($this->getCountry());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setSkype($this->getSkype());
        $copyObj->setLandline($this->getLandline());
        $copyObj->setMobile($this->getMobile());
        $copyObj->setWorkphone($this->getWorkphone());
        $copyObj->setFax($this->getFax());
        $copyObj->setProffession($this->getProffession());
        $copyObj->setGender($this->getGender());
        $copyObj->setPassportno($this->getPassportno());
        $copyObj->setSladdressline1($this->getSladdressline1());
        $copyObj->setSladdressline2($this->getSladdressline2());
        $copyObj->setSladdressline3($this->getSladdressline3());
        $copyObj->setSllandline($this->getSllandline());
        $copyObj->setSlmobile($this->getSlmobile());
        $copyObj->setSlcontactperson($this->getSlcontactperson());
        $copyObj->setOnlineuserid($this->getOnlineuserid());
        $copyObj->setPaymentsuccess($this->getPaymentsuccess());
        $copyObj->setBlockrefno($this->getBlockrefno());
        $copyObj->setPaidamt($this->getPaidamt());
        $copyObj->setPaidamtissuedreceiptstatus($this->getPaidamtissuedreceiptstatus());
        $copyObj->setUtilized($this->getUtilized());
        $copyObj->setDeleted($this->getDeleted());
        $copyObj->setAddedby($this->getAddedby());
        $copyObj->setAddeddate($this->getAddeddate());
        $copyObj->setAddedtime($this->getAddedtime());
        $copyObj->setLastmodifiedby($this->getLastmodifiedby());
        $copyObj->setLastmodifieddate($this->getLastmodifieddate());
        $copyObj->setLastmodifiedtime($this->getLastmodifiedtime());
        $copyObj->setDeletedby($this->getDeletedby());
        $copyObj->setDeleteddate($this->getDeleteddate());
        $copyObj->setDeletedtime($this->getDeletedtime());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCustomercode(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Onlinecustomer Clone of current object.
     * @throws PropelException
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
     * @return OnlinecustomerPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OnlinecustomerPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->customercode = null;
        $this->title = null;
        $this->familyname = null;
        $this->firstname = null;
        $this->addressline1 = null;
        $this->addressline2 = null;
        $this->postcode = null;
        $this->country = null;
        $this->email = null;
        $this->skype = null;
        $this->landline = null;
        $this->mobile = null;
        $this->workphone = null;
        $this->fax = null;
        $this->proffession = null;
        $this->gender = null;
        $this->passportno = null;
        $this->sladdressline1 = null;
        $this->sladdressline2 = null;
        $this->sladdressline3 = null;
        $this->sllandline = null;
        $this->slmobile = null;
        $this->slcontactperson = null;
        $this->onlineuserid = null;
        $this->paymentsuccess = null;
        $this->blockrefno = null;
        $this->paidamt = null;
        $this->paidamtissuedreceiptstatus = null;
        $this->utilized = null;
        $this->deleted = null;
        $this->addedby = null;
        $this->addeddate = null;
        $this->addedtime = null;
        $this->lastmodifiedby = null;
        $this->lastmodifieddate = null;
        $this->lastmodifiedtime = null;
        $this->deletedby = null;
        $this->deleteddate = null;
        $this->deletedtime = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OnlinecustomerPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
