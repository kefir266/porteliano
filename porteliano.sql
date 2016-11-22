-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.50 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных porteliano_db
DROP DATABASE IF EXISTS `porteliano_db`;
CREATE DATABASE IF NOT EXISTS `porteliano_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `porteliano_db`;


-- Дамп структуры для таблица porteliano_db.country
DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.country: ~10 rows (приблизительно)
DELETE FROM `country`;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` (`code`, `name`, `population`) VALUES
	('AU', 'Australia', 24016400),
	('BR', 'Brazil', 205722000),
	('CA', 'Canada', 35985751),
	('CN', 'China', 1375210000),
	('DE', 'Germany', 81459000),
	('FR', 'France', 64513242),
	('GB', 'United Kingdom', 65097000),
	('IN', 'India', 1285400000),
	('RU', 'Russia', 146519759),
	('US', 'United States', 322976000);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.manufacturer
DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.manufacturer: ~2 rows (приблизительно)
DELETE FROM `manufacturer`;
/*!40000 ALTER TABLE `manufacturer` DISABLE KEYS */;
INSERT INTO `manufacturer` (`id`, `title`) VALUES
	(1, 'Рога и копыта'),
	(2, 'Производитель1');
/*!40000 ALTER TABLE `manufacturer` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.material
DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.material: ~2 rows (приблизительно)
DELETE FROM `material`;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` (`id`, `title`) VALUES
	(1, 'Дерево'),
	(2, 'ДСП');
/*!40000 ALTER TABLE `material` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.migration
DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.migration: ~2 rows (приблизительно)
DELETE FROM `migration`;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1478611317),
	('m130524_201442_init', 1478611336);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.price
DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cost` decimal(12,2) NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_price_product` (`product_id`),
  CONSTRAINT `FK_price_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.price: ~0 rows (приблизительно)
DELETE FROM `price`;
/*!40000 ALTER TABLE `price` DISABLE KEYS */;
/*!40000 ALTER TABLE `price` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `section_id` int(10) unsigned NOT NULL,
  `material_id` int(10) unsigned NOT NULL,
  `style_id` int(10) unsigned NOT NULL,
  `manufacurer` int(10) unsigned NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  KEY `FK_product_material` (`material_id`),
  KEY `FK_product_manufacturer` (`manufacurer`),
  KEY `FK_product_style` (`style_id`),
  KEY `FK_product_section` (`section_id`),
  CONSTRAINT `FK_product_section` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`),
  CONSTRAINT `FK_product_manufacturer` FOREIGN KEY (`manufacurer`) REFERENCES `manufacturer` (`id`),
  CONSTRAINT `FK_product_material` FOREIGN KEY (`material_id`) REFERENCES `material` (`id`),
  CONSTRAINT `FK_product_style` FOREIGN KEY (`style_id`) REFERENCES `style` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.product: ~2 rows (приблизительно)
DELETE FROM `product`;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `title`, `section_id`, `material_id`, `style_id`, `manufacurer`, `img`, `description`) VALUES
	(3, 'Дверь 1', 4, 1, 1, 1, 'door1', 'Дверь 1'),
	(4, 'Дверь 2', 3, 2, 2, 2, 'door2', 'Дверь 2');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.section
DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `title_main` varchar(100) DEFAULT NULL,
  `page` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_section_section` (`parent_id`),
  CONSTRAINT `FK_section_section` FOREIGN KEY (`parent_id`) REFERENCES `section` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.section: ~4 rows (приблизительно)
DELETE FROM `section`;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` (`id`, `title`, `parent_id`, `title_main`, `page`) VALUES
	(1, 'ДВЕРИ', NULL, 'Двери', '?section=1'),
	(2, 'ПЕРЕГОРОДКИ', NULL, 'Перегородки', '?section=2'),
	(3, 'Межкомнатные двери', 1, 'Межкомнатные двери', '?section=3'),
	(4, 'Входные двери', 1, 'Входные двери', 'index/?section=4');
/*!40000 ALTER TABLE `section` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.style
DROP TABLE IF EXISTS `style`;
CREATE TABLE IF NOT EXISTS `style` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.style: ~2 rows (приблизительно)
DELETE FROM `style`;
/*!40000 ALTER TABLE `style` DISABLE KEYS */;
INSERT INTO `style` (`id`, `title`) VALUES
	(1, 'Стиль1'),
	(2, 'Стиль2');
/*!40000 ALTER TABLE `style` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы porteliano_db.user: ~1 rows (приблизительно)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '', '', NULL, '', 10, 0, 0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
