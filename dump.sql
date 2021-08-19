create database lendbook
default character set utf8
default collate utf8_general_ci;

use lendbook;

create table cadastro(
id int auto_increment,
nome varchar(30),
login varchar(30),
senha int,
primary key(id)
)default char set utf8;

create table fl(
id int auto_increment,
nome varchar(30),
email varchar(40),
texto text(120),
primary key(id)
)default char set utf8;