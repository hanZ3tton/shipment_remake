CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL DEFAULT '128',
  `password` varchar(255) NOT NULL DEFAULT '128',
  `full_name` varchar(255) NOT NULL DEFAULT '128',
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '128',
  `state` varchar(255) NOT NULL DEFAULT '128',
  `address` varchar(255) NOT NULL DEFAULT '128',
  `city` varchar(255) NOT NULL DEFAULT '128',
  `created_at` date NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;