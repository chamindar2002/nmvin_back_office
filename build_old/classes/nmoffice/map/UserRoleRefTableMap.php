<?php


/**
 * This class defines the structure of the 'user_role_ref' table.
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
class UserRoleRefTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'nmoffice.map.UserRoleRefTableMap';

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
		$this->setName('user_role_ref');
		$this->setPhpName('UserRoleRef');
		$this->setClassname('UserRoleRef');
		$this->setPackage('nmoffice');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('UID', 'Uid', 'INTEGER' , 'user', 'UID', true, null, null);
		$this->addForeignPrimaryKey('RID', 'Rid', 'INTEGER' , 'role', 'RID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('uid' => 'uid', ), null, null);
    $this->addRelation('Role', 'Role', RelationMap::MANY_TO_ONE, array('rid' => 'rid', ), null, null);
	} // buildRelations()

} // UserRoleRefTableMap
