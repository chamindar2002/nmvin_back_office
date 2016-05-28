<?php



/**
 * This class defines the structure of the 'sales' table.
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
class SalesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.SalesTableMap';

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
        $this->setName('sales');
        $this->setPhpName('Sales');
        $this->setClassname('Sales');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('refno', 'Refno', 'INTEGER', true, null, null);
        $this->addForeignKey('customercode', 'Customercode', 'INTEGER', 'customerdetails', 'customercode', true, null, null);
        $this->addForeignKey('locationcode', 'Locationcode', 'INTEGER', 'location', 'locationcode', true, null, null);
        $this->addForeignKey('projectcode', 'Projectcode', 'INTEGER', 'project', 'projectcode', true, null, null);
        $this->addForeignKey('blockrefnumber', 'Blockrefnumber', 'INTEGER', 'projectdetails', 'refno', true, null, null);
        $this->addForeignKey('payplanrefno', 'Payplanrefno', 'INTEGER', 'paymentplan', 'refno', true, null, null);
        $this->addColumn('nofinstallments', 'Nofinstallments', 'INTEGER', true, null, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 150, null);
        $this->addColumn('installamount', 'Installamount', 'DOUBLE', true, null, null);
        $this->addColumn('totalpayable', 'Totalpayable', 'DOUBLE', true, null, null);
        $this->addColumn('paymentduedate', 'Paymentduedate', 'INTEGER', false, null, null);
        $this->addColumn('agrementstartdate', 'Agrementstartdate', 'DATE', false, null, null);
        $this->addColumn('agrementfinishdate', 'Agrementfinishdate', 'DATE', false, null, null);
        $this->addColumn('saletype', 'Saletype', 'BOOLEAN', false, 1, false);
        $this->addColumn('salerightoff_amt', 'SalerightoffAmt', 'FLOAT', false, null, 0);
        $this->addColumn('salerightoff_status', 'SalerightoffStatus', 'BOOLEAN', false, 1, false);
        $this->addColumn('salerightoff_comment', 'SalerightoffComment', 'LONGVARCHAR', false, null, null);
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
        $this->addRelation('Customerdetails', 'Customerdetails', RelationMap::MANY_TO_ONE, array('customercode' => 'customercode', ), null, null);
        $this->addRelation('Projectdetails', 'Projectdetails', RelationMap::MANY_TO_ONE, array('blockrefnumber' => 'refno', ), null, null);
        $this->addRelation('Paymentplan', 'Paymentplan', RelationMap::MANY_TO_ONE, array('payplanrefno' => 'refno', ), null, null);
        $this->addRelation('Project', 'Project', RelationMap::MANY_TO_ONE, array('projectcode' => 'projectcode', ), null, null);
        $this->addRelation('Location', 'Location', RelationMap::MANY_TO_ONE, array('locationcode' => 'locationcode', ), null, null);
        $this->addRelation('Customerreceipts', 'Customerreceipts', RelationMap::ONE_TO_MANY, array('refno' => 'salerefno', ), null, null, 'Customerreceiptss');
        $this->addRelation('Refunds', 'Refunds', RelationMap::ONE_TO_MANY, array('refno' => 'salerefno', ), null, null, 'Refundss');
        $this->addRelation('Tranferedbloks', 'Tranferedbloks', RelationMap::ONE_TO_MANY, array('refno' => 'salerefno', ), null, null, 'Tranferedblokss');
    } // buildRelations()

} // SalesTableMap
