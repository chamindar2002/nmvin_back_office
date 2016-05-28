#-----------------------------------------------------------------------------
#-- upcomprjctsregister
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `upcomprjctsregister`;


CREATE TABLE `upcomprjctsregister`
(
	`refno` INTEGER  NOT NULL AUTO_INCREMENT COMMENT 'reference number',
	`uid` INTEGER  NOT NULL COMMENT 'Userid',
	`upcprojectid` INTEGER  NOT NULL COMMENT 'Upcoming Project Id',
	`upcprojectname` VARCHAR(200)  NOT NULL COMMENT 'Upcoming Project Name',
	`status` TINYINT default 1 COMMENT 'optional',
	PRIMARY KEY (`refno`),
	INDEX `upcomprjctsregister_FI_1` (`uid`),
	CONSTRAINT `upcomprjctsregister_FK_1`
		FOREIGN KEY (`uid`)
		REFERENCES `user` (`uid`)
)Type=MyISAM COMMENT='Upcoming Projects Registrations';