<?php



/**
 * This class defines the structure of the 'user' table.
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
class UserTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.UserTableMap';

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
        $this->setName('user');
        $this->setPhpName('User');
        $this->setClassname('User');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('uid', 'Uid', 'INTEGER', true, null, null);
        $this->addColumn('enabled', 'Enabled', 'BOOLEAN', true, 1, null);
        $this->addColumn('loginname', 'Loginname', 'VARCHAR', true, 200, null);
        $this->addColumn('familyname', 'Familyname', 'VARCHAR', true, 200, null);
        $this->addColumn('firstname', 'Firstname', 'VARCHAR', true, 200, null);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 32, null);
        $this->addColumn('deleted', 'Deleted', 'BOOLEAN', false, 1, false);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('UserRoleRef', 'UserRoleRef', RelationMap::ONE_TO_MANY, array('uid' => 'uid', ), null, null, 'UserRoleRefs');
        $this->addRelation('Upcomprjctsregister', 'Upcomprjctsregister', RelationMap::ONE_TO_MANY, array('uid' => 'uid', ), null, null, 'Upcomprjctsregisters');
    } // buildRelations()

} // UserTableMap
