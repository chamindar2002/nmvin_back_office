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
 * @package    propel.generator.nmoffice.map
 */
class LocationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.LocationTableMap';

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
        $this->setName('location');
        $this->setPhpName('Location');
        $this->setClassname('Location');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('locationcode', 'Locationcode', 'INTEGER', true, null, null);
        $this->addColumn('locationname', 'Locationname', 'VARCHAR', true, 100, null);
        $this->addColumn('locationcity', 'Locationcity', 'VARCHAR', true, 100, null);
        $this->addColumn('deleted', 'Deleted', 'BOOLEAN', false, 1, false);
        $this->addColumn('addedby', 'Addedby', 'INTEGER', false, null, null);
        $this->addColumn('addeddate', 'Addeddate', 'DATE', false, null, null);
        $this->addColumn('addedtime', 'Addedtime', 'TIME', false, null, null);
        $this->addColumn('lastmodifiedby', 'Lastmodifiedby', 'INTEGER', false, null, null);
        $this->addColumn('lastmodifieddate', 'Lastmodifieddate', 'DATE', false, null, null);
        $this->addColumn('lastmodifiedtime', 'Lastmodifiedtime', 'TIME', false, null, null);
        $this->addColumn('deletedby', 'Deletedby', 'INTEGER', false, null, null);
        $this->addColumn('deleteddate', 'Deleteddate', 'DATE', false, null, null);
        $this->addColumn('deletedtime', 'Deletedtime', 'TIME', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Project', 'Project', RelationMap::ONE_TO_MANY, array('locationcode' => 'locationcode', ), null, null, 'Projects');
        $this->addRelation('Projectdetails', 'Projectdetails', RelationMap::ONE_TO_MANY, array('locationcode' => 'locationcode', ), null, null, 'Projectdetailss');
        $this->addRelation('Customerreceipts', 'Customerreceipts', RelationMap::ONE_TO_MANY, array('locationcode' => 'locationcode', ), null, null, 'Customerreceiptss');
        $this->addRelation('Sales', 'Sales', RelationMap::ONE_TO_MANY, array('locationcode' => 'locationcode', ), null, null, 'Saless');
        $this->addRelation('Refunds', 'Refunds', RelationMap::ONE_TO_MANY, array('locationcode' => 'locationcode', ), null, null, 'Refundss');
    } // buildRelations()

} // LocationTableMap
