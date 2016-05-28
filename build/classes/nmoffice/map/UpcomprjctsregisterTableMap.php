<?php



/**
 * This class defines the structure of the 'upcomprjctsregister' table.
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
class UpcomprjctsregisterTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.UpcomprjctsregisterTableMap';

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
        $this->setName('upcomprjctsregister');
        $this->setPhpName('Upcomprjctsregister');
        $this->setClassname('Upcomprjctsregister');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('refno', 'Refno', 'INTEGER', true, null, null);
        $this->addForeignKey('uid', 'Uid', 'INTEGER', 'user', 'uid', true, null, null);
        $this->addColumn('upcprojectid', 'Upcprojectid', 'INTEGER', true, null, null);
        $this->addColumn('upcprojectname', 'Upcprojectname', 'VARCHAR', true, 200, null);
        $this->addColumn('status', 'Status', 'BOOLEAN', false, 1, true);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('uid' => 'uid', ), null, null);
    } // buildRelations()

} // UpcomprjctsregisterTableMap
