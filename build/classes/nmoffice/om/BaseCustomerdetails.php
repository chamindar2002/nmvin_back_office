<?php


/**
 * Base class that represents a row from the 'customerdetails' table.
 *
 * customer details
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseCustomerdetails extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CustomerdetailsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CustomerdetailsPeer
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
     * @var        PropelObjectCollection|Projectdetails[] Collection to store aggregation of Projectdetails objects.
     */
    protected $collProjectdetailss;
    protected $collProjectdetailssPartial;

    /**
     * @var        PropelObjectCollection|Customerreceipts[] Collection to store aggregation of Customerreceipts objects.
     */
    protected $collCustomerreceiptss;
    protected $collCustomerreceiptssPartial;

    /**
     * @var        PropelObjectCollection|Sales[] Collection to store aggregation of Sales objects.
     */
    protected $collSaless;
    protected $collSalessPartial;

    /**
     * @var        PropelObjectCollection|Refunds[] Collection to store aggregation of Refunds objects.
     */
    protected $collRefundss;
    protected $collRefundssPartial;

    /**
     * @var        PropelObjectCollection|Tranferedbloks[] Collection to store aggregation of Tranferedbloks objects.
     */
    protected $collTranferedblokss;
    protected $collTranferedblokssPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $projectdetailssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $customerreceiptssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $salessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $refundssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $tranferedblokssScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->onlineuserid = 0;
        $this->deleted = false;
    }

    /**
     * Initializes internal state of BaseCustomerdetails object.
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
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setCustomercode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customercode !== $v) {
            $this->customercode = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::CUSTOMERCODE;
        }


        return $this;
    } // setCustomercode()

    /**
     * Set the value of [title] column.
     * Title
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [familyname] column.
     * family name
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setFamilyname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->familyname !== $v) {
            $this->familyname = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::FAMILYNAME;
        }


        return $this;
    } // setFamilyname()

    /**
     * Set the value of [firstname] column.
     * first name
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setFirstname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->firstname !== $v) {
            $this->firstname = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::FIRSTNAME;
        }


        return $this;
    } // setFirstname()

    /**
     * Set the value of [addressline1] column.
     * Address Line1
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setAddressline1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addressline1 !== $v) {
            $this->addressline1 = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::ADDRESSLINE1;
        }


        return $this;
    } // setAddressline1()

    /**
     * Set the value of [addressline2] column.
     * Address Line2
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setAddressline2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addressline2 !== $v) {
            $this->addressline2 = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::ADDRESSLINE2;
        }


        return $this;
    } // setAddressline2()

    /**
     * Set the value of [postcode] column.
     * Post Code
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setPostcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->postcode !== $v) {
            $this->postcode = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::POSTCODE;
        }


        return $this;
    } // setPostcode()

    /**
     * Set the value of [country] column.
     * Country
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country !== $v) {
            $this->country = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::COUNTRY;
        }


        return $this;
    } // setCountry()

    /**
     * Set the value of [email] column.
     * Email
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [skype] column.
     * Skype Id
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setSkype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->skype !== $v) {
            $this->skype = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::SKYPE;
        }


        return $this;
    } // setSkype()

    /**
     * Set the value of [landline] column.
     * Land Phone No
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setLandline($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->landline !== $v) {
            $this->landline = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::LANDLINE;
        }


        return $this;
    } // setLandline()

    /**
     * Set the value of [mobile] column.
     * Mobile phone No
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setMobile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mobile !== $v) {
            $this->mobile = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::MOBILE;
        }


        return $this;
    } // setMobile()

    /**
     * Set the value of [workphone] column.
     * Office Phone No
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setWorkphone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->workphone !== $v) {
            $this->workphone = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::WORKPHONE;
        }


        return $this;
    } // setWorkphone()

    /**
     * Set the value of [fax] column.
     * fax No
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [proffession] column.
     * proffession
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setProffession($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->proffession !== $v) {
            $this->proffession = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::PROFFESSION;
        }


        return $this;
    } // setProffession()

    /**
     * Set the value of [gender] column.
     * gender
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setGender($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gender !== $v) {
            $this->gender = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::GENDER;
        }


        return $this;
    } // setGender()

    /**
     * Set the value of [passportno] column.
     * Passport No
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setPassportno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->passportno !== $v) {
            $this->passportno = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::PASSPORTNO;
        }


        return $this;
    } // setPassportno()

    /**
     * Set the value of [sladdressline1] column.
     * Address In SL L1
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setSladdressline1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sladdressline1 !== $v) {
            $this->sladdressline1 = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::SLADDRESSLINE1;
        }


        return $this;
    } // setSladdressline1()

    /**
     * Set the value of [sladdressline2] column.
     * Address In SL L2
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setSladdressline2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sladdressline2 !== $v) {
            $this->sladdressline2 = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::SLADDRESSLINE2;
        }


        return $this;
    } // setSladdressline2()

    /**
     * Set the value of [sladdressline3] column.
     * Address In SL L3 / city
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setSladdressline3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sladdressline3 !== $v) {
            $this->sladdressline3 = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::SLADDRESSLINE3;
        }


        return $this;
    } // setSladdressline3()

    /**
     * Set the value of [sllandline] column.
     * Land Phone No in SL
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setSllandline($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sllandline !== $v) {
            $this->sllandline = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::SLLANDLINE;
        }


        return $this;
    } // setSllandline()

    /**
     * Set the value of [slmobile] column.
     * Mobile phone No in SL
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setSlmobile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->slmobile !== $v) {
            $this->slmobile = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::SLMOBILE;
        }


        return $this;
    } // setSlmobile()

    /**
     * Set the value of [slcontactperson] column.
     * Contact Person In SL
     * @param  string $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setSlcontactperson($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->slcontactperson !== $v) {
            $this->slcontactperson = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::SLCONTACTPERSON;
        }


        return $this;
    } // setSlcontactperson()

    /**
     * Set the value of [onlineuserid] column.
     * user id for online users
     * @param  int $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setOnlineuserid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->onlineuserid !== $v) {
            $this->onlineuserid = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::ONLINEUSERID;
        }


        return $this;
    } // setOnlineuserid()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Record deleted
     * @param boolean|integer|string $v The new value
     * @return Customerdetails The current object (for fluent API support)
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
            $this->modifiedColumns[] = CustomerdetailsPeer::DELETED;
        }


        return $this;
    } // setDeleted()

    /**
     * Set the value of [addedby] column.
     * Added by
     * @param  int $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setAddedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->addedby !== $v) {
            $this->addedby = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::ADDEDBY;
        }


        return $this;
    } // setAddedby()

    /**
     * Sets the value of [addeddate] column to a normalized version of the date/time value specified.
     * Added date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setAddeddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addeddate !== null || $dt !== null) {
            $currentDateAsString = ($this->addeddate !== null && $tmpDt = new DateTime($this->addeddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addeddate = $newDateAsString;
                $this->modifiedColumns[] = CustomerdetailsPeer::ADDEDDATE;
            }
        } // if either are not null


        return $this;
    } // setAddeddate()

    /**
     * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
     * Added time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setAddedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->addedtime !== null && $tmpDt = new DateTime($this->addedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addedtime = $newDateAsString;
                $this->modifiedColumns[] = CustomerdetailsPeer::ADDEDTIME;
            }
        } // if either are not null


        return $this;
    } // setAddedtime()

    /**
     * Set the value of [lastmodifiedby] column.
     * Last modified by
     * @param  int $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setLastmodifiedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lastmodifiedby !== $v) {
            $this->lastmodifiedby = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::LASTMODIFIEDBY;
        }


        return $this;
    } // setLastmodifiedby()

    /**
     * Sets the value of [lastmodifieddate] column to a normalized version of the date/time value specified.
     * Last modified date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setLastmodifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifieddate !== null && $tmpDt = new DateTime($this->lastmodifieddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = CustomerdetailsPeer::LASTMODIFIEDDATE;
            }
        } // if either are not null


        return $this;
    } // setLastmodifieddate()

    /**
     * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
     * Last modified time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setLastmodifiedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifiedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifiedtime !== null && $tmpDt = new DateTime($this->lastmodifiedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifiedtime = $newDateAsString;
                $this->modifiedColumns[] = CustomerdetailsPeer::LASTMODIFIEDTIME;
            }
        } // if either are not null


        return $this;
    } // setLastmodifiedtime()

    /**
     * Set the value of [deletedby] column.
     * Deleted by
     * @param  int $v new value
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setDeletedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deletedby !== $v) {
            $this->deletedby = $v;
            $this->modifiedColumns[] = CustomerdetailsPeer::DELETEDBY;
        }


        return $this;
    } // setDeletedby()

    /**
     * Sets the value of [deleteddate] column to a normalized version of the date/time value specified.
     * Deleted Date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setDeleteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->deleteddate !== null && $tmpDt = new DateTime($this->deleteddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleteddate = $newDateAsString;
                $this->modifiedColumns[] = CustomerdetailsPeer::DELETEDDATE;
            }
        } // if either are not null


        return $this;
    } // setDeleteddate()

    /**
     * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
     * Deleted Time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setDeletedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deletedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->deletedtime !== null && $tmpDt = new DateTime($this->deletedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deletedtime = $newDateAsString;
                $this->modifiedColumns[] = CustomerdetailsPeer::DELETEDTIME;
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
            $this->deleted = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
            $this->addedby = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->addeddate = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->addedtime = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->lastmodifiedby = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->lastmodifieddate = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->lastmodifiedtime = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->deletedby = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->deleteddate = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->deletedtime = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 34; // 34 = CustomerdetailsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Customerdetails object", $e);
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
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CustomerdetailsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collProjectdetailss = null;

            $this->collCustomerreceiptss = null;

            $this->collSaless = null;

            $this->collRefundss = null;

            $this->collTranferedblokss = null;

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
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CustomerdetailsQuery::create()
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
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CustomerdetailsPeer::addInstanceToPool($this);
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

            if ($this->projectdetailssScheduledForDeletion !== null) {
                if (!$this->projectdetailssScheduledForDeletion->isEmpty()) {
                    ProjectdetailsQuery::create()
                        ->filterByPrimaryKeys($this->projectdetailssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->projectdetailssScheduledForDeletion = null;
                }
            }

            if ($this->collProjectdetailss !== null) {
                foreach ($this->collProjectdetailss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->customerreceiptssScheduledForDeletion !== null) {
                if (!$this->customerreceiptssScheduledForDeletion->isEmpty()) {
                    CustomerreceiptsQuery::create()
                        ->filterByPrimaryKeys($this->customerreceiptssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->customerreceiptssScheduledForDeletion = null;
                }
            }

            if ($this->collCustomerreceiptss !== null) {
                foreach ($this->collCustomerreceiptss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salessScheduledForDeletion !== null) {
                if (!$this->salessScheduledForDeletion->isEmpty()) {
                    SalesQuery::create()
                        ->filterByPrimaryKeys($this->salessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salessScheduledForDeletion = null;
                }
            }

            if ($this->collSaless !== null) {
                foreach ($this->collSaless as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->refundssScheduledForDeletion !== null) {
                if (!$this->refundssScheduledForDeletion->isEmpty()) {
                    RefundsQuery::create()
                        ->filterByPrimaryKeys($this->refundssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->refundssScheduledForDeletion = null;
                }
            }

            if ($this->collRefundss !== null) {
                foreach ($this->collRefundss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->tranferedblokssScheduledForDeletion !== null) {
                if (!$this->tranferedblokssScheduledForDeletion->isEmpty()) {
                    TranferedbloksQuery::create()
                        ->filterByPrimaryKeys($this->tranferedblokssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->tranferedblokssScheduledForDeletion = null;
                }
            }

            if ($this->collTranferedblokss !== null) {
                foreach ($this->collTranferedblokss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CustomerdetailsPeer::CUSTOMERCODE;
        if (null !== $this->customercode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CustomerdetailsPeer::CUSTOMERCODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CustomerdetailsPeer::CUSTOMERCODE)) {
            $modifiedColumns[':p' . $index++]  = '`customercode`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`title`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::FAMILYNAME)) {
            $modifiedColumns[':p' . $index++]  = '`familyname`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::FIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`firstname`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::ADDRESSLINE1)) {
            $modifiedColumns[':p' . $index++]  = '`addressline1`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::ADDRESSLINE2)) {
            $modifiedColumns[':p' . $index++]  = '`addressline2`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::POSTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`postcode`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`country`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::SKYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Skype`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::LANDLINE)) {
            $modifiedColumns[':p' . $index++]  = '`landline`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::MOBILE)) {
            $modifiedColumns[':p' . $index++]  = '`mobile`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::WORKPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`workphone`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::PROFFESSION)) {
            $modifiedColumns[':p' . $index++]  = '`proffession`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::GENDER)) {
            $modifiedColumns[':p' . $index++]  = '`gender`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::PASSPORTNO)) {
            $modifiedColumns[':p' . $index++]  = '`passportno`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::SLADDRESSLINE1)) {
            $modifiedColumns[':p' . $index++]  = '`sladdressline1`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::SLADDRESSLINE2)) {
            $modifiedColumns[':p' . $index++]  = '`sladdressline2`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::SLADDRESSLINE3)) {
            $modifiedColumns[':p' . $index++]  = '`sladdressline3`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::SLLANDLINE)) {
            $modifiedColumns[':p' . $index++]  = '`sllandline`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::SLMOBILE)) {
            $modifiedColumns[':p' . $index++]  = '`slmobile`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::SLCONTACTPERSON)) {
            $modifiedColumns[':p' . $index++]  = '`slcontactperson`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::ONLINEUSERID)) {
            $modifiedColumns[':p' . $index++]  = '`onlineuserid`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`deleted`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::ADDEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`addedby`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::ADDEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`addeddate`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::ADDEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`addedtime`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::LASTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedby`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::LASTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifieddate`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::LASTMODIFIEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedtime`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::DELETEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`deletedby`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::DELETEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`deleteddate`';
        }
        if ($this->isColumnModified(CustomerdetailsPeer::DELETEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`deletedtime`';
        }

        $sql = sprintf(
            'INSERT INTO `customerdetails` (%s) VALUES (%s)',
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


            if (($retval = CustomerdetailsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collProjectdetailss !== null) {
                    foreach ($this->collProjectdetailss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCustomerreceiptss !== null) {
                    foreach ($this->collCustomerreceiptss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSaless !== null) {
                    foreach ($this->collSaless as $referrerFK) {
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
        $pos = CustomerdetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDeleted();
                break;
            case 25:
                return $this->getAddedby();
                break;
            case 26:
                return $this->getAddeddate();
                break;
            case 27:
                return $this->getAddedtime();
                break;
            case 28:
                return $this->getLastmodifiedby();
                break;
            case 29:
                return $this->getLastmodifieddate();
                break;
            case 30:
                return $this->getLastmodifiedtime();
                break;
            case 31:
                return $this->getDeletedby();
                break;
            case 32:
                return $this->getDeleteddate();
                break;
            case 33:
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Customerdetails'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Customerdetails'][$this->getPrimaryKey()] = true;
        $keys = CustomerdetailsPeer::getFieldNames($keyType);
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
            $keys[24] => $this->getDeleted(),
            $keys[25] => $this->getAddedby(),
            $keys[26] => $this->getAddeddate(),
            $keys[27] => $this->getAddedtime(),
            $keys[28] => $this->getLastmodifiedby(),
            $keys[29] => $this->getLastmodifieddate(),
            $keys[30] => $this->getLastmodifiedtime(),
            $keys[31] => $this->getDeletedby(),
            $keys[32] => $this->getDeleteddate(),
            $keys[33] => $this->getDeletedtime(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collProjectdetailss) {
                $result['Projectdetailss'] = $this->collProjectdetailss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCustomerreceiptss) {
                $result['Customerreceiptss'] = $this->collCustomerreceiptss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSaless) {
                $result['Saless'] = $this->collSaless->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRefundss) {
                $result['Refundss'] = $this->collRefundss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTranferedblokss) {
                $result['Tranferedblokss'] = $this->collTranferedblokss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
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
        $pos = CustomerdetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDeleted($value);
                break;
            case 25:
                $this->setAddedby($value);
                break;
            case 26:
                $this->setAddeddate($value);
                break;
            case 27:
                $this->setAddedtime($value);
                break;
            case 28:
                $this->setLastmodifiedby($value);
                break;
            case 29:
                $this->setLastmodifieddate($value);
                break;
            case 30:
                $this->setLastmodifiedtime($value);
                break;
            case 31:
                $this->setDeletedby($value);
                break;
            case 32:
                $this->setDeleteddate($value);
                break;
            case 33:
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
        $keys = CustomerdetailsPeer::getFieldNames($keyType);

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
        if (array_key_exists($keys[24], $arr)) $this->setDeleted($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setAddedby($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setAddeddate($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setAddedtime($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setLastmodifiedby($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setLastmodifieddate($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLastmodifiedtime($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDeletedby($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDeleteddate($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDeletedtime($arr[$keys[33]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CustomerdetailsPeer::DATABASE_NAME);

        if ($this->isColumnModified(CustomerdetailsPeer::CUSTOMERCODE)) $criteria->add(CustomerdetailsPeer::CUSTOMERCODE, $this->customercode);
        if ($this->isColumnModified(CustomerdetailsPeer::TITLE)) $criteria->add(CustomerdetailsPeer::TITLE, $this->title);
        if ($this->isColumnModified(CustomerdetailsPeer::FAMILYNAME)) $criteria->add(CustomerdetailsPeer::FAMILYNAME, $this->familyname);
        if ($this->isColumnModified(CustomerdetailsPeer::FIRSTNAME)) $criteria->add(CustomerdetailsPeer::FIRSTNAME, $this->firstname);
        if ($this->isColumnModified(CustomerdetailsPeer::ADDRESSLINE1)) $criteria->add(CustomerdetailsPeer::ADDRESSLINE1, $this->addressline1);
        if ($this->isColumnModified(CustomerdetailsPeer::ADDRESSLINE2)) $criteria->add(CustomerdetailsPeer::ADDRESSLINE2, $this->addressline2);
        if ($this->isColumnModified(CustomerdetailsPeer::POSTCODE)) $criteria->add(CustomerdetailsPeer::POSTCODE, $this->postcode);
        if ($this->isColumnModified(CustomerdetailsPeer::COUNTRY)) $criteria->add(CustomerdetailsPeer::COUNTRY, $this->country);
        if ($this->isColumnModified(CustomerdetailsPeer::EMAIL)) $criteria->add(CustomerdetailsPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CustomerdetailsPeer::SKYPE)) $criteria->add(CustomerdetailsPeer::SKYPE, $this->skype);
        if ($this->isColumnModified(CustomerdetailsPeer::LANDLINE)) $criteria->add(CustomerdetailsPeer::LANDLINE, $this->landline);
        if ($this->isColumnModified(CustomerdetailsPeer::MOBILE)) $criteria->add(CustomerdetailsPeer::MOBILE, $this->mobile);
        if ($this->isColumnModified(CustomerdetailsPeer::WORKPHONE)) $criteria->add(CustomerdetailsPeer::WORKPHONE, $this->workphone);
        if ($this->isColumnModified(CustomerdetailsPeer::FAX)) $criteria->add(CustomerdetailsPeer::FAX, $this->fax);
        if ($this->isColumnModified(CustomerdetailsPeer::PROFFESSION)) $criteria->add(CustomerdetailsPeer::PROFFESSION, $this->proffession);
        if ($this->isColumnModified(CustomerdetailsPeer::GENDER)) $criteria->add(CustomerdetailsPeer::GENDER, $this->gender);
        if ($this->isColumnModified(CustomerdetailsPeer::PASSPORTNO)) $criteria->add(CustomerdetailsPeer::PASSPORTNO, $this->passportno);
        if ($this->isColumnModified(CustomerdetailsPeer::SLADDRESSLINE1)) $criteria->add(CustomerdetailsPeer::SLADDRESSLINE1, $this->sladdressline1);
        if ($this->isColumnModified(CustomerdetailsPeer::SLADDRESSLINE2)) $criteria->add(CustomerdetailsPeer::SLADDRESSLINE2, $this->sladdressline2);
        if ($this->isColumnModified(CustomerdetailsPeer::SLADDRESSLINE3)) $criteria->add(CustomerdetailsPeer::SLADDRESSLINE3, $this->sladdressline3);
        if ($this->isColumnModified(CustomerdetailsPeer::SLLANDLINE)) $criteria->add(CustomerdetailsPeer::SLLANDLINE, $this->sllandline);
        if ($this->isColumnModified(CustomerdetailsPeer::SLMOBILE)) $criteria->add(CustomerdetailsPeer::SLMOBILE, $this->slmobile);
        if ($this->isColumnModified(CustomerdetailsPeer::SLCONTACTPERSON)) $criteria->add(CustomerdetailsPeer::SLCONTACTPERSON, $this->slcontactperson);
        if ($this->isColumnModified(CustomerdetailsPeer::ONLINEUSERID)) $criteria->add(CustomerdetailsPeer::ONLINEUSERID, $this->onlineuserid);
        if ($this->isColumnModified(CustomerdetailsPeer::DELETED)) $criteria->add(CustomerdetailsPeer::DELETED, $this->deleted);
        if ($this->isColumnModified(CustomerdetailsPeer::ADDEDBY)) $criteria->add(CustomerdetailsPeer::ADDEDBY, $this->addedby);
        if ($this->isColumnModified(CustomerdetailsPeer::ADDEDDATE)) $criteria->add(CustomerdetailsPeer::ADDEDDATE, $this->addeddate);
        if ($this->isColumnModified(CustomerdetailsPeer::ADDEDTIME)) $criteria->add(CustomerdetailsPeer::ADDEDTIME, $this->addedtime);
        if ($this->isColumnModified(CustomerdetailsPeer::LASTMODIFIEDBY)) $criteria->add(CustomerdetailsPeer::LASTMODIFIEDBY, $this->lastmodifiedby);
        if ($this->isColumnModified(CustomerdetailsPeer::LASTMODIFIEDDATE)) $criteria->add(CustomerdetailsPeer::LASTMODIFIEDDATE, $this->lastmodifieddate);
        if ($this->isColumnModified(CustomerdetailsPeer::LASTMODIFIEDTIME)) $criteria->add(CustomerdetailsPeer::LASTMODIFIEDTIME, $this->lastmodifiedtime);
        if ($this->isColumnModified(CustomerdetailsPeer::DELETEDBY)) $criteria->add(CustomerdetailsPeer::DELETEDBY, $this->deletedby);
        if ($this->isColumnModified(CustomerdetailsPeer::DELETEDDATE)) $criteria->add(CustomerdetailsPeer::DELETEDDATE, $this->deleteddate);
        if ($this->isColumnModified(CustomerdetailsPeer::DELETEDTIME)) $criteria->add(CustomerdetailsPeer::DELETEDTIME, $this->deletedtime);

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
        $criteria = new Criteria(CustomerdetailsPeer::DATABASE_NAME);
        $criteria->add(CustomerdetailsPeer::CUSTOMERCODE, $this->customercode);

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
     * @param object $copyObj An object of Customerdetails (or compatible) type.
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

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getProjectdetailss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProjectdetails($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCustomerreceiptss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCustomerreceipts($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSaless() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSales($relObj->copy($deepCopy));
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

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

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
     * @return Customerdetails Clone of current object.
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
     * @return CustomerdetailsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CustomerdetailsPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Projectdetails' == $relationName) {
            $this->initProjectdetailss();
        }
        if ('Customerreceipts' == $relationName) {
            $this->initCustomerreceiptss();
        }
        if ('Sales' == $relationName) {
            $this->initSaless();
        }
        if ('Refunds' == $relationName) {
            $this->initRefundss();
        }
        if ('Tranferedbloks' == $relationName) {
            $this->initTranferedblokss();
        }
    }

    /**
     * Clears out the collProjectdetailss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Customerdetails The current object (for fluent API support)
     * @see        addProjectdetailss()
     */
    public function clearProjectdetailss()
    {
        $this->collProjectdetailss = null; // important to set this to null since that means it is uninitialized
        $this->collProjectdetailssPartial = null;

        return $this;
    }

    /**
     * reset is the collProjectdetailss collection loaded partially
     *
     * @return void
     */
    public function resetPartialProjectdetailss($v = true)
    {
        $this->collProjectdetailssPartial = $v;
    }

    /**
     * Initializes the collProjectdetailss collection.
     *
     * By default this just sets the collProjectdetailss collection to an empty array (like clearcollProjectdetailss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProjectdetailss($overrideExisting = true)
    {
        if (null !== $this->collProjectdetailss && !$overrideExisting) {
            return;
        }
        $this->collProjectdetailss = new PropelObjectCollection();
        $this->collProjectdetailss->setModel('Projectdetails');
    }

    /**
     * Gets an array of Projectdetails objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Customerdetails is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Projectdetails[] List of Projectdetails objects
     * @throws PropelException
     */
    public function getProjectdetailss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProjectdetailssPartial && !$this->isNew();
        if (null === $this->collProjectdetailss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProjectdetailss) {
                // return empty collection
                $this->initProjectdetailss();
            } else {
                $collProjectdetailss = ProjectdetailsQuery::create(null, $criteria)
                    ->filterByCustomerdetails($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProjectdetailssPartial && count($collProjectdetailss)) {
                      $this->initProjectdetailss(false);

                      foreach ($collProjectdetailss as $obj) {
                        if (false == $this->collProjectdetailss->contains($obj)) {
                          $this->collProjectdetailss->append($obj);
                        }
                      }

                      $this->collProjectdetailssPartial = true;
                    }

                    $collProjectdetailss->getInternalIterator()->rewind();

                    return $collProjectdetailss;
                }

                if ($partial && $this->collProjectdetailss) {
                    foreach ($this->collProjectdetailss as $obj) {
                        if ($obj->isNew()) {
                            $collProjectdetailss[] = $obj;
                        }
                    }
                }

                $this->collProjectdetailss = $collProjectdetailss;
                $this->collProjectdetailssPartial = false;
            }
        }

        return $this->collProjectdetailss;
    }

    /**
     * Sets a collection of Projectdetails objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $projectdetailss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setProjectdetailss(PropelCollection $projectdetailss, PropelPDO $con = null)
    {
        $projectdetailssToDelete = $this->getProjectdetailss(new Criteria(), $con)->diff($projectdetailss);


        $this->projectdetailssScheduledForDeletion = $projectdetailssToDelete;

        foreach ($projectdetailssToDelete as $projectdetailsRemoved) {
            $projectdetailsRemoved->setCustomerdetails(null);
        }

        $this->collProjectdetailss = null;
        foreach ($projectdetailss as $projectdetails) {
            $this->addProjectdetails($projectdetails);
        }

        $this->collProjectdetailss = $projectdetailss;
        $this->collProjectdetailssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Projectdetails objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Projectdetails objects.
     * @throws PropelException
     */
    public function countProjectdetailss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProjectdetailssPartial && !$this->isNew();
        if (null === $this->collProjectdetailss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProjectdetailss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProjectdetailss());
            }
            $query = ProjectdetailsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomerdetails($this)
                ->count($con);
        }

        return count($this->collProjectdetailss);
    }

    /**
     * Method called to associate a Projectdetails object to this object
     * through the Projectdetails foreign key attribute.
     *
     * @param    Projectdetails $l Projectdetails
     * @return Customerdetails The current object (for fluent API support)
     */
    public function addProjectdetails(Projectdetails $l)
    {
        if ($this->collProjectdetailss === null) {
            $this->initProjectdetailss();
            $this->collProjectdetailssPartial = true;
        }

        if (!in_array($l, $this->collProjectdetailss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProjectdetails($l);

            if ($this->projectdetailssScheduledForDeletion and $this->projectdetailssScheduledForDeletion->contains($l)) {
                $this->projectdetailssScheduledForDeletion->remove($this->projectdetailssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Projectdetails $projectdetails The projectdetails object to add.
     */
    protected function doAddProjectdetails($projectdetails)
    {
        $this->collProjectdetailss[]= $projectdetails;
        $projectdetails->setCustomerdetails($this);
    }

    /**
     * @param	Projectdetails $projectdetails The projectdetails object to remove.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function removeProjectdetails($projectdetails)
    {
        if ($this->getProjectdetailss()->contains($projectdetails)) {
            $this->collProjectdetailss->remove($this->collProjectdetailss->search($projectdetails));
            if (null === $this->projectdetailssScheduledForDeletion) {
                $this->projectdetailssScheduledForDeletion = clone $this->collProjectdetailss;
                $this->projectdetailssScheduledForDeletion->clear();
            }
            $this->projectdetailssScheduledForDeletion[]= clone $projectdetails;
            $projectdetails->setCustomerdetails(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Projectdetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Projectdetails[] List of Projectdetails objects
     */
    public function getProjectdetailssJoinLocation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectdetailsQuery::create(null, $criteria);
        $query->joinWith('Location', $join_behavior);

        return $this->getProjectdetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Projectdetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Projectdetails[] List of Projectdetails objects
     */
    public function getProjectdetailssJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectdetailsQuery::create(null, $criteria);
        $query->joinWith('Project', $join_behavior);

        return $this->getProjectdetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Projectdetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Projectdetails[] List of Projectdetails objects
     */
    public function getProjectdetailssJoinHousecategory($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectdetailsQuery::create(null, $criteria);
        $query->joinWith('Housecategory', $join_behavior);

        return $this->getProjectdetailss($query, $con);
    }

    /**
     * Clears out the collCustomerreceiptss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Customerdetails The current object (for fluent API support)
     * @see        addCustomerreceiptss()
     */
    public function clearCustomerreceiptss()
    {
        $this->collCustomerreceiptss = null; // important to set this to null since that means it is uninitialized
        $this->collCustomerreceiptssPartial = null;

        return $this;
    }

    /**
     * reset is the collCustomerreceiptss collection loaded partially
     *
     * @return void
     */
    public function resetPartialCustomerreceiptss($v = true)
    {
        $this->collCustomerreceiptssPartial = $v;
    }

    /**
     * Initializes the collCustomerreceiptss collection.
     *
     * By default this just sets the collCustomerreceiptss collection to an empty array (like clearcollCustomerreceiptss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCustomerreceiptss($overrideExisting = true)
    {
        if (null !== $this->collCustomerreceiptss && !$overrideExisting) {
            return;
        }
        $this->collCustomerreceiptss = new PropelObjectCollection();
        $this->collCustomerreceiptss->setModel('Customerreceipts');
    }

    /**
     * Gets an array of Customerreceipts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Customerdetails is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Customerreceipts[] List of Customerreceipts objects
     * @throws PropelException
     */
    public function getCustomerreceiptss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCustomerreceiptssPartial && !$this->isNew();
        if (null === $this->collCustomerreceiptss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCustomerreceiptss) {
                // return empty collection
                $this->initCustomerreceiptss();
            } else {
                $collCustomerreceiptss = CustomerreceiptsQuery::create(null, $criteria)
                    ->filterByCustomerdetails($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCustomerreceiptssPartial && count($collCustomerreceiptss)) {
                      $this->initCustomerreceiptss(false);

                      foreach ($collCustomerreceiptss as $obj) {
                        if (false == $this->collCustomerreceiptss->contains($obj)) {
                          $this->collCustomerreceiptss->append($obj);
                        }
                      }

                      $this->collCustomerreceiptssPartial = true;
                    }

                    $collCustomerreceiptss->getInternalIterator()->rewind();

                    return $collCustomerreceiptss;
                }

                if ($partial && $this->collCustomerreceiptss) {
                    foreach ($this->collCustomerreceiptss as $obj) {
                        if ($obj->isNew()) {
                            $collCustomerreceiptss[] = $obj;
                        }
                    }
                }

                $this->collCustomerreceiptss = $collCustomerreceiptss;
                $this->collCustomerreceiptssPartial = false;
            }
        }

        return $this->collCustomerreceiptss;
    }

    /**
     * Sets a collection of Customerreceipts objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $customerreceiptss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setCustomerreceiptss(PropelCollection $customerreceiptss, PropelPDO $con = null)
    {
        $customerreceiptssToDelete = $this->getCustomerreceiptss(new Criteria(), $con)->diff($customerreceiptss);


        $this->customerreceiptssScheduledForDeletion = $customerreceiptssToDelete;

        foreach ($customerreceiptssToDelete as $customerreceiptsRemoved) {
            $customerreceiptsRemoved->setCustomerdetails(null);
        }

        $this->collCustomerreceiptss = null;
        foreach ($customerreceiptss as $customerreceipts) {
            $this->addCustomerreceipts($customerreceipts);
        }

        $this->collCustomerreceiptss = $customerreceiptss;
        $this->collCustomerreceiptssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Customerreceipts objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Customerreceipts objects.
     * @throws PropelException
     */
    public function countCustomerreceiptss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCustomerreceiptssPartial && !$this->isNew();
        if (null === $this->collCustomerreceiptss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCustomerreceiptss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCustomerreceiptss());
            }
            $query = CustomerreceiptsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomerdetails($this)
                ->count($con);
        }

        return count($this->collCustomerreceiptss);
    }

    /**
     * Method called to associate a Customerreceipts object to this object
     * through the Customerreceipts foreign key attribute.
     *
     * @param    Customerreceipts $l Customerreceipts
     * @return Customerdetails The current object (for fluent API support)
     */
    public function addCustomerreceipts(Customerreceipts $l)
    {
        if ($this->collCustomerreceiptss === null) {
            $this->initCustomerreceiptss();
            $this->collCustomerreceiptssPartial = true;
        }

        if (!in_array($l, $this->collCustomerreceiptss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCustomerreceipts($l);

            if ($this->customerreceiptssScheduledForDeletion and $this->customerreceiptssScheduledForDeletion->contains($l)) {
                $this->customerreceiptssScheduledForDeletion->remove($this->customerreceiptssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Customerreceipts $customerreceipts The customerreceipts object to add.
     */
    protected function doAddCustomerreceipts($customerreceipts)
    {
        $this->collCustomerreceiptss[]= $customerreceipts;
        $customerreceipts->setCustomerdetails($this);
    }

    /**
     * @param	Customerreceipts $customerreceipts The customerreceipts object to remove.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function removeCustomerreceipts($customerreceipts)
    {
        if ($this->getCustomerreceiptss()->contains($customerreceipts)) {
            $this->collCustomerreceiptss->remove($this->collCustomerreceiptss->search($customerreceipts));
            if (null === $this->customerreceiptssScheduledForDeletion) {
                $this->customerreceiptssScheduledForDeletion = clone $this->collCustomerreceiptss;
                $this->customerreceiptssScheduledForDeletion->clear();
            }
            $this->customerreceiptssScheduledForDeletion[]= clone $customerreceipts;
            $customerreceipts->setCustomerdetails(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Customerreceipts[] List of Customerreceipts objects
     */
    public function getCustomerreceiptssJoinLocation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CustomerreceiptsQuery::create(null, $criteria);
        $query->joinWith('Location', $join_behavior);

        return $this->getCustomerreceiptss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Customerreceipts[] List of Customerreceipts objects
     */
    public function getCustomerreceiptssJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CustomerreceiptsQuery::create(null, $criteria);
        $query->joinWith('Project', $join_behavior);

        return $this->getCustomerreceiptss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Customerreceipts[] List of Customerreceipts objects
     */
    public function getCustomerreceiptssJoinSales($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CustomerreceiptsQuery::create(null, $criteria);
        $query->joinWith('Sales', $join_behavior);

        return $this->getCustomerreceiptss($query, $con);
    }

    /**
     * Clears out the collSaless collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Customerdetails The current object (for fluent API support)
     * @see        addSaless()
     */
    public function clearSaless()
    {
        $this->collSaless = null; // important to set this to null since that means it is uninitialized
        $this->collSalessPartial = null;

        return $this;
    }

    /**
     * reset is the collSaless collection loaded partially
     *
     * @return void
     */
    public function resetPartialSaless($v = true)
    {
        $this->collSalessPartial = $v;
    }

    /**
     * Initializes the collSaless collection.
     *
     * By default this just sets the collSaless collection to an empty array (like clearcollSaless());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSaless($overrideExisting = true)
    {
        if (null !== $this->collSaless && !$overrideExisting) {
            return;
        }
        $this->collSaless = new PropelObjectCollection();
        $this->collSaless->setModel('Sales');
    }

    /**
     * Gets an array of Sales objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Customerdetails is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Sales[] List of Sales objects
     * @throws PropelException
     */
    public function getSaless($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSalessPartial && !$this->isNew();
        if (null === $this->collSaless || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSaless) {
                // return empty collection
                $this->initSaless();
            } else {
                $collSaless = SalesQuery::create(null, $criteria)
                    ->filterByCustomerdetails($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSalessPartial && count($collSaless)) {
                      $this->initSaless(false);

                      foreach ($collSaless as $obj) {
                        if (false == $this->collSaless->contains($obj)) {
                          $this->collSaless->append($obj);
                        }
                      }

                      $this->collSalessPartial = true;
                    }

                    $collSaless->getInternalIterator()->rewind();

                    return $collSaless;
                }

                if ($partial && $this->collSaless) {
                    foreach ($this->collSaless as $obj) {
                        if ($obj->isNew()) {
                            $collSaless[] = $obj;
                        }
                    }
                }

                $this->collSaless = $collSaless;
                $this->collSalessPartial = false;
            }
        }

        return $this->collSaless;
    }

    /**
     * Sets a collection of Sales objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $saless A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setSaless(PropelCollection $saless, PropelPDO $con = null)
    {
        $salessToDelete = $this->getSaless(new Criteria(), $con)->diff($saless);


        $this->salessScheduledForDeletion = $salessToDelete;

        foreach ($salessToDelete as $salesRemoved) {
            $salesRemoved->setCustomerdetails(null);
        }

        $this->collSaless = null;
        foreach ($saless as $sales) {
            $this->addSales($sales);
        }

        $this->collSaless = $saless;
        $this->collSalessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Sales objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Sales objects.
     * @throws PropelException
     */
    public function countSaless(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSalessPartial && !$this->isNew();
        if (null === $this->collSaless || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSaless) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSaless());
            }
            $query = SalesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomerdetails($this)
                ->count($con);
        }

        return count($this->collSaless);
    }

    /**
     * Method called to associate a Sales object to this object
     * through the Sales foreign key attribute.
     *
     * @param    Sales $l Sales
     * @return Customerdetails The current object (for fluent API support)
     */
    public function addSales(Sales $l)
    {
        if ($this->collSaless === null) {
            $this->initSaless();
            $this->collSalessPartial = true;
        }

        if (!in_array($l, $this->collSaless->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSales($l);

            if ($this->salessScheduledForDeletion and $this->salessScheduledForDeletion->contains($l)) {
                $this->salessScheduledForDeletion->remove($this->salessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Sales $sales The sales object to add.
     */
    protected function doAddSales($sales)
    {
        $this->collSaless[]= $sales;
        $sales->setCustomerdetails($this);
    }

    /**
     * @param	Sales $sales The sales object to remove.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function removeSales($sales)
    {
        if ($this->getSaless()->contains($sales)) {
            $this->collSaless->remove($this->collSaless->search($sales));
            if (null === $this->salessScheduledForDeletion) {
                $this->salessScheduledForDeletion = clone $this->collSaless;
                $this->salessScheduledForDeletion->clear();
            }
            $this->salessScheduledForDeletion[]= clone $sales;
            $sales->setCustomerdetails(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sales[] List of Sales objects
     */
    public function getSalessJoinProjectdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SalesQuery::create(null, $criteria);
        $query->joinWith('Projectdetails', $join_behavior);

        return $this->getSaless($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sales[] List of Sales objects
     */
    public function getSalessJoinPaymentplan($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SalesQuery::create(null, $criteria);
        $query->joinWith('Paymentplan', $join_behavior);

        return $this->getSaless($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sales[] List of Sales objects
     */
    public function getSalessJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SalesQuery::create(null, $criteria);
        $query->joinWith('Project', $join_behavior);

        return $this->getSaless($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sales[] List of Sales objects
     */
    public function getSalessJoinLocation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SalesQuery::create(null, $criteria);
        $query->joinWith('Location', $join_behavior);

        return $this->getSaless($query, $con);
    }

    /**
     * Clears out the collRefundss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Customerdetails The current object (for fluent API support)
     * @see        addRefundss()
     */
    public function clearRefundss()
    {
        $this->collRefundss = null; // important to set this to null since that means it is uninitialized
        $this->collRefundssPartial = null;

        return $this;
    }

    /**
     * reset is the collRefundss collection loaded partially
     *
     * @return void
     */
    public function resetPartialRefundss($v = true)
    {
        $this->collRefundssPartial = $v;
    }

    /**
     * Initializes the collRefundss collection.
     *
     * By default this just sets the collRefundss collection to an empty array (like clearcollRefundss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRefundss($overrideExisting = true)
    {
        if (null !== $this->collRefundss && !$overrideExisting) {
            return;
        }
        $this->collRefundss = new PropelObjectCollection();
        $this->collRefundss->setModel('Refunds');
    }

    /**
     * Gets an array of Refunds objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Customerdetails is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Refunds[] List of Refunds objects
     * @throws PropelException
     */
    public function getRefundss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRefundssPartial && !$this->isNew();
        if (null === $this->collRefundss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRefundss) {
                // return empty collection
                $this->initRefundss();
            } else {
                $collRefundss = RefundsQuery::create(null, $criteria)
                    ->filterByCustomerdetails($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRefundssPartial && count($collRefundss)) {
                      $this->initRefundss(false);

                      foreach ($collRefundss as $obj) {
                        if (false == $this->collRefundss->contains($obj)) {
                          $this->collRefundss->append($obj);
                        }
                      }

                      $this->collRefundssPartial = true;
                    }

                    $collRefundss->getInternalIterator()->rewind();

                    return $collRefundss;
                }

                if ($partial && $this->collRefundss) {
                    foreach ($this->collRefundss as $obj) {
                        if ($obj->isNew()) {
                            $collRefundss[] = $obj;
                        }
                    }
                }

                $this->collRefundss = $collRefundss;
                $this->collRefundssPartial = false;
            }
        }

        return $this->collRefundss;
    }

    /**
     * Sets a collection of Refunds objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $refundss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setRefundss(PropelCollection $refundss, PropelPDO $con = null)
    {
        $refundssToDelete = $this->getRefundss(new Criteria(), $con)->diff($refundss);


        $this->refundssScheduledForDeletion = $refundssToDelete;

        foreach ($refundssToDelete as $refundsRemoved) {
            $refundsRemoved->setCustomerdetails(null);
        }

        $this->collRefundss = null;
        foreach ($refundss as $refunds) {
            $this->addRefunds($refunds);
        }

        $this->collRefundss = $refundss;
        $this->collRefundssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Refunds objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Refunds objects.
     * @throws PropelException
     */
    public function countRefundss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRefundssPartial && !$this->isNew();
        if (null === $this->collRefundss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRefundss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRefundss());
            }
            $query = RefundsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomerdetails($this)
                ->count($con);
        }

        return count($this->collRefundss);
    }

    /**
     * Method called to associate a Refunds object to this object
     * through the Refunds foreign key attribute.
     *
     * @param    Refunds $l Refunds
     * @return Customerdetails The current object (for fluent API support)
     */
    public function addRefunds(Refunds $l)
    {
        if ($this->collRefundss === null) {
            $this->initRefundss();
            $this->collRefundssPartial = true;
        }

        if (!in_array($l, $this->collRefundss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRefunds($l);

            if ($this->refundssScheduledForDeletion and $this->refundssScheduledForDeletion->contains($l)) {
                $this->refundssScheduledForDeletion->remove($this->refundssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Refunds $refunds The refunds object to add.
     */
    protected function doAddRefunds($refunds)
    {
        $this->collRefundss[]= $refunds;
        $refunds->setCustomerdetails($this);
    }

    /**
     * @param	Refunds $refunds The refunds object to remove.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function removeRefunds($refunds)
    {
        if ($this->getRefundss()->contains($refunds)) {
            $this->collRefundss->remove($this->collRefundss->search($refunds));
            if (null === $this->refundssScheduledForDeletion) {
                $this->refundssScheduledForDeletion = clone $this->collRefundss;
                $this->refundssScheduledForDeletion->clear();
            }
            $this->refundssScheduledForDeletion[]= clone $refunds;
            $refunds->setCustomerdetails(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Refunds[] List of Refunds objects
     */
    public function getRefundssJoinProjectdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RefundsQuery::create(null, $criteria);
        $query->joinWith('Projectdetails', $join_behavior);

        return $this->getRefundss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Refunds[] List of Refunds objects
     */
    public function getRefundssJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RefundsQuery::create(null, $criteria);
        $query->joinWith('Project', $join_behavior);

        return $this->getRefundss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Refunds[] List of Refunds objects
     */
    public function getRefundssJoinLocation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RefundsQuery::create(null, $criteria);
        $query->joinWith('Location', $join_behavior);

        return $this->getRefundss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Refunds[] List of Refunds objects
     */
    public function getRefundssJoinSales($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RefundsQuery::create(null, $criteria);
        $query->joinWith('Sales', $join_behavior);

        return $this->getRefundss($query, $con);
    }

    /**
     * Clears out the collTranferedblokss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Customerdetails The current object (for fluent API support)
     * @see        addTranferedblokss()
     */
    public function clearTranferedblokss()
    {
        $this->collTranferedblokss = null; // important to set this to null since that means it is uninitialized
        $this->collTranferedblokssPartial = null;

        return $this;
    }

    /**
     * reset is the collTranferedblokss collection loaded partially
     *
     * @return void
     */
    public function resetPartialTranferedblokss($v = true)
    {
        $this->collTranferedblokssPartial = $v;
    }

    /**
     * Initializes the collTranferedblokss collection.
     *
     * By default this just sets the collTranferedblokss collection to an empty array (like clearcollTranferedblokss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTranferedblokss($overrideExisting = true)
    {
        if (null !== $this->collTranferedblokss && !$overrideExisting) {
            return;
        }
        $this->collTranferedblokss = new PropelObjectCollection();
        $this->collTranferedblokss->setModel('Tranferedbloks');
    }

    /**
     * Gets an array of Tranferedbloks objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Customerdetails is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Tranferedbloks[] List of Tranferedbloks objects
     * @throws PropelException
     */
    public function getTranferedblokss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTranferedblokssPartial && !$this->isNew();
        if (null === $this->collTranferedblokss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTranferedblokss) {
                // return empty collection
                $this->initTranferedblokss();
            } else {
                $collTranferedblokss = TranferedbloksQuery::create(null, $criteria)
                    ->filterByCustomerdetails($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTranferedblokssPartial && count($collTranferedblokss)) {
                      $this->initTranferedblokss(false);

                      foreach ($collTranferedblokss as $obj) {
                        if (false == $this->collTranferedblokss->contains($obj)) {
                          $this->collTranferedblokss->append($obj);
                        }
                      }

                      $this->collTranferedblokssPartial = true;
                    }

                    $collTranferedblokss->getInternalIterator()->rewind();

                    return $collTranferedblokss;
                }

                if ($partial && $this->collTranferedblokss) {
                    foreach ($this->collTranferedblokss as $obj) {
                        if ($obj->isNew()) {
                            $collTranferedblokss[] = $obj;
                        }
                    }
                }

                $this->collTranferedblokss = $collTranferedblokss;
                $this->collTranferedblokssPartial = false;
            }
        }

        return $this->collTranferedblokss;
    }

    /**
     * Sets a collection of Tranferedbloks objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tranferedblokss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Customerdetails The current object (for fluent API support)
     */
    public function setTranferedblokss(PropelCollection $tranferedblokss, PropelPDO $con = null)
    {
        $tranferedblokssToDelete = $this->getTranferedblokss(new Criteria(), $con)->diff($tranferedblokss);


        $this->tranferedblokssScheduledForDeletion = $tranferedblokssToDelete;

        foreach ($tranferedblokssToDelete as $tranferedbloksRemoved) {
            $tranferedbloksRemoved->setCustomerdetails(null);
        }

        $this->collTranferedblokss = null;
        foreach ($tranferedblokss as $tranferedbloks) {
            $this->addTranferedbloks($tranferedbloks);
        }

        $this->collTranferedblokss = $tranferedblokss;
        $this->collTranferedblokssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Tranferedbloks objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Tranferedbloks objects.
     * @throws PropelException
     */
    public function countTranferedblokss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTranferedblokssPartial && !$this->isNew();
        if (null === $this->collTranferedblokss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTranferedblokss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTranferedblokss());
            }
            $query = TranferedbloksQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomerdetails($this)
                ->count($con);
        }

        return count($this->collTranferedblokss);
    }

    /**
     * Method called to associate a Tranferedbloks object to this object
     * through the Tranferedbloks foreign key attribute.
     *
     * @param    Tranferedbloks $l Tranferedbloks
     * @return Customerdetails The current object (for fluent API support)
     */
    public function addTranferedbloks(Tranferedbloks $l)
    {
        if ($this->collTranferedblokss === null) {
            $this->initTranferedblokss();
            $this->collTranferedblokssPartial = true;
        }

        if (!in_array($l, $this->collTranferedblokss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTranferedbloks($l);

            if ($this->tranferedblokssScheduledForDeletion and $this->tranferedblokssScheduledForDeletion->contains($l)) {
                $this->tranferedblokssScheduledForDeletion->remove($this->tranferedblokssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Tranferedbloks $tranferedbloks The tranferedbloks object to add.
     */
    protected function doAddTranferedbloks($tranferedbloks)
    {
        $this->collTranferedblokss[]= $tranferedbloks;
        $tranferedbloks->setCustomerdetails($this);
    }

    /**
     * @param	Tranferedbloks $tranferedbloks The tranferedbloks object to remove.
     * @return Customerdetails The current object (for fluent API support)
     */
    public function removeTranferedbloks($tranferedbloks)
    {
        if ($this->getTranferedblokss()->contains($tranferedbloks)) {
            $this->collTranferedblokss->remove($this->collTranferedblokss->search($tranferedbloks));
            if (null === $this->tranferedblokssScheduledForDeletion) {
                $this->tranferedblokssScheduledForDeletion = clone $this->collTranferedblokss;
                $this->tranferedblokssScheduledForDeletion->clear();
            }
            $this->tranferedblokssScheduledForDeletion[]= clone $tranferedbloks;
            $tranferedbloks->setCustomerdetails(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customerdetails is new, it will return
     * an empty collection; or if this Customerdetails has previously
     * been saved, it will retrieve related Tranferedblokss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customerdetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Tranferedbloks[] List of Tranferedbloks objects
     */
    public function getTranferedblokssJoinSales($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TranferedbloksQuery::create(null, $criteria);
        $query->joinWith('Sales', $join_behavior);

        return $this->getTranferedblokss($query, $con);
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
            if ($this->collProjectdetailss) {
                foreach ($this->collProjectdetailss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCustomerreceiptss) {
                foreach ($this->collCustomerreceiptss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSaless) {
                foreach ($this->collSaless as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRefundss) {
                foreach ($this->collRefundss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTranferedblokss) {
                foreach ($this->collTranferedblokss as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collProjectdetailss instanceof PropelCollection) {
            $this->collProjectdetailss->clearIterator();
        }
        $this->collProjectdetailss = null;
        if ($this->collCustomerreceiptss instanceof PropelCollection) {
            $this->collCustomerreceiptss->clearIterator();
        }
        $this->collCustomerreceiptss = null;
        if ($this->collSaless instanceof PropelCollection) {
            $this->collSaless->clearIterator();
        }
        $this->collSaless = null;
        if ($this->collRefundss instanceof PropelCollection) {
            $this->collRefundss->clearIterator();
        }
        $this->collRefundss = null;
        if ($this->collTranferedblokss instanceof PropelCollection) {
            $this->collTranferedblokss->clearIterator();
        }
        $this->collTranferedblokss = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CustomerdetailsPeer::DEFAULT_STRING_FORMAT);
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
