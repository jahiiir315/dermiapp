USE dermiapp;

CREATE TABLE `doctores_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_doctores` (`doctor_id`),
  KEY `fk_users` (`user_id`),
  CONSTRAINT `fk_doctores` FOREIGN KEY (`doctor_id`) REFERENCES `doctores` (`id`),
  CONSTRAINT `fk_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


insert into `doctores_users`(`id`,`doctor_id`,`user_id`,`descripcion`) values (1,2,3,'Las pelotas');
insert into `doctores_users`(`id`,`doctor_id`,`user_id`,`descripcion`) values (2,1,4,'Las pelotas');
insert into `doctores_users`(`id`,`doctor_id`,`user_id`,`descripcion`) values (3,1,6,'Las pelotas2');
insert into `doctores_users`(`id`,`doctor_id`,`user_id`,`descripcion`) values (4,2,4,'Las pelotas2');
insert into `doctores_users`(`id`,`doctor_id`,`user_id`,`descripcion`) values (5,1,46,'Las pelotas2');
