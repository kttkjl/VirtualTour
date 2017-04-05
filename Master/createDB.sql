#optional if DB exists
CREATE DATABASE `comp1536project` ;
CREATE TABLE `comp1536project`.`users` (
   `id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
   `username` VARCHAR( 255 ) NOT NULL ,
   `user_email` VARCHAR( 60 ) NOT NULL ,
   `user_pass` VARCHAR( 255 ) NOT NULL ,
    UNIQUE (`username`),
    UNIQUE (`user_email`)
) ENGINE = MYISAM ;

#dunno what ENGINE = MYISAM does