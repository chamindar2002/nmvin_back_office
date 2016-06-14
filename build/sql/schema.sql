
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `uid` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'User ID',
    `enabled` TINYINT(1) NOT NULL COMMENT 'User is enabled',
    `loginname` VARCHAR(200) NOT NULL COMMENT 'User Name',
    `familyname` VARCHAR(200) NOT NULL COMMENT 'Family Name',
    `firstname` VARCHAR(200) NOT NULL COMMENT 'First Name',
    `password` VARCHAR(32) NOT NULL COMMENT 'Password',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Delete Status',
    PRIMARY KEY (`uid`),
    UNIQUE INDEX `user_U_1` (`loginname`)
) ENGINE=MyISAM COMMENT='User';

-- ---------------------------------------------------------------------
-- role
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role`
(
    `rid` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'Role ID',
    `name` VARCHAR(20) NOT NULL COMMENT 'Role Name',
    `description` VARCHAR(150) NOT NULL COMMENT 'Description',
    PRIMARY KEY (`rid`),
    UNIQUE INDEX `role_U_1` (`name`)
) ENGINE=MyISAM COMMENT='User Role';

-- ---------------------------------------------------------------------
-- action_permission
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `action_permission`;

CREATE TABLE `action_permission`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'Action ID',
    `module` VARCHAR(50) NOT NULL COMMENT 'Module',
    `action` VARCHAR(100) NOT NULL COMMENT 'Action Name',
    `description` VARCHAR(150) NOT NULL COMMENT 'Description',
    `systemid` INTEGER DEFAULT 0 NOT NULL COMMENT 'System ID Number',
    PRIMARY KEY (`id`),
    UNIQUE INDEX `action_permission_U_1` (`module`, `action`)
) ENGINE=MyISAM COMMENT='Action Permission';

-- ---------------------------------------------------------------------
-- user_role_ref
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user_role_ref`;

CREATE TABLE `user_role_ref`
(
    `uid` INTEGER NOT NULL,
    `rid` INTEGER NOT NULL,
    PRIMARY KEY (`uid`,`rid`),
    INDEX `user_role_ref_FI_2` (`rid`)
) ENGINE=MyISAM COMMENT='User - Role Mapping';

-- ---------------------------------------------------------------------
-- role_action_permission_ref
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `role_action_permission_ref`;

CREATE TABLE `role_action_permission_ref`
(
    `rid` INTEGER NOT NULL,
    `aid` INTEGER NOT NULL,
    PRIMARY KEY (`rid`,`aid`),
    INDEX `role_action_permission_ref_FI_2` (`aid`)
) ENGINE=MyISAM COMMENT='Role - Action_Permission Mapping';

-- ---------------------------------------------------------------------
-- location
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `location`;

CREATE TABLE `location`
(
    `locationcode` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'Location Code',
    `locationname` VARCHAR(100) NOT NULL COMMENT 'Location Name',
    `locationcity` VARCHAR(100) NOT NULL COMMENT 'City Of Project Location',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
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
) ENGINE=MyISAM COMMENT='project location';

