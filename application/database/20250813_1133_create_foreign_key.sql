ALTER TABLE `manifest_detail_items` ADD CONSTRAINT `fk_manifest_detail_items_manifest_detail_id` FOREIGN KEY(`manifest_detail_id`) REFERENCES `manifest_details`(`id`);
ALTER TABLE `manifest_details` ADD CONSTRAINT `fk_manifest_details_id` FOREIGN KEY(`id`) REFERENCES `manifests`(`id`);
ALTER TABLE `shipments` ADD CONSTRAINT `fk_shipments_inbound_id` FOREIGN KEY(`inbound_id`) REFERENCES `inbound`(`id`);
ALTER TABLE `manifest_detail_items` ADD CONSTRAINT `fk_manifest_detail_items_shipment_id` FOREIGN KEY(`shipment_id`) REFERENCES `shipments`(`id`);