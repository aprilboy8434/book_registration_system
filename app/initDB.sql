-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;

DROP TABLE IF EXISTS `book_registration_log`;
DROP TABLE IF EXISTS `entity`;
DROP TABLE IF EXISTS `book_call_number`;


-- ************************************** `book_call_number`

CREATE TABLE IF NOT EXISTS `book_call_number`
(
 `id`                    int NOT NULL ,
 `classification_number` varchar(45) NOT NULL ,
 `author_number`         varchar(45) NOT NULL ,
 `workmark`              varchar(45) NOT NULL ,

PRIMARY KEY (`id`)
);

-- ************************************** `entity`

CREATE TABLE IF NOT EXISTS `entity`
(
 `id`           int NOT NULL ,
 `name`         varchar(45) NOT NULL UNIQUE,
 `is_publisher` boolean NOT NULL ,

PRIMARY KEY (`id`)
);

-- ************************************** `book_registration_log`

CREATE TABLE IF NOT EXISTS `book_registration_log`
(
 `id`                int NOT NULL ,
 `registration_date` date NOT NULL ,
 `accession_number`  varchar(45) NOT NULL UNIQUE,
 `call_number_id`    int NOT NULL ,
 `author_id`         int NOT NULL ,
 `title`             varchar(45) NOT NULL ,
 `publisher_id`      int NOT NULL ,
 `edition`           int NULL ,
 `year`             varchar(45) NULL ,
 `price_thb`         decimal NULL ,
 `note`              text NULL ,

PRIMARY KEY (`id`),
KEY `fk_auther_id` (`author_id`),
CONSTRAINT `FK_AUTHOR_ID` FOREIGN KEY `fk_auther_id` (`author_id`) REFERENCES `entity` (`id`),
KEY `fk_callnumber` (`call_number_id`),
CONSTRAINT `FK_CALLNUMBER` FOREIGN KEY `fk_callnumber` (`call_number_id`) REFERENCES `book_call_number` (`id`),
KEY `fk_publisher_id` (`publisher_id`),
CONSTRAINT `FK_PUBLISHER_ID` FOREIGN KEY `fk_publisher_id` (`publisher_id`) REFERENCES `entity` (`id`)
);