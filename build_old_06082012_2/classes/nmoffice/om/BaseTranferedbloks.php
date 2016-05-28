<?php

/**
 * Base class that represents a row from the 'tranferedbloks' table.
 *
 * Transfered Blocks Log Table
 *
 * @package    nmoffice.om
 */
abstract class BaseTranferedbloks extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TranferedbloksPeer
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
	 * Get the [salerefno] column value.
	 * sale reference number
	 * @return     int
	 */
	public function getSalerefno()
	{
		return $this->salerefno;
	}

	/**
	 * Get the [blockrefnumber_previous] column value.
	 * previous block reference number
	 * @return     int
	 */
	public function getBlockrefnumberPrevious()
	{
		return $this->blockrefnumber_previous;
	}

	/**
	 * Get the [blockrefnumber_current] column value.
	 * new block reference number
	 * @return     int
	 */
	public function getBlockrefnumberCurrent()
	{
		return $this->blockrefnumber_current;
	}

	/**
	 * Get the [currentblock_previouscustomer] column value.
	 * previous customer of the current block
	 * @return     int
	 */
	public function getCurrentblockPreviouscustomer()
	{
		return $this->currentblock_previouscustomer;
	}

	/**
	 * Get the [other1] column value.
	 * reserved int type
	 * @return     int
	 */
	public function getOther1()
	{
		return $this->other1;
	}

	/**
	 * Get the [other2] column value.
	 * reserved double type
	 * @return     double
	 */
	public function getOther2()
	{
		return $this->other2;
	}

	/**
	 * Get the [other3] column value.
	 * reserved varchar
	 * @return     string
	 */
	public function getOther3()
	{
		return $this->other3;
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
	 * Set the value of [refno] column.
	 * reference number
	 * @param      int $v new value
	 * @return     Tranferedbloks The current object (for fluent API support)
	 */
	public function setRefno($v)
	{
		if ($v !== null) {
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
	 * @param      int $v new value
	 * @return     Tranferedbloks The current object (for fluent API support)
	 */
	public function setCustomercode($v)
	{
		if ($v !== null) {
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
	 * @param      int $v new value
	 * @return     Tranferedbloks The current object (for fluent API support)
	 */
	public function setSalerefno($v)
	{
		if ($v !== null) {
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
	 * @param      int $v new value
	 * @return     Tranferedbloks The current object (for fluent API support)
	 */
	public function setBlockrefnumberPrevious($v)
	{
		if ($v !== null) {
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
	 * @param      int $v new value
	 * @return     Tranferedbloks The current object (for fluent API support)
	 */
	public function setBlockrefnumberCurrent($v)
	{
		if ($v !== null) {
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
	 * @param      int $v new value
	 * @return     Tranferedbloks The current object (for fluent API support)
	 */
	public function setCurrentblockPreviouscustomer($v)
	{
		if ($v !== null) {
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
	 * @param      int $v new value
	 * @return     Tranferedbloks The current object (for fluent API support)
	 */
	public function setOther1($v)
	{
		if ($v !== null) {
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
	 * @param      double $v new value
	 * @return     Tranferedbloks The current object (for fluent API support)
	 */
	public function setOther2($v)
	{
		if ($v !== null) {
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
	 * @param      string $v new value
	 * @return     Tranferedbloks The current object (for fluent API support)
	 */
	public function setOther3($v)
	{
		if ($v !== null) {
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
	 * @param      int $v new value
	 * @return     Tranferedbloks The current object (for fluent API support)
	 */
	public function setAddedby($v)
	{
		if ($v !== null) {
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
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Tranferedbloks The current object (for fluent API support)
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
				$this->modifiedColumns[] = TranferedbloksPeer::ADDEDDATE;
			}
		} // if either are not null

		return $this;
	} // setAddeddate()

	/**
	 * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
	 * Added time
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Tranferedbloks The current object (for fluent API support)
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
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
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

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 12; // 12 = TranferedbloksPeer::NUM_COLUMNS - TranferedbloksPeer::NUM_LAZY_LOAD_COLUMNS).

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
	 * @throws     PropelException
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
			$con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				TranferedbloksPeer::doDelete($this, $con);
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
				$con->commit();
				TranferedbloksPeer::addInstanceToPool($this);
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

			if ($this->aSales !== null) {
				if ($this->aSales->isModified() || $this->aSales->isNew()) {
					$affectedRows += $this->aSales->save($con);
				}
				$this->setSales($this->aSales);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = TranferedbloksPeer::REFNO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TranferedbloksPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setRefno($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += TranferedbloksPeer::doUpdate($this, $con);
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
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
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
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
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TranferedbloksPeer::DATABASE_NAME);

		$criteria->add(TranferedbloksPeer::REFNO, $this->refno);

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
	 * @param      object $copyObj An object of Tranferedbloks (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCustomercode($this->customercode);

		$copyObj->setSalerefno($this->salerefno);

		$copyObj->setBlockrefnumberPrevious($this->blockrefnumber_previous);

		$copyObj->setBlockrefnumberCurrent($this->blockrefnumber_current);

		$copyObj->setCurrentblockPreviouscustomer($this->currentblock_previouscustomer);

		$copyObj->setOther1($this->other1);

		$copyObj->setOther2($this->other2);

		$copyObj->setOther3($this->other3);

		$copyObj->setAddedby($this->addedby);

		$copyObj->setAddeddate($this->addeddate);

		$copyObj->setAddedtime($this->addedtime);


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
	 * @return     Tranferedbloks Clone of current object.
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
	 * @return     TranferedbloksPeer
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
	 * @param      Customerdetails $v
	 * @return     Tranferedbloks The current object (for fluent API support)
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
			$v->addTranferedbloks($this);
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
			   $this->aCustomerdetails->addTranferedblokss($this);
			 */
		}
		return $this->aCustomerdetails;
	}

	/**
	 * Declares an association between this object and a Sales object.
	 *
	 * @param      Sales $v
	 * @return     Tranferedbloks The current object (for fluent API support)
	 * @throws     PropelException
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
	 * @param      PropelPDO Optional Connection object.
	 * @return     Sales The associated Sales object.
	 * @throws     PropelException
	 */
	public function getSales(PropelPDO $con = null)
	{
		if ($this->aSales === null && ($this->salerefno !== null)) {
			$this->aSales = SalesPeer::retrieveByPk($this->salerefno);
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

			$this->aCustomerdetails = null;
			$this->aSales = null;
	}

} // BaseTranferedbloks
