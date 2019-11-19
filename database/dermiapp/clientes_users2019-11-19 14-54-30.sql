USE dermiapp;

CREATE TABLE `clientes_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `probbenigno` decimal(8,3) NOT NULL,
  `probmaligno` decimal(8,3) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `photo` varchar(250) NOT NULL,
  `photodir` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clientes_c_u` (`cliente_id`),
  KEY `fk_users_c_u` (`user_id`),
  CONSTRAINT `fk_clientes_c_u` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_users_c_u` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;


insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (2,3,9,25.000,35.980,'','100-0.jpeg','c00adaa7-56da-4d49-8beb-d64bce4dcac8');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (3,3,9,36.000,52.000,'','logo.png','bd79d239-03c1-4706-bd4b-9a881bc499a1');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (4,3,9,123.000,123.000,'','Captura1.PNG','6b0d12fb-1783-4d1d-bc19-2409ded971a7');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (5,3,9,12.000,123.000,'','Captura.PNG','05ac351a-6ea5-4ca3-a70c-7e74f948033b');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (6,4,4,0.000,0.780,'Su melanoma se ha detectado como maligno con un 78.1% de fiabilidad.','maligno.jpg','422c030d-435e-4e95-b9a5-a1e22aad8235');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (7,45,4,0.000,0.780,'Su melanoma se ha detectado como maligno con un 78.1% de fiabilidad.','maligno.jpg','344dc699-cf0b-4fd1-aa8e-20c4f73e430b');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (8,45,4,0.000,0.780,'Su melanoma se ha detectado como maligno con un 78.1% de fiabilidad.','maligno.jpg','09141621-02d4-45b4-978c-44bbaf05cea1');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (9,45,4,0.000,0.780,'Su melanoma se ha detectado como maligno con un 78.1% de fiabilidad.','maligno.jpg','289f5c1b-2548-4dfb-8d47-307de0033376');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (10,45,4,0.000,0.780,'Su melanoma se ha detectado como maligno con un 78.1% de fiabilidad.','maligno.jpg','47a834b7-61c0-42e2-b40c-e5a1bf1e7ae3');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (11,45,4,0.000,0.780,'Su melanoma se ha detectado como maligno con un 78.1% de fiabilidad.','maligno.jpg','9f9f8cbc-c67c-4dfb-83fe-9d0143002f31');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (12,45,4,0.000,0.780,'Su melanoma se ha detectado como maligno con un 78.1% de fiabilidad.','maligno.jpg','51bfa63a-55d5-4c0f-8ba2-ab24221f8ca2');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (13,45,4,0.920,0.000,'Su melanoma se ha detectado como Benigno con un 91.8% de fiabilidad.','Captura1.PNG','18f28989-2b94-4819-9615-3b527ba3ad95');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (14,45,4,0.920,0.000,'Su melanoma se ha detectado como Benigno con un 91.8% de fiabilidad.','Captura1.PNG','ae1d3a61-0db8-4ce0-b237-c2638c00db36');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (16,46,4,0.000,0.780,'Su melanoma se ha detectado como maligno con un 78.1% de fiabilidad.','maligno.jpg','8a5e7eba-488e-4bd2-a69f-53e7ac2c7e1d');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (17,46,4,0.000,0.920,'Su melanoma se ha detectado como maligno con un 92% de fiabilidad.','logo.png','bd6b536b-e32e-4982-bae8-11cfb59b2a2b');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (18,46,4,0.000,0.920,'Su melanoma se ha detectado como maligno con un 91.9% de fiabilidad.','100-0.jpeg','7e059de6-0197-4970-80e3-2ec62a3e638f');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (19,46,21,0.000,0.780,'Su melanoma se ha detectado como maligno con un 77.7% de fiabilidad.','Captura.PNG','7ec74fa6-dc8d-4c4f-8622-5a780e19bdaa');
insert into `clientes_users`(`id`,`user_id`,`cliente_id`,`probbenigno`,`probmaligno`,`descripcion`,`photo`,`photodir`) values (20,46,27,0.000,0.780,'Su melanoma se ha detectado como maligno con un 78.1% de fiabilidad.','maligno.jpg','dcfa9557-e8e7-4f73-b04d-a9918b386ad0');
