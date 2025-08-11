CREATE TABLE `user` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `state` varchar(128) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `created_at` date NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

