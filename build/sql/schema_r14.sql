DROP TABLE IF EXISTS `house_ownership_tranfers`;


CREATE TABLE `house_ownership_tranfers`
(
	`refno` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'reference number',
	`customercode_current` INTEGER  NOT NULL COMMENT 'New ownership of the block',
	`customercode_previous` INTEGER  NOT NULL COMMENT 'Previous ownership of the block',
	`salerefno` INTEGER  NOT NULL COMMENT 'sale reference number',
	`blockrefnumber` INTEGER  NOT NULL COMMENT 'block reference number',
	`other1` INTEGER COMMENT 'reserved int type',
	`other2` DOUBLE COMMENT 'reserved double type',
	`other3` VARCHAR(150) COMMENT 'reserved varchar',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	PRIMARY KEY (`refno`),
	INDEX `house_ownership_tranfers_FI_1` (`customercode_current`),
	CONSTRAINT `house_ownership_tranfers_FK_1`
		FOREIGN KEY (`customercode_current`)
		REFERENCES `customerdetails` (`customercode`),
	INDEX `house_ownership_tranfers_FI_2` (`salerefno`),
	CONSTRAINT `house_ownership_tranfers_FK_2`
		FOREIGN KEY (`salerefno`)
		REFERENCES `sales` (`refno`)
)Type=MyISAM COMMENT='owneship transfered of blocks Log Table';
