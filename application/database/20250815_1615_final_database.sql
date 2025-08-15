CREATE TABLE `inbound` (
  `id` int(11) NOT NULL,
  `code` varchar(128) NOT NULL,
  `status` enum('INBOUND','VOID') NOT NULL DEFAULT 'INBOUND',
  `inbound_shipper_name` varchar(128) NOT NULL,
  `inbound_shipper_phone` varchar(15) NOT NULL,
  `inbound_weight` decimal(10,2) NOT NULL,
  `inbound_length` decimal(10,2) NOT NULL,
  `inbound_width` decimal(10,2) NOT NULL,
  `inbound_height` decimal(10,2) NOT NULL,
  `description` varchar(128) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manifests`
--

CREATE TABLE `manifests` (
  `id` int(11) NOT NULL,
  `manifest_code` varchar(128) NOT NULL,
  `manifest_date` date NOT NULL,
  `mawb` varchar(128) NOT NULL,
  `flight_date` date NOT NULL,
  `flight_number` varchar(128) NOT NULL,
  `lastmile_vendor` varchar(128) NOT NULL,
  `status` enum('ON PROCCESS','COMPLETE','VOID') NOT NULL,
  `remarks` varchar(128) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manifest_details`
--

CREATE TABLE `manifest_details` (
  `id` int(11) NOT NULL,
  `manifest_id` int(11) NOT NULL,
  `detail_number` varchar(128) NOT NULL,
  `detail_code` varchar(128) NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `length` decimal(10,2) NOT NULL,
  `width` decimal(10,2) NOT NULL,
  `height` decimal(10,2) NOT NULL,
  `remark` varchar(128) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manifest_detail_items`
--

CREATE TABLE `manifest_detail_items` (
  `id` int(11) NOT NULL,
  `shipment_id` int(11) NOT NULL,
  `manifest_detail_id` int(11) NOT NULL,
  `airwaybill` varchar(128) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` int(11) NOT NULL,
  `inbound_id` int(11) NOT NULL,
  `status` enum('INBOUND','AP HOLD','COMPLETE DOCS','OUTBOUND','VOID') NOT NULL DEFAULT 'AP HOLD',
  `shipper_name` varchar(128) DEFAULT NULL,
  `shipper_phone_number` varchar(15) DEFAULT NULL,
  `shipping_address` varchar(128) DEFAULT NULL,
  `receiver_name` varchar(255) DEFAULT NULL,
  `receiver_phone_number` varchar(15) DEFAULT NULL,
  `receiver_state` varchar(255) DEFAULT NULL,
  `receiver_city` varchar(128) DEFAULT NULL,
  `receiver_postal_code` varchar(10) DEFAULT NULL,
  `receiver_address` varchar(128) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `length` decimal(10,2) DEFAULT NULL,
  `width` decimal(10,2) DEFAULT NULL,
  `height` decimal(10,2) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `pay` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `img` varchar(128) DEFAULT 'default.jpg',
  `user_name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `state` varchar(128) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `credit` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `user_name`, `password`, `full_name`, `date_of_birth`, `email`, `phone_number`, `state`, `city`, `address`, `credit`, `created_at`, `updated_at`) VALUES
(1, 'default.jpg', 'DaneK', '$2y$10$ijdQ9aKQDVMGXzWaorLbxOTzcbd7aXzPxjxuahCMZiM0gy0OKKSNu', 'Muhammad ZIdane khoir rizky', '2008-03-18', 'zidanekhr08@gmail.com', '081299314158', NULL, NULL, NULL, 0, '2025-08-13', '2025-08-13 10:40:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inbound`
--
ALTER TABLE `inbound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manifests`
--
ALTER TABLE `manifests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manifest_details`
--
ALTER TABLE `manifest_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manifest_detail_items`
--
ALTER TABLE `manifest_detail_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_manifest_detail_items_manifest_detail_id` (`manifest_detail_id`),
  ADD KEY `fk_manifest_detail_items_shipment_id` (`shipment_id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_shipments_inbound_id` (`inbound_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbound`
--
ALTER TABLE `inbound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manifests`
--
ALTER TABLE `manifests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manifest_details`
--
ALTER TABLE `manifest_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manifest_detail_items`
--
ALTER TABLE `manifest_detail_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manifest_details`
--
ALTER TABLE `manifest_details`
  ADD CONSTRAINT `fk_manifest_details_id` FOREIGN KEY (`id`) REFERENCES `manifests` (`id`);

--
-- Constraints for table `manifest_detail_items`
--
ALTER TABLE `manifest_detail_items`
  ADD CONSTRAINT `fk_manifest_detail_items_manifest_detail_id` FOREIGN KEY (`manifest_detail_id`) REFERENCES `manifest_details` (`id`),
  ADD CONSTRAINT `fk_manifest_detail_items_shipment_id` FOREIGN KEY (`shipment_id`) REFERENCES `shipments` (`id`);

--
-- Constraints for table `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `fk_shipments_inbound_id` FOREIGN KEY (`inbound_id`) REFERENCES `inbound` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
