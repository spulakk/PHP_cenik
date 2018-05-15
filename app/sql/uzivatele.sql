DROP TABLE IF EXISTS `uzivatele`;
CREATE TABLE `uzivatele` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(255) NOT NULL,
  `heslo` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

TRUNCATE `uzivatele`;