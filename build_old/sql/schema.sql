
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- user
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;


CREATE TABLE `user`
(
	`uid` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'User ID',
	`enabled` TINYINT  NOT NULL COMMENT 'User is enabled',
	`loginname` VARCHAR(20)  NOT NULL COMMENT 'User Name',
	`familyname` VARCHAR(200)  NOT NULL COMMENT 'Family Name',
	`firstname` VARCHAR(200)  NOT NULL COMMENT 'First Name',
	`password` VARCHAR(32)  NOT NULL COMMENT 'Password',
	`deleted` TINYINT default 0 COMMENT 'Delete Status',
	PRIMARY KEY (`uid`),
	UNIQUE KEY `user_U_1` (`loginname`)
)Type=MyISAM COMMENT='User';

#-----------------------------------------------------------------------------
#-- role
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `role`;


CREATE TABLE `role`
(
	`rid` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'Role ID',
	`name` VARCHAR(20)  NOT NULL COMMENT 'Role Name',
	`description` VARCHAR(150)  NOT NULL COMMENT 'Description',
	PRIMARY KEY (`rid`),
	UNIQUE KEY `role_U_1` (`name`)
)Type=MyISAM COMMENT='User Role';

#-----------------------------------------------------------------------------
#-- action_permission
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `action_permission`;


CREATE TABLE `action_permission`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'Action ID',
	`module` VARCHAR(50)  NOT NULL COMMENT 'Module',
	`action` VARCHAR(100)  NOT NULL COMMENT 'Action Name',
	`description` VARCHAR(150)  NOT NULL COMMENT 'Description',
	`systemid` INTEGER default 0 NOT NULL COMMENT 'System ID Number',
	PRIMARY KEY (`id`),
	UNIQUE KEY `action_permission_U_1` (`module`, `action`)
)Type=MyISAM COMMENT='Action Permission';

#-----------------------------------------------------------------------------
#-- user_role_ref
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `user_role_ref`;


CREATE TABLE `user_role_ref`
(
	`uid` INTEGER  NOT NULL,
	`rid` INTEGER  NOT NULL,
	PRIMARY KEY (`uid`,`rid`),
	CONSTRAINT `user_role_ref_FK_1`
		FOREIGN KEY (`uid`)
		REFERENCES `user` (`uid`),
	INDEX `user_role_ref_FI_2` (`rid`),
	CONSTRAINT `user_role_ref_FK_2`
		FOREIGN KEY (`rid`)
		REFERENCES `role` (`rid`)
)Type=MyISAM COMMENT='User - Role Mapping';

#-----------------------------------------------------------------------------
#-- role_action_permission_ref
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `role_action_permission_ref`;


CREATE TABLE `role_action_permission_ref`
(
	`rid` INTEGER  NOT NULL,
	`aid` INTEGER  NOT NULL,
	PRIMARY KEY (`rid`,`aid`),
	CONSTRAINT `role_action_permission_ref_FK_1`
		FOREIGN KEY (`rid`)
		REFERENCES `role` (`rid`),
	INDEX `role_action_permission_ref_FI_2` (`aid`),
	CONSTRAINT `role_action_permission_ref_FK_2`
		FOREIGN KEY (`aid`)
		REFERENCES `action_permission` (`id`)
)Type=MyISAM COMMENT='Role - Action_Permission Mapping';

#-----------------------------------------------------------------------------
#-- location
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `location`;


CREATE TABLE `location`
(
	`locationcode` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'Location Code',
	`locationname` VARCHAR(100)  NOT NULL COMMENT 'Location Name',
	`locationcity` VARCHAR(100)  NOT NULL COMMENT 'City Of Project Location',
	`deleted` TINYINT default 0 COMMENT 'Record deleted',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	`lastmodifiedby` INTEGER COMMENT 'Last modified by',
	`lastmodifieddate` DATE COMMENT 'Last modified date',
	`lastmodifiedtime` TIME COMMENT 'Last modified time',
	`deletedby` INTEGER COMMENT 'Deleted by',
	`deleteddate` DATE COMMENT 'Deleted Date',
	`deletedtime` TIME COMMENT 'Deleted Time',
	PRIMARY KEY (`locationcode`)
)Type=MyISAM COMMENT='project location';

#-----------------------------------------------------------------------------
#-- project
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `project`;