-- ---------------------------------------------------------------------
-- project
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project`
(
    `projectcode` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'Project Code',
    `locationcode` INTEGER NOT NULL COMMENT 'Location Code',
    `projectname` VARCHAR(100) NOT NULL COMMENT 'Project Name',
    `nofblocks` INTEGER COMMENT 'No.of blocks in project',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
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
    INDEX `project_FI_1` (`locationcode`)
) ENGINE=MyISAM COMMENT='projects';

-- ---------------------------------------------------------------------
-- customerdetails
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `customerdetails`;

CREATE TABLE `customerdetails`
(
    `customercode` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'Customer Code',
    `title` VARCHAR(10) COMMENT 'Title',
    `familyname` VARCHAR(100) NOT NULL COMMENT 'family name',
    `firstname` VARCHAR(100) NOT NULL COMMENT 'first name',
    `addressline1` VARCHAR(100) NOT NULL COMMENT 'Address Line1',
    `addressline2` VARCHAR(100) NOT NULL COMMENT 'Address Line2',
    `postcode` VARCHAR(20) NOT NULL COMMENT 'Post Code',
    `country` VARCHAR(50) NOT NULL COMMENT 'Country',
    `email` VARCHAR(100) NOT NULL COMMENT 'Email',
    `Skype` VARCHAR(100) COMMENT 'Skype Id',
    `landline` VARCHAR(100) NOT NULL COMMENT 'Land Phone No',
    `mobile` VARCHAR(100) COMMENT 'Mobile phone No',
    `workphone` VARCHAR(100) COMMENT 'Office Phone No',
    `fax` VARCHAR(100) COMMENT 'fax No',
    `proffession` VARCHAR(100) COMMENT 'proffession',
    `gender` VARCHAR(10) COMMENT 'gender',
    `passportno` VARCHAR(100) NOT NULL COMMENT 'Passport No',
    `sladdressline1` VARCHAR(100) NOT NULL COMMENT 'Address In SL L1',
    `sladdressline2` VARCHAR(100) NOT NULL COMMENT 'Address In SL L2',
    `sladdressline3` VARCHAR(100) NOT NULL COMMENT 'Address In SL L3 / city',
    `sllandline` VARCHAR(100) NOT NULL COMMENT 'Land Phone No in SL',
    `slmobile` VARCHAR(100) COMMENT 'Mobile phone No in SL',
    `slcontactperson` VARCHAR(100) NOT NULL COMMENT 'Contact Person In SL',
    `onlineuserid` INTEGER DEFAULT 0 COMMENT 'user id for online users',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
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
) ENGINE=MyISAM COMMENT='customer details';

-- ---------------------------------------------------------------------
-- onlinecustomer
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `onlinecustomer`;

CREATE TABLE `onlinecustomer`
(
    `customercode` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'Customer Code',
    `title` VARCHAR(10) COMMENT 'Title',
    `familyname` VARCHAR(100) NOT NULL COMMENT 'family name',
    `firstname` VARCHAR(100) NOT NULL COMMENT 'first name',
    `addressline1` VARCHAR(100) NOT NULL COMMENT 'Address Line1',
    `addressline2` VARCHAR(100) NOT NULL COMMENT 'Address Line2',
    `postcode` VARCHAR(20) NOT NULL COMMENT 'Post Code',
    `country` VARCHAR(50) NOT NULL COMMENT 'Country',
    `email` VARCHAR(100) NOT NULL COMMENT 'Email',
    `Skype` VARCHAR(100) COMMENT 'Skype Id',
    `landline` VARCHAR(100) NOT NULL COMMENT 'Land Phone No',
    `mobile` VARCHAR(100) COMMENT 'Mobile phone No',
    `workphone` VARCHAR(100) COMMENT 'Office Phone No',
    `fax` VARCHAR(100) COMMENT 'fax No',
    `proffession` VARCHAR(100) COMMENT 'proffession',
    `gender` VARCHAR(10) COMMENT 'gender',
    `passportno` VARCHAR(100) NOT NULL COMMENT 'Passport No',
    `sladdressline1` VARCHAR(100) NOT NULL COMMENT 'Address In SL L1',
    `sladdressline2` VARCHAR(100) NOT NULL COMMENT 'Address In SL L2',
    `sladdressline3` VARCHAR(100) NOT NULL COMMENT 'Address In SL L3 / city',
    `sllandline` VARCHAR(100) NOT NULL COMMENT 'Land Phone No in SL',
    `slmobile` VARCHAR(100) COMMENT 'Mobile phone No in SL',
    `slcontactperson` VARCHAR(100) NOT NULL COMMENT 'Contact Person In SL',
    `onlineuserid` INTEGER DEFAULT 0 COMMENT 'user id for online users',
    `paymentsuccess` TINYINT(1) DEFAULT 0 COMMENT 'payment success',
    `blockrefno` INTEGER DEFAULT 0 COMMENT 'Reserved Block Number',
    `paidamt` FLOAT DEFAULT 0 COMMENT 'Reservation charges',
    `paidamtissuedreceiptstatus` TINYINT(1) DEFAULT 0 COMMENT 'A receipt added to customer receipts',
    `utilized` TINYINT(1) DEFAULT 0 COMMENT 'Utilized for customerdetails File',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
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
) ENGINE=MyISAM COMMENT='onlinecustomer';

-- ---------------------------------------------------------------------
-- housecategory
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `housecategory`;

CREATE TABLE `housecategory`
(
    `housecatcode` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'house category Code',
    `description` VARCHAR(100) NOT NULL COMMENT 'House description',
    `price` DOUBLE NOT NULL COMMENT 'Price of house',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
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
) ENGINE=MyISAM COMMENT='house category';

-- ---------------------------------------------------------------------
-- projectdetails
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `projectdetails`;

CREATE TABLE `projectdetails`
(
    `refno` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'Project details refno',
    `locationcode` INTEGER NOT NULL COMMENT 'Location Code',
    `projectcode` INTEGER NOT NULL COMMENT 'project code',
    `customercode` INTEGER NOT NULL COMMENT 'customer code',
    `housecatcode` INTEGER NOT NULL COMMENT 'house category code',
    `blocknumber` VARCHAR(100) NOT NULL COMMENT 'block no',
    `blocksize` DOUBLE NOT NULL COMMENT 'size of block (percheses)',
    `blockprice` DOUBLE NOT NULL COMMENT 'price of block',
    `reservedate` DATE NOT NULL COMMENT 'Date of reservation',
    `reservestatus` INTEGER DEFAULT 0 COMMENT 'reservation status 0:unavailable,1:reserved,2:soldout,3:notforsale ',
    `paymentmethod` INTEGER NOT NULL COMMENT 'method of payment 1=installmnet,2=bankloan,...',
    `duedate` DATE NOT NULL COMMENT 'due date',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
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
    INDEX `projectdetails_FI_2` (`projectcode`),
    INDEX `projectdetails_FI_3` (`customercode`),
    INDEX `projectdetails_FI_4` (`housecatcode`)
) ENGINE=MyISAM COMMENT='project details';

-- ---------------------------------------------------------------------
-- customerreceipts
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `customerreceipts`;

CREATE TABLE `customerreceipts`
(
    `receiptno` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'receipt number',
    `salerefno` INTEGER NOT NULL COMMENT 'sale reference number',
    `locationcode` INTEGER NOT NULL COMMENT 'Location Code',
    `projectcode` INTEGER NOT NULL COMMENT 'project code',
    `customercode` INTEGER NOT NULL COMMENT 'customer code',
    `receiptdate` DATE NOT NULL COMMENT 'receipt date',
    `oldreceiptno` VARCHAR(20) COMMENT 'Receipt Book Number',
    `blocknumber` INTEGER NOT NULL COMMENT 'block no',
    `paidfor` VARCHAR(10) NOT NULL COMMENT 'RC:reservation charge,FP:fullpayment,PP:partpayment,In:installment',
    `paymenttype` INTEGER NOT NULL COMMENT 'paymenttype 1=cash,2=cheque,...',
    `paidamount` DOUBLE NOT NULL COMMENT 'paid amount',
    `installment_no` INTEGER NOT NULL COMMENT 'installment number',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
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
    INDEX `customerreceipts_FI_2` (`projectcode`),
    INDEX `customerreceipts_FI_3` (`customercode`),
    INDEX `customerreceipts_FI_4` (`salerefno`)
) ENGINE=MyISAM COMMENT='customer payment receipts';

-- ---------------------------------------------------------------------
-- paymentplan
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `paymentplan`;

CREATE TABLE `paymentplan`
(
    `refno` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'reference number',
    `projectcode` INTEGER NOT NULL COMMENT 'project code',
    `nofinstallments` INTEGER NOT NULL COMMENT 'number of installments',
    `description` VARCHAR(150) NOT NULL COMMENT 'payment plan description',
    `installamount` DOUBLE NOT NULL COMMENT 'Installment amount',
    `rsvfee` DOUBLE NOT NULL COMMENT 'Reservation Fee',
    `downpayment` DOUBLE NOT NULL COMMENT 'Downpayment',
    `bankloan` DOUBLE DEFAULT 0 COMMENT 'Bank Loan',
    `adtnlland` DOUBLE DEFAULT 0 COMMENT 'Additional Land Cost',
    `totalpayable` DOUBLE NOT NULL COMMENT 'Total Amount Payable (nofinstallments * installamount)',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
    `addedby` INTEGER COMMENT 'Added by',
    `addeddate` DATE COMMENT 'Added date',
    `addedtime` TIME COMMENT 'Added time',
    `lastmodifiedby` INTEGER COMMENT 'Last modified by',
    `lastmodifieddate` DATE COMMENT 'Last modified date',
    `lastmodifiedtime` TIME COMMENT 'Last modified time',
    `deletedby` INTEGER COMMENT 'Deleted by',
    `deleteddate` DATE COMMENT 'Deleted Date',
    `deletedtime` TIME COMMENT 'Deleted Time',
    `devechargers1` DOUBLE COMMENT 'devechargers1',
    `devechargers2` DOUBLE COMMENT 'devechargers2',
    `infrastructure` DOUBLE COMMENT 'infrastructure',
    `occupation` DOUBLE COMMENT 'occupation',
    PRIMARY KEY (`refno`),
    INDEX `paymentplan_FI_1` (`projectcode`)
) ENGINE=MyISAM COMMENT='payment plans for houses in a project';

-- ---------------------------------------------------------------------
-- sales
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales`
(
    `refno` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'reference number',
    `customercode` INTEGER NOT NULL COMMENT 'customer code',
    `locationcode` INTEGER NOT NULL COMMENT 'Location Code',
    `projectcode` INTEGER NOT NULL COMMENT 'project code',
    `blockrefnumber` INTEGER NOT NULL COMMENT 'block reference number',
    `payplanrefno` INTEGER NOT NULL COMMENT 'payment plan reference number',
    `nofinstallments` INTEGER NOT NULL COMMENT 'number of installments',
    `description` VARCHAR(150) NOT NULL COMMENT 'payment plan description',
    `installamount` DOUBLE NOT NULL COMMENT 'Installment amount',
    `totalpayable` DOUBLE NOT NULL COMMENT 'Total Amount Payable (nofinstallments * installamount)',
    `paymentduedate` INTEGER COMMENT 'Payment due day (day of month)',
    `agrementstartdate` DATE COMMENT 'agreement start date',
    `agrementfinishdate` DATE COMMENT 'agreement finish date',
    `saletype` TINYINT(1) DEFAULT 0 COMMENT '0:office,1:online',
    `salerightoff_amt` FLOAT DEFAULT 0 COMMENT 'Sale Right Off Amount (discount on full settlement)',
    `salerightoff_status` TINYINT(1) DEFAULT 0 COMMENT 'Sale Right Off Status',
    `salerightoff_comment` TEXT COMMENT 'remarks of rightoff',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
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
    INDEX `sales_FI_2` (`blockrefnumber`),
    INDEX `sales_FI_3` (`payplanrefno`),
    INDEX `sales_FI_4` (`projectcode`),
    INDEX `sales_FI_5` (`locationcode`)
) ENGINE=MyISAM COMMENT='house sales of projects';

