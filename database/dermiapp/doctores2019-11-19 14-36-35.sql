USE dermiapp;

CREATE TABLE `doctores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(80) NOT NULL,
  `apellido1` varchar(40) NOT NULL,
  `apellido2` varchar(40) NOT NULL,
  `dni` char(8) NOT NULL,
  `codigomedico` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


insert into `doctores`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`codigomedico`) values (1,'Martin','Melendez','Ycochea','70196660','001');
insert into `doctores`(`id`,`nombres`,`apellido1`,`apellido2`,`dni`,`codigomedico`) values (2,'Doctor2','2','3','705065','1531');
