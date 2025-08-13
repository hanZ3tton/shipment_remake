CREATE TABLE IF NOT EXISTS `manifest_details` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `manifest_id` INT NOT NULL,
    `detail_number` VARCHAR(128) NOT NULL,
    `detail_code` VARCHAR(128) NOT NULL,
    `weight` DECIMAL(10, 2) NOT NULL,
    `length` DECIMAL(10, 2) NOT NULL,
    `width` DECIMAL(10, 2) NOT NULL,
    `height` DECIMAL(10, 2) NOT NULL,
    `remark` VARCHAR(128),
    `created_at` DATE,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
);