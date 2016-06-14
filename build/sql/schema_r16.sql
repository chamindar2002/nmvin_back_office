--23-03-2015
--installment counter
ALTER TABLE `customerreceipts` ADD `installment_no` INT NOT NULL DEFAULT '0' AFTER `paidamount`;