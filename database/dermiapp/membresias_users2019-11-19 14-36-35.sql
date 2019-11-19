USE dermiapp;

CREATE TABLE `membresias_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membresia_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `intentos` int(10) unsigned DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_membresias_m_u` (`membresia_id`),
  KEY `fk_users_m_u` (`user_id`),
  CONSTRAINT `fk_membresias_m_u` FOREIGN KEY (`membresia_id`) REFERENCES `membresias` (`id`),
  CONSTRAINT `fk_users_m_u` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;


insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (2,1,3,'2019-11-17 00:00:00','2019-11-17 00:00:00',50,null,'');
insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (3,1,4,'2019-11-07 00:00:00','2019-11-16 00:00:00',0,3,'activo');
insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (4,1,5,'2019-11-15 00:00:00','2019-11-21 00:00:00',0,null,'');
insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (6,1,41,'2019-11-07 00:00:00','2019-11-07 00:00:00',0,null,'');
insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (7,1,42,'2019-11-18 00:00:00','2019-11-18 00:00:00',0,null,'');
insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (8,1,43,'2019-11-18 00:00:00','2019-11-18 00:00:00',0,null,'');
insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (9,1,44,'2019-11-18 00:00:00','2019-11-18 00:00:00',0,null,'');
insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (10,1,45,'2019-11-18 00:00:00','2019-11-18 00:00:00',0,0,'inactivo');
insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (40,1,46,'2019-11-19 00:00:00','2019-11-19 00:00:00',0,0,'inactivo');
insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (43,2,46,'2019-11-19 00:00:00','2019-11-19 00:00:00',50,9999999,'inactivo');
insert into `membresias_users`(`id`,`membresia_id`,`user_id`,`fecha_inicio`,`fecha_fin`,`costo`,`intentos`,`estado`) values (45,2,46,'2019-11-19 00:00:00','2020-01-19 00:00:00',90,9999999,'activo');
