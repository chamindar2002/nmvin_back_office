<?php


/**
 * Base class that represents a row from the 'refunds' table.
 *
 * house sales of projects
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseRefunds extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RefundsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RefundsPeer
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
     * The value for the salerefno field.
     * @var        int
     */
    protected $salerefno;

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
     * The value for the refundamount field.
     * @var        double
     */
    protected $refundamount;

    /**
     * The value for the refundate field.
     * @var        string
     */
    protected $refundate;

    /**
     * The value for the deleted field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $deleted;

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
     * @var        Customerdetails
     */
    protected $aCustomerdetails;

    /**
     * @var        Projectdetails
     */
    protected $aProjectdetails;

    /**
     * @var        Project
     */
    protected $aProject;

    /**
     * @var        Location
     */
    protected $aLocation;

    /**
     * @var        Sales
     */
    protected $aSales;

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
        $this->deleted = false;
    }

    /**
     * Initializes internal state of BaseRefunds object.
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
     * Get the [salerefno] column value.
     * sale reference number
     * @return int
     */
    public function getSalerefno()
    {

        return $this->salerefno;
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
     * Get the [refundamount] column value.
     * Amount Refunded
     * @return double
     */
    public function getRefundamount()
    {

        return $this->refundamount;
    }

    /**
     * Get the [optionally formatted] temporal [refundate] column value.
     * refund Date
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getRefundate($format = '%x')
    {
        if ($this->refundate === null) {
            return null;
        }

        if ($this->refundate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->refundate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->refundate, true), $x);
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
     * Get the [deleted] column value.
     * Record deleted
     * @return boolean
     */
    public function getDeleted()
    {

        return $this->deleted;
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
     * Set the value of [refno] column.
     * reference number
     * @param  int $v new value
     * @return Refunds The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = RefundsPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [salerefno] column.
     * sale reference number
     * @param  int $v new value
     * @return Refunds The current object (for fluent API support)
     */
    public function setSalerefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->salerefno !== $v) {
            $this->salerefno = $v;
            $this->modifiedColumns[] = RefundsPeer::SALEREFNO;
        }

        if ($this->aSales !== null && $this->aSales->getRefno() !== $v) {
            $this->aSales = null;
        }


        return $this;
    } // setSalerefno()

    /**
     * Set the value of [customercode] column.
     * customer code
     * @param  int $v new value
     * @return Refunds The current object (for fluent API support)
     */
    public function setCustomercode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customercode !== $v) {
            $this->customercode = $v;
            $this->modifiedColumns[] = RefundsPeer::CUSTOMERCODE;
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
     * @return Refunds The current object (for fluent API support)
     */
    public function setLocationcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->locationcode !== $v) {
            $this->locationcode = $v;
            $this->modifiedColumns[] = RefundsPeer::LOCATIONCODE;
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
     * @return Refunds The current object (for fluent API support)
     */
    public function setProjectcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->projectcode !== $v) {
            $this->projectcode = $v;
            $this->modifiedColumns[] = RefundsPeer::PROJECTCODE;
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
     * @return Refunds The current object (for fluent API support)
     */
    public function setBlockrefnumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->blockrefnumber !== $v) {
            $this->blockrefnumber = $v;
            $this->modifiedColumns[] = RefundsPeer::BLOCKREFNUMBER;
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
     * @return Refunds The current object (for fluent API support)
     */
    public function setPayplanrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->payplanrefno !== $v) {
            $this->payplanrefno = $v;
            $this->modifiedColumns[] = RefundsPeer::PAYPLANREFNO;
        }


        return $this;
    } // setPayplanrefno()

    /**
     * Set the value of [refundamount] column.
     * Amount Refunded
     * @param  double $v new value
     * @return Refunds The current object (for fluent API support)
     */
    public function setRefundamount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->refundamount !== $v) {
            $this->refundamount = $v;
            $this->modifiedColumns[] = RefundsPeer::REFUNDAMOUNT;
        }


        return $this;
    } // setRefundamount()

    /**
     * Sets the value of [refundate] column to a normalized version of the date/time value specified.
     * refund Date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refunds The current object (for fluent API support)
     */
    public function setRefundate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->refundate !== null || $dt !== null) {
            $currentDateAsString = ($this->refundate !== null && $tmpDt = new DateTime($this->refundate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->refundate = $newDateAsString;
                $this->modifiedColumns[] = RefundsPeer::REFUNDATE;
            }
        } // if either are not null


        return $this;
    } // setRefundate()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Record deleted
     * @param boolean|integer|string $v The new value
     * @return Refunds The current object (for fluent API support)
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
            $this->modifiedColumns[] = RefundsPeer::DELETED;
        }


        return $this;
    } // setDeleted()

    /**
     * Set the value of [deletedby] column.
     * Deleted by
     * @param  int $v new value
     * @return Refunds The current object (for fluent API support)
     */
    public function setDeletedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deletedby !== $v) {
            $this->deletedby = $v;
            $this->modifiedColumns[] = RefundsPeer::DELETEDBY;
        }


        return $this;
    } // setDeletedby()

    /**
     * Sets the value of [deleteddate] column to a normalized version of the date/time value specified.
     * Deleted Date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refunds The current object (for fluent API support)
     */
    public function setDeleteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->deleteddate !== null && $tmpDt = new DateTime($this->deleteddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleteddate = $newDateAsString;
                $this->modifiedColumns[] = RefundsPeer::DELETEDDATE;
            }
        } // if either are not null


        return $this;
    } // setDeleteddate()

    /**
     * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
     * Deleted Time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refunds The current object (for fluent API support)
     */
    public function setDeletedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deletedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->deletedtime !== null && $tmpDt = new DateTime($this->deletedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deletedtime = $newDateAsString;
                $this->modifiedColumns[] = RefundsPeer::DELETEDTIME;
            }
        } // if either are not null


        return $this;
    } // setDeletedtime()

    /**
     * Set the value of [addedby] column.
     * Added by
     * @param  int $v new value
     * @return Refunds The current object (for fluent API support)
     */
    public function setAddedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->addedby !== $v) {
            $this->addedby = $v;
            $this->modifiedColumns[] = RefundsPeer::ADDEDBY;
        }


        return $this;
    } // setAddedby()

    /**
     * Sets the value of [addeddate] column to a normalized version of the date/time value specified.
     * Added date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refunds The current object (for fluent API support)
     */
    public function setAddeddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addeddate !== null || $dt !== null) {
            $currentDateAsString = ($this->addeddate !== null && $tmpDt = new DateTime($this->addeddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addeddate = $newDateAsString;
                $this->modifiedColumns[] = RefundsPeer::ADDEDDATE;
            }
        } // if either are not null


        return $this;
    } // setAddeddate()

    /**
     * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
     * Added time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refunds The current object (for fluent API support)
     */
    public function setAddedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->addedtime !== null && $tmpDt = new DateTime($this->addedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addedtime = $newDateAsString;
                $this->modifiedColumns[] = RefundsPeer::ADDEDTIME;
            }
        } // if either are not null


        return $this;
    } // setAddedtime()

    /**
     * Set the value of [lastmodifiedby] column.
     * Last modified by
     * @param  int $v new value
     * @return Refunds The current object (for fluent API support)
     */
    public function setLastmodifiedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lastmodifiedby !== $v) {
            $this->lastmodifiedby = $v;
            $this->modifiedColumns[] = RefundsPeer::LASTMODIFIEDBY;
        }


        return $this;
    } // setLastmodifiedby()

    /**
     * Sets the value of [lastmodifieddate] column to a normalized version of the date/time value specified.
     * Last modified date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refunds The current object (for fluent API support)
     */
    public function setLastmodifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifieddate !== null && $tmpDt = new DateTime($this->lastmodifieddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = RefundsPeer::LASTMODIFIEDDATE;
            }
        } // if either are not null


        return $this;
    } // setLastmodifieddate()

    /**
     * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
     * Last modified time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refunds The current object (for fluent API support)
     */
    public function setLastmodifiedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifiedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifiedtime !== null && $tmpDt = new DateTime($this->lastmodifiedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifiedtime = $newDateAsString;
                $this->modifiedColumns[] = RefundsPeer::LASTMODIFIEDTIME;
            }
        } // if either are not null


        return $this;
    } // setLastmodifiedtime()

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
            $this->salerefno = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->customercode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->locationcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->projectcode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->blockrefnumber = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->payplanrefno = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->refundamount = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->refundate = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->deleted = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
            $this->deletedby = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->deleteddate = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->deletedtime = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->addedby = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->addeddate = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->addedtime = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->lastmodifiedby = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->lastmodifieddate = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->lastmodifiedtime = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = RefundsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Refunds object", $e);
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

        if ($this->aSales !== null && $this->salerefno !== $this->aSales->getRefno()) {
            $this->aSales = null;
        }
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
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RefundsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomerdetails = null;
            $this->aProjectdetails = null;
            $this->aProject = null;
            $this->aLocation = null;
            $this->aSales = null;
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
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RefundsQuery::create()
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
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RefundsPeer::addInstanceToPool($this);
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

            if ($this->aSales !== null) {
                if ($this->aSales->isModified() || $this->aSales->isNew()) {
                    $affectedRows += $this->aSales->save($con);
                }
                $this->setSales($this->aSales);
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

        $this->modifiedColumns[] = RefundsPeer::REFNO;
        if (null !== $this->refno) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RefundsPeer::REFNO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RefundsPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`refno`';
        }
        if ($this->isColumnModified(RefundsPeer::SALEREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`salerefno`';
        }
        if ($this->isColumnModified(RefundsPeer::CUSTOMERCODE)) {
            $modifiedColumns[':p' . $index++]  = '`customercode`';
        }
        if ($this->isColumnModified(RefundsPeer::LOCATIONCODE)) {
            $modifiedColumns[':p' . $index++]  = '`locationcode`';
        }
        if ($this->isColumnModified(RefundsPeer::PROJECTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`projectcode`';
        }
        if ($this->isColumnModified(RefundsPeer::BLOCKREFNUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`blockrefnumber`';
        }
        if ($this->isColumnModified(RefundsPeer::PAYPLANREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`payplanrefno`';
        }
        if ($this->isColumnModified(RefundsPeer::REFUNDAMOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`refundamount`';
        }
        if ($this->isColumnModified(RefundsPeer::REFUNDATE)) {
            $modifiedColumns[':p' . $index++]  = '`refundate`';
        }
        if ($this->isColumnModified(RefundsPeer::DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`deleted`';
        }
        if ($this->isColumnModified(RefundsPeer::DELETEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`deletedby`';
        }
        if ($this->isColumnModified(RefundsPeer::DELETEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`deleteddate`';
        }
        if ($this->isColumnModified(RefundsPeer::DELETEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`deletedtime`';
        }
        if ($this->isColumnModified(RefundsPeer::ADDEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`addedby`';
        }
        if ($this->isColumnModified(RefundsPeer::ADDEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`addeddate`';
        }
        if ($this->isColumnModified(RefundsPeer::ADDEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`addedtime`';
        }
        if ($this->isColumnModified(RefundsPeer::LASTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedby`';
        }
        if ($this->isColumnModified(RefundsPeer::LASTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifieddate`';
        }
        if ($this->isColumnModified(RefundsPeer::LASTMODIFIEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedtime`';
        }

        $sql = sprintf(
            'INSERT INTO `refunds` (%s) VALUES (%s)',
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
                    case '`salerefno`':
                        $stmt->bindValue($identifier, $this->salerefno, PDO::PARAM_INT);
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
                    case '`refundamount`':
                        $stmt->bindValue($identifier, $this->refundamount, PDO::PARAM_STR);
                        break;
                    case '`refundate`':
                        $stmt->bindValue($identifier, $this->refundate, PDO::PARAM_STR);
                        break;
                    case '`deleted`':
                        $stmt->bindValue($identifier, (int) $this->deleted, PDO::PARAM_INT);
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

            if ($this->aSales !== null) {
                if (!$this->aSales->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSales->getValidationFailures());
                }
            }


            if (($retval = RefundsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = RefundsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSalerefno();
                break;
            case 2:
                return $this->getCustomercode();
                break;
            case 3:
                return $this->getLocationcode();
                break;
            case 4:
                return $this->getProjectcode();
                break;
            case 5:
                return $this->getBlockrefnumber();
                break;
            case 6:
                return $this->getPayplanrefno();
                break;
            case 7:
                return $this->getRefundamount();
                break;
            case 8:
                return $this->getRefundate();
                break;
            case 9:
                return $this->getDeleted();
                break;
            case 10:
                return $this->getDeletedby();
                break;
            case 11:
                return $this->getDeleteddate();
                break;
            case 12:
                return $this->getDeletedtime();
                break;
            case 13:
                return $this->getAddedby();
                break;
            case 14:
                return $this->getAddeddate();
                break;
            case 15:
                return $this->getAddedtime();
                break;
            case 16:
                return $this->getLastmodifiedby();
                break;
            case 17:
                return $this->getLastmodifieddate();
                break;
            case 18:
                return $this->getLastmodifiedtime();
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
        if (isset($alreadyDumpedObjects['Refunds'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Refunds'][$this->getPrimaryKey()] = true;
        $keys = RefundsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRefno(),
            $keys[1] => $this->getSalerefno(),
            $keys[2] => $this->getCustomercode(),
            $keys[3] => $this->getLocationcode(),
            $keys[4] => $this->getProjectcode(),
            $keys[5] => $this->getBlockrefnumber(),
            $keys[6] => $this->getPayplanrefno(),
            $keys[7] => $this->getRefundamount(),
            $keys[8] => $this->getRefundate(),
            $keys[9] => $this->getDeleted(),
            $keys[10] => $this->getDeletedby(),
            $keys[11] => $this->getDeleteddate(),
            $keys[12] => $this->getDeletedtime(),
            $keys[13] => $this->getAddedby(),
            $keys[14] => $this->getAddeddate(),
            $keys[15] => $this->getAddedtime(),
            $keys[16] => $this->getLastmodifiedby(),
            $keys[17] => $this->getLastmodifieddate(),
            $keys[18] => $this->getLastmodifiedtime(),
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
            if (null !== $this->aProject) {
                $result['Project'] = $this->aProject->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aLocation) {
                $result['Location'] = $this->aLocation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSales) {
                $result['Sales'] = $this->aSales->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = RefundsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSalerefno($value);
                break;
            case 2:
                $this->setCustomercode($value);
                break;
            case 3:
                $this->setLocationcode($value);
                break;
            case 4:
                $this->setProjectcode($value);
                break;
            case 5:
                $this->setBlockrefnumber($value);
                break;
            case 6:
                $this->setPayplanrefno($value);
                break;
            case 7:
                $this->setRefundamount($value);
                break;
            case 8:
                $this->setRefundate($value);
                break;
            case 9:
                $this->setDeleted($value);
                break;
            case 10:
                $this->setDeletedby($value);
                break;
            case 11:
                $this->setDeleteddate($value);
                break;
            case 12:
                $this->setDeletedtime($value);
                break;
            case 13:
                $this->setAddedby($value);
                break;
            case 14:
                $this->setAddeddate($value);
                break;
            case 15:
                $this->setAddedtime($value);
                break;
            case 16:
                $this->setLastmodifiedby($value);
                break;
            case 17:
                $this->setLastmodifieddate($value);
                break;
            case 18:
                $this->setLastmodifiedtime($value);
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
        $keys = RefundsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRefno($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSalerefno($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCustomercode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLocationcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProjectcode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setBlockrefnumber($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPayplanrefno($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRefundamount($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRefundate($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDeleted($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDeletedby($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDeleteddate($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDeletedtime($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAddedby($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAddeddate($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAddedtime($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLastmodifiedby($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLastmodifieddate($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLastmodifiedtime($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RefundsPeer::DATABASE_NAME);

        if ($this->isColumnModified(RefundsPeer::REFNO)) $criteria->add(RefundsPeer::REFNO, $this->refno);
        if ($this->isColumnModified(RefundsPeer::SALEREFNO)) $criteria->add(RefundsPeer::SALEREFNO, $this->salerefno);
        if ($this->isColumnModified(RefundsPeer::CUSTOMERCODE)) $criteria->add(RefundsPeer::CUSTOMERCODE, $this->customercode);
        if ($this->isColumnModified(RefundsPeer::LOCATIONCODE)) $criteria->add(RefundsPeer::LOCATIONCODE, $this->locationcode);
        if ($this->isColumnModified(RefundsPeer::PROJECTCODE)) $criteria->add(RefundsPeer::PROJECTCODE, $this->projectcode);
        if ($this->isColumnModified(RefundsPeer::BLOCKREFNUMBER)) $criteria->add(RefundsPeer::BLOCKREFNUMBER, $this->blockrefnumber);
        if ($this->isColumnModified(RefundsPeer::PAYPLANREFNO)) $criteria->add(RefundsPeer::PAYPLANREFNO, $this->payplanrefno);
        if ($this->isColumnModified(RefundsPeer::REFUNDAMOUNT)) $criteria->add(RefundsPeer::REFUNDAMOUNT, $this->refundamount);
        if ($this->isColumnModified(RefundsPeer::REFUNDATE)) $criteria->add(RefundsPeer::REFUNDATE, $this->refundate);
        if ($this->isColumnModified(RefundsPeer::DELETED)) $criteria->add(RefundsPeer::DELETED, $this->deleted);
        if ($this->isColumnModified(RefundsPeer::DELETEDBY)) $criteria->add(RefundsPeer::DELETEDBY, $this->deletedby);
        if ($this->isColumnModified(RefundsPeer::DELETEDDATE)) $criteria->add(RefundsPeer::DELETEDDATE, $this->deleteddate);
        if ($this->isColumnModified(RefundsPeer::DELETEDTIME)) $criteria->add(RefundsPeer::DELETEDTIME, $this->deletedtime);
        if ($this->isColumnModified(RefundsPeer::ADDEDBY)) $criteria->add(RefundsPeer::ADDEDBY, $this->addedby);
        if ($this->isColumnModified(RefundsPeer::ADDEDDATE)) $criteria->add(RefundsPeer::ADDEDDATE, $this->addeddate);
        if ($this->isColumnModified(RefundsPeer::ADDEDTIME)) $criteria->add(RefundsPeer::ADDEDTIME, $this->addedtime);
        if ($this->isColumnModified(RefundsPeer::LASTMODIFIEDBY)) $criteria->add(RefundsPeer::LASTMODIFIEDBY, $this->lastmodifiedby);
        if ($this->isColumnModified(RefundsPeer::LASTMODIFIEDDATE)) $criteria->add(RefundsPeer::LASTMODIFIEDDATE, $this->lastmodifieddate);
        if ($this->isColumnModified(RefundsPeer::LASTMODIFIEDTIME)) $criteria->add(RefundsPeer::LASTMODIFIEDTIME, $this->lastmodifiedtime);

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
        $criteria = new Criteria(RefundsPeer::DATABASE_NAME);
        $criteria->add(RefundsPeer::REFNO, $this->refno);

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
     * @param object $copyObj An object of Refunds (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSalerefno($this->getSalerefno());
        $copyObj->setCustomercode($this->getCustomercode());
        $copyObj->setLocationcode($this->getLocationcode());
        $copyObj->setProjectcode($this->getProjectcode());
        $copyObj->setBlockrefnumber($this->getBlockrefnumber());
        $copyObj->setPayplanrefno($this->getPayplanrefno());
        $copyObj->setRefundamount($this->getRefundamount());
        $copyObj->setRefundate($this->getRefundate());
        $copyObj->setDeleted($this->getDeleted());
        $copyObj->setDeletedby($this->getDeletedby());
        $copyObj->setDeleteddate($this->getDeleteddate());
        $copyObj->setDeletedtime($this->getDeletedtime());
        $copyObj->setAddedby($this->getAddedby());
        $copyObj->setAddeddate($this->getAddeddate());
        $copyObj->setAddedtime($this->getAddedtime());
        $copyObj->setLastmodifiedby($this->getLastmodifiedby());
        $copyObj->setLastmodifieddate($this->getLastmodifieddate());
        $copyObj->setLastmodifiedtime($this->getLastmodifiedtime());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return Refunds Clone of current object.
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
     * @return RefundsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RefundsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Customerdetails object.
     *
     * @param                  Customerdetails $v
     * @return Refunds The current object (for fluent API support)
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
            $v->addRefunds($this);
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
                $this->aCustomerdetails->addRefundss($this);
             */
        }

        return $this->aCustomerdetails;
    }

    /**
     * Declares an association between this object and a Projectdetails object.
     *
     * @param                  Projectdetails $v
     * @return Refunds The current object (for fluent API support)
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
            $v->addRefunds($this);
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
                $this->aProjectdetails->addRefundss($this);
             */
        }

        return $this->aProjectdetails;
    }

    /**
     * Declares an association between this object and a Project object.
     *
     * @param                  Project $v
     * @return Refunds The current object (for fluent API support)
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
            $v->addRefunds($this);
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
                $this->aProject->addRefundss($this);
             */
        }

        return $this->aProject;
    }

    /**
     * Declares an association between this object and a Location object.
     *
     * @param                  Location $v
     * @return Refunds The current object (for fluent API support)
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
            $v->addRefunds($this);
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
                $this->aLocation->addRefundss($this);
             */
        }

        return $this->aLocation;
    }

    /**
     * Declares an association between this object and a Sales object.
     *
     * @param                  Sales $v
     * @return Refunds The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSales(Sales $v = null)
    {
        if ($v === null) {
            $this->setSalerefno(NULL);
        } else {
            $this->setSalerefno($v->getRefno());
        }

        $this->aSales = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sales object, it will not be re-added.
        if ($v !== null) {
            $v->addRefunds($this);
        }


        return $this;
    }


    /**
     * Get the associated Sales object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sales The associated Sales object.
     * @throws PropelException
     */
    public function getSales(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSales === null && ($this->salerefno !== null) && $doQuery) {
            $this->aSales = SalesQuery::create()->findPk($this->salerefno, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSales->addRefundss($this);
             */
        }

        return $this->aSales;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->refno = null;
        $this->salerefno = null;
        $this->customercode = null;
        $this->locationcode = null;
        $this->projectcode = null;
        $this->blockrefnumber = null;
        $this->payplanrefno = null;
        $this->refundamount = null;
        $this->refundate = null;
        $this->deleted = null;
        $this->deletedby = null;
        $this->deleteddate = null;
        $this->deletedtime = null;
        $this->addedby = null;
        $this->addeddate = null;
        $this->addedtime = null;
        $this->lastmodifiedby = null;
        $this->lastmodifieddate = null;
        $this->lastmodifiedtime = null;
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
            if ($this->aCustomerdetails instanceof Persistent) {
              $this->aCustomerdetails->clearAllReferences($deep);
            }
            if ($this->aProjectdetails instanceof Persistent) {
              $this->aProjectdetails->clearAllReferences($deep);
            }
            if ($this->aProject instanceof Persistent) {
              $this->aProject->clearAllReferences($deep);
            }
            if ($this->aLocation instanceof Persistent) {
              $this->aLocation->clearAllReferences($deep);
            }
            if ($this->aSales instanceof Persistent) {
              $this->aSales->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCustomerdetails = null;
        $this->aProjectdetails = null;
        $this->aProject = null;
        $this->aLocation = null;
        $this->aSales = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RefundsPeer::DEFAULT_STRING_FORMAT);
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
