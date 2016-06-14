<?php


/**
 * Base static class for performing query and update operations on the 'customer_receiptmethodofpayment' table.
 *
 * Receipt -Method of payment
 *
 * @package propel.generator.nmoffice.om
 */
abstract class BaseCustomerReceiptmethodofpaymentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'nmwndb';

    /** the table name for this class */
    const TABLE_NAME = 'customer_receiptmethodofpayment';

    /** the related Propel class for this table */
    const OM_CLASS = 'CustomerReceiptmethodofpayment';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CustomerReceiptmethodofpaymentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the refno field */
    const REFNO = 'customer_receiptmethodofpayment.refno';

    /** the column name for the receiptno field */
    const RECEIPTNO = 'customer_receiptmethodofpayment.receiptno';

    /** the column name for the receiptstatus field */
    const RECEIPTSTATUS = 'customer_receiptmethodofpayment.receiptstatus';

    /** the column name for the bank field */
    const BANK = 'customer_receiptmethodofpayment.bank';

    /** the column name for the chequnumber field */
    const CHEQUNUMBER = 'customer_receiptmethodofpayment.chequnumber';

    /** the column name for the chequedate field */
    const CHEQUEDATE = 'customer_receiptmethodofpayment.chequedate';

    /** the column name for the amount field */
    const AMOUNT = 'customer_receiptmethodofpayment.amount';

    /** the column name for the deleted field */
    const DELETED = 'customer_receiptmethodofpayment.deleted';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CustomerReceiptmethodofpayment objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CustomerReceiptmethodofpayment[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CustomerReceiptmethodofpaymentPeer::$fieldNames[CustomerReceiptmethodofpaymentPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Refno', 'Receiptno', 'Receiptstatus', 'Bank', 'Chequnumber', 'Chequedate', 'Amount', 'Deleted', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('refno', 'receiptno', 'receiptstatus', 'bank', 'chequnumber', 'chequedate', 'amount', 'deleted', ),
        BasePeer::TYPE_COLNAME => array (CustomerReceiptmethodofpaymentPeer::REFNO, CustomerReceiptmethodofpaymentPeer::RECEIPTNO, CustomerReceiptmethodofpaymentPeer::RECEIPTSTATUS, CustomerReceiptmethodofpaymentPeer::BANK, CustomerReceiptmethodofpaymentPeer::CHEQUNUMBER, CustomerReceiptmethodofpaymentPeer::CHEQUEDATE, CustomerReceiptmethodofpaymentPeer::AMOUNT, CustomerReceiptmethodofpaymentPeer::DELETED, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFNO', 'RECEIPTNO', 'RECEIPTSTATUS', 'BANK', 'CHEQUNUMBER', 'CHEQUEDATE', 'AMOUNT', 'DELETED', ),
        BasePeer::TYPE_FIELDNAME => array ('refno', 'receiptno', 'receiptstatus', 'bank', 'chequnumber', 'chequedate', 'amount', 'deleted', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CustomerReceiptmethodofpaymentPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Refno' => 0, 'Receiptno' => 1, 'Receiptstatus' => 2, 'Bank' => 3, 'Chequnumber' => 4, 'Chequedate' => 5, 'Amount' => 6, 'Deleted' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('refno' => 0, 'receiptno' => 1, 'receiptstatus' => 2, 'bank' => 3, 'chequnumber' => 4, 'chequedate' => 5, 'amount' => 6, 'deleted' => 7, ),
        BasePeer::TYPE_COLNAME => array (CustomerReceiptmethodofpaymentPeer::REFNO => 0, CustomerReceiptmethodofpaymentPeer::RECEIPTNO => 1, CustomerReceiptmethodofpaymentPeer::RECEIPTSTATUS => 2, CustomerReceiptmethodofpaymentPeer::BANK => 3, CustomerReceiptmethodofpaymentPeer::CHEQUNUMBER => 4, CustomerReceiptmethodofpaymentPeer::CHEQUEDATE => 5, CustomerReceiptmethodofpaymentPeer::AMOUNT => 6, CustomerReceiptmethodofpaymentPeer::DELETED => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFNO' => 0, 'RECEIPTNO' => 1, 'RECEIPTSTATUS' => 2, 'BANK' => 3, 'CHEQUNUMBER' => 4, 'CHEQUEDATE' => 5, 'AMOUNT' => 6, 'DELETED' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('refno' => 0, 'receiptno' => 1, 'receiptstatus' => 2, 'bank' => 3, 'chequnumber' => 4, 'chequedate' => 5, 'amount' => 6, 'deleted' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
        $toNames = CustomerReceiptmethodofpaymentPeer::getFieldNames($toType);
        $key = isset(CustomerReceiptmethodofpaymentPeer::$fieldKeys[$fromType][$name]) ? CustomerReceiptmethodofpaymentPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CustomerReceiptmethodofpaymentPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CustomerReceiptmethodofpaymentPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CustomerReceiptmethodofpaymentPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CustomerReceiptmethodofpaymentPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CustomerReceiptmethodofpaymentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CustomerReceiptmethodofpaymentPeer::REFNO);
            $criteria->addSelectColumn(CustomerReceiptmethodofpaymentPeer::RECEIPTNO);
            $criteria->addSelectColumn(CustomerReceiptmethodofpaymentPeer::RECEIPTSTATUS);
            $criteria->addSelectColumn(CustomerReceiptmethodofpaymentPeer::BANK);
            $criteria->addSelectColumn(CustomerReceiptmethodofpaymentPeer::CHEQUNUMBER);
            $criteria->addSelectColumn(CustomerReceiptmethodofpaymentPeer::CHEQUEDATE);
            $criteria->addSelectColumn(CustomerReceiptmethodofpaymentPeer::AMOUNT);
            $criteria->addSelectColumn(CustomerReceiptmethodofpaymentPeer::DELETED);
        } else {
            $criteria->addSelectColumn($alias . '.refno');
            $criteria->addSelectColumn($alias . '.receiptno');
            $criteria->addSelectColumn($alias . '.receiptstatus');
            $criteria->addSelectColumn($alias . '.bank');
            $criteria->addSelectColumn($alias . '.chequnumber');
            $criteria->addSelectColumn($alias . '.chequedate');
            $criteria->addSelectColumn($alias . '.amount');
            $criteria->addSelectColumn($alias . '.deleted');
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
        $criteria->setPrimaryTableName(CustomerReceiptmethodofpaymentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CustomerReceiptmethodofpaymentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return CustomerReceiptmethodofpayment
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CustomerReceiptmethodofpaymentPeer::doSelect($critcopy, $con);
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
        return CustomerReceiptmethodofpaymentPeer::populateObjects(CustomerReceiptmethodofpaymentPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CustomerReceiptmethodofpaymentPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);

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
     * @param CustomerReceiptmethodofpayment $obj A CustomerReceiptmethodofpayment object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRefno();
            } // if key === null
            CustomerReceiptmethodofpaymentPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CustomerReceiptmethodofpayment object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CustomerReceiptmethodofpayment) {
                $key = (string) $value->getRefno();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CustomerReceiptmethodofpayment object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CustomerReceiptmethodofpaymentPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return CustomerReceiptmethodofpayment Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CustomerReceiptmethodofpaymentPeer::$instances[$key])) {
                return CustomerReceiptmethodofpaymentPeer::$instances[$key];
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
        foreach (CustomerReceiptmethodofpaymentPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CustomerReceiptmethodofpaymentPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to customer_receiptmethodofpayment
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
        $cls = CustomerReceiptmethodofpaymentPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CustomerReceiptmethodofpaymentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CustomerReceiptmethodofpaymentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CustomerReceiptmethodofpaymentPeer::addInstanceToPool($obj, $key);
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
     * @return array (CustomerReceiptmethodofpayment object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CustomerReceiptmethodofpaymentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CustomerReceiptmethodofpaymentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CustomerReceiptmethodofpaymentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CustomerReceiptmethodofpaymentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CustomerReceiptmethodofpaymentPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Customerreceipts table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCustomerreceipts(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CustomerReceiptmethodofpaymentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CustomerReceiptmethodofpaymentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CustomerReceiptmethodofpaymentPeer::RECEIPTNO, CustomerreceiptsPeer::RECEIPTNO, $join_behavior);

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
     * Selects a collection of CustomerReceiptmethodofpayment objects pre-filled with their Customerreceipts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CustomerReceiptmethodofpayment objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCustomerreceipts(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);
        }

        CustomerReceiptmethodofpaymentPeer::addSelectColumns($criteria);
        $startcol = CustomerReceiptmethodofpaymentPeer::NUM_HYDRATE_COLUMNS;
        CustomerreceiptsPeer::addSelectColumns($criteria);

        $criteria->addJoin(CustomerReceiptmethodofpaymentPeer::RECEIPTNO, CustomerreceiptsPeer::RECEIPTNO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CustomerReceiptmethodofpaymentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CustomerReceiptmethodofpaymentPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CustomerReceiptmethodofpaymentPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CustomerReceiptmethodofpaymentPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CustomerreceiptsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CustomerreceiptsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CustomerreceiptsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CustomerreceiptsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CustomerReceiptmethodofpayment) to $obj2 (Customerreceipts)
                $obj2->addCustomerReceiptmethodofpayment($obj1);

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
        $criteria->setPrimaryTableName(CustomerReceiptmethodofpaymentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CustomerReceiptmethodofpaymentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CustomerReceiptmethodofpaymentPeer::RECEIPTNO, CustomerreceiptsPeer::RECEIPTNO, $join_behavior);

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
     * Selects a collection of CustomerReceiptmethodofpayment objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CustomerReceiptmethodofpayment objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);
        }

        CustomerReceiptmethodofpaymentPeer::addSelectColumns($criteria);
        $startcol2 = CustomerReceiptmethodofpaymentPeer::NUM_HYDRATE_COLUMNS;

        CustomerreceiptsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerreceiptsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CustomerReceiptmethodofpaymentPeer::RECEIPTNO, CustomerreceiptsPeer::RECEIPTNO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CustomerReceiptmethodofpaymentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CustomerReceiptmethodofpaymentPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CustomerReceiptmethodofpaymentPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CustomerReceiptmethodofpaymentPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Customerreceipts rows

            $key2 = CustomerreceiptsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CustomerreceiptsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CustomerreceiptsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CustomerreceiptsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CustomerReceiptmethodofpayment) to the collection in $obj2 (Customerreceipts)
                $obj2->addCustomerReceiptmethodofpayment($obj1);
            } // if joined row not null

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
        return Propel::getDatabaseMap(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME)->getTable(CustomerReceiptmethodofpaymentPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCustomerReceiptmethodofpaymentPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCustomerReceiptmethodofpaymentPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CustomerReceiptmethodofpaymentTableMap());
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
        return CustomerReceiptmethodofpaymentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CustomerReceiptmethodofpayment or Criteria object.
     *
     * @param      mixed $values Criteria or CustomerReceiptmethodofpayment object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CustomerReceiptmethodofpayment object
        }

        if ($criteria->containsKey(CustomerReceiptmethodofpaymentPeer::REFNO) && $criteria->keyContainsValue(CustomerReceiptmethodofpaymentPeer::REFNO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CustomerReceiptmethodofpaymentPeer::REFNO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CustomerReceiptmethodofpayment or Criteria object.
     *
     * @param      mixed $values Criteria or CustomerReceiptmethodofpayment object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CustomerReceiptmethodofpaymentPeer::REFNO);
            $value = $criteria->remove(CustomerReceiptmethodofpaymentPeer::REFNO);
            if ($value) {
                $selectCriteria->add(CustomerReceiptmethodofpaymentPeer::REFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CustomerReceiptmethodofpaymentPeer::TABLE_NAME);
            }

        } else { // $values is CustomerReceiptmethodofpayment object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the customer_receiptmethodofpayment table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CustomerReceiptmethodofpaymentPeer::TABLE_NAME, $con, CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerReceiptmethodofpaymentPeer::clearInstancePool();
            CustomerReceiptmethodofpaymentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CustomerReceiptmethodofpayment or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CustomerReceiptmethodofpayment object or primary key or array of primary keys
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
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CustomerReceiptmethodofpaymentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CustomerReceiptmethodofpayment) { // it's a model object
            // invalidate the cache for this single object
            CustomerReceiptmethodofpaymentPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);
            $criteria->add(CustomerReceiptmethodofpaymentPeer::REFNO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CustomerReceiptmethodofpaymentPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CustomerReceiptmethodofpaymentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CustomerReceiptmethodofpayment object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param CustomerReceiptmethodofpayment $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CustomerReceiptmethodofpaymentPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, CustomerReceiptmethodofpaymentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CustomerReceiptmethodofpayment
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CustomerReceiptmethodofpaymentPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);
        $criteria->add(CustomerReceiptmethodofpaymentPeer::REFNO, $pk);

        $v = CustomerReceiptmethodofpaymentPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CustomerReceiptmethodofpayment[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME);
            $criteria->add(CustomerReceiptmethodofpaymentPeer::REFNO, $pks, Criteria::IN);
            $objs = CustomerReceiptmethodofpaymentPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCustomerReceiptmethodofpaymentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCustomerReceiptmethodofpaymentPeer::buildTableMap();

