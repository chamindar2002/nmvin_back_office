ALTER TABLE `gb_nmwndb`.`paymentplan` ADD COLUMN `rsvfee` DOUBLE DEFAULT 0 COMMENT 'Reservation Fee' AFTER `installamount`,
 ADD COLUMN `downpayment` DOUBLE DEFAULT 0 COMMENT 'Downpayment' AFTER `rsvfee`;