CREATE TABLE `admin` (
 `id` int NOT NULL auto_increment,
  PRIMARY KEY (id),
  `username` varchar(255),
  `password` varchar(60)
)ENGINE=INNODB;;

CREATE TABLE `user` (
 `id` int NOT NULL auto_increment,
  PRIMARY KEY (id),
  `username` varchar(255),
  `password` varchar(32)
)ENGINE=INNODB;;


CREATE TABLE `product` (
 `id` int NOT NULL auto_increment,
  PRIMARY KEY (id),
  `name` varchar(255),
  `gia` int(32),
  'img' LONGBLOB 
)ENGINE=INNODB;;






