ALTER TABLE `nmwndb`.`sales` ADD COLUMN `salerightoff_amt` FLOAT DEFAULT 0 COMMENT 'Sale Right Off Amount (discount on full settlement)' AFTER `saletype`,
 ADD COLUMN `salerightoff_status` BOOLEAN DEFAULT 0 COMMENT 'Sale Right Off Status' AFTER `salerightoff_amt`,
 ADD COLUMN `salerightoff_comment` LONGTEXT NOT NULL AFTER `salerightoff_status`;