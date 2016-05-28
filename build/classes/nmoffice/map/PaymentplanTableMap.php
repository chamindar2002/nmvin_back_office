<?php



/**
 * This class defines the structure of the 'paymentplan' table.
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
class PaymentplanTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.PaymentplanTableMap';

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
        $this->setName('paymentplan');
        $this->setPhpName('Paymentplan');
        $this->setClassname('Paymentplan');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('refno', 'Refno', 'INTEGER', true, null, null);
        $this->addForeignKey('projectcode', 'Projectcode', 'INTEGER', 'project', 'projectcode', true, null, null);
        $this->addColumn('nofinstallments', 'Nofinstallments', 'INTEGER', true, null, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 150, null);
        $this->addColumn('installamount', 'Installamount', 'DOUBLE', true, null, null);
        $this->addColumn('rsvfee', 'Rsvfee', 'DOUBLE', true, null, null);
        $this->addColumn('downpayment', 'Downpayment', 'DOUBLE', true, null, null);
        $this->addColumn('bankloan', 'Bankloan', 'DOUBLE', false, null, 0);
        $this->addColumn('adtnlland', 'Adtnlland', 'DOUBLE', false, null, 0);
        $this->addColumn('totalpayable', 'Totalpayable', 'DOUBLE', true, null, null);
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
        $this->addColumn('devechargers1', 'Devechargers1', 'DOUBLE', false, null, null);
        $this->addColumn('devechargers2', 'Devechargers2', 'DOUBLE', false, null, null);
        $this->addColumn('infrastructure', 'Infrastructure', 'DOUBLE', false, null, null);
        $this->addColumn('occupation', 'Occupation', 'DOUBLE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Project', 'Project', RelationMap::MANY_TO_ONE, array('projectcode' => 'projectcode', ), null, null);
        $this->addRelation('Sales', 'Sales', RelationMap::ONE_TO_MANY, array('refno' => 'payplanrefno', ), null, null, 'Saless');
    } // buildRelations()

} // PaymentplanTableMap
