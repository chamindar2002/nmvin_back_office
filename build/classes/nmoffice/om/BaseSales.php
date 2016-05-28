<?php


/**
 * Base class that represents a row from the 'sales' table.
 *
 * house sales of projects
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseSales extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SalesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SalesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

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
     * @var        PropelObjectCollection|Customerreceipts[] Collection to store aggregation of Customerreceipts objects.
     */
    protected $collCustomerreceiptss;
    protected $collCustomerreceiptssPartial;

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
    protected $customerreceiptssScheduledForDeletion = null;

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
     * @return int
     */
    public function getRefno()
    {

        return $this->refno;
    }

    /**
     * Get the [customercode] column value.
     * customer code
     * @return int
     */
    public function getCustomercode()
    {

        return $this->customercode;
    }

    /**
     * Get the [locationcode] column value.
     * Location Code
     * @return int
     */
    public function getLocationcode()
    {

        return $this->locationcode;
    }

    /**
     * Get the [projectcode] column value.
     * project code
     * @return int
     */
    public function getProjectcode()
    {

        return $this->projectcode;
    }

    /**
     * Get the [blockrefnumber] column value.
     * block reference number
     * @return int
     */
    public function getBlockrefnumber()
    {

        return $this->blockrefnumber;
    }

    /**
     * Get the [payplanrefno] column value.
     * payment plan reference number
     * @return int
     */
    public function getPayplanrefno()
    {

        return $this->payplanrefno;
    }

    /**
     * Get the [nofinstallments] column value.
     * number of installments
     * @return int
     */
    public function getNofinstallments()
    {

        return $this->nofinstallments;
    }

    /**
     * Get the [description] column value.
     * payment plan description
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [installamount] column value.
     * Installment amount
     * @return double
     */
    public function getInstallamount()
    {

        return $this->installamount;
    }

    /**
     * Get the [totalpayable] column value.
     * Total Amount Payable (nofinstallments * installamount)
     * @return double
     */
    public function getTotalpayable()
    {

        return $this->totalpayable;
    }

    /**
     * Get the [paymentduedate] column value.
     * Payment due day (day of month)
     * @return int
     */
    public function getPaymentduedate()
    {

        return $this->paymentduedate;
    }

    /**
     * Get the [optionally formatted] temporal [agrementstartdate] column value.
     * agreement start date
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAgrementstartdate($format = '%x')
    {
        if ($this->agrementstartdate === null) {
            return null;
        }

        if ($this->agrementstartdate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->agrementstartdate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->agrementstartdate, true), $x);
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
     * Get the [optionally formatted] temporal [agrementfinishdate] column value.
     * agreement finish date
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAgrementfinishdate($format = '%x')
    {
        if ($this->agrementfinishdate === null) {
            return null;
        }

        if ($this->agrementfinishdate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->agrementfinishdate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->agrementfinishdate, true), $x);
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
     * Get the [saletype] column value.
     * 0:office,1:online
     * @return boolean
     */
    public function getSaletype()
    {

        return $this->saletype;
    }

    /**
     * Get the [salerightoff_amt] column value.
     * Sale Right Off Amount (discount on full settlement)
     * @return double
     */
    public function getSalerightoffAmt()
    {

        return $this->salerightoff_amt;
    }

    /**
     * Get the [salerightoff_status] column value.
     * Sale Right Off Status
     * @return boolean
     */
    public function getSalerightoffStatus()
    {

        return $this->salerightoff_status;
    }

    /**
     * Get the [salerightoff_comment] column value.
     * remarks of rightoff
     * @return string
     */
    public function getSalerightoffComment()
    {

        return $this->salerightoff_comment;
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
     * Set the value of [refno] column.
     * reference number
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setCustomercode($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setLocationcode($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setProjectcode($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setBlockrefnumber($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setPayplanrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setNofinstallments($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  double $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setInstallamount($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  double $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setTotalpayable($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setPaymentduedate($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Sales The current object (for fluent API support)
     */
    public function setAgrementstartdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->agrementstartdate !== null || $dt !== null) {
            $currentDateAsString = ($this->agrementstartdate !== null && $tmpDt = new DateTime($this->agrementstartdate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->agrementstartdate = $newDateAsString;
                $this->modifiedColumns[] = SalesPeer::AGREMENTSTARTDATE;
            }
        } // if either are not null


        return $this;
    } // setAgrementstartdate()

    /**
     * Sets the value of [agrementfinishdate] column to a normalized version of the date/time value specified.
     * agreement finish date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Sales The current object (for fluent API support)
     */
    public function setAgrementfinishdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->agrementfinishdate !== null || $dt !== null) {
            $currentDateAsString = ($this->agrementfinishdate !== null && $tmpDt = new DateTime($this->agrementfinishdate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->agrementfinishdate = $newDateAsString;
                $this->modifiedColumns[] = SalesPeer::AGREMENTFINISHDATE;
            }
        } // if either are not null


        return $this;
    } // setAgrementfinishdate()

    /**
     * Sets the value of the [saletype] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 0:office,1:online
     * @param boolean|integer|string $v The new value
     * @return Sales The current object (for fluent API support)
     */
    public function setSaletype($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->saletype !== $v) {
            $this->saletype = $v;
            $this->modifiedColumns[] = SalesPeer::SALETYPE;
        }


        return $this;
    } // setSaletype()

    /**
     * Set the value of [salerightoff_amt] column.
     * Sale Right Off Amount (discount on full settlement)
     * @param  double $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setSalerightoffAmt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salerightoff_amt !== $v) {
            $this->salerightoff_amt = $v;
            $this->modifiedColumns[] = SalesPeer::SALERIGHTOFF_AMT;
        }


        return $this;
    } // setSalerightoffAmt()

    /**
     * Sets the value of the [salerightoff_status] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Sale Right Off Status
     * @param boolean|integer|string $v The new value
     * @return Sales The current object (for fluent API support)
     */
    public function setSalerightoffStatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->salerightoff_status !== $v) {
            $this->salerightoff_status = $v;
            $this->modifiedColumns[] = SalesPeer::SALERIGHTOFF_STATUS;
        }


        return $this;
    } // setSalerightoffStatus()

    /**
     * Set the value of [salerightoff_comment] column.
     * remarks of rightoff
     * @param  string $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setSalerightoffComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->salerightoff_comment !== $v) {
            $this->salerightoff_comment = $v;
            $this->modifiedColumns[] = SalesPeer::SALERIGHTOFF_COMMENT;
        }


        return $this;
    } // setSalerightoffComment()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Record deleted
     * @param boolean|integer|string $v The new value
     * @return Sales The current object (for fluent API support)
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
            $this->modifiedColumns[] = SalesPeer::DELETED;
        }


        return $this;
    } // setDeleted()

    /**
     * Set the value of [addedby] column.
     * Added by
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setAddedby($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Sales The current object (for fluent API support)
     */
    public function setAddeddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addeddate !== null || $dt !== null) {
            $currentDateAsString = ($this->addeddate !== null && $tmpDt = new DateTime($this->addeddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addeddate = $newDateAsString;
                $this->modifiedColumns[] = SalesPeer::ADDEDDATE;
            }
        } // if either are not null


        return $this;
    } // setAddeddate()

    /**
     * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
     * Added time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Sales The current object (for fluent API support)
     */
    public function setAddedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->addedtime !== null && $tmpDt = new DateTime($this->addedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addedtime = $newDateAsString;
                $this->modifiedColumns[] = SalesPeer::ADDEDTIME;
            }
        } // if either are not null


        return $this;
    } // setAddedtime()

    /**
     * Set the value of [lastmodifiedby] column.
     * Last modified by
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setLastmodifiedby($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Sales The current object (for fluent API support)
     */
    public function setLastmodifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifieddate !== null && $tmpDt = new DateTime($this->lastmodifieddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = SalesPeer::LASTMODIFIEDDATE;
            }
        } // if either are not null


        return $this;
    } // setLastmodifieddate()

    /**
     * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
     * Last modified time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Sales The current object (for fluent API support)
     */
    public function setLastmodifiedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifiedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifiedtime !== null && $tmpDt = new DateTime($this->lastmodifiedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifiedtime = $newDateAsString;
                $this->modifiedColumns[] = SalesPeer::LASTMODIFIEDTIME;
            }
        } // if either are not null


        return $this;
    } // setLastmodifiedtime()

    /**
     * Set the value of [deletedby] column.
     * Deleted by
     * @param  int $v new value
     * @return Sales The current object (for fluent API support)
     */
    public function setDeletedby($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Sales The current object (for fluent API support)
     */
    public function setDeleteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->deleteddate !== null && $tmpDt = new DateTime($this->deleteddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleteddate = $newDateAsString;
                $this->modifiedColumns[] = SalesPeer::DELETEDDATE;
            }
        } // if either are not null


        return $this;
    } // setDeleteddate()

    /**
     * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
     * Deleted Time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Sales The current object (for fluent API support)
     */
    public function setDeletedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deletedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->deletedtime !== null && $tmpDt = new DateTime($this->deletedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deletedtime = $newDateAsString;
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
     * @return boolean Whether the columns in this object are only been set with default values.
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
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 27; // 27 = SalesPeer::NUM_HYDRATE_COLUMNS.

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
     * @throws PropelException
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
            $con = Propel::getConnection(SalesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SalesQuery::create()
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
                SalesPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
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

        $this->modifiedColumns[] = SalesPeer::REFNO;
        if (null !== $this->refno) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SalesPeer::REFNO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SalesPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`refno`';
        }
        if ($this->isColumnModified(SalesPeer::CUSTOMERCODE)) {
            $modifiedColumns[':p' . $index++]  = '`customercode`';
        }
        if ($this->isColumnModified(SalesPeer::LOCATIONCODE)) {
            $modifiedColumns[':p' . $index++]  = '`locationcode`';
        }
        if ($this->isColumnModified(SalesPeer::PROJECTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`projectcode`';
        }
        if ($this->isColumnModified(SalesPeer::BLOCKREFNUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`blockrefnumber`';
        }
        if ($this->isColumnModified(SalesPeer::PAYPLANREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`payplanrefno`';
        }
        if ($this->isColumnModified(SalesPeer::NOFINSTALLMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`nofinstallments`';
        }
        if ($this->isColumnModified(SalesPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(SalesPeer::INSTALLAMOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`installamount`';
        }
        if ($this->isColumnModified(SalesPeer::TOTALPAYABLE)) {
            $modifiedColumns[':p' . $index++]  = '`totalpayable`';
        }
        if ($this->isColumnModified(SalesPeer::PAYMENTDUEDATE)) {
            $modifiedColumns[':p' . $index++]  = '`paymentduedate`';
        }
        if ($this->isColumnModified(SalesPeer::AGREMENTSTARTDATE)) {
            $modifiedColumns[':p' . $index++]  = '`agrementstartdate`';
        }
        if ($this->isColumnModified(SalesPeer::AGREMENTFINISHDATE)) {
            $modifiedColumns[':p' . $index++]  = '`agrementfinishdate`';
        }
        if ($this->isColumnModified(SalesPeer::SALETYPE)) {
            $modifiedColumns[':p' . $index++]  = '`saletype`';
        }
        if ($this->isColumnModified(SalesPeer::SALERIGHTOFF_AMT)) {
            $modifiedColumns[':p' . $index++]  = '`salerightoff_amt`';
        }
        if ($this->isColumnModified(SalesPeer::SALERIGHTOFF_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`salerightoff_status`';
        }
        if ($this->isColumnModified(SalesPeer::SALERIGHTOFF_COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`salerightoff_comment`';
        }
        if ($this->isColumnModified(SalesPeer::DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`deleted`';
        }
        if ($this->isColumnModified(SalesPeer::ADDEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`addedby`';
        }
        if ($this->isColumnModified(SalesPeer::ADDEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`addeddate`';
        }
        if ($this->isColumnModified(SalesPeer::ADDEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`addedtime`';
        }
        if ($this->isColumnModified(SalesPeer::LASTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedby`';
        }
        if ($this->isColumnModified(SalesPeer::LASTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifieddate`';
        }
        if ($this->isColumnModified(SalesPeer::LASTMODIFIEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedtime`';
        }
        if ($this->isColumnModified(SalesPeer::DELETEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`deletedby`';
        }
        if ($this->isColumnModified(SalesPeer::DELETEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`deleteddate`';
        }
        if ($this->isColumnModified(SalesPeer::DELETEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`deletedtime`';
        }

        $sql = sprintf(
            'INSERT INTO `sales` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`refno`':
                        $stmt->bindValue($identifier, $this->refno, PDO::PARAM_INT);
                        break;
                    case '`customercode`':
                        $stmt->bindValue($identifier, $this->customercode, PDO::PARAM_INT);
                        break;
                    case '`locationcode`':
                        $stmt->bindValue($identifier, $this->locationcode, PDO::PARAM_INT);
                        break;
                    case '`projectcode`':
                        $stmt->bindValue($identifier, $this->projectcode, PDO::PARAM_INT);
                        break;
                    case '`blockrefnumber`':
                        $stmt->bindValue($identifier, $this->blockrefnumber, PDO::PARAM_INT);
                        break;
                    case '`payplanrefno`':
                        $stmt->bindValue($identifier, $this->payplanrefno, PDO::PARAM_INT);
                        break;
                    case '`nofinstallments`':
                        $stmt->bindValue($identifier, $this->nofinstallments, PDO::PARAM_INT);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`installamount`':
                        $stmt->bindValue($identifier, $this->installamount, PDO::PARAM_STR);
                        break;
                    case '`totalpayable`':
                        $stmt->bindValue($identifier, $this->totalpayable, PDO::PARAM_STR);
                        break;
                    case '`paymentduedate`':
                        $stmt->bindValue($identifier, $this->paymentduedate, PDO::PARAM_INT);
                        break;
                    case '`agrementstartdate`':
                        $stmt->bindValue($identifier, $this->agrementstartdate, PDO::PARAM_STR);
                        break;
                    case '`agrementfinishdate`':
                        $stmt->bindValue($identifier, $this->agrementfinishdate, PDO::PARAM_STR);
                        break;
                    case '`saletype`':
                        $stmt->bindValue($identifier, (int) $this->saletype, PDO::PARAM_INT);
                        break;
                    case '`salerightoff_amt`':
                        $stmt->bindValue($identifier, $this->salerightoff_amt, PDO::PARAM_STR);
                        break;
                    case '`salerightoff_status`':
                        $stmt->bindValue($identifier, (int) $this->salerightoff_status, PDO::PARAM_INT);
                        break;
                    case '`salerightoff_comment`':
                        $stmt->bindValue($identifier, $this->salerightoff_comment, PDO::PARAM_STR);
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
        $this->setRefno($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
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
        $pos = SalesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRefno();
                break;
            case 1:
                return $this->getCustomercode();
                break;
            case 2:
                return $this->getLocationcode();
                break;
            case 3:
                return $this->getProjectcode();
                break;
            case 4:
                return $this->getBlockrefnumber();
                break;
            case 5:
                return $this->getPayplanrefno();
                break;
            case 6:
                return $this->getNofinstallments();
                break;
            case 7:
                return $this->getDescription();
                break;
            case 8:
                return $this->getInstallamount();
                break;
            case 9:
                return $this->getTotalpayable();
                break;
            case 10:
                return $this->getPaymentduedate();
                break;
            case 11:
                return $this->getAgrementstartdate();
                break;
            case 12:
                return $this->getAgrementfinishdate();
                break;
            case 13:
                return $this->getSaletype();
                break;
            case 14:
                return $this->getSalerightoffAmt();
                break;
            case 15:
                return $this->getSalerightoffStatus();
                break;
            case 16:
                return $this->getSalerightoffComment();
                break;
            case 17:
                return $this->getDeleted();
                break;
            case 18:
                return $this->getAddedby();
                break;
            case 19:
                return $this->getAddeddate();
                break;
            case 20:
                return $this->getAddedtime();
                break;
            case 21:
                return $this->getLastmodifiedby();
                break;
            case 22:
                return $this->getLastmodifieddate();
                break;
            case 23:
                return $this->getLastmodifiedtime();
                break;
            case 24:
                return $this->getDeletedby();
                break;
            case 25:
                return $this->getDeleteddate();
                break;
            case 26:
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
        if (isset($alreadyDumpedObjects['Sales'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Sales'][$this->getPrimaryKey()] = true;
        $keys = SalesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRefno(),
            $keys[1] => $this->getCustomercode(),
            $keys[2] => $this->getLocationcode(),
            $keys[3] => $this->getProjectcode(),
            $keys[4] => $this->getBlockrefnumber(),
            $keys[5] => $this->getPayplanrefno(),
            $keys[6] => $this->getNofinstallments(),
            $keys[7] => $this->getDescription(),
            $keys[8] => $this->getInstallamount(),
            $keys[9] => $this->getTotalpayable(),
            $keys[10] => $this->getPaymentduedate(),
            $keys[11] => $this->getAgrementstartdate(),
            $keys[12] => $this->getAgrementfinishdate(),
            $keys[13] => $this->getSaletype(),
            $keys[14] => $this->getSalerightoffAmt(),
            $keys[15] => $this->getSalerightoffStatus(),
            $keys[16] => $this->getSalerightoffComment(),
            $keys[17] => $this->getDeleted(),
            $keys[18] => $this->getAddedby(),
            $keys[19] => $this->getAddeddate(),
            $keys[20] => $this->getAddedtime(),
            $keys[21] => $this->getLastmodifiedby(),
            $keys[22] => $this->getLastmodifieddate(),
            $keys[23] => $this->getLastmodifiedtime(),
            $keys[24] => $this->getDeletedby(),
            $keys[25] => $this->getDeleteddate(),
            $keys[26] => $this->getDeletedtime(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCustomerdetails) {
                $result['Customerdetails'] = $this->aCustomerdetails->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProjectdetails) {
                $result['Projectdetails'] = $this->aProjectdetails->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPaymentplan) {
                $result['Paymentplan'] = $this->aPaymentplan->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProject) {
                $result['Project'] = $this->aProject->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aLocation) {
                $result['Location'] = $this->aLocation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCustomerreceiptss) {
                $result['Customerreceiptss'] = $this->collCustomerreceiptss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SalesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRefno($value);
                break;
            case 1:
                $this->setCustomercode($value);
                break;
            case 2:
                $this->setLocationcode($value);
                break;
            case 3:
                $this->setProjectcode($value);
                break;
            case 4:
                $this->setBlockrefnumber($value);
                break;
            case 5:
                $this->setPayplanrefno($value);
                break;
            case 6:
                $this->setNofinstallments($value);
                break;
            case 7:
                $this->setDescription($value);
                break;
            case 8:
                $this->setInstallamount($value);
                break;
            case 9:
                $this->setTotalpayable($value);
                break;
            case 10:
                $this->setPaymentduedate($value);
                break;
            case 11:
                $this->setAgrementstartdate($value);
                break;
            case 12:
                $this->setAgrementfinishdate($value);
                break;
            case 13:
                $this->setSaletype($value);
                break;
            case 14:
                $this->setSalerightoffAmt($value);
                break;
            case 15:
                $this->setSalerightoffStatus($value);
                break;
            case 16:
                $this->setSalerightoffComment($value);
                break;
            case 17:
                $this->setDeleted($value);
                break;
            case 18:
                $this->setAddedby($value);
                break;
            case 19:
                $this->setAddeddate($value);
                break;
            case 20:
                $this->setAddedtime($value);
                break;
            case 21:
                $this->setLastmodifiedby($value);
                break;
            case 22:
                $this->setLastmodifieddate($value);
                break;
            case 23:
                $this->setLastmodifiedtime($value);
                break;
            case 24:
                $this->setDeletedby($value);
                break;
            case 25:
                $this->setDeleteddate($value);
                break;
            case 26:
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
        $keys = SalesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRefno($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCustomercode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLocationcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProjectcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBlockrefnumber($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPayplanrefno($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNofinstallments($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDescription($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setInstallamount($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTotalpayable($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPaymentduedate($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAgrementstartdate($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAgrementfinishdate($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSaletype($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSalerightoffAmt($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSalerightoffStatus($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSalerightoffComment($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDeleted($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAddedby($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAddeddate($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAddedtime($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLastmodifiedby($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLastmodifieddate($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setLastmodifiedtime($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDeletedby($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDeleteddate($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDeletedtime($arr[$keys[26]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
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
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(SalesPeer::DATABASE_NAME);
        $criteria->add(SalesPeer::REFNO, $this->refno);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRefno();
    }

    /**
     * Generic method to set the primary key (refno column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRefno($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRefno();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Sales (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCustomercode($this->getCustomercode());
        $copyObj->setLocationcode($this->getLocationcode());
        $copyObj->setProjectcode($this->getProjectcode());
        $copyObj->setBlockrefnumber($this->getBlockrefnumber());
        $copyObj->setPayplanrefno($this->getPayplanrefno());
        $copyObj->setNofinstallments($this->getNofinstallments());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setInstallamount($this->getInstallamount());
        $copyObj->setTotalpayable($this->getTotalpayable());
        $copyObj->setPaymentduedate($this->getPaymentduedate());
        $copyObj->setAgrementstartdate($this->getAgrementstartdate());
        $copyObj->setAgrementfinishdate($this->getAgrementfinishdate());
        $copyObj->setSaletype($this->getSaletype());
        $copyObj->setSalerightoffAmt($this->getSalerightoffAmt());
        $copyObj->setSalerightoffStatus($this->getSalerightoffStatus());
        $copyObj->setSalerightoffComment($this->getSalerightoffComment());
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

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRefno(NULL); // this is a auto-increment column, so set to default value
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
     * @return Sales Clone of current object.
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
     * @return SalesPeer
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
     * @param                  Customerdetails $v
     * @return Sales The current object (for fluent API support)
     * @throws PropelException
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
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Customerdetails The associated Customerdetails object.
     * @throws PropelException
     */
    public function getCustomerdetails(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCustomerdetails === null && ($this->customercode !== null) && $doQuery) {
            $this->aCustomerdetails = CustomerdetailsQuery::create()->findPk($this->customercode, $con);
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
     * @param                  Projectdetails $v
     * @return Sales The current object (for fluent API support)
     * @throws PropelException
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
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Projectdetails The associated Projectdetails object.
     * @throws PropelException
     */
    public function getProjectdetails(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProjectdetails === null && ($this->blockrefnumber !== null) && $doQuery) {
            $this->aProjectdetails = ProjectdetailsQuery::create()->findPk($this->blockrefnumber, $con);
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
     * @param                  Paymentplan $v
     * @return Sales The current object (for fluent API support)
     * @throws PropelException
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
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Paymentplan The associated Paymentplan object.
     * @throws PropelException
     */
    public function getPaymentplan(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPaymentplan === null && ($this->payplanrefno !== null) && $doQuery) {
            $this->aPaymentplan = PaymentplanQuery::create()->findPk($this->payplanrefno, $con);
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
     * @param                  Project $v
     * @return Sales The current object (for fluent API support)
     * @throws PropelException
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
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Project The associated Project object.
     * @throws PropelException
     */
    public function getProject(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProject === null && ($this->projectcode !== null) && $doQuery) {
            $this->aProject = ProjectQuery::create()->findPk($this->projectcode, $con);
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
     * @param                  Location $v
     * @return Sales The current object (for fluent API support)
     * @throws PropelException
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
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Location The associated Location object.
     * @throws PropelException
     */
    public function getLocation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aLocation === null && ($this->locationcode !== null) && $doQuery) {
            $this->aLocation = LocationQuery::create()->findPk($this->locationcode, $con);
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Customerreceipts' == $relationName) {
            $this->initCustomerreceiptss();
        }
        if ('Refunds' == $relationName) {
            $this->initRefundss();
        }
        if ('Tranferedbloks' == $relationName) {
            $this->initTranferedblokss();
        }
    }

    /**
     * Clears out the collCustomerreceiptss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sales The current object (for fluent API support)
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
     * If this Sales is new, it will return
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
                    ->filterBySales($this)
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
     * @return Sales The current object (for fluent API support)
     */
    public function setCustomerreceiptss(PropelCollection $customerreceiptss, PropelPDO $con = null)
    {
        $customerreceiptssToDelete = $this->getCustomerreceiptss(new Criteria(), $con)->diff($customerreceiptss);


        $this->customerreceiptssScheduledForDeletion = $customerreceiptssToDelete;

        foreach ($customerreceiptssToDelete as $customerreceiptsRemoved) {
            $customerreceiptsRemoved->setSales(null);
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
                ->filterBySales($this)
                ->count($con);
        }

        return count($this->collCustomerreceiptss);
    }

    /**
     * Method called to associate a Customerreceipts object to this object
     * through the Customerreceipts foreign key attribute.
     *
     * @param    Customerreceipts $l Customerreceipts
     * @return Sales The current object (for fluent API support)
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
        $customerreceipts->setSales($this);
    }

    /**
     * @param	Customerreceipts $customerreceipts The customerreceipts object to remove.
     * @return Sales The current object (for fluent API support)
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
            $customerreceipts->setSales(null);
        }

        return $this;
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
     * Otherwise if this Sales is new, it will return
     * an empty collection; or if this Sales has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sales.
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
     * Otherwise if this Sales is new, it will return
     * an empty collection; or if this Sales has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sales.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Customerreceipts[] List of Customerreceipts objects
     */
    public function getCustomerreceiptssJoinCustomerdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CustomerreceiptsQuery::create(null, $criteria);
        $query->joinWith('Customerdetails', $join_behavior);

        return $this->getCustomerreceiptss($query, $con);
    }

    /**
     * Clears out the collRefundss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sales The current object (for fluent API support)
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
     * If this Sales is new, it will return
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
                    ->filterBySales($this)
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
     * @return Sales The current object (for fluent API support)
     */
    public function setRefundss(PropelCollection $refundss, PropelPDO $con = null)
    {
        $refundssToDelete = $this->getRefundss(new Criteria(), $con)->diff($refundss);


        $this->refundssScheduledForDeletion = $refundssToDelete;

        foreach ($refundssToDelete as $refundsRemoved) {
            $refundsRemoved->setSales(null);
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
                ->filterBySales($this)
                ->count($con);
        }

        return count($this->collRefundss);
    }

    /**
     * Method called to associate a Refunds object to this object
     * through the Refunds foreign key attribute.
     *
     * @param    Refunds $l Refunds
     * @return Sales The current object (for fluent API support)
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
        $refunds->setSales($this);
    }

    /**
     * @param	Refunds $refunds The refunds object to remove.
     * @return Sales The current object (for fluent API support)
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
            $refunds->setSales(null);
        }

        return $this;
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
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Refunds[] List of Refunds objects
     */
    public function getRefundssJoinCustomerdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RefundsQuery::create(null, $criteria);
        $query->joinWith('Customerdetails', $join_behavior);

        return $this->getRefundss($query, $con);
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
     * Otherwise if this Sales is new, it will return
     * an empty collection; or if this Sales has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sales.
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
     * Otherwise if this Sales is new, it will return
     * an empty collection; or if this Sales has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sales.
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
     * Clears out the collTranferedblokss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sales The current object (for fluent API support)
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
     * If this Sales is new, it will return
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
                    ->filterBySales($this)
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
     * @return Sales The current object (for fluent API support)
     */
    public function setTranferedblokss(PropelCollection $tranferedblokss, PropelPDO $con = null)
    {
        $tranferedblokssToDelete = $this->getTranferedblokss(new Criteria(), $con)->diff($tranferedblokss);


        $this->tranferedblokssScheduledForDeletion = $tranferedblokssToDelete;

        foreach ($tranferedblokssToDelete as $tranferedbloksRemoved) {
            $tranferedbloksRemoved->setSales(null);
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
                ->filterBySales($this)
                ->count($con);
        }

        return count($this->collTranferedblokss);
    }

    /**
     * Method called to associate a Tranferedbloks object to this object
     * through the Tranferedbloks foreign key attribute.
     *
     * @param    Tranferedbloks $l Tranferedbloks
     * @return Sales The current object (for fluent API support)
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
        $tranferedbloks->setSales($this);
    }

    /**
     * @param	Tranferedbloks $tranferedbloks The tranferedbloks object to remove.
     * @return Sales The current object (for fluent API support)
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
            $tranferedbloks->setSales(null);
        }

        return $this;
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
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Tranferedbloks[] List of Tranferedbloks objects
     */
    public function getTranferedblokssJoinCustomerdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TranferedbloksQuery::create(null, $criteria);
        $query->joinWith('Customerdetails', $join_behavior);

        return $this->getTranferedblokss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->refno = null;
        $this->customercode = null;
        $this->locationcode = null;
        $this->projectcode = null;
        $this->blockrefnumber = null;
        $this->payplanrefno = null;
        $this->nofinstallments = null;
        $this->description = null;
        $this->installamount = null;
        $this->totalpayable = null;
        $this->paymentduedate = null;
        $this->agrementstartdate = null;
        $this->agrementfinishdate = null;
        $this->saletype = null;
        $this->salerightoff_amt = null;
        $this->salerightoff_status = null;
        $this->salerightoff_comment = null;
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
            if ($this->collCustomerreceiptss) {
                foreach ($this->collCustomerreceiptss as $o) {
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
            if ($this->aCustomerdetails instanceof Persistent) {
              $this->aCustomerdetails->clearAllReferences($deep);
            }
            if ($this->aProjectdetails instanceof Persistent) {
              $this->aProjectdetails->clearAllReferences($deep);
            }
            if ($this->aPaymentplan instanceof Persistent) {
              $this->aPaymentplan->clearAllReferences($deep);
            }
            if ($this->aProject instanceof Persistent) {
              $this->aProject->clearAllReferences($deep);
            }
            if ($this->aLocation instanceof Persistent) {
              $this->aLocation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCustomerreceiptss instanceof PropelCollection) {
            $this->collCustomerreceiptss->clearIterator();
        }
        $this->collCustomerreceiptss = null;
        if ($this->collRefundss instanceof PropelCollection) {
            $this->collRefundss->clearIterator();
        }
        $this->collRefundss = null;
        if ($this->collTranferedblokss instanceof PropelCollection) {
            $this->collTranferedblokss->clearIterator();
        }
        $this->collTranferedblokss = null;
        $this->aCustomerdetails = null;
        $this->aProjectdetails = null;
        $this->aPaymentplan = null;
        $this->aProject = null;
        $this->aLocation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SalesPeer::DEFAULT_STRING_FORMAT);
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
