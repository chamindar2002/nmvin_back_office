<?php



/**
 * This class defines the structure of the 'tranferedbloks' table.
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
class TranferedbloksTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.TranferedbloksTableMap';

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
        $this->setName('tranferedbloks');
        $this->setPhpName('Tranferedbloks');
        $this->setClassname('Tranferedbloks');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('refno', 'Refno', 'INTEGER', true, null, null);
        $this->addForeignKey('customercode', 'Customercode', 'INTEGER', 'customerdetails', 'customercode', true, null, null);
        $this->addForeignKey('salerefno', 'Salerefno', 'INTEGER', 'sales', 'refno', true, null, null);
        $this->addColumn('blockrefnumber_previous', 'BlockrefnumberPrevious', 'INTEGER', true, null, null);
        $this->addColumn('blockrefnumber_current', 'BlockrefnumberCurrent', 'INTEGER', true, null, null);
        $this->addColumn('currentblock_previouscustomer', 'CurrentblockPreviouscustomer', 'INTEGER', true, null, null);
        $this->addColumn('other1', 'Other1', 'INTEGER', false, null, null);
        $this->addColumn('other2', 'Other2', 'DOUBLE', false, null, null);
        $this->addColumn('other3', 'Other3', 'VARCHAR', false, 150, null);
        $this->addColumn('addedby', 'Addedby', 'INTEGER', false, null, null);
        $this->addColumn('addeddate', 'Addeddate', 'DATE', false, null, null);
        $this->addColumn('addedtime', 'Addedtime', 'TIME', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Customerdetails', 'Customerdetails', RelationMap::MANY_TO_ONE, array('customercode' => 'customercode', ), null, null);
        $this->addRelation('Sales', 'Sales', RelationMap::MANY_TO_ONE, array('salerefno' => 'refno', ), null, null);
    } // buildRelations()

} // TranferedbloksTableMap
