CREATE DATABASE usuario;
USE usuario;
CREATE TABLE usuarios(id int primary key auto_increment,
mome varchar(100) not null,
email varchar(100) not null,
senha varchar(32)not null
);