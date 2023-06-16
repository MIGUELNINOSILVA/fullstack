-- Active: 1686332692756@@127.0.0.1@3306@alquilartemis
CREATE DATABASE alquilartemis;

USE alquilartemis;

CREATE TABLE empleados(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombres VARCHAR(60) NOT NULL,
    apellidos VARCHAR(70) NOT NULL,
    correo VARCHAR(200) NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(110) NOT NULL
);

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idEmpleado INT NOT NULL,
    nombres VARCHAR(60) NOT NULL,
    email VARCHAR(200) NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(110) NOT NULL,
    FOREIGN KEY (idEmpleado) REFERENCES empleados(id)
);

CREATE TABLE constructoras(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(120) NOT NULL,
    descripcion VARCHAR(400) NOT NULL,
    ubicacion VARCHAR(100) NOT NULL
);

CREATE TABLE productos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idConstructora INT,
    nombre VARCHAR(120) NOT NULL,
    descripcion VARCHAR(400) NOT NULL,
    stock BIGINT NOT NULL,
    precio BIGINT NOT NULL,
    Foreign Key (idConstructora) REFERENCES constructoras(id)
);

CREATE TABLE cotizacion(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idConstructora INT,
    idUsuario INT,
    idEmpleado INT,
    fecha DATE,
    Foreign Key (idConstructora) REFERENCES constructoras(id),
    Foreign Key (idUsuario) REFERENCES users(id),
    Foreign Key (idEmpleado) REFERENCES empleados(id)
);

CREATE TABLE detalleCotizacion(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idProductos INT,
    fecha DATE,
    hora TIME,
    duracionAlquiler MEDIUMINT,
    precioDiaAlquiler BIGINT,
    precioTotal BIGINT,
    Foreign Key (idProductos) REFERENCES productos(id)
);
