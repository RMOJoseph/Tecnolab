create table registrados(
    id_usuario int primary key auto_increment,
    nombre varchar(30),
    apellido varchar(30),
    identificador varchar(40),
    cont varchar(40)
);
alter table registrados add fecha date, add hora time, add imagen longblob;
    
    
create table productos(
    id_producto int primary key auto_increment,
    nombre_producto varchar(40),
    precio_producto varchar(40),
    cantidad_producto int,
    Descripcion varchar(100),
    imagen longblob
);
-- Agregar esto
create table carrito(
    id_carrito int primary key auto_increment,
    nombre_producto varchar(40),
    precio_producto varchar(40),
    cantidad_producto int,
    Descripcion varchar(100),
    imagen longblob
);

-- hasta aqui version 1.3.0