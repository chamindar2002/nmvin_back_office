<?php



/**
 * This class defines the structure of the 'customer_receiptmethodofpayment' table.
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
class CustomerReceiptmethodofpaymentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.CustomerReceiptmethodofpaymentTableMap';

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
        $this->setName('customer_receiptmethodofpayment');
        $this->setPhpName('CustomerReceiptmethodofpayment');
        $this->setClassname('CustomerReceiptmethodofpayment');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('refno', 'Refno', 'INTEGER', true, null, null);
        $this->addForeignKey('receiptno', 'Receiptno', 'INTEGER', 'customerreceipts', 'receiptno', true, null, null);
        $this->addColumn('receiptstatus', 'Receiptstatus', 'VARCHAR', true, 2, null);
        $this->addColumn('bank', 'Bank', 'VARCHAR', true, 10, null);
        $this->addColumn('chequnumber', 'Chequnumber', 'VARCHAR', true, 20, null);
        $this->addColumn('chequedate', 'Chequedate', 'DATE', true, null, null);
        $this->addColumn('amount', 'Amount', 'DOUBLE', false, null, null);
        $this->addColumn('deleted', 'Deleted', 'BOOLEAN', false, 1, false);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Customerreceipts', 'Customerreceipts', RelationMap::MANY_TO_ONE, array('receiptno' => 'receiptno', ), null, null);
    } // buildRelations()

} // CustomerReceiptmethodofpaymentTableMap
