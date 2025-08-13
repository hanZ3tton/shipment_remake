CREATE TABLE IF NOT EXISTS `inbound` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `inbound_shipper_name` VARCHAR(128) NOT NULL,
    `inbound_shipper_phone` VARCHAR(15) NOT NULL,
    `weight` DECIMAL(10, 2) NOT NULL,
    `description` VARCHAR(128) NOT NULL,
    `inbound_date` DATE NOT NULL,
    PRIMARY KEY (`id`)
);