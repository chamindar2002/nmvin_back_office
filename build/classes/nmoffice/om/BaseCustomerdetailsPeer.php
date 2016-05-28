<?php


/**
 * Base static class for performing query and update operations on the 'customerdetails' table.
 *
 * customer details
 *
 * @package propel.generator.nmoffice.om
 */
abstract class BaseCustomerdetailsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'nmwndb';

    /** the table name for this class */
    const TABLE_NAME = 'customerdetails';

    /** the related Propel class for this table */
    const OM_CLASS = 'Customerdetails';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CustomerdetailsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 34;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 34;

    /** the column name for the customercode field */
    const CUSTOMERCODE = 'customerdetails.customercode';

    /** the column name for the title field */
    const TITLE = 'customerdetails.title';

    /** the column name for the familyname field */
    const FAMILYNAME = 'customerdetails.familyname';

    /** the column name for the firstname field */
    const FIRSTNAME = 'customerdetails.firstname';

    /** the column name for the addressline1 field */
    const ADDRESSLINE1 = 'customerdetails.addressline1';

    /** the column name for the addressline2 field */
    const ADDRESSLINE2 = 'customerdetails.addressline2';

    /** the column name for the postcode field */
    const POSTCODE = 'customerdetails.postcode';

    /** the column name for the country field */
    const COUNTRY = 'customerdetails.country';

    /** the column name for the email field */
    const EMAIL = 'customerdetails.email';

    /** the column name for the Skype field */
    const SKYPE = 'customerdetails.Skype';

    /** the column name for the landline field */
    const LANDLINE = 'customerdetails.landline';

    /** the column name for the mobile field */
    const MOBILE = 'customerdetails.mobile';

    /** the column name for the workphone field */
    const WORKPHONE = 'customerdetails.workphone';

    /** the column name for the fax field */
    const FAX = 'customerdetails.fax';

    /** the column name for the proffession field */
    const PROFFESSION = 'customerdetails.proffession';

    /** the column name for the gender field */
    const GENDER = 'customerdetails.gender';

    /** the column name for the passportno field */
    const PASSPORTNO = 'customerdetails.passportno';

    /** the column name for the sladdressline1 field */
    const SLADDRESSLINE1 = 'customerdetails.sladdressline1';

    /** the column name for the sladdressline2 field */
    const SLADDRESSLINE2 = 'customerdetails.sladdressline2';

    /** the column name for the sladdressline3 field */
    const SLADDRESSLINE3 = 'customerdetails.sladdressline3';

    /** the column name for the sllandline field */
    const SLLANDLINE = 'customerdetails.sllandline';

    /** the column name for the slmobile field */
    const SLMOBILE = 'customerdetails.slmobile';

    /** the column name for the slcontactperson field */
    const SLCONTACTPERSON = 'customerdetails.slcontactperson';

    /** the column name for the onlineuserid field */
    const ONLINEUSERID = 'customerdetails.onlineuserid';

    /** the column name for the deleted field */
    const DELETED = 'customerdetails.deleted';

    /** the column name for the addedby field */
    const ADDEDBY = 'customerdetails.addedby';

    /** the column name for the addeddate field */
    const ADDEDDATE = 'customerdetails.addeddate';

    /** the column name for the addedtime field */
    const ADDEDTIME = 'customerdetails.addedtime';

    /** the column name for the lastmodifiedby field */
    const LASTMODIFIEDBY = 'customerdetails.lastmodifiedby';

    /** the column name for the lastmodifieddate field */
    const LASTMODIFIEDDATE = 'customerdetails.lastmodifieddate';

    /** the column name for the lastmodifiedtime field */
    const LASTMODIFIEDTIME = 'customerdetails.lastmodifiedtime';

    /** the column name for the deletedby field */
    const DELETEDBY = 'customerdetails.deletedby';

    /** the column name for the deleteddate field */
    const DELETEDDATE = 'customerdetails.deleteddate';

    /** the column name for the deletedtime field */
    const DELETEDTIME = 'customerdetails.deletedtime';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Customerdetails objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Customerdetails[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CustomerdetailsPeer::$fieldNames[CustomerdetailsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Customercode', 'Title', 'Familyname', 'Firstname', 'Addressline1', 'Addressline2', 'Postcode', 'Country', 'Email', 'Skype', 'Landline', 'Mobile', 'Workphone', 'Fax', 'Proffession', 'Gender', 'Passportno', 'Sladdressline1', 'Sladdressline2', 'Sladdressline3', 'Sllandline', 'Slmobile', 'Slcontactperson', 'Onlineuserid', 'Deleted', 'Addedby', 'Addeddate', 'Addedtime', 'Lastmodifiedby', 'Lastmodifieddate', 'Lastmodifiedtime', 'Deletedby', 'Deleteddate', 'Deletedtime', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('customercode', 'title', 'familyname', 'firstname', 'addressline1', 'addressline2', 'postcode', 'country', 'email', 'skype', 'landline', 'mobile', 'workphone', 'fax', 'proffession', 'gender', 'passportno', 'sladdressline1', 'sladdressline2', 'sladdressline3', 'sllandline', 'slmobile', 'slcontactperson', 'onlineuserid', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
        BasePeer::TYPE_COLNAME => array (CustomerdetailsPeer::CUSTOMERCODE, CustomerdetailsPeer::TITLE, CustomerdetailsPeer::FAMILYNAME, CustomerdetailsPeer::FIRSTNAME, CustomerdetailsPeer::ADDRESSLINE1, CustomerdetailsPeer::ADDRESSLINE2, CustomerdetailsPeer::POSTCODE, CustomerdetailsPeer::COUNTRY, CustomerdetailsPeer::EMAIL, CustomerdetailsPeer::SKYPE, CustomerdetailsPeer::LANDLINE, CustomerdetailsPeer::MOBILE, CustomerdetailsPeer::WORKPHONE, CustomerdetailsPeer::FAX, CustomerdetailsPeer::PROFFESSION, CustomerdetailsPeer::GENDER, CustomerdetailsPeer::PASSPORTNO, CustomerdetailsPeer::SLADDRESSLINE1, CustomerdetailsPeer::SLADDRESSLINE2, CustomerdetailsPeer::SLADDRESSLINE3, CustomerdetailsPeer::SLLANDLINE, CustomerdetailsPeer::SLMOBILE, CustomerdetailsPeer::SLCONTACTPERSON, CustomerdetailsPeer::ONLINEUSERID, CustomerdetailsPeer::DELETED, CustomerdetailsPeer::ADDEDBY, CustomerdetailsPeer::ADDEDDATE, CustomerdetailsPeer::ADDEDTIME, CustomerdetailsPeer::LASTMODIFIEDBY, CustomerdetailsPeer::LASTMODIFIEDDATE, CustomerdetailsPeer::LASTMODIFIEDTIME, CustomerdetailsPeer::DELETEDBY, CustomerdetailsPeer::DELETEDDATE, CustomerdetailsPeer::DELETEDTIME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CUSTOMERCODE', 'TITLE', 'FAMILYNAME', 'FIRSTNAME', 'ADDRESSLINE1', 'ADDRESSLINE2', 'POSTCODE', 'COUNTRY', 'EMAIL', 'SKYPE', 'LANDLINE', 'MOBILE', 'WORKPHONE', 'FAX', 'PROFFESSION', 'GENDER', 'PASSPORTNO', 'SLADDRESSLINE1', 'SLADDRESSLINE2', 'SLADDRESSLINE3', 'SLLANDLINE', 'SLMOBILE', 'SLCONTACTPERSON', 'ONLINEUSERID', 'DELETED', 'ADDEDBY', 'ADDEDDATE', 'ADDEDTIME', 'LASTMODIFIEDBY', 'LASTMODIFIEDDATE', 'LASTMODIFIEDTIME', 'DELETEDBY', 'DELETEDDATE', 'DELETEDTIME', ),
        BasePeer::TYPE_FIELDNAME => array ('customercode', 'title', 'familyname', 'firstname', 'addressline1', 'addressline2', 'postcode', 'country', 'email', 'Skype', 'landline', 'mobile', 'workphone', 'fax', 'proffession', 'gender', 'passportno', 'sladdressline1', 'sladdressline2', 'sladdressline3', 'sllandline', 'slmobile', 'slcontactperson', 'onlineuserid', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CustomerdetailsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Customercode' => 0, 'Title' => 1, 'Familyname' => 2, 'Firstname' => 3, 'Addressline1' => 4, 'Addressline2' => 5, 'Postcode' => 6, 'Country' => 7, 'Email' => 8, 'Skype' => 9, 'Landline' => 10, 'Mobile' => 11, 'Workphone' => 12, 'Fax' => 13, 'Proffession' => 14, 'Gender' => 15, 'Passportno' => 16, 'Sladdressline1' => 17, 'Sladdressline2' => 18, 'Sladdressline3' => 19, 'Sllandline' => 20, 'Slmobile' => 21, 'Slcontactperson' => 22, 'Onlineuserid' => 23, 'Deleted' => 24, 'Addedby' => 25, 'Addeddate' => 26, 'Addedtime' => 27, 'Lastmodifiedby' => 28, 'Lastmodifieddate' => 29, 'Lastmodifiedtime' => 30, 'Deletedby' => 31, 'Deleteddate' => 32, 'Deletedtime' => 33, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('customercode' => 0, 'title' => 1, 'familyname' => 2, 'firstname' => 3, 'addressline1' => 4, 'addressline2' => 5, 'postcode' => 6, 'country' => 7, 'email' => 8, 'skype' => 9, 'landline' => 10, 'mobile' => 11, 'workphone' => 12, 'fax' => 13, 'proffession' => 14, 'gender' => 15, 'passportno' => 16, 'sladdressline1' => 17, 'sladdressline2' => 18, 'sladdressline3' => 19, 'sllandline' => 20, 'slmobile' => 21, 'slcontactperson' => 22, 'onlineuserid' => 23, 'deleted' => 24, 'addedby' => 25, 'addeddate' => 26, 'addedtime' => 27, 'lastmodifiedby' => 28, 'lastmodifieddate' => 29, 'lastmodifiedtime' => 30, 'deletedby' => 31, 'deleteddate' => 32, 'deletedtime' => 33, ),
        BasePeer::TYPE_COLNAME => array (CustomerdetailsPeer::CUSTOMERCODE => 0, CustomerdetailsPeer::TITLE => 1, CustomerdetailsPeer::FAMILYNAME => 2, CustomerdetailsPeer::FIRSTNAME => 3, CustomerdetailsPeer::ADDRESSLINE1 => 4, CustomerdetailsPeer::ADDRESSLINE2 => 5, CustomerdetailsPeer::POSTCODE => 6, CustomerdetailsPeer::COUNTRY => 7, CustomerdetailsPeer::EMAIL => 8, CustomerdetailsPeer::SKYPE => 9, CustomerdetailsPeer::LANDLINE => 10, CustomerdetailsPeer::MOBILE => 11, CustomerdetailsPeer::WORKPHONE => 12, CustomerdetailsPeer::FAX => 13, CustomerdetailsPeer::PROFFESSION => 14, CustomerdetailsPeer::GENDER => 15, CustomerdetailsPeer::PASSPORTNO => 16, CustomerdetailsPeer::SLADDRESSLINE1 => 17, CustomerdetailsPeer::SLADDRESSLINE2 => 18, CustomerdetailsPeer::SLADDRESSLINE3 => 19, CustomerdetailsPeer::SLLANDLINE => 20, CustomerdetailsPeer::SLMOBILE => 21, CustomerdetailsPeer::SLCONTACTPERSON => 22, CustomerdetailsPeer::ONLINEUSERID => 23, CustomerdetailsPeer::DELETED => 24, CustomerdetailsPeer::ADDEDBY => 25, CustomerdetailsPeer::ADDEDDATE => 26, CustomerdetailsPeer::ADDEDTIME => 27, CustomerdetailsPeer::LASTMODIFIEDBY => 28, CustomerdetailsPeer::LASTMODIFIEDDATE => 29, CustomerdetailsPeer::LASTMODIFIEDTIME => 30, CustomerdetailsPeer::DELETEDBY => 31, CustomerdetailsPeer::DELETEDDATE => 32, CustomerdetailsPeer::DELETEDTIME => 33, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CUSTOMERCODE' => 0, 'TITLE' => 1, 'FAMILYNAME' => 2, 'FIRSTNAME' => 3, 'ADDRESSLINE1' => 4, 'ADDRESSLINE2' => 5, 'POSTCODE' => 6, 'COUNTRY' => 7, 'EMAIL' => 8, 'SKYPE' => 9, 'LANDLINE' => 10, 'MOBILE' => 11, 'WORKPHONE' => 12, 'FAX' => 13, 'PROFFESSION' => 14, 'GENDER' => 15, 'PASSPORTNO' => 16, 'SLADDRESSLINE1' => 17, 'SLADDRESSLINE2' => 18, 'SLADDRESSLINE3' => 19, 'SLLANDLINE' => 20, 'SLMOBILE' => 21, 'SLCONTACTPERSON' => 22, 'ONLINEUSERID' => 23, 'DELETED' => 24, 'ADDEDBY' => 25, 'ADDEDDATE' => 26, 'ADDEDTIME' => 27, 'LASTMODIFIEDBY' => 28, 'LASTMODIFIEDDATE' => 29, 'LASTMODIFIEDTIME' => 30, 'DELETEDBY' => 31, 'DELETEDDATE' => 32, 'DELETEDTIME' => 33, ),
        BasePeer::TYPE_FIELDNAME => array ('customercode' => 0, 'title' => 1, 'familyname' => 2, 'firstname' => 3, 'addressline1' => 4, 'addressline2' => 5, 'postcode' => 6, 'country' => 7, 'email' => 8, 'Skype' => 9, 'landline' => 10, 'mobile' => 11, 'workphone' => 12, 'fax' => 13, 'proffession' => 14, 'gender' => 15, 'passportno' => 16, 'sladdressline1' => 17, 'sladdressline2' => 18, 'sladdressline3' => 19, 'sllandline' => 20, 'slmobile' => 21, 'slcontactperson' => 22, 'onlineuserid' => 23, 'deleted' => 24, 'addedby' => 25, 'addeddate' => 26, 'addedtime' => 27, 'lastmodifiedby' => 28, 'lastmodifieddate' => 29, 'lastmodifiedtime' => 30, 'deletedby' => 31, 'deleteddate' => 32, 'deletedtime' => 33, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
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
        $toNames = CustomerdetailsPeer::getFieldNames($toType);
        $key = isset(CustomerdetailsPeer::$fieldKeys[$fromType][$name]) ? CustomerdetailsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CustomerdetailsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CustomerdetailsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CustomerdetailsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CustomerdetailsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CustomerdetailsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CustomerdetailsPeer::CUSTOMERCODE);
            $criteria->addSelectColumn(CustomerdetailsPeer::TITLE);
            $criteria->addSelectColumn(CustomerdetailsPeer::FAMILYNAME);
            $criteria->addSelectColumn(CustomerdetailsPeer::FIRSTNAME);
            $criteria->addSelectColumn(CustomerdetailsPeer::ADDRESSLINE1);
            $criteria->addSelectColumn(CustomerdetailsPeer::ADDRESSLINE2);
            $criteria->addSelectColumn(CustomerdetailsPeer::POSTCODE);
            $criteria->addSelectColumn(CustomerdetailsPeer::COUNTRY);
            $criteria->addSelectColumn(CustomerdetailsPeer::EMAIL);
            $criteria->addSelectColumn(CustomerdetailsPeer::SKYPE);
            $criteria->addSelectColumn(CustomerdetailsPeer::LANDLINE);
            $criteria->addSelectColumn(CustomerdetailsPeer::MOBILE);
            $criteria->addSelectColumn(CustomerdetailsPeer::WORKPHONE);
            $criteria->addSelectColumn(CustomerdetailsPeer::FAX);
            $criteria->addSelectColumn(CustomerdetailsPeer::PROFFESSION);
            $criteria->addSelectColumn(CustomerdetailsPeer::GENDER);
            $criteria->addSelectColumn(CustomerdetailsPeer::PASSPORTNO);
            $criteria->addSelectColumn(CustomerdetailsPeer::SLADDRESSLINE1);
            $criteria->addSelectColumn(CustomerdetailsPeer::SLADDRESSLINE2);
            $criteria->addSelectColumn(CustomerdetailsPeer::SLADDRESSLINE3);
            $criteria->addSelectColumn(CustomerdetailsPeer::SLLANDLINE);
            $criteria->addSelectColumn(CustomerdetailsPeer::SLMOBILE);
            $criteria->addSelectColumn(CustomerdetailsPeer::SLCONTACTPERSON);
            $criteria->addSelectColumn(CustomerdetailsPeer::ONLINEUSERID);
            $criteria->addSelectColumn(CustomerdetailsPeer::DELETED);
            $criteria->addSelectColumn(CustomerdetailsPeer::ADDEDBY);
            $criteria->addSelectColumn(CustomerdetailsPeer::ADDEDDATE);
            $criteria->addSelectColumn(CustomerdetailsPeer::ADDEDTIME);
            $criteria->addSelectColumn(CustomerdetailsPeer::LASTMODIFIEDBY);
            $criteria->addSelectColumn(CustomerdetailsPeer::LASTMODIFIEDDATE);
            $criteria->addSelectColumn(CustomerdetailsPeer::LASTMODIFIEDTIME);
            $criteria->addSelectColumn(CustomerdetailsPeer::DELETEDBY);
            $criteria->addSelectColumn(CustomerdetailsPeer::DELETEDDATE);
            $criteria->addSelectColumn(CustomerdetailsPeer::DELETEDTIME);
        } else {
            $criteria->addSelectColumn($alias . '.customercode');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.familyname');
            $criteria->addSelectColumn($alias . '.firstname');
            $criteria->addSelectColumn($alias . '.addressline1');
            $criteria->addSelectColumn($alias . '.addressline2');
            $criteria->addSelectColumn($alias . '.postcode');
            $criteria->addSelectColumn($alias . '.country');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.Skype');
            $criteria->addSelectColumn($alias . '.landline');
            $criteria->addSelectColumn($alias . '.mobile');
            $criteria->addSelectColumn($alias . '.workphone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.proffession');
            $criteria->addSelectColumn($alias . '.gender');
            $criteria->addSelectColumn($alias . '.passportno');
            $criteria->addSelectColumn($alias . '.sladdressline1');
            $criteria->addSelectColumn($alias . '.sladdressline2');
            $criteria->addSelectColumn($alias . '.sladdressline3');
            $criteria->addSelectColumn($alias . '.sllandline');
            $criteria->addSelectColumn($alias . '.slmobile');
            $criteria->addSelectColumn($alias . '.slcontactperson');
            $criteria->addSelectColumn($alias . '.onlineuserid');
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
        $criteria->setPrimaryTableName(CustomerdetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CustomerdetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CustomerdetailsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Customerdetails
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CustomerdetailsPeer::doSelect($critcopy, $con);
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
        return CustomerdetailsPeer::populateObjects(CustomerdetailsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CustomerdetailsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CustomerdetailsPeer::DATABASE_NAME);

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
     * @param Customerdetails $obj A Customerdetails object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getCustomercode();
            } // if key === null
            CustomerdetailsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Customerdetails object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Customerdetails) {
                $key = (string) $value->getCustomercode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Customerdetails object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CustomerdetailsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Customerdetails Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CustomerdetailsPeer::$instances[$key])) {
                return CustomerdetailsPeer::$instances[$key];
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
        foreach (CustomerdetailsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CustomerdetailsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to customerdetails
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
        $cls = CustomerdetailsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CustomerdetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CustomerdetailsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CustomerdetailsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Customerdetails object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CustomerdetailsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CustomerdetailsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CustomerdetailsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CustomerdetailsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CustomerdetailsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CustomerdetailsPeer::DATABASE_NAME)->getTable(CustomerdetailsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCustomerdetailsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCustomerdetailsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CustomerdetailsTableMap());
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
        return CustomerdetailsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Customerdetails or Criteria object.
     *
     * @param      mixed $values Criteria or Customerdetails object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Customerdetails object
        }

        if ($criteria->containsKey(CustomerdetailsPeer::CUSTOMERCODE) && $criteria->keyContainsValue(CustomerdetailsPeer::CUSTOMERCODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CustomerdetailsPeer::CUSTOMERCODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CustomerdetailsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Customerdetails or Criteria object.
     *
     * @param      mixed $values Criteria or Customerdetails object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CustomerdetailsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CustomerdetailsPeer::CUSTOMERCODE);
            $value = $criteria->remove(CustomerdetailsPeer::CUSTOMERCODE);
            if ($value) {
                $selectCriteria->add(CustomerdetailsPeer::CUSTOMERCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CustomerdetailsPeer::TABLE_NAME);
            }

        } else { // $values is Customerdetails object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CustomerdetailsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the customerdetails table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CustomerdetailsPeer::TABLE_NAME, $con, CustomerdetailsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerdetailsPeer::clearInstancePool();
            CustomerdetailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Customerdetails or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Customerdetails object or primary key or array of primary keys
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
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CustomerdetailsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Customerdetails) { // it's a model object
            // invalidate the cache for this single object
            CustomerdetailsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CustomerdetailsPeer::DATABASE_NAME);
            $criteria->add(CustomerdetailsPeer::CUSTOMERCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CustomerdetailsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CustomerdetailsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CustomerdetailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Customerdetails object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Customerdetails $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CustomerdetailsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CustomerdetailsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CustomerdetailsPeer::DATABASE_NAME, CustomerdetailsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Customerdetails
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CustomerdetailsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CustomerdetailsPeer::DATABASE_NAME);
        $criteria->add(CustomerdetailsPeer::CUSTOMERCODE, $pk);

        $v = CustomerdetailsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Customerdetails[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CustomerdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CustomerdetailsPeer::DATABASE_NAME);
            $criteria->add(CustomerdetailsPeer::CUSTOMERCODE, $pks, Criteria::IN);
            $objs = CustomerdetailsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCustomerdetailsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCustomerdetailsPeer::buildTableMap();

