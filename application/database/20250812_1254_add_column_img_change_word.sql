ALTER TABLE `user` ADD `img` VARCHAR(128) NOT NULL AFTER `id`;
ALTER TABLE `user` CHANGE `update_at` `updated_at` DATETIME NOT NULL;