<?php



/**
 * This class defines the structure of the 'onlinecustomer' table.
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
class OnlinecustomerTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nmoffice.map.OnlinecustomerTableMap';

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
        $this->setName('onlinecustomer');
        $this->setPhpName('Onlinecustomer');
        $this->setClassname('Onlinecustomer');
        $this->setPackage('nmoffice');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('customercode', 'Customercode', 'INTEGER', true, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', false, 10, null);
        $this->addColumn('familyname', 'Familyname', 'VARCHAR', true, 100, null);
        $this->addColumn('firstname', 'Firstname', 'VARCHAR', true, 100, null);
        $this->addColumn('addressline1', 'Addressline1', 'VARCHAR', true, 100, null);
        $this->addColumn('addressline2', 'Addressline2', 'VARCHAR', true, 100, null);
        $this->addColumn('postcode', 'Postcode', 'VARCHAR', true, 20, null);
        $this->addColumn('country', 'Country', 'VARCHAR', true, 50, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, null);
        $this->addColumn('Skype', 'Skype', 'VARCHAR', false, 100, null);
        $this->addColumn('landline', 'Landline', 'VARCHAR', true, 100, null);
        $this->addColumn('mobile', 'Mobile', 'VARCHAR', false, 100, null);
        $this->addColumn('workphone', 'Workphone', 'VARCHAR', false, 100, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 100, null);
        $this->addColumn('proffession', 'Proffession', 'VARCHAR', false, 100, null);
        $this->addColumn('gender', 'Gender', 'VARCHAR', false, 10, null);
        $this->addColumn('passportno', 'Passportno', 'VARCHAR', true, 100, null);
        $this->addColumn('sladdressline1', 'Sladdressline1', 'VARCHAR', true, 100, null);
        $this->addColumn('sladdressline2', 'Sladdressline2', 'VARCHAR', true, 100, null);
        $this->addColumn('sladdressline3', 'Sladdressline3', 'VARCHAR', true, 100, null);
        $this->addColumn('sllandline', 'Sllandline', 'VARCHAR', true, 100, null);
        $this->addColumn('slmobile', 'Slmobile', 'VARCHAR', false, 100, null);
        $this->addColumn('slcontactperson', 'Slcontactperson', 'VARCHAR', true, 100, null);
        $this->addColumn('onlineuserid', 'Onlineuserid', 'INTEGER', false, null, 0);
        $this->addColumn('paymentsuccess', 'Paymentsuccess', 'BOOLEAN', false, 1, false);
        $this->addColumn('blockrefno', 'Blockrefno', 'INTEGER', false, null, 0);
        $this->addColumn('paidamt', 'Paidamt', 'FLOAT', false, null, 0);
        $this->addColumn('paidamtissuedreceiptstatus', 'Paidamtissuedreceiptstatus', 'BOOLEAN', false, 1, false);
        $this->addColumn('utilized', 'Utilized', 'BOOLEAN', false, 1, false);
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
    } // buildRelations()

} // OnlinecustomerTableMap
