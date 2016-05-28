<?php



/**
 * This class defines the structure of the 'refunds' table.
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
class RefundsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.RefundsTableMap';

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
        $this->setName('refunds');
        $this->setPhpName('Refunds');
        $this->setClassname('Refunds');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('refno', 'Refno', 'INTEGER', true, null, null);
        $this->addForeignKey('salerefno', 'Salerefno', 'INTEGER', 'sales', 'refno', true, null, null);
        $this->addForeignKey('customercode', 'Customercode', 'INTEGER', 'customerdetails', 'customercode', true, null, null);
        $this->addForeignKey('locationcode', 'Locationcode', 'INTEGER', 'location', 'locationcode', true, null, null);
        $this->addForeignKey('projectcode', 'Projectcode', 'INTEGER', 'project', 'projectcode', true, null, null);
        $this->addForeignKey('blockrefnumber', 'Blockrefnumber', 'INTEGER', 'projectdetails', 'refno', true, null, null);
        $this->addColumn('payplanrefno', 'Payplanrefno', 'INTEGER', true, null, null);
        $this->addColumn('refundamount', 'Refundamount', 'DOUBLE', true, null, null);
        $this->addColumn('refundate', 'Refundate', 'DATE', false, null, null);
        $this->addColumn('deleted', 'Deleted', 'BOOLEAN', false, 1, false);
        $this->addColumn('deletedby', 'Deletedby', 'INTEGER', false, null, null);
        $this->addColumn('deleteddate', 'Deleteddate', 'DATE', false, null, null);
        $this->addColumn('deletedtime', 'Deletedtime', 'TIME', false, null, null);
        $this->addColumn('addedby', 'Addedby', 'INTEGER', false, null, null);
        $this->addColumn('addeddate', 'Addeddate', 'DATE', false, null, null);
        $this->addColumn('addedtime', 'Addedtime', 'TIME', false, null, null);
        $this->addColumn('lastmodifiedby', 'Lastmodifiedby', 'INTEGER', false, null, null);
        $this->addColumn('lastmodifieddate', 'Lastmodifieddate', 'DATE', false, null, null);
        $this->addColumn('lastmodifiedtime', 'Lastmodifiedtime', 'TIME', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Customerdetails', 'Customerdetails', RelationMap::MANY_TO_ONE, array('customercode' => 'customercode', ), null, null);
        $this->addRelation('Projectdetails', 'Projectdetails', RelationMap::MANY_TO_ONE, array('blockrefnumber' => 'refno', ), null, null);
        $this->addRelation('Project', 'Project', RelationMap::MANY_TO_ONE, array('projectcode' => 'projectcode', ), null, null);
        $this->addRelation('Location', 'Location', RelationMap::MANY_TO_ONE, array('locationcode' => 'locationcode', ), null, null);
        $this->addRelation('Sales', 'Sales', RelationMap::MANY_TO_ONE, array('salerefno' => 'refno', ), null, null);
    } // buildRelations()

} // RefundsTableMap
