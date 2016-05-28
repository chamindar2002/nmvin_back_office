<?php


/**
 * Base static class for performing query and update operations on the 'refunds' table.
 *
 * house sales of projects
 *
 * @package propel.generator.nmoffice.om
 */
abstract class BaseRefundsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'nmwndb';

    /** the table name for this class */
    const TABLE_NAME = 'refunds';

    /** the related Propel class for this table */
    const OM_CLASS = 'Refunds';

    /** the related TableMap class for this table */
    const TM_CLASS = 'RefundsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the refno field */
    const REFNO = 'refunds.refno';

    /** the column name for the salerefno field */
    const SALEREFNO = 'refunds.salerefno';

    /** the column name for the customercode field */
    const CUSTOMERCODE = 'refunds.customercode';

    /** the column name for the locationcode field */
    const LOCATIONCODE = 'refunds.locationcode';

    /** the column name for the projectcode field */
    const PROJECTCODE = 'refunds.projectcode';

    /** the column name for the blockrefnumber field */
    const BLOCKREFNUMBER = 'refunds.blockrefnumber';

    /** the column name for the payplanrefno field */
    const PAYPLANREFNO = 'refunds.payplanrefno';

    /** the column name for the refundamount field */
    const REFUNDAMOUNT = 'refunds.refundamount';

    /** the column name for the refundate field */
    const REFUNDATE = 'refunds.refundate';

    /** the column name for the deleted field */
    const DELETED = 'refunds.deleted';

    /** the column name for the deletedby field */
    const DELETEDBY = 'refunds.deletedby';

    /** the column name for the deleteddate field */
    const DELETEDDATE = 'refunds.deleteddate';

    /** the column name for the deletedtime field */
    const DELETEDTIME = 'refunds.deletedtime';

    /** the column name for the addedby field */
    const ADDEDBY = 'refunds.addedby';

    /** the column name for the addeddate field */
    const ADDEDDATE = 'refunds.addeddate';

    /** the column name for the addedtime field */
    const ADDEDTIME = 'refunds.addedtime';

    /** the column name for the lastmodifiedby field */
    const LASTMODIFIEDBY = 'refunds.lastmodifiedby';

    /** the column name for the lastmodifieddate field */
    const LASTMODIFIEDDATE = 'refunds.lastmodifieddate';

    /** the column name for the lastmodifiedtime field */
    const LASTMODIFIEDTIME = 'refunds.lastmodifiedtime';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Refunds objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Refunds[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. RefundsPeer::$fieldNames[RefundsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Refno', 'Salerefno', 'Customercode', 'Locationcode', 'Projectcode', 'Blockrefnumber', 'Payplanrefno', 'Refundamount', 'Refundate', 'Deleted', 'Deletedby', 'Deleteddate', 'Deletedtime', 'Addedby', 'Addeddate', 'Addedtime', 'Lastmodifiedby', 'Lastmodifieddate', 'Lastmodifiedtime', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('refno', 'salerefno', 'customercode', 'locationcode', 'projectcode', 'blockrefnumber', 'payplanrefno', 'refundamount', 'refundate', 'deleted', 'deletedby', 'deleteddate', 'deletedtime', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', ),
        BasePeer::TYPE_COLNAME => array (RefundsPeer::REFNO, RefundsPeer::SALEREFNO, RefundsPeer::CUSTOMERCODE, RefundsPeer::LOCATIONCODE, RefundsPeer::PROJECTCODE, RefundsPeer::BLOCKREFNUMBER, RefundsPeer::PAYPLANREFNO, RefundsPeer::REFUNDAMOUNT, RefundsPeer::REFUNDATE, RefundsPeer::DELETED, RefundsPeer::DELETEDBY, RefundsPeer::DELETEDDATE, RefundsPeer::DELETEDTIME, RefundsPeer::ADDEDBY, RefundsPeer::ADDEDDATE, RefundsPeer::ADDEDTIME, RefundsPeer::LASTMODIFIEDBY, RefundsPeer::LASTMODIFIEDDATE, RefundsPeer::LASTMODIFIEDTIME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFNO', 'SALEREFNO', 'CUSTOMERCODE', 'LOCATIONCODE', 'PROJECTCODE', 'BLOCKREFNUMBER', 'PAYPLANREFNO', 'REFUNDAMOUNT', 'REFUNDATE', 'DELETED', 'DELETEDBY', 'DELETEDDATE', 'DELETEDTIME', 'ADDEDBY', 'ADDEDDATE', 'ADDEDTIME', 'LASTMODIFIEDBY', 'LASTMODIFIEDDATE', 'LASTMODIFIEDTIME', ),
        BasePeer::TYPE_FIELDNAME => array ('refno', 'salerefno', 'customercode', 'locationcode', 'projectcode', 'blockrefnumber', 'payplanrefno', 'refundamount', 'refundate', 'deleted', 'deletedby', 'deleteddate', 'deletedtime', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. RefundsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Refno' => 0, 'Salerefno' => 1, 'Customercode' => 2, 'Locationcode' => 3, 'Projectcode' => 4, 'Blockrefnumber' => 5, 'Payplanrefno' => 6, 'Refundamount' => 7, 'Refundate' => 8, 'Deleted' => 9, 'Deletedby' => 10, 'Deleteddate' => 11, 'Deletedtime' => 12, 'Addedby' => 13, 'Addeddate' => 14, 'Addedtime' => 15, 'Lastmodifiedby' => 16, 'Lastmodifieddate' => 17, 'Lastmodifiedtime' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('refno' => 0, 'salerefno' => 1, 'customercode' => 2, 'locationcode' => 3, 'projectcode' => 4, 'blockrefnumber' => 5, 'payplanrefno' => 6, 'refundamount' => 7, 'refundate' => 8, 'deleted' => 9, 'deletedby' => 10, 'deleteddate' => 11, 'deletedtime' => 12, 'addedby' => 13, 'addeddate' => 14, 'addedtime' => 15, 'lastmodifiedby' => 16, 'lastmodifieddate' => 17, 'lastmodifiedtime' => 18, ),
        BasePeer::TYPE_COLNAME => array (RefundsPeer::REFNO => 0, RefundsPeer::SALEREFNO => 1, RefundsPeer::CUSTOMERCODE => 2, RefundsPeer::LOCATIONCODE => 3, RefundsPeer::PROJECTCODE => 4, RefundsPeer::BLOCKREFNUMBER => 5, RefundsPeer::PAYPLANREFNO => 6, RefundsPeer::REFUNDAMOUNT => 7, RefundsPeer::REFUNDATE => 8, RefundsPeer::DELETED => 9, RefundsPeer::DELETEDBY => 10, RefundsPeer::DELETEDDATE => 11, RefundsPeer::DELETEDTIME => 12, RefundsPeer::ADDEDBY => 13, RefundsPeer::ADDEDDATE => 14, RefundsPeer::ADDEDTIME => 15, RefundsPeer::LASTMODIFIEDBY => 16, RefundsPeer::LASTMODIFIEDDATE => 17, RefundsPeer::LASTMODIFIEDTIME => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFNO' => 0, 'SALEREFNO' => 1, 'CUSTOMERCODE' => 2, 'LOCATIONCODE' => 3, 'PROJECTCODE' => 4, 'BLOCKREFNUMBER' => 5, 'PAYPLANREFNO' => 6, 'REFUNDAMOUNT' => 7, 'REFUNDATE' => 8, 'DELETED' => 9, 'DELETEDBY' => 10, 'DELETEDDATE' => 11, 'DELETEDTIME' => 12, 'ADDEDBY' => 13, 'ADDEDDATE' => 14, 'ADDEDTIME' => 15, 'LASTMODIFIEDBY' => 16, 'LASTMODIFIEDDATE' => 17, 'LASTMODIFIEDTIME' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('refno' => 0, 'salerefno' => 1, 'customercode' => 2, 'locationcode' => 3, 'projectcode' => 4, 'blockrefnumber' => 5, 'payplanrefno' => 6, 'refundamount' => 7, 'refundate' => 8, 'deleted' => 9, 'deletedby' => 10, 'deleteddate' => 11, 'deletedtime' => 12, 'addedby' => 13, 'addeddate' => 14, 'addedtime' => 15, 'lastmodifiedby' => 16, 'lastmodifieddate' => 17, 'lastmodifiedtime' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $toNames = RefundsPeer::getFieldNames($toType);
        $key = isset(RefundsPeer::$fieldKeys[$fromType][$name]) ? RefundsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(RefundsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, RefundsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return RefundsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. RefundsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RefundsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(RefundsPeer::REFNO);
            $criteria->addSelectColumn(RefundsPeer::SALEREFNO);
            $criteria->addSelectColumn(RefundsPeer::CUSTOMERCODE);
            $criteria->addSelectColumn(RefundsPeer::LOCATIONCODE);
            $criteria->addSelectColumn(RefundsPeer::PROJECTCODE);
            $criteria->addSelectColumn(RefundsPeer::BLOCKREFNUMBER);
            $criteria->addSelectColumn(RefundsPeer::PAYPLANREFNO);
            $criteria->addSelectColumn(RefundsPeer::REFUNDAMOUNT);
            $criteria->addSelectColumn(RefundsPeer::REFUNDATE);
            $criteria->addSelectColumn(RefundsPeer::DELETED);
            $criteria->addSelectColumn(RefundsPeer::DELETEDBY);
            $criteria->addSelectColumn(RefundsPeer::DELETEDDATE);
            $criteria->addSelectColumn(RefundsPeer::DELETEDTIME);
            $criteria->addSelectColumn(RefundsPeer::ADDEDBY);
            $criteria->addSelectColumn(RefundsPeer::ADDEDDATE);
            $criteria->addSelectColumn(RefundsPeer::ADDEDTIME);
            $criteria->addSelectColumn(RefundsPeer::LASTMODIFIEDBY);
            $criteria->addSelectColumn(RefundsPeer::LASTMODIFIEDDATE);
            $criteria->addSelectColumn(RefundsPeer::LASTMODIFIEDTIME);
        } else {
            $criteria->addSelectColumn($alias . '.refno');
            $criteria->addSelectColumn($alias . '.salerefno');
            $criteria->addSelectColumn($alias . '.customercode');
            $criteria->addSelectColumn($alias . '.locationcode');
            $criteria->addSelectColumn($alias . '.projectcode');
            $criteria->addSelectColumn($alias . '.blockrefnumber');
            $criteria->addSelectColumn($alias . '.payplanrefno');
            $criteria->addSelectColumn($alias . '.refundamount');
            $criteria->addSelectColumn($alias . '.refundate');
            $criteria->addSelectColumn($alias . '.deleted');
            $criteria->addSelectColumn($alias . '.deletedby');
            $criteria->addSelectColumn($alias . '.deleteddate');
            $criteria->addSelectColumn($alias . '.deletedtime');
            $criteria->addSelectColumn($alias . '.addedby');
            $criteria->addSelectColumn($alias . '.addeddate');
            $criteria->addSelectColumn($alias . '.addedtime');
            $criteria->addSelectColumn($alias . '.lastmodifiedby');
            $criteria->addSelectColumn($alias . '.lastmodifieddate');
            $criteria->addSelectColumn($alias . '.lastmodifiedtime');
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
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(RefundsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Refunds
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RefundsPeer::doSelect($critcopy, $con);
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
        return RefundsPeer::populateObjects(RefundsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RefundsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

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
     * @param Refunds $obj A Refunds object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRefno();
            } // if key === null
            RefundsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Refunds object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Refunds) {
                $key = (string) $value->getRefno();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Refunds object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(RefundsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Refunds Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(RefundsPeer::$instances[$key])) {
                return RefundsPeer::$instances[$key];
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
        foreach (RefundsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        RefundsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to refunds
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
        $cls = RefundsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RefundsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RefundsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Refunds object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RefundsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RefundsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RefundsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RefundsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RefundsPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Projectdetails table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProjectdetails(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Project table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProject(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Location table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinLocation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

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
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

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
     * Selects a collection of Refunds objects pre-filled with their Customerdetails objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCustomerdetails(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol = RefundsPeer::NUM_HYDRATE_COLUMNS;
        CustomerdetailsPeer::addSelectColumns($criteria);

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Refunds) to $obj2 (Customerdetails)
                $obj2->addRefunds($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Refunds objects pre-filled with their Projectdetails objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProjectdetails(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol = RefundsPeer::NUM_HYDRATE_COLUMNS;
        ProjectdetailsPeer::addSelectColumns($criteria);

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProjectdetailsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProjectdetailsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectdetailsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProjectdetailsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Refunds) to $obj2 (Projectdetails)
                $obj2->addRefunds($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Refunds objects pre-filled with their Project objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProject(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol = RefundsPeer::NUM_HYDRATE_COLUMNS;
        ProjectPeer::addSelectColumns($criteria);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProjectPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProjectPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProjectPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Refunds) to $obj2 (Project)
                $obj2->addRefunds($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Refunds objects pre-filled with their Location objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLocation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol = RefundsPeer::NUM_HYDRATE_COLUMNS;
        LocationPeer::addSelectColumns($criteria);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = LocationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = LocationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = LocationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    LocationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Refunds) to $obj2 (Location)
                $obj2->addRefunds($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Refunds objects pre-filled with their Sales objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSales(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol = RefundsPeer::NUM_HYDRATE_COLUMNS;
        SalesPeer::addSelectColumns($criteria);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Refunds) to $obj2 (Sales)
                $obj2->addRefunds($obj1);

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
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

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
     * Selects a collection of Refunds objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol2 = RefundsPeer::NUM_HYDRATE_COLUMNS;

        CustomerdetailsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerdetailsPeer::NUM_HYDRATE_COLUMNS;

        ProjectdetailsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectdetailsPeer::NUM_HYDRATE_COLUMNS;

        ProjectPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProjectPeer::NUM_HYDRATE_COLUMNS;

        LocationPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + LocationPeer::NUM_HYDRATE_COLUMNS;

        SalesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + SalesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Refunds) to the collection in $obj2 (Customerdetails)
                $obj2->addRefunds($obj1);
            } // if joined row not null

            // Add objects for joined Projectdetails rows

            $key3 = ProjectdetailsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ProjectdetailsPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ProjectdetailsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectdetailsPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Refunds) to the collection in $obj3 (Projectdetails)
                $obj3->addRefunds($obj1);
            } // if joined row not null

            // Add objects for joined Project rows

            $key4 = ProjectPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ProjectPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ProjectPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProjectPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Refunds) to the collection in $obj4 (Project)
                $obj4->addRefunds($obj1);
            } // if joined row not null

            // Add objects for joined Location rows

            $key5 = LocationPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = LocationPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = LocationPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    LocationPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Refunds) to the collection in $obj5 (Location)
                $obj5->addRefunds($obj1);
            } // if joined row not null

            // Add objects for joined Sales rows

            $key6 = SalesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = SalesPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = SalesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    SalesPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Refunds) to the collection in $obj6 (Sales)
                $obj6->addRefunds($obj1);
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
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Projectdetails table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProjectdetails(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Project table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProject(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Location table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptLocation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);

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
        $criteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

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
     * Selects a collection of Refunds objects pre-filled with all related objects except Customerdetails.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
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
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol2 = RefundsPeer::NUM_HYDRATE_COLUMNS;

        ProjectdetailsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectdetailsPeer::NUM_HYDRATE_COLUMNS;

        ProjectPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectPeer::NUM_HYDRATE_COLUMNS;

        LocationPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + LocationPeer::NUM_HYDRATE_COLUMNS;

        SalesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SalesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Projectdetails rows

                $key2 = ProjectdetailsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProjectdetailsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProjectdetailsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProjectdetailsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj2 (Projectdetails)
                $obj2->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Project rows

                $key3 = ProjectPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj3 (Project)
                $obj3->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Location rows

                $key4 = LocationPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = LocationPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = LocationPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    LocationPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj4 (Location)
                $obj4->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Sales rows

                $key5 = SalesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SalesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = SalesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SalesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj5 (Sales)
                $obj5->addRefunds($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Refunds objects pre-filled with all related objects except Projectdetails.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProjectdetails(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol2 = RefundsPeer::NUM_HYDRATE_COLUMNS;

        CustomerdetailsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerdetailsPeer::NUM_HYDRATE_COLUMNS;

        ProjectPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectPeer::NUM_HYDRATE_COLUMNS;

        LocationPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + LocationPeer::NUM_HYDRATE_COLUMNS;

        SalesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SalesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Refunds) to the collection in $obj2 (Customerdetails)
                $obj2->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Project rows

                $key3 = ProjectPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj3 (Project)
                $obj3->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Location rows

                $key4 = LocationPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = LocationPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = LocationPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    LocationPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj4 (Location)
                $obj4->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Sales rows

                $key5 = SalesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SalesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = SalesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SalesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj5 (Sales)
                $obj5->addRefunds($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Refunds objects pre-filled with all related objects except Project.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProject(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol2 = RefundsPeer::NUM_HYDRATE_COLUMNS;

        CustomerdetailsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerdetailsPeer::NUM_HYDRATE_COLUMNS;

        ProjectdetailsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectdetailsPeer::NUM_HYDRATE_COLUMNS;

        LocationPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + LocationPeer::NUM_HYDRATE_COLUMNS;

        SalesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SalesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Refunds) to the collection in $obj2 (Customerdetails)
                $obj2->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Projectdetails rows

                $key3 = ProjectdetailsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectdetailsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectdetailsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectdetailsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj3 (Projectdetails)
                $obj3->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Location rows

                $key4 = LocationPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = LocationPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = LocationPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    LocationPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj4 (Location)
                $obj4->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Sales rows

                $key5 = SalesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SalesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = SalesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SalesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj5 (Sales)
                $obj5->addRefunds($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Refunds objects pre-filled with all related objects except Location.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptLocation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol2 = RefundsPeer::NUM_HYDRATE_COLUMNS;

        CustomerdetailsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerdetailsPeer::NUM_HYDRATE_COLUMNS;

        ProjectdetailsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectdetailsPeer::NUM_HYDRATE_COLUMNS;

        ProjectPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProjectPeer::NUM_HYDRATE_COLUMNS;

        SalesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SalesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::SALEREFNO, SalesPeer::REFNO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Refunds) to the collection in $obj2 (Customerdetails)
                $obj2->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Projectdetails rows

                $key3 = ProjectdetailsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectdetailsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectdetailsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectdetailsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj3 (Projectdetails)
                $obj3->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Project rows

                $key4 = ProjectPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProjectPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProjectPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProjectPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj4 (Project)
                $obj4->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Sales rows

                $key5 = SalesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SalesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = SalesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SalesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj5 (Sales)
                $obj5->addRefunds($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Refunds objects pre-filled with all related objects except Sales.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Refunds objects.
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
            $criteria->setDbName(RefundsPeer::DATABASE_NAME);
        }

        RefundsPeer::addSelectColumns($criteria);
        $startcol2 = RefundsPeer::NUM_HYDRATE_COLUMNS;

        CustomerdetailsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerdetailsPeer::NUM_HYDRATE_COLUMNS;

        ProjectdetailsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectdetailsPeer::NUM_HYDRATE_COLUMNS;

        ProjectPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProjectPeer::NUM_HYDRATE_COLUMNS;

        LocationPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + LocationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RefundsPeer::CUSTOMERCODE, CustomerdetailsPeer::CUSTOMERCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::BLOCKREFNUMBER, ProjectdetailsPeer::REFNO, $join_behavior);

        $criteria->addJoin(RefundsPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $criteria->addJoin(RefundsPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RefundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RefundsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RefundsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RefundsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Refunds) to the collection in $obj2 (Customerdetails)
                $obj2->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Projectdetails rows

                $key3 = ProjectdetailsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectdetailsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectdetailsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectdetailsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj3 (Projectdetails)
                $obj3->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Project rows

                $key4 = ProjectPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProjectPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProjectPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProjectPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj4 (Project)
                $obj4->addRefunds($obj1);

            } // if joined row is not null

                // Add objects for joined Location rows

                $key5 = LocationPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = LocationPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = LocationPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    LocationPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Refunds) to the collection in $obj5 (Location)
                $obj5->addRefunds($obj1);

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
        return Propel::getDatabaseMap(RefundsPeer::DATABASE_NAME)->getTable(RefundsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseRefundsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseRefundsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \RefundsTableMap());
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
        return RefundsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Refunds or Criteria object.
     *
     * @param      mixed $values Criteria or Refunds object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Refunds object
        }

        if ($criteria->containsKey(RefundsPeer::REFNO) && $criteria->keyContainsValue(RefundsPeer::REFNO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RefundsPeer::REFNO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Refunds or Criteria object.
     *
     * @param      mixed $values Criteria or Refunds object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(RefundsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RefundsPeer::REFNO);
            $value = $criteria->remove(RefundsPeer::REFNO);
            if ($value) {
                $selectCriteria->add(RefundsPeer::REFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RefundsPeer::TABLE_NAME);
            }

        } else { // $values is Refunds object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the refunds table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(RefundsPeer::TABLE_NAME, $con, RefundsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RefundsPeer::clearInstancePool();
            RefundsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Refunds or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Refunds object or primary key or array of primary keys
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
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            RefundsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Refunds) { // it's a model object
            // invalidate the cache for this single object
            RefundsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RefundsPeer::DATABASE_NAME);
            $criteria->add(RefundsPeer::REFNO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                RefundsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(RefundsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            RefundsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Refunds object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Refunds $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RefundsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RefundsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(RefundsPeer::DATABASE_NAME, RefundsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Refunds
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RefundsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RefundsPeer::DATABASE_NAME);
        $criteria->add(RefundsPeer::REFNO, $pk);

        $v = RefundsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Refunds[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RefundsPeer::DATABASE_NAME);
            $criteria->add(RefundsPeer::REFNO, $pks, Criteria::IN);
            $objs = RefundsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseRefundsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRefundsPeer::buildTableMap();

