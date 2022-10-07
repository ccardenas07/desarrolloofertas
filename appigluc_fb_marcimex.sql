-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2014 a las 02:03:12
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `appigluc_fb_marcimex`
--
CREATE DATABASE IF NOT EXISTS `appigluc_fb_marcimex` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `appigluc_fb_marcimex`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE IF NOT EXISTS `descripcion` (
  `idd` int(11) NOT NULL AUTO_INCREMENT,
  `image1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `link1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `image2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `link2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `image3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `link3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `image4` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `link4` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `date` datetime NOT NULL,
  `user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `host` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `descripcion`
--

INSERT INTO `descripcion` (`idd`, `image1`, `link1`, `image2`, `link2`, `image3`, `link3`, `image4`, `link4`, `date`, `user`, `host`) VALUES
(1, 'tv.png', 'www.hotmail.com', 'cocina_granada.png', 'www.yahoo.com', 'tv.png', 'www.indurama.com', 'refri_rg1.png', 'www.facebook.com', '2014-06-13 01:09:46', 'leon', '127.0.0.1'),
(3, 'tv.png', 'www.hotmail.com', 'tv.png', 'www.yahoo.com', 'tv.png', 'www.indurama.com', 'tv.png', 'www.facebook.com', '2014-06-13 01:10:46', 'leon', '127.0.0.1'),
(4, 'cocina_granada.png', 'www.hotmail.com', 'cocina_granada.png', 'www.indurama.com', 'cocina_granada.png', 'eee', 'cocina_granada.png', 'eee', '2014-06-13 01:41:03', 'leon', '127.0.0.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pass_v` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idu`, `user`, `pass`, `pass_v`, `name`, `email`) VALUES
(1, 'leon', '5C443B2003676FA5E8966030CE3A86EA', 'cd605ae4359b76c5958f817e1c766bad', 'ricardo', 'dragjohn@hotmail.com'),
(2, 'jay', 'BABA327D241746EE0829E7E88117D4D5', '730e5c80ff11545e5b054f5ffbd2dec1', 'eee', 'dre@ho.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
