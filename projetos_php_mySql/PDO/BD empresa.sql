CREATE DATABASE empresa;
USE empresa;
CREATE TABLE contato(
idcontato int primary key auto_increment,
nome varchar(30),
email varchar(100),
telefone varchar(20),
cidade varchar(20)
);