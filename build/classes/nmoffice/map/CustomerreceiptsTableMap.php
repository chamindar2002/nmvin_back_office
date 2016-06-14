<?php



/**
 * This class defines the structure of the 'customerreceipts' table.
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
class CustomerreceiptsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.CustomerreceiptsTableMap';

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
        $this->setName('customerreceipts');
        $this->setPhpName('Customerreceipts');
        $this->setClassname('Customerreceipts');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('receiptno', 'Receiptno', 'INTEGER', true, null, null);
        $this->addForeignKey('salerefno', 'Salerefno', 'INTEGER', 'sales', 'refno', true, null, null);
        $this->addForeignKey('locationcode', 'Locationcode', 'INTEGER', 'location', 'locationcode', true, null, null);
        $this->addForeignKey('projectcode', 'Projectcode', 'INTEGER', 'project', 'projectcode', true, null, null);
        $this->addForeignKey('customercode', 'Customercode', 'INTEGER', 'customerdetails', 'customercode', true, null, null);
        $this->addColumn('receiptdate', 'Receiptdate', 'DATE', true, null, null);
        $this->addColumn('oldreceiptno', 'Oldreceiptno', 'VARCHAR', false, 20, null);
        $this->addColumn('blocknumber', 'Blocknumber', 'INTEGER', true, null, null);
        $this->addColumn('paidfor', 'Paidfor', 'VARCHAR', true, 10, null);
        $this->addColumn('paymenttype', 'Paymenttype', 'INTEGER', true, null, null);
        $this->addColumn('paidamount', 'Paidamount', 'DOUBLE', true, null, null);
        $this->addColumn('installment_no', 'InstallmentNo', 'INTEGER', true, null, null);
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
        $this->addRelation('Location', 'Location', RelationMap::MANY_TO_ONE, array('locationcode' => 'locationcode', ), null, null);
        $this->addRelation('Project', 'Project', RelationMap::MANY_TO_ONE, array('projectcode' => 'projectcode', ), null, null);
        $this->addRelation('Customerdetails', 'Customerdetails', RelationMap::MANY_TO_ONE, array('customercode' => 'customercode', ), null, null);
        $this->addRelation('Sales', 'Sales', RelationMap::MANY_TO_ONE, array('salerefno' => 'refno', ), null, null);
        $this->addRelation('CustomerReceiptmethodofpayment', 'CustomerReceiptmethodofpayment', RelationMap::ONE_TO_MANY, array('receiptno' => 'receiptno', ), null, null, 'CustomerReceiptmethodofpayments');
    } // buildRelations()

} // CustomerreceiptsTableMap
