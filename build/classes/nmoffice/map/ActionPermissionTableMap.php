<?php



/**
 * This class defines the structure of the 'action_permission' table.
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
class ActionPermissionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.ActionPermissionTableMap';

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
        $this->setName('action_permission');
        $this->setPhpName('ActionPermission');
        $this->setClassname('ActionPermission');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('module', 'Module', 'VARCHAR', true, 50, null);
        $this->addColumn('action', 'Action', 'VARCHAR', true, 100, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 150, null);
        $this->addColumn('systemid', 'Systemid', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RoleActionPermissionRef', 'RoleActionPermissionRef', RelationMap::ONE_TO_MANY, array('id' => 'aid', ), null, null, 'RoleActionPermissionRefs');
    } // buildRelations()

} // ActionPermissionTableMap
