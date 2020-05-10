-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;
DROP TABLE IF EXISTS `libpkc_biblio_registration_log`;
CREATE TABLE IF NOT EXISTS `libpkc_biblio_registration_log`
(
 `biblio_registration_log_id` int(11) NOT NULL auto_increment,
 `registration_date`    date NOT NULL,
 `accession_number`     varchar(50) NOT NULL UNIQUE,
 `biblio_id`            int(11) default NULL,
 `price_thb`            decimal NULL,
 `note`                 text collate utf8_unicode_ci default NULL,

PRIMARY KEY (`biblio_registration_log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;