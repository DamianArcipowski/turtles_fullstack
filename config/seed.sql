CREATE DATABASE turtles_prod IF NOT EXISTS;

USE turtles_prod;

CREATE TABLE IF NOT EXISTS users (
    id int AUTO_INCREMENT PRIMARY KEY,
    email varchar(255) NOT NULL UNIQUE,
    password varchar(255) NOT NULL,
    role varchar(10) NOT NULL DEFAULT 'user',
    is_active boolean NOT NULL DEFAULT 1;
);

CREATE TABLE IF NOT EXISTS traits (
	id int AUTO_INCREMENT PRIMARY KEY,
    trait varchar(255) NOT NULL,
    description varchar(255) NOT NULL
);

INSERT INTO traits (trait, description) VALUES ('Nazwa łacińska', 'Emys orbicularis');
INSERT INTO traits (trait, description) VALUES ('Rozmiar', '12-20 cm');
INSERT INTO traits (trait, description) VALUES ('Waga', '0,5-1 kg');
INSERT INTO traits (trait, description) VALUES ('Dieta', 'owady, małe ryby, rośliny wodne');
INSERT INTO traits (trait, description) VALUES ('Siedlisko', 'stawy, jeziora, rzeki z roślinnością');

INSERT INTO users (email, password, role) VALUES ('admin@mail.pl', '$2y$10$TKJkc9mxkX/CB4Zkk.jzBeDVfnVOKFFmqvQLB3MY9K.SqYCpBaOFG', 'admin');

CREATE USER turtle IDENTIFIED BY 'zaq1@WSX';
GRANT ALL PRIVILEGES ON turtles_prod.* TO 'turtle'@'%';