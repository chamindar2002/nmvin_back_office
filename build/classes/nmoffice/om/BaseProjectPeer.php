<?php


/**
 * Base static class for performing query and update operations on the 'project' table.
 *
 * projects
 *
 * @package propel.generator.nmoffice.om
 */
abstract class BaseProjectPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'nmwndb';

    /** the table name for this class */
    const TABLE_NAME = 'project';

    /** the related Propel class for this table */
    const OM_CLASS = 'Project';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ProjectTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the projectcode field */
    const PROJECTCODE = 'project.projectcode';

    /** the column name for the locationcode field */
    const LOCATIONCODE = 'project.locationcode';

    /** the column name for the projectname field */
    const PROJECTNAME = 'project.projectname';

    /** the column name for the nofblocks field */
    const NOFBLOCKS = 'project.nofblocks';

    /** the column name for the deleted field */
    const DELETED = 'project.deleted';

    /** the column name for the addedby field */
    const ADDEDBY = 'project.addedby';

    /** the column name for the addeddate field */
    const ADDEDDATE = 'project.addeddate';

    /** the column name for the addedtime field */
    const ADDEDTIME = 'project.addedtime';

    /** the column name for the lastmodifiedby field */
    const LASTMODIFIEDBY = 'project.lastmodifiedby';

    /** the column name for the lastmodifieddate field */
    const LASTMODIFIEDDATE = 'project.lastmodifieddate';

    /** the column name for the lastmodifiedtime field */
    const LASTMODIFIEDTIME = 'project.lastmodifiedtime';

    /** the column name for the deletedby field */
    const DELETEDBY = 'project.deletedby';

    /** the column name for the deleteddate field */
    const DELETEDDATE = 'project.deleteddate';

    /** the column name for the deletedtime field */
    const DELETEDTIME = 'project.deletedtime';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Project objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Project[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProjectPeer::$fieldNames[ProjectPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Projectcode', 'Locationcode', 'Projectname', 'Nofblocks', 'Deleted', 'Addedby', 'Addeddate', 'Addedtime', 'Lastmodifiedby', 'Lastmodifieddate', 'Lastmodifiedtime', 'Deletedby', 'Deleteddate', 'Deletedtime', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('projectcode', 'locationcode', 'projectname', 'nofblocks', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
        BasePeer::TYPE_COLNAME => array (ProjectPeer::PROJECTCODE, ProjectPeer::LOCATIONCODE, ProjectPeer::PROJECTNAME, ProjectPeer::NOFBLOCKS, ProjectPeer::DELETED, ProjectPeer::ADDEDBY, ProjectPeer::ADDEDDATE, ProjectPeer::ADDEDTIME, ProjectPeer::LASTMODIFIEDBY, ProjectPeer::LASTMODIFIEDDATE, ProjectPeer::LASTMODIFIEDTIME, ProjectPeer::DELETEDBY, ProjectPeer::DELETEDDATE, ProjectPeer::DELETEDTIME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PROJECTCODE', 'LOCATIONCODE', 'PROJECTNAME', 'NOFBLOCKS', 'DELETED', 'ADDEDBY', 'ADDEDDATE', 'ADDEDTIME', 'LASTMODIFIEDBY', 'LASTMODIFIEDDATE', 'LASTMODIFIEDTIME', 'DELETEDBY', 'DELETEDDATE', 'DELETEDTIME', ),
        BasePeer::TYPE_FIELDNAME => array ('projectcode', 'locationcode', 'projectname', 'nofblocks', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProjectPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Projectcode' => 0, 'Locationcode' => 1, 'Projectname' => 2, 'Nofblocks' => 3, 'Deleted' => 4, 'Addedby' => 5, 'Addeddate' => 6, 'Addedtime' => 7, 'Lastmodifiedby' => 8, 'Lastmodifieddate' => 9, 'Lastmodifiedtime' => 10, 'Deletedby' => 11, 'Deleteddate' => 12, 'Deletedtime' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('projectcode' => 0, 'locationcode' => 1, 'projectname' => 2, 'nofblocks' => 3, 'deleted' => 4, 'addedby' => 5, 'addeddate' => 6, 'addedtime' => 7, 'lastmodifiedby' => 8, 'lastmodifieddate' => 9, 'lastmodifiedtime' => 10, 'deletedby' => 11, 'deleteddate' => 12, 'deletedtime' => 13, ),
        BasePeer::TYPE_COLNAME => array (ProjectPeer::PROJECTCODE => 0, ProjectPeer::LOCATIONCODE => 1, ProjectPeer::PROJECTNAME => 2, ProjectPeer::NOFBLOCKS => 3, ProjectPeer::DELETED => 4, ProjectPeer::ADDEDBY => 5, ProjectPeer::ADDEDDATE => 6, ProjectPeer::ADDEDTIME => 7, ProjectPeer::LASTMODIFIEDBY => 8, ProjectPeer::LASTMODIFIEDDATE => 9, ProjectPeer::LASTMODIFIEDTIME => 10, ProjectPeer::DELETEDBY => 11, ProjectPeer::DELETEDDATE => 12, ProjectPeer::DELETEDTIME => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PROJECTCODE' => 0, 'LOCATIONCODE' => 1, 'PROJECTNAME' => 2, 'NOFBLOCKS' => 3, 'DELETED' => 4, 'ADDEDBY' => 5, 'ADDEDDATE' => 6, 'ADDEDTIME' => 7, 'LASTMODIFIEDBY' => 8, 'LASTMODIFIEDDATE' => 9, 'LASTMODIFIEDTIME' => 10, 'DELETEDBY' => 11, 'DELETEDDATE' => 12, 'DELETEDTIME' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('projectcode' => 0, 'locationcode' => 1, 'projectname' => 2, 'nofblocks' => 3, 'deleted' => 4, 'addedby' => 5, 'addeddate' => 6, 'addedtime' => 7, 'lastmodifiedby' => 8, 'lastmodifieddate' => 9, 'lastmodifiedtime' => 10, 'deletedby' => 11, 'deleteddate' => 12, 'deletedtime' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $toNames = ProjectPeer::getFieldNames($toType);
        $key = isset(ProjectPeer::$fieldKeys[$fromType][$name]) ? ProjectPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProjectPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ProjectPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProjectPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ProjectPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProjectPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ProjectPeer::PROJECTCODE);
            $criteria->addSelectColumn(ProjectPeer::LOCATIONCODE);
            $criteria->addSelectColumn(ProjectPeer::PROJECTNAME);
            $criteria->addSelectColumn(ProjectPeer::NOFBLOCKS);
            $criteria->addSelectColumn(ProjectPeer::DELETED);
            $criteria->addSelectColumn(ProjectPeer::ADDEDBY);
            $criteria->addSelectColumn(ProjectPeer::ADDEDDATE);
            $criteria->addSelectColumn(ProjectPeer::ADDEDTIME);
            $criteria->addSelectColumn(ProjectPeer::LASTMODIFIEDBY);
            $criteria->addSelectColumn(ProjectPeer::LASTMODIFIEDDATE);
            $criteria->addSelectColumn(ProjectPeer::LASTMODIFIEDTIME);
            $criteria->addSelectColumn(ProjectPeer::DELETEDBY);
            $criteria->addSelectColumn(ProjectPeer::DELETEDDATE);
            $criteria->addSelectColumn(ProjectPeer::DELETEDTIME);
        } else {
            $criteria->addSelectColumn($alias . '.projectcode');
            $criteria->addSelectColumn($alias . '.locationcode');
            $criteria->addSelectColumn($alias . '.projectname');
            $criteria->addSelectColumn($alias . '.nofblocks');
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
        $criteria->setPrimaryTableName(ProjectPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProjectPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Project
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProjectPeer::doSelect($critcopy, $con);
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
        return ProjectPeer::populateObjects(ProjectPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProjectPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProjectPeer::DATABASE_NAME);

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
     * @param Project $obj A Project object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getProjectcode();
            } // if key === null
            ProjectPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Project object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Project) {
                $key = (string) $value->getProjectcode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Project object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProjectPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Project Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProjectPeer::$instances[$key])) {
                return ProjectPeer::$instances[$key];
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
        foreach (ProjectPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ProjectPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to project
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
        $cls = ProjectPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProjectPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProjectPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProjectPeer::addInstanceToPool($obj, $key);
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
     * @return array (Project object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProjectPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProjectPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProjectPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProjectPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProjectPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(ProjectPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

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
     * Selects a collection of Project objects pre-filled with their Location objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Project objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLocation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectPeer::DATABASE_NAME);
        }

        ProjectPeer::addSelectColumns($criteria);
        $startcol = ProjectPeer::NUM_HYDRATE_COLUMNS;
        LocationPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProjectPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProjectPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Project) to $obj2 (Location)
                $obj2->addProject($obj1);

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
        $criteria->setPrimaryTableName(ProjectPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

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
     * Selects a collection of Project objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Project objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectPeer::DATABASE_NAME);
        }

        ProjectPeer::addSelectColumns($criteria);
        $startcol2 = ProjectPeer::NUM_HYDRATE_COLUMNS;

        LocationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LocationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProjectPeer::LOCATIONCODE, LocationPeer::LOCATIONCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProjectPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Location rows

            $key2 = LocationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = LocationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = LocationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    LocationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Project) to the collection in $obj2 (Location)
                $obj2->addProject($obj1);
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
        return Propel::getDatabaseMap(ProjectPeer::DATABASE_NAME)->getTable(ProjectPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseProjectPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseProjectPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ProjectTableMap());
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
        return ProjectPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Project or Criteria object.
     *
     * @param      mixed $values Criteria or Project object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Project object
        }

        if ($criteria->containsKey(ProjectPeer::PROJECTCODE) && $criteria->keyContainsValue(ProjectPeer::PROJECTCODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProjectPeer::PROJECTCODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ProjectPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Project or Criteria object.
     *
     * @param      mixed $values Criteria or Project object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProjectPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProjectPeer::PROJECTCODE);
            $value = $criteria->remove(ProjectPeer::PROJECTCODE);
            if ($value) {
                $selectCriteria->add(ProjectPeer::PROJECTCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProjectPeer::TABLE_NAME);
            }

        } else { // $values is Project object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProjectPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the project table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ProjectPeer::TABLE_NAME, $con, ProjectPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProjectPeer::clearInstancePool();
            ProjectPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Project or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Project object or primary key or array of primary keys
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
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ProjectPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Project) { // it's a model object
            // invalidate the cache for this single object
            ProjectPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProjectPeer::DATABASE_NAME);
            $criteria->add(ProjectPeer::PROJECTCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ProjectPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ProjectPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProjectPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Project object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Project $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProjectPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProjectPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ProjectPeer::DATABASE_NAME, ProjectPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Project
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ProjectPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ProjectPeer::DATABASE_NAME);
        $criteria->add(ProjectPeer::PROJECTCODE, $pk);

        $v = ProjectPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Project[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ProjectPeer::DATABASE_NAME);
            $criteria->add(ProjectPeer::PROJECTCODE, $pks, Criteria::IN);
            $objs = ProjectPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseProjectPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseProjectPeer::buildTableMap();

