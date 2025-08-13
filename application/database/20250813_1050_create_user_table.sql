CREATE TABLE IF NOT EXISTS `users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `img` VARCHAR(128) DEFAULT 'default.jpg',
    `user_name` VARCHAR(128) NOT NULL,
    `password` VARCHAR(128) NOT NULL,
    `full_name` VARCHAR(128) NOT NULL,
    `date_of_birth` DATE NOT NULL,
    `email` VARCHAR(128) NOT NULL,
    `phone_number` VARCHAR(15) NOT NULL,
    `state` VARCHAR(128),
    `city` VARCHAR(128),
    `address` VARCHAR(128),
    `created_at` DATE NOT NULL,
    `updated_at` DATETIME NOT NULL,
    PRIMARY KEY (`id`)
);