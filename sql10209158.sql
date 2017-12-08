-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql10.freemysqlhosting.net
-- Tiempo de generación: 08-12-2017 a las 16:49:50
-- Versión del servidor: 5.5.53-0ubuntu0.14.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sql10209158`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`usuario`, `contrasena`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(20) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `oficio` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estatura` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechadenacimiento` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `objetivos` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `habito_alimenticio` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `enfermedades_lesiones` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fuma` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `toma` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `hipertenso` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cirugias_ultimo_ano` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `peso` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `porcentaje_grasa` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `porcentaje_agua` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `imc` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pecho` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `espalda` varchar(20) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `brazo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cintura` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `abdomen` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cadera` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `muslo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pantorrilla` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `cedula`, `direccion`, `telefono`, `usuario`, `contrasena`, `oficio`, `estatura`, `edad`, `fechadenacimiento`, `objetivos`, `habito_alimenticio`, `enfermedades_lesiones`, `fuma`, `toma`, `hipertenso`, `cirugias_ultimo_ano`, `peso`, `porcentaje_grasa`, `porcentaje_agua`, `imc`, `pecho`, `espalda`, `brazo`, `cintura`, `abdomen`, `cadera`, `muslo`, `pantorrilla`) VALUES
(1, 'Ricardo  Pérez', '186200584003', 'Lagunilla', '61843689', 'ricardo', 'ricardo', 'Estudiante', '1,80', '19', '25/02/1998', 'Masa', 'Comer', 'Ninguna', 'Ninguna', 'No', 'No', 'No', '69', '12', '12', '12', '80', '㠰', '80', '80', '80', '80', '80', '80'),
(3, 'Hanzel Anchia', '1111', 'Santa Ana', '18181881', 'Hanzel', 'Hanzel', 'Student', '1,8', '19', '1998-11-11', 'Masa', 'Comer', 'No', 'No', 'No', 'No', 'Nooooooo', '80', '99', '9', '9', '80', '80', '80', '79', '99', '99', '88', '60'),
(4, 'Joselui Meneses ', 'Comer', 'Pavas', '18181818', 'Joselui Meneses ', 'Joselui Meneses ', 'Student', '1,50', '22', '1111-12-12', 'Comer', 'Comer', 'No', 'No', 'No', 'No', 'No', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80'),
(10, 'nombre', 'cedula', 'direccion', '123', 'nombre', 'nombre', 'oficio', 'estatura', '19', '1998-02-25', 'objetivo', 'habito', 'enf', 'fuma', 'toma', 'hiper', 'cir', 'peso', '%grasa', '%agua', 'imc', 'pecho', 'espal', 'braz', 'cintur', 'abdom', 'cader', 'muslo', 'pantoriila');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descanso` varchar(20) NOT NULL,
  `numero_series` varchar(20) NOT NULL,
  `numero_repeticiones` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`id`, `nombre`, `descanso`, `numero_series`, `numero_repeticiones`) VALUES
(1, 'Push Up', '1', '3', '12'),
(2, 'Barbell Curl', '1', '4', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `fecha`, `fecha_vencimiento`, `cliente`) VALUES
(1, '2017-12-07', '2018-01-07', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clienteid_pago_cliente` (`cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `clienteid_pago_cliente` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
