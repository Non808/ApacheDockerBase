CREATE USER 'developer'@'%' IDENTIFIED BY "example";
CREATE DATABASE IF NOT EXISTS Test;
USE Test;
CREATE TABLE Users(
 id int NOT NULL AUTO_INCREMENT,
 name varchar(255) NOT NULL,
 cringeFactor int NOT NULL,
 PRIMARY KEY (id)
);
GRANT ALL ON Test.* TO 'developer'@'%';

INSERT INTO Users (name, cringeFactor) VALUES ("Noah", 9001);
INSERT INTO Users (name, cringeFactor) VALUES ("Not Noah", 0);
