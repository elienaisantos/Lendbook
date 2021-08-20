create database lendbook
default character set utf8
default collate utf8_general_ci;

use lendbook;

create table cadastro(
nome varchar(30),
login varchar(30),
senha int
)default charset=utf8;

create table fl(
nome varchar(30),
email varchar(40),
texto text(120)
)default charset=utf8;

