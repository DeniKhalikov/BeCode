DROP TABLE IF EXISTS `sport`;
CREATE TABLE IF NOT EXISTS `sport`
(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sport` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sports_fk` (`user_id`)
)

ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `user`;

CREATE TABLE IF NOT EXISTS `user`
(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)

ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

ALTER TABLE `sport`
  ADD CONSTRAINT `sports_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;