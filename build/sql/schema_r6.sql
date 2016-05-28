DROP TABLE IF EXISTS `tranferedbloks`;


CREATE TABLE `tranferedbloks`
(
	`refno` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'reference number',
	`customercode` INTEGER  NOT NULL COMMENT 'customer code',
	`salerefno` INTEGER  NOT NULL COMMENT 'sale reference number',
	`blockrefnumber_previous` INTEGER  NOT NULL COMMENT 'previous block reference number',
	`blockrefnumber_current` INTEGER  NOT NULL COMMENT 'new block reference number',
	`currentblock_previouscustomer` INTEGER  NOT NULL COMMENT 'previous customer of the current block',
	`other1` INTEGER COMMENT 'reserved int type',
	`other2` DOUBLE COMMENT 'reserved double type',
	`other3` VARCHAR(150) COMMENT 'reserved varchar',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	PRIMARY KEY (`refno`),
	INDEX `tranferedbloks_FI_1` (`customercode`),
	CONSTRAINT `tranferedbloks_FK_1`
		FOREIGN KEY (`customercode`)
		REFERENCES `customerdetails` (`customercode`),
	INDEX `tranferedbloks_FI_2` (`salerefno`),
	CONSTRAINT `tranferedbloks_FK_2`
		FOREIGN KEY (`salerefno`)
		REFERENCES `sales` (`refno`)
)Type=MyISAM COMMENT='Transfered Blocks Log Table';