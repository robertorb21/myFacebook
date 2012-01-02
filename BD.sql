create database facebook;
grant all privileges on facebook.* to "FBadm1n"@"localhost" identified by "123qwe";
use facebook;

CREATE TABLE `facebook`.`users` (
`UID` INT( 9 ) NOT NULL AUTO_INCREMENT ,
`Email` VARCHAR( 50 ) NOT NULL ,
`Pass` VARCHAR( 40 ) NOT NULL ,
PRIMARY KEY ( `UID` ) ,
INDEX ( `UID` , `Pass` ) ,
UNIQUE (
`Email`
)
) ENGINE = MYISAM ;

CREATE TABLE `facebook`.`profiles` (
`UID` INT( 9 ) NOT NULL ,
`Firstname` VARCHAR( 40 ) NOT NULL ,
`Lastname` VARCHAR( 50 ) NOT NULL ,
`Sex` TINYTEXT NOT NULL ,
`Birthday` VARCHAR( 11 ) NOT NULL ,
INDEX ( `Firstname` , `Lastname` , `Birthday` ) ,
UNIQUE (
`UID`
)
) ENGINE = MYISAM ;