CREATE TABLE `project`
(
	`projectcode` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'Project Code',
	`locationcode` INTEGER  NOT NULL COMMENT 'Location Code',
	`projectname` VARCHAR(100)  NOT NULL COMMENT 'Project Name',
	`nofblocks` INTEGER COMMENT 'No.of blocks in project',
	`deleted` TINYINT default 0 COMMENT 'Record deleted',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	`lastmodifiedby` INTEGER COMMENT 'Last modified by',
	`lastmodifieddate` DATE COMMENT 'Last modified date',
	`lastmodifiedtime` TIME COMMENT 'Last modified time',
	`deletedby` INTEGER COMMENT 'Deleted by',
	`deleteddate` DATE COMMENT 'Deleted Date',
	`deletedtime` TIME COMMENT 'Deleted Time',
	PRIMARY KEY (`projectcode`),
	INDEX `project_FI_1` (`locationcode`),
	CONSTRAINT `project_FK_1`
		FOREIGN KEY (`locationcode`)
		REFERENCES `location` (`locationcode`)
)Type=MyISAM COMMENT='projects';

#-----------------------------------------------------------------------------
#-- customerdetails
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `customerdetails`;


CREATE TABLE `customerdetails`
(
	`customercode` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'Customer Code',
	`title` VARCHAR(10) COMMENT 'Title',
	`familyname` VARCHAR(100)  NOT NULL COMMENT 'family name',
	`firstname` VARCHAR(100)  NOT NULL COMMENT 'first name',
	`addressline1` VARCHAR(100)  NOT NULL COMMENT 'Address Line1',
	`addressline2` VARCHAR(100)  NOT NULL COMMENT 'Address Line2',
	`postcode` VARCHAR(20)  NOT NULL COMMENT 'Post Code',
	`country` VARCHAR(50)  NOT NULL COMMENT 'Country',
	`email` VARCHAR(100)  NOT NULL COMMENT 'Email',
	`Skype` VARCHAR(100) COMMENT 'Skype Id',
	`landline` VARCHAR(100)  NOT NULL COMMENT 'Land Phone No',
	`mobile` VARCHAR(100) COMMENT 'Mobile phone No',
	`workphone` VARCHAR(100) COMMENT 'Office Phone No',
	`fax` VARCHAR(100) COMMENT 'fax No',
	`proffession` VARCHAR(100) COMMENT 'proffession',
	`gender` VARCHAR(10) COMMENT 'gender',
	`passportno` VARCHAR(100)  NOT NULL COMMENT 'Passport No',
	`sladdressline1` VARCHAR(100)  NOT NULL COMMENT 'Address In SL L1',
	`sladdressline2` VARCHAR(100)  NOT NULL COMMENT 'Address In SL L2',
	`sladdressline3` VARCHAR(100)  NOT NULL COMMENT 'Address In SL L3 / city',
	`sllandline` VARCHAR(100)  NOT NULL COMMENT 'Land Phone No in SL',
	`slmobile` VARCHAR(100) COMMENT 'Mobile phone No in SL',
	`slcontactperson` VARCHAR(100)  NOT NULL COMMENT 'Contact Person In SL',
	`deleted` TINYINT default 0 COMMENT 'Record deleted',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	`lastmodifiedby` INTEGER COMMENT 'Last modified by',
	`lastmodifieddate` DATE COMMENT 'Last modified date',
	`lastmodifiedtime` TIME COMMENT 'Last modified time',
	`deletedby` INTEGER COMMENT 'Deleted by',
	`deleteddate` DATE COMMENT 'Deleted Date',
	`deletedtime` TIME COMMENT 'Deleted Time',
	PRIMARY KEY (`customercode`)
)Type=MyISAM COMMENT='customer details';

#-----------------------------------------------------------------------------
#-- housecategory
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `housecategory`;


CREATE TABLE `housecategory`
(
	`housecatcode` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'house category Code',
	`description` VARCHAR(100)  NOT NULL COMMENT 'House description',
	`price` DOUBLE  NOT NULL COMMENT 'Price of house',
	`deleted` TINYINT default 0 COMMENT 'Record deleted',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	`lastmodifiedby` INTEGER COMMENT 'Last modified by',
	`lastmodifieddate` DATE COMMENT 'Last modified date',
	`lastmodifiedtime` TIME COMMENT 'Last modified time',
	`deletedby` INTEGER COMMENT 'Deleted by',
	`deleteddate` DATE COMMENT 'Deleted Date',
	`deletedtime` TIME COMMENT 'Deleted Time',
	PRIMARY KEY (`housecatcode`)
)Type=MyISAM COMMENT='house category';

