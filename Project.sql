-- --------------------------------------------------------
-- Host:                         193.70.1.235
-- Server version:               10.6.12-MariaDB-0ubuntu0.22.04.1 - Ubuntu 22.04
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for Project
CREATE DATABASE IF NOT EXISTS `Project` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `Project`;

-- Dumping structure for table Project.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `email` varchar(320) NOT NULL DEFAULT '0' COMMENT 'Email',
  `image` varchar(320) NOT NULL DEFAULT '0',
  `iv` longblob NOT NULL,
  `enc_iv` longblob DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT '0' COMMENT 'Password',
  `f_name` longblob NOT NULL COMMENT 'First Name',
  `l_name` longblob NOT NULL COMMENT 'Last Name',
  `gender` longblob DEFAULT NULL,
  `s_id` longblob NOT NULL COMMENT 'Student ID',
  `p_country` longblob NOT NULL COMMENT 'Phone Country',
  `p_number` longblob NOT NULL COMMENT 'Phone Number',
  `dob` longblob NOT NULL COMMENT 'Date of Birth',
  `m_d_1` longblob NOT NULL COMMENT 'Medical Declaration',
  `m_d_2` longblob NOT NULL COMMENT 'Asthma, wheezing, Respiratory?',
  `m_d_3` longblob NOT NULL COMMENT 'Bronchitis and/or shortness of breath?',
  `m_d_4` longblob NOT NULL COMMENT 'Physical disability or other disability?',
  `m_d_5` longblob NOT NULL COMMENT 'Are you pregnant?',
  `m_d_6` longblob NOT NULL COMMENT 'Do you smoke?',
  `m_d_7` longblob NOT NULL COMMENT 'Epilepsy, seizures, fainting attacks or convulsions?',
  `m_d_8` longblob NOT NULL COMMENT 'Any other neurological problem?',
  `m_d_9` longblob NOT NULL COMMENT 'Recurring migraine headaches, Blackouts? ',
  `m_d_10` longblob NOT NULL COMMENT 'Recurring joint, mobility or back problems/surgery? ',
  `m_d_11` longblob NOT NULL COMMENT 'Diabetes?',
  `m_d_12` longblob NOT NULL COMMENT 'Any hearing loss or problems with balance?',
  `m_d_13` longblob NOT NULL COMMENT 'Any serious eyesight issues?',
  `m_c` longblob DEFAULT NULL COMMENT 'Medical Condition',
  `d_i_n` longblob NOT NULL COMMENT 'Doctor Information',
  `d_i_p_c` longblob NOT NULL,
  `d_i_p_n` longblob NOT NULL,
  `n_o_k_f_n` longblob NOT NULL COMMENT 'Next of Kim First Name',
  `n_o_k_l_n` longblob NOT NULL COMMENT 'Next of Kim Last Name',
  `n_o_k_p_c` longblob NOT NULL COMMENT 'next of Kim Phone Country',
  `n_o_k_p_n` longblob NOT NULL COMMENT 'Next of Kim Phone Number',
  `n_o_k_r_s` longblob NOT NULL COMMENT 'Nextt of Kim Relation Status',
  `registred` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0 COMMENT 'Account Status',
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='User MySQL Tables';

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
