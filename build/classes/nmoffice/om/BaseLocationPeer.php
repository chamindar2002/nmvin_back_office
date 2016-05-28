<?php


/**
 * Base static class for performing query and update operations on the 'location' table.
 *
 * project location
 *
 * @package propel.generator.nmoffice.om
 */
abstract class BaseLocationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'nmwndb';

    /** the table name for this class */
    const TABLE_NAME = 'location';

    /** the related Propel class for this table */
    const OM_CLASS = 'Location';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LocationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the locationcode field */
    const LOCATIONCODE = 'location.locationcode';

    /** the column name for the locationname field */
    const LOCATIONNAME = 'location.locationname';

    /** the column name for the locationcity field */
    const LOCATIONCITY = 'location.locationcity';

    /** the column name for the deleted field */
    const DELETED = 'location.deleted';

    /** the column name for the addedby field */
    const ADDEDBY = 'location.addedby';

    /** the column name for the addeddate field */
    const ADDEDDATE = 'location.addeddate';

    /** the column name for the addedtime field */
    const ADDEDTIME = 'location.addedtime';

    /** the column name for the lastmodifiedby field */
    const LASTMODIFIEDBY = 'location.lastmodifiedby';

    /** the column name for the lastmodifieddate field */
    const LASTMODIFIEDDATE = 'location.lastmodifieddate';

    /** the column name for the lastmodifiedtime field */
    const LASTMODIFIEDTIME = 'location.lastmodifiedtime';

    /** the column name for the deletedby field */
    const DELETEDBY = 'location.deletedby';

    /** the column name for the deleteddate field */
    const DELETEDDATE = 'location.deleteddate';

    /** the column name for the deletedtime field */
    const DELETEDTIME = 'location.deletedtime';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Location objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Location[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LocationPeer::$fieldNames[LocationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Locationcode', 'Locationname', 'Locationcity', 'Deleted', 'Addedby', 'Addeddate', 'Addedtime', 'Lastmodifiedby', 'Lastmodifieddate', 'Lastmodifiedtime', 'Deletedby', 'Deleteddate', 'Deletedtime', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('locationcode', 'locationname', 'locationcity', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
        BasePeer::TYPE_COLNAME => array (LocationPeer::LOCATIONCODE, LocationPeer::LOCATIONNAME, LocationPeer::LOCATIONCITY, LocationPeer::DELETED, LocationPeer::ADDEDBY, LocationPeer::ADDEDDATE, LocationPeer::ADDEDTIME, LocationPeer::LASTMODIFIEDBY, LocationPeer::LASTMODIFIEDDATE, LocationPeer::LASTMODIFIEDTIME, LocationPeer::DELETEDBY, LocationPeer::DELETEDDATE, LocationPeer::DELETEDTIME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LOCATIONCODE', 'LOCATIONNAME', 'LOCATIONCITY', 'DELETED', 'ADDEDBY', 'ADDEDDATE', 'ADDEDTIME', 'LASTMODIFIEDBY', 'LASTMODIFIEDDATE', 'LASTMODIFIEDTIME', 'DELETEDBY', 'DELETEDDATE', 'DELETEDTIME', ),
        BasePeer::TYPE_FIELDNAME => array ('locationcode', 'locationname', 'locationcity', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LocationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Locationcode' => 0, 'Locationname' => 1, 'Locationcity' => 2, 'Deleted' => 3, 'Addedby' => 4, 'Addeddate' => 5, 'Addedtime' => 6, 'Lastmodifiedby' => 7, 'Lastmodifieddate' => 8, 'Lastmodifiedtime' => 9, 'Deletedby' => 10, 'Deleteddate' => 11, 'Deletedtime' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('locationcode' => 0, 'locationname' => 1, 'locationcity' => 2, 'deleted' => 3, 'addedby' => 4, 'addeddate' => 5, 'addedtime' => 6, 'lastmodifiedby' => 7, 'lastmodifieddate' => 8, 'lastmodifiedtime' => 9, 'deletedby' => 10, 'deleteddate' => 11, 'deletedtime' => 12, ),
        BasePeer::TYPE_COLNAME => array (LocationPeer::LOCATIONCODE => 0, LocationPeer::LOCATIONNAME => 1, LocationPeer::LOCATIONCITY => 2, LocationPeer::DELETED => 3, LocationPeer::ADDEDBY => 4, LocationPeer::ADDEDDATE => 5, LocationPeer::ADDEDTIME => 6, LocationPeer::LASTMODIFIEDBY => 7, LocationPeer::LASTMODIFIEDDATE => 8, LocationPeer::LASTMODIFIEDTIME => 9, LocationPeer::DELETEDBY => 10, LocationPeer::DELETEDDATE => 11, LocationPeer::DELETEDTIME => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LOCATIONCODE' => 0, 'LOCATIONNAME' => 1, 'LOCATIONCITY' => 2, 'DELETED' => 3, 'ADDEDBY' => 4, 'ADDEDDATE' => 5, 'ADDEDTIME' => 6, 'LASTMODIFIEDBY' => 7, 'LASTMODIFIEDDATE' => 8, 'LASTMODIFIEDTIME' => 9, 'DELETEDBY' => 10, 'DELETEDDATE' => 11, 'DELETEDTIME' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('locationcode' => 0, 'locationname' => 1, 'locationcity' => 2, 'deleted' => 3, 'addedby' => 4, 'addeddate' => 5, 'addedtime' => 6, 'lastmodifiedby' => 7, 'lastmodifieddate' => 8, 'lastmodifiedtime' => 9, 'deletedby' => 10, 'deleteddate' => 11, 'deletedtime' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = LocationPeer::getFieldNames($toType);
        $key = isset(LocationPeer::$fieldKeys[$fromType][$name]) ? LocationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LocationPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, LocationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LocationPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. LocationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LocationPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(LocationPeer::LOCATIONCODE);
            $criteria->addSelectColumn(LocationPeer::LOCATIONNAME);
            $criteria->addSelectColumn(LocationPeer::LOCATIONCITY);
            $criteria->addSelectColumn(LocationPeer::DELETED);
            $criteria->addSelectColumn(LocationPeer::ADDEDBY);
            $criteria->addSelectColumn(LocationPeer::ADDEDDATE);
            $criteria->addSelectColumn(LocationPeer::ADDEDTIME);
            $criteria->addSelectColumn(LocationPeer::LASTMODIFIEDBY);
            $criteria->addSelectColumn(LocationPeer::LASTMODIFIEDDATE);
            $criteria->addSelectColumn(LocationPeer::LASTMODIFIEDTIME);
            $criteria->addSelectColumn(LocationPeer::DELETEDBY);
            $criteria->addSelectColumn(LocationPeer::DELETEDDATE);
            $criteria->addSelectColumn(LocationPeer::DELETEDTIME);
        } else {
            $criteria->addSelectColumn($alias . '.locationcode');
            $criteria->addSelectColumn($alias . '.locationname');
            $criteria->addSelectColumn($alias . '.locationcity');
            $criteria->addSelectColumn($alias . '.deleted');
            $criteria->addSelectColumn($alias . '.addedby');
            $criteria->addSelectColumn($alias . '.addeddate');
            $criteria->addSelectColumn($alias . '.addedtime');
            $criteria->addSelectColumn($alias . '.lastmodifiedby');
            $criteria->addSelectColumn($alias . '.lastmodifieddate');
            $criteria->addSelectColumn($alias . '.lastmodifiedtime');
            $criteria->addSelectColumn($alias . '.deletedby');
            $criteria->addSelectColumn($alias . '.deleteddate');
            $criteria->addSelectColumn($alias . '.deletedtime');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LocationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LocationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LocationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Location
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LocationPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return LocationPeer::populateObjects(LocationPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LocationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LocationPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Location $obj A Location object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getLocationcode();
            } // if key === null
            LocationPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Location object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Location) {
                $key = (string) $value->getLocationcode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Location object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LocationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Location Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LocationPeer::$instances[$key])) {
                return LocationPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (LocationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LocationPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to location
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = LocationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LocationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LocationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LocationPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Location object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LocationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LocationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LocationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LocationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LocationPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(LocationPeer::DATABASE_NAME)->getTable(LocationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLocationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLocationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LocationTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return LocationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Location or Criteria object.
     *
     * @param      mixed $values Criteria or Location object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Location object
        }

        if ($criteria->containsKey(LocationPeer::LOCATIONCODE) && $criteria->keyContainsValue(LocationPeer::LOCATIONCODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.LocationPeer::LOCATIONCODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(LocationPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Location or Criteria object.
     *
     * @param      mixed $values Criteria or Location object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LocationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LocationPeer::LOCATIONCODE);
            $value = $criteria->remove(LocationPeer::LOCATIONCODE);
            if ($value) {
                $selectCriteria->add(LocationPeer::LOCATIONCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LocationPeer::TABLE_NAME);
            }

        } else { // $values is Location object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LocationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the location table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(LocationPeer::TABLE_NAME, $con, LocationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LocationPeer::clearInstancePool();
            LocationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Location or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Location object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            LocationPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Location) { // it's a model object
            // invalidate the cache for this single object
            LocationPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LocationPeer::DATABASE_NAME);
            $criteria->add(LocationPeer::LOCATIONCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                LocationPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(LocationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LocationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Location object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Location $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LocationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LocationPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(LocationPeer::DATABASE_NAME, LocationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Location
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = LocationPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(LocationPeer::DATABASE_NAME);
        $criteria->add(LocationPeer::LOCATIONCODE, $pk);

        $v = LocationPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Location[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(LocationPeer::DATABASE_NAME);
            $criteria->add(LocationPeer::LOCATIONCODE, $pks, Criteria::IN);
            $objs = LocationPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseLocationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLocationPeer::buildTableMap();

