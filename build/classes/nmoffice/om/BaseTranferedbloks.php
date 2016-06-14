<?php


/**
 * Base class that represents a row from the 'tranferedbloks' table.
 *
 * Transfered Blocks Log Table
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseTranferedbloks extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TranferedbloksPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TranferedbloksPeer
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
     * The value for the salerefno field.
     * @var        int
     */
    protected $salerefno;

    /**
     * The value for the blockrefnumber_previous field.
     * @var        int
     */
    protected $blockrefnumber_previous;

    /**
     * The value for the blockrefnumber_current field.
     * @var        int
     */
    protected $blockrefnumber_current;

    /**
     * The value for the currentblock_previouscustomer field.
     * @var        int
     */
    protected $currentblock_previouscustomer;

    /**
     * The value for the other1 field.
     * @var        int
     */
    protected $other1;

    /**
     * The value for the other2 field.
     * @var        double
     */
    protected $other2;

    /**
     * The value for the other3 field.
     * @var        string
     */
    protected $other3;

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
     * @var        Customerdetails
     */
    protected $aCustomerdetails;

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
     * Get the [salerefno] column value.
     * sale reference number
     * @return int
     */
    public function getSalerefno()
    {

        return $this->salerefno;
    }

    /**
     * Get the [blockrefnumber_previous] column value.
     * previous block reference number
     * @return int
     */
    public function getBlockrefnumberPrevious()
    {

        return $this->blockrefnumber_previous;
    }

    /**
     * Get the [blockrefnumber_current] column value.
     * new block reference number
     * @return int
     */
    public function getBlockrefnumberCurrent()
    {

        return $this->blockrefnumber_current;
    }

    /**
     * Get the [currentblock_previouscustomer] column value.
     * previous customer of the current block
     * @return int
     */
    public function getCurrentblockPreviouscustomer()
    {

        return $this->currentblock_previouscustomer;
    }

    /**
     * Get the [other1] column value.
     * reserved int type
     * @return int
     */
    public function getOther1()
    {

        return $this->other1;
    }

    /**
     * Get the [other2] column value.
     * reserved double type
     * @return double
     */
    public function getOther2()
    {

        return $this->other2;
    }

    /**
     * Get the [other3] column value.
     * reserved varchar
     * @return string
     */
    public function getOther3()
    {

        return $this->other3;
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
     * Set the value of [refno] column.
     * reference number
     * @param  int $v new value
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = TranferedbloksPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [customercode] column.
     * customer code
     * @param  int $v new value
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setCustomercode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customercode !== $v) {
            $this->customercode = $v;
            $this->modifiedColumns[] = TranferedbloksPeer::CUSTOMERCODE;
        }

        if ($this->aCustomerdetails !== null && $this->aCustomerdetails->getCustomercode() !== $v) {
            $this->aCustomerdetails = null;
        }


        return $this;
    } // setCustomercode()

    /**
     * Set the value of [salerefno] column.
     * sale reference number
     * @param  int $v new value
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setSalerefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->salerefno !== $v) {
            $this->salerefno = $v;
            $this->modifiedColumns[] = TranferedbloksPeer::SALEREFNO;
        }

        if ($this->aSales !== null && $this->aSales->getRefno() !== $v) {
            $this->aSales = null;
        }


        return $this;
    } // setSalerefno()

    /**
     * Set the value of [blockrefnumber_previous] column.
     * previous block reference number
     * @param  int $v new value
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setBlockrefnumberPrevious($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->blockrefnumber_previous !== $v) {
            $this->blockrefnumber_previous = $v;
            $this->modifiedColumns[] = TranferedbloksPeer::BLOCKREFNUMBER_PREVIOUS;
        }


        return $this;
    } // setBlockrefnumberPrevious()

    /**
     * Set the value of [blockrefnumber_current] column.
     * new block reference number
     * @param  int $v new value
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setBlockrefnumberCurrent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->blockrefnumber_current !== $v) {
            $this->blockrefnumber_current = $v;
            $this->modifiedColumns[] = TranferedbloksPeer::BLOCKREFNUMBER_CURRENT;
        }


        return $this;
    } // setBlockrefnumberCurrent()

    /**
     * Set the value of [currentblock_previouscustomer] column.
     * previous customer of the current block
     * @param  int $v new value
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setCurrentblockPreviouscustomer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->currentblock_previouscustomer !== $v) {
            $this->currentblock_previouscustomer = $v;
            $this->modifiedColumns[] = TranferedbloksPeer::CURRENTBLOCK_PREVIOUSCUSTOMER;
        }


        return $this;
    } // setCurrentblockPreviouscustomer()

    /**
     * Set the value of [other1] column.
     * reserved int type
     * @param  int $v new value
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setOther1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->other1 !== $v) {
            $this->other1 = $v;
            $this->modifiedColumns[] = TranferedbloksPeer::OTHER1;
        }


        return $this;
    } // setOther1()

    /**
     * Set the value of [other2] column.
     * reserved double type
     * @param  double $v new value
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setOther2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->other2 !== $v) {
            $this->other2 = $v;
            $this->modifiedColumns[] = TranferedbloksPeer::OTHER2;
        }


        return $this;
    } // setOther2()

    /**
     * Set the value of [other3] column.
     * reserved varchar
     * @param  string $v new value
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setOther3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->other3 !== $v) {
            $this->other3 = $v;
            $this->modifiedColumns[] = TranferedbloksPeer::OTHER3;
        }


        return $this;
    } // setOther3()

    /**
     * Set the value of [addedby] column.
     * Added by
     * @param  int $v new value
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setAddedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->addedby !== $v) {
            $this->addedby = $v;
            $this->modifiedColumns[] = TranferedbloksPeer::ADDEDBY;
        }


        return $this;
    } // setAddedby()

    /**
     * Sets the value of [addeddate] column to a normalized version of the date/time value specified.
     * Added date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setAddeddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addeddate !== null || $dt !== null) {
            $currentDateAsString = ($this->addeddate !== null && $tmpDt = new DateTime($this->addeddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addeddate = $newDateAsString;
                $this->modifiedColumns[] = TranferedbloksPeer::ADDEDDATE;
            }
        } // if either are not null


        return $this;
    } // setAddeddate()

    /**
     * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
     * Added time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Tranferedbloks The current object (for fluent API support)
     */
    public function setAddedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->addedtime !== null && $tmpDt = new DateTime($this->addedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addedtime = $newDateAsString;
                $this->modifiedColumns[] = TranferedbloksPeer::ADDEDTIME;
            }
        } // if either are not null


        return $this;
    } // setAddedtime()

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
            $this->salerefno = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->blockrefnumber_previous = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->blockrefnumber_current = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->currentblock_previouscustomer = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->other1 = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->other2 = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->other3 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->addedby = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->addeddate = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->addedtime = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = TranferedbloksPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Tranferedbloks object", $e);
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
        if ($this->aSales !== null && $this->salerefno !== $this->aSales->getRefno()) {
            $this->aSales = null;
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
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TranferedbloksPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomerdetails = null;
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
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TranferedbloksQuery::create()
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
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TranferedbloksPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TranferedbloksPeer::REFNO;
        if (null !== $this->refno) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TranferedbloksPeer::REFNO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TranferedbloksPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`refno`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::CUSTOMERCODE)) {
            $modifiedColumns[':p' . $index++]  = '`customercode`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::SALEREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`salerefno`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::BLOCKREFNUMBER_PREVIOUS)) {
            $modifiedColumns[':p' . $index++]  = '`blockrefnumber_previous`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::BLOCKREFNUMBER_CURRENT)) {
            $modifiedColumns[':p' . $index++]  = '`blockrefnumber_current`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::CURRENTBLOCK_PREVIOUSCUSTOMER)) {
            $modifiedColumns[':p' . $index++]  = '`currentblock_previouscustomer`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::OTHER1)) {
            $modifiedColumns[':p' . $index++]  = '`other1`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::OTHER2)) {
            $modifiedColumns[':p' . $index++]  = '`other2`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::OTHER3)) {
            $modifiedColumns[':p' . $index++]  = '`other3`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::ADDEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`addedby`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::ADDEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`addeddate`';
        }
        if ($this->isColumnModified(TranferedbloksPeer::ADDEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`addedtime`';
        }

        $sql = sprintf(
            'INSERT INTO `tranferedbloks` (%s) VALUES (%s)',
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
                    case '`salerefno`':
                        $stmt->bindValue($identifier, $this->salerefno, PDO::PARAM_INT);
                        break;
                    case '`blockrefnumber_previous`':
                        $stmt->bindValue($identifier, $this->blockrefnumber_previous, PDO::PARAM_INT);
                        break;
                    case '`blockrefnumber_current`':
                        $stmt->bindValue($identifier, $this->blockrefnumber_current, PDO::PARAM_INT);
                        break;
                    case '`currentblock_previouscustomer`':
                        $stmt->bindValue($identifier, $this->currentblock_previouscustomer, PDO::PARAM_INT);
                        break;
                    case '`other1`':
                        $stmt->bindValue($identifier, $this->other1, PDO::PARAM_INT);
                        break;
                    case '`other2`':
                        $stmt->bindValue($identifier, $this->other2, PDO::PARAM_STR);
                        break;
                    case '`other3`':
                        $stmt->bindValue($identifier, $this->other3, PDO::PARAM_STR);
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

            if ($this->aSales !== null) {
                if (!$this->aSales->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSales->getValidationFailures());
                }
            }


            if (($retval = TranferedbloksPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TranferedbloksPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSalerefno();
                break;
            case 3:
                return $this->getBlockrefnumberPrevious();
                break;
            case 4:
                return $this->getBlockrefnumberCurrent();
                break;
            case 5:
                return $this->getCurrentblockPreviouscustomer();
                break;
            case 6:
                return $this->getOther1();
                break;
            case 7:
                return $this->getOther2();
                break;
            case 8:
                return $this->getOther3();
                break;
            case 9:
                return $this->getAddedby();
                break;
            case 10:
                return $this->getAddeddate();
                break;
            case 11:
                return $this->getAddedtime();
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
        if (isset($alreadyDumpedObjects['Tranferedbloks'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Tranferedbloks'][$this->getPrimaryKey()] = true;
        $keys = TranferedbloksPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRefno(),
            $keys[1] => $this->getCustomercode(),
            $keys[2] => $this->getSalerefno(),
            $keys[3] => $this->getBlockrefnumberPrevious(),
            $keys[4] => $this->getBlockrefnumberCurrent(),
            $keys[5] => $this->getCurrentblockPreviouscustomer(),
            $keys[6] => $this->getOther1(),
            $keys[7] => $this->getOther2(),
            $keys[8] => $this->getOther3(),
            $keys[9] => $this->getAddedby(),
            $keys[10] => $this->getAddeddate(),
            $keys[11] => $this->getAddedtime(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCustomerdetails) {
                $result['Customerdetails'] = $this->aCustomerdetails->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = TranferedbloksPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSalerefno($value);
                break;
            case 3:
                $this->setBlockrefnumberPrevious($value);
                break;
            case 4:
                $this->setBlockrefnumberCurrent($value);
                break;
            case 5:
                $this->setCurrentblockPreviouscustomer($value);
                break;
            case 6:
                $this->setOther1($value);
                break;
            case 7:
                $this->setOther2($value);
                break;
            case 8:
                $this->setOther3($value);
                break;
            case 9:
                $this->setAddedby($value);
                break;
            case 10:
                $this->setAddeddate($value);
                break;
            case 11:
                $this->setAddedtime($value);
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
        $keys = TranferedbloksPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRefno($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCustomercode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSalerefno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setBlockrefnumberPrevious($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBlockrefnumberCurrent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCurrentblockPreviouscustomer($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOther1($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOther2($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOther3($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAddedby($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAddeddate($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAddedtime($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TranferedbloksPeer::DATABASE_NAME);

        if ($this->isColumnModified(TranferedbloksPeer::REFNO)) $criteria->add(TranferedbloksPeer::REFNO, $this->refno);
        if ($this->isColumnModified(TranferedbloksPeer::CUSTOMERCODE)) $criteria->add(TranferedbloksPeer::CUSTOMERCODE, $this->customercode);
        if ($this->isColumnModified(TranferedbloksPeer::SALEREFNO)) $criteria->add(TranferedbloksPeer::SALEREFNO, $this->salerefno);
        if ($this->isColumnModified(TranferedbloksPeer::BLOCKREFNUMBER_PREVIOUS)) $criteria->add(TranferedbloksPeer::BLOCKREFNUMBER_PREVIOUS, $this->blockrefnumber_previous);
        if ($this->isColumnModified(TranferedbloksPeer::BLOCKREFNUMBER_CURRENT)) $criteria->add(TranferedbloksPeer::BLOCKREFNUMBER_CURRENT, $this->blockrefnumber_current);
        if ($this->isColumnModified(TranferedbloksPeer::CURRENTBLOCK_PREVIOUSCUSTOMER)) $criteria->add(TranferedbloksPeer::CURRENTBLOCK_PREVIOUSCUSTOMER, $this->currentblock_previouscustomer);
        if ($this->isColumnModified(TranferedbloksPeer::OTHER1)) $criteria->add(TranferedbloksPeer::OTHER1, $this->other1);
        if ($this->isColumnModified(TranferedbloksPeer::OTHER2)) $criteria->add(TranferedbloksPeer::OTHER2, $this->other2);
        if ($this->isColumnModified(TranferedbloksPeer::OTHER3)) $criteria->add(TranferedbloksPeer::OTHER3, $this->other3);
        if ($this->isColumnModified(TranferedbloksPeer::ADDEDBY)) $criteria->add(TranferedbloksPeer::ADDEDBY, $this->addedby);
        if ($this->isColumnModified(TranferedbloksPeer::ADDEDDATE)) $criteria->add(TranferedbloksPeer::ADDEDDATE, $this->addeddate);
        if ($this->isColumnModified(TranferedbloksPeer::ADDEDTIME)) $criteria->add(TranferedbloksPeer::ADDEDTIME, $this->addedtime);

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
        $criteria = new Criteria(TranferedbloksPeer::DATABASE_NAME);
        $criteria->add(TranferedbloksPeer::REFNO, $this->refno);

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
     * @param object $copyObj An object of Tranferedbloks (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCustomercode($this->getCustomercode());
        $copyObj->setSalerefno($this->getSalerefno());
        $copyObj->setBlockrefnumberPrevious($this->getBlockrefnumberPrevious());
        $copyObj->setBlockrefnumberCurrent($this->getBlockrefnumberCurrent());
        $copyObj->setCurrentblockPreviouscustomer($this->getCurrentblockPreviouscustomer());
        $copyObj->setOther1($this->getOther1());
        $copyObj->setOther2($this->getOther2());
        $copyObj->setOther3($this->getOther3());
        $copyObj->setAddedby($this->getAddedby());
        $copyObj->setAddeddate($this->getAddeddate());
        $copyObj->setAddedtime($this->getAddedtime());

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
     * @return Tranferedbloks Clone of current object.
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
     * @return TranferedbloksPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TranferedbloksPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Customerdetails object.
     *
     * @param                  Customerdetails $v
     * @return Tranferedbloks The current object (for fluent API support)
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
            $v->addTranferedbloks($this);
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
                $this->aCustomerdetails->addTranferedblokss($this);
             */
        }

        return $this->aCustomerdetails;
    }

    /**
     * Declares an association between this object and a Sales object.
     *
     * @param                  Sales $v
     * @return Tranferedbloks The current object (for fluent API support)
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
            $v->addTranferedbloks($this);
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
                $this->aSales->addTranferedblokss($this);
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
        $this->customercode = null;
        $this->salerefno = null;
        $this->blockrefnumber_previous = null;
        $this->blockrefnumber_current = null;
        $this->currentblock_previouscustomer = null;
        $this->other1 = null;
        $this->other2 = null;
        $this->other3 = null;
        $this->addedby = null;
        $this->addeddate = null;
        $this->addedtime = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
            if ($this->aSales instanceof Persistent) {
              $this->aSales->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCustomerdetails = null;
        $this->aSales = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TranferedbloksPeer::DEFAULT_STRING_FORMAT);
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
