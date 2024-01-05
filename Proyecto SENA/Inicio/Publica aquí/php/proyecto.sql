-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2021 a las 23:13:36
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `UsuarioAdministrador` int(30) NOT NULL,
  `Nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` int(20) NOT NULL,
  `Celular` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`UsuarioAdministrador`, `Nombres`, `Apellidos`, `Contraseña`, `Celular`, `Direccion`) VALUES
(6789, 'Maite', 'Martinez', 6789, '32565656465', 'Manzana Mostaza 56 calle 87 Ciudad Morada'),
(12345, 'Paula', 'Marìn', 12345, '3001234872', 'Ciudad 20 Carrera 30 Calarcada'),
(101112, 'Valentina', 'Marulanda', 101112, '310478569952', 'Manzana Divina calle 20 Garbarlon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencionalcliente`
--

CREATE TABLE `atencionalcliente` (
  `Nombre_apodo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Motivo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Mensaje` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `atencionalcliente`
--

INSERT INTO `atencionalcliente` (`Nombre_apodo`, `Motivo`, `Mensaje`) VALUES
('Pato', 'Agradecimientos', 'Sinceramente es una excelente pagina, felicidades.'),
('nose', '', 'kakkakakaka'),
('nose', '', 'ksksksksksks'),
('nose', '', 'ksksksksksks'),
('nose', '', 'ksksksksksks'),
('nose', '', 'ksksksksksks'),
('nose', '', 'ksksksksksks');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciosesion`
--

CREATE TABLE `iniciosesion` (
  `UsuarioAdministrador` int(30) NOT NULL,
  `Contraseña` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `iniciosesion`
--

INSERT INTO `iniciosesion` (`UsuarioAdministrador`, `Contraseña`) VALUES
(6789, 6789),
(12345, 12345),
(101112, 101112);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id_lugar` int(100) NOT NULL,
  `departamento_lugar` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `municipio_lugar` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_lugar` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo_lugar` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_lugar` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `presupuesto_lugar` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion_lugar` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono_lugar` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id_lugar`, `departamento_lugar`, `municipio_lugar`, `nombre_lugar`, `tipo_lugar`, `descripcion_lugar`, `presupuesto_lugar`, `direccion_lugar`, `telefono_lugar`) VALUES
(1, 'Quindío', 'Armenia', 'Centenario Trampoline Park', 'Actividades de parques de atracciones y parques temáticos', 'Este parque tiene una capacidad para recibir a más de 500 personas y una oferta de más de 25 atracciones, entre las que se destacan varias camas elást', '$100.000', ' AVENIDA CENTENARIO CL 4, ARMENIA, QUINDIO', '3168337752');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrocinadores`
--

CREATE TABLE `patrocinadores` (
  `IdPatrocinadores` int(30) NOT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombreempresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipoempresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `servicio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `numerodecontacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `patrocinadores`
--

INSERT INTO `patrocinadores` (`IdPatrocinadores`, `departamento`, `municipio`, `nombreempresa`, `tipoempresa`, `servicio`, `email`, `direccion`, `numerodecontacto`) VALUES
(1, 'Quindío', 'Armenia', 'La Antorcha', 'Restaurante-café-bar', 'Comidas y bebidas', 'cafelaantorcha@gmail.com', 'Av. Centenario #44 Norte-04 ', '3218675400'),
(5, 'Quindío', 'Salento', 'La vida es bella', 'Parque', 'Pasadía', 'lavidaesbella@gmail.com', 'B/Salentico Mz 8#13', '3187563999');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

CREATE TABLE `regiones` (
  `Id_Regiones` int(50) NOT NULL,
  `País` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `regiones`
--

INSERT INTO `regiones` (`Id_Regiones`, `País`, `Departamento`, `Municipio`) VALUES
(1, 'Colombia', 'Quindío', 'Armenia'),
(2, 'Colombia', 'Quindío', 'Calarcá'),
(3, 'Colombia', 'Quindio', 'Quimbaya'),
(4, 'Colombia', 'Quindio', 'Salento'),
(5, 'Colombia', 'Quindio', 'Circasia'),
(6, 'Colombia', 'Quindio', 'Filandia'),
(7, 'Colombia', 'Quindio', 'Montenegro'),
(8, 'Colombia', 'Quindio', 'Buenavista'),
(9, 'Colombia', 'Quindio', 'La tebaida'),
(10, 'Colombia', 'Quindio', 'Génova'),
(11, 'Colombia', 'Quindio', 'Pijao');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`UsuarioAdministrador`),
  ADD KEY `Contraseña` (`Contraseña`);

--
-- Indices de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
  ADD UNIQUE KEY `UsuarioAdministrador` (`UsuarioAdministrador`),
  ADD KEY `Contraseña` (`Contraseña`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id_lugar`);

--
-- Indices de la tabla `patrocinadores`
--
ALTER TABLE `patrocinadores`
  ADD PRIMARY KEY (`IdPatrocinadores`);

--
-- Indices de la tabla `regiones`
--
ALTER TABLE `regiones`
  ADD PRIMARY KEY (`Id_Regiones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id_lugar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `patrocinadores`
--
ALTER TABLE `patrocinadores`
  MODIFY `IdPatrocinadores` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `regiones`
--
ALTER TABLE `regiones`
  MODIFY `Id_Regiones` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
  ADD CONSTRAINT `iniciosesion_ibfk_1` FOREIGN KEY (`UsuarioAdministrador`) REFERENCES `administradores` (`UsuarioAdministrador`),
  ADD CONSTRAINT `iniciosesion_ibfk_2` FOREIGN KEY (`Contraseña`) REFERENCES `administradores` (`Contraseña`);

--
-- Filtros para la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD CONSTRAINT `lugares_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `regiones` (`Id_Regiones`);

--
-- Filtros para la tabla `patrocinadores`
--
ALTER TABLE `patrocinadores`
  ADD CONSTRAINT `patrocinadores_ibfk_1` FOREIGN KEY (`IdPatrocinadores`) REFERENCES `regiones` (`Id_Regiones`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
