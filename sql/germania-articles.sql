# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle germania_article_categories
#
# This table scheme must match germania-kg/categories.
#
# ------------------------------------------------------------

DROP TABLE IF EXISTS `germania_article_categories`;

CREATE TABLE `germania_article_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_slug` varchar(256) NOT NULL,
  `category_name` varchar(256) NOT NULL DEFAULT '',
  `category_description` mediumtext,
  `category_photo` varchar(256) DEFAULT NULL,
  `is_active` int(2) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `index_slug` (`category_slug`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Export von Tabelle germania_article_prices
# ------------------------------------------------------------

DROP TABLE IF EXISTS `germania_article_prices`;

CREATE TABLE `germania_article_prices` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(11) unsigned NOT NULL,
  `amount` varchar(256) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `description` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Export von Tabelle germania_articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `germania_articles`;

CREATE TABLE `germania_articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_slug` varchar(256) DEFAULT '',
  `article_default_num` int(11) unsigned NOT NULL DEFAULT '1',
  `article_name` varchar(256) NOT NULL DEFAULT '',
  `article_number` varchar(64) DEFAULT NULL,
  `article_variants` varchar(256) DEFAULT NULL,
  `article_description` mediumtext,
  `article_photo` varchar(256) DEFAULT NULL,
  `is_active` int(2) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `index_slug` (`article_slug`(255))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Export von Tabelle germania_articles_mm
# ------------------------------------------------------------

DROP TABLE IF EXISTS `germania_articles_mm`;

CREATE TABLE `germania_articles_mm` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(11) unsigned NOT NULL,
  `category_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
