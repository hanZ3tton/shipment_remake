CREATE TABLE IF NOT EXISTS `manifests` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `manifest_code` VARCHAR(128) NOT NULL,
    `manifest_date` DATE NOT NULL,
    `mawb` VARCHAR(128) NOT NULL,
    `flight_date` DATE NOT NULL,
    `flight_number` VARCHAR(128) NOT NULL,
    `lastmile_vendor` VARCHAR(128) NOT NULL,
    `status` VARCHAR(50) NOT NULL,
    `remarks` VARCHAR(128) NOT NULL,
    `created_at` DATE NOT NULL,
    `updated_at` DATETIME NOT NULL,
    PRIMARY KEY (`id`)
);