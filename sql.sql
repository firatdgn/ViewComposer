-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                10.4.8-MariaDB - mariadb.org binary distribution
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- tablo yapısı dökülüyor kurumsal.address
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `first_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.address: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.attributes
CREATE TABLE IF NOT EXISTS `attributes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.attributes: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `attributes` DISABLE KEYS */;
INSERT INTO `attributes` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'renk', 'a:2:{s:2:"tr";s:4:"Renk";s:2:"en";s:6:"Colour";}', '2020-04-27 16:29:03', '2020-04-27 16:29:04');
/*!40000 ALTER TABLE `attributes` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.attribute_product
CREATE TABLE IF NOT EXISTS `attribute_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.attribute_product: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `attribute_product` DISABLE KEYS */;
INSERT INTO `attribute_product` (`id`, `attribute_id`, `product_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2020-04-27 16:30:49', '2020-04-27 16:30:51');
/*!40000 ALTER TABLE `attribute_product` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.attribute_product_values
CREATE TABLE IF NOT EXISTS `attribute_product_values` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variation_id` int(11) NOT NULL,
  `attribute_value_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.attribute_product_values: ~3 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `attribute_product_values` DISABLE KEYS */;
INSERT INTO `attribute_product_values` (`id`, `attribute_id`, `product_id`, `variation_id`, `attribute_value_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 2, 1, '2020-04-27 16:31:04', '2020-04-27 16:31:04'),
	(2, 1, 1, 3, 2, '2020-04-27 16:31:04', '2020-04-27 16:31:04'),
	(3, 1, 1, 4, 3, '2020-04-27 16:31:04', '2020-04-27 16:31:04');
/*!40000 ALTER TABLE `attribute_product_values` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.attribute_values
CREATE TABLE IF NOT EXISTS `attribute_values` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.attribute_values: ~3 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `attribute_values` DISABLE KEYS */;
INSERT INTO `attribute_values` (`id`, `group_id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 1, 'a:2:{s:2:"tr";s:4:"Mavi";s:2:"en";s:4:"Blue";}', '2020-04-27 16:29:19', '2020-04-27 16:29:19'),
	(2, 1, 'a:2:{s:2:"tr";s:10:"Kırmızı";s:2:"en";s:3:"Red";}', '2020-04-27 16:29:19', '2020-04-27 16:29:19'),
	(3, 1, 'a:2:{s:2:"tr";s:10:"Kahverengi";s:2:"en";s:5:"Brown";}', '2020-04-27 16:29:19', '2020-04-27 16:29:19');
/*!40000 ALTER TABLE `attribute_values` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.languages
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `code` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.languages: ~2 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` (`id`, `is_active`, `code`, `name`, `priority`, `created_at`, `updated_at`) VALUES
	(1, 1, 'tr', 'Türkçe', 1, '2020-04-27 12:47:58', '2020-04-27 12:47:58'),
	(2, 1, 'en', 'Engish', 0, '2020-04-27 12:47:58', '2020-04-27 12:47:58');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.media
CREATE TABLE IF NOT EXISTS `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.media: ~5 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` (`id`, `key`, `name`, `description`, `link`, `created_at`, `updated_at`) VALUES
	(1, 'thumbs1', '', 'a:2:{s:2:"tr";s:29:"Ürün Açıklaması Resimden";s:2:"en";s:32:"Product Description From Picture";}', 'http://stylemobel.de/thumbs/1559571760.jpg', '2020-04-27 16:58:19', '2020-04-27 16:58:19'),
	(2, 'thumbs2', '', 'a:2:{s:2:"tr";s:29:"Ürün Açıklaması Resimden";s:2:"en";s:32:"Product Description From Picture";}', 'http://stylemobel.de/thumbs/1559571724.jpg', '2020-04-27 16:58:19', '2020-04-27 16:58:19'),
	(3, 'thumbs3', '', 'a:2:{s:2:"tr";s:29:"Ürün Açıklaması Resimden";s:2:"en";s:32:"Product Description From Picture";}', 'http://stylemobel.de/thumbs/1559571709.jpg', '2020-04-27 16:58:19', '2020-04-27 16:58:19'),
	(4, 'thumbs4', '', 'a:2:{s:2:"tr";s:29:"Ürün Açıklaması Resimden";s:2:"en";s:32:"Product Description From Picture";}', 'http://stylemobel.de/thumbs/1559571692.jpg', '2020-04-27 16:58:19', '2020-04-27 16:58:19'),
	(5, 'thumbs5', '', 'a:2:{s:2:"tr";s:29:"Ürün Açıklaması Resimden";s:2:"en";s:32:"Product Description From Picture";}', 'http://stylemobel.de/thumbs/1559571674.jpg', '2020-04-27 16:58:19', '2020-04-27 16:58:19'),
	(6, 'thumbs6', '', 'a:2:{s:2:"tr";s:29:"Ürün Açıklaması Resimden";s:2:"en";s:32:"Product Description From Picture";}', 'http://stylemobel.de/thumbs/1559033916.jpg', '2020-04-27 16:58:19', '2020-04-27 16:58:19');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.menus: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'anaMenu', 'Ana Menü', '2020-04-27 16:49:18', '2020-04-27 16:49:24');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.menu_content
