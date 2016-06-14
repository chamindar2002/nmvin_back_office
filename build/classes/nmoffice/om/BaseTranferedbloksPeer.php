<?php


/**
 * Base static class for performing query and update operations on the 'tranferedbloks' table.
 *
 * Transfered Blocks Log Table
 *
 * @package propel.generator.nmoffice.om
 */
abstract class BaseTranferedbloksPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'nmwndb';

    /** the table name for this class */
    const TABLE_NAME = 'tranferedbloks';

    /** the related Propel class for this table */
    const OM_CLASS = 'Tranferedbloks';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TranferedbloksTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the refno field */
    const REFNO = 'tranferedbloks.refno';

    /** the column name for the customercode field */
    const CUSTOMERCODE = 'tranferedbloks.customercode';

    /** the column name for the salerefno field */
    const SALEREFNO = 'tranferedbloks.salerefno';

    /** the column name for the blockrefnumber_previous field */
    const BLOCKREFNUMBER_PREVIOUS = 'tranferedbloks.blockrefnumber_previous';

    /** the column name for the blockrefnumber_current field */
    const BLOCKREFNUMBER_CURRENT = 'tranferedbloks.blockrefnumber_current';

    /** the column name for the currentblock_previouscustomer field */
    const CURRENTBLOCK_PREVIOUSCUSTOMER = 'tranferedbloks.currentblock_previouscustomer';

    /** the column name for the other1 field */
    const OTHER1 = 'tranferedbloks.other1';

    /** the column name for the other2 field */
    const OTHER2 = 'tranferedbloks.other2';

    /** the column name for the other3 field */
    const OTHER3 = 'tranferedbloks.other3';

    /** the column name for the addedby field */
    const ADDEDBY = 'tranferedbloks.addedby';

    /** the column name for the addeddate field */
    const ADDEDDATE = 'tranferedbloks.addeddate';

    /** the column name for the addedtime field */
    const ADDEDTIME = 'tranferedbloks.addedtime';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Tranferedbloks objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Tranferedbloks[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TranferedbloksPeer::$fieldNames[TranferedbloksPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Refno', 'Customercode', 'Salerefno', 'BlockrefnumberPrevious', 'BlockrefnumberCurrent', 'CurrentblockPreviouscustomer', 'Other1', 'Other2', 'Other3', 'Addedby', 'Addeddate', 'Addedtime', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('refno', 'customercode', 'salerefno', 'blockrefnumberPrevious', 'blockrefnumberCurrent', 'currentblockPreviouscustomer', 'other1', 'other2', 'other3', 'addedby', 'addeddate', 'addedtime', ),
        BasePeer::TYPE_COLNAME => array (TranferedbloksPeer::REFNO, TranferedbloksPeer::CUSTOMERCODE, TranferedbloksPeer::SALEREFNO, TranferedbloksPeer::BLOCKREFNUMBER_PREVIOUS, TranferedbloksPeer::BLOCKREFNUMBER_CURRENT, TranferedbloksPeer::CURRENTBLOCK_PREVIOUSCUSTOMER, TranferedbloksPeer::OTHER1, TranferedbloksPeer::OTHER2, TranferedbloksPeer::OTHER3, TranferedbloksPeer::ADDEDBY, TranferedbloksPeer::ADDEDDATE, TranferedbloksPeer::ADDEDTIME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFNO', 'CUSTOMERCODE', 'SALEREFNO', 'BLOCKREFNUMBER_PREVIOUS', 'BLOCKREFNUMBER_CURRENT', 'CURRENTBLOCK_PREVIOUSCUSTOMER', 'OTHER1', 'OTHER2', 'OTHER3', 'ADDEDBY', 'ADDEDDATE', 'ADDEDTIME', ),
        BasePeer::TYPE_FIELDNAME => array ('refno', 'customercode', 'salerefno', 'blockrefnumber_previous', 'blockrefnumber_current', 'currentblock_previouscustomer', 'other1', 'other2', 'other3', 'addedby', 'addeddate', 'addedtime', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TranferedbloksPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Refno' => 0, 'Customercode' => 1, 'Salerefno' => 2, 'BlockrefnumberPrevious' => 3, 'BlockrefnumberCurrent' => 4, 'CurrentblockPreviouscustomer' => 5, 'Other1' => 6, 'Other2' => 7, 'Other3' => 8, 'Addedby' => 9, 'Addeddate' => 10, 'Addedtime' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('refno' => 0, 'customercode' => 1, 'salerefno' => 2, 'blockrefnumberPrevious' => 3, 'blockrefnumberCurrent' => 4, 'currentblockPreviouscustomer' => 5, 'other1' => 6, 'other2' => 7, 'other3' => 8, 'addedby' => 9, 'addeddate' => 10, 'addedtime' => 11, ),
        BasePeer::TYPE_COLNAME => array (TranferedbloksPeer::REFNO => 0, TranferedbloksPeer::CUSTOMERCODE => 1, TranferedbloksPeer::SALEREFNO => 2, TranferedbloksPeer::BLOCKREFNUMBER_PREVIOUS => 3, TranferedbloksPeer::BLOCKREFNUMBER_CURRENT => 4, TranferedbloksPeer::CURRENTBLOCK_PREVIOUSCUSTOMER => 5, TranferedbloksPeer::OTHER1 => 6, TranferedbloksPeer::OTHER2 => 7, TranferedbloksPeer::OTHER3 => 8, TranferedbloksPeer::ADDEDBY => 9, TranferedbloksPeer::ADDEDDATE => 10, TranferedbloksPeer::ADDEDTIME => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFNO' => 0, 'CUSTOMERCODE' => 1, 'SALEREFNO' => 2, 'BLOCKREFNUMBER_PREVIOUS' => 3, 'BLOCKREFNUMBER_CURRENT' => 4, 'CURRENTBLOCK_PREVIOUSCUSTOMER' => 5, 'OTHER1' => 6, 'OTHER2' => 7, 'OTHER3' => 8, 'ADDEDBY' => 9, 'ADDEDDATE' => 10, 'ADDEDTIME' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('refno' => 0, 'customercode' => 1, 'salerefno' => 2, 'blockrefnumber_previous' => 3, 'blockrefnumber_current' => 4, 'currentblock_previouscustomer' => 5, 'other1' => 6, 'other2' => 7, 'other3' => 8, 'addedby' => 9, 'addeddate' => 10, 'addedtime' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = TranferedbloksPeer::getFieldNames($toType);
        $key = isset(TranferedbloksPeer::$fieldKeys[$fromType][$name]) ? TranferedbloksPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TranferedbloksPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TranferedbloksPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TranferedbloksPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. TranferedbloksPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TranferedbloksPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TranferedbloksPeer::REFNO);
            $criteria->addSelectColumn(TranferedbloksPeer::CUSTOMERCODE);
            $criteria->addSelectColumn(TranferedbloksPeer::SALEREFNO);
            $criteria->addSelectColumn(TranferedbloksPeer::BLOCKREFNUMBER_PREVIOUS);
            $criteria->addSelectColumn(TranferedbloksPeer::BLOCKREFNUMBER_CURRENT);
            $criteria->addSelectColumn(TranferedbloksPeer::CURRENTBLOCK_PREVIOUSCUSTOMER);
            $criteria->addSelectColumn(TranferedbloksPeer::OTHER1);
            $criteria->addSelectColumn(TranferedbloksPeer::OTHER2);
            $criteria->addSelectColumn(TranferedbloksPeer::OTHER3);
            $criteria->addSelectColumn(TranferedbloksPeer::ADDEDBY);
            $criteria->addSelectColumn(TranferedbloksPeer::ADDEDDATE);
            $criteria->addSelectColumn(TranferedbloksPeer::ADDEDTIME);
        } else {
            $criteria->addSelectColumn($alias . '.refno');
            $criteria->addSelectColumn($alias . '.customercode');
            $criteria->addSelectColumn($alias . '.salerefno');
            $criteria->addSelectColumn($alias . '.blockrefnumber_previous');
            $criteria->addSelectColumn($alias . '.blockrefnumber_current');
            $criteria->addSelectColumn($alias . '.currentblock_previouscustomer');
            $criteria->addSelectColumn($alias . '.other1');
            $criteria->addSelectColumn($alias . '.other2');
            $criteria->addSelectColumn($alias . '.other3');
            $criteria->addSelectColumn($alias . '.addedby');
            $criteria->addSelectColumn($alias . '.addeddate');
            $criteria->addSelectColumn($alias . '.addedtime');
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
        $criteria->setPrimaryTableName(TranferedbloksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TranferedbloksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Tranferedbloks
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TranferedbloksPeer::doSelect($critcopy, $con);
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
        return TranferedbloksPeer::populateObjects(TranferedbloksPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TranferedbloksPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);

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
     * @param Tranferedbloks $obj A Tranferedbloks object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRefno();
            } // if key === null
            TranferedbloksPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Tranferedbloks object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Tranferedbloks) {
                $key = (string) $value->getRefno();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Tranferedbloks object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TranferedbloksPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Tranferedbloks Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TranferedbloksPeer::$instances[$key])) {
                return TranferedbloksPeer::$instances[$key];
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
        foreach (TranferedbloksPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TranferedbloksPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to tranferedbloks
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
        $cls = TranferedbloksPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TranferedbloksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TranferedbloksPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TranferedbloksPeer::addInstanceToPool($obj, $key);
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
     * @return array (Tranferedbloks object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TranferedbloksPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TranferedbloksPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TranferedbloksPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TranferedbloksPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TranferedbloksPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Customerdetails table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCustomerdetails(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TranferedbloksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TranferedbloksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TranferedbloksPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Sales table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSales(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TranferedbloksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TranferedbloksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TranferedbloksPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

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
     * Selects a collection of Tranferedbloks objects pre-filled with their Customerdetails objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tranferedbloks objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCustomerdetails(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);
        }

        TranferedbloksPeer::addSelectColumns($criteria);
        $startcol = TranferedbloksPeer::NUM_HYDRATE_COLUMNS;
        CustomerdetailsPeer::addSelectColumns($criteria);

        $criteria->addJoin(TranferedbloksPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TranferedbloksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TranferedbloksPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TranferedbloksPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TranferedbloksPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CustomerdetailsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CustomerdetailsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CustomerdetailsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CustomerdetailsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Tranferedbloks) to $obj2 (Customerdetails)
                $obj2->addTranferedbloks($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Tranferedbloks objects pre-filled with their Sales objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tranferedbloks objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSales(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);
        }

        TranferedbloksPeer::addSelectColumns($criteria);
        $startcol = TranferedbloksPeer::NUM_HYDRATE_COLUMNS;
        SalesPeer::addSelectColumns($criteria);

        $criteria->addJoin(TranferedbloksPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TranferedbloksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TranferedbloksPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TranferedbloksPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TranferedbloksPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SalesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SalesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SalesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SalesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Tranferedbloks) to $obj2 (Sales)
                $obj2->addTranferedbloks($obj1);

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
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TranferedbloksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TranferedbloksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TranferedbloksPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(TranferedbloksPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

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
     * Selects a collection of Tranferedbloks objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tranferedbloks objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);
        }

        TranferedbloksPeer::addSelectColumns($criteria);
        $startcol2 = TranferedbloksPeer::NUM_HYDRATE_COLUMNS;

        CustomerdetailsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerdetailsPeer::NUM_HYDRATE_COLUMNS;

        SalesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SalesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TranferedbloksPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(TranferedbloksPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TranferedbloksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TranferedbloksPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TranferedbloksPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TranferedbloksPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Customerdetails rows

            $key2 = CustomerdetailsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CustomerdetailsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CustomerdetailsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CustomerdetailsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Tranferedbloks) to the collection in $obj2 (Customerdetails)
                $obj2->addTranferedbloks($obj1);
            } // if joined row not null

            // Add objects for joined Sales rows

            $key3 = SalesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = SalesPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = SalesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SalesPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Tranferedbloks) to the collection in $obj3 (Sales)
                $obj3->addTranferedbloks($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Customerdetails table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCustomerdetails(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TranferedbloksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TranferedbloksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TranferedbloksPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Sales table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSales(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TranferedbloksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TranferedbloksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TranferedbloksPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

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
     * Selects a collection of Tranferedbloks objects pre-filled with all related objects except Customerdetails.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tranferedbloks objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCustomerdetails(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);
        }

        TranferedbloksPeer::addSelectColumns($criteria);
        $startcol2 = TranferedbloksPeer::NUM_HYDRATE_COLUMNS;

        SalesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SalesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TranferedbloksPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TranferedbloksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TranferedbloksPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TranferedbloksPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TranferedbloksPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Sales rows

                $key2 = SalesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = SalesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = SalesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SalesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Tranferedbloks) to the collection in $obj2 (Sales)
                $obj2->addTranferedbloks($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Tranferedbloks objects pre-filled with all related objects except Sales.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tranferedbloks objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSales(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);
        }

        TranferedbloksPeer::addSelectColumns($criteria);
        $startcol2 = TranferedbloksPeer::NUM_HYDRATE_COLUMNS;

        CustomerdetailsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerdetailsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TranferedbloksPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TranferedbloksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TranferedbloksPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TranferedbloksPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TranferedbloksPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Customerdetails rows

                $key2 = CustomerdetailsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CustomerdetailsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CustomerdetailsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CustomerdetailsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Tranferedbloks) to the collection in $obj2 (Customerdetails)
                $obj2->addTranferedbloks($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        return Propel::getDatabaseMap(TranferedbloksPeer::DATABASE_NAME)->getTable(TranferedbloksPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTranferedbloksPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTranferedbloksPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TranferedbloksTableMap());
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
        return TranferedbloksPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Tranferedbloks or Criteria object.
     *
     * @param      mixed $values Criteria or Tranferedbloks object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Tranferedbloks object
        }

        if ($criteria->containsKey(TranferedbloksPeer::REFNO) && $criteria->keyContainsValue(TranferedbloksPeer::REFNO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TranferedbloksPeer::REFNO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Tranferedbloks or Criteria object.
     *
     * @param      mixed $values Criteria or Tranferedbloks object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TranferedbloksPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TranferedbloksPeer::REFNO);
            $value = $criteria->remove(TranferedbloksPeer::REFNO);
            if ($value) {
                $selectCriteria->add(TranferedbloksPeer::REFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TranferedbloksPeer::TABLE_NAME);
            }

        } else { // $values is Tranferedbloks object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the tranferedbloks table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TranferedbloksPeer::TABLE_NAME, $con, TranferedbloksPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TranferedbloksPeer::clearInstancePool();
            TranferedbloksPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Tranferedbloks or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Tranferedbloks object or primary key or array of primary keys
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
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TranferedbloksPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Tranferedbloks) { // it's a model object
            // invalidate the cache for this single object
            TranferedbloksPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TranferedbloksPeer::DATABASE_NAME);
            $criteria->add(TranferedbloksPeer::REFNO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TranferedbloksPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TranferedbloksPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TranferedbloksPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Tranferedbloks object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Tranferedbloks $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TranferedbloksPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TranferedbloksPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TranferedbloksPeer::DATABASE_NAME, TranferedbloksPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Tranferedbloks
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TranferedbloksPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TranferedbloksPeer::DATABASE_NAME);
        $criteria->add(TranferedbloksPeer::REFNO, $pk);

        $v = TranferedbloksPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Tranferedbloks[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TranferedbloksPeer::DATABASE_NAME);
            $criteria->add(TranferedbloksPeer::REFNO, $pks, Criteria::IN);
            $objs = TranferedbloksPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTranferedbloksPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTranferedbloksPeer::buildTableMap();

