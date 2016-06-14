<?php


/**
 * Base class that represents a row from the 'project' table.
 *
 * projects
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseProject extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProjectPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProjectPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the projectcode field.
     * @var        int
     */
    protected $projectcode;

    /**
     * The value for the locationcode field.
     * @var        int
     */
    protected $locationcode;

    /**
     * The value for the projectname field.
     * @var        string
     */
    protected $projectname;

    /**
     * The value for the nofblocks field.
     * @var        int
     */
    protected $nofblocks;

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
     * @var        PropelObjectCollection|Paymentplan[] Collection to store aggregation of Paymentplan objects.
     */
    protected $collPaymentplans;
    protected $collPaymentplansPartial;

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
    protected $paymentplansScheduledForDeletion = null;

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
     * Initializes internal state of BaseProject object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [projectcode] column value.
     * Project Code
     * @return int
     */
    public function getProjectcode()
    {

        return $this->projectcode;
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
     * Get the [projectname] column value.
     * Project Name
     * @return string
     */
    public function getProjectname()
    {

        return $this->projectname;
    }

    /**
     * Get the [nofblocks] column value.
     * No.of blocks in project
     * @return int
     */
    public function getNofblocks()
    {

        return $this->nofblocks;
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
     * Set the value of [projectcode] column.
     * Project Code
     * @param  int $v new value
     * @return Project The current object (for fluent API support)
     */
    public function setProjectcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->projectcode !== $v) {
            $this->projectcode = $v;
            $this->modifiedColumns[] = ProjectPeer::PROJECTCODE;
        }


        return $this;
    } // setProjectcode()

    /**
     * Set the value of [locationcode] column.
     * Location Code
     * @param  int $v new value
     * @return Project The current object (for fluent API support)
     */
    public function setLocationcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->locationcode !== $v) {
            $this->locationcode = $v;
            $this->modifiedColumns[] = ProjectPeer::LOCATIONCODE;
        }

        if ($this->aLocation !== null && $this->aLocation->getLocationcode() !== $v) {
            $this->aLocation = null;
        }


        return $this;
    } // setLocationcode()

    /**
     * Set the value of [projectname] column.
     * Project Name
     * @param  string $v new value
     * @return Project The current object (for fluent API support)
     */
    public function setProjectname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->projectname !== $v) {
            $this->projectname = $v;
            $this->modifiedColumns[] = ProjectPeer::PROJECTNAME;
        }


        return $this;
    } // setProjectname()

    /**
     * Set the value of [nofblocks] column.
     * No.of blocks in project
     * @param  int $v new value
     * @return Project The current object (for fluent API support)
     */
    public function setNofblocks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nofblocks !== $v) {
            $this->nofblocks = $v;
            $this->modifiedColumns[] = ProjectPeer::NOFBLOCKS;
        }


        return $this;
    } // setNofblocks()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Record deleted
     * @param boolean|integer|string $v The new value
     * @return Project The current object (for fluent API support)
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
            $this->modifiedColumns[] = ProjectPeer::DELETED;
        }


        return $this;
    } // setDeleted()

    /**
     * Set the value of [addedby] column.
     * Added by
     * @param  int $v new value
     * @return Project The current object (for fluent API support)
     */
    public function setAddedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->addedby !== $v) {
            $this->addedby = $v;
            $this->modifiedColumns[] = ProjectPeer::ADDEDBY;
        }


        return $this;
    } // setAddedby()

    /**
     * Sets the value of [addeddate] column to a normalized version of the date/time value specified.
     * Added date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Project The current object (for fluent API support)
     */
    public function setAddeddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addeddate !== null || $dt !== null) {
            $currentDateAsString = ($this->addeddate !== null && $tmpDt = new DateTime($this->addeddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addeddate = $newDateAsString;
                $this->modifiedColumns[] = ProjectPeer::ADDEDDATE;
            }
        } // if either are not null


        return $this;
    } // setAddeddate()

    /**
     * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
     * Added time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Project The current object (for fluent API support)
     */
    public function setAddedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->addedtime !== null && $tmpDt = new DateTime($this->addedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addedtime = $newDateAsString;
                $this->modifiedColumns[] = ProjectPeer::ADDEDTIME;
            }
        } // if either are not null


        return $this;
    } // setAddedtime()

    /**
     * Set the value of [lastmodifiedby] column.
     * Last modified by
     * @param  int $v new value
     * @return Project The current object (for fluent API support)
     */
    public function setLastmodifiedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lastmodifiedby !== $v) {
            $this->lastmodifiedby = $v;
            $this->modifiedColumns[] = ProjectPeer::LASTMODIFIEDBY;
        }


        return $this;
    } // setLastmodifiedby()

    /**
     * Sets the value of [lastmodifieddate] column to a normalized version of the date/time value specified.
     * Last modified date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Project The current object (for fluent API support)
     */
    public function setLastmodifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifieddate !== null && $tmpDt = new DateTime($this->lastmodifieddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = ProjectPeer::LASTMODIFIEDDATE;
            }
        } // if either are not null


        return $this;
    } // setLastmodifieddate()

    /**
     * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
     * Last modified time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Project The current object (for fluent API support)
     */
    public function setLastmodifiedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifiedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifiedtime !== null && $tmpDt = new DateTime($this->lastmodifiedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifiedtime = $newDateAsString;
                $this->modifiedColumns[] = ProjectPeer::LASTMODIFIEDTIME;
            }
        } // if either are not null


        return $this;
    } // setLastmodifiedtime()

    /**
     * Set the value of [deletedby] column.
     * Deleted by
     * @param  int $v new value
     * @return Project The current object (for fluent API support)
     */
    public function setDeletedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deletedby !== $v) {
            $this->deletedby = $v;
            $this->modifiedColumns[] = ProjectPeer::DELETEDBY;
        }


        return $this;
    } // setDeletedby()

    /**
     * Sets the value of [deleteddate] column to a normalized version of the date/time value specified.
     * Deleted Date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Project The current object (for fluent API support)
     */
    public function setDeleteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->deleteddate !== null && $tmpDt = new DateTime($this->deleteddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleteddate = $newDateAsString;
                $this->modifiedColumns[] = ProjectPeer::DELETEDDATE;
            }
        } // if either are not null


        return $this;
    } // setDeleteddate()

    /**
     * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
     * Deleted Time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Project The current object (for fluent API support)
     */
    public function setDeletedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deletedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->deletedtime !== null && $tmpDt = new DateTime($this->deletedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deletedtime = $newDateAsString;
                $this->modifiedColumns[] = ProjectPeer::DELETEDTIME;
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

            $this->projectcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->locationcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->projectname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->nofblocks = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->deleted = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->addedby = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->addeddate = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->addedtime = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->lastmodifiedby = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->lastmodifieddate = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->lastmodifiedtime = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->deletedby = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->deleteddate = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->deletedtime = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = ProjectPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Project object", $e);
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

        if ($this->aLocation !== null && $this->locationcode !== $this->aLocation->getLocationcode()) {
            $this->aLocation = null;
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
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProjectPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aLocation = null;
            $this->collProjectdetailss = null;

            $this->collCustomerreceiptss = null;

            $this->collPaymentplans = null;

            $this->collSaless = null;

            $this->collRefundss = null;

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
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProjectQuery::create()
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
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProjectPeer::addInstanceToPool($this);
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

            if ($this->paymentplansScheduledForDeletion !== null) {
                if (!$this->paymentplansScheduledForDeletion->isEmpty()) {
                    PaymentplanQuery::create()
                        ->filterByPrimaryKeys($this->paymentplansScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->paymentplansScheduledForDeletion = null;
                }
            }

            if ($this->collPaymentplans !== null) {
                foreach ($this->collPaymentplans as $referrerFK) {
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

        $this->modifiedColumns[] = ProjectPeer::PROJECTCODE;
        if (null !== $this->projectcode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProjectPeer::PROJECTCODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProjectPeer::PROJECTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`projectcode`';
        }
        if ($this->isColumnModified(ProjectPeer::LOCATIONCODE)) {
            $modifiedColumns[':p' . $index++]  = '`locationcode`';
        }
        if ($this->isColumnModified(ProjectPeer::PROJECTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`projectname`';
        }
        if ($this->isColumnModified(ProjectPeer::NOFBLOCKS)) {
            $modifiedColumns[':p' . $index++]  = '`nofblocks`';
        }
        if ($this->isColumnModified(ProjectPeer::DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`deleted`';
        }
        if ($this->isColumnModified(ProjectPeer::ADDEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`addedby`';
        }
        if ($this->isColumnModified(ProjectPeer::ADDEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`addeddate`';
        }
        if ($this->isColumnModified(ProjectPeer::ADDEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`addedtime`';
        }
        if ($this->isColumnModified(ProjectPeer::LASTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedby`';
        }
        if ($this->isColumnModified(ProjectPeer::LASTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifieddate`';
        }
        if ($this->isColumnModified(ProjectPeer::LASTMODIFIEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedtime`';
        }
        if ($this->isColumnModified(ProjectPeer::DELETEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`deletedby`';
        }
        if ($this->isColumnModified(ProjectPeer::DELETEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`deleteddate`';
        }
        if ($this->isColumnModified(ProjectPeer::DELETEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`deletedtime`';
        }

        $sql = sprintf(
            'INSERT INTO `project` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`projectcode`':
                        $stmt->bindValue($identifier, $this->projectcode, PDO::PARAM_INT);
                        break;
                    case '`locationcode`':
                        $stmt->bindValue($identifier, $this->locationcode, PDO::PARAM_INT);
                        break;
                    case '`projectname`':
                        $stmt->bindValue($identifier, $this->projectname, PDO::PARAM_STR);
                        break;
                    case '`nofblocks`':
                        $stmt->bindValue($identifier, $this->nofblocks, PDO::PARAM_INT);
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
        $this->setProjectcode($pk);

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

            if ($this->aLocation !== null) {
                if (!$this->aLocation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLocation->getValidationFailures());
                }
            }


            if (($retval = ProjectPeer::doValidate($this, $columns)) !== true) {
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

                if ($this->collPaymentplans !== null) {
                    foreach ($this->collPaymentplans as $referrerFK) {
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
        $pos = ProjectPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getProjectcode();
                break;
            case 1:
                return $this->getLocationcode();
                break;
            case 2:
                return $this->getProjectname();
                break;
            case 3:
                return $this->getNofblocks();
                break;
            case 4:
                return $this->getDeleted();
                break;
            case 5:
                return $this->getAddedby();
                break;
            case 6:
                return $this->getAddeddate();
                break;
            case 7:
                return $this->getAddedtime();
                break;
            case 8:
                return $this->getLastmodifiedby();
                break;
            case 9:
                return $this->getLastmodifieddate();
                break;
            case 10:
                return $this->getLastmodifiedtime();
                break;
            case 11:
                return $this->getDeletedby();
                break;
            case 12:
                return $this->getDeleteddate();
                break;
            case 13:
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
        if (isset($alreadyDumpedObjects['Project'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Project'][$this->getPrimaryKey()] = true;
        $keys = ProjectPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getProjectcode(),
            $keys[1] => $this->getLocationcode(),
            $keys[2] => $this->getProjectname(),
            $keys[3] => $this->getNofblocks(),
            $keys[4] => $this->getDeleted(),
            $keys[5] => $this->getAddedby(),
            $keys[6] => $this->getAddeddate(),
            $keys[7] => $this->getAddedtime(),
            $keys[8] => $this->getLastmodifiedby(),
            $keys[9] => $this->getLastmodifieddate(),
            $keys[10] => $this->getLastmodifiedtime(),
            $keys[11] => $this->getDeletedby(),
            $keys[12] => $this->getDeleteddate(),
            $keys[13] => $this->getDeletedtime(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aLocation) {
                $result['Location'] = $this->aLocation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collProjectdetailss) {
                $result['Projectdetailss'] = $this->collProjectdetailss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCustomerreceiptss) {
                $result['Customerreceiptss'] = $this->collCustomerreceiptss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPaymentplans) {
                $result['Paymentplans'] = $this->collPaymentplans->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSaless) {
                $result['Saless'] = $this->collSaless->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRefundss) {
                $result['Refundss'] = $this->collRefundss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProjectPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setProjectcode($value);
                break;
            case 1:
                $this->setLocationcode($value);
                break;
            case 2:
                $this->setProjectname($value);
                break;
            case 3:
                $this->setNofblocks($value);
                break;
            case 4:
                $this->setDeleted($value);
                break;
            case 5:
                $this->setAddedby($value);
                break;
            case 6:
                $this->setAddeddate($value);
                break;
            case 7:
                $this->setAddedtime($value);
                break;
            case 8:
                $this->setLastmodifiedby($value);
                break;
            case 9:
                $this->setLastmodifieddate($value);
                break;
            case 10:
                $this->setLastmodifiedtime($value);
                break;
            case 11:
                $this->setDeletedby($value);
                break;
            case 12:
                $this->setDeleteddate($value);
                break;
            case 13:
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
        $keys = ProjectPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setProjectcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLocationcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setProjectname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNofblocks($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDeleted($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAddedby($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAddeddate($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAddedtime($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLastmodifiedby($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLastmodifieddate($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLastmodifiedtime($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDeletedby($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDeleteddate($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDeletedtime($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProjectPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProjectPeer::PROJECTCODE)) $criteria->add(ProjectPeer::PROJECTCODE, $this->projectcode);
        if ($this->isColumnModified(ProjectPeer::LOCATIONCODE)) $criteria->add(ProjectPeer::LOCATIONCODE, $this->locationcode);
        if ($this->isColumnModified(ProjectPeer::PROJECTNAME)) $criteria->add(ProjectPeer::PROJECTNAME, $this->projectname);
        if ($this->isColumnModified(ProjectPeer::NOFBLOCKS)) $criteria->add(ProjectPeer::NOFBLOCKS, $this->nofblocks);
        if ($this->isColumnModified(ProjectPeer::DELETED)) $criteria->add(ProjectPeer::DELETED, $this->deleted);
        if ($this->isColumnModified(ProjectPeer::ADDEDBY)) $criteria->add(ProjectPeer::ADDEDBY, $this->addedby);
        if ($this->isColumnModified(ProjectPeer::ADDEDDATE)) $criteria->add(ProjectPeer::ADDEDDATE, $this->addeddate);
        if ($this->isColumnModified(ProjectPeer::ADDEDTIME)) $criteria->add(ProjectPeer::ADDEDTIME, $this->addedtime);
        if ($this->isColumnModified(ProjectPeer::LASTMODIFIEDBY)) $criteria->add(ProjectPeer::LASTMODIFIEDBY, $this->lastmodifiedby);
        if ($this->isColumnModified(ProjectPeer::LASTMODIFIEDDATE)) $criteria->add(ProjectPeer::LASTMODIFIEDDATE, $this->lastmodifieddate);
        if ($this->isColumnModified(ProjectPeer::LASTMODIFIEDTIME)) $criteria->add(ProjectPeer::LASTMODIFIEDTIME, $this->lastmodifiedtime);
        if ($this->isColumnModified(ProjectPeer::DELETEDBY)) $criteria->add(ProjectPeer::DELETEDBY, $this->deletedby);
        if ($this->isColumnModified(ProjectPeer::DELETEDDATE)) $criteria->add(ProjectPeer::DELETEDDATE, $this->deleteddate);
        if ($this->isColumnModified(ProjectPeer::DELETEDTIME)) $criteria->add(ProjectPeer::DELETEDTIME, $this->deletedtime);

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
        $criteria = new Criteria(ProjectPeer::DATABASE_NAME);
        $criteria->add(ProjectPeer::PROJECTCODE, $this->projectcode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getProjectcode();
    }

    /**
     * Generic method to set the primary key (projectcode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setProjectcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getProjectcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Project (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLocationcode($this->getLocationcode());
        $copyObj->setProjectname($this->getProjectname());
        $copyObj->setNofblocks($this->getNofblocks());
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

            foreach ($this->getPaymentplans() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPaymentplan($relObj->copy($deepCopy));
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

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setProjectcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Project Clone of current object.
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
     * @return ProjectPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProjectPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Location object.
     *
     * @param                  Location $v
     * @return Project The current object (for fluent API support)
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
            $v->addProject($this);
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
                $this->aLocation->addProjects($this);
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
        if ('Projectdetails' == $relationName) {
            $this->initProjectdetailss();
        }
        if ('Customerreceipts' == $relationName) {
            $this->initCustomerreceiptss();
        }
        if ('Paymentplan' == $relationName) {
            $this->initPaymentplans();
        }
        if ('Sales' == $relationName) {
            $this->initSaless();
        }
        if ('Refunds' == $relationName) {
            $this->initRefundss();
        }
    }

    /**
     * Clears out the collProjectdetailss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Project The current object (for fluent API support)
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
     * If this Project is new, it will return
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
                    ->filterByProject($this)
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
     * @return Project The current object (for fluent API support)
     */
    public function setProjectdetailss(PropelCollection $projectdetailss, PropelPDO $con = null)
    {
        $projectdetailssToDelete = $this->getProjectdetailss(new Criteria(), $con)->diff($projectdetailss);


        $this->projectdetailssScheduledForDeletion = $projectdetailssToDelete;

        foreach ($projectdetailssToDelete as $projectdetailsRemoved) {
            $projectdetailsRemoved->setProject(null);
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
                ->filterByProject($this)
                ->count($con);
        }

        return count($this->collProjectdetailss);
    }

    /**
     * Method called to associate a Projectdetails object to this object
     * through the Projectdetails foreign key attribute.
     *
     * @param    Projectdetails $l Projectdetails
     * @return Project The current object (for fluent API support)
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
        $projectdetails->setProject($this);
    }

    /**
     * @param	Projectdetails $projectdetails The projectdetails object to remove.
     * @return Project The current object (for fluent API support)
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
            $projectdetails->setProject(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Projectdetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Projectdetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Projectdetails[] List of Projectdetails objects
     */
    public function getProjectdetailssJoinCustomerdetails($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectdetailsQuery::create(null, $criteria);
        $query->joinWith('Customerdetails', $join_behavior);

        return $this->getProjectdetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Projectdetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * @return Project The current object (for fluent API support)
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
     * If this Project is new, it will return
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
                    ->filterByProject($this)
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
     * @return Project The current object (for fluent API support)
     */
    public function setCustomerreceiptss(PropelCollection $customerreceiptss, PropelPDO $con = null)
    {
        $customerreceiptssToDelete = $this->getCustomerreceiptss(new Criteria(), $con)->diff($customerreceiptss);


        $this->customerreceiptssScheduledForDeletion = $customerreceiptssToDelete;

        foreach ($customerreceiptssToDelete as $customerreceiptsRemoved) {
            $customerreceiptsRemoved->setProject(null);
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
                ->filterByProject($this)
                ->count($con);
        }

        return count($this->collCustomerreceiptss);
    }

    /**
     * Method called to associate a Customerreceipts object to this object
     * through the Customerreceipts foreign key attribute.
     *
     * @param    Customerreceipts $l Customerreceipts
     * @return Project The current object (for fluent API support)
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
        $customerreceipts->setProject($this);
    }

    /**
     * @param	Customerreceipts $customerreceipts The customerreceipts object to remove.
     * @return Project The current object (for fluent API support)
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
            $customerreceipts->setProject(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * Clears out the collPaymentplans collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Project The current object (for fluent API support)
     * @see        addPaymentplans()
     */
    public function clearPaymentplans()
    {
        $this->collPaymentplans = null; // important to set this to null since that means it is uninitialized
        $this->collPaymentplansPartial = null;

        return $this;
    }

    /**
     * reset is the collPaymentplans collection loaded partially
     *
     * @return void
     */
    public function resetPartialPaymentplans($v = true)
    {
        $this->collPaymentplansPartial = $v;
    }

    /**
     * Initializes the collPaymentplans collection.
     *
     * By default this just sets the collPaymentplans collection to an empty array (like clearcollPaymentplans());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPaymentplans($overrideExisting = true)
    {
        if (null !== $this->collPaymentplans && !$overrideExisting) {
            return;
        }
        $this->collPaymentplans = new PropelObjectCollection();
        $this->collPaymentplans->setModel('Paymentplan');
    }

    /**
     * Gets an array of Paymentplan objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Project is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Paymentplan[] List of Paymentplan objects
     * @throws PropelException
     */
    public function getPaymentplans($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPaymentplansPartial && !$this->isNew();
        if (null === $this->collPaymentplans || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPaymentplans) {
                // return empty collection
                $this->initPaymentplans();
            } else {
                $collPaymentplans = PaymentplanQuery::create(null, $criteria)
                    ->filterByProject($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPaymentplansPartial && count($collPaymentplans)) {
                      $this->initPaymentplans(false);

                      foreach ($collPaymentplans as $obj) {
                        if (false == $this->collPaymentplans->contains($obj)) {
                          $this->collPaymentplans->append($obj);
                        }
                      }

                      $this->collPaymentplansPartial = true;
                    }

                    $collPaymentplans->getInternalIterator()->rewind();

                    return $collPaymentplans;
                }

                if ($partial && $this->collPaymentplans) {
                    foreach ($this->collPaymentplans as $obj) {
                        if ($obj->isNew()) {
                            $collPaymentplans[] = $obj;
                        }
                    }
                }

                $this->collPaymentplans = $collPaymentplans;
                $this->collPaymentplansPartial = false;
            }
        }

        return $this->collPaymentplans;
    }

    /**
     * Sets a collection of Paymentplan objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $paymentplans A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Project The current object (for fluent API support)
     */
    public function setPaymentplans(PropelCollection $paymentplans, PropelPDO $con = null)
    {
        $paymentplansToDelete = $this->getPaymentplans(new Criteria(), $con)->diff($paymentplans);


        $this->paymentplansScheduledForDeletion = $paymentplansToDelete;

        foreach ($paymentplansToDelete as $paymentplanRemoved) {
            $paymentplanRemoved->setProject(null);
        }

        $this->collPaymentplans = null;
        foreach ($paymentplans as $paymentplan) {
            $this->addPaymentplan($paymentplan);
        }

        $this->collPaymentplans = $paymentplans;
        $this->collPaymentplansPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Paymentplan objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Paymentplan objects.
     * @throws PropelException
     */
    public function countPaymentplans(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPaymentplansPartial && !$this->isNew();
        if (null === $this->collPaymentplans || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPaymentplans) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPaymentplans());
            }
            $query = PaymentplanQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProject($this)
                ->count($con);
        }

        return count($this->collPaymentplans);
    }

    /**
     * Method called to associate a Paymentplan object to this object
     * through the Paymentplan foreign key attribute.
     *
     * @param    Paymentplan $l Paymentplan
     * @return Project The current object (for fluent API support)
     */
    public function addPaymentplan(Paymentplan $l)
    {
        if ($this->collPaymentplans === null) {
            $this->initPaymentplans();
            $this->collPaymentplansPartial = true;
        }

        if (!in_array($l, $this->collPaymentplans->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPaymentplan($l);

            if ($this->paymentplansScheduledForDeletion and $this->paymentplansScheduledForDeletion->contains($l)) {
                $this->paymentplansScheduledForDeletion->remove($this->paymentplansScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Paymentplan $paymentplan The paymentplan object to add.
     */
    protected function doAddPaymentplan($paymentplan)
    {
        $this->collPaymentplans[]= $paymentplan;
        $paymentplan->setProject($this);
    }

    /**
     * @param	Paymentplan $paymentplan The paymentplan object to remove.
     * @return Project The current object (for fluent API support)
     */
    public function removePaymentplan($paymentplan)
    {
        if ($this->getPaymentplans()->contains($paymentplan)) {
            $this->collPaymentplans->remove($this->collPaymentplans->search($paymentplan));
            if (null === $this->paymentplansScheduledForDeletion) {
                $this->paymentplansScheduledForDeletion = clone $this->collPaymentplans;
                $this->paymentplansScheduledForDeletion->clear();
            }
            $this->paymentplansScheduledForDeletion[]= clone $paymentplan;
            $paymentplan->setProject(null);
        }

        return $this;
    }

    /**
     * Clears out the collSaless collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Project The current object (for fluent API support)
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
     * If this Project is new, it will return
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
                    ->filterByProject($this)
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
     * @return Project The current object (for fluent API support)
     */
    public function setSaless(PropelCollection $saless, PropelPDO $con = null)
    {
        $salessToDelete = $this->getSaless(new Criteria(), $con)->diff($saless);


        $this->salessScheduledForDeletion = $salessToDelete;

        foreach ($salessToDelete as $salesRemoved) {
            $salesRemoved->setProject(null);
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
                ->filterByProject($this)
                ->count($con);
        }

        return count($this->collSaless);
    }

    /**
     * Method called to associate a Sales object to this object
     * through the Sales foreign key attribute.
     *
     * @param    Sales $l Sales
     * @return Project The current object (for fluent API support)
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
        $sales->setProject($this);
    }

    /**
     * @param	Sales $sales The sales object to remove.
     * @return Project The current object (for fluent API support)
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
            $sales->setProject(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * @return Project The current object (for fluent API support)
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
     * If this Project is new, it will return
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
                    ->filterByProject($this)
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
     * @return Project The current object (for fluent API support)
     */
    public function setRefundss(PropelCollection $refundss, PropelPDO $con = null)
    {
        $refundssToDelete = $this->getRefundss(new Criteria(), $con)->diff($refundss);


        $this->refundssScheduledForDeletion = $refundssToDelete;

        foreach ($refundssToDelete as $refundsRemoved) {
            $refundsRemoved->setProject(null);
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
                ->filterByProject($this)
                ->count($con);
        }

        return count($this->collRefundss);
    }

    /**
     * Method called to associate a Refunds object to this object
     * through the Refunds foreign key attribute.
     *
     * @param    Refunds $l Refunds
     * @return Project The current object (for fluent API support)
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
        $refunds->setProject($this);
    }

    /**
     * @param	Refunds $refunds The refunds object to remove.
     * @return Project The current object (for fluent API support)
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
            $refunds->setProject(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * Otherwise if this Project is new, it will return
     * an empty collection; or if this Project has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Project.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->projectcode = null;
        $this->locationcode = null;
        $this->projectname = null;
        $this->nofblocks = null;
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
            if ($this->collPaymentplans) {
                foreach ($this->collPaymentplans as $o) {
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
            if ($this->aLocation instanceof Persistent) {
              $this->aLocation->clearAllReferences($deep);
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
        if ($this->collPaymentplans instanceof PropelCollection) {
            $this->collPaymentplans->clearIterator();
        }
        $this->collPaymentplans = null;
        if ($this->collSaless instanceof PropelCollection) {
            $this->collSaless->clearIterator();
        }
        $this->collSaless = null;
        if ($this->collRefundss instanceof PropelCollection) {
            $this->collRefundss->clearIterator();
        }
        $this->collRefundss = null;
        $this->aLocation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProjectPeer::DEFAULT_STRING_FORMAT);
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
