DROP DATABASE IF EXISTS tiendita;
CREATE DATABASE tiendita;
USE tiendita;


CREATE TABLE IF NOT EXISTS usuarios (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(30) NOT NULL,
  apellidos varchar(50) NOT NULL,
  username varchar(20) NOT NULL,
  contraseña varchar(15) NOT NULL,
  rol varchar(15) NOT NULL,
  creado timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  modificado timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS pedidos (
  id int(11) NOT NULL AUTO_INCREMENT,
  cliente int(11) NOT NULL,
  fecha_envio timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  fecha_entrega timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  destino varchar(25) NOT NULL,
  estado tinyint(1) NOT NULL,
  total decimal(10,2) NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_usuario FOREIGN KEY (cliente)
  REFERENCES usuarios(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS artesanias (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(25) NOT NULL,
  descripcion varchar(200) NOT NULL,
  estado varchar(20) NOT NULL,
  artista varchar(40) NOT NULL,
  precio decimal(10,2) NOT NULL,
  imagen blob,
  stock int(11) NOT NULL,
  creado timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  modificado timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS carrito (
  id int(11) NOT NULL AUTO_INCREMENT,
  cliente int(11) NOT NULL,
  total decimal(10,2) NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_carrito_cliente FOREIGN KEY (cliente)
  REFERENCES usuarios(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS detalles_Carrito (
  id_Carrito int(11) NOT NULL AUTO_INCREMENT,
  id_Producto int(11) NOT NULL,
  cantidad decimal(10,2) NOT NULL,
  CONSTRAINT fk_id_Carrito FOREIGN KEY (id_Carrito)
  REFERENCES carrito(id),
  CONSTRAINT fk_detalle_producto FOREIGN KEY (id_Producto)
  REFERENCES artesanias(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS cuentas_Bancarias (
  numero varchar(20) NOT NULL,
  id_Usuario int(11) NOT NULL,
  saldo decimal(10,2) NOT NULL,
  creado timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (numero),
  CONSTRAINT cuenta_usuario FOREIGN KEY (id_Usuario)
  REFERENCES usuarios(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS detalle_Pedidos (
  id_Pedido int(11) NOT NULL AUTO_INCREMENT,
  id_Producto int(11) NOT NULL,
  cantidad decimal(10,2) NOT NULL,
  CONSTRAINT fk_detalle_pedido FOREIGN KEY (id_Pedido)
  REFERENCES pedidos(id),
  CONSTRAINT fk_detalle_product FOREIGN KEY (id_Producto)
  REFERENCES artesanias(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*Trigger que creará el carrito de compras para el cliente,
después de crear un nuevo usuario*/
DELIMITER $$
CREATE TRIGGER crear_Carrito BEFORE INSERT ON usuarios
  FOR EACH ROW 
  BEGIN
      INSERT INTO carrito (cliente,total) VALUES (NEW.id, 0.00);
  END $$
DELIMITER ;

/*Trigger que establecerá los detalles de compras del carrito para el cliente,
después de crear dicho carrito*/
DELIMITER $$
CREATE TRIGGER crear_detallesCarrito BEFORE INSERT ON carrito
  FOR EACH ROW 
  BEGIN
      INSERT INTO detalles_Carrito (id_Carrito) VALUES (NEW.id);
  END $$
DELIMITER ;

/*Trigger que creará el detalle del pedido del cliente,
después de confirmar un pedido*/
DELIMITER $$
CREATE TRIGGER crear_detallesPedido BEFORE INSERT ON pedidos
  FOR EACH ROW 
  BEGIN
      INSERT INTO detalle_Pedidos (id_Pedido) VALUES (NEW.id);
  END $$
DELIMITER ;

/*Trigger que eliminará el detalle del pedido del cliente,
después de confirmar un pedido*/
DELIMITER $$
CREATE TRIGGER eliminar_detallesPedido BEFORE INSERT ON pedidos
  FOR EACH ROW 
  BEGIN
      INSERT INTO detalle_Pedidos (id_Pedido) VALUES (NEW.id);
  END $$
DELIMITER ;