#Use this on localhost only to setup your database for testing purposes

CREATE DATABASE IF NOT EXISTS `test1DB`;

CREATE TABLE IF NOT EXISTS `test1DB`.`users` (
   `id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
   `username` VARCHAR( 255 ) NOT NULL ,
   `user_email` VARCHAR( 60 ) NOT NULL ,
   `user_pass` VARCHAR( 255 ) NOT NULL ,
    UNIQUE (`username`),
    UNIQUE (`user_email`)
) ENGINE = MYISAM ;

CREATE TABLE IF NOT EXISTS `test1DB`.`table_response` (
   `topic_id` VARCHAR( 255 ) NOT NULL ,
   `post_id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `post_username` VARCHAR (255) NOT NULL ,
   FOREIGN KEY (post_username) REFERENCES users(username) ,
   `post_text` TEXT NOT NULL ,
   `post_date` DATETIME NOT NULL DEFAULT NOW()
) ENGINE = MYISAM ;
