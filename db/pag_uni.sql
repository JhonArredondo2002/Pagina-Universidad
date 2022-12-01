create database pag_uni;

use pag_uni;

create table admisiones
(ti varchar(30),
Nit varchar (15) not null,
Nombre varchar (20),
Apellido varchar (20),
edad int(3),
fech_nac DATE,
Tel varchar(10),
Facultad varchar(20),
Programa varchar(30),
fech_inscripcion DATE,
primary key(nit))engine=InnoDB;

create table facultades
(Facultad varchar(15) not null,
programa varchar(30) not null,
primary key(Facultad))engine=InnoDB;

select*from admisiones;