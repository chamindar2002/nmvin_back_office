<?php


/**
 * This class defines the structure of the 'location' table.
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
class LocationTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'nmoffice.map.LocationTableMap';

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
		$this->setName('location');
		$this->setPhpName('Location');
		$this->setClassname('Location');
		$this->setPackage('nmoffice');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('LOCATIONCODE', 'Locationcode', 'INTEGER', true, null, null);
		$this->addColumn('LOCATIONNAME', 'Locationname', 'VARCHAR', true, 100, null);
		$this->addColumn('LOCATIONCITY', 'Locationcity', 'VARCHAR', true, 100, null);
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
    $this->addRelation('Project', 'Project', RelationMap::ONE_TO_MANY, array('locationcode' => 'locationcode', ), null, null);
    $this->addRelation('Projectdetails', 'Projectdetails', RelationMap::ONE_TO_MANY, array('locationcode' => 'locationcode', ), null, null);
    $this->addRelation('Customerreceipts', 'Customerreceipts', RelationMap::ONE_TO_MANY, array('locationcode' => 'locationcode', ), null, null);
    $this->addRelation('Sales', 'Sales', RelationMap::ONE_TO_MANY, array('locationcode' => 'locationcode', ), null, null);
    $this->addRelation('Refunds', 'Refunds', RelationMap::ONE_TO_MANY, array('locationcode' => 'locationcode', ), null, null);
	} // buildRelations()

} // LocationTableMap
