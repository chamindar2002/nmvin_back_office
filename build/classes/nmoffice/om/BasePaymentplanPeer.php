<?php


/**
 * Base static class for performing query and update operations on the 'paymentplan' table.
 *
 * payment plans for houses in a project
 *
 * @package propel.generator.nmoffice.om
 */
abstract class BasePaymentplanPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'nmwndb';

    /** the table name for this class */
    const TABLE_NAME = 'paymentplan';

    /** the related Propel class for this table */
    const OM_CLASS = 'Paymentplan';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PaymentplanTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 24;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 24;

    /** the column name for the refno field */
    const REFNO = 'paymentplan.refno';

    /** the column name for the projectcode field */
    const PROJECTCODE = 'paymentplan.projectcode';

    /** the column name for the nofinstallments field */
    const NOFINSTALLMENTS = 'paymentplan.nofinstallments';

    /** the column name for the description field */
    const DESCRIPTION = 'paymentplan.description';

    /** the column name for the installamount field */
    const INSTALLAMOUNT = 'paymentplan.installamount';

    /** the column name for the rsvfee field */
    const RSVFEE = 'paymentplan.rsvfee';

    /** the column name for the downpayment field */
    const DOWNPAYMENT = 'paymentplan.downpayment';

    /** the column name for the bankloan field */
    const BANKLOAN = 'paymentplan.bankloan';

    /** the column name for the adtnlland field */
    const ADTNLLAND = 'paymentplan.adtnlland';

    /** the column name for the totalpayable field */
    const TOTALPAYABLE = 'paymentplan.totalpayable';

    /** the column name for the deleted field */
    const DELETED = 'paymentplan.deleted';

    /** the column name for the addedby field */
    const ADDEDBY = 'paymentplan.addedby';

    /** the column name for the addeddate field */
    const ADDEDDATE = 'paymentplan.addeddate';

    /** the column name for the addedtime field */
    const ADDEDTIME = 'paymentplan.addedtime';

    /** the column name for the lastmodifiedby field */
    const LASTMODIFIEDBY = 'paymentplan.lastmodifiedby';

    /** the column name for the lastmodifieddate field */
    const LASTMODIFIEDDATE = 'paymentplan.lastmodifieddate';

    /** the column name for the lastmodifiedtime field */
    const LASTMODIFIEDTIME = 'paymentplan.lastmodifiedtime';

    /** the column name for the deletedby field */
    const DELETEDBY = 'paymentplan.deletedby';

    /** the column name for the deleteddate field */
    const DELETEDDATE = 'paymentplan.deleteddate';

    /** the column name for the deletedtime field */
    const DELETEDTIME = 'paymentplan.deletedtime';

    /** the column name for the devechargers1 field */
    const DEVECHARGERS1 = 'paymentplan.devechargers1';

    /** the column name for the devechargers2 field */
    const DEVECHARGERS2 = 'paymentplan.devechargers2';

    /** the column name for the infrastructure field */
    const INFRASTRUCTURE = 'paymentplan.infrastructure';

    /** the column name for the occupation field */
    const OCCUPATION = 'paymentplan.occupation';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Paymentplan objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Paymentplan[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PaymentplanPeer::$fieldNames[PaymentplanPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Refno', 'Projectcode', 'Nofinstallments', 'Description', 'Installamount', 'Rsvfee', 'Downpayment', 'Bankloan', 'Adtnlland', 'Totalpayable', 'Deleted', 'Addedby', 'Addeddate', 'Addedtime', 'Lastmodifiedby', 'Lastmodifieddate', 'Lastmodifiedtime', 'Deletedby', 'Deleteddate', 'Deletedtime', 'Devechargers1', 'Devechargers2', 'Infrastructure', 'Occupation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('refno', 'projectcode', 'nofinstallments', 'description', 'installamount', 'rsvfee', 'downpayment', 'bankloan', 'adtnlland', 'totalpayable', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', 'devechargers1', 'devechargers2', 'infrastructure', 'occupation', ),
        BasePeer::TYPE_COLNAME => array (PaymentplanPeer::REFNO, PaymentplanPeer::PROJECTCODE, PaymentplanPeer::NOFINSTALLMENTS, PaymentplanPeer::DESCRIPTION, PaymentplanPeer::INSTALLAMOUNT, PaymentplanPeer::RSVFEE, PaymentplanPeer::DOWNPAYMENT, PaymentplanPeer::BANKLOAN, PaymentplanPeer::ADTNLLAND, PaymentplanPeer::TOTALPAYABLE, PaymentplanPeer::DELETED, PaymentplanPeer::ADDEDBY, PaymentplanPeer::ADDEDDATE, PaymentplanPeer::ADDEDTIME, PaymentplanPeer::LASTMODIFIEDBY, PaymentplanPeer::LASTMODIFIEDDATE, PaymentplanPeer::LASTMODIFIEDTIME, PaymentplanPeer::DELETEDBY, PaymentplanPeer::DELETEDDATE, PaymentplanPeer::DELETEDTIME, PaymentplanPeer::DEVECHARGERS1, PaymentplanPeer::DEVECHARGERS2, PaymentplanPeer::INFRASTRUCTURE, PaymentplanPeer::OCCUPATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFNO', 'PROJECTCODE', 'NOFINSTALLMENTS', 'DESCRIPTION', 'INSTALLAMOUNT', 'RSVFEE', 'DOWNPAYMENT', 'BANKLOAN', 'ADTNLLAND', 'TOTALPAYABLE', 'DELETED', 'ADDEDBY', 'ADDEDDATE', 'ADDEDTIME', 'LASTMODIFIEDBY', 'LASTMODIFIEDDATE', 'LASTMODIFIEDTIME', 'DELETEDBY', 'DELETEDDATE', 'DELETEDTIME', 'DEVECHARGERS1', 'DEVECHARGERS2', 'INFRASTRUCTURE', 'OCCUPATION', ),
        BasePeer::TYPE_FIELDNAME => array ('refno', 'projectcode', 'nofinstallments', 'description', 'installamount', 'rsvfee', 'downpayment', 'bankloan', 'adtnlland', 'totalpayable', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', 'devechargers1', 'devechargers2', 'infrastructure', 'occupation', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PaymentplanPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Refno' => 0, 'Projectcode' => 1, 'Nofinstallments' => 2, 'Description' => 3, 'Installamount' => 4, 'Rsvfee' => 5, 'Downpayment' => 6, 'Bankloan' => 7, 'Adtnlland' => 8, 'Totalpayable' => 9, 'Deleted' => 10, 'Addedby' => 11, 'Addeddate' => 12, 'Addedtime' => 13, 'Lastmodifiedby' => 14, 'Lastmodifieddate' => 15, 'Lastmodifiedtime' => 16, 'Deletedby' => 17, 'Deleteddate' => 18, 'Deletedtime' => 19, 'Devechargers1' => 20, 'Devechargers2' => 21, 'Infrastructure' => 22, 'Occupation' => 23, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('refno' => 0, 'projectcode' => 1, 'nofinstallments' => 2, 'description' => 3, 'installamount' => 4, 'rsvfee' => 5, 'downpayment' => 6, 'bankloan' => 7, 'adtnlland' => 8, 'totalpayable' => 9, 'deleted' => 10, 'addedby' => 11, 'addeddate' => 12, 'addedtime' => 13, 'lastmodifiedby' => 14, 'lastmodifieddate' => 15, 'lastmodifiedtime' => 16, 'deletedby' => 17, 'deleteddate' => 18, 'deletedtime' => 19, 'devechargers1' => 20, 'devechargers2' => 21, 'infrastructure' => 22, 'occupation' => 23, ),
        BasePeer::TYPE_COLNAME => array (PaymentplanPeer::REFNO => 0, PaymentplanPeer::PROJECTCODE => 1, PaymentplanPeer::NOFINSTALLMENTS => 2, PaymentplanPeer::DESCRIPTION => 3, PaymentplanPeer::INSTALLAMOUNT => 4, PaymentplanPeer::RSVFEE => 5, PaymentplanPeer::DOWNPAYMENT => 6, PaymentplanPeer::BANKLOAN => 7, PaymentplanPeer::ADTNLLAND => 8, PaymentplanPeer::TOTALPAYABLE => 9, PaymentplanPeer::DELETED => 10, PaymentplanPeer::ADDEDBY => 11, PaymentplanPeer::ADDEDDATE => 12, PaymentplanPeer::ADDEDTIME => 13, PaymentplanPeer::LASTMODIFIEDBY => 14, PaymentplanPeer::LASTMODIFIEDDATE => 15, PaymentplanPeer::LASTMODIFIEDTIME => 16, PaymentplanPeer::DELETEDBY => 17, PaymentplanPeer::DELETEDDATE => 18, PaymentplanPeer::DELETEDTIME => 19, PaymentplanPeer::DEVECHARGERS1 => 20, PaymentplanPeer::DEVECHARGERS2 => 21, PaymentplanPeer::INFRASTRUCTURE => 22, PaymentplanPeer::OCCUPATION => 23, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFNO' => 0, 'PROJECTCODE' => 1, 'NOFINSTALLMENTS' => 2, 'DESCRIPTION' => 3, 'INSTALLAMOUNT' => 4, 'RSVFEE' => 5, 'DOWNPAYMENT' => 6, 'BANKLOAN' => 7, 'ADTNLLAND' => 8, 'TOTALPAYABLE' => 9, 'DELETED' => 10, 'ADDEDBY' => 11, 'ADDEDDATE' => 12, 'ADDEDTIME' => 13, 'LASTMODIFIEDBY' => 14, 'LASTMODIFIEDDATE' => 15, 'LASTMODIFIEDTIME' => 16, 'DELETEDBY' => 17, 'DELETEDDATE' => 18, 'DELETEDTIME' => 19, 'DEVECHARGERS1' => 20, 'DEVECHARGERS2' => 21, 'INFRASTRUCTURE' => 22, 'OCCUPATION' => 23, ),
        BasePeer::TYPE_FIELDNAME => array ('refno' => 0, 'projectcode' => 1, 'nofinstallments' => 2, 'description' => 3, 'installamount' => 4, 'rsvfee' => 5, 'downpayment' => 6, 'bankloan' => 7, 'adtnlland' => 8, 'totalpayable' => 9, 'deleted' => 10, 'addedby' => 11, 'addeddate' => 12, 'addedtime' => 13, 'lastmodifiedby' => 14, 'lastmodifieddate' => 15, 'lastmodifiedtime' => 16, 'deletedby' => 17, 'deleteddate' => 18, 'deletedtime' => 19, 'devechargers1' => 20, 'devechargers2' => 21, 'infrastructure' => 22, 'occupation' => 23, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
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
        $toNames = PaymentplanPeer::getFieldNames($toType);
        $key = isset(PaymentplanPeer::$fieldKeys[$fromType][$name]) ? PaymentplanPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PaymentplanPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PaymentplanPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PaymentplanPeer::$fieldNames[$type];
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
     * @return string
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
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(PaymentplanPeer::REFNO);
            $criteria->addSelectColumn(PaymentplanPeer::PROJECTCODE);
            $criteria->addSelectColumn(PaymentplanPeer::NOFINSTALLMENTS);
            $criteria->addSelectColumn(PaymentplanPeer::DESCRIPTION);
            $criteria->addSelectColumn(PaymentplanPeer::INSTALLAMOUNT);
            $criteria->addSelectColumn(PaymentplanPeer::RSVFEE);
            $criteria->addSelectColumn(PaymentplanPeer::DOWNPAYMENT);
            $criteria->addSelectColumn(PaymentplanPeer::BANKLOAN);
            $criteria->addSelectColumn(PaymentplanPeer::ADTNLLAND);
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
            $criteria->addSelectColumn(PaymentplanPeer::DEVECHARGERS1);
            $criteria->addSelectColumn(PaymentplanPeer::DEVECHARGERS2);
            $criteria->addSelectColumn(PaymentplanPeer::INFRASTRUCTURE);
            $criteria->addSelectColumn(PaymentplanPeer::OCCUPATION);
        } else {
            $criteria->addSelectColumn($alias . '.refno');
            $criteria->addSelectColumn($alias . '.projectcode');
            $criteria->addSelectColumn($alias . '.nofinstallments');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.installamount');
            $criteria->addSelectColumn($alias . '.rsvfee');
            $criteria->addSelectColumn($alias . '.downpayment');
            $criteria->addSelectColumn($alias . '.bankloan');
            $criteria->addSelectColumn($alias . '.adtnlland');
            $criteria->addSelectColumn($alias . '.totalpayable');
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
            $criteria->addSelectColumn($alias . '.devechargers1');
            $criteria->addSelectColumn($alias . '.devechargers2');
            $criteria->addSelectColumn($alias . '.infrastructure');
            $criteria->addSelectColumn($alias . '.occupation');
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
        $criteria->setPrimaryTableName(PaymentplanPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PaymentplanPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PaymentplanPeer::DATABASE_NAME); // Set the correct dbName

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
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Paymentplan
     * @throws PropelException Any exceptions caught during processing will be
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
        return PaymentplanPeer::populateObjects(PaymentplanPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PaymentplanPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PaymentplanPeer::DATABASE_NAME);

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
     * @param Paymentplan $obj A Paymentplan object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRefno();
            } // if key === null
            PaymentplanPeer::$instances[$key] = $obj;
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
     *
     * @return void
     * @throws PropelException - if the value is invalid.
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

            unset(PaymentplanPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Paymentplan Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PaymentplanPeer::$instances[$key])) {
                return PaymentplanPeer::$instances[$key];
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
        foreach (PaymentplanPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PaymentplanPeer::$instances = array();
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
        $cls = PaymentplanPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PaymentplanPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PaymentplanPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
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
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Paymentplan object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PaymentplanPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PaymentplanPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PaymentplanPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PaymentplanPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PaymentplanPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(PaymentplanPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PaymentplanPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PaymentplanPeer::DATABASE_NAME);

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
     * @return array           Array of Paymentplan objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProject(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PaymentplanPeer::DATABASE_NAME);
        }

        PaymentplanPeer::addSelectColumns($criteria);
        $startcol = PaymentplanPeer::NUM_HYDRATE_COLUMNS;
        ProjectPeer::addSelectColumns($criteria);

        $criteria->addJoin(PaymentplanPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PaymentplanPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PaymentplanPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PaymentplanPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PaymentplanPeer::addInstanceToPool($obj1, $key1);
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
     * @return int Number of matching rows.
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
        $criteria->setDbName(PaymentplanPeer::DATABASE_NAME);

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
     * @return array           Array of Paymentplan objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PaymentplanPeer::DATABASE_NAME);
        }

        PaymentplanPeer::addSelectColumns($criteria);
        $startcol2 = PaymentplanPeer::NUM_HYDRATE_COLUMNS;

        ProjectPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PaymentplanPeer::PROJECTCODE, ProjectPeer::PROJECTCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PaymentplanPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PaymentplanPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PaymentplanPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PaymentplanPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Project rows

            $key2 = ProjectPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ProjectPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectPeer::getOMClass();

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
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(PaymentplanPeer::DATABASE_NAME)->getTable(PaymentplanPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePaymentplanPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePaymentplanPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PaymentplanTableMap());
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
        return PaymentplanPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Paymentplan or Criteria object.
     *
     * @param      mixed $values Criteria or Paymentplan object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
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
        $criteria->setDbName(PaymentplanPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Paymentplan or Criteria object.
     *
     * @param      mixed $values Criteria or Paymentplan object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PaymentplanPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PaymentplanPeer::REFNO);
            $value = $criteria->remove(PaymentplanPeer::REFNO);
            if ($value) {
                $selectCriteria->add(PaymentplanPeer::REFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PaymentplanPeer::TABLE_NAME);
            }

        } else { // $values is Paymentplan object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PaymentplanPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the paymentplan table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PaymentplanPeer::TABLE_NAME, $con, PaymentplanPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PaymentplanPeer::clearInstancePool();
            PaymentplanPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Paymentplan or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Paymentplan object or primary key or array of primary keys
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
            $con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PaymentplanPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Paymentplan) { // it's a model object
            // invalidate the cache for this single object
            PaymentplanPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PaymentplanPeer::DATABASE_NAME);
            $criteria->add(PaymentplanPeer::REFNO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PaymentplanPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PaymentplanPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PaymentplanPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
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
     * @param Paymentplan $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PaymentplanPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PaymentplanPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PaymentplanPeer::DATABASE_NAME, PaymentplanPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Paymentplan
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
     * @return Paymentplan[]
     * @throws PropelException Any exceptions caught during processing will be
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

