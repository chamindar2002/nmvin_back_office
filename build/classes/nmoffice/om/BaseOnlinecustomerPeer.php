<?php


/**
 * Base static class for performing query and update operations on the 'onlinecustomer' table.
 *
 * onlinecustomer
 *
 * @package propel.generator.nmoffice.om
 */
abstract class BaseOnlinecustomerPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'nmwndb';

    /** the table name for this class */
    const TABLE_NAME = 'onlinecustomer';

    /** the related Propel class for this table */
    const OM_CLASS = 'Onlinecustomer';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OnlinecustomerTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 39;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 39;

    /** the column name for the customercode field */
    const CUSTOMERCODE = 'onlinecustomer.customercode';

    /** the column name for the title field */
    const TITLE = 'onlinecustomer.title';

    /** the column name for the familyname field */
    const FAMILYNAME = 'onlinecustomer.familyname';

    /** the column name for the firstname field */
    const FIRSTNAME = 'onlinecustomer.firstname';

    /** the column name for the addressline1 field */
    const ADDRESSLINE1 = 'onlinecustomer.addressline1';

    /** the column name for the addressline2 field */
    const ADDRESSLINE2 = 'onlinecustomer.addressline2';

    /** the column name for the postcode field */
    const POSTCODE = 'onlinecustomer.postcode';

    /** the column name for the country field */
    const COUNTRY = 'onlinecustomer.country';

    /** the column name for the email field */
    const EMAIL = 'onlinecustomer.email';

    /** the column name for the Skype field */
    const SKYPE = 'onlinecustomer.Skype';

    /** the column name for the landline field */
    const LANDLINE = 'onlinecustomer.landline';

    /** the column name for the mobile field */
    const MOBILE = 'onlinecustomer.mobile';

    /** the column name for the workphone field */
    const WORKPHONE = 'onlinecustomer.workphone';

    /** the column name for the fax field */
    const FAX = 'onlinecustomer.fax';

    /** the column name for the proffession field */
    const PROFFESSION = 'onlinecustomer.proffession';

    /** the column name for the gender field */
    const GENDER = 'onlinecustomer.gender';

    /** the column name for the passportno field */
    const PASSPORTNO = 'onlinecustomer.passportno';

    /** the column name for the sladdressline1 field */
    const SLADDRESSLINE1 = 'onlinecustomer.sladdressline1';

    /** the column name for the sladdressline2 field */
    const SLADDRESSLINE2 = 'onlinecustomer.sladdressline2';

    /** the column name for the sladdressline3 field */
    const SLADDRESSLINE3 = 'onlinecustomer.sladdressline3';

    /** the column name for the sllandline field */
    const SLLANDLINE = 'onlinecustomer.sllandline';

    /** the column name for the slmobile field */
    const SLMOBILE = 'onlinecustomer.slmobile';

    /** the column name for the slcontactperson field */
    const SLCONTACTPERSON = 'onlinecustomer.slcontactperson';

    /** the column name for the onlineuserid field */
    const ONLINEUSERID = 'onlinecustomer.onlineuserid';

    /** the column name for the paymentsuccess field */
    const PAYMENTSUCCESS = 'onlinecustomer.paymentsuccess';

    /** the column name for the blockrefno field */
    const BLOCKREFNO = 'onlinecustomer.blockrefno';

    /** the column name for the paidamt field */
    const PAIDAMT = 'onlinecustomer.paidamt';

    /** the column name for the paidamtissuedreceiptstatus field */
    const PAIDAMTISSUEDRECEIPTSTATUS = 'onlinecustomer.paidamtissuedreceiptstatus';

    /** the column name for the utilized field */
    const UTILIZED = 'onlinecustomer.utilized';

    /** the column name for the deleted field */
    const DELETED = 'onlinecustomer.deleted';

    /** the column name for the addedby field */
    const ADDEDBY = 'onlinecustomer.addedby';

    /** the column name for the addeddate field */
    const ADDEDDATE = 'onlinecustomer.addeddate';

    /** the column name for the addedtime field */
    const ADDEDTIME = 'onlinecustomer.addedtime';

    /** the column name for the lastmodifiedby field */
    const LASTMODIFIEDBY = 'onlinecustomer.lastmodifiedby';

    /** the column name for the lastmodifieddate field */
    const LASTMODIFIEDDATE = 'onlinecustomer.lastmodifieddate';

    /** the column name for the lastmodifiedtime field */
    const LASTMODIFIEDTIME = 'onlinecustomer.lastmodifiedtime';

    /** the column name for the deletedby field */
    const DELETEDBY = 'onlinecustomer.deletedby';

    /** the column name for the deleteddate field */
    const DELETEDDATE = 'onlinecustomer.deleteddate';

    /** the column name for the deletedtime field */
    const DELETEDTIME = 'onlinecustomer.deletedtime';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Onlinecustomer objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Onlinecustomer[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OnlinecustomerPeer::$fieldNames[OnlinecustomerPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Customercode', 'Title', 'Familyname', 'Firstname', 'Addressline1', 'Addressline2', 'Postcode', 'Country', 'Email', 'Skype', 'Landline', 'Mobile', 'Workphone', 'Fax', 'Proffession', 'Gender', 'Passportno', 'Sladdressline1', 'Sladdressline2', 'Sladdressline3', 'Sllandline', 'Slmobile', 'Slcontactperson', 'Onlineuserid', 'Paymentsuccess', 'Blockrefno', 'Paidamt', 'Paidamtissuedreceiptstatus', 'Utilized', 'Deleted', 'Addedby', 'Addeddate', 'Addedtime', 'Lastmodifiedby', 'Lastmodifieddate', 'Lastmodifiedtime', 'Deletedby', 'Deleteddate', 'Deletedtime', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('customercode', 'title', 'familyname', 'firstname', 'addressline1', 'addressline2', 'postcode', 'country', 'email', 'skype', 'landline', 'mobile', 'workphone', 'fax', 'proffession', 'gender', 'passportno', 'sladdressline1', 'sladdressline2', 'sladdressline3', 'sllandline', 'slmobile', 'slcontactperson', 'onlineuserid', 'paymentsuccess', 'blockrefno', 'paidamt', 'paidamtissuedreceiptstatus', 'utilized', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
        BasePeer::TYPE_COLNAME => array (OnlinecustomerPeer::CUSTOMERCODE, OnlinecustomerPeer::TITLE, OnlinecustomerPeer::FAMILYNAME, OnlinecustomerPeer::FIRSTNAME, OnlinecustomerPeer::ADDRESSLINE1, OnlinecustomerPeer::ADDRESSLINE2, OnlinecustomerPeer::POSTCODE, OnlinecustomerPeer::COUNTRY, OnlinecustomerPeer::EMAIL, OnlinecustomerPeer::SKYPE, OnlinecustomerPeer::LANDLINE, OnlinecustomerPeer::MOBILE, OnlinecustomerPeer::WORKPHONE, OnlinecustomerPeer::FAX, OnlinecustomerPeer::PROFFESSION, OnlinecustomerPeer::GENDER, OnlinecustomerPeer::PASSPORTNO, OnlinecustomerPeer::SLADDRESSLINE1, OnlinecustomerPeer::SLADDRESSLINE2, OnlinecustomerPeer::SLADDRESSLINE3, OnlinecustomerPeer::SLLANDLINE, OnlinecustomerPeer::SLMOBILE, OnlinecustomerPeer::SLCONTACTPERSON, OnlinecustomerPeer::ONLINEUSERID, OnlinecustomerPeer::PAYMENTSUCCESS, OnlinecustomerPeer::BLOCKREFNO, OnlinecustomerPeer::PAIDAMT, OnlinecustomerPeer::PAIDAMTISSUEDRECEIPTSTATUS, OnlinecustomerPeer::UTILIZED, OnlinecustomerPeer::DELETED, OnlinecustomerPeer::ADDEDBY, OnlinecustomerPeer::ADDEDDATE, OnlinecustomerPeer::ADDEDTIME, OnlinecustomerPeer::LASTMODIFIEDBY, OnlinecustomerPeer::LASTMODIFIEDDATE, OnlinecustomerPeer::LASTMODIFIEDTIME, OnlinecustomerPeer::DELETEDBY, OnlinecustomerPeer::DELETEDDATE, OnlinecustomerPeer::DELETEDTIME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CUSTOMERCODE', 'TITLE', 'FAMILYNAME', 'FIRSTNAME', 'ADDRESSLINE1', 'ADDRESSLINE2', 'POSTCODE', 'COUNTRY', 'EMAIL', 'SKYPE', 'LANDLINE', 'MOBILE', 'WORKPHONE', 'FAX', 'PROFFESSION', 'GENDER', 'PASSPORTNO', 'SLADDRESSLINE1', 'SLADDRESSLINE2', 'SLADDRESSLINE3', 'SLLANDLINE', 'SLMOBILE', 'SLCONTACTPERSON', 'ONLINEUSERID', 'PAYMENTSUCCESS', 'BLOCKREFNO', 'PAIDAMT', 'PAIDAMTISSUEDRECEIPTSTATUS', 'UTILIZED', 'DELETED', 'ADDEDBY', 'ADDEDDATE', 'ADDEDTIME', 'LASTMODIFIEDBY', 'LASTMODIFIEDDATE', 'LASTMODIFIEDTIME', 'DELETEDBY', 'DELETEDDATE', 'DELETEDTIME', ),
        BasePeer::TYPE_FIELDNAME => array ('customercode', 'title', 'familyname', 'firstname', 'addressline1', 'addressline2', 'postcode', 'country', 'email', 'Skype', 'landline', 'mobile', 'workphone', 'fax', 'proffession', 'gender', 'passportno', 'sladdressline1', 'sladdressline2', 'sladdressline3', 'sllandline', 'slmobile', 'slcontactperson', 'onlineuserid', 'paymentsuccess', 'blockrefno', 'paidamt', 'paidamtissuedreceiptstatus', 'utilized', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OnlinecustomerPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Customercode' => 0, 'Title' => 1, 'Familyname' => 2, 'Firstname' => 3, 'Addressline1' => 4, 'Addressline2' => 5, 'Postcode' => 6, 'Country' => 7, 'Email' => 8, 'Skype' => 9, 'Landline' => 10, 'Mobile' => 11, 'Workphone' => 12, 'Fax' => 13, 'Proffession' => 14, 'Gender' => 15, 'Passportno' => 16, 'Sladdressline1' => 17, 'Sladdressline2' => 18, 'Sladdressline3' => 19, 'Sllandline' => 20, 'Slmobile' => 21, 'Slcontactperson' => 22, 'Onlineuserid' => 23, 'Paymentsuccess' => 24, 'Blockrefno' => 25, 'Paidamt' => 26, 'Paidamtissuedreceiptstatus' => 27, 'Utilized' => 28, 'Deleted' => 29, 'Addedby' => 30, 'Addeddate' => 31, 'Addedtime' => 32, 'Lastmodifiedby' => 33, 'Lastmodifieddate' => 34, 'Lastmodifiedtime' => 35, 'Deletedby' => 36, 'Deleteddate' => 37, 'Deletedtime' => 38, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('customercode' => 0, 'title' => 1, 'familyname' => 2, 'firstname' => 3, 'addressline1' => 4, 'addressline2' => 5, 'postcode' => 6, 'country' => 7, 'email' => 8, 'skype' => 9, 'landline' => 10, 'mobile' => 11, 'workphone' => 12, 'fax' => 13, 'proffession' => 14, 'gender' => 15, 'passportno' => 16, 'sladdressline1' => 17, 'sladdressline2' => 18, 'sladdressline3' => 19, 'sllandline' => 20, 'slmobile' => 21, 'slcontactperson' => 22, 'onlineuserid' => 23, 'paymentsuccess' => 24, 'blockrefno' => 25, 'paidamt' => 26, 'paidamtissuedreceiptstatus' => 27, 'utilized' => 28, 'deleted' => 29, 'addedby' => 30, 'addeddate' => 31, 'addedtime' => 32, 'lastmodifiedby' => 33, 'lastmodifieddate' => 34, 'lastmodifiedtime' => 35, 'deletedby' => 36, 'deleteddate' => 37, 'deletedtime' => 38, ),
        BasePeer::TYPE_COLNAME => array (OnlinecustomerPeer::CUSTOMERCODE => 0, OnlinecustomerPeer::TITLE => 1, OnlinecustomerPeer::FAMILYNAME => 2, OnlinecustomerPeer::FIRSTNAME => 3, OnlinecustomerPeer::ADDRESSLINE1 => 4, OnlinecustomerPeer::ADDRESSLINE2 => 5, OnlinecustomerPeer::POSTCODE => 6, OnlinecustomerPeer::COUNTRY => 7, OnlinecustomerPeer::EMAIL => 8, OnlinecustomerPeer::SKYPE => 9, OnlinecustomerPeer::LANDLINE => 10, OnlinecustomerPeer::MOBILE => 11, OnlinecustomerPeer::WORKPHONE => 12, OnlinecustomerPeer::FAX => 13, OnlinecustomerPeer::PROFFESSION => 14, OnlinecustomerPeer::GENDER => 15, OnlinecustomerPeer::PASSPORTNO => 16, OnlinecustomerPeer::SLADDRESSLINE1 => 17, OnlinecustomerPeer::SLADDRESSLINE2 => 18, OnlinecustomerPeer::SLADDRESSLINE3 => 19, OnlinecustomerPeer::SLLANDLINE => 20, OnlinecustomerPeer::SLMOBILE => 21, OnlinecustomerPeer::SLCONTACTPERSON => 22, OnlinecustomerPeer::ONLINEUSERID => 23, OnlinecustomerPeer::PAYMENTSUCCESS => 24, OnlinecustomerPeer::BLOCKREFNO => 25, OnlinecustomerPeer::PAIDAMT => 26, OnlinecustomerPeer::PAIDAMTISSUEDRECEIPTSTATUS => 27, OnlinecustomerPeer::UTILIZED => 28, OnlinecustomerPeer::DELETED => 29, OnlinecustomerPeer::ADDEDBY => 30, OnlinecustomerPeer::ADDEDDATE => 31, OnlinecustomerPeer::ADDEDTIME => 32, OnlinecustomerPeer::LASTMODIFIEDBY => 33, OnlinecustomerPeer::LASTMODIFIEDDATE => 34, OnlinecustomerPeer::LASTMODIFIEDTIME => 35, OnlinecustomerPeer::DELETEDBY => 36, OnlinecustomerPeer::DELETEDDATE => 37, OnlinecustomerPeer::DELETEDTIME => 38, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CUSTOMERCODE' => 0, 'TITLE' => 1, 'FAMILYNAME' => 2, 'FIRSTNAME' => 3, 'ADDRESSLINE1' => 4, 'ADDRESSLINE2' => 5, 'POSTCODE' => 6, 'COUNTRY' => 7, 'EMAIL' => 8, 'SKYPE' => 9, 'LANDLINE' => 10, 'MOBILE' => 11, 'WORKPHONE' => 12, 'FAX' => 13, 'PROFFESSION' => 14, 'GENDER' => 15, 'PASSPORTNO' => 16, 'SLADDRESSLINE1' => 17, 'SLADDRESSLINE2' => 18, 'SLADDRESSLINE3' => 19, 'SLLANDLINE' => 20, 'SLMOBILE' => 21, 'SLCONTACTPERSON' => 22, 'ONLINEUSERID' => 23, 'PAYMENTSUCCESS' => 24, 'BLOCKREFNO' => 25, 'PAIDAMT' => 26, 'PAIDAMTISSUEDRECEIPTSTATUS' => 27, 'UTILIZED' => 28, 'DELETED' => 29, 'ADDEDBY' => 30, 'ADDEDDATE' => 31, 'ADDEDTIME' => 32, 'LASTMODIFIEDBY' => 33, 'LASTMODIFIEDDATE' => 34, 'LASTMODIFIEDTIME' => 35, 'DELETEDBY' => 36, 'DELETEDDATE' => 37, 'DELETEDTIME' => 38, ),
        BasePeer::TYPE_FIELDNAME => array ('customercode' => 0, 'title' => 1, 'familyname' => 2, 'firstname' => 3, 'addressline1' => 4, 'addressline2' => 5, 'postcode' => 6, 'country' => 7, 'email' => 8, 'Skype' => 9, 'landline' => 10, 'mobile' => 11, 'workphone' => 12, 'fax' => 13, 'proffession' => 14, 'gender' => 15, 'passportno' => 16, 'sladdressline1' => 17, 'sladdressline2' => 18, 'sladdressline3' => 19, 'sllandline' => 20, 'slmobile' => 21, 'slcontactperson' => 22, 'onlineuserid' => 23, 'paymentsuccess' => 24, 'blockrefno' => 25, 'paidamt' => 26, 'paidamtissuedreceiptstatus' => 27, 'utilized' => 28, 'deleted' => 29, 'addedby' => 30, 'addeddate' => 31, 'addedtime' => 32, 'lastmodifiedby' => 33, 'lastmodifieddate' => 34, 'lastmodifiedtime' => 35, 'deletedby' => 36, 'deleteddate' => 37, 'deletedtime' => 38, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, )
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
        $toNames = OnlinecustomerPeer::getFieldNames($toType);
        $key = isset(OnlinecustomerPeer::$fieldKeys[$fromType][$name]) ? OnlinecustomerPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OnlinecustomerPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OnlinecustomerPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OnlinecustomerPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OnlinecustomerPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OnlinecustomerPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OnlinecustomerPeer::CUSTOMERCODE);
            $criteria->addSelectColumn(OnlinecustomerPeer::TITLE);
            $criteria->addSelectColumn(OnlinecustomerPeer::FAMILYNAME);
            $criteria->addSelectColumn(OnlinecustomerPeer::FIRSTNAME);
            $criteria->addSelectColumn(OnlinecustomerPeer::ADDRESSLINE1);
            $criteria->addSelectColumn(OnlinecustomerPeer::ADDRESSLINE2);
            $criteria->addSelectColumn(OnlinecustomerPeer::POSTCODE);
            $criteria->addSelectColumn(OnlinecustomerPeer::COUNTRY);
            $criteria->addSelectColumn(OnlinecustomerPeer::EMAIL);
            $criteria->addSelectColumn(OnlinecustomerPeer::SKYPE);
            $criteria->addSelectColumn(OnlinecustomerPeer::LANDLINE);
            $criteria->addSelectColumn(OnlinecustomerPeer::MOBILE);
            $criteria->addSelectColumn(OnlinecustomerPeer::WORKPHONE);
            $criteria->addSelectColumn(OnlinecustomerPeer::FAX);
            $criteria->addSelectColumn(OnlinecustomerPeer::PROFFESSION);
            $criteria->addSelectColumn(OnlinecustomerPeer::GENDER);
            $criteria->addSelectColumn(OnlinecustomerPeer::PASSPORTNO);
            $criteria->addSelectColumn(OnlinecustomerPeer::SLADDRESSLINE1);
            $criteria->addSelectColumn(OnlinecustomerPeer::SLADDRESSLINE2);
            $criteria->addSelectColumn(OnlinecustomerPeer::SLADDRESSLINE3);
            $criteria->addSelectColumn(OnlinecustomerPeer::SLLANDLINE);
            $criteria->addSelectColumn(OnlinecustomerPeer::SLMOBILE);
            $criteria->addSelectColumn(OnlinecustomerPeer::SLCONTACTPERSON);
            $criteria->addSelectColumn(OnlinecustomerPeer::ONLINEUSERID);
            $criteria->addSelectColumn(OnlinecustomerPeer::PAYMENTSUCCESS);
            $criteria->addSelectColumn(OnlinecustomerPeer::BLOCKREFNO);
            $criteria->addSelectColumn(OnlinecustomerPeer::PAIDAMT);
            $criteria->addSelectColumn(OnlinecustomerPeer::PAIDAMTISSUEDRECEIPTSTATUS);
            $criteria->addSelectColumn(OnlinecustomerPeer::UTILIZED);
            $criteria->addSelectColumn(OnlinecustomerPeer::DELETED);
            $criteria->addSelectColumn(OnlinecustomerPeer::ADDEDBY);
            $criteria->addSelectColumn(OnlinecustomerPeer::ADDEDDATE);
            $criteria->addSelectColumn(OnlinecustomerPeer::ADDEDTIME);
            $criteria->addSelectColumn(OnlinecustomerPeer::LASTMODIFIEDBY);
            $criteria->addSelectColumn(OnlinecustomerPeer::LASTMODIFIEDDATE);
            $criteria->addSelectColumn(OnlinecustomerPeer::LASTMODIFIEDTIME);
            $criteria->addSelectColumn(OnlinecustomerPeer::DELETEDBY);
            $criteria->addSelectColumn(OnlinecustomerPeer::DELETEDDATE);
            $criteria->addSelectColumn(OnlinecustomerPeer::DELETEDTIME);
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
            $criteria->addSelectColumn($alias . '.paymentsuccess');
            $criteria->addSelectColumn($alias . '.blockrefno');
            $criteria->addSelectColumn($alias . '.paidamt');
            $criteria->addSelectColumn($alias . '.paidamtissuedreceiptstatus');
            $criteria->addSelectColumn($alias . '.utilized');
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
        $criteria->setPrimaryTableName(OnlinecustomerPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OnlinecustomerPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OnlinecustomerPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Onlinecustomer
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OnlinecustomerPeer::doSelect($critcopy, $con);
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
        return OnlinecustomerPeer::populateObjects(OnlinecustomerPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OnlinecustomerPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OnlinecustomerPeer::DATABASE_NAME);

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
     * @param Onlinecustomer $obj A Onlinecustomer object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getCustomercode();
            } // if key === null
            OnlinecustomerPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Onlinecustomer object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Onlinecustomer) {
                $key = (string) $value->getCustomercode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Onlinecustomer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OnlinecustomerPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Onlinecustomer Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OnlinecustomerPeer::$instances[$key])) {
                return OnlinecustomerPeer::$instances[$key];
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
        foreach (OnlinecustomerPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OnlinecustomerPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to onlinecustomer
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
        $cls = OnlinecustomerPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OnlinecustomerPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OnlinecustomerPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OnlinecustomerPeer::addInstanceToPool($obj, $key);
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
     * @return array (Onlinecustomer object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OnlinecustomerPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OnlinecustomerPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OnlinecustomerPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OnlinecustomerPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OnlinecustomerPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(OnlinecustomerPeer::DATABASE_NAME)->getTable(OnlinecustomerPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOnlinecustomerPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOnlinecustomerPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OnlinecustomerTableMap());
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
        return OnlinecustomerPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Onlinecustomer or Criteria object.
     *
     * @param      mixed $values Criteria or Onlinecustomer object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Onlinecustomer object
        }

        if ($criteria->containsKey(OnlinecustomerPeer::CUSTOMERCODE) && $criteria->keyContainsValue(OnlinecustomerPeer::CUSTOMERCODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OnlinecustomerPeer::CUSTOMERCODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OnlinecustomerPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Onlinecustomer or Criteria object.
     *
     * @param      mixed $values Criteria or Onlinecustomer object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OnlinecustomerPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OnlinecustomerPeer::CUSTOMERCODE);
            $value = $criteria->remove(OnlinecustomerPeer::CUSTOMERCODE);
            if ($value) {
                $selectCriteria->add(OnlinecustomerPeer::CUSTOMERCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OnlinecustomerPeer::TABLE_NAME);
            }

        } else { // $values is Onlinecustomer object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OnlinecustomerPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the onlinecustomer table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OnlinecustomerPeer::TABLE_NAME, $con, OnlinecustomerPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OnlinecustomerPeer::clearInstancePool();
            OnlinecustomerPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Onlinecustomer or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Onlinecustomer object or primary key or array of primary keys
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
            $con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OnlinecustomerPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Onlinecustomer) { // it's a model object
            // invalidate the cache for this single object
            OnlinecustomerPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OnlinecustomerPeer::DATABASE_NAME);
            $criteria->add(OnlinecustomerPeer::CUSTOMERCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OnlinecustomerPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OnlinecustomerPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OnlinecustomerPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Onlinecustomer object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Onlinecustomer $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OnlinecustomerPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OnlinecustomerPeer::TABLE_NAME);

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

        return BasePeer::doValidate(OnlinecustomerPeer::DATABASE_NAME, OnlinecustomerPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Onlinecustomer
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OnlinecustomerPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OnlinecustomerPeer::DATABASE_NAME);
        $criteria->add(OnlinecustomerPeer::CUSTOMERCODE, $pk);

        $v = OnlinecustomerPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Onlinecustomer[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OnlinecustomerPeer::DATABASE_NAME);
            $criteria->add(OnlinecustomerPeer::CUSTOMERCODE, $pks, Criteria::IN);
            $objs = OnlinecustomerPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseOnlinecustomerPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOnlinecustomerPeer::buildTableMap();

