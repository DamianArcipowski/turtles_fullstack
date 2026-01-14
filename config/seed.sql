CREATE DATABASE turtles_prod IF NOT EXISTS;

USE turtles_prod;

CREATE TABLE users (
    id int AUTO_INCREMENT PRIMARY KEY,
    email varchar(255) NOT NULL UNIQUE,
    password varchar(255) NOT NULL,
    role varchar(10) NOT NULL DEFAULT 'user',
    is_active boolean NOT NULL DEFAULT 1;
);

CREATE USER turtle IDENTIFIED BY 'zaq1@WSX';
GRANT ALL PRIVILEGES ON turtles_prod.* TO 'turtle'@'%';