#-----------------------------------------------------------------------------
#-- projectdetails
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `projectdetails`;


CREATE TABLE `projectdetails`
(
	`refno` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'Project details refno',
	`locationcode` INTEGER  NOT NULL COMMENT 'Location Code',
	`projectcode` INTEGER  NOT NULL COMMENT 'project code',
	`customercode` INTEGER  NOT NULL COMMENT 'customer code',
	`housecatcode` INTEGER  NOT NULL COMMENT 'house category code',
	`blocknumber` VARCHAR(100)  NOT NULL COMMENT 'block no',
	`blocksize` DOUBLE  NOT NULL COMMENT 'size of block (percheses)',
	`blockprice` DOUBLE  NOT NULL COMMENT 'price of block',
	`reservedate` DATE  NOT NULL COMMENT 'Date of reservation',
	`reservestatus` INTEGER default 0 COMMENT 'reservation status 0:unavailable,1:reserved,2:soldout,3:notforsale ',
	`paymentmethod` INTEGER  NOT NULL COMMENT 'method of payment 1=installmnet,2=bankloan,...',
	`duedate` DATE  NOT NULL COMMENT 'due date',
	`deleted` TINYINT default 0 COMMENT 'Record deleted',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	`lastmodifiedby` INTEGER COMMENT 'Last modified by',
	`lastmodifieddate` DATE COMMENT 'Last modified date',
	`lastmodifiedtime` TIME COMMENT 'Last modified time',
	`deletedby` INTEGER COMMENT 'Deleted by',
	`deleteddate` DATE COMMENT 'Deleted Date',
	`deletedtime` TIME COMMENT 'Deleted Time',
	PRIMARY KEY (`refno`),
	INDEX `projectdetails_FI_1` (`locationcode`),
	CONSTRAINT `projectdetails_FK_1`
		FOREIGN KEY (`locationcode`)
		REFERENCES `location` (`locationcode`),
	INDEX `projectdetails_FI_2` (`projectcode`),
	CONSTRAINT `projectdetails_FK_2`
		FOREIGN KEY (`projectcode`)
		REFERENCES `project` (`projectcode`),
	INDEX `projectdetails_FI_3` (`customercode`),
	CONSTRAINT `projectdetails_FK_3`
		FOREIGN KEY (`customercode`)
		REFERENCES `customerdetails` (`customercode`),
	INDEX `projectdetails_FI_4` (`housecatcode`),
	CONSTRAINT `projectdetails_FK_4`
		FOREIGN KEY (`housecatcode`)
		REFERENCES `housecategory` (`housecatcode`)
)Type=MyISAM COMMENT='project details';

#-----------------------------------------------------------------------------
#-- customerreceipts
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `customerreceipts`;


CREATE TABLE `customerreceipts`
(
	`receiptno` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'receipt number',
	`locationcode` INTEGER  NOT NULL COMMENT 'Location Code',
	`projectcode` INTEGER  NOT NULL COMMENT 'project code',
	`customercode` INTEGER  NOT NULL COMMENT 'customer code',
	`receiptdate` DATE  NOT NULL COMMENT 'receipt date',
	`blocknumber` INTEGER  NOT NULL COMMENT 'block no',
	`paymenttype` INTEGER  NOT NULL COMMENT 'paymenttype 1=cash,2=cheque,...',
	`paidamount` DOUBLE  NOT NULL COMMENT 'paid amount',
	`deleted` TINYINT default 0 COMMENT 'Record deleted',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	`lastmodifiedby` INTEGER COMMENT 'Last modified by',
	`lastmodifieddate` DATE COMMENT 'Last modified date',
	`lastmodifiedtime` TIME COMMENT 'Last modified time',
	`deletedby` INTEGER COMMENT 'Deleted by',
	`deleteddate` DATE COMMENT 'Deleted Date',
	`deletedtime` TIME COMMENT 'Deleted Time',
	PRIMARY KEY (`receiptno`),
	INDEX `customerreceipts_FI_1` (`locationcode`),
	CONSTRAINT `customerreceipts_FK_1`
		FOREIGN KEY (`locationcode`)
		REFERENCES `location` (`locationcode`),
	INDEX `customerreceipts_FI_2` (`projectcode`),
	CONSTRAINT `customerreceipts_FK_2`
		FOREIGN KEY (`projectcode`)
		REFERENCES `project` (`projectcode`),
	INDEX `customerreceipts_FI_3` (`customercode`),
	CONSTRAINT `customerreceipts_FK_3`
		FOREIGN KEY (`customercode`)
		REFERENCES `customerdetails` (`customercode`)
)Type=MyISAM COMMENT='customer payment receipts';

