CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` mediumtext,
  `password_salt` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idx_users_active` (`active`) USING BTREE,
  KEY `idx_users_created-at` (`created_at`) USING BTREE,
  KEY `idx_users_email` (`email`) USING BTREE,
  KEY `idx_users_username` (`username`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;