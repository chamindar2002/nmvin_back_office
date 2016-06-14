<?php


/**
 * This class defines the structure of the 'house_ownership_tranfers' table.
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
class HouseOwnershipTranfersTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'nmoffice.map.HouseOwnershipTranfersTableMap';

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
		$this->setName('house_ownership_tranfers');
		$this->setPhpName('HouseOwnershipTranfers');
		$this->setClassname('HouseOwnershipTranfers');
		$this->setPackage('nmoffice');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('REFNO', 'Refno', 'INTEGER', true, null, null);
		$this->addForeignKey('CUSTOMERCODE_CURRENT', 'CustomercodeCurrent', 'INTEGER', 'customerdetails', 'CUSTOMERCODE', true, null, null);
		$this->addColumn('CUSTOMERCODE_PREVIOUS', 'CustomercodePrevious', 'INTEGER', true, null, null);
		$this->addForeignKey('SALEREFNO', 'Salerefno', 'INTEGER', 'sales', 'REFNO', true, null, null);
		$this->addColumn('BLOCKREFNUMBER', 'Blockrefnumber', 'INTEGER', true, null, null);
		$this->addColumn('OTHER1', 'Other1', 'INTEGER', false, null, null);
		$this->addColumn('OTHER2', 'Other2', 'DOUBLE', false, null, null);
		$this->addColumn('OTHER3', 'Other3', 'VARCHAR', false, 150, null);
		$this->addColumn('ADDEDBY', 'Addedby', 'INTEGER', false, null, null);
		$this->addColumn('ADDEDDATE', 'Addeddate', 'DATE', false, null, null);
		$this->addColumn('ADDEDTIME', 'Addedtime', 'TIME', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Customerdetails', 'Customerdetails', RelationMap::MANY_TO_ONE, array('customercode_current' => 'customercode', ), null, null);
    $this->addRelation('Sales', 'Sales', RelationMap::MANY_TO_ONE, array('salerefno' => 'refno', ), null, null);
	} // buildRelations()

} // HouseOwnershipTranfersTableMap
