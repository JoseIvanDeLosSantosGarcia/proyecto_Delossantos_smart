-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 06:28:07
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idarticulo` int(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Cantidad` varchar(20) NOT NULL,
  `Precio` varchar(20) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Empresa` varchar(20) NOT NULL,
  `TipoProducto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idarticulo`, `Nombre`, `Cantidad`, `Precio`, `Marca`, `Empresa`, `TipoProducto`) VALUES
(1, 'cuaderno', '2', '60', 'Scribe', 'ASTAIZA', 'chico'),
(2, 'Jabon', '5', '50', 'Dove', 'DELICATE', 'chico'),
(3, 'Galletas', '4', '70', 'Oreo', 'DANNES', 'Mediano'),
(4, 'Aceite', '2', '45', 'Nutrioli', 'SPENA', 'Mediano'),
(5, 'Atun', '6', '64', 'Tuny', 'A1', 'Chico'),
(6, 'Papel', '3', '88', 'Petalo', 'ELITE', 'Mediano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `CodigoPostal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `Nombre`, `Apellido`, `Telefono`, `Direccion`, `Correo`, `CodigoPostal`) VALUES
(1, 'Jose', 'De Los Santos', '6569873098', 'torresll', 'jose01@gmail.com', '1234'),
(2, 'Diego', 'Aquino', '656300286', 'palmeras45', 'diego21@gmail.com', '34561'),
(3, 'Diana', 'Costa', '6563098278', 'saldivar093', 'diana3@gmail.com', '76830'),
(4, 'Alex', 'Lorenzo', '6569821098', 'puentes309', 'alex4@gmail.com', '60923'),
(5, 'Martin', 'Caceres', '6562991208', 'av.castillo120', 'martin5@gmail.com', '62457'),
(6, 'Jafet', 'Cabral', '6563899021', 'flores120', 'jafet6@gmail.com', '42091');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idempleado` int(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Edad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idempleado`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `Direccion`, `Edad`) VALUES
(1, 'Jose', 'De Los Santos', '6568515974', 'jose30@gmail.com', 'palacio', '20'),
(2, 'Daniela', 'Medina', '6567091493', 'Daniela70@gmail.com', 'durango 12', '17'),
(3, 'Miguel', 'Soto', '6561234569', 'miguel1@gmail.com', 'paquime12', '18'),
(4, 'Edwin', 'Perez', '6561039823', 'Edwin4@gmail.com', 'torres10', '19'),
(5, 'Raul', 'Castillo', '6569720871', 'Raul5@gmail.com', 'palma02', '22'),
(6, 'Oscar', 'Casas', '6568220193', 'Oscar6@gmail.com', 'mitla11', '25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idventa` int(20) NOT NULL,
  `Vendedor` varchar(20) NOT NULL,
  `Fecha` date NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Vendido` varchar(20) NOT NULL,
  `Pago` varchar(20) NOT NULL,
  `Metodo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idventa`, `Vendedor`, `Fecha`, `Direccion`, `Vendido`, `Pago`, `Metodo`) VALUES
(1, 'aguirre', '0000-00-00', 'palacio', '2', '40', 'tarjeta'),
(2, 'Aguirre202', '2021-11-27', 'escutia12', '5', '65', 'efectivo'),
(3, 'Juan981', '2021-11-22', 'paquime123', '3', '50', 'tarjeta'),
(4, 'Carlos781', '2021-11-18', 'eje vial 02', '6', '35', 'efectivo'),
(5, 'Jose921', '2021-11-10', 'durango 001', '9', '75', 'tarjeta'),
(6, 'Raul123', '2021-11-05', 'guerrero10', '7', '48', 'efectivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idarticulo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idempleado`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idventa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idarticulo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idempleado` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idventa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
