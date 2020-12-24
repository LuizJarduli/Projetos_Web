CREATE DATABASE Bdagenda;
use Bdagenda;

CREATE TABLE agenda(
idagenda int primary key auto_increment,
nome varchar(100) not null,
email varchar(60) not null unique,
telefone char(11) not null
)ENGINE=InnoDB;