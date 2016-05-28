#-----------------------------------------------------------------------------
#-- blockedips
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `blockedips`;


CREATE TABLE `blockedips`
(
	`refno` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'reference number',
	`blocked_ip` VARCHAR(200)  NOT NULL COMMENT 'Clients Ip Address',
	`blocked_email` VARCHAR(200)  NOT NULL COMMENT 'blocked email',
	`status` TINYINT default 1 COMMENT 'true:blocked,false:unblocked',
	PRIMARY KEY (`refno`)
)Type=MyISAM COMMENT='Blockec Online Clients IP Addresses';