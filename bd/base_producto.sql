CREATE DATABASE  IF NOT EXISTS base;
USE base;

DROP TABLE IF EXISTS producto;

CREATE TABLE producto (
  "Producto_id" varchar(10) DEFAULT NULL,
  "Clave_pro" varchar(10) DEFAULT NULL,
  "Producto" varchar(50) DEFAULT NULL,
  "Precio" varchar(10) DEFAULT NULL,
  "Descripcion" varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS proveedor;

CREATE TABLE proveedor (
  "Clave_pro" varchar(10) DEFAULT NULL,
  "Nombre" varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;