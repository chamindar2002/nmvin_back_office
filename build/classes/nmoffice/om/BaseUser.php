<?php


/**
 * Base class that represents a row from the 'user' table.
 *
 * User
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseUser extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UserPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UserPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the uid field.
     * @var        int
     */
    protected $uid;

    /**
     * The value for the enabled field.
     * @var        boolean
     */
    protected $enabled;

    /**
     * The value for the loginname field.
     * @var        string
     */
    protected $loginname;

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
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * The value for the deleted field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $deleted;

    /**
     * @var        PropelObjectCollection|UserRoleRef[] Collection to store aggregation of UserRoleRef objects.
     */
    protected $collUserRoleRefs;
    protected $collUserRoleRefsPartial;

    /**
     * @var        PropelObjectCollection|Upcomprjctsregister[] Collection to store aggregation of Upcomprjctsregister objects.
     */
    protected $collUpcomprjctsregisters;
    protected $collUpcomprjctsregistersPartial;

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
    protected $userRoleRefsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $upcomprjctsregistersScheduledForDeletion = null;

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
     * Initializes internal state of BaseUser object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [uid] column value.
     * User ID
     * @return int
     */
    public function getUid()
    {

        return $this->uid;
    }

    /**
     * Get the [enabled] column value.
     * User is enabled
     * @return boolean
     */
    public function getEnabled()
    {

        return $this->enabled;
    }

    /**
     * Get the [loginname] column value.
     * User Name
     * @return string
     */
    public function getLoginname()
    {

        return $this->loginname;
    }

    /**
     * Get the [familyname] column value.
     * Family Name
     * @return string
     */
    public function getFamilyname()
    {

        return $this->familyname;
    }

    /**
     * Get the [firstname] column value.
     * First Name
     * @return string
     */
    public function getFirstname()
    {

        return $this->firstname;
    }

    /**
     * Get the [password] column value.
     * Password
     * @return string
     */
    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Get the [deleted] column value.
     * Delete Status
     * @return boolean
     */
    public function getDeleted()
    {

        return $this->deleted;
    }

    /**
     * Set the value of [uid] column.
     * User ID
     * @param  int $v new value
     * @return User The current object (for fluent API support)
     */
    public function setUid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->uid !== $v) {
            $this->uid = $v;
            $this->modifiedColumns[] = UserPeer::UID;
        }


        return $this;
    } // setUid()

    /**
     * Sets the value of the [enabled] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * User is enabled
     * @param boolean|integer|string $v The new value
     * @return User The current object (for fluent API support)
     */
    public function setEnabled($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->enabled !== $v) {
            $this->enabled = $v;
            $this->modifiedColumns[] = UserPeer::ENABLED;
        }


        return $this;
    } // setEnabled()

    /**
     * Set the value of [loginname] column.
     * User Name
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setLoginname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->loginname !== $v) {
            $this->loginname = $v;
            $this->modifiedColumns[] = UserPeer::LOGINNAME;
        }


        return $this;
    } // setLoginname()

    /**
     * Set the value of [familyname] column.
     * Family Name
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setFamilyname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->familyname !== $v) {
            $this->familyname = $v;
            $this->modifiedColumns[] = UserPeer::FAMILYNAME;
        }


        return $this;
    } // setFamilyname()

    /**
     * Set the value of [firstname] column.
     * First Name
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setFirstname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->firstname !== $v) {
            $this->firstname = $v;
            $this->modifiedColumns[] = UserPeer::FIRSTNAME;
        }


        return $this;
    } // setFirstname()

    /**
     * Set the value of [password] column.
     * Password
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = UserPeer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Delete Status
     * @param boolean|integer|string $v The new value
     * @return User The current object (for fluent API support)
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
            $this->modifiedColumns[] = UserPeer::DELETED;
        }


        return $this;
    } // setDeleted()

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

            $this->uid = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->enabled = ($row[$startcol + 1] !== null) ? (boolean) $row[$startcol + 1] : null;
            $this->loginname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->familyname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->firstname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->password = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->deleted = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = UserPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating User object", $e);
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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collUserRoleRefs = null;

            $this->collUpcomprjctsregisters = null;

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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UserQuery::create()
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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                UserPeer::addInstanceToPool($this);
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

            if ($this->userRoleRefsScheduledForDeletion !== null) {
                if (!$this->userRoleRefsScheduledForDeletion->isEmpty()) {
                    UserRoleRefQuery::create()
                        ->filterByPrimaryKeys($this->userRoleRefsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->userRoleRefsScheduledForDeletion = null;
                }
            }

            if ($this->collUserRoleRefs !== null) {
                foreach ($this->collUserRoleRefs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->upcomprjctsregistersScheduledForDeletion !== null) {
                if (!$this->upcomprjctsregistersScheduledForDeletion->isEmpty()) {
                    UpcomprjctsregisterQuery::create()
                        ->filterByPrimaryKeys($this->upcomprjctsregistersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->upcomprjctsregistersScheduledForDeletion = null;
                }
            }

            if ($this->collUpcomprjctsregisters !== null) {
                foreach ($this->collUpcomprjctsregisters as $referrerFK) {
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

        $this->modifiedColumns[] = UserPeer::UID;
        if (null !== $this->uid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UserPeer::UID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UserPeer::UID)) {
            $modifiedColumns[':p' . $index++]  = '`uid`';
        }
        if ($this->isColumnModified(UserPeer::ENABLED)) {
            $modifiedColumns[':p' . $index++]  = '`enabled`';
        }
        if ($this->isColumnModified(UserPeer::LOGINNAME)) {
            $modifiedColumns[':p' . $index++]  = '`loginname`';
        }
        if ($this->isColumnModified(UserPeer::FAMILYNAME)) {
            $modifiedColumns[':p' . $index++]  = '`familyname`';
        }
        if ($this->isColumnModified(UserPeer::FIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`firstname`';
        }
        if ($this->isColumnModified(UserPeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`password`';
        }
        if ($this->isColumnModified(UserPeer::DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`deleted`';
        }

        $sql = sprintf(
            'INSERT INTO `user` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`uid`':
                        $stmt->bindValue($identifier, $this->uid, PDO::PARAM_INT);
                        break;
                    case '`enabled`':
                        $stmt->bindValue($identifier, (int) $this->enabled, PDO::PARAM_INT);
                        break;
                    case '`loginname`':
                        $stmt->bindValue($identifier, $this->loginname, PDO::PARAM_STR);
                        break;
                    case '`familyname`':
                        $stmt->bindValue($identifier, $this->familyname, PDO::PARAM_STR);
                        break;
                    case '`firstname`':
                        $stmt->bindValue($identifier, $this->firstname, PDO::PARAM_STR);
                        break;
                    case '`password`':
                        $stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case '`deleted`':
                        $stmt->bindValue($identifier, (int) $this->deleted, PDO::PARAM_INT);
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
        $this->setUid($pk);

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


            if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collUserRoleRefs !== null) {
                    foreach ($this->collUserRoleRefs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collUpcomprjctsregisters !== null) {
                    foreach ($this->collUpcomprjctsregisters as $referrerFK) {
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
        $pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUid();
                break;
            case 1:
                return $this->getEnabled();
                break;
            case 2:
                return $this->getLoginname();
                break;
            case 3:
                return $this->getFamilyname();
                break;
            case 4:
                return $this->getFirstname();
                break;
            case 5:
                return $this->getPassword();
                break;
            case 6:
                return $this->getDeleted();
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
        if (isset($alreadyDumpedObjects['User'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['User'][$this->getPrimaryKey()] = true;
        $keys = UserPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getUid(),
            $keys[1] => $this->getEnabled(),
            $keys[2] => $this->getLoginname(),
            $keys[3] => $this->getFamilyname(),
            $keys[4] => $this->getFirstname(),
            $keys[5] => $this->getPassword(),
            $keys[6] => $this->getDeleted(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collUserRoleRefs) {
                $result['UserRoleRefs'] = $this->collUserRoleRefs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUpcomprjctsregisters) {
                $result['Upcomprjctsregisters'] = $this->collUpcomprjctsregisters->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUid($value);
                break;
            case 1:
                $this->setEnabled($value);
                break;
            case 2:
                $this->setLoginname($value);
                break;
            case 3:
                $this->setFamilyname($value);
                break;
            case 4:
                $this->setFirstname($value);
                break;
            case 5:
                $this->setPassword($value);
                break;
            case 6:
                $this->setDeleted($value);
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
        $keys = UserPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setUid($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEnabled($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLoginname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFamilyname($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFirstname($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPassword($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDeleted($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UserPeer::DATABASE_NAME);

        if ($this->isColumnModified(UserPeer::UID)) $criteria->add(UserPeer::UID, $this->uid);
        if ($this->isColumnModified(UserPeer::ENABLED)) $criteria->add(UserPeer::ENABLED, $this->enabled);
        if ($this->isColumnModified(UserPeer::LOGINNAME)) $criteria->add(UserPeer::LOGINNAME, $this->loginname);
        if ($this->isColumnModified(UserPeer::FAMILYNAME)) $criteria->add(UserPeer::FAMILYNAME, $this->familyname);
        if ($this->isColumnModified(UserPeer::FIRSTNAME)) $criteria->add(UserPeer::FIRSTNAME, $this->firstname);
        if ($this->isColumnModified(UserPeer::PASSWORD)) $criteria->add(UserPeer::PASSWORD, $this->password);
        if ($this->isColumnModified(UserPeer::DELETED)) $criteria->add(UserPeer::DELETED, $this->deleted);

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
        $criteria = new Criteria(UserPeer::DATABASE_NAME);
        $criteria->add(UserPeer::UID, $this->uid);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getUid();
    }

    /**
     * Generic method to set the primary key (uid column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setUid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getUid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of User (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEnabled($this->getEnabled());
        $copyObj->setLoginname($this->getLoginname());
        $copyObj->setFamilyname($this->getFamilyname());
        $copyObj->setFirstname($this->getFirstname());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setDeleted($this->getDeleted());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getUserRoleRefs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUserRoleRef($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUpcomprjctsregisters() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUpcomprjctsregister($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setUid(NULL); // this is a auto-increment column, so set to default value
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
     * @return User Clone of current object.
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
     * @return UserPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UserPeer();
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
        if ('UserRoleRef' == $relationName) {
            $this->initUserRoleRefs();
        }
        if ('Upcomprjctsregister' == $relationName) {
            $this->initUpcomprjctsregisters();
        }
    }

    /**
     * Clears out the collUserRoleRefs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
     * @see        addUserRoleRefs()
     */
    public function clearUserRoleRefs()
    {
        $this->collUserRoleRefs = null; // important to set this to null since that means it is uninitialized
        $this->collUserRoleRefsPartial = null;

        return $this;
    }

    /**
     * reset is the collUserRoleRefs collection loaded partially
     *
     * @return void
     */
    public function resetPartialUserRoleRefs($v = true)
    {
        $this->collUserRoleRefsPartial = $v;
    }

    /**
     * Initializes the collUserRoleRefs collection.
     *
     * By default this just sets the collUserRoleRefs collection to an empty array (like clearcollUserRoleRefs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUserRoleRefs($overrideExisting = true)
    {
        if (null !== $this->collUserRoleRefs && !$overrideExisting) {
            return;
        }
        $this->collUserRoleRefs = new PropelObjectCollection();
        $this->collUserRoleRefs->setModel('UserRoleRef');
    }

    /**
     * Gets an array of UserRoleRef objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this User is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|UserRoleRef[] List of UserRoleRef objects
     * @throws PropelException
     */
    public function getUserRoleRefs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUserRoleRefsPartial && !$this->isNew();
        if (null === $this->collUserRoleRefs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUserRoleRefs) {
                // return empty collection
                $this->initUserRoleRefs();
            } else {
                $collUserRoleRefs = UserRoleRefQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUserRoleRefsPartial && count($collUserRoleRefs)) {
                      $this->initUserRoleRefs(false);

                      foreach ($collUserRoleRefs as $obj) {
                        if (false == $this->collUserRoleRefs->contains($obj)) {
                          $this->collUserRoleRefs->append($obj);
                        }
                      }

                      $this->collUserRoleRefsPartial = true;
                    }

                    $collUserRoleRefs->getInternalIterator()->rewind();

                    return $collUserRoleRefs;
                }

                if ($partial && $this->collUserRoleRefs) {
                    foreach ($this->collUserRoleRefs as $obj) {
                        if ($obj->isNew()) {
                            $collUserRoleRefs[] = $obj;
                        }
                    }
                }

                $this->collUserRoleRefs = $collUserRoleRefs;
                $this->collUserRoleRefsPartial = false;
            }
        }

        return $this->collUserRoleRefs;
    }

    /**
     * Sets a collection of UserRoleRef objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $userRoleRefs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return User The current object (for fluent API support)
     */
    public function setUserRoleRefs(PropelCollection $userRoleRefs, PropelPDO $con = null)
    {
        $userRoleRefsToDelete = $this->getUserRoleRefs(new Criteria(), $con)->diff($userRoleRefs);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->userRoleRefsScheduledForDeletion = clone $userRoleRefsToDelete;

        foreach ($userRoleRefsToDelete as $userRoleRefRemoved) {
            $userRoleRefRemoved->setUser(null);
        }

        $this->collUserRoleRefs = null;
        foreach ($userRoleRefs as $userRoleRef) {
            $this->addUserRoleRef($userRoleRef);
        }

        $this->collUserRoleRefs = $userRoleRefs;
        $this->collUserRoleRefsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related UserRoleRef objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related UserRoleRef objects.
     * @throws PropelException
     */
    public function countUserRoleRefs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUserRoleRefsPartial && !$this->isNew();
        if (null === $this->collUserRoleRefs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUserRoleRefs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUserRoleRefs());
            }
            $query = UserRoleRefQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collUserRoleRefs);
    }

    /**
     * Method called to associate a UserRoleRef object to this object
     * through the UserRoleRef foreign key attribute.
     *
     * @param    UserRoleRef $l UserRoleRef
     * @return User The current object (for fluent API support)
     */
    public function addUserRoleRef(UserRoleRef $l)
    {
        if ($this->collUserRoleRefs === null) {
            $this->initUserRoleRefs();
            $this->collUserRoleRefsPartial = true;
        }

        if (!in_array($l, $this->collUserRoleRefs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUserRoleRef($l);

            if ($this->userRoleRefsScheduledForDeletion and $this->userRoleRefsScheduledForDeletion->contains($l)) {
                $this->userRoleRefsScheduledForDeletion->remove($this->userRoleRefsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	UserRoleRef $userRoleRef The userRoleRef object to add.
     */
    protected function doAddUserRoleRef($userRoleRef)
    {
        $this->collUserRoleRefs[]= $userRoleRef;
        $userRoleRef->setUser($this);
    }

    /**
     * @param	UserRoleRef $userRoleRef The userRoleRef object to remove.
     * @return User The current object (for fluent API support)
     */
    public function removeUserRoleRef($userRoleRef)
    {
        if ($this->getUserRoleRefs()->contains($userRoleRef)) {
            $this->collUserRoleRefs->remove($this->collUserRoleRefs->search($userRoleRef));
            if (null === $this->userRoleRefsScheduledForDeletion) {
                $this->userRoleRefsScheduledForDeletion = clone $this->collUserRoleRefs;
                $this->userRoleRefsScheduledForDeletion->clear();
            }
            $this->userRoleRefsScheduledForDeletion[]= clone $userRoleRef;
            $userRoleRef->setUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related UserRoleRefs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|UserRoleRef[] List of UserRoleRef objects
     */
    public function getUserRoleRefsJoinRole($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UserRoleRefQuery::create(null, $criteria);
        $query->joinWith('Role', $join_behavior);

        return $this->getUserRoleRefs($query, $con);
    }

    /**
     * Clears out the collUpcomprjctsregisters collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
     * @see        addUpcomprjctsregisters()
     */
    public function clearUpcomprjctsregisters()
    {
        $this->collUpcomprjctsregisters = null; // important to set this to null since that means it is uninitialized
        $this->collUpcomprjctsregistersPartial = null;

        return $this;
    }

    /**
     * reset is the collUpcomprjctsregisters collection loaded partially
     *
     * @return void
     */
    public function resetPartialUpcomprjctsregisters($v = true)
    {
        $this->collUpcomprjctsregistersPartial = $v;
    }

    /**
     * Initializes the collUpcomprjctsregisters collection.
     *
     * By default this just sets the collUpcomprjctsregisters collection to an empty array (like clearcollUpcomprjctsregisters());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUpcomprjctsregisters($overrideExisting = true)
    {
        if (null !== $this->collUpcomprjctsregisters && !$overrideExisting) {
            return;
        }
        $this->collUpcomprjctsregisters = new PropelObjectCollection();
        $this->collUpcomprjctsregisters->setModel('Upcomprjctsregister');
    }

    /**
     * Gets an array of Upcomprjctsregister objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this User is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Upcomprjctsregister[] List of Upcomprjctsregister objects
     * @throws PropelException
     */
    public function getUpcomprjctsregisters($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUpcomprjctsregistersPartial && !$this->isNew();
        if (null === $this->collUpcomprjctsregisters || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUpcomprjctsregisters) {
                // return empty collection
                $this->initUpcomprjctsregisters();
            } else {
                $collUpcomprjctsregisters = UpcomprjctsregisterQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUpcomprjctsregistersPartial && count($collUpcomprjctsregisters)) {
                      $this->initUpcomprjctsregisters(false);

                      foreach ($collUpcomprjctsregisters as $obj) {
                        if (false == $this->collUpcomprjctsregisters->contains($obj)) {
                          $this->collUpcomprjctsregisters->append($obj);
                        }
                      }

                      $this->collUpcomprjctsregistersPartial = true;
                    }

                    $collUpcomprjctsregisters->getInternalIterator()->rewind();

                    return $collUpcomprjctsregisters;
                }

                if ($partial && $this->collUpcomprjctsregisters) {
                    foreach ($this->collUpcomprjctsregisters as $obj) {
                        if ($obj->isNew()) {
                            $collUpcomprjctsregisters[] = $obj;
                        }
                    }
                }

                $this->collUpcomprjctsregisters = $collUpcomprjctsregisters;
                $this->collUpcomprjctsregistersPartial = false;
            }
        }

        return $this->collUpcomprjctsregisters;
    }

    /**
     * Sets a collection of Upcomprjctsregister objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $upcomprjctsregisters A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return User The current object (for fluent API support)
     */
    public function setUpcomprjctsregisters(PropelCollection $upcomprjctsregisters, PropelPDO $con = null)
    {
        $upcomprjctsregistersToDelete = $this->getUpcomprjctsregisters(new Criteria(), $con)->diff($upcomprjctsregisters);


        $this->upcomprjctsregistersScheduledForDeletion = $upcomprjctsregistersToDelete;

        foreach ($upcomprjctsregistersToDelete as $upcomprjctsregisterRemoved) {
            $upcomprjctsregisterRemoved->setUser(null);
        }

        $this->collUpcomprjctsregisters = null;
        foreach ($upcomprjctsregisters as $upcomprjctsregister) {
            $this->addUpcomprjctsregister($upcomprjctsregister);
        }

        $this->collUpcomprjctsregisters = $upcomprjctsregisters;
        $this->collUpcomprjctsregistersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Upcomprjctsregister objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Upcomprjctsregister objects.
     * @throws PropelException
     */
    public function countUpcomprjctsregisters(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUpcomprjctsregistersPartial && !$this->isNew();
        if (null === $this->collUpcomprjctsregisters || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUpcomprjctsregisters) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUpcomprjctsregisters());
            }
            $query = UpcomprjctsregisterQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collUpcomprjctsregisters);
    }

    /**
     * Method called to associate a Upcomprjctsregister object to this object
     * through the Upcomprjctsregister foreign key attribute.
     *
     * @param    Upcomprjctsregister $l Upcomprjctsregister
     * @return User The current object (for fluent API support)
     */
    public function addUpcomprjctsregister(Upcomprjctsregister $l)
    {
        if ($this->collUpcomprjctsregisters === null) {
            $this->initUpcomprjctsregisters();
            $this->collUpcomprjctsregistersPartial = true;
        }

        if (!in_array($l, $this->collUpcomprjctsregisters->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUpcomprjctsregister($l);

            if ($this->upcomprjctsregistersScheduledForDeletion and $this->upcomprjctsregistersScheduledForDeletion->contains($l)) {
                $this->upcomprjctsregistersScheduledForDeletion->remove($this->upcomprjctsregistersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Upcomprjctsregister $upcomprjctsregister The upcomprjctsregister object to add.
     */
    protected function doAddUpcomprjctsregister($upcomprjctsregister)
    {
        $this->collUpcomprjctsregisters[]= $upcomprjctsregister;
        $upcomprjctsregister->setUser($this);
    }

    /**
     * @param	Upcomprjctsregister $upcomprjctsregister The upcomprjctsregister object to remove.
     * @return User The current object (for fluent API support)
     */
    public function removeUpcomprjctsregister($upcomprjctsregister)
    {
        if ($this->getUpcomprjctsregisters()->contains($upcomprjctsregister)) {
            $this->collUpcomprjctsregisters->remove($this->collUpcomprjctsregisters->search($upcomprjctsregister));
            if (null === $this->upcomprjctsregistersScheduledForDeletion) {
                $this->upcomprjctsregistersScheduledForDeletion = clone $this->collUpcomprjctsregisters;
                $this->upcomprjctsregistersScheduledForDeletion->clear();
            }
            $this->upcomprjctsregistersScheduledForDeletion[]= clone $upcomprjctsregister;
            $upcomprjctsregister->setUser(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->uid = null;
        $this->enabled = null;
        $this->loginname = null;
        $this->familyname = null;
        $this->firstname = null;
        $this->password = null;
        $this->deleted = null;
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
            if ($this->collUserRoleRefs) {
                foreach ($this->collUserRoleRefs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUpcomprjctsregisters) {
                foreach ($this->collUpcomprjctsregisters as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collUserRoleRefs instanceof PropelCollection) {
            $this->collUserRoleRefs->clearIterator();
        }
        $this->collUserRoleRefs = null;
        if ($this->collUpcomprjctsregisters instanceof PropelCollection) {
            $this->collUpcomprjctsregisters->clearIterator();
        }
        $this->collUpcomprjctsregisters = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UserPeer::DEFAULT_STRING_FORMAT);
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
