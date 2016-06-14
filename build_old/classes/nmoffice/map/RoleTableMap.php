<?php


/**
 * This class defines the structure of the 'role' table.
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
class RoleTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'nmoffice.map.RoleTableMap';

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
		$this->setName('role');
		$this->setPhpName('Role');
		$this->setClassname('Role');
		$this->setPackage('nmoffice');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('RID', 'Rid', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 20, null);
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', true, 150, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('UserRoleRef', 'UserRoleRef', RelationMap::ONE_TO_MANY, array('rid' => 'rid', ), null, null);
    $this->addRelation('RoleActionPermissionRef', 'RoleActionPermissionRef', RelationMap::ONE_TO_MANY, array('rid' => 'rid', ), null, null);
	} // buildRelations()

} // RoleTableMap
