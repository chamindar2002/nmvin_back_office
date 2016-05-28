<?php


/**
 * Base class that represents a row from the 'location' table.
 *
 * project location
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseLocation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LocationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LocationPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the locationcode field.
     * @var        int
     */
    protected $locationcode;

    /**
     * The value for the locationname field.
     * @var        string
     */
    protected $locationname;

    /**
     * The value for the locationcity field.
     * @var        string
     */
    protected $locationcity;

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
     * @var        PropelObjectCollection|Project[] Collection to store aggregation of Project objects.
     */
    protected $collProjects;
    protected $collProjectsPartial;

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
    protected $projectsScheduledForDeletion = null;

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
     * Initializes internal state of BaseLocation object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [locationname] column value.
     * Location Name
     * @return string
     */
    public function getLocationname()
    {

        return $this->locationname;
    }

    /**
     * Get the [locationcity] column value.
     * City Of Project Location
     * @return string
     */
    public function getLocationcity()
    {

        return $this->locationcity;
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
     * Set the value of [locationcode] column.
     * Location Code
     * @param  int $v new value
     * @return Location The current object (for fluent API support)
     */
    public function setLocationcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->locationcode !== $v) {
            $this->locationcode = $v;
            $this->modifiedColumns[] = LocationPeer::LOCATIONCODE;
        }


        return $this;
    } // setLocationcode()

    /**
     * Set the value of [locationname] column.
     * Location Name
     * @param  string $v new value
     * @return Location The current object (for fluent API support)
     */
    public function setLocationname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locationname !== $v) {
            $this->locationname = $v;
            $this->modifiedColumns[] = LocationPeer::LOCATIONNAME;
        }


        return $this;
    } // setLocationname()

    /**
     * Set the value of [locationcity] column.
     * City Of Project Location
     * @param  string $v new value
     * @return Location The current object (for fluent API support)
     */
    public function setLocationcity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locationcity !== $v) {
            $this->locationcity = $v;
            $this->modifiedColumns[] = LocationPeer::LOCATIONCITY;
        }


        return $this;
    } // setLocationcity()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Record deleted
     * @param boolean|integer|string $v The new value
     * @return Location The current object (for fluent API support)
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
            $this->modifiedColumns[] = LocationPeer::DELETED;
        }


        return $this;
    } // setDeleted()

    /**
     * Set the value of [addedby] column.
     * Added by
     * @param  int $v new value
     * @return Location The current object (for fluent API support)
     */
    public function setAddedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->addedby !== $v) {
            $this->addedby = $v;
            $this->modifiedColumns[] = LocationPeer::ADDEDBY;
        }


        return $this;
    } // setAddedby()

    /**
     * Sets the value of [addeddate] column to a normalized version of the date/time value specified.
     * Added date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Location The current object (for fluent API support)
     */
    public function setAddeddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addeddate !== null || $dt !== null) {
            $currentDateAsString = ($this->addeddate !== null && $tmpDt = new DateTime($this->addeddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addeddate = $newDateAsString;
                $this->modifiedColumns[] = LocationPeer::ADDEDDATE;
            }
        } // if either are not null


        return $this;
    } // setAddeddate()

    /**
     * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
     * Added time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Location The current object (for fluent API support)
     */
    public function setAddedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->addedtime !== null && $tmpDt = new DateTime($this->addedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addedtime = $newDateAsString;
                $this->modifiedColumns[] = LocationPeer::ADDEDTIME;
            }
        } // if either are not null


        return $this;
    } // setAddedtime()

    /**
     * Set the value of [lastmodifiedby] column.
     * Last modified by
     * @param  int $v new value
     * @return Location The current object (for fluent API support)
     */
    public function setLastmodifiedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lastmodifiedby !== $v) {
            $this->lastmodifiedby = $v;
            $this->modifiedColumns[] = LocationPeer::LASTMODIFIEDBY;
        }


        return $this;
    } // setLastmodifiedby()

    /**
     * Sets the value of [lastmodifieddate] column to a normalized version of the date/time value specified.
     * Last modified date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Location The current object (for fluent API support)
     */
    public function setLastmodifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifieddate !== null && $tmpDt = new DateTime($this->lastmodifieddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = LocationPeer::LASTMODIFIEDDATE;
            }
        } // if either are not null


        return $this;
    } // setLastmodifieddate()

    /**
     * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
     * Last modified time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Location The current object (for fluent API support)
     */
    public function setLastmodifiedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifiedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifiedtime !== null && $tmpDt = new DateTime($this->lastmodifiedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifiedtime = $newDateAsString;
                $this->modifiedColumns[] = LocationPeer::LASTMODIFIEDTIME;
            }
        } // if either are not null


        return $this;
    } // setLastmodifiedtime()

    /**
     * Set the value of [deletedby] column.
     * Deleted by
     * @param  int $v new value
     * @return Location The current object (for fluent API support)
     */
    public function setDeletedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deletedby !== $v) {
            $this->deletedby = $v;
            $this->modifiedColumns[] = LocationPeer::DELETEDBY;
        }


        return $this;
    } // setDeletedby()

    /**
     * Sets the value of [deleteddate] column to a normalized version of the date/time value specified.
     * Deleted Date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Location The current object (for fluent API support)
     */
    public function setDeleteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->deleteddate !== null && $tmpDt = new DateTime($this->deleteddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleteddate = $newDateAsString;
                $this->modifiedColumns[] = LocationPeer::DELETEDDATE;
            }
        } // if either are not null


        return $this;
    } // setDeleteddate()

    /**
     * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
     * Deleted Time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Location The current object (for fluent API support)
     */
    public function setDeletedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deletedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->deletedtime !== null && $tmpDt = new DateTime($this->deletedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deletedtime = $newDateAsString;
                $this->modifiedColumns[] = LocationPeer::DELETEDTIME;
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

            $this->locationcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->locationname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->locationcity = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->deleted = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->addedby = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->addeddate = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->addedtime = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->lastmodifiedby = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->lastmodifieddate = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->lastmodifiedtime = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->deletedby = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->deleteddate = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->deletedtime = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = LocationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Location object", $e);
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
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LocationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collProjects = null;

            $this->collProjectdetailss = null;

            $this->collCustomerreceiptss = null;

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
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LocationQuery::create()
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
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                LocationPeer::addInstanceToPool($this);
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

            if ($this->projectsScheduledForDeletion !== null) {
                if (!$this->projectsScheduledForDeletion->isEmpty()) {
                    ProjectQuery::create()
                        ->filterByPrimaryKeys($this->projectsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->projectsScheduledForDeletion = null;
                }
            }

            if ($this->collProjects !== null) {
                foreach ($this->collProjects as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = LocationPeer::LOCATIONCODE;
        if (null !== $this->locationcode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . LocationPeer::LOCATIONCODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(LocationPeer::LOCATIONCODE)) {
            $modifiedColumns[':p' . $index++]  = '`locationcode`';
        }
        if ($this->isColumnModified(LocationPeer::LOCATIONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`locationname`';
        }
        if ($this->isColumnModified(LocationPeer::LOCATIONCITY)) {
            $modifiedColumns[':p' . $index++]  = '`locationcity`';
        }
        if ($this->isColumnModified(LocationPeer::DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`deleted`';
        }
        if ($this->isColumnModified(LocationPeer::ADDEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`addedby`';
        }
        if ($this->isColumnModified(LocationPeer::ADDEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`addeddate`';
        }
        if ($this->isColumnModified(LocationPeer::ADDEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`addedtime`';
        }
        if ($this->isColumnModified(LocationPeer::LASTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedby`';
        }
        if ($this->isColumnModified(LocationPeer::LASTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifieddate`';
        }
        if ($this->isColumnModified(LocationPeer::LASTMODIFIEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedtime`';
        }
        if ($this->isColumnModified(LocationPeer::DELETEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`deletedby`';
        }
        if ($this->isColumnModified(LocationPeer::DELETEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`deleteddate`';
        }
        if ($this->isColumnModified(LocationPeer::DELETEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`deletedtime`';
        }

        $sql = sprintf(
            'INSERT INTO `location` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`locationcode`':
                        $stmt->bindValue($identifier, $this->locationcode, PDO::PARAM_INT);
                        break;
                    case '`locationname`':
                        $stmt->bindValue($identifier, $this->locationname, PDO::PARAM_STR);
                        break;
                    case '`locationcity`':
                        $stmt->bindValue($identifier, $this->locationcity, PDO::PARAM_STR);
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
        $this->setLocationcode($pk);

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


            if (($retval = LocationPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collProjects !== null) {
                    foreach ($this->collProjects as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = LocationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLocationcode();
                break;
            case 1:
                return $this->getLocationname();
                break;
            case 2:
                return $this->getLocationcity();
                break;
            case 3:
                return $this->getDeleted();
                break;
            case 4:
                return $this->getAddedby();
                break;
            case 5:
                return $this->getAddeddate();
                break;
            case 6:
                return $this->getAddedtime();
                break;
            case 7:
                return $this->getLastmodifiedby();
                break;
            case 8:
                return $this->getLastmodifieddate();
                break;
            case 9:
                return $this->getLastmodifiedtime();
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
        if (isset($alreadyDumpedObjects['Location'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Location'][$this->getPrimaryKey()] = true;
        $keys = LocationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLocationcode(),
            $keys[1] => $this->getLocationname(),
            $keys[2] => $this->getLocationcity(),
            $keys[3] => $this->getDeleted(),
            $keys[4] => $this->getAddedby(),
            $keys[5] => $this->getAddeddate(),
            $keys[6] => $this->getAddedtime(),
            $keys[7] => $this->getLastmodifiedby(),
            $keys[8] => $this->getLastmodifieddate(),
            $keys[9] => $this->getLastmodifiedtime(),
            $keys[10] => $this->getDeletedby(),
            $keys[11] => $this->getDeleteddate(),
            $keys[12] => $this->getDeletedtime(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collProjects) {
                $result['Projects'] = $this->collProjects->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
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
        $pos = LocationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLocationcode($value);
                break;
            case 1:
                $this->setLocationname($value);
                break;
            case 2:
                $this->setLocationcity($value);
                break;
            case 3:
                $this->setDeleted($value);
                break;
            case 4:
                $this->setAddedby($value);
                break;
            case 5:
                $this->setAddeddate($value);
                break;
            case 6:
                $this->setAddedtime($value);
                break;
            case 7:
                $this->setLastmodifiedby($value);
                break;
            case 8:
                $this->setLastmodifieddate($value);
                break;
            case 9:
                $this->setLastmodifiedtime($value);
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
        $keys = LocationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLocationcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLocationname($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLocationcity($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDeleted($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAddedby($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAddeddate($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAddedtime($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLastmodifiedby($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLastmodifieddate($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLastmodifiedtime($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDeletedby($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDeleteddate($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDeletedtime($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LocationPeer::DATABASE_NAME);

        if ($this->isColumnModified(LocationPeer::LOCATIONCODE)) $criteria->add(LocationPeer::LOCATIONCODE, $this->locationcode);
        if ($this->isColumnModified(LocationPeer::LOCATIONNAME)) $criteria->add(LocationPeer::LOCATIONNAME, $this->locationname);
        if ($this->isColumnModified(LocationPeer::LOCATIONCITY)) $criteria->add(LocationPeer::LOCATIONCITY, $this->locationcity);
        if ($this->isColumnModified(LocationPeer::DELETED)) $criteria->add(LocationPeer::DELETED, $this->deleted);
        if ($this->isColumnModified(LocationPeer::ADDEDBY)) $criteria->add(LocationPeer::ADDEDBY, $this->addedby);
        if ($this->isColumnModified(LocationPeer::ADDEDDATE)) $criteria->add(LocationPeer::ADDEDDATE, $this->addeddate);
        if ($this->isColumnModified(LocationPeer::ADDEDTIME)) $criteria->add(LocationPeer::ADDEDTIME, $this->addedtime);
        if ($this->isColumnModified(LocationPeer::LASTMODIFIEDBY)) $criteria->add(LocationPeer::LASTMODIFIEDBY, $this->lastmodifiedby);
        if ($this->isColumnModified(LocationPeer::LASTMODIFIEDDATE)) $criteria->add(LocationPeer::LASTMODIFIEDDATE, $this->lastmodifieddate);
        if ($this->isColumnModified(LocationPeer::LASTMODIFIEDTIME)) $criteria->add(LocationPeer::LASTMODIFIEDTIME, $this->lastmodifiedtime);
        if ($this->isColumnModified(LocationPeer::DELETEDBY)) $criteria->add(LocationPeer::DELETEDBY, $this->deletedby);
        if ($this->isColumnModified(LocationPeer::DELETEDDATE)) $criteria->add(LocationPeer::DELETEDDATE, $this->deleteddate);
        if ($this->isColumnModified(LocationPeer::DELETEDTIME)) $criteria->add(LocationPeer::DELETEDTIME, $this->deletedtime);

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
        $criteria = new Criteria(LocationPeer::DATABASE_NAME);
        $criteria->add(LocationPeer::LOCATIONCODE, $this->locationcode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getLocationcode();
    }

    /**
     * Generic method to set the primary key (locationcode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setLocationcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getLocationcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Location (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLocationname($this->getLocationname());
        $copyObj->setLocationcity($this->getLocationcity());
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

            foreach ($this->getProjects() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProject($relObj->copy($deepCopy));
                }
            }

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

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setLocationcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Location Clone of current object.
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
     * @return LocationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LocationPeer();
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
        if ('Project' == $relationName) {
            $this->initProjects();
        }
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
    }

    /**
     * Clears out the collProjects collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Location The current object (for fluent API support)
     * @see        addProjects()
     */
    public function clearProjects()
    {
        $this->collProjects = null; // important to set this to null since that means it is uninitialized
        $this->collProjectsPartial = null;

        return $this;
    }

    /**
     * reset is the collProjects collection loaded partially
     *
     * @return void
     */
    public function resetPartialProjects($v = true)
    {
        $this->collProjectsPartial = $v;
    }

    /**
     * Initializes the collProjects collection.
     *
     * By default this just sets the collProjects collection to an empty array (like clearcollProjects());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProjects($overrideExisting = true)
    {
        if (null !== $this->collProjects && !$overrideExisting) {
            return;
        }
        $this->collProjects = new PropelObjectCollection();
        $this->collProjects->setModel('Project');
    }

    /**
     * Gets an array of Project objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Location is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Project[] List of Project objects
     * @throws PropelException
     */
    public function getProjects($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProjectsPartial && !$this->isNew();
        if (null === $this->collProjects || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProjects) {
                // return empty collection
                $this->initProjects();
            } else {
                $collProjects = ProjectQuery::create(null, $criteria)
                    ->filterByLocation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProjectsPartial && count($collProjects)) {
                      $this->initProjects(false);

                      foreach ($collProjects as $obj) {
                        if (false == $this->collProjects->contains($obj)) {
                          $this->collProjects->append($obj);
                        }
                      }

                      $this->collProjectsPartial = true;
                    }

                    $collProjects->getInternalIterator()->rewind();

                    return $collProjects;
                }

                if ($partial && $this->collProjects) {
                    foreach ($this->collProjects as $obj) {
                        if ($obj->isNew()) {
                            $collProjects[] = $obj;
                        }
                    }
                }

                $this->collProjects = $collProjects;
                $this->collProjectsPartial = false;
            }
        }

        return $this->collProjects;
    }

    /**
     * Sets a collection of Project objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $projects A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Location The current object (for fluent API support)
     */
    public function setProjects(PropelCollection $projects, PropelPDO $con = null)
    {
        $projectsToDelete = $this->getProjects(new Criteria(), $con)->diff($projects);


        $this->projectsScheduledForDeletion = $projectsToDelete;

        foreach ($projectsToDelete as $projectRemoved) {
            $projectRemoved->setLocation(null);
        }

        $this->collProjects = null;
        foreach ($projects as $project) {
            $this->addProject($project);
        }

        $this->collProjects = $projects;
        $this->collProjectsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Project objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Project objects.
     * @throws PropelException
     */
    public function countProjects(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProjectsPartial && !$this->isNew();
        if (null === $this->collProjects || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProjects) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProjects());
            }
            $query = ProjectQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByLocation($this)
                ->count($con);
        }

        return count($this->collProjects);
    }

    /**
     * Method called to associate a Project object to this object
     * through the Project foreign key attribute.
     *
     * @param    Project $l Project
     * @return Location The current object (for fluent API support)
     */
    public function addProject(Project $l)
    {
        if ($this->collProjects === null) {
            $this->initProjects();
            $this->collProjectsPartial = true;
        }

        if (!in_array($l, $this->collProjects->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProject($l);

            if ($this->projectsScheduledForDeletion and $this->projectsScheduledForDeletion->contains($l)) {
                $this->projectsScheduledForDeletion->remove($this->projectsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Project $project The project object to add.
     */
    protected function doAddProject($project)
    {
        $this->collProjects[]= $project;
        $project->setLocation($this);
    }

    /**
     * @param	Project $project The project object to remove.
     * @return Location The current object (for fluent API support)
     */
    public function removeProject($project)
    {
        if ($this->getProjects()->contains($project)) {
            $this->collProjects->remove($this->collProjects->search($project));
            if (null === $this->projectsScheduledForDeletion) {
                $this->projectsScheduledForDeletion = clone $this->collProjects;
                $this->projectsScheduledForDeletion->clear();
            }
            $this->projectsScheduledForDeletion[]= clone $project;
            $project->setLocation(null);
        }

        return $this;
    }

    /**
     * Clears out the collProjectdetailss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Location The current object (for fluent API support)
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
     * If this Location is new, it will return
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
                    ->filterByLocation($this)
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
     * @return Location The current object (for fluent API support)
     */
    public function setProjectdetailss(PropelCollection $projectdetailss, PropelPDO $con = null)
    {
        $projectdetailssToDelete = $this->getProjectdetailss(new Criteria(), $con)->diff($projectdetailss);


        $this->projectdetailssScheduledForDeletion = $projectdetailssToDelete;

        foreach ($projectdetailssToDelete as $projectdetailsRemoved) {
            $projectdetailsRemoved->setLocation(null);
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
                ->filterByLocation($this)
                ->count($con);
        }

        return count($this->collProjectdetailss);
    }

    /**
     * Method called to associate a Projectdetails object to this object
     * through the Projectdetails foreign key attribute.
     *
     * @param    Projectdetails $l Projectdetails
     * @return Location The current object (for fluent API support)
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
        $projectdetails->setLocation($this);
    }

    /**
     * @param	Projectdetails $projectdetails The projectdetails object to remove.
     * @return Location The current object (for fluent API support)
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
            $projectdetails->setLocation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Projectdetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Projectdetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Projectdetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * @return Location The current object (for fluent API support)
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
     * If this Location is new, it will return
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
                    ->filterByLocation($this)
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
     * @return Location The current object (for fluent API support)
     */
    public function setCustomerreceiptss(PropelCollection $customerreceiptss, PropelPDO $con = null)
    {
        $customerreceiptssToDelete = $this->getCustomerreceiptss(new Criteria(), $con)->diff($customerreceiptss);


        $this->customerreceiptssScheduledForDeletion = $customerreceiptssToDelete;

        foreach ($customerreceiptssToDelete as $customerreceiptsRemoved) {
            $customerreceiptsRemoved->setLocation(null);
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
                ->filterByLocation($this)
                ->count($con);
        }

        return count($this->collCustomerreceiptss);
    }

    /**
     * Method called to associate a Customerreceipts object to this object
     * through the Customerreceipts foreign key attribute.
     *
     * @param    Customerreceipts $l Customerreceipts
     * @return Location The current object (for fluent API support)
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
        $customerreceipts->setLocation($this);
    }

    /**
     * @param	Customerreceipts $customerreceipts The customerreceipts object to remove.
     * @return Location The current object (for fluent API support)
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
            $customerreceipts->setLocation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Customerreceiptss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * @return Location The current object (for fluent API support)
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
     * If this Location is new, it will return
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
                    ->filterByLocation($this)
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
     * @return Location The current object (for fluent API support)
     */
    public function setSaless(PropelCollection $saless, PropelPDO $con = null)
    {
        $salessToDelete = $this->getSaless(new Criteria(), $con)->diff($saless);


        $this->salessScheduledForDeletion = $salessToDelete;

        foreach ($salessToDelete as $salesRemoved) {
            $salesRemoved->setLocation(null);
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
                ->filterByLocation($this)
                ->count($con);
        }

        return count($this->collSaless);
    }

    /**
     * Method called to associate a Sales object to this object
     * through the Sales foreign key attribute.
     *
     * @param    Sales $l Sales
     * @return Location The current object (for fluent API support)
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
        $sales->setLocation($this);
    }

    /**
     * @param	Sales $sales The sales object to remove.
     * @return Location The current object (for fluent API support)
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
            $sales->setLocation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Saless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Clears out the collRefundss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Location The current object (for fluent API support)
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
     * If this Location is new, it will return
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
                    ->filterByLocation($this)
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
     * @return Location The current object (for fluent API support)
     */
    public function setRefundss(PropelCollection $refundss, PropelPDO $con = null)
    {
        $refundssToDelete = $this->getRefundss(new Criteria(), $con)->diff($refundss);


        $this->refundssScheduledForDeletion = $refundssToDelete;

        foreach ($refundssToDelete as $refundsRemoved) {
            $refundsRemoved->setLocation(null);
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
                ->filterByLocation($this)
                ->count($con);
        }

        return count($this->collRefundss);
    }

    /**
     * Method called to associate a Refunds object to this object
     * through the Refunds foreign key attribute.
     *
     * @param    Refunds $l Refunds
     * @return Location The current object (for fluent API support)
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
        $refunds->setLocation($this);
    }

    /**
     * @param	Refunds $refunds The refunds object to remove.
     * @return Location The current object (for fluent API support)
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
            $refunds->setLocation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
     * Otherwise if this Location is new, it will return
     * an empty collection; or if this Location has previously
     * been saved, it will retrieve related Refundss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Location.
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
        $this->locationcode = null;
        $this->locationname = null;
        $this->locationcity = null;
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
            if ($this->collProjects) {
                foreach ($this->collProjects as $o) {
                    $o->clearAllReferences($deep);
                }
            }
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collProjects instanceof PropelCollection) {
            $this->collProjects->clearIterator();
        }
        $this->collProjects = null;
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
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(LocationPeer::DEFAULT_STRING_FORMAT);
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
