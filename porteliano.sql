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


-- Дамп структуры для таблица porteliano_db.currency
DROP TABLE IF EXISTS `currency`;
CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(10) unsigned NOT NULL,
  `title` char(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.currency: ~1 rows (приблизительно)
DELETE FROM `currency`;
/*!40000 ALTER TABLE `currency` DISABLE KEYS */;
INSERT INTO `currency` (`id`, `title`) VALUES
	(643, 'RUB');
/*!40000 ALTER TABLE `currency` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.customer
DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL,
  `ip` char(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `surname` (`surname`),
  KEY `phone` (`phone`),
  KEY `full_name` (`full_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.customer: ~0 rows (приблизительно)
DELETE FROM `customer`;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.manufacturer
DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.manufacturer: ~2 rows (приблизительно)
DELETE FROM `manufacturer`;
/*!40000 ALTER TABLE `manufacturer` DISABLE KEYS */;
INSERT INTO `manufacturer` (`id`, `title`, `img`, `link`) VALUES
	(1, 'Romagnoli', '', ''),
	(2, 'PORTE IN DOOR', '', '');
/*!40000 ALTER TABLE `manufacturer` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.material
DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.material: ~3 rows (приблизительно)
DELETE FROM `material`;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` (`id`, `title`) VALUES
	(1, 'Дерево'),
	(2, 'ДСП'),
	(3, 'Со стеклом');
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


-- Дамп структуры для таблица porteliano_db.order
DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(100) DEFAULT NULL,
  `done` date DEFAULT NULL,
  `term` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_order_customer` (`full_name`),
  CONSTRAINT `FK_order_customer` FOREIGN KEY (`full_name`) REFERENCES `customer` (`full_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.order: ~0 rows (приблизительно)
DELETE FROM `order`;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.order_content
DROP TABLE IF EXISTS `order_content`;
CREATE TABLE IF NOT EXISTS `order_content` (
  `order_id` int(10) unsigned DEFAULT NULL,
  `costomer_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  `price` decimal(12,2) unsigned DEFAULT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `currency_id` int(10) unsigned DEFAULT NULL,
  `sum` decimal(12,0) unsigned DEFAULT NULL,
  KEY `FK_order_content_order` (`order_id`),
  KEY `FK_order_content_customer` (`costomer_id`),
  KEY `FK_order_content_product` (`product_id`),
  KEY `FK_order_content_currency` (`currency_id`),
  CONSTRAINT `FK_order_content_currency` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`id`),
  CONSTRAINT `FK_order_content_customer` FOREIGN KEY (`costomer_id`) REFERENCES `customer` (`id`),
  CONSTRAINT `FK_order_content_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  CONSTRAINT `FK_order_content_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.order_content: ~0 rows (приблизительно)
DELETE FROM `order_content`;
/*!40000 ALTER TABLE `order_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_content` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.price
DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `currency_id` int(10) unsigned NOT NULL DEFAULT '643',
  `cost` decimal(12,2) NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_price_product` (`product_id`),
  KEY `FK_price_currency` (`currency_id`),
  CONSTRAINT `FK_price_currency` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`id`),
  CONSTRAINT `FK_price_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.price: ~4 rows (приблизительно)
DELETE FROM `price`;
/*!40000 ALTER TABLE `price` DISABLE KEYS */;
INSERT INTO `price` (`id`, `currency_id`, `cost`, `product_id`, `date`) VALUES
	(1, 643, 1300.00, 7, NULL),
	(2, 643, 1400.00, 3, NULL),
	(3, 643, 1500.00, 6, NULL),
	(4, 643, 1600.00, 4, NULL);
/*!40000 ALTER TABLE `price` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `section_id` int(10) unsigned NOT NULL,
  `material_id` int(10) unsigned NOT NULL,
  `style_id` int(10) unsigned NOT NULL,
  `manufacturer_id` int(10) unsigned NOT NULL,
  `articul` varchar(50) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `description` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  UNIQUE KEY `articul` (`articul`),
  KEY `FK_product_material` (`material_id`),
  KEY `FK_product_style` (`style_id`),
  KEY `FK_product_section` (`section_id`),
  KEY `FK_product_manufacturer` (`manufacturer_id`),
  CONSTRAINT `FK_product_manufacturer` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`id`),
  CONSTRAINT `FK_product_material` FOREIGN KEY (`material_id`) REFERENCES `material` (`id`),
  CONSTRAINT `FK_product_section` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`),
  CONSTRAINT `FK_product_style` FOREIGN KEY (`style_id`) REFERENCES `style` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.product: ~4 rows (приблизительно)
DELETE FROM `product`;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `title`, `section_id`, `material_id`, `style_id`, `manufacturer_id`, `articul`, `img`, `description`, `date`) VALUES
	(3, 'ACROPOLI AC1V B2 ', 3, 1, 1, 1, 'AC1V B2 ', 'МОДЕЛЬ AC1V B2 цена от 3439 У.Е..PNG', 'МОДЕЛЬ AC1V B2 цена от 3439 У.Е.', '0000-00-00 00:00:00'),
	(4, 'CANALE linea', 3, 1, 1, 2, NULL, 'CANALE linea.jpg', 'CANALE linea', '0000-00-00 00:00:00'),
	(6, 'CANALE', 3, 2, 2, 2, NULL, 'CANALE.jpg', 'CANALE', '0000-00-00 00:00:00'),
	(7, 'ACROPOLI AC1V ', 3, 1, 1, 1, ' AC1V ', 'МОДЕЛЬ AC1V цена от 1720 У.Е..PNG', 'МОДЕЛЬ AC1V цена от 1720 У.Е..PNG', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


-- Дамп структуры для таблица porteliano_db.section
DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `title_main` varchar(100) DEFAULT NULL,
  `page` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы porteliano_db.style: ~2 rows (приблизительно)
DELETE FROM `style`;
/*!40000 ALTER TABLE `style` DISABLE KEYS */;
INSERT INTO `style` (`id`, `title`) VALUES
	(1, 'Классический'),
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы porteliano_db.user: 1 rows
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '', '$2y$13$XFkg1XkmwNpeDfnP7nyU3ONzkE9gzaz8ribn.S23dlJ/9t9j1sFSa', NULL, '', 10, 0, 1480107957);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
