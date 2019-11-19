USE dermiapp;

CREATE TABLE `empleados_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empleado_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_e_u` (`user_id`),
  KEY `fk_empleados_e_u` (`empleado_id`),
  CONSTRAINT `fk_empleados_e_u` FOREIGN KEY (`empleado_id`) REFERENCES `empleados` (`id`),
  CONSTRAINT `fk_users_e_u` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


insert into `empleados_users`(`id`,`empleado_id`,`user_id`,`descripcion`) values (1,1,3,'asdasdasd');
insert into `empleados_users`(`id`,`empleado_id`,`user_id`,`descripcion`) values (2,1,4,'Las pelotas2');
insert into `empleados_users`(`id`,`empleado_id`,`user_id`,`descripcion`) values (3,1,4,'asdasdasd');
insert into `empleados_users`(`id`,`empleado_id`,`user_id`,`descripcion`) values (4,1,4,'Las pelotas212');
insert into `empleados_users`(`id`,`empleado_id`,`user_id`,`descripcion`) values (5,1,4,null);
insert into `empleados_users`(`id`,`empleado_id`,`user_id`,`descripcion`) values (6,1,4,null);
insert into `empleados_users`(`id`,`empleado_id`,`user_id`,`descripcion`) values (7,1,5,null);
insert into `empleados_users`(`id`,`empleado_id`,`user_id`,`descripcion`) values (8,1,46,'asdasd');
