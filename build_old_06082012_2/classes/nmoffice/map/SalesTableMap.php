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
 * @package    nmoffice.map
 */
class SalesTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'nmoffice.map.SalesTableMap';

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
		$this->setName('sales');
		$this->setPhpName('Sales');
		$this->setClassname('Sales');
		$this->setPackage('nmoffice');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('REFNO', 'Refno', 'INTEGER', true, null, null);
		$this->addForeignKey('CUSTOMERCODE', 'Customercode', 'INTEGER', 'customerdetails', 'CUSTOMERCODE', true, null, null);
		$this->addForeignKey('LOCATIONCODE', 'Locationcode', 'INTEGER', 'location', 'LOCATIONCODE', true, null, null);
		$this->addForeignKey('PROJECTCODE', 'Projectcode', 'INTEGER', 'project', 'PROJECTCODE', true, null, null);
		$this->addForeignKey('BLOCKREFNUMBER', 'Blockrefnumber', 'INTEGER', 'projectdetails', 'REFNO', true, null, null);
		$this->addForeignKey('PAYPLANREFNO', 'Payplanrefno', 'INTEGER', 'paymentplan', 'REFNO', true, null, null);
		$this->addColumn('NOFINSTALLMENTS', 'Nofinstallments', 'INTEGER', true, null, null);
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', true, 150, null);
		$this->addColumn('INSTALLAMOUNT', 'Installamount', 'DOUBLE', true, null, null);
		$this->addColumn('TOTALPAYABLE', 'Totalpayable', 'DOUBLE', true, null, null);
		$this->addColumn('PAYMENTDUEDATE', 'Paymentduedate', 'INTEGER', false, null, null);
		$this->addColumn('AGREMENTSTARTDATE', 'Agrementstartdate', 'DATE', false, null, null);
		$this->addColumn('AGREMENTFINISHDATE', 'Agrementfinishdate', 'DATE', false, null, null);
		$this->addColumn('SALETYPE', 'Saletype', 'BOOLEAN', false, null, false);
		$this->addColumn('SALERIGHTOFF_AMT', 'SalerightoffAmt', 'FLOAT', false, null, 0);
		$this->addColumn('SALERIGHTOFF_STATUS', 'SalerightoffStatus', 'BOOLEAN', false, null, false);
		$this->addColumn('SALERIGHTOFF_COMMENT', 'SalerightoffComment', 'LONGVARCHAR', false, null, null);
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
    $this->addRelation('Customerdetails', 'Customerdetails', RelationMap::MANY_TO_ONE, array('customercode' => 'customercode', ), null, null);
    $this->addRelation('Projectdetails', 'Projectdetails', RelationMap::MANY_TO_ONE, array('blockrefnumber' => 'refno', ), null, null);
    $this->addRelation('Paymentplan', 'Paymentplan', RelationMap::MANY_TO_ONE, array('payplanrefno' => 'refno', ), null, null);
    $this->addRelation('Project', 'Project', RelationMap::MANY_TO_ONE, array('projectcode' => 'projectcode', ), null, null);
    $this->addRelation('Location', 'Location', RelationMap::MANY_TO_ONE, array('locationcode' => 'locationcode', ), null, null);
    $this->addRelation('Customerreceipts', 'Customerreceipts', RelationMap::ONE_TO_MANY, array('refno' => 'salerefno', ), null, null);
    $this->addRelation('Refunds', 'Refunds', RelationMap::ONE_TO_MANY, array('refno' => 'salerefno', ), null, null);
    $this->addRelation('Tranferedbloks', 'Tranferedbloks', RelationMap::ONE_TO_MANY, array('refno' => 'salerefno', ), null, null);
	} // buildRelations()

} // SalesTableMap
