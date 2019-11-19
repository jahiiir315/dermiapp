USE dermiapp;

CREATE TABLE `membresias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


insert into `membresias`(`id`,`nombre`) values (1,'normal');
insert into `membresias`(`id`,`nombre`) values (2,'premium');
