USE dermiapp;

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(80) NOT NULL,
  `apellido1` varchar(40) NOT NULL,
  `apellido2` varchar(40) NOT NULL,
  `celular` char(9) NOT NULL,
  `dni` char(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


insert into `empleados`(`id`,`nombres`,`apellido1`,`apellido2`,`celular`,`dni`) values (1,'Juan','Perez','Merino','963252122','70669988');
