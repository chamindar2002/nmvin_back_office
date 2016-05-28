ALTER TABLE `nmwndb`.`sales` ADD COLUMN `defaulted` TINYINT NOT NULL DEFAULT 0 COMMENT 'payments defaulted > 3 months' AFTER `salerightoff_comment`;

DROP TABLE IF EXISTS `payment_defaulted_entries`;


CREATE TABLE `payment_defaulted_entries`
(
	`refno` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'reference number',
	`customercode` INTEGER  NOT NULL COMMENT 'customer code',
	`salerefno` INTEGER  NOT NULL COMMENT 'sale reference number',
	`blockrefnumber_old` INTEGER  NOT NULL COMMENT 'previous block reference number',
	`blockrefnumber_new` INTEGER  NOT NULL COMMENT 'new block reference number',
	`satus` INTEGER  NOT NULL COMMENT '1:listed,2:unlisted,3:new block allocated',
	`other1` INTEGER COMMENT 'reserved int type',
	`other2` DOUBLE COMMENT 'reserved double type',
	`other3` VARCHAR(150) COMMENT 'reserved varchar',
	`addedby` INTEGER COMMENT 'Added by',
	`addeddate` DATE COMMENT 'Added date',
	`addedtime` TIME COMMENT 'Added time',
	PRIMARY KEY (`refno`),
	INDEX `payment_defaulted_entries_FI_1` (`customercode`),
	CONSTRAINT `payment_defaulted_entries_FK_1`
		FOREIGN KEY (`customercode`)
		REFERENCES `customerdetails` (`customercode`),
	INDEX `payment_defaulted_entries_FI_2` (`salerefno`),
	CONSTRAINT `payment_defaulted_entries_FK_2`
		FOREIGN KEY (`salerefno`)
		REFERENCES `sales` (`refno`)
)Type=MyISAM COMMENT='Payment defaulted enteries log';