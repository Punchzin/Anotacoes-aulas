    CREATE DATABASE pessoas_db;
    USE pessoas_db;
    CREATE TABLE pessoas(id int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    idade int(3)not null
    );