CREATE TABLE IF NOT EXISTS `menu_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `name` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT 0,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_html` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.menu_content: ~2 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `menu_content` DISABLE KEYS */;
INSERT INTO `menu_content` (`id`, `menu_id`, `name`, `description`, `sort`, `url`, `icon`, `is_html`, `created_at`, `updated_at`) VALUES
	(1, 1, 'a:2:{s:2:"tr";s:9:"Ana Sayfa";s:2:"en";s:8:"Homepage";}', NULL, 0, 'a:2:{s:2:"tr";s:1:"/";s:2:"en";s:1:"/";}', NULL, 0, '2020-04-27 16:50:00', '2020-04-27 16:50:01'),
	(2, 1, 'a:2:{s:2:"tr";s:9:"Ürünler";s:2:"en";s:8:"Products";}', NULL, 0, 'a:2:{s:2:"tr";s:7:"Urunler";s:2:"en";s:8:"Products";}', NULL, 0, '2020-04-27 16:51:06', '2020-04-27 16:51:06');
/*!40000 ALTER TABLE `menu_content` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.modules
CREATE TABLE IF NOT EXISTS `modules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manage_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_loaded` tinyint(4) NOT NULL DEFAULT 0,
  `is_dropped` tinyint(4) NOT NULL DEFAULT 0,
  `is_needed_reflesh` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.modules: ~9 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`id`, `name`, `manage_url`, `is_loaded`, `is_dropped`, `is_needed_reflesh`, `is_active`, `created_at`, `updated_at`) VALUES
	(10, 'Analiz', 'Backend/Analytics', 0, 0, 0, 0, '2020-04-27 12:46:17', '2020-04-27 12:46:17'),
	(11, 'Blog', 'Backend/Blog', 0, 0, 0, 0, '2020-04-27 12:46:17', '2020-04-27 12:46:17'),
	(12, 'Diller', 'Backend/Language', 1, 0, 0, 1, '2020-04-27 12:46:17', '2020-04-27 13:48:26'),
	(13, 'Medya', 'Backend/Media', 1, 0, 0, 1, '2020-04-27 12:46:17', '2020-04-27 14:05:04'),
	(14, 'Menüler', 'Backend/Menus', 1, 0, 0, 1, '2020-04-27 12:46:17', '2020-04-27 13:52:52'),
	(15, 'Ayarlar', 'Backend/Settings', 0, 0, 0, 0, '2020-04-27 12:46:17', '2020-04-27 12:46:17'),
	(16, 'Alışveriş', 'Backend/Shopping', 1, 0, 0, 1, '2020-04-27 12:46:17', '2020-04-27 12:47:57'),
	(17, 'SosyalMedya', 'Backend/SocialMedia', 1, 0, 0, 1, '2020-04-27 12:46:17', '2020-04-27 13:49:01'),
	(18, 'Sabitler', 'Backend/Statics', 1, 0, 0, 1, '2020-04-27 12:46:17', '2020-04-27 13:53:33');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_option` tinyint(4) NOT NULL,
  `payment_option` tinyint(4) NOT NULL,
  `order_status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shipping_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.orders: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.order_products
CREATE TABLE IF NOT EXISTS `order_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` double(20,6) NOT NULL,
  `price` double(20,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.order_products: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.order_product_attributes
CREATE TABLE IF NOT EXISTS `order_product_attributes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `attribute_value_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.order_product_attributes: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `order_product_attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_product_attributes` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.order_status
CREATE TABLE IF NOT EXISTS `order_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.order_status: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `order_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_status` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `name` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `price` double(20,6) DEFAULT NULL,
  `main_product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.products: ~4 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `type`, `name`, `slug`, `description`, `seo_description`, `seo_keywords`, `is_active`, `price`, `main_product_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 'a:2:{s:2:"tr";s:15:"Deneme Ürünü";s:2:"en";s:15:"Example Product";}', 'a:2:{s:2:"tr";s:12:"deneme-urunu";s:2:"en";s:15:"example-product";}', 'a:2:{s:2:"tr";s:27:"Deneme Ürün Açıklaması";s:2:"en";s:27:"Example Product Description";}', NULL, NULL, 1, 500.000000, NULL, '2020-04-27 16:33:16', '2020-04-27 16:33:16'),
	(2, 2, 'a:2:{s:2:"tr";s:15:"Deneme Ürünü";s:2:"en";s:15:"Example Product";}', 'a:2:{s:2:"tr";s:12:"deneme-urunu";s:2:"en";s:15:"example-product";}', 'a:2:{s:2:"tr";s:27:"Deneme Ürün Açıklaması";s:2:"en";s:27:"Example Product Description";}', NULL, NULL, 1, 500.000000, 1, '2020-04-27 16:33:16', '2020-04-27 16:33:16'),
	(3, 2, 'a:2:{s:2:"tr";s:15:"Deneme Ürünü";s:2:"en";s:15:"Example Product";}', 'a:2:{s:2:"tr";s:12:"deneme-urunu";s:2:"en";s:15:"example-product";}', 'a:2:{s:2:"tr";s:27:"Deneme Ürün Açıklaması";s:2:"en";s:27:"Example Product Description";}', NULL, NULL, 1, 500.000000, 1, '2020-04-27 16:33:16', '2020-04-27 16:33:16'),
	(4, 2, 'a:2:{s:2:"tr";s:15:"Deneme Ürünü";s:2:"en";s:15:"Example Product";}', 'a:2:{s:2:"tr";s:12:"deneme-urunu";s:2:"en";s:15:"example-product";}', 'a:2:{s:2:"tr";s:27:"Deneme Ürün Açıklaması";s:2:"en";s:27:"Example Product Description";}', NULL, NULL, 1, 500.000000, 1, '2020-04-27 16:33:16', '2020-04-27 16:33:16');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.products_images
CREATE TABLE IF NOT EXISTS `products_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.products_images: ~3 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `products_images` DISABLE KEYS */;
INSERT INTO `products_images` (`id`, `product_id`, `image`, `sort`, `created_at`, `updated_at`) VALUES
	(1, 1, 'uploads/1587852187bmw.jpg', 3, '2020-04-27 16:45:42', '2020-04-27 16:45:43'),
	(2, 1, 'uploads/1587977985XU1239.0.XU1239NA.jpg', 1, '2020-04-27 16:45:57', '2020-04-27 16:45:58'),
	(3, 3, 'uploads/1587978010marjinal.png', 2, '2020-04-27 16:46:10', '2020-04-27 16:46:12');
