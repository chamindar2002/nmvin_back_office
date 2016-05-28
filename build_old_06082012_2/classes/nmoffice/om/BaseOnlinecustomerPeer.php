<?php

/**
 * Base static class for performing query and update operations on the 'onlinecustomer' table.
 *
 * onlinecustomer
 *
 * @package    nmoffice.om
 */
abstract class BaseOnlinecustomerPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'nmwndb';

	/** the table name for this class */
	const TABLE_NAME = 'onlinecustomer';

	/** the related Propel class for this table */
	const OM_CLASS = 'Onlinecustomer';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'nmoffice.Onlinecustomer';

	/** the related TableMap class for this table */
	const TM_CLASS = 'OnlinecustomerTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 39;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the CUSTOMERCODE field */
	const CUSTOMERCODE = 'onlinecustomer.CUSTOMERCODE';

	/** the column name for the TITLE field */
	const TITLE = 'onlinecustomer.TITLE';

	/** the column name for the FAMILYNAME field */
	const FAMILYNAME = 'onlinecustomer.FAMILYNAME';

	/** the column name for the FIRSTNAME field */
	const FIRSTNAME = 'onlinecustomer.FIRSTNAME';

	/** the column name for the ADDRESSLINE1 field */
	const ADDRESSLINE1 = 'onlinecustomer.ADDRESSLINE1';

	/** the column name for the ADDRESSLINE2 field */
	const ADDRESSLINE2 = 'onlinecustomer.ADDRESSLINE2';

	/** the column name for the POSTCODE field */
	const POSTCODE = 'onlinecustomer.POSTCODE';

	/** the column name for the COUNTRY field */
	const COUNTRY = 'onlinecustomer.COUNTRY';

	/** the column name for the EMAIL field */
	const EMAIL = 'onlinecustomer.EMAIL';

	/** the column name for the SKYPE field */
	const SKYPE = 'onlinecustomer.SKYPE';

	/** the column name for the LANDLINE field */
	const LANDLINE = 'onlinecustomer.LANDLINE';

	/** the column name for the MOBILE field */
	const MOBILE = 'onlinecustomer.MOBILE';

	/** the column name for the WORKPHONE field */
	const WORKPHONE = 'onlinecustomer.WORKPHONE';

	/** the column name for the FAX field */
	const FAX = 'onlinecustomer.FAX';

	/** the column name for the PROFFESSION field */
	const PROFFESSION = 'onlinecustomer.PROFFESSION';

	/** the column name for the GENDER field */
	const GENDER = 'onlinecustomer.GENDER';

	/** the column name for the PASSPORTNO field */
	const PASSPORTNO = 'onlinecustomer.PASSPORTNO';

	/** the column name for the SLADDRESSLINE1 field */
	const SLADDRESSLINE1 = 'onlinecustomer.SLADDRESSLINE1';

	/** the column name for the SLADDRESSLINE2 field */
	const SLADDRESSLINE2 = 'onlinecustomer.SLADDRESSLINE2';

	/** the column name for the SLADDRESSLINE3 field */
	const SLADDRESSLINE3 = 'onlinecustomer.SLADDRESSLINE3';

	/** the column name for the SLLANDLINE field */
	const SLLANDLINE = 'onlinecustomer.SLLANDLINE';

	/** the column name for the SLMOBILE field */
	const SLMOBILE = 'onlinecustomer.SLMOBILE';

	/** the column name for the SLCONTACTPERSON field */
	const SLCONTACTPERSON = 'onlinecustomer.SLCONTACTPERSON';

	/** the column name for the ONLINEUSERID field */
	const ONLINEUSERID = 'onlinecustomer.ONLINEUSERID';

	/** the column name for the PAYMENTSUCCESS field */
	const PAYMENTSUCCESS = 'onlinecustomer.PAYMENTSUCCESS';

	/** the column name for the BLOCKREFNO field */
	const BLOCKREFNO = 'onlinecustomer.BLOCKREFNO';

	/** the column name for the PAIDAMT field */
	const PAIDAMT = 'onlinecustomer.PAIDAMT';

	/** the column name for the PAIDAMTISSUEDRECEIPTSTATUS field */
	const PAIDAMTISSUEDRECEIPTSTATUS = 'onlinecustomer.PAIDAMTISSUEDRECEIPTSTATUS';

	/** the column name for the UTILIZED field */
	const UTILIZED = 'onlinecustomer.UTILIZED';

	/** the column name for the DELETED field */
	const DELETED = 'onlinecustomer.DELETED';

	/** the column name for the ADDEDBY field */
	const ADDEDBY = 'onlinecustomer.ADDEDBY';

	/** the column name for the ADDEDDATE field */
	const ADDEDDATE = 'onlinecustomer.ADDEDDATE';

	/** the column name for the ADDEDTIME field */
	const ADDEDTIME = 'onlinecustomer.ADDEDTIME';

	/** the column name for the LASTMODIFIEDBY field */
	const LASTMODIFIEDBY = 'onlinecustomer.LASTMODIFIEDBY';

	/** the column name for the LASTMODIFIEDDATE field */
	const LASTMODIFIEDDATE = 'onlinecustomer.LASTMODIFIEDDATE';

	/** the column name for the LASTMODIFIEDTIME field */
	const LASTMODIFIEDTIME = 'onlinecustomer.LASTMODIFIEDTIME';

	/** the column name for the DELETEDBY field */
	const DELETEDBY = 'onlinecustomer.DELETEDBY';

	/** the column name for the DELETEDDATE field */
	const DELETEDDATE = 'onlinecustomer.DELETEDDATE';

	/** the column name for the DELETEDTIME field */
	const DELETEDTIME = 'onlinecustomer.DELETEDTIME';

	/**
	 * An identiy map to hold any loaded instances of Onlinecustomer objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Onlinecustomer[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Customercode', 'Title', 'Familyname', 'Firstname', 'Addressline1', 'Addressline2', 'Postcode', 'Country', 'Email', 'Skype', 'Landline', 'Mobile', 'Workphone', 'Fax', 'Proffession', 'Gender', 'Passportno', 'Sladdressline1', 'Sladdressline2', 'Sladdressline3', 'Sllandline', 'Slmobile', 'Slcontactperson', 'Onlineuserid', 'Paymentsuccess', 'Blockrefno', 'Paidamt', 'Paidamtissuedreceiptstatus', 'Utilized', 'Deleted', 'Addedby', 'Addeddate', 'Addedtime', 'Lastmodifiedby', 'Lastmodifieddate', 'Lastmodifiedtime', 'Deletedby', 'Deleteddate', 'Deletedtime', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('customercode', 'title', 'familyname', 'firstname', 'addressline1', 'addressline2', 'postcode', 'country', 'email', 'skype', 'landline', 'mobile', 'workphone', 'fax', 'proffession', 'gender', 'passportno', 'sladdressline1', 'sladdressline2', 'sladdressline3', 'sllandline', 'slmobile', 'slcontactperson', 'onlineuserid', 'paymentsuccess', 'blockrefno', 'paidamt', 'paidamtissuedreceiptstatus', 'utilized', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
		BasePeer::TYPE_COLNAME => array (self::CUSTOMERCODE, self::TITLE, self::FAMILYNAME, self::FIRSTNAME, self::ADDRESSLINE1, self::ADDRESSLINE2, self::POSTCODE, self::COUNTRY, self::EMAIL, self::SKYPE, self::LANDLINE, self::MOBILE, self::WORKPHONE, self::FAX, self::PROFFESSION, self::GENDER, self::PASSPORTNO, self::SLADDRESSLINE1, self::SLADDRESSLINE2, self::SLADDRESSLINE3, self::SLLANDLINE, self::SLMOBILE, self::SLCONTACTPERSON, self::ONLINEUSERID, self::PAYMENTSUCCESS, self::BLOCKREFNO, self::PAIDAMT, self::PAIDAMTISSUEDRECEIPTSTATUS, self::UTILIZED, self::DELETED, self::ADDEDBY, self::ADDEDDATE, self::ADDEDTIME, self::LASTMODIFIEDBY, self::LASTMODIFIEDDATE, self::LASTMODIFIEDTIME, self::DELETEDBY, self::DELETEDDATE, self::DELETEDTIME, ),
		BasePeer::TYPE_FIELDNAME => array ('customercode', 'title', 'familyname', 'firstname', 'addressline1', 'addressline2', 'postcode', 'country', 'email', 'Skype', 'landline', 'mobile', 'workphone', 'fax', 'proffession', 'gender', 'passportno', 'sladdressline1', 'sladdressline2', 'sladdressline3', 'sllandline', 'slmobile', 'slcontactperson', 'onlineuserid', 'paymentsuccess', 'blockrefno', 'paidamt', 'paidamtissuedreceiptstatus', 'utilized', 'deleted', 'addedby', 'addeddate', 'addedtime', 'lastmodifiedby', 'lastmodifieddate', 'lastmodifiedtime', 'deletedby', 'deleteddate', 'deletedtime', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Customercode' => 0, 'Title' => 1, 'Familyname' => 2, 'Firstname' => 3, 'Addressline1' => 4, 'Addressline2' => 5, 'Postcode' => 6, 'Country' => 7, 'Email' => 8, 'Skype' => 9, 'Landline' => 10, 'Mobile' => 11, 'Workphone' => 12, 'Fax' => 13, 'Proffession' => 14, 'Gender' => 15, 'Passportno' => 16, 'Sladdressline1' => 17, 'Sladdressline2' => 18, 'Sladdressline3' => 19, 'Sllandline' => 20, 'Slmobile' => 21, 'Slcontactperson' => 22, 'Onlineuserid' => 23, 'Paymentsuccess' => 24, 'Blockrefno' => 25, 'Paidamt' => 26, 'Paidamtissuedreceiptstatus' => 27, 'Utilized' => 28, 'Deleted' => 29, 'Addedby' => 30, 'Addeddate' => 31, 'Addedtime' => 32, 'Lastmodifiedby' => 33, 'Lastmodifieddate' => 34, 'Lastmodifiedtime' => 35, 'Deletedby' => 36, 'Deleteddate' => 37, 'Deletedtime' => 38, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('customercode' => 0, 'title' => 1, 'familyname' => 2, 'firstname' => 3, 'addressline1' => 4, 'addressline2' => 5, 'postcode' => 6, 'country' => 7, 'email' => 8, 'skype' => 9, 'landline' => 10, 'mobile' => 11, 'workphone' => 12, 'fax' => 13, 'proffession' => 14, 'gender' => 15, 'passportno' => 16, 'sladdressline1' => 17, 'sladdressline2' => 18, 'sladdressline3' => 19, 'sllandline' => 20, 'slmobile' => 21, 'slcontactperson' => 22, 'onlineuserid' => 23, 'paymentsuccess' => 24, 'blockrefno' => 25, 'paidamt' => 26, 'paidamtissuedreceiptstatus' => 27, 'utilized' => 28, 'deleted' => 29, 'addedby' => 30, 'addeddate' => 31, 'addedtime' => 32, 'lastmodifiedby' => 33, 'lastmodifieddate' => 34, 'lastmodifiedtime' => 35, 'deletedby' => 36, 'deleteddate' => 37, 'deletedtime' => 38, ),
		BasePeer::TYPE_COLNAME => array (self::CUSTOMERCODE => 0, self::TITLE => 1, self::FAMILYNAME => 2, self::FIRSTNAME => 3, self::ADDRESSLINE1 => 4, self::ADDRESSLINE2 => 5, self::POSTCODE => 6, self::COUNTRY => 7, self::EMAIL => 8, self::SKYPE => 9, self::LANDLINE => 10, self::MOBILE => 11, self::WORKPHONE => 12, self::FAX => 13, self::PROFFESSION => 14, self::GENDER => 15, self::PASSPORTNO => 16, self::SLADDRESSLINE1 => 17, self::SLADDRESSLINE2 => 18, self::SLADDRESSLINE3 => 19, self::SLLANDLINE => 20, self::SLMOBILE => 21, self::SLCONTACTPERSON => 22, self::ONLINEUSERID => 23, self::PAYMENTSUCCESS => 24, self::BLOCKREFNO => 25, self::PAIDAMT => 26, self::PAIDAMTISSUEDRECEIPTSTATUS => 27, self::UTILIZED => 28, self::DELETED => 29, self::ADDEDBY => 30, self::ADDEDDATE => 31, self::ADDEDTIME => 32, self::LASTMODIFIEDBY => 33, self::LASTMODIFIEDDATE => 34, self::LASTMODIFIEDTIME => 35, self::DELETEDBY => 36, self::DELETEDDATE => 37, self::DELETEDTIME => 38, ),
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
	 * @param      string $column The column name for current table. (i.e. OnlinecustomerPeer::COLUMN_NAME).
	 * @return     string
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
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{
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
		$criteria->setPrimaryTableName(OnlinecustomerPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			OnlinecustomerPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

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
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Onlinecustomer
	 * @throws     PropelException Any exceptions caught during processing will be
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
		return OnlinecustomerPeer::populateObjects(OnlinecustomerPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			OnlinecustomerPeer::addSelectColumns($criteria);
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
	 * @param      Onlinecustomer $value A Onlinecustomer object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Onlinecustomer $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getCustomercode();
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
	 * @param      mixed $value A Onlinecustomer object or a primary key value.
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
	 * @return     Onlinecustomer Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
		$cls = OnlinecustomerPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = OnlinecustomerPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = OnlinecustomerPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
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
	  $dbMap = Propel::getDatabaseMap(BaseOnlinecustomerPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseOnlinecustomerPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new OnlinecustomerTableMap());
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
		return $withPrefix ? OnlinecustomerPeer::CLASS_DEFAULT : OnlinecustomerPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Onlinecustomer or Criteria object.
	 *
	 * @param      mixed $values Criteria or Onlinecustomer object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
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
	 * Method perform an UPDATE on the database, given a Onlinecustomer or Criteria object.
	 *
	 * @param      mixed $values Criteria or Onlinecustomer object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(OnlinecustomerPeer::CUSTOMERCODE);
			$selectCriteria->add(OnlinecustomerPeer::CUSTOMERCODE, $criteria->remove(OnlinecustomerPeer::CUSTOMERCODE), $comparison);

		} else { // $values is Onlinecustomer object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the onlinecustomer table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(OnlinecustomerPeer::TABLE_NAME, $con);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			OnlinecustomerPeer::clearInstancePool();
			OnlinecustomerPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Onlinecustomer or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Onlinecustomer object or primary key or array of primary keys
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
			$con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			OnlinecustomerPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Onlinecustomer) {
			// invalidate the cache for this single object
			OnlinecustomerPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(OnlinecustomerPeer::CUSTOMERCODE, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				OnlinecustomerPeer::removeInstanceFromPool($singleval);
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
			OnlinecustomerPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
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
	 * @param      Onlinecustomer $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Onlinecustomer $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(OnlinecustomerPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(OnlinecustomerPeer::TABLE_NAME);

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

		return BasePeer::doValidate(OnlinecustomerPeer::DATABASE_NAME, OnlinecustomerPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Onlinecustomer
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
	 * @throws     PropelException Any exceptions caught during processing will be
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

