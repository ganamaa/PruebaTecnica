-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2022 a las 20:14:53
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gemasas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Email` varchar(50) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido` varchar(15) NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Email`, `Nombre`, `Apellido`, `Codigo`) VALUES
('juan234@loquesea.com', 'Juan', '', 1),
('juan234@loquesea.com', 'Juan', 'Perez', 1),
('juan234@loquesea.com', 'Rodrigo', 'Perez', 1),
('juan324@loquesea.com', 'Juan', 'Perz', 1),
('juan15@loquesea.com', 'Juan', 'Perez', 2),
('juan11@loquesea.com', 'Juan', 'Perez', 2),
('juan12@loquesea.com', 'Juan', '', 2),
('juan0@loquesea.com', 'Juan', 'Perez', 3),
('juan9@loquesea.com', 'Julián', 'Perez', 3),
('juan9@loquesea.com', 'Roberto', 'Perez', 3),
('juan8@loquesea.com', 'Juan', 'Perez', 3),
('juan7@loquesea.com', 'Juan', '', 1),
('juan6@loquesea.com', 'Juan', 'Perez', 3),
('juan5@loquesea.com', 'Pedro', 'Perez', 1),
('juan4@loquesea.com', 'Andrés', 'Perez', 3),
('juan3@loquesea.com', 'Juan', '', 1),
('juan2@loquesea.com', 'Juan', 'Perez', 3),
('juan234@loquesea.com', 'Juan', '', 1),
('juan234@loquesea.com', 'Juan', 'Perez', 1),
('juan234@loquesea.com', 'Rodrigo', 'Perez', 1),
('juan324@loquesea.com', 'Juan', 'Perz', 1),
('juan15@loquesea.com', 'Juan', 'Perez', 2),
('juan11@loquesea.com', 'Juan', 'Perez', 2),
('juan12@loquesea.com', 'Juan', '', 2),
('juan0@loquesea.com', 'Juan', 'Perez', 3),
('juan9@loquesea.com', 'Julián', 'Perez', 3),
('juan9@loquesea.com', 'Roberto', 'Perez', 3),
('juan8@loquesea.com', 'Juan', 'Perez', 3),
('juan7@loquesea.com', 'Juan', '', 1),
('juan6@loquesea.com', 'Juan', 'Perez', 3),
('juan5@loquesea.com', 'Pedro', 'Perez', 1),
('juan4@loquesea.com', 'Andrés', 'Perez', 3),
('juan3@loquesea.com', 'Juan', '', 1),
('juan2@loquesea.com', 'Juan', 'Perez', 3),
('juan234@loquesea.com', 'Juan', '', 1),
('juan234@loquesea.com', 'Juan', 'Perez', 1),
('juan234@loquesea.com', 'Rodrigo', 'Perez', 1),
('juan324@loquesea.com', 'Juan', 'Perz', 1),
('juan15@loquesea.com', 'Juan', 'Perez', 2),
('juan11@loquesea.com', 'Juan', 'Perez', 2),
('juan12@loquesea.com', 'Juan', '', 2),
('juan0@loquesea.com', 'Juan', 'Perez', 3),
('juan9@loquesea.com', 'Julián', 'Perez', 3),
('juan9@loquesea.com', 'Roberto', 'Perez', 3),
('juan8@loquesea.com', 'Juan', 'Perez', 3),
('juan7@loquesea.com', 'Juan', '', 1),
('juan6@loquesea.com', 'Juan', 'Perez', 3),
('juan5@loquesea.com', 'Pedro', 'Perez', 1),
('juan4@loquesea.com', 'Andrés', 'Perez', 3),
('juan3@loquesea.com', 'Juan', '', 1),
('juan2@loquesea.com', 'Juan', 'Perez', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
