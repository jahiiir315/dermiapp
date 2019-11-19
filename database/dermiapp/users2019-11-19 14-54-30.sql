USE dermiapp;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `dni` char(8) DEFAULT NULL,
  `ruc` char(10) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `celular` varchar(9) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;


insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (3,'Admin','','','','','','admin@gmail.com','$2y$10$mJgCSB.Cx6EEk1D7PBo3ReNkYdxik0.SjUW0jZ7wFNjIYBh4qJFDi','admin');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (4,'User','','','','','','user@gmail.com','$2y$10$FILljiFmnZovhkqaWleuzObsyLbxXZ7qpYTbCHoekI0pgcZ9JgpOe','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (5,'Moncada','','','','','','jahir@gmail.com','$2y$10$BYwXIuAn//qe4PTdIsqAUOcE6MbPnjQzaJ2FONUAEvn/hZkK1X4f6','');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (6,'Jahir','','','','','','user1@gmail.com','$2y$10$QDeiSLhUTINbDfJUhJ5CNec9KQiSkZvkaXT.vcMR5S7udmqKSouCu','');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (7,'Jahir','','','','','','user2@gmail.com','$2y$10$EGmyJ/R48Ax.sUSKPJodreNdCZNuifAy7d01GJIvSHHGUMiWmOd7.','');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (8,'perfume','','','','','','admasin@gmail.com','$2y$10$/2JadU4o4gYBzhxi8wPd7Ou5Byr.MtU7fdoVQYyBcKpMrGY/WPnIa','admin');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (9,'Jahir','','','','','','jahir1@gmail.com','$2y$10$QKrNg0qAxAYju7imCmt3neoYlgYU5YQBa40CnjWjU4bWqcO6qIHhW','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (10,'perfume','','','','','','asdasd@gmail.com','$2y$10$UQ3UgLQmGFknrrwVhcVINOWtSjyzvSn0jVEPltVy3/uLa2Vrh3vb6','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (11,'asdasd','','','','','','premium@agmail.com','$2y$10$dDtj90lsq9RvyHdRfkk96e7dTx81Mg6knxj3pWmy.grVDjAfAjXb.','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (12,'member','','','','','','member@gmail.com','$2y$10$Hr/wafcd4xL3dlH.cF0k..WMwy.nUcH9oBQaGWB2EPVGCnZKhPEHC','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (13,'Member2','','','','','','member2@gmail.com','$2y$10$/KtRKJanXeQvQ7GM1XjIR.SCzZ6G3/o06N0/WLdAsZ41PduVEDuOu','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (14,'Member3','','','','','','member3@gmail.com','$2y$10$x7Opmv5bH.DZCznqsqMYJeHnVjG0OUdaIMICYlY18zxVuOtaM.Xb2','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (15,'asdasdasd','','','','','','asdasdasd@gmail.com','$2y$10$UVZkSSy7rxUcVCY6HmGxTe25lK6tnX1N//9bhs.9rp3QApu2y8WiO','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (16,'memmmr','','','','','','admin12@gmail.com','$2y$10$a2bqnXDnZle8/C6/8GuiKOQTcbwmUemJFgO.YFVJgHltjgSDauv8W','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (17,'asdasdasdasd','','','','','','admisdasan@gmail.com','$2y$10$CJZ8GMTs6h2RLlx8mHuMt.Nn6xT5iTF1MZ1WXXwwmcDYIsqBWYi1q','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (18,'asdasdasdasda','','','','','','asdasdasda@gmail.com','$2y$10$S/7De9q8MQJRnH2HJVJWguOmDXRjwZb5h1ms1Sdnr8BPECHsYNPi2','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (19,'asdasdasdasdasd','','','','','','plfksdlf@gmail.com','$2y$10$dh7d76N7ZB/r7pShU39xsu7FjZLo7DFMVnh3OOp/sDlIZLksJDYMK','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (20,'aaaaaaaaaaa','','','','','','aaaaa@gmail.com','$2y$10$ld4w4x6tpopocmQZ7aMN5elOnMT0MdVFUu6q2OPLRwYQH4mf476GS','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (21,'bbbbbb','','','','','','bbbbb@gmail.com','$2y$10$nZRQ2xILX7HXF9kwr9ZhV.KgiaLeZPF.v9xrF38MyCF2hfnr1Ww46','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (22,'ccccc','','','','','','ccccc@gmail.com','$2y$10$RnKmjp46e.Z96roRTJkNmurUxq9psB/pFLraOiePCKxVMLtc5gd6S','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (23,'ddddd','','','','','','ddddd@gmail.com','$2y$10$YoUDe3o51W4z2A1MT0s0Y.XkTsp7s0MR2QH.hKCi5c8d8y1JleGVO','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (24,'eeeee','','','','','','eeeee@gmail.com','$2y$10$enw06RixWkEkannF/KU/veUYZqE2zHjBOFzXJ0CjxBWYYXWe7tY0i','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (25,'ffffff','','','','','','fffff@gmail.com','$2y$10$uTrnmq4lJ9m8B110vMMnuuNn3ZNusmUuW04V/lmNA/mQkHP0ntc3e','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (26,'ggggg','','','','','','ggggg@gmail.com','$2y$10$/WJnOs9jWMDhX5B9WybkYulvV57woAxoLL5XT5Cf4S7TGSR5CSqBi','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (27,'hhhhh','','','','','','hhhhh@gmail.com','$2y$10$JG/mF3JLbR6RKwKhXZSfpuU/ZYKe3y1rT5W3q.SwGz3q6tTl/BgB2','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (28,'iiiii','','','','','','iiiii@gmail.com','$2y$10$PcdnUjfoisVwWMq86Olhgeo3Gw.cLyuEF5CUrDikvucfon8nbGmHu','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (29,'jjjjj','','','','','','jjjjj@gmail.com','$2y$10$lrp4GxZOnsmp8KIPXfb99eVQDtvgysbt6JtoFTymvjuz6NrYC5Krm','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (30,'kkkkk','','','','','','kkkkk@gmail.com','$2y$10$MVDqau4xL1ucSMqs76l2K.kIPJfqA1YZLPHge69ToirdiVGpga6qy','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (31,'lllll','','','','','','lllll@gmail.com','$2y$10$W4PzFHeBD4Ro2hac8WNi5e0LLxmJ7jHYBdYIWGCMstztw2sUGpq/u','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (32,'mmmmm','','','','','','mmmmm@gmail.com','$2y$10$JGKhZAOuoYJmUJ4DUF0IuuyacZHW5a2AKu5LGcS6v8RE7bAQ8S.2G','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (33,'nnnnn','','','','','','nnnnn@gmail.com','$2y$10$kw73CaQh5l/tH3hA.cpyAuKYkxgQrxvvJNJd8vbbLf4tShvHjvl9O','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (34,'ooooo','','','','','','ooooo@gmail.com','$2y$10$mkxlUQL3lLCww15g3vAUxuqsgHD.QOomTeFh95WvngfI5u.djx0IS','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (35,'ppppp','','','','','','ppppp@gmail.com','$2y$10$CKZY2/I8vAgk1CgVz/PSquzfKV5qGk5Ok3lnYRIfi1W99sMfA.MC2','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (36,'qqqqq','','','','','','qqqqq@gmail.com','$2y$10$1P5oyXaL8HG686z9FeNO2elDba4XI6JfsId6oMXlzdLmlyEKrqNzq','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (37,'rrrrr','','','','','','rrrrr@gmail.com','$2y$10$.HlS6OmtadH6ZHXBpK5grOyRe/Ht0MjynfJP8MWfMiXxVvNqSfYey','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (38,'sssss','','','','','','sssss@gmail.com','$2y$10$6pBjk6msaseYSX8iBwN7puNAyGgxgzYBC19xiEYg0muE3isLihMPK','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (39,'ttttt','','','','','','ttttt@gmail.com','$2y$10$P1.4StKEqaBgtG8ApdcyK.3YcxGw3C5x8WU5dHVyHK38ERIDSS3.O','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (40,'uuuuu','t','','','','','uuuuu@gmail.com','$2y$10$aQrUoyJoQT797ZRZhyZMrObtdKG.nxNcR6fPp.AyB5xdTJ1md8vQW','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (41,'vvvvv','','','','','','vvvvv@gmail.com','$2y$10$pOvtp2hsOKAT5RHWXeuTDuluLP.BzDQGOiAZIT5iqPiVAnZ/blhvS','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (42,'wwwww','','','','','','wwwww@gmail.com','$2y$10$te/E8T3vjnmByEAbcVIroeamPFaH/Iq/gi8sNRyniBnl6bTevc5XG','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (43,'xxxxx','','','','','','xxxxx@gmail.com','$2y$10$lPaqhhJwk1mTRWvEeA/yKOM7hXSAXHFGTVyclWD2H1Gf1vlDdXpC.','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (44,'yyyyy','','','','','','yyyyy@gmail.com','$2y$10$Gbpe/IlNh1NPrPi2X8RsuOhv2xBW5ibYOxhpM1pOirV03tFABOJgS','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (45,'zzzzz','','','','','','zzzzz@gmail.com','$2y$10$JN/Pqy02abQzIdd7hqOJGuH48EMkkswO72cqeetu5.GqweK2MJKzO','user');
insert into `users`(`id`,`nombre`,`dni`,`ruc`,`direccion`,`celular`,`telefono`,`email`,`password`,`role`) values (46,'Dermi','','','','','','dermi@gmail.com','$2y$10$qhCR0Q4NikcGtW2H0cCgie30kuw6Ql07YnibZxLL4hYYBEaPQduSK','user');
