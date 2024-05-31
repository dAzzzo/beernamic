-- Tablas
CREATE TABLE IF NOT EXISTS Usuarios (
    UserID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Email VARCHAR(100),
    Contraseña VARCHAR(50),
    Dirección VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS Productos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    marca VARCHAR(50),
    variedad VARCHAR(50),
    Img TEXT,
    precio DECIMAL(10, 2),
    stock INT
    Descripcion TEXT
);


CREATE TABLE IF NOT EXISTS Categorías (
    CategoriaID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Descripción TEXT,
    Icono VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS ProductosCategorias (
    ProductoID INT,
    CategoriaID INT,
    FOREIGN KEY (ProductoID) REFERENCES Productos(ProductoID),
    FOREIGN KEY (CategoriaID) REFERENCES Categorías(CategoriaID)
);

CREATE TABLE IF NOT EXISTS Pedidos (
    PedidoID INT PRIMARY KEY,
    UserID INT,
    Fecha DATETIME,
    Estado VARCHAR(50),
    FOREIGN KEY (UserID) REFERENCES Usuarios(UserID)
);

CREATE TABLE IF NOT EXISTS DetallePedido (
    PedidoID INT,
    ProductoID INT,
    Cantidad INT,
    PrecioUnitario DECIMAL(10, 2),
    FOREIGN KEY (PedidoID) REFERENCES Pedidos(PedidoID),
    FOREIGN KEY (ProductoID) REFERENCES Productos(ProductoID)
);

CREATE TABLE IF NOT EXISTS MétodosPago (
    MetodoID INT PRIMARY KEY,
    Nombre VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS PedidoMetodoPago (
    PedidoID INT,
    MetodoID INT,
    FOREIGN KEY (PedidoID) REFERENCES Pedidos(PedidoID),
    FOREIGN KEY (MetodoID) REFERENCES MétodosPago(MetodoID)
);

-- Crear la tabla Carrito
CREATE TABLE IF NOT EXISTS Carrito (
    CarritoID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    ProductoID INT,
    Cantidad INT,
    FOREIGN KEY (UserID) REFERENCES Usuarios(UserID),
    FOREIGN KEY (ProductoID) REFERENCES Productos(ProductoID)
);

-- Crear la tabla HistorialPedido
CREATE TABLE IF NOT EXISTS HistorialPedido (
    HistorialID INT PRIMARY KEY AUTO_INCREMENT,
    PedidoID INT,
    UserID INT,
    Fecha DATETIME,
    Estado VARCHAR(50),
    FOREIGN KEY (PedidoID) REFERENCES Pedidos(PedidoID),
    FOREIGN KEY (UserID) REFERENCES Usuarios(UserID)
);


-- Disparador para verificar el stock de productos
DELIMITER $$
CREATE TRIGGER VerificarStock BEFORE INSERT ON DetallePedido
FOR EACH ROW
BEGIN
    DECLARE available_stock INT;
    SELECT Stock INTO available_stock FROM Productos WHERE ProductoID = NEW.ProductoID;
    IF NEW.Cantidad > available_stock THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'No hay suficiente stock disponible para este producto.';
    END IF;
END$$
DELIMITER ;

-- Procedimiento almacenado para obtener todos los pedidos de un usuario
DELIMITER $$
CREATE PROCEDURE sp_GetPedidosUsuario(IN usuario_id INT)
BEGIN
    SELECT * FROM Pedidos WHERE UserID = usuario_id;
END$$
DELIMITER ;

-- Procedimiento almacenado para calcular el total de un pedido
DELIMITER $$
CREATE PROCEDURE sp_CalcularTotalPedido(IN pedido_id INT, OUT total DECIMAL(10, 2))
BEGIN
    SELECT SUM(Cantidad * PrecioUnitario) INTO total FROM DetallePedido WHERE PedidoID = pedido_id;
END$$
DELIMITER ;