/*!40000 ALTER TABLE `products_images` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.shopping_categories
CREATE TABLE IF NOT EXISTS `shopping_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `image` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.shopping_categories: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `shopping_categories` DISABLE KEYS */;
INSERT INTO `shopping_categories` (`id`, `name`, `seo_description`, `seo_keywords`, `is_active`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'a:2:{s:2:"tr";s:13:"İlk Kategori";s:2:"en";s:14:"First Category";}', NULL, NULL, 1, NULL, '2020-04-27 16:34:42', '2020-04-27 16:34:43');
/*!40000 ALTER TABLE `shopping_categories` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.shopping_category_product
CREATE TABLE IF NOT EXISTS `shopping_category_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.shopping_category_product: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `shopping_category_product` DISABLE KEYS */;
INSERT INTO `shopping_category_product` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2020-04-27 16:34:50', '2020-04-27 16:34:50');
/*!40000 ALTER TABLE `shopping_category_product` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.social_media
CREATE TABLE IF NOT EXISTS `social_media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.social_media: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `social_media` DISABLE KEYS */;
INSERT INTO `social_media` (`id`, `name`, `icon`, `value`, `created_at`, `updated_at`) VALUES
	(1, 'Instagram', 'fa-instagram', 'nuh_orun', '2020-04-27 16:48:49', '2020-04-27 16:48:50');
/*!40000 ALTER TABLE `social_media` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.statics
CREATE TABLE IF NOT EXISTS `statics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_html` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.statics: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `statics` DISABLE KEYS */;
/*!40000 ALTER TABLE `statics` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.translations
CREATE TABLE IF NOT EXISTS `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `html` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.translations: ~2 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` (`id`, `key`, `text`, `html`, `created_at`, `updated_at`) VALUES
	(1, 'kaydet', 'a:2:{s:2:"tr";s:6:"Kaydet";s:2:"en";s:4:"Save";}', 0, '2020-04-27 16:47:06', '2020-04-27 16:47:07'),
	(2, 'duzenle', 'a:2:{s:2:"tr";s:8:"Düzenle";s:2:"en";s:6:"Update";}', 0, '2020-04-27 16:47:29', '2020-04-27 16:47:30'),
	(3, 'takipEt', 'a:2:{s:2:"tr";s:10:"Takip Edin";s:2:"en";s:9:"Follow Us";}', 0, '2020-04-27 16:47:29', '2020-04-27 16:47:29');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.users: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- tablo yapısı dökülüyor kurumsal.wishlist
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- kurumsal.wishlist: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `wishlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishlist` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
