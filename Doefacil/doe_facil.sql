-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.29 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para doe_facil
CREATE DATABASE IF NOT EXISTS `doe_facil` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `doe_facil`;

-- Copiando estrutura para tabela doe_facil.beneficiary_natural_person
CREATE TABLE IF NOT EXISTS `beneficiary_natural_person` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `CPF` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `workplace` varchar(300) NOT NULL,
  `profession` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `family_size` varchar(50) NOT NULL,
  `family_total_income` varchar(100) NOT NULL,
  `family_legal_age` varchar(50) NOT NULL,
  `current_situation` text NOT NULL,
  `donation_objective` text NOT NULL,
  `donation_occasions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prove_vulnerable` text NOT NULL,
  `authorization_data` varchar(50) NOT NULL,
  `professional_course` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Questionário de entrevista: Beneficiários Pessoas Físicas';

-- Copiando dados para a tabela doe_facil.beneficiary_natural_person: ~0 rows (aproximadamente)
DELETE FROM `beneficiary_natural_person`;
/*!40000 ALTER TABLE `beneficiary_natural_person` DISABLE KEYS */;
/*!40000 ALTER TABLE `beneficiary_natural_person` ENABLE KEYS */;

-- Copiando estrutura para tabela doe_facil.beneficiary_philanthropic_entity
CREATE TABLE IF NOT EXISTS `beneficiary_philanthropic_entity` (
  `id` int unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `CNPJ` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `number` varchar(50) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `state` varchar(50) NOT NULL DEFAULT '',
  `country` varchar(50) NOT NULL DEFAULT '',
  `contact_number` varchar(50) NOT NULL DEFAULT '',
  `mission_objective` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `use_donations` text NOT NULL,
  `active_time` text NOT NULL,
  `main_activities` text NOT NULL,
  `selection_criteria` text NOT NULL,
  `size_entity_employees` varchar(300) NOT NULL DEFAULT '',
  `entity_management` text NOT NULL,
  `quantity_attendance` varchar(300) NOT NULL DEFAULT '',
  `monitoring_evaluation_result` text NOT NULL,
  `current_main_challenge` text NOT NULL,
  `financial_maintenance` text NOT NULL,
  `disclosure_solicitations_donations` text NOT NULL,
  `accountability_opinion` text NOT NULL,
  `guarantee_security_privacy_data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Questionário de Entrevista. Beneficiários: Entidades Filantrópicas';

-- Copiando dados para a tabela doe_facil.beneficiary_philanthropic_entity: ~0 rows (aproximadamente)
DELETE FROM `beneficiary_philanthropic_entity`;
/*!40000 ALTER TABLE `beneficiary_philanthropic_entity` DISABLE KEYS */;
/*!40000 ALTER TABLE `beneficiary_philanthropic_entity` ENABLE KEYS */;

-- Copiando estrutura para tabela doe_facil.donator_legal_person
CREATE TABLE IF NOT EXISTS `donator_legal_person` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `CNPJ` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `state` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` varchar(50) NOT NULL,
  `notifications` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recurring_donor` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabela; questionário de entrevista: Doadores Pessoas Jurídicas';

-- Copiando dados para a tabela doe_facil.donator_legal_person: ~0 rows (aproximadamente)
DELETE FROM `donator_legal_person`;
/*!40000 ALTER TABLE `donator_legal_person` DISABLE KEYS */;
/*!40000 ALTER TABLE `donator_legal_person` ENABLE KEYS */;

-- Copiando estrutura para tabela doe_facil.donator_natural_person
CREATE TABLE IF NOT EXISTS `donator_natural_person` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CPF` varchar(50) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `notifications` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recurring_donor` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabela, questináro de entrevista: Doadores Pessoas Fisícas';

-- Copiando dados para a tabela doe_facil.donator_natural_person: ~0 rows (aproximadamente)
DELETE FROM `donator_natural_person`;
/*!40000 ALTER TABLE `donator_natural_person` DISABLE KEYS */;
/*!40000 ALTER TABLE `donator_natural_person` ENABLE KEYS */;

-- Copiando estrutura para tabela doe_facil.opinion
CREATE TABLE IF NOT EXISTS `opinion` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `donation_before` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `registration_difficulty` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `intuitive_registration` text,
  `suggestion` text,
  `feel_safe` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabela relacionada a coletar opiniões sobre doação online e acesso ao site doe_facil';

-- Copiando dados para a tabela doe_facil.opinion: ~0 rows (aproximadamente)
DELETE FROM `opinion`;
/*!40000 ALTER TABLE `opinion` DISABLE KEYS */;
/*!40000 ALTER TABLE `opinion` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
