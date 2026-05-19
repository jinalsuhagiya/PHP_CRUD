CREATE DATABASE crud_project;

USE crud_project;

CREATE TABLE users(

    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100),

    gender VARCHAR(20),

    email VARCHAR(100),

    password VARCHAR(255),

    image VARCHAR(255),

    message TEXT
);