-- ---------------------------------------------------------------------
-- refunds
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `refunds`;

CREATE TABLE `refunds`
(
    `refno` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'reference number',
    `salerefno` INTEGER NOT NULL COMMENT 'sale reference number',
    `customercode` INTEGER NOT NULL COMMENT 'customer code',
    `locationcode` INTEGER NOT NULL COMMENT 'Location Code',
    `projectcode` INTEGER NOT NULL COMMENT 'project code',
    `blockrefnumber` INTEGER NOT NULL COMMENT 'block reference number',
    `payplanrefno` INTEGER NOT NULL COMMENT 'payment plan reference number',
    `refundamount` DOUBLE NOT NULL COMMENT 'Amount Refunded',
    `refundate` DATE COMMENT 'refund Date',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
    `deletedby` INTEGER COMMENT 'Deleted by',
    `deleteddate` DATE COMMENT 'Deleted Date',
    `deletedtime` TIME COMMENT 'Deleted Time',
    `addedby` INTEGER COMMENT 'Added by',
    `addeddate` DATE COMMENT 'Added date',
    `addedtime` TIME COMMENT 'Added time',
    `lastmodifiedby` INTEGER COMMENT 'Last modified by',
    `lastmodifieddate` DATE COMMENT 'Last modified date',
    `lastmodifiedtime` TIME COMMENT 'Last modified time',
    PRIMARY KEY (`refno`),
    INDEX `refunds_FI_1` (`customercode`),
    INDEX `refunds_FI_2` (`blockrefnumber`),
    INDEX `refunds_FI_3` (`projectcode`),
    INDEX `refunds_FI_4` (`locationcode`),
    INDEX `refunds_FI_5` (`salerefno`)
) ENGINE=MyISAM COMMENT='house sales of projects';

