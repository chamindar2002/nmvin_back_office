<?php


/**
 * This class defines the structure of the 'blockedips' table.
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
class BlockedipsTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'nmoffice.map.BlockedipsTableMap';

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
		$this->setName('blockedips');
		$this->setPhpName('Blockedips');
		$this->setClassname('Blockedips');
		$this->setPackage('nmoffice');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('REFNO', 'Refno', 'INTEGER', true, null, null);
		$this->addColumn('BLOCKED_IP', 'BlockedIp', 'VARCHAR', true, 200, null);
		$this->addColumn('BLOCKED_EMAIL', 'BlockedEmail', 'VARCHAR', true, 200, null);
		$this->addColumn('STATUS', 'Status', 'BOOLEAN', false, null, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // BlockedipsTableMap
