ALTER TABLE `gb_nmwndb`.`customerreceipts` ADD COLUMN `oldreceiptno` VARCHAR(20) COMMENT 'Receipt Book Number' AFTER `receiptdate`;