CREATE DATABASE concessionaria;

USE concessionaria;

CREATE TABLE users (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64),
    email VARCHAR(128),
    phone VARCHAR(16),
    password VARCHAR(256)
);