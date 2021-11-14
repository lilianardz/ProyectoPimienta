CREATE DATABASE ProyectoPimienta;
USE ProyectoPimienta;

Create table Rol
(
	Id int primary key auto_increment,
    Rol varchar(50)
);

Create table Usuario
(
	Id_Usuario int primary key auto_increment,
    Nombre varchar(100),
    Pwd varchar(50),
    Id_Rol int,
    constraint fk_rol_usuario foreign key (Id_Rol) references Rol(Id)
);

create table Productor
(
	Id_Productor int primary key auto_increment,
    Nombre varchar(30),
    Ape_pat varchar(30),
    Ape_mat varchar(30),
    Direccion varchar(100),
    Telefono varchar(20),
    Fecha_registro date
);

Create table Pimienta
(
	Id_Pimienta int primary key auto_increment,
    Nombre varchar(50),
    Calidad varchar(20),
    Precio float    
);

create table Secado
(
	Id_Secado int primary key auto_increment,
    Costo_Secado float,
    Cantidad_Secar int,
    Total_Secado int,
    Fecha_Secado date
);

Create table Venta
(
    Id_Venta int primary key auto_increment,
    Fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    Cantidad int,
    Total float,
    Tipo_Pago varchar(20) check (Tipo_Pago IN ('Efectivo','Tarjeta'))
);
