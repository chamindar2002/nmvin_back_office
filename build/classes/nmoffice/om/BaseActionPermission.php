<?php


/**
 * Base class that represents a row from the 'action_permission' table.
 *
 * Action Permission
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseActionPermission extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ActionPermissionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ActionPermissionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

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
     * @var        PropelObjectCollection|RoleActionPermissionRef[] Collection to store aggregation of RoleActionPermissionRef objects.
     */
    protected $collRoleActionPermissionRefs;
    protected $collRoleActionPermissionRefsPartial;

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
    protected $roleActionPermissionRefsScheduledForDeletion = null;

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
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [module] column value.
     * Module
     * @return string
     */
    public function getModule()
    {

        return $this->module;
    }

    /**
     * Get the [action] column value.
     * Action Name
     * @return string
     */
    public function getAction()
    {

        return $this->action;
    }

    /**
     * Get the [description] column value.
     * Description
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [systemid] column value.
     * System ID Number
     * @return int
     */
    public function getSystemid()
    {

        return $this->systemid;
    }

    /**
     * Set the value of [id] column.
     * Action ID
     * @param  int $v new value
     * @return ActionPermission The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return ActionPermission The current object (for fluent API support)
     */
    public function setModule($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return ActionPermission The current object (for fluent API support)
     */
    public function setAction($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  string $v new value
     * @return ActionPermission The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
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
     * @param  int $v new value
     * @return ActionPermission The current object (for fluent API support)
     */
    public function setSystemid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->systemid !== $v) {
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
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->systemid !== 0) {
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
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = ActionPermissionPeer::NUM_HYDRATE_COLUMNS.

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
            $con = Propel::getConnection(ActionPermissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ActionPermissionQuery::create()
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
                ActionPermissionPeer::addInstanceToPool($this);
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

            if ($this->roleActionPermissionRefsScheduledForDeletion !== null) {
                if (!$this->roleActionPermissionRefsScheduledForDeletion->isEmpty()) {
                    RoleActionPermissionRefQuery::create()
                        ->filterByPrimaryKeys($this->roleActionPermissionRefsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->roleActionPermissionRefsScheduledForDeletion = null;
                }
            }

            if ($this->collRoleActionPermissionRefs !== null) {
                foreach ($this->collRoleActionPermissionRefs as $referrerFK) {
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

        $this->modifiedColumns[] = ActionPermissionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ActionPermissionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ActionPermissionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(ActionPermissionPeer::MODULE)) {
            $modifiedColumns[':p' . $index++]  = '`module`';
        }
        if ($this->isColumnModified(ActionPermissionPeer::ACTION)) {
            $modifiedColumns[':p' . $index++]  = '`action`';
        }
        if ($this->isColumnModified(ActionPermissionPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(ActionPermissionPeer::SYSTEMID)) {
            $modifiedColumns[':p' . $index++]  = '`systemid`';
        }

        $sql = sprintf(
            'INSERT INTO `action_permission` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`module`':
                        $stmt->bindValue($identifier, $this->module, PDO::PARAM_STR);
                        break;
                    case '`action`':
                        $stmt->bindValue($identifier, $this->action, PDO::PARAM_STR);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`systemid`':
                        $stmt->bindValue($identifier, $this->systemid, PDO::PARAM_INT);
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
        $this->setId($pk);

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
        $pos = ActionPermissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getId();
                break;
            case 1:
                return $this->getModule();
                break;
            case 2:
                return $this->getAction();
                break;
            case 3:
                return $this->getDescription();
                break;
            case 4:
                return $this->getSystemid();
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
        if (isset($alreadyDumpedObjects['ActionPermission'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ActionPermission'][$this->getPrimaryKey()] = true;
        $keys = ActionPermissionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getModule(),
            $keys[2] => $this->getAction(),
            $keys[3] => $this->getDescription(),
            $keys[4] => $this->getSystemid(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collRoleActionPermissionRefs) {
                $result['RoleActionPermissionRefs'] = $this->collRoleActionPermissionRefs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ActionPermissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setId($value);
                break;
            case 1:
                $this->setModule($value);
                break;
            case 2:
                $this->setAction($value);
                break;
            case 3:
                $this->setDescription($value);
                break;
            case 4:
                $this->setSystemid($value);
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
        $keys = ActionPermissionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setModule($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAction($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSystemid($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
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
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ActionPermissionPeer::DATABASE_NAME);
        $criteria->add(ActionPermissionPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ActionPermission (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setModule($this->getModule());
        $copyObj->setAction($this->getAction());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setSystemid($this->getSystemid());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getRoleActionPermissionRefs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRoleActionPermissionRef($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ActionPermission Clone of current object.
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
     * @return ActionPermissionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ActionPermissionPeer();
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
        if ('RoleActionPermissionRef' == $relationName) {
            $this->initRoleActionPermissionRefs();
        }
    }

    /**
     * Clears out the collRoleActionPermissionRefs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ActionPermission The current object (for fluent API support)
     * @see        addRoleActionPermissionRefs()
     */
    public function clearRoleActionPermissionRefs()
    {
        $this->collRoleActionPermissionRefs = null; // important to set this to null since that means it is uninitialized
        $this->collRoleActionPermissionRefsPartial = null;

        return $this;
    }

    /**
     * reset is the collRoleActionPermissionRefs collection loaded partially
     *
     * @return void
     */
    public function resetPartialRoleActionPermissionRefs($v = true)
    {
        $this->collRoleActionPermissionRefsPartial = $v;
    }

    /**
     * Initializes the collRoleActionPermissionRefs collection.
     *
     * By default this just sets the collRoleActionPermissionRefs collection to an empty array (like clearcollRoleActionPermissionRefs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRoleActionPermissionRefs($overrideExisting = true)
    {
        if (null !== $this->collRoleActionPermissionRefs && !$overrideExisting) {
            return;
        }
        $this->collRoleActionPermissionRefs = new PropelObjectCollection();
        $this->collRoleActionPermissionRefs->setModel('RoleActionPermissionRef');
    }

    /**
     * Gets an array of RoleActionPermissionRef objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ActionPermission is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|RoleActionPermissionRef[] List of RoleActionPermissionRef objects
     * @throws PropelException
     */
    public function getRoleActionPermissionRefs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRoleActionPermissionRefsPartial && !$this->isNew();
        if (null === $this->collRoleActionPermissionRefs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRoleActionPermissionRefs) {
                // return empty collection
                $this->initRoleActionPermissionRefs();
            } else {
                $collRoleActionPermissionRefs = RoleActionPermissionRefQuery::create(null, $criteria)
                    ->filterByActionPermission($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRoleActionPermissionRefsPartial && count($collRoleActionPermissionRefs)) {
                      $this->initRoleActionPermissionRefs(false);

                      foreach ($collRoleActionPermissionRefs as $obj) {
                        if (false == $this->collRoleActionPermissionRefs->contains($obj)) {
                          $this->collRoleActionPermissionRefs->append($obj);
                        }
                      }

                      $this->collRoleActionPermissionRefsPartial = true;
                    }

                    $collRoleActionPermissionRefs->getInternalIterator()->rewind();

                    return $collRoleActionPermissionRefs;
                }

                if ($partial && $this->collRoleActionPermissionRefs) {
                    foreach ($this->collRoleActionPermissionRefs as $obj) {
                        if ($obj->isNew()) {
                            $collRoleActionPermissionRefs[] = $obj;
                        }
                    }
                }

                $this->collRoleActionPermissionRefs = $collRoleActionPermissionRefs;
                $this->collRoleActionPermissionRefsPartial = false;
            }
        }

        return $this->collRoleActionPermissionRefs;
    }

    /**
     * Sets a collection of RoleActionPermissionRef objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $roleActionPermissionRefs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ActionPermission The current object (for fluent API support)
     */
    public function setRoleActionPermissionRefs(PropelCollection $roleActionPermissionRefs, PropelPDO $con = null)
    {
        $roleActionPermissionRefsToDelete = $this->getRoleActionPermissionRefs(new Criteria(), $con)->diff($roleActionPermissionRefs);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->roleActionPermissionRefsScheduledForDeletion = clone $roleActionPermissionRefsToDelete;

        foreach ($roleActionPermissionRefsToDelete as $roleActionPermissionRefRemoved) {
            $roleActionPermissionRefRemoved->setActionPermission(null);
        }

        $this->collRoleActionPermissionRefs = null;
        foreach ($roleActionPermissionRefs as $roleActionPermissionRef) {
            $this->addRoleActionPermissionRef($roleActionPermissionRef);
        }

        $this->collRoleActionPermissionRefs = $roleActionPermissionRefs;
        $this->collRoleActionPermissionRefsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related RoleActionPermissionRef objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related RoleActionPermissionRef objects.
     * @throws PropelException
     */
    public function countRoleActionPermissionRefs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRoleActionPermissionRefsPartial && !$this->isNew();
        if (null === $this->collRoleActionPermissionRefs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRoleActionPermissionRefs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRoleActionPermissionRefs());
            }
            $query = RoleActionPermissionRefQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByActionPermission($this)
                ->count($con);
        }

        return count($this->collRoleActionPermissionRefs);
    }

    /**
     * Method called to associate a RoleActionPermissionRef object to this object
     * through the RoleActionPermissionRef foreign key attribute.
     *
     * @param    RoleActionPermissionRef $l RoleActionPermissionRef
     * @return ActionPermission The current object (for fluent API support)
     */
    public function addRoleActionPermissionRef(RoleActionPermissionRef $l)
    {
        if ($this->collRoleActionPermissionRefs === null) {
            $this->initRoleActionPermissionRefs();
            $this->collRoleActionPermissionRefsPartial = true;
        }

        if (!in_array($l, $this->collRoleActionPermissionRefs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRoleActionPermissionRef($l);

            if ($this->roleActionPermissionRefsScheduledForDeletion and $this->roleActionPermissionRefsScheduledForDeletion->contains($l)) {
                $this->roleActionPermissionRefsScheduledForDeletion->remove($this->roleActionPermissionRefsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RoleActionPermissionRef $roleActionPermissionRef The roleActionPermissionRef object to add.
     */
    protected function doAddRoleActionPermissionRef($roleActionPermissionRef)
    {
        $this->collRoleActionPermissionRefs[]= $roleActionPermissionRef;
        $roleActionPermissionRef->setActionPermission($this);
    }

    /**
     * @param	RoleActionPermissionRef $roleActionPermissionRef The roleActionPermissionRef object to remove.
     * @return ActionPermission The current object (for fluent API support)
     */
    public function removeRoleActionPermissionRef($roleActionPermissionRef)
    {
        if ($this->getRoleActionPermissionRefs()->contains($roleActionPermissionRef)) {
            $this->collRoleActionPermissionRefs->remove($this->collRoleActionPermissionRefs->search($roleActionPermissionRef));
            if (null === $this->roleActionPermissionRefsScheduledForDeletion) {
                $this->roleActionPermissionRefsScheduledForDeletion = clone $this->collRoleActionPermissionRefs;
                $this->roleActionPermissionRefsScheduledForDeletion->clear();
            }
            $this->roleActionPermissionRefsScheduledForDeletion[]= clone $roleActionPermissionRef;
            $roleActionPermissionRef->setActionPermission(null);
        }

        return $this;
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
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RoleActionPermissionRef[] List of RoleActionPermissionRef objects
     */
    public function getRoleActionPermissionRefsJoinRole($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RoleActionPermissionRefQuery::create(null, $criteria);
        $query->joinWith('Role', $join_behavior);

        return $this->getRoleActionPermissionRefs($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->module = null;
        $this->action = null;
        $this->description = null;
        $this->systemid = null;
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
            if ($this->collRoleActionPermissionRefs) {
                foreach ($this->collRoleActionPermissionRefs as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collRoleActionPermissionRefs instanceof PropelCollection) {
            $this->collRoleActionPermissionRefs->clearIterator();
        }
        $this->collRoleActionPermissionRefs = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ActionPermissionPeer::DEFAULT_STRING_FORMAT);
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