-- ---------------------------------------------------------------------
-- customer_receiptmethodofpayment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `customer_receiptmethodofpayment`;

CREATE TABLE `customer_receiptmethodofpayment`
(
    `refno` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'Record Referance Number',
    `receiptno` INTEGER NOT NULL COMMENT 'Receipt Number',
    `receiptstatus` VARCHAR(2) NOT NULL COMMENT 'Receipt Status CA=Cash; CH=Cheque; BD=Bank Deposit',
    `bank` VARCHAR(10) NOT NULL COMMENT 'Bank Short Name',
    `chequnumber` VARCHAR(20) NOT NULL COMMENT 'Cheque Number',
    `chequedate` DATE NOT NULL COMMENT 'Cheque Date',
    `amount` DOUBLE COMMENT 'Amount',
    `deleted` TINYINT(1) DEFAULT 0 COMMENT 'Record deleted',
    PRIMARY KEY (`refno`),
    INDEX `customer_receiptmethodofpayment_FI_1` (`receiptno`)
) ENGINE=MyISAM COMMENT='Receipt -Method of payment';

-- ---------------------------------------------------------------------
-- tranferedbloks
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tranferedbloks`;

CREATE TABLE `tranferedbloks`
(
    `refno` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'reference number',
    `customercode` INTEGER NOT NULL COMMENT 'customer code',
    `salerefno` INTEGER NOT NULL COMMENT 'sale reference number',
    `blockrefnumber_previous` INTEGER NOT NULL COMMENT 'previous block reference number',
    `blockrefnumber_current` INTEGER NOT NULL COMMENT 'new block reference number',
    `currentblock_previouscustomer` INTEGER NOT NULL COMMENT 'previous customer of the current block',
    `other1` INTEGER COMMENT 'reserved int type',
    `other2` DOUBLE COMMENT 'reserved double type',
    `other3` VARCHAR(150) COMMENT 'reserved varchar',
    `addedby` INTEGER COMMENT 'Added by',
    `addeddate` DATE COMMENT 'Added date',
    `addedtime` TIME COMMENT 'Added time',
    PRIMARY KEY (`refno`),
    INDEX `tranferedbloks_FI_1` (`customercode`),
    INDEX `tranferedbloks_FI_2` (`salerefno`)
) ENGINE=MyISAM COMMENT='Transfered Blocks Log Table';

-- ---------------------------------------------------------------------
-- blockedips
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `blockedips`;

CREATE TABLE `blockedips`
(
    `refno` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'reference number',
    `blocked_ip` VARCHAR(200) NOT NULL COMMENT 'Clients Ip Address',
    `blocked_email` VARCHAR(200) NOT NULL COMMENT 'blocked email',
    `status` TINYINT(1) DEFAULT 1 COMMENT 'true:blocked,false:unblocked',
    PRIMARY KEY (`refno`)
) ENGINE=MyISAM COMMENT='Blockec Online Clients IP Addresses';

-- ---------------------------------------------------------------------
-- upcomprjctsregister
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `upcomprjctsregister`;

CREATE TABLE `upcomprjctsregister`
(
    `refno` INTEGER NOT NULL AUTO_INCREMENT COMMENT 'reference number',
    `uid` INTEGER NOT NULL COMMENT 'Userid',
    `upcprojectid` INTEGER NOT NULL COMMENT 'Upcoming Project Id',
    `upcprojectname` VARCHAR(200) NOT NULL COMMENT 'Upcoming Project Name',
    `status` TINYINT(1) DEFAULT 1 COMMENT 'optional',
    PRIMARY KEY (`refno`),
    INDEX `upcomprjctsregister_FI_1` (`uid`)
) ENGINE=MyISAM COMMENT='Upcoming Projects Registrations';

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
