<?php

/**
 * Base static class for performing query and update operations on the 'paymentplan' table.
 *
 * payment plans for houses in a project
 *
 * @package    nmoffice.om
 */
abstract class BasePaymentplanPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'nmwndb';

	/** the table name for this class */
	const TABLE_NAME = 'paymentplan';

	/** the related Propel class for this table */
	const OM_CLASS = 'Paymentplan';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'nmoffice.Paymentplan';

	/** the related TableMap class for this table */
	const TM_CLASS = 'PaymentplanTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 16;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the REFNO field */
	const REFNO = 'paymentplan.REFNO';

	/** the column name for the PROJECTCODE field */
	const PROJECTCODE = 'paymentplan.PROJECTCODE';

	/** the column name for the NOFINSTALLMENTS field */
	const NOFINSTALLMENTS = 'paymentplan.NOFINSTALLMENTS';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'paymentplan.DESCRIPTION';

	/** the column name for the INSTALLAMOUNT field */
	const INSTALLAMOUNT = 'paymentplan.INSTALLAMOUNT';

	/** the column name for the TOTALPAYABLE field */
	const TOTALPAYABLE = 'paymentplan.TOTALPAYABLE';

	/** the column name for the DELETED field */
	const DELETED = 'paymentplan.DELETED';

	/** the column name for the ADDEDBY field */
	const ADDEDBY = 'paymentplan.ADDEDBY';

	/** the column name for the ADDEDDATE field */
	const ADDEDDATE = 'paymentplan.ADDEDDATE';

	/** the column name for the ADDEDTIME field */
	const ADDEDTIME = 'paymentplan.ADDEDTIME';

	/** the column name for the LASTMODIFIEDBY field */
	const LASTMODIFIEDBY = 'paymentplan.LASTMODIFIEDBY';

	/** the column name for the LASTMODIFIEDDATE field */
	const LASTMODIFIEDDATE = 'paymentplan.LASTMODIFIEDDATE';

	/** the column name for the LASTMODIFIEDTIME field */
	const LASTMODIFIEDTIME = 'paymentplan.LASTMODIFIEDTIME';

	/** the column name for the DELETEDBY field */
	const DELETEDBY = 'paymentplan.DELETEDBY';

	/** the column name for the DELETEDDATE field */
	const DELETEDDATE = 'paymentplan.DELETEDDATE';

	/** the column name for the DELETEDTIME field */
	const DELETEDTIME = 'paymentplan.DELETEDTIME';

	/**
	 * An identiy map to hold any loaded instances of Paymentplan objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Paymentplan[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Refno', 'Projectcode', 'Nofinstallments', 'Description', 'Installamount', 'Totalpayable', 'Deleted', 'Addedby', 'Addeddate', 'Addedtime', 'Lastmodifiedby', 'Lastmodifieddate', 'Lastmodifiedtime', 'Deletedby', 'Deleteddate', 'Deletedtime', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('refno', 'projectcode', 'nofinstallments', 'description', 'installamount', 'totalpayable', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
		BasePeer::TYPE_COLNAME => array (self::REFNO, self::PROJECTCODE, self::NOFINSTALLMENTS, self::DESCRIPTION, self::INSTALLAMOUNT, self::TOTALPAYABLE, self::DELETED, self::ADDEDBY, self::ADDEDDATE, self::ADDEDTIME, self::LASTMODIFIEDBY, self::LASTMODIFIEDDATE, self::LASTMODIFIEDTIME, self::DELETEDBY, self::DELETEDDATE, self::DELETEDTIME, ),
		BasePeer::TYPE_FIELDNAME => array ('refno', 'projectcode', 'nofinstallments', 'description', 'installamount', 'totalpayable', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Refno' => 0, 'Projectcode' => 1, 'Nofinstallments' => 2, 'Description' => 3, 'Installamount' => 4, 'Totalpayable' => 5, 'Deleted' => 6, 'Addedby' => 7, 'Addeddate' => 8, 'Addedtime' => 9, 'Lastmodifiedby' => 10, 'Lastmodifieddate' => 11, 'Lastmodifiedtime' => 12, 'Deletedby' => 13, 'Deleteddate' => 14, 'Deletedtime' => 15, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('refno' => 0, 'projectcode' => 1, 'nofinstallments' => 2, 'description' => 3, 'installamount' => 4, 'totalpayable' => 5, 'deleted' => 6, 'addedby' => 7, 'addeddate' => 8, 'addedtime' => 9, 'lastmodifiedby' => 10, 'lastmodifieddate' => 11, 'lastmodifiedtime' => 12, 'deletedby' => 13, 'deleteddate' => 14, 'deletedtime' => 15, ),
		BasePeer::TYPE_COLNAME => array (self::REFNO => 0, self::PROJECTCODE => 1, self::NOFINSTALLMENTS => 2, self::DESCRIPTION => 3, self::INSTALLAMOUNT => 4, self::TOTALPAYABLE => 5, self::DELETED => 6, self::ADDEDBY => 7, self::ADDEDDATE => 8, self::ADDEDTIME => 9, self::LASTMODIFIEDBY => 10, self::LASTMODIFIEDDATE => 11, self::LASTMODIFIEDTIME => 12, self::DELETEDBY => 13, self::DELETEDDATE => 14, self::DELETEDTIME => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('refno' => 0, 'projectcode' => 1, 'nofinstallments' => 2, 'description' => 3, 'installamount' => 4, 'totalpayable' => 5, 'deleted' => 6, 'addedby' => 7, 'addeddate' => 8, 'addedtime' => 9, 'lastmodifiedby' => 10, 'lastmodifieddate' => 11, 'lastmodifiedtime' => 12, 'deletedby' => 13, 'deleteddate' => 14, 'deletedtime' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
	 * @param      string $column The column name for current table. (i.e. PaymentplanPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(PaymentplanPeer::TABLE_NAME.'.', $alias.'.', $column);
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
		$criteria->addSelectColumn(PaymentplanPeer::REFNO);
		$criteria->addSelectColumn(PaymentplanPeer::PROJECTCODE);
		$criteria->addSelectColumn(PaymentplanPeer::NOFINSTALLMENTS);
		$criteria->addSelectColumn(PaymentplanPeer::DESCRIPTION);
		$criteria->addSelectColumn(PaymentplanPeer::INSTALLAMOUNT);
		$criteria->addSelectColumn(PaymentplanPeer::TOTALPAYABLE);
		$criteria->addSelectColumn(PaymentplanPeer::DELETED);
		$criteria->addSelectColumn(PaymentplanPeer::ADDEDBY);
		$criteria->addSelectColumn(PaymentplanPeer::ADDEDDATE);
		$criteria->addSelectColumn(PaymentplanPeer::ADDEDTIME);
		$criteria->addSelectColumn(PaymentplanPeer::LASTMODIFIEDBY);
		$criteria->addSelectColumn(PaymentplanPeer::LASTMODIFIEDDATE);
		$criteria->addSelectColumn(PaymentplanPeer::LASTMODIFIEDTIME);
		$criteria->addSelectColumn(PaymentplanPeer::DELETEDBY);
		$criteria->addSelectColumn(PaymentplanPeer::DELETEDDATE);
		$criteria->addSelectColumn(PaymentplanPeer::DELETEDTIME);
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
		$criteria->setPrimaryTableName(PaymentplanPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PaymentplanPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Paymentplan
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = PaymentplanPeer::doSelect($critcopy, $con);
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
		return PaymentplanPeer::populateObjects(PaymentplanPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			PaymentplanPeer::addSelectColumns($criteria);
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
	 * @param      Paymentplan $value A Paymentplan object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Paymentplan $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getRefno();
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
	 * @param      mixed $value A Paymentplan object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Paymentplan) {
				$key = (string) $value->getRefno();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Paymentplan object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Paymentplan Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to paymentplan
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
		$cls = PaymentplanPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = PaymentplanPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = PaymentplanPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				PaymentplanPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the number of rows matching criteria, joining the related Project table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinProject(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PaymentplanPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PaymentplanPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PaymentplanPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

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
	 * Selects a collection of Paymentplan objects pre-filled with their Project objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Paymentplan objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinProject(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PaymentplanPeer::addSelectColumns($criteria);
		$startcol = (PaymentplanPeer::NUM_COLUMNS - PaymentplanPeer::NUM_LAZY_LOAD_COLUMNS);
		ProjectPeer::addSelectColumns($criteria);

		$criteria->addJoin(PaymentplanPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PaymentplanPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PaymentplanPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PaymentplanPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PaymentplanPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = ProjectPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = ProjectPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = ProjectPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					ProjectPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Paymentplan) to $obj2 (Project)
				$obj2->addPaymentplan($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PaymentplanPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PaymentplanPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PaymentplanPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

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
	 * Selects a collection of Paymentplan objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Paymentplan objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PaymentplanPeer::addSelectColumns($criteria);
		$startcol2 = (PaymentplanPeer::NUM_COLUMNS - PaymentplanPeer::NUM_LAZY_LOAD_COLUMNS);

		ProjectPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (ProjectPeer::NUM_COLUMNS - ProjectPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(PaymentplanPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PaymentplanPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PaymentplanPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PaymentplanPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PaymentplanPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Project rows

			$key2 = ProjectPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = ProjectPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = ProjectPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					ProjectPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (Paymentplan) to the collection in $obj2 (Project)
				$obj2->addPaymentplan($obj1);
			} // if joined row not null

			$results[] = $obj1;
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
	  $dbMap = Propel::getDatabaseMap(BasePaymentplanPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BasePaymentplanPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new PaymentplanTableMap());
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
		return $withPrefix ? PaymentplanPeer::CLASS_DEFAULT : PaymentplanPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Paymentplan or Criteria object.
	 *
	 * @param      mixed $values Criteria or Paymentplan object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Paymentplan object
		}

		if ($criteria->containsKey(PaymentplanPeer::REFNO) && $criteria->keyContainsValue(PaymentplanPeer::REFNO) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.PaymentplanPeer::REFNO.')');
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
	 * Method perform an UPDATE on the database, given a Paymentplan or Criteria object.
	 *
	 * @param      mixed $values Criteria or Paymentplan object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(PaymentplanPeer::REFNO);
			$selectCriteria->add(PaymentplanPeer::REFNO, $criteria->remove(PaymentplanPeer::REFNO), $comparison);

		} else { // $values is Paymentplan object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the paymentplan table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(PaymentplanPeer::TABLE_NAME, $con);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			PaymentplanPeer::clearInstancePool();
			PaymentplanPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Paymentplan or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Paymentplan object or primary key or array of primary keys
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
			$con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			PaymentplanPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Paymentplan) {
			// invalidate the cache for this single object
			PaymentplanPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PaymentplanPeer::REFNO, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				PaymentplanPeer::removeInstanceFromPool($singleval);
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
			PaymentplanPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Paymentplan object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Paymentplan $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Paymentplan $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PaymentplanPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PaymentplanPeer::TABLE_NAME);

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

		return BasePeer::doValidate(PaymentplanPeer::DATABASE_NAME, PaymentplanPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Paymentplan
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = PaymentplanPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(PaymentplanPeer::DATABASE_NAME);
		$criteria->add(PaymentplanPeer::REFNO, $pk);

		$v = PaymentplanPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(PaymentplanPeer::DATABASE_NAME);
			$criteria->add(PaymentplanPeer::REFNO, $pks, Criteria::IN);
			$objs = PaymentplanPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BasePaymentplanPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePaymentplanPeer::buildTableMap();

