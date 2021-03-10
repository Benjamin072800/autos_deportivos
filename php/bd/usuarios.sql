create database pagina;

use pagina;

create table usuarios(
	id int auto_increment,
	nombre varchar(50),
	ap varchar(50),
	am varchar(50),
	usuario varchar(50),
	password text(50),
	primary key(id)
);