<?php

/**
 * Base class that represents a row from the 'customer_receiptmethodofpayment' table.
 *
 * Receipt -Method of payment
 *
 * @package    nmoffice.om
 */
abstract class BaseCustomerReceiptmethodofpayment extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CustomerReceiptmethodofpaymentPeer
	 */
	protected static $peer;

	/**
	 * The value for the refno field.
	 * @var        int
	 */
	protected $refno;

	/**
	 * The value for the receiptno field.
	 * @var        int
	 */
	protected $receiptno;

	/**
	 * The value for the receiptstatus field.
	 * @var        string
	 */
	protected $receiptstatus;

	/**
	 * The value for the bank field.
	 * @var        string
	 */
	protected $bank;

	/**
	 * The value for the chequnumber field.
	 * @var        string
	 */
	protected $chequnumber;

	/**
	 * The value for the chequedate field.
	 * @var        string
	 */
	protected $chequedate;

	/**
	 * The value for the amount field.
	 * @var        double
	 */
	protected $amount;

	/**
	 * The value for the deleted field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $deleted;

	/**
	 * @var        Customerreceipts
	 */
	protected $aCustomerreceipts;

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
		$this->deleted = false;
	}

	/**
	 * Initializes internal state of BaseCustomerReceiptmethodofpayment object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [refno] column value.
	 * Record Referance Number
	 * @return     int
	 */
	public function getRefno()
	{
		return $this->refno;
	}

	/**
	 * Get the [receiptno] column value.
	 * Receipt Number
	 * @return     int
	 */
	public function getReceiptno()
	{
		return $this->receiptno;
	}

	/**
	 * Get the [receiptstatus] column value.
	 * Receipt Status CA=Cash; CH=Cheque; BD=Bank Deposit
	 * @return     string
	 */
	public function getReceiptstatus()
	{
		return $this->receiptstatus;
	}

	/**
	 * Get the [bank] column value.
	 * Bank Short Name
	 * @return     string
	 */
	public function getBank()
	{
		return $this->bank;
	}

	/**
	 * Get the [chequnumber] column value.
	 * Cheque Number
	 * @return     string
	 */
	public function getChequnumber()
	{
		return $this->chequnumber;
	}

	/**
	 * Get the [optionally formatted] temporal [chequedate] column value.
	 * Cheque Date
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getChequedate($format = '%x')
	{
		if ($this->chequedate === null) {
			return null;
		}


		if ($this->chequedate === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->chequedate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->chequedate, true), $x);
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
	 * Get the [amount] column value.
	 * Amount
	 * @return     double
	 */
	public function getAmount()
	{
		return $this->amount;
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
	 * Set the value of [refno] column.
	 * Record Referance Number
	 * @param      int $v new value
	 * @return     CustomerReceiptmethodofpayment The current object (for fluent API support)
	 */
	public function setRefno($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->refno !== $v) {
			$this->refno = $v;
			$this->modifiedColumns[] = CustomerReceiptmethodofpaymentPeer::REFNO;
		}

		return $this;
	} // setRefno()

	/**
	 * Set the value of [receiptno] column.
	 * Receipt Number
	 * @param      int $v new value
	 * @return     CustomerReceiptmethodofpayment The current object (for fluent API support)
	 */
	public function setReceiptno($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->receiptno !== $v) {
			$this->receiptno = $v;
			$this->modifiedColumns[] = CustomerReceiptmethodofpaymentPeer::RECEIPTNO;
		}

		if ($this->aCustomerreceipts !== null && $this->aCustomerreceipts->getReceiptno() !== $v) {
			$this->aCustomerreceipts = null;
		}

		return $this;
	} // setReceiptno()

	/**
	 * Set the value of [receiptstatus] column.
	 * Receipt Status CA=Cash; CH=Cheque; BD=Bank Deposit
	 * @param      string $v new value
	 * @return     CustomerReceiptmethodofpayment The current object (for fluent API support)
	 */
	public function setReceiptstatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->receiptstatus !== $v) {
			$this->receiptstatus = $v;
			$this->modifiedColumns[] = CustomerReceiptmethodofpaymentPeer::RECEIPTSTATUS;
		}

		return $this;
	} // setReceiptstatus()

	/**
	 * Set the value of [bank] column.
	 * Bank Short Name
	 * @param      string $v new value
	 * @return     CustomerReceiptmethodofpayment The current object (for fluent API support)
	 */
	public function setBank($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->bank !== $v) {
			$this->bank = $v;
			$this->modifiedColumns[] = CustomerReceiptmethodofpaymentPeer::BANK;
		}

		return $this;
	} // setBank()

	/**
	 * Set the value of [chequnumber] column.
	 * Cheque Number
	 * @param      string $v new value
	 * @return     CustomerReceiptmethodofpayment The current object (for fluent API support)
	 */
	public function setChequnumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->chequnumber !== $v) {
			$this->chequnumber = $v;
			$this->modifiedColumns[] = CustomerReceiptmethodofpaymentPeer::CHEQUNUMBER;
		}

		return $this;
	} // setChequnumber()

	/**
	 * Sets the value of [chequedate] column to a normalized version of the date/time value specified.
	 * Cheque Date
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     CustomerReceiptmethodofpayment The current object (for fluent API support)
	 */
	public function setChequedate($v)
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

		if ( $this->chequedate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->chequedate !== null && $tmpDt = new DateTime($this->chequedate)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->chequedate = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = CustomerReceiptmethodofpaymentPeer::CHEQUEDATE;
			}
		} // if either are not null

		return $this;
	} // setChequedate()

	/**
	 * Set the value of [amount] column.
	 * Amount
	 * @param      double $v new value
	 * @return     CustomerReceiptmethodofpayment The current object (for fluent API support)
	 */
	public function setAmount($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->amount !== $v) {
			$this->amount = $v;
			$this->modifiedColumns[] = CustomerReceiptmethodofpaymentPeer::AMOUNT;
		}

		return $this;
	} // setAmount()

	/**
	 * Set the value of [deleted] column.
	 * Record deleted
	 * @param      boolean $v new value
	 * @return     CustomerReceiptmethodofpayment The current object (for fluent API support)
	 */
	public function setDeleted($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->deleted !== $v || $this->isNew()) {
			$this->deleted = $v;
			$this->modifiedColumns[] = CustomerReceiptmethodofpaymentPeer::DELETED;
		}

		return $this;
	} // setDeleted()

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

			$this->refno = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->receiptno = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->receiptstatus = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->bank = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->chequnumber = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->chequedate = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->amount = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
			$this->deleted = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 8; // 8 = CustomerReceiptmethodofpaymentPeer::NUM_COLUMNS - CustomerReceiptmethodofpaymentPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating CustomerReceiptmethodofpayment object", $e);
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

		if ($this->aCustomerreceipts !== null && $this->receiptno !== $this->aCustomerreceipts->getReceiptno()) {
			$this->aCustomerreceipts = null;
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
			$con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CustomerReceiptmethodofpaymentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCustomerreceipts = null;
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
			$con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				CustomerReceiptmethodofpaymentPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				CustomerReceiptmethodofpaymentPeer::addInstanceToPool($this);
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

			if ($this->aCustomerreceipts !== null) {
				if ($this->aCustomerreceipts->isModified() || $this->aCustomerreceipts->isNew()) {
					$affectedRows += $this->aCustomerreceipts->save($con);
				}
				$this->setCustomerreceipts($this->aCustomerreceipts);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = CustomerReceiptmethodofpaymentPeer::REFNO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CustomerReceiptmethodofpaymentPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setRefno($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += CustomerReceiptmethodofpaymentPeer::doUpdate($this, $con);
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

			if ($this->aCustomerreceipts !== null) {
				if (!$this->aCustomerreceipts->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCustomerreceipts->getValidationFailures());
				}
			}


			if (($retval = CustomerReceiptmethodofpaymentPeer::doValidate($this, $columns)) !== true) {
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
		$criteria = new Criteria(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);

		if ($this->isColumnModified(CustomerReceiptmethodofpaymentPeer::REFNO)) $criteria->add(CustomerReceiptmethodofpaymentPeer::REFNO, $this->refno);
		if ($this->isColumnModified(CustomerReceiptmethodofpaymentPeer::RECEIPTNO)) $criteria->add(CustomerReceiptmethodofpaymentPeer::RECEIPTNO, $this->receiptno);
		if ($this->isColumnModified(CustomerReceiptmethodofpaymentPeer::RECEIPTSTATUS)) $criteria->add(CustomerReceiptmethodofpaymentPeer::RECEIPTSTATUS, $this->receiptstatus);
		if ($this->isColumnModified(CustomerReceiptmethodofpaymentPeer::BANK)) $criteria->add(CustomerReceiptmethodofpaymentPeer::BANK, $this->bank);
		if ($this->isColumnModified(CustomerReceiptmethodofpaymentPeer::CHEQUNUMBER)) $criteria->add(CustomerReceiptmethodofpaymentPeer::CHEQUNUMBER, $this->chequnumber);
		if ($this->isColumnModified(CustomerReceiptmethodofpaymentPeer::CHEQUEDATE)) $criteria->add(CustomerReceiptmethodofpaymentPeer::CHEQUEDATE, $this->chequedate);
		if ($this->isColumnModified(CustomerReceiptmethodofpaymentPeer::AMOUNT)) $criteria->add(CustomerReceiptmethodofpaymentPeer::AMOUNT, $this->amount);
		if ($this->isColumnModified(CustomerReceiptmethodofpaymentPeer::DELETED)) $criteria->add(CustomerReceiptmethodofpaymentPeer::DELETED, $this->deleted);

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
		$criteria = new Criteria(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);

		$criteria->add(CustomerReceiptmethodofpaymentPeer::REFNO, $this->refno);

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
	 * @param      object $copyObj An object of CustomerReceiptmethodofpayment (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setReceiptno($this->receiptno);

		$copyObj->setReceiptstatus($this->receiptstatus);

		$copyObj->setBank($this->bank);

		$copyObj->setChequnumber($this->chequnumber);

		$copyObj->setChequedate($this->chequedate);

		$copyObj->setAmount($this->amount);

		$copyObj->setDeleted($this->deleted);


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
	 * @return     CustomerReceiptmethodofpayment Clone of current object.
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
	 * @return     CustomerReceiptmethodofpaymentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CustomerReceiptmethodofpaymentPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Customerreceipts object.
	 *
	 * @param      Customerreceipts $v
	 * @return     CustomerReceiptmethodofpayment The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCustomerreceipts(Customerreceipts $v = null)
	{
		if ($v === null) {
			$this->setReceiptno(NULL);
		} else {
			$this->setReceiptno($v->getReceiptno());
		}

		$this->aCustomerreceipts = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Customerreceipts object, it will not be re-added.
		if ($v !== null) {
			$v->addCustomerReceiptmethodofpayment($this);
		}

		return $this;
	}


	/**
	 * Get the associated Customerreceipts object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Customerreceipts The associated Customerreceipts object.
	 * @throws     PropelException
	 */
	public function getCustomerreceipts(PropelPDO $con = null)
	{
		if ($this->aCustomerreceipts === null && ($this->receiptno !== null)) {
			$this->aCustomerreceipts = CustomerreceiptsPeer::retrieveByPk($this->receiptno);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCustomerreceipts->addCustomerReceiptmethodofpayments($this);
			 */
		}
		return $this->aCustomerreceipts;
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

			$this->aCustomerreceipts = null;
	}

} // BaseCustomerReceiptmethodofpayment
