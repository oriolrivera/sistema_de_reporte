-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-04-2013 a las 22:59:13
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema_data`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_data`
--

CREATE TABLE IF NOT EXISTS `login_data` (
  `id_login_data` int(11) NOT NULL AUTO_INCREMENT,
  `login_dat` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password_data` varchar(100) NOT NULL,
  `fecha_login` date NOT NULL,
  PRIMARY KEY (`id_login_data`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `login_data`
--

INSERT INTO `login_data` (`id_login_data`, `login_dat`, `password_data`, `fecha_login`) VALUES
(1, 'admin', '1234', '2013-02-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tel_contact` varchar(20) NOT NULL,
  `nacionalidad` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(100) NOT NULL,
  `cedula_pasaporte` varchar(20) NOT NULL,
  `observacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(100) NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `responsable` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) NOT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido`, `tel_contact`, `nacionalidad`, `fecha_nacimiento`, `cedula_pasaporte`, `observacion`, `foto`, `estado`, `fecha`, `responsable`, `tel1`, `tel2`) VALUES
(98, 'Mario editado', 'Perez editado', '', 'Dominicana editado', '19/02/1980', '222-1112344-4', 'observacion editado', 'Maria-98.jpg', 'ACTIVO', '2013-04-01 16:10:31', 'responsable editado', '(809) 222-2222', '(809) 222-2222'),
(100, 'Alberto', 'Perez', '', 'Dominicano', '33/06/1980', '344-8999999-9', 'observacion', 'Alberto-100.jpg', 'PASIVO', '2013-04-01 16:19:51', 'responsable', '(809) 394-9494', '(809) 334-9499'),
(101, 'Maria', 'Rodriguez', '', 'Española', '02/03/1960', '344-3423423-4', 'observacion', 'Maria-101.jpg', 'ACTIVO', '2013-04-01 16:21:06', 'responsable', '(809) 222-2222', '(334) 444-4444'),
(102, 'Jose', 'Cuevas', '', 'Domicano', '11/10/1987', '444-4444443-2', 'observación', 'Jose-102.jpg', 'ACTIVO', '2013-04-01 16:47:17', 'responsable', '(809) 578-5786', '(575) 675-6756'),
(103, 'Rosa', 'Salas', '', 'Española', '31/04/1991', '423-4234234-2', 'observación', 'Maria-103.jpg', 'ACTIVO', '2013-04-01 16:49:24', 'responsable', '(453) 453-4534', '(345) 633-4534');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
