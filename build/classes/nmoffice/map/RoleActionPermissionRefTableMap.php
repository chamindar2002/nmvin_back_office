<?php



/**
 * This class defines the structure of the 'role_action_permission_ref' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.nmoffice.map
 */
class RoleActionPermissionRefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.RoleActionPermissionRefTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('role_action_permission_ref');
        $this->setPhpName('RoleActionPermissionRef');
        $this->setClassname('RoleActionPermissionRef');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('rid', 'Rid', 'INTEGER' , 'role', 'rid', true, null, null);
        $this->addForeignPrimaryKey('aid', 'Aid', 'INTEGER' , 'action_permission', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Role', 'Role', RelationMap::MANY_TO_ONE, array('rid' => 'rid', ), null, null);
        $this->addRelation('ActionPermission', 'ActionPermission', RelationMap::MANY_TO_ONE, array('aid' => 'id', ), null, null);
    } // buildRelations()

} // RoleActionPermissionRefTableMap
