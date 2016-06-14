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
 * @package    nmoffice.map
 */
class CustomerreceiptsTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'nmoffice.map.CustomerreceiptsTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
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
		$this->addPrimaryKey('RECEIPTNO', 'Receiptno', 'INTEGER', true, null, null);
		$this->addForeignKey('SALEREFNO', 'Salerefno', 'INTEGER', 'sales', 'REFNO', true, null, null);
		$this->addForeignKey('LOCATIONCODE', 'Locationcode', 'INTEGER', 'location', 'LOCATIONCODE', true, null, null);
		$this->addForeignKey('PROJECTCODE', 'Projectcode', 'INTEGER', 'project', 'PROJECTCODE', true, null, null);
		$this->addForeignKey('CUSTOMERCODE', 'Customercode', 'INTEGER', 'customerdetails', 'CUSTOMERCODE', true, null, null);
		$this->addColumn('RECEIPTDATE', 'Receiptdate', 'DATE', true, null, null);
		$this->addColumn('OLDRECEIPTNO', 'Oldreceiptno', 'VARCHAR', false, 20, null);
		$this->addColumn('BLOCKNUMBER', 'Blocknumber', 'INTEGER', true, null, null);
		$this->addColumn('PAIDFOR', 'Paidfor', 'VARCHAR', true, 10, null);
		$this->addColumn('PAYMENTTYPE', 'Paymenttype', 'INTEGER', true, null, null);
		$this->addColumn('PAIDAMOUNT', 'Paidamount', 'DOUBLE', true, null, null);
		$this->addColumn('DELETED', 'Deleted', 'BOOLEAN', false, null, false);
		$this->addColumn('ADDEDBY', 'Addedby', 'INTEGER', false, null, null);
		$this->addColumn('ADDEDDATE', 'Addeddate', 'DATE', false, null, null);
		$this->addColumn('ADDEDTIME', 'Addedtime', 'TIME', false, null, null);
		$this->addColumn('LASTMODIFIEDBY', 'Lastmodifiedby', 'INTEGER', false, null, null);
		$this->addColumn('LASTMODIFIEDDATE', 'Lastmodifieddate', 'DATE', false, null, null);
		$this->addColumn('LASTMODIFIEDTIME', 'Lastmodifiedtime', 'TIME', false, null, null);
		$this->addColumn('DELETEDBY', 'Deletedby', 'INTEGER', false, null, null);
		$this->addColumn('DELETEDDATE', 'Deleteddate', 'DATE', false, null, null);
		$this->addColumn('DELETEDTIME', 'Deletedtime', 'TIME', false, null, null);
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
    $this->addRelation('CustomerReceiptmethodofpayment', 'CustomerReceiptmethodofpayment', RelationMap::ONE_TO_MANY, array('receiptno' => 'receiptno', ), null, null);
	} // buildRelations()

} // CustomerreceiptsTableMap
