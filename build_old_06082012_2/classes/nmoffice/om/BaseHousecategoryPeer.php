<?php

/**
 * Base static class for performing query and update operations on the 'housecategory' table.
 *
 * house category
 *
 * @package    nmoffice.om
 */
abstract class BaseHousecategoryPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'nmwndb';

	/** the table name for this class */
	const TABLE_NAME = 'housecategory';

	/** the related Propel class for this table */
	const OM_CLASS = 'Housecategory';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'nmoffice.Housecategory';

	/** the related TableMap class for this table */
	const TM_CLASS = 'HousecategoryTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 13;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the HOUSECATCODE field */
	const HOUSECATCODE = 'housecategory.HOUSECATCODE';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'housecategory.DESCRIPTION';

	/** the column name for the PRICE field */
	const PRICE = 'housecategory.PRICE';

	/** the column name for the DELETED field */
	const DELETED = 'housecategory.DELETED';

	/** the column name for the ADDEDBY field */
	const ADDEDBY = 'housecategory.ADDEDBY';

	/** the column name for the ADDEDDATE field */
	const ADDEDDATE = 'housecategory.ADDEDDATE';

	/** the column name for the ADDEDTIME field */
	const ADDEDTIME = 'housecategory.ADDEDTIME';

	/** the column name for the LASTMODIFIEDBY field */
	const LASTMODIFIEDBY = 'housecategory.LASTMODIFIEDBY';

	/** the column name for the LASTMODIFIEDDATE field */
	const LASTMODIFIEDDATE = 'housecategory.LASTMODIFIEDDATE';

	/** the column name for the LASTMODIFIEDTIME field */
	const LASTMODIFIEDTIME = 'housecategory.LASTMODIFIEDTIME';

	/** the column name for the DELETEDBY field */
	const DELETEDBY = 'housecategory.DELETEDBY';

	/** the column name for the DELETEDDATE field */
	const DELETEDDATE = 'housecategory.DELETEDDATE';

	/** the column name for the DELETEDTIME field */
	const DELETEDTIME = 'housecategory.DELETEDTIME';

	/**
	 * An identiy map to hold any loaded instances of Housecategory objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Housecategory[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Housecatcode', 'Description', 'Price', 'Deleted', 'Addedby', 'Addeddate', 'Addedtime', 'Lastmodifiedby', 'Lastmodifieddate', 'Lastmodifiedtime', 'Deletedby', 'Deleteddate', 'Deletedtime', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('housecatcode', 'description', 'price', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
		BasePeer::TYPE_COLNAME => array (self::HOUSECATCODE, self::DESCRIPTION, self::PRICE, self::DELETED, self::ADDEDBY, self::ADDEDDATE, self::ADDEDTIME, self::LASTMODIFIEDBY, self::LASTMODIFIEDDATE, self::LASTMODIFIEDTIME, self::DELETEDBY, self::DELETEDDATE, self::DELETEDTIME, ),
		BasePeer::TYPE_FIELDNAME => array ('housecatcode', 'description', 'price', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Housecatcode' => 0, 'Description' => 1, 'Price' => 2, 'Deleted' => 3, 'Addedby' => 4, 'Addeddate' => 5, 'Addedtime' => 6, 'Lastmodifiedby' => 7, 'Lastmodifieddate' => 8, 'Lastmodifiedtime' => 9, 'Deletedby' => 10, 'Deleteddate' => 11, 'Deletedtime' => 12, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('housecatcode' => 0, 'description' => 1, 'price' => 2, 'deleted' => 3, 'addedby' => 4, 'addeddate' => 5, 'addedtime' => 6, 'lastmodifiedby' => 7, 'lastmodifieddate' => 8, 'lastmodifiedtime' => 9, 'deletedby' => 10, 'deleteddate' => 11, 'deletedtime' => 12, ),
		BasePeer::TYPE_COLNAME => array (self::HOUSECATCODE => 0, self::DESCRIPTION => 1, self::PRICE => 2, self::DELETED => 3, self::ADDEDBY => 4, self::ADDEDDATE => 5, self::ADDEDTIME => 6, self::LASTMODIFIEDBY => 7, self::LASTMODIFIEDDATE => 8, self::LASTMODIFIEDTIME => 9, self::DELETEDBY => 10, self::DELETEDDATE => 11, self::DELETEDTIME => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('housecatcode' => 0, 'description' => 1, 'price' => 2, 'deleted' => 3, 'addedby' => 4, 'addeddate' => 5, 'addedtime' => 6, 'lastmodifiedby' => 7, 'lastmodifieddate' => 8, 'lastmodifiedtime' => 9, 'deletedby' => 10, 'deleteddate' => 11, 'deletedtime' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
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
	 * @param      string $column The column name for current table. (i.e. HousecategoryPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(HousecategoryPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{
		$criteria->addSelectColumn(HousecategoryPeer::HOUSECATCODE);
		$criteria->addSelectColumn(HousecategoryPeer::DESCRIPTION);
		$criteria->addSelectColumn(HousecategoryPeer::PRICE);
		$criteria->addSelectColumn(HousecategoryPeer::DELETED);
		$criteria->addSelectColumn(HousecategoryPeer::ADDEDBY);
		$criteria->addSelectColumn(HousecategoryPeer::ADDEDDATE);
		$criteria->addSelectColumn(HousecategoryPeer::ADDEDTIME);
		$criteria->addSelectColumn(HousecategoryPeer::LASTMODIFIEDBY);
		$criteria->addSelectColumn(HousecategoryPeer::LASTMODIFIEDDATE);
		$criteria->addSelectColumn(HousecategoryPeer::LASTMODIFIEDTIME);
		$criteria->addSelectColumn(HousecategoryPeer::DELETEDBY);
		$criteria->addSelectColumn(HousecategoryPeer::DELETEDDATE);
		$criteria->addSelectColumn(HousecategoryPeer::DELETEDTIME);
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(HousecategoryPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			HousecategoryPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(HousecategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Housecategory
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = HousecategoryPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return HousecategoryPeer::populateObjects(HousecategoryPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(HousecategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			HousecategoryPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

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
	 * @param      Housecategory $value A Housecategory object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Housecategory $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getHousecatcode();
			} // if key === null
			self::$instances[$key] = $obj;
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
	 * @param      mixed $value A Housecategory object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Housecategory) {
				$key = (string) $value->getHousecatcode();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Housecategory object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Housecategory Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to housecategory
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
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = HousecategoryPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = HousecategoryPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = HousecategoryPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				HousecategoryPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseHousecategoryPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseHousecategoryPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new HousecategoryTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean  Whether or not to return the path wit hthe class name 
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? HousecategoryPeer::CLASS_DEFAULT : HousecategoryPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Housecategory or Criteria object.
	 *
	 * @param      mixed $values Criteria or Housecategory object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(HousecategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Housecategory object
		}

		if ($criteria->containsKey(HousecategoryPeer::HOUSECATCODE) && $criteria->keyContainsValue(HousecategoryPeer::HOUSECATCODE) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.HousecategoryPeer::HOUSECATCODE.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a Housecategory or Criteria object.
	 *
	 * @param      mixed $values Criteria or Housecategory object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(HousecategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(HousecategoryPeer::HOUSECATCODE);
			$selectCriteria->add(HousecategoryPeer::HOUSECATCODE, $criteria->remove(HousecategoryPeer::HOUSECATCODE), $comparison);

		} else { // $values is Housecategory object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the housecategory table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(HousecategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(HousecategoryPeer::TABLE_NAME, $con);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			HousecategoryPeer::clearInstancePool();
			HousecategoryPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Housecategory or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Housecategory object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(HousecategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			HousecategoryPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Housecategory) {
			// invalidate the cache for this single object
			HousecategoryPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HousecategoryPeer::HOUSECATCODE, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				HousecategoryPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			HousecategoryPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Housecategory object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Housecategory $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Housecategory $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HousecategoryPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HousecategoryPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(HousecategoryPeer::DATABASE_NAME, HousecategoryPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Housecategory
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = HousecategoryPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(HousecategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(HousecategoryPeer::DATABASE_NAME);
		$criteria->add(HousecategoryPeer::HOUSECATCODE, $pk);

		$v = HousecategoryPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(HousecategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(HousecategoryPeer::DATABASE_NAME);
			$criteria->add(HousecategoryPeer::HOUSECATCODE, $pks, Criteria::IN);
			$objs = HousecategoryPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseHousecategoryPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseHousecategoryPeer::buildTableMap();

