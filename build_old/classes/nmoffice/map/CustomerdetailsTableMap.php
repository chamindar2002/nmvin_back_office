<?php


/**
 * This class defines the structure of the 'customerdetails' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    nmoffice.map
 */
class CustomerdetailsTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'nmoffice.map.CustomerdetailsTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('customerdetails');
		$this->setPhpName('Customerdetails');
		$this->setClassname('Customerdetails');
		$this->setPackage('nmoffice');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('CUSTOMERCODE', 'Customercode', 'INTEGER', true, null, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', false, 10, null);
		$this->addColumn('FAMILYNAME', 'Familyname', 'VARCHAR', true, 100, null);
		$this->addColumn('FIRSTNAME', 'Firstname', 'VARCHAR', true, 100, null);
		$this->addColumn('ADDRESSLINE1', 'Addressline1', 'VARCHAR', true, 100, null);
		$this->addColumn('ADDRESSLINE2', 'Addressline2', 'VARCHAR', true, 100, null);
		$this->addColumn('POSTCODE', 'Postcode', 'VARCHAR', true, 20, null);
		$this->addColumn('COUNTRY', 'Country', 'VARCHAR', true, 50, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 100, null);
		$this->addColumn('SKYPE', 'Skype', 'VARCHAR', false, 100, null);
		$this->addColumn('LANDLINE', 'Landline', 'VARCHAR', true, 100, null);
		$this->addColumn('MOBILE', 'Mobile', 'VARCHAR', false, 100, null);
		$this->addColumn('WORKPHONE', 'Workphone', 'VARCHAR', false, 100, null);
		$this->addColumn('FAX', 'Fax', 'VARCHAR', false, 100, null);
		$this->addColumn('PROFFESSION', 'Proffession', 'VARCHAR', false, 100, null);
		$this->addColumn('GENDER', 'Gender', 'VARCHAR', false, 10, null);
		$this->addColumn('PASSPORTNO', 'Passportno', 'VARCHAR', true, 100, null);
		$this->addColumn('SLADDRESSLINE1', 'Sladdressline1', 'VARCHAR', true, 100, null);
		$this->addColumn('SLADDRESSLINE2', 'Sladdressline2', 'VARCHAR', true, 100, null);
		$this->addColumn('SLADDRESSLINE3', 'Sladdressline3', 'VARCHAR', true, 100, null);
		$this->addColumn('SLLANDLINE', 'Sllandline', 'VARCHAR', true, 100, null);
		$this->addColumn('SLMOBILE', 'Slmobile', 'VARCHAR', false, 100, null);
		$this->addColumn('SLCONTACTPERSON', 'Slcontactperson', 'VARCHAR', true, 100, null);
		$this->addColumn('DELETED', 'Deleted', 'BOOLEAN', false, null, false);
		$this->addColumn('ADDEDBY', 'Addedby', 'INTEGER', false, null, null);
		$this->addColumn('ADDEDDATE', 'Addeddate', 'DATE', false, null, null);
		$this->addColumn('ADDEDTIME', 'Addedtime', 'TIME', false, null, null);
		$this->addColumn('LASTMODIFIEDBY', 'Lastmodifiedby', 'INTEGER', false, null, null);
		$this->addColumn('LASTMODIFIEDDATE', 'Lastmodifieddate', 'DATE', false, null, null);
		$this->addColumn('LASTMODIFIEDTIME', 'Lastmodifiedtime', 'TIME', false, null, null);
		$this->addColumn('DELETEDBY', 'Deletedby', 'INTEGER', false, null, null);
		$this->addColumn('DELETEDDATE', 'Deleteddate', 'DATE', false, null, null);
		$this->addColumn('DELETEDTIME', 'Deletedtime', 'TIME', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Projectdetails', 'Projectdetails', RelationMap::ONE_TO_MANY, array('customercode' => 'customercode', ), null, null);
    $this->addRelation('Customerreceipts', 'Customerreceipts', RelationMap::ONE_TO_MANY, array('customercode' => 'customercode', ), null, null);
    $this->addRelation('Sales', 'Sales', RelationMap::ONE_TO_MANY, array('customercode' => 'customercode', ), null, null);
	} // buildRelations()

} // CustomerdetailsTableMap
