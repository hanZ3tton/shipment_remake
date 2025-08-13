CREATE TABLE IF NOT EXISTS `manifest_detail_items` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `shipment_id` INT NOT NULL,
    `manifest_detail_id` INT NOT NULL,
    `airwaybill` VARCHAR(128) NOT NULL,
    `created_at` DATE NOT NULL,
    `updated_at` DATETIME NOT NULL,
    PRIMARY KEY (`id`)
);
