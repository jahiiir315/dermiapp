USE dermiapp;

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(40) DEFAULT NULL,
  `apellido1` varchar(40) DEFAULT NULL,
  `apellido2` varchar(40) DEFAULT NULL,
  `dni` char(8) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_cli` (`user_id`),
  CONSTRAINT `fk_users_cli` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;


insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (4,'Jahir','Moncada','Leiva','70606685',3);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (5,'ARIS JAHIR','Moncada','Leiva','70606685',3);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (6,'ARIS JAHIR','Moncada','Leiva','70606685',3);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (7,'Aris Jahir',null,'asda','123123',3);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (8,'Magdiel','Moncada','Leiva','70669985',3);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (9,'nuevo','','','',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (10,'ARIS JAHIR','Moncada','Leiva','70606685',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (11,'Yessenia Dyanira','','','',3);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (12,'asdasdasd','','','',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (13,'asdasdasd','','','',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (14,'asdasdasd','','','',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (15,'huevos','','','',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (16,'ARIS JAHIR','','','',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (17,'asdasdasdasdasdasd123123','','','',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (18,'ARIS JAHIRssss','','','',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (19,'ARIS JAHIRssss','','','',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (20,'ARIS JAHIRssss','','','',null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (21,'ARIS JAHIRssss','','','',3);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (22,'asdasdaaaa1231231','','','',3);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (23,'ARIS JAHIR123123123','','','',3);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (24,'ARIS JAHIR','Moncada','Leiva','70606685',4);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (25,'pelotas',null,null,null,null);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (26,'','','','',3);
insert into `clientes`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`user_id`) values (27,'Aris Jahir','','','',46);
