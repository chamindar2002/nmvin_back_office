<?php


/**
 * Base class that represents a row from the 'role' table.
 *
 * User Role
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseRole extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RolePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RolePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the rid field.
     * @var        int
     */
    protected $rid;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * @var        PropelObjectCollection|UserRoleRef[] Collection to store aggregation of UserRoleRef objects.
     */
    protected $collUserRoleRefs;
    protected $collUserRoleRefsPartial;

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
    protected $userRoleRefsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $roleActionPermissionRefsScheduledForDeletion = null;

    /**
     * Get the [rid] column value.
     * Role ID
     * @return int
     */
    public function getRid()
    {

        return $this->rid;
    }

    /**
     * Get the [name] column value.
     * Role Name
     * @return string
     */
    public function getName()
    {

        return $this->name;
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
     * Set the value of [rid] column.
     * Role ID
     * @param  int $v new value
     * @return Role The current object (for fluent API support)
     */
    public function setRid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rid !== $v) {
            $this->rid = $v;
            $this->modifiedColumns[] = RolePeer::RID;
        }


        return $this;
    } // setRid()

    /**
     * Set the value of [name] column.
     * Role Name
     * @param  string $v new value
     * @return Role The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = RolePeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [description] column.
     * Description
     * @param  string $v new value
     * @return Role The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = RolePeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

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

            $this->rid = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = RolePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Role object", $e);
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
            $con = Propel::getConnection(RolePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RolePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collUserRoleRefs = null;

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
            $con = Propel::getConnection(RolePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RoleQuery::create()
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
            $con = Propel::getConnection(RolePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RolePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = RolePeer::RID;
        if (null !== $this->rid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RolePeer::RID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RolePeer::RID)) {
            $modifiedColumns[':p' . $index++]  = '`rid`';
        }
        if ($this->isColumnModified(RolePeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(RolePeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }

        $sql = sprintf(
            'INSERT INTO `role` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`rid`':
                        $stmt->bindValue($identifier, $this->rid, PDO::PARAM_INT);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
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
        $this->setRid($pk);

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


            if (($retval = RolePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collUserRoleRefs !== null) {
                    foreach ($this->collUserRoleRefs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = RolePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRid();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getDescription();
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
        if (isset($alreadyDumpedObjects['Role'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Role'][$this->getPrimaryKey()] = true;
        $keys = RolePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRid(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getDescription(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collUserRoleRefs) {
                $result['UserRoleRefs'] = $this->collUserRoleRefs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
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
        $pos = RolePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRid($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setDescription($value);
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
        $keys = RolePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRid($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RolePeer::DATABASE_NAME);

        if ($this->isColumnModified(RolePeer::RID)) $criteria->add(RolePeer::RID, $this->rid);
        if ($this->isColumnModified(RolePeer::NAME)) $criteria->add(RolePeer::NAME, $this->name);
        if ($this->isColumnModified(RolePeer::DESCRIPTION)) $criteria->add(RolePeer::DESCRIPTION, $this->description);

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
        $criteria = new Criteria(RolePeer::DATABASE_NAME);
        $criteria->add(RolePeer::RID, $this->rid);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRid();
    }

    /**
     * Generic method to set the primary key (rid column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Role (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setDescription($this->getDescription());

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
            $copyObj->setRid(NULL); // this is a auto-increment column, so set to default value
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
     * @return Role Clone of current object.
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
     * @return RolePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RolePeer();
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
        if ('RoleActionPermissionRef' == $relationName) {
            $this->initRoleActionPermissionRefs();
        }
    }

    /**
     * Clears out the collUserRoleRefs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Role The current object (for fluent API support)
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
     * If this Role is new, it will return
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
                    ->filterByRole($this)
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
     * @return Role The current object (for fluent API support)
     */
    public function setUserRoleRefs(PropelCollection $userRoleRefs, PropelPDO $con = null)
    {
        $userRoleRefsToDelete = $this->getUserRoleRefs(new Criteria(), $con)->diff($userRoleRefs);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->userRoleRefsScheduledForDeletion = clone $userRoleRefsToDelete;

        foreach ($userRoleRefsToDelete as $userRoleRefRemoved) {
            $userRoleRefRemoved->setRole(null);
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
                ->filterByRole($this)
                ->count($con);
        }

        return count($this->collUserRoleRefs);
    }

    /**
     * Method called to associate a UserRoleRef object to this object
     * through the UserRoleRef foreign key attribute.
     *
     * @param    UserRoleRef $l UserRoleRef
     * @return Role The current object (for fluent API support)
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
        $userRoleRef->setRole($this);
    }

    /**
     * @param	UserRoleRef $userRoleRef The userRoleRef object to remove.
     * @return Role The current object (for fluent API support)
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
            $userRoleRef->setRole(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Role is new, it will return
     * an empty collection; or if this Role has previously
     * been saved, it will retrieve related UserRoleRefs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Role.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|UserRoleRef[] List of UserRoleRef objects
     */
    public function getUserRoleRefsJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UserRoleRefQuery::create(null, $criteria);
        $query->joinWith('User', $join_behavior);

        return $this->getUserRoleRefs($query, $con);
    }

    /**
     * Clears out the collRoleActionPermissionRefs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Role The current object (for fluent API support)
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
     * If this Role is new, it will return
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
                    ->filterByRole($this)
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
     * @return Role The current object (for fluent API support)
     */
    public function setRoleActionPermissionRefs(PropelCollection $roleActionPermissionRefs, PropelPDO $con = null)
    {
        $roleActionPermissionRefsToDelete = $this->getRoleActionPermissionRefs(new Criteria(), $con)->diff($roleActionPermissionRefs);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->roleActionPermissionRefsScheduledForDeletion = clone $roleActionPermissionRefsToDelete;

        foreach ($roleActionPermissionRefsToDelete as $roleActionPermissionRefRemoved) {
            $roleActionPermissionRefRemoved->setRole(null);
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
                ->filterByRole($this)
                ->count($con);
        }

        return count($this->collRoleActionPermissionRefs);
    }

    /**
     * Method called to associate a RoleActionPermissionRef object to this object
     * through the RoleActionPermissionRef foreign key attribute.
     *
     * @param    RoleActionPermissionRef $l RoleActionPermissionRef
     * @return Role The current object (for fluent API support)
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
        $roleActionPermissionRef->setRole($this);
    }

    /**
     * @param	RoleActionPermissionRef $roleActionPermissionRef The roleActionPermissionRef object to remove.
     * @return Role The current object (for fluent API support)
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
            $roleActionPermissionRef->setRole(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Role is new, it will return
     * an empty collection; or if this Role has previously
     * been saved, it will retrieve related RoleActionPermissionRefs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Role.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RoleActionPermissionRef[] List of RoleActionPermissionRef objects
     */
    public function getRoleActionPermissionRefsJoinActionPermission($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RoleActionPermissionRefQuery::create(null, $criteria);
        $query->joinWith('ActionPermission', $join_behavior);

        return $this->getRoleActionPermissionRefs($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->rid = null;
        $this->name = null;
        $this->description = null;
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
            if ($this->collUserRoleRefs) {
                foreach ($this->collUserRoleRefs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRoleActionPermissionRefs) {
                foreach ($this->collRoleActionPermissionRefs as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collUserRoleRefs instanceof PropelCollection) {
            $this->collUserRoleRefs->clearIterator();
        }
        $this->collUserRoleRefs = null;
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
        return (string) $this->exportTo(RolePeer::DEFAULT_STRING_FORMAT);
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