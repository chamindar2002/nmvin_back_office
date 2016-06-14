<?php


/**
 * Base class that represents a row from the 'paymentplan' table.
 *
 * payment plans for houses in a project
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BasePaymentplan extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PaymentplanPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PaymentplanPeer
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
     * The value for the projectcode field.
     * @var        int
     */
    protected $projectcode;

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
     * The value for the rsvfee field.
     * @var        double
     */
    protected $rsvfee;

    /**
     * The value for the downpayment field.
     * @var        double
     */
    protected $downpayment;

    /**
     * The value for the bankloan field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $bankloan;

    /**
     * The value for the adtnlland field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $adtnlland;

    /**
     * The value for the totalpayable field.
     * @var        double
     */
    protected $totalpayable;

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
     * The value for the devechargers1 field.
     * @var        double
     */
    protected $devechargers1;

    /**
     * The value for the devechargers2 field.
     * @var        double
     */
    protected $devechargers2;

    /**
     * The value for the infrastructure field.
     * @var        double
     */
    protected $infrastructure;

    /**
     * The value for the occupation field.
     * @var        double
     */
    protected $occupation;

    /**
     * @var        Project
     */
    protected $aProject;

    /**
     * @var        PropelObjectCollection|Sales[] Collection to store aggregation of Sales objects.
     */
    protected $collSaless;
    protected $collSalessPartial;

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
    protected $salessScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->bankloan = 0;
        $this->adtnlland = 0;
        $this->deleted = false;
    }

    /**
     * Initializes internal state of BasePaymentplan object.
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
     * Get the [projectcode] column value.
     * project code
     * @return int
     */
    public function getProjectcode()
    {

        return $this->projectcode;
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
     * Get the [rsvfee] column value.
     * Reservation Fee
     * @return double
     */
    public function getRsvfee()
    {

        return $this->rsvfee;
    }

    /**
     * Get the [downpayment] column value.
     * Downpayment
     * @return double
     */
    public function getDownpayment()
    {

        return $this->downpayment;
    }

    /**
     * Get the [bankloan] column value.
     * Bank Loan
     * @return double
     */
    public function getBankloan()
    {

        return $this->bankloan;
    }

    /**
     * Get the [adtnlland] column value.
     * Additional Land Cost
     * @return double
     */
    public function getAdtnlland()
    {

        return $this->adtnlland;
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
     * Get the [devechargers1] column value.
     * devechargers1
     * @return double
     */
    public function getDevechargers1()
    {

        return $this->devechargers1;
    }

    /**
     * Get the [devechargers2] column value.
     * devechargers2
     * @return double
     */
    public function getDevechargers2()
    {

        return $this->devechargers2;
    }

    /**
     * Get the [infrastructure] column value.
     * infrastructure
     * @return double
     */
    public function getInfrastructure()
    {

        return $this->infrastructure;
    }

    /**
     * Get the [occupation] column value.
     * occupation
     * @return double
     */
    public function getOccupation()
    {

        return $this->occupation;
    }

    /**
     * Set the value of [refno] column.
     * reference number
     * @param  int $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = PaymentplanPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [projectcode] column.
     * project code
     * @param  int $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setProjectcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->projectcode !== $v) {
            $this->projectcode = $v;
            $this->modifiedColumns[] = PaymentplanPeer::PROJECTCODE;
        }

        if ($this->aProject !== null && $this->aProject->getProjectcode() !== $v) {
            $this->aProject = null;
        }


        return $this;
    } // setProjectcode()

    /**
     * Set the value of [nofinstallments] column.
     * number of installments
     * @param  int $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setNofinstallments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nofinstallments !== $v) {
            $this->nofinstallments = $v;
            $this->modifiedColumns[] = PaymentplanPeer::NOFINSTALLMENTS;
        }


        return $this;
    } // setNofinstallments()

    /**
     * Set the value of [description] column.
     * payment plan description
     * @param  string $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = PaymentplanPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [installamount] column.
     * Installment amount
     * @param  double $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setInstallamount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->installamount !== $v) {
            $this->installamount = $v;
            $this->modifiedColumns[] = PaymentplanPeer::INSTALLAMOUNT;
        }


        return $this;
    } // setInstallamount()

    /**
     * Set the value of [rsvfee] column.
     * Reservation Fee
     * @param  double $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setRsvfee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rsvfee !== $v) {
            $this->rsvfee = $v;
            $this->modifiedColumns[] = PaymentplanPeer::RSVFEE;
        }


        return $this;
    } // setRsvfee()

    /**
     * Set the value of [downpayment] column.
     * Downpayment
     * @param  double $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setDownpayment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->downpayment !== $v) {
            $this->downpayment = $v;
            $this->modifiedColumns[] = PaymentplanPeer::DOWNPAYMENT;
        }


        return $this;
    } // setDownpayment()

    /**
     * Set the value of [bankloan] column.
     * Bank Loan
     * @param  double $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setBankloan($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bankloan !== $v) {
            $this->bankloan = $v;
            $this->modifiedColumns[] = PaymentplanPeer::BANKLOAN;
        }


        return $this;
    } // setBankloan()

    /**
     * Set the value of [adtnlland] column.
     * Additional Land Cost
     * @param  double $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setAdtnlland($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->adtnlland !== $v) {
            $this->adtnlland = $v;
            $this->modifiedColumns[] = PaymentplanPeer::ADTNLLAND;
        }


        return $this;
    } // setAdtnlland()

    /**
     * Set the value of [totalpayable] column.
     * Total Amount Payable (nofinstallments * installamount)
     * @param  double $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setTotalpayable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->totalpayable !== $v) {
            $this->totalpayable = $v;
            $this->modifiedColumns[] = PaymentplanPeer::TOTALPAYABLE;
        }


        return $this;
    } // setTotalpayable()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Record deleted
     * @param boolean|integer|string $v The new value
     * @return Paymentplan The current object (for fluent API support)
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
            $this->modifiedColumns[] = PaymentplanPeer::DELETED;
        }


        return $this;
    } // setDeleted()

    /**
     * Set the value of [addedby] column.
     * Added by
     * @param  int $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setAddedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->addedby !== $v) {
            $this->addedby = $v;
            $this->modifiedColumns[] = PaymentplanPeer::ADDEDBY;
        }


        return $this;
    } // setAddedby()

    /**
     * Sets the value of [addeddate] column to a normalized version of the date/time value specified.
     * Added date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setAddeddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addeddate !== null || $dt !== null) {
            $currentDateAsString = ($this->addeddate !== null && $tmpDt = new DateTime($this->addeddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addeddate = $newDateAsString;
                $this->modifiedColumns[] = PaymentplanPeer::ADDEDDATE;
            }
        } // if either are not null


        return $this;
    } // setAddeddate()

    /**
     * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
     * Added time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setAddedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->addedtime !== null && $tmpDt = new DateTime($this->addedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addedtime = $newDateAsString;
                $this->modifiedColumns[] = PaymentplanPeer::ADDEDTIME;
            }
        } // if either are not null


        return $this;
    } // setAddedtime()

    /**
     * Set the value of [lastmodifiedby] column.
     * Last modified by
     * @param  int $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setLastmodifiedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lastmodifiedby !== $v) {
            $this->lastmodifiedby = $v;
            $this->modifiedColumns[] = PaymentplanPeer::LASTMODIFIEDBY;
        }


        return $this;
    } // setLastmodifiedby()

    /**
     * Sets the value of [lastmodifieddate] column to a normalized version of the date/time value specified.
     * Last modified date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setLastmodifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifieddate !== null && $tmpDt = new DateTime($this->lastmodifieddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = PaymentplanPeer::LASTMODIFIEDDATE;
            }
        } // if either are not null


        return $this;
    } // setLastmodifieddate()

    /**
     * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
     * Last modified time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setLastmodifiedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifiedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifiedtime !== null && $tmpDt = new DateTime($this->lastmodifiedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifiedtime = $newDateAsString;
                $this->modifiedColumns[] = PaymentplanPeer::LASTMODIFIEDTIME;
            }
        } // if either are not null


        return $this;
    } // setLastmodifiedtime()

    /**
     * Set the value of [deletedby] column.
     * Deleted by
     * @param  int $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setDeletedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deletedby !== $v) {
            $this->deletedby = $v;
            $this->modifiedColumns[] = PaymentplanPeer::DELETEDBY;
        }


        return $this;
    } // setDeletedby()

    /**
     * Sets the value of [deleteddate] column to a normalized version of the date/time value specified.
     * Deleted Date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setDeleteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->deleteddate !== null && $tmpDt = new DateTime($this->deleteddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleteddate = $newDateAsString;
                $this->modifiedColumns[] = PaymentplanPeer::DELETEDDATE;
            }
        } // if either are not null


        return $this;
    } // setDeleteddate()

    /**
     * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
     * Deleted Time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setDeletedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deletedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->deletedtime !== null && $tmpDt = new DateTime($this->deletedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deletedtime = $newDateAsString;
                $this->modifiedColumns[] = PaymentplanPeer::DELETEDTIME;
            }
        } // if either are not null


        return $this;
    } // setDeletedtime()

    /**
     * Set the value of [devechargers1] column.
     * devechargers1
     * @param  double $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setDevechargers1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->devechargers1 !== $v) {
            $this->devechargers1 = $v;
            $this->modifiedColumns[] = PaymentplanPeer::DEVECHARGERS1;
        }


        return $this;
    } // setDevechargers1()

    /**
     * Set the value of [devechargers2] column.
     * devechargers2
     * @param  double $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setDevechargers2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->devechargers2 !== $v) {
            $this->devechargers2 = $v;
            $this->modifiedColumns[] = PaymentplanPeer::DEVECHARGERS2;
        }


        return $this;
    } // setDevechargers2()

    /**
     * Set the value of [infrastructure] column.
     * infrastructure
     * @param  double $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setInfrastructure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->infrastructure !== $v) {
            $this->infrastructure = $v;
            $this->modifiedColumns[] = PaymentplanPeer::INFRASTRUCTURE;
        }


        return $this;
    } // setInfrastructure()

    /**
     * Set the value of [occupation] column.
     * occupation
     * @param  double $v new value
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setOccupation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->occupation !== $v) {
            $this->occupation = $v;
            $this->modifiedColumns[] = PaymentplanPeer::OCCUPATION;
        }


        return $this;
    } // setOccupation()

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
            if ($this->bankloan !== 0) {
                return false;
            }

            if ($this->adtnlland !== 0) {
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
            $this->projectcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->nofinstallments = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->installamount = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->rsvfee = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->downpayment = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->bankloan = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->adtnlland = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->totalpayable = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->deleted = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->addedby = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->addeddate = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->addedtime = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->lastmodifiedby = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->lastmodifieddate = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->lastmodifiedtime = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->deletedby = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->deleteddate = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->deletedtime = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->devechargers1 = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->devechargers2 = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->infrastructure = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->occupation = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 24; // 24 = PaymentplanPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Paymentplan object", $e);
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

        if ($this->aProject !== null && $this->projectcode !== $this->aProject->getProjectcode()) {
            $this->aProject = null;
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
            $con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PaymentplanPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aProject = null;
            $this->collSaless = null;

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
            $con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PaymentplanQuery::create()
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
            $con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PaymentplanPeer::addInstanceToPool($this);
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

            if ($this->aProject !== null) {
                if ($this->aProject->isModified() || $this->aProject->isNew()) {
                    $affectedRows += $this->aProject->save($con);
                }
                $this->setProject($this->aProject);
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

        $this->modifiedColumns[] = PaymentplanPeer::REFNO;
        if (null !== $this->refno) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PaymentplanPeer::REFNO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PaymentplanPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`refno`';
        }
        if ($this->isColumnModified(PaymentplanPeer::PROJECTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`projectcode`';
        }
        if ($this->isColumnModified(PaymentplanPeer::NOFINSTALLMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`nofinstallments`';
        }
        if ($this->isColumnModified(PaymentplanPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(PaymentplanPeer::INSTALLAMOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`installamount`';
        }
        if ($this->isColumnModified(PaymentplanPeer::RSVFEE)) {
            $modifiedColumns[':p' . $index++]  = '`rsvfee`';
        }
        if ($this->isColumnModified(PaymentplanPeer::DOWNPAYMENT)) {
            $modifiedColumns[':p' . $index++]  = '`downpayment`';
        }
        if ($this->isColumnModified(PaymentplanPeer::BANKLOAN)) {
            $modifiedColumns[':p' . $index++]  = '`bankloan`';
        }
        if ($this->isColumnModified(PaymentplanPeer::ADTNLLAND)) {
            $modifiedColumns[':p' . $index++]  = '`adtnlland`';
        }
        if ($this->isColumnModified(PaymentplanPeer::TOTALPAYABLE)) {
            $modifiedColumns[':p' . $index++]  = '`totalpayable`';
        }
        if ($this->isColumnModified(PaymentplanPeer::DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`deleted`';
        }
        if ($this->isColumnModified(PaymentplanPeer::ADDEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`addedby`';
        }
        if ($this->isColumnModified(PaymentplanPeer::ADDEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`addeddate`';
        }
        if ($this->isColumnModified(PaymentplanPeer::ADDEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`addedtime`';
        }
        if ($this->isColumnModified(PaymentplanPeer::LASTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedby`';
        }
        if ($this->isColumnModified(PaymentplanPeer::LASTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifieddate`';
        }
        if ($this->isColumnModified(PaymentplanPeer::LASTMODIFIEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedtime`';
        }
        if ($this->isColumnModified(PaymentplanPeer::DELETEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`deletedby`';
        }
        if ($this->isColumnModified(PaymentplanPeer::DELETEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`deleteddate`';
        }
        if ($this->isColumnModified(PaymentplanPeer::DELETEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`deletedtime`';
        }
        if ($this->isColumnModified(PaymentplanPeer::DEVECHARGERS1)) {
            $modifiedColumns[':p' . $index++]  = '`devechargers1`';
        }
        if ($this->isColumnModified(PaymentplanPeer::DEVECHARGERS2)) {
            $modifiedColumns[':p' . $index++]  = '`devechargers2`';
        }
        if ($this->isColumnModified(PaymentplanPeer::INFRASTRUCTURE)) {
            $modifiedColumns[':p' . $index++]  = '`infrastructure`';
        }
        if ($this->isColumnModified(PaymentplanPeer::OCCUPATION)) {
            $modifiedColumns[':p' . $index++]  = '`occupation`';
        }

        $sql = sprintf(
            'INSERT INTO `paymentplan` (%s) VALUES (%s)',
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
                    case '`projectcode`':
                        $stmt->bindValue($identifier, $this->projectcode, PDO::PARAM_INT);
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
                    case '`rsvfee`':
                        $stmt->bindValue($identifier, $this->rsvfee, PDO::PARAM_STR);
                        break;
                    case '`downpayment`':
                        $stmt->bindValue($identifier, $this->downpayment, PDO::PARAM_STR);
                        break;
                    case '`bankloan`':
                        $stmt->bindValue($identifier, $this->bankloan, PDO::PARAM_STR);
                        break;
                    case '`adtnlland`':
                        $stmt->bindValue($identifier, $this->adtnlland, PDO::PARAM_STR);
                        break;
                    case '`totalpayable`':
                        $stmt->bindValue($identifier, $this->totalpayable, PDO::PARAM_STR);
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
                    case '`devechargers1`':
                        $stmt->bindValue($identifier, $this->devechargers1, PDO::PARAM_STR);
                        break;
                    case '`devechargers2`':
                        $stmt->bindValue($identifier, $this->devechargers2, PDO::PARAM_STR);
                        break;
                    case '`infrastructure`':
                        $stmt->bindValue($identifier, $this->infrastructure, PDO::PARAM_STR);
                        break;
                    case '`occupation`':
                        $stmt->bindValue($identifier, $this->occupation, PDO::PARAM_STR);
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

            if ($this->aProject !== null) {
                if (!$this->aProject->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProject->getValidationFailures());
                }
            }


            if (($retval = PaymentplanPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PaymentplanPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getProjectcode();
                break;
            case 2:
                return $this->getNofinstallments();
                break;
            case 3:
                return $this->getDescription();
                break;
            case 4:
                return $this->getInstallamount();
                break;
            case 5:
                return $this->getRsvfee();
                break;
            case 6:
                return $this->getDownpayment();
                break;
            case 7:
                return $this->getBankloan();
                break;
            case 8:
                return $this->getAdtnlland();
                break;
            case 9:
                return $this->getTotalpayable();
                break;
            case 10:
                return $this->getDeleted();
                break;
            case 11:
                return $this->getAddedby();
                break;
            case 12:
                return $this->getAddeddate();
                break;
            case 13:
                return $this->getAddedtime();
                break;
            case 14:
                return $this->getLastmodifiedby();
                break;
            case 15:
                return $this->getLastmodifieddate();
                break;
            case 16:
                return $this->getLastmodifiedtime();
                break;
            case 17:
                return $this->getDeletedby();
                break;
            case 18:
                return $this->getDeleteddate();
                break;
            case 19:
                return $this->getDeletedtime();
                break;
            case 20:
                return $this->getDevechargers1();
                break;
            case 21:
                return $this->getDevechargers2();
                break;
            case 22:
                return $this->getInfrastructure();
                break;
            case 23:
                return $this->getOccupation();
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
        if (isset($alreadyDumpedObjects['Paymentplan'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Paymentplan'][$this->getPrimaryKey()] = true;
        $keys = PaymentplanPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRefno(),
            $keys[1] => $this->getProjectcode(),
            $keys[2] => $this->getNofinstallments(),
            $keys[3] => $this->getDescription(),
            $keys[4] => $this->getInstallamount(),
            $keys[5] => $this->getRsvfee(),
            $keys[6] => $this->getDownpayment(),
            $keys[7] => $this->getBankloan(),
            $keys[8] => $this->getAdtnlland(),
            $keys[9] => $this->getTotalpayable(),
            $keys[10] => $this->getDeleted(),
            $keys[11] => $this->getAddedby(),
            $keys[12] => $this->getAddeddate(),
            $keys[13] => $this->getAddedtime(),
            $keys[14] => $this->getLastmodifiedby(),
            $keys[15] => $this->getLastmodifieddate(),
            $keys[16] => $this->getLastmodifiedtime(),
            $keys[17] => $this->getDeletedby(),
            $keys[18] => $this->getDeleteddate(),
            $keys[19] => $this->getDeletedtime(),
            $keys[20] => $this->getDevechargers1(),
            $keys[21] => $this->getDevechargers2(),
            $keys[22] => $this->getInfrastructure(),
            $keys[23] => $this->getOccupation(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aProject) {
                $result['Project'] = $this->aProject->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSaless) {
                $result['Saless'] = $this->collSaless->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PaymentplanPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setProjectcode($value);
                break;
            case 2:
                $this->setNofinstallments($value);
                break;
            case 3:
                $this->setDescription($value);
                break;
            case 4:
                $this->setInstallamount($value);
                break;
            case 5:
                $this->setRsvfee($value);
                break;
            case 6:
                $this->setDownpayment($value);
                break;
            case 7:
                $this->setBankloan($value);
                break;
            case 8:
                $this->setAdtnlland($value);
                break;
            case 9:
                $this->setTotalpayable($value);
                break;
            case 10:
                $this->setDeleted($value);
                break;
            case 11:
                $this->setAddedby($value);
                break;
            case 12:
                $this->setAddeddate($value);
                break;
            case 13:
                $this->setAddedtime($value);
                break;
            case 14:
                $this->setLastmodifiedby($value);
                break;
            case 15:
                $this->setLastmodifieddate($value);
                break;
            case 16:
                $this->setLastmodifiedtime($value);
                break;
            case 17:
                $this->setDeletedby($value);
                break;
            case 18:
                $this->setDeleteddate($value);
                break;
            case 19:
                $this->setDeletedtime($value);
                break;
            case 20:
                $this->setDevechargers1($value);
                break;
            case 21:
                $this->setDevechargers2($value);
                break;
            case 22:
                $this->setInfrastructure($value);
                break;
            case 23:
                $this->setOccupation($value);
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
        $keys = PaymentplanPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRefno($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setProjectcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNofinstallments($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setInstallamount($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRsvfee($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDownpayment($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setBankloan($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAdtnlland($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTotalpayable($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDeleted($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAddedby($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAddeddate($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAddedtime($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLastmodifiedby($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setLastmodifieddate($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLastmodifiedtime($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDeletedby($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDeleteddate($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDeletedtime($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDevechargers1($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDevechargers2($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setInfrastructure($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setOccupation($arr[$keys[23]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PaymentplanPeer::DATABASE_NAME);

        if ($this->isColumnModified(PaymentplanPeer::REFNO)) $criteria->add(PaymentplanPeer::REFNO, $this->refno);
        if ($this->isColumnModified(PaymentplanPeer::PROJECTCODE)) $criteria->add(PaymentplanPeer::PROJECTCODE, $this->projectcode);
        if ($this->isColumnModified(PaymentplanPeer::NOFINSTALLMENTS)) $criteria->add(PaymentplanPeer::NOFINSTALLMENTS, $this->nofinstallments);
        if ($this->isColumnModified(PaymentplanPeer::DESCRIPTION)) $criteria->add(PaymentplanPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(PaymentplanPeer::INSTALLAMOUNT)) $criteria->add(PaymentplanPeer::INSTALLAMOUNT, $this->installamount);
        if ($this->isColumnModified(PaymentplanPeer::RSVFEE)) $criteria->add(PaymentplanPeer::RSVFEE, $this->rsvfee);
        if ($this->isColumnModified(PaymentplanPeer::DOWNPAYMENT)) $criteria->add(PaymentplanPeer::DOWNPAYMENT, $this->downpayment);
        if ($this->isColumnModified(PaymentplanPeer::BANKLOAN)) $criteria->add(PaymentplanPeer::BANKLOAN, $this->bankloan);
        if ($this->isColumnModified(PaymentplanPeer::ADTNLLAND)) $criteria->add(PaymentplanPeer::ADTNLLAND, $this->adtnlland);
        if ($this->isColumnModified(PaymentplanPeer::TOTALPAYABLE)) $criteria->add(PaymentplanPeer::TOTALPAYABLE, $this->totalpayable);
        if ($this->isColumnModified(PaymentplanPeer::DELETED)) $criteria->add(PaymentplanPeer::DELETED, $this->deleted);
        if ($this->isColumnModified(PaymentplanPeer::ADDEDBY)) $criteria->add(PaymentplanPeer::ADDEDBY, $this->addedby);
        if ($this->isColumnModified(PaymentplanPeer::ADDEDDATE)) $criteria->add(PaymentplanPeer::ADDEDDATE, $this->addeddate);
        if ($this->isColumnModified(PaymentplanPeer::ADDEDTIME)) $criteria->add(PaymentplanPeer::ADDEDTIME, $this->addedtime);
        if ($this->isColumnModified(PaymentplanPeer::LASTMODIFIEDBY)) $criteria->add(PaymentplanPeer::LASTMODIFIEDBY, $this->lastmodifiedby);
        if ($this->isColumnModified(PaymentplanPeer::LASTMODIFIEDDATE)) $criteria->add(PaymentplanPeer::LASTMODIFIEDDATE, $this->lastmodifieddate);
        if ($this->isColumnModified(PaymentplanPeer::LASTMODIFIEDTIME)) $criteria->add(PaymentplanPeer::LASTMODIFIEDTIME, $this->lastmodifiedtime);
        if ($this->isColumnModified(PaymentplanPeer::DELETEDBY)) $criteria->add(PaymentplanPeer::DELETEDBY, $this->deletedby);
        if ($this->isColumnModified(PaymentplanPeer::DELETEDDATE)) $criteria->add(PaymentplanPeer::DELETEDDATE, $this->deleteddate);
        if ($this->isColumnModified(PaymentplanPeer::DELETEDTIME)) $criteria->add(PaymentplanPeer::DELETEDTIME, $this->deletedtime);
        if ($this->isColumnModified(PaymentplanPeer::DEVECHARGERS1)) $criteria->add(PaymentplanPeer::DEVECHARGERS1, $this->devechargers1);
        if ($this->isColumnModified(PaymentplanPeer::DEVECHARGERS2)) $criteria->add(PaymentplanPeer::DEVECHARGERS2, $this->devechargers2);
        if ($this->isColumnModified(PaymentplanPeer::INFRASTRUCTURE)) $criteria->add(PaymentplanPeer::INFRASTRUCTURE, $this->infrastructure);
        if ($this->isColumnModified(PaymentplanPeer::OCCUPATION)) $criteria->add(PaymentplanPeer::OCCUPATION, $this->occupation);

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
        $criteria = new Criteria(PaymentplanPeer::DATABASE_NAME);
        $criteria->add(PaymentplanPeer::REFNO, $this->refno);

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
     * @param object $copyObj An object of Paymentplan (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProjectcode($this->getProjectcode());
        $copyObj->setNofinstallments($this->getNofinstallments());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setInstallamount($this->getInstallamount());
        $copyObj->setRsvfee($this->getRsvfee());
        $copyObj->setDownpayment($this->getDownpayment());
        $copyObj->setBankloan($this->getBankloan());
        $copyObj->setAdtnlland($this->getAdtnlland());
        $copyObj->setTotalpayable($this->getTotalpayable());
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
        $copyObj->setDevechargers1($this->getDevechargers1());
        $copyObj->setDevechargers2($this->getDevechargers2());
        $copyObj->setInfrastructure($this->getInfrastructure());
        $copyObj->setOccupation($this->getOccupation());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getSaless() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSales($relObj->copy($deepCopy));
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
     * @return Paymentplan Clone of current object.
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
     * @return PaymentplanPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PaymentplanPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Project object.
     *
     * @param                  Project $v
     * @return Paymentplan The current object (for fluent API support)
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
            $v->addPaymentplan($this);
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
                $this->aProject->addPaymentplans($this);
             */
        }

        return $this->aProject;
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
        if ('Sales' == $relationName) {
            $this->initSaless();
        }
    }

    /**
     * Clears out the collSaless collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paymentplan The current object (for fluent API support)
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
     * If this Paymentplan is new, it will return
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
                    ->filterByPaymentplan($this)
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
     * @return Paymentplan The current object (for fluent API support)
     */
    public function setSaless(PropelCollection $saless, PropelPDO $con = null)
    {
        $salessToDelete = $this->getSaless(new Criteria(), $con)->diff($saless);


        $this->salessScheduledForDeletion = $salessToDelete;

        foreach ($salessToDelete as $salesRemoved) {
            $salesRemoved->setPaymentplan(null);
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
                ->filterByPaymentplan($this)
                ->count($con);
        }

        return count($this->collSaless);
    }

    /**
     * Method called to associate a Sales object to this object
     * through the Sales foreign key attribute.
     *
     * @param    Sales $l Sales
     * @return Paymentplan The current object (for fluent API support)
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
        $sales->setPaymentplan($this);
    }

    /**
     * @param	Sales $sales The sales object to remove.
     * @return Paymentplan The current object (for fluent API support)
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
            $sales->setPaymentplan(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paymentplan is new, it will return
     * an empty collection; or if this Paymentplan has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paymentplan.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sales[] List of Sales objects
     */
    public function getSalessJoinCustomerdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SalesQuery::create(null, $criteria);
        $query->joinWith('Customerdetails', $join_behavior);

        return $this->getSaless($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paymentplan is new, it will return
     * an empty collection; or if this Paymentplan has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paymentplan.
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
     * Otherwise if this Paymentplan is new, it will return
     * an empty collection; or if this Paymentplan has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paymentplan.
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
     * Otherwise if this Paymentplan is new, it will return
     * an empty collection; or if this Paymentplan has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paymentplan.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->refno = null;
        $this->projectcode = null;
        $this->nofinstallments = null;
        $this->description = null;
        $this->installamount = null;
        $this->rsvfee = null;
        $this->downpayment = null;
        $this->bankloan = null;
        $this->adtnlland = null;
        $this->totalpayable = null;
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
        $this->devechargers1 = null;
        $this->devechargers2 = null;
        $this->infrastructure = null;
        $this->occupation = null;
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
            if ($this->collSaless) {
                foreach ($this->collSaless as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aProject instanceof Persistent) {
              $this->aProject->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collSaless instanceof PropelCollection) {
            $this->collSaless->clearIterator();
        }
        $this->collSaless = null;
        $this->aProject = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PaymentplanPeer::DEFAULT_STRING_FORMAT);
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