#-----------------------------------------------------------------------------
#-- paymentplan
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `paymentplan`;


CREATE TABLE `paymentplan`
(
	`refno` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'reference number',
	`projectcode` INTEGER  NOT NULL COMMENT 'project code',
	`nofinstallments` INTEGER  NOT NULL COMMENT 'number of installments',
	`description` VARCHAR(150)  NOT NULL COMMENT 'payment plan description',
	`installamount` DOUBLE  NOT NULL COMMENT 'Installment amount',
	`totalpayable` DOUBLE  NOT NULL COMMENT 'Total Amount Payable (nofinstallments * installamount)',
	`deleted` TINYINT default 0 COMMENT 'Record deleted',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	`lastmodifiedby` INTEGER COMMENT 'Last modified by',
	`lastmodifieddate` DATE COMMENT 'Last modified date',
	`lastmodifiedtime` TIME COMMENT 'Last modified time',
	`deletedby` INTEGER COMMENT 'Deleted by',
	`deleteddate` DATE COMMENT 'Deleted Date',
	`deletedtime` TIME COMMENT 'Deleted Time',
	PRIMARY KEY (`refno`),
	INDEX `paymentplan_FI_1` (`projectcode`),
	CONSTRAINT `paymentplan_FK_1`
		FOREIGN KEY (`projectcode`)
		REFERENCES `project` (`projectcode`)
)Type=MyISAM COMMENT='payment plans for houses in a project';

#-----------------------------------------------------------------------------
#-- sales
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sales`;


CREATE TABLE `sales`
(
	`refno` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'reference number',
	`customercode` INTEGER  NOT NULL COMMENT 'customer code',
	`locationcode` INTEGER  NOT NULL COMMENT 'Location Code',
	`projectcode` INTEGER  NOT NULL COMMENT 'project code',
	`blockrefnumber` INTEGER  NOT NULL COMMENT 'block reference number',
	`payplanrefno` INTEGER  NOT NULL COMMENT 'payment plan reference number',
	`nofinstallments` INTEGER  NOT NULL COMMENT 'number of installments',
	`description` VARCHAR(150)  NOT NULL COMMENT 'payment plan description',
	`installamount` DOUBLE  NOT NULL COMMENT 'Installment amount',
	`totalpayable` DOUBLE  NOT NULL COMMENT 'Total Amount Payable (nofinstallments * installamount)',
	`paymentduedate` INTEGER COMMENT 'Payment due day (day of month)',
	`agrementstartdate` DATE COMMENT 'agreement start date',
	`agrementfinishdate` DATE COMMENT 'agreement finish date',
	`deleted` TINYINT default 0 COMMENT 'Record deleted',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	`lastmodifiedby` INTEGER COMMENT 'Last modified by',
	`lastmodifieddate` DATE COMMENT 'Last modified date',
	`lastmodifiedtime` TIME COMMENT 'Last modified time',
	`deletedby` INTEGER COMMENT 'Deleted by',
	`deleteddate` DATE COMMENT 'Deleted Date',
	`deletedtime` TIME COMMENT 'Deleted Time',
	PRIMARY KEY (`refno`),
	INDEX `sales_FI_1` (`customercode`),
	CONSTRAINT `sales_FK_1`
		FOREIGN KEY (`customercode`)
		REFERENCES `customerdetails` (`customercode`),
	INDEX `sales_FI_2` (`blockrefnumber`),
	CONSTRAINT `sales_FK_2`
		FOREIGN KEY (`blockrefnumber`)
		REFERENCES `projectdetails` (`refno`),
	INDEX `sales_FI_3` (`payplanrefno`),
	CONSTRAINT `sales_FK_3`
		FOREIGN KEY (`payplanrefno`)
		REFERENCES `paymentplan` (`refno`),
	INDEX `sales_FI_4` (`projectcode`),
	CONSTRAINT `sales_FK_4`
		FOREIGN KEY (`projectcode`)
		REFERENCES `project` (`projectcode`),
	INDEX `sales_FI_5` (`locationcode`),
	CONSTRAINT `sales_FK_5`
		FOREIGN KEY (`locationcode`)
		REFERENCES `location` (`locationcode`)
)Type=MyISAM COMMENT='house sales of projects';

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
