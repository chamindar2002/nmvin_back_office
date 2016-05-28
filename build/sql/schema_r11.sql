DROP TABLE IF EXISTS `onlinecustomer`;


CREATE TABLE `onlinecustomer`
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
	`onlineuserid` INTEGER default 0 COMMENT 'user id for online users',
	`paymentsuccess` TINYINT default 0 COMMENT 'payment success',
	`blockrefno` INTEGER default 0 COMMENT 'Reserved Block Number',
	`paidamt` FLOAT default 0 COMMENT 'Reservation charges',
	`paidamtissuedreceiptstatus` TINYINT default 0 COMMENT 'A receipt added to customer receipts',
	`utilized` TINYINT default 0 COMMENT 'Utilized for customerdetails File',
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
)Type=MyISAM COMMENT='onlinecustomer';