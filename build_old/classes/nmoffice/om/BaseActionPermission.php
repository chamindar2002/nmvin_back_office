<?php

/**
 * Base class that represents a row from the 'action_permission' table.
 *
 * Action Permission
 *
 * @package    nmoffice.om
 */
abstract class BaseActionPermission extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ActionPermissionPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the module field.
	 * @var        string
	 */
	protected $module;

	/**
	 * The value for the action field.
	 * @var        string
	 */
	protected $action;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the systemid field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $systemid;

	/**
	 * @var        array RoleActionPermissionRef[] Collection to store aggregation of RoleActionPermissionRef objects.
	 */
	protected $collRoleActionPermissionRefs;

	/**
	 * @var        Criteria The criteria used to select the current contents of collRoleActionPermissionRefs.
	 */
	private $lastRoleActionPermissionRefCriteria = null;

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
		$this->systemid = 0;
	}

	/**
	 * Initializes internal state of BaseActionPermission object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id] column value.
	 * Action ID
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [module] column value.
	 * Module
	 * @return     string
	 */
	public function getModule()
	{
		return $this->module;
	}

	/**
	 * Get the [action] column value.
	 * Action Name
	 * @return     string
	 */
	public function getAction()
	{
		return $this->action;
	}

	/**
	 * Get the [description] column value.
	 * Description
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [systemid] column value.
	 * System ID Number
	 * @return     int
	 */
	public function getSystemid()
	{
		return $this->systemid;
	}

	/**
	 * Set the value of [id] column.
	 * Action ID
	 * @param      int $v new value
	 * @return     ActionPermission The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ActionPermissionPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [module] column.
	 * Module
	 * @param      string $v new value
	 * @return     ActionPermission The current object (for fluent API support)
	 */
	public function setModule($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->module !== $v) {
			$this->module = $v;
			$this->modifiedColumns[] = ActionPermissionPeer::MODULE;
		}

		return $this;
	} // setModule()

	/**
	 * Set the value of [action] column.
	 * Action Name
	 * @param      string $v new value
	 * @return     ActionPermission The current object (for fluent API support)
	 */
	public function setAction($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->action !== $v) {
			$this->action = $v;
			$this->modifiedColumns[] = ActionPermissionPeer::ACTION;
		}

		return $this;
	} // setAction()

	/**
	 * Set the value of [description] column.
	 * Description
	 * @param      string $v new value
	 * @return     ActionPermission The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = ActionPermissionPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [systemid] column.
	 * System ID Number
	 * @param      int $v new value
	 * @return     ActionPermission The current object (for fluent API support)
	 */
	public function setSystemid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->systemid !== $v || $this->isNew()) {
			$this->systemid = $v;
			$this->modifiedColumns[] = ActionPermissionPeer::SYSTEMID;
		}

		return $this;
	} // setSystemid()

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
			if ($this->systemid !== 0) {
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

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->module = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->action = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->systemid = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 5; // 5 = ActionPermissionPeer::NUM_COLUMNS - ActionPermissionPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ActionPermission object", $e);
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
			$con = Propel::getConnection(ActionPermissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ActionPermissionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collRoleActionPermissionRefs = null;
			$this->lastRoleActionPermissionRefCriteria = null;

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
			$con = Propel::getConnection(ActionPermissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ActionPermissionPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ActionPermissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ActionPermissionPeer::addInstanceToPool($this);
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

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ActionPermissionPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ActionPermissionPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += ActionPermissionPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collRoleActionPermissionRefs !== null) {
				foreach ($this->collRoleActionPermissionRefs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
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


			if (($retval = ActionPermissionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collRoleActionPermissionRefs !== null) {
					foreach ($this->collRoleActionPermissionRefs as $referrerFK) {
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
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ActionPermissionPeer::DATABASE_NAME);

		if ($this->isColumnModified(ActionPermissionPeer::ID)) $criteria->add(ActionPermissionPeer::ID, $this->id);
		if ($this->isColumnModified(ActionPermissionPeer::MODULE)) $criteria->add(ActionPermissionPeer::MODULE, $this->module);
		if ($this->isColumnModified(ActionPermissionPeer::ACTION)) $criteria->add(ActionPermissionPeer::ACTION, $this->action);
		if ($this->isColumnModified(ActionPermissionPeer::DESCRIPTION)) $criteria->add(ActionPermissionPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(ActionPermissionPeer::SYSTEMID)) $criteria->add(ActionPermissionPeer::SYSTEMID, $this->systemid);

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
		$criteria = new Criteria(ActionPermissionPeer::DATABASE_NAME);

		$criteria->add(ActionPermissionPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of ActionPermission (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setModule($this->module);

		$copyObj->setAction($this->action);

		$copyObj->setDescription($this->description);

		$copyObj->setSystemid($this->systemid);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getRoleActionPermissionRefs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addRoleActionPermissionRef($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

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
	 * @return     ActionPermission Clone of current object.
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
	 * @return     ActionPermissionPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ActionPermissionPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collRoleActionPermissionRefs collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addRoleActionPermissionRefs()
	 */
	public function clearRoleActionPermissionRefs()
	{
		$this->collRoleActionPermissionRefs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collRoleActionPermissionRefs collection (array).
	 *
	 * By default this just sets the collRoleActionPermissionRefs collection to an empty array (like clearcollRoleActionPermissionRefs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initRoleActionPermissionRefs()
	{
		$this->collRoleActionPermissionRefs = array();
	}

	/**
	 * Gets an array of RoleActionPermissionRef objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this ActionPermission has previously been saved, it will retrieve
	 * related RoleActionPermissionRefs from storage. If this ActionPermission is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array RoleActionPermissionRef[]
	 * @throws     PropelException
	 */
	public function getRoleActionPermissionRefs($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ActionPermissionPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRoleActionPermissionRefs === null) {
			if ($this->isNew()) {
			   $this->collRoleActionPermissionRefs = array();
			} else {

				$criteria->add(RoleActionPermissionRefPeer::AID, $this->id);

				RoleActionPermissionRefPeer::addSelectColumns($criteria);
				$this->collRoleActionPermissionRefs = RoleActionPermissionRefPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(RoleActionPermissionRefPeer::AID, $this->id);

				RoleActionPermissionRefPeer::addSelectColumns($criteria);
				if (!isset($this->lastRoleActionPermissionRefCriteria) || !$this->lastRoleActionPermissionRefCriteria->equals($criteria)) {
					$this->collRoleActionPermissionRefs = RoleActionPermissionRefPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastRoleActionPermissionRefCriteria = $criteria;
		return $this->collRoleActionPermissionRefs;
	}

	/**
	 * Returns the number of related RoleActionPermissionRef objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related RoleActionPermissionRef objects.
	 * @throws     PropelException
	 */
	public function countRoleActionPermissionRefs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ActionPermissionPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collRoleActionPermissionRefs === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(RoleActionPermissionRefPeer::AID, $this->id);

				$count = RoleActionPermissionRefPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(RoleActionPermissionRefPeer::AID, $this->id);

				if (!isset($this->lastRoleActionPermissionRefCriteria) || !$this->lastRoleActionPermissionRefCriteria->equals($criteria)) {
					$count = RoleActionPermissionRefPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collRoleActionPermissionRefs);
				}
			} else {
				$count = count($this->collRoleActionPermissionRefs);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a RoleActionPermissionRef object to this object
	 * through the RoleActionPermissionRef foreign key attribute.
	 *
	 * @param      RoleActionPermissionRef $l RoleActionPermissionRef
	 * @return     void
	 * @throws     PropelException
	 */
	public function addRoleActionPermissionRef(RoleActionPermissionRef $l)
	{
		if ($this->collRoleActionPermissionRefs === null) {
			$this->initRoleActionPermissionRefs();
		}
		if (!in_array($l, $this->collRoleActionPermissionRefs, true)) { // only add it if the **same** object is not already associated
			array_push($this->collRoleActionPermissionRefs, $l);
			$l->setActionPermission($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this ActionPermission is new, it will return
	 * an empty collection; or if this ActionPermission has previously
	 * been saved, it will retrieve related RoleActionPermissionRefs from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in ActionPermission.
	 */
	public function getRoleActionPermissionRefsJoinRole($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ActionPermissionPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRoleActionPermissionRefs === null) {
			if ($this->isNew()) {
				$this->collRoleActionPermissionRefs = array();
			} else {

				$criteria->add(RoleActionPermissionRefPeer::AID, $this->id);

				$this->collRoleActionPermissionRefs = RoleActionPermissionRefPeer::doSelectJoinRole($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(RoleActionPermissionRefPeer::AID, $this->id);

			if (!isset($this->lastRoleActionPermissionRefCriteria) || !$this->lastRoleActionPermissionRefCriteria->equals($criteria)) {
				$this->collRoleActionPermissionRefs = RoleActionPermissionRefPeer::doSelectJoinRole($criteria, $con, $join_behavior);
			}
		}
		$this->lastRoleActionPermissionRefCriteria = $criteria;

		return $this->collRoleActionPermissionRefs;
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
			if ($this->collRoleActionPermissionRefs) {
				foreach ((array) $this->collRoleActionPermissionRefs as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collRoleActionPermissionRefs = null;
	}

} // BaseActionPermission
