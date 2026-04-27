CREATE TABLE IF NOT EXISTS `tbl_marketing_officer_report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `empl_id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `blanch_id` int(11) NOT NULL,
  `report_title` varchar(255) NOT NULL DEFAULT 'Marketing Officer Report',
  `report_body` longtext NOT NULL,
  `report_payload` longtext DEFAULT NULL,
  `report_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`report_id`),
  KEY `idx_marketing_report_comp_date` (`comp_id`, `report_date`),
  KEY `idx_marketing_report_empl` (`empl_id`),
  KEY `idx_marketing_report_blanch` (`blanch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;