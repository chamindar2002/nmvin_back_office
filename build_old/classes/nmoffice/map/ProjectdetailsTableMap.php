<?php


/**
 * This class defines the structure of the 'projectdetails' table.
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
class ProjectdetailsTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'nmoffice.map.ProjectdetailsTableMap';

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
		$this->setName('projectdetails');
		$this->setPhpName('Projectdetails');
		$this->setClassname('Projectdetails');
		$this->setPackage('nmoffice');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('REFNO', 'Refno', 'INTEGER', true, null, null);
		$this->addForeignKey('LOCATIONCODE', 'Locationcode', 'INTEGER', 'location', 'LOCATIONCODE', true, null, null);
		$this->addForeignKey('PROJECTCODE', 'Projectcode', 'INTEGER', 'project', 'PROJECTCODE', true, null, null);
		$this->addForeignKey('CUSTOMERCODE', 'Customercode', 'INTEGER', 'customerdetails', 'CUSTOMERCODE', true, null, null);
		$this->addForeignKey('HOUSECATCODE', 'Housecatcode', 'INTEGER', 'housecategory', 'HOUSECATCODE', true, null, null);
		$this->addColumn('BLOCKNUMBER', 'Blocknumber', 'VARCHAR', true, 100, null);
		$this->addColumn('BLOCKSIZE', 'Blocksize', 'DOUBLE', true, null, null);
		$this->addColumn('BLOCKPRICE', 'Blockprice', 'DOUBLE', true, null, null);
		$this->addColumn('RESERVEDATE', 'Reservedate', 'DATE', true, null, null);
		$this->addColumn('RESERVESTATUS', 'Reservestatus', 'INTEGER', false, null, 0);
		$this->addColumn('PAYMENTMETHOD', 'Paymentmethod', 'INTEGER', true, null, null);
		$this->addColumn('DUEDATE', 'Duedate', 'DATE', true, null, null);
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
    $this->addRelation('Location', 'Location', RelationMap::MANY_TO_ONE, array('locationcode' => 'locationcode', ), null, null);
    $this->addRelation('Project', 'Project', RelationMap::MANY_TO_ONE, array('projectcode' => 'projectcode', ), null, null);
    $this->addRelation('Customerdetails', 'Customerdetails', RelationMap::MANY_TO_ONE, array('customercode' => 'customercode', ), null, null);
    $this->addRelation('Housecategory', 'Housecategory', RelationMap::MANY_TO_ONE, array('housecatcode' => 'housecatcode', ), null, null);
    $this->addRelation('Sales', 'Sales', RelationMap::ONE_TO_MANY, array('refno' => 'blockrefnumber', ), null, null);
	} // buildRelations()

} // ProjectdetailsTableMap
