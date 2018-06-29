-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2018 a las 11:47:59
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horoscopo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `futuro`
--

CREATE TABLE `futuro` (
  `codigo` int(2) DEFAULT NULL,
  `signo` varchar(25) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `prediccion` text COLLATE utf8mb4_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `futuro`
--

INSERT INTO `futuro` (`codigo`, `signo`, `prediccion`) VALUES
(1, 'Aries', 'Encontrarás la forma de redirigir un conflicto doméstico que había surgido últimamente. Las estrellas de están de tu parte.'),
(2, 'Tauro', 'La actual coyuntura astral acrecienta tu necesidad de libertad e independencia, lo que podría hacer que choques con la pareja.'),
(3, 'Géminis', 'Podrías tener algún problema en el trabajo por culpa de posiciones enfrentadas. La clave para afrontarlo es mirar las cosas con distancia.'),
(4, 'Cáncer', 'Si estás pensando en un cambio de trabajo o en reorientarte profesionalmente, es un buen momento para sentar las bases de lo que quieres.'),
(5, 'Leo', 'No te desanimes y sigue luchando por tus intereses. Pero aclara todo lo que tenga que ser aclarado con las personas que te rodean.'),
(6, 'Virgo', 'Tendrás la oportunidad de sacar adelante un proyecto que tienes entre manos gracias al apoyo de alguien de tu entorno, pero no será nada fácil...'),
(7, 'Libra', 'Por poco que te lo propongas, te colocarás en una posición de fuerza que te permitirá defender tus intereses.'),
(8, 'Escorpio', 'Continúan los avisos de peligro en todo lo que atañe a las relaciones personales, en general, y sobre todo profesionales. La prudencia es la clave para evitar choques.'),
(9, 'Sagitario', 'Las aguas vuelven a su cauce y empieza un periodo en el que podrás defender sin miedo tus intereses y tus posturas.'),
(10, 'Capricornio', 'Empieza un periodo muy favorable en todo lo relacionado con la mejora de las relaciones. Aprovéchalo para poner las cartas sobre la mesa.'),
(11, 'Acuario', 'Comienza un etapa en la que podrás ir sorteando todos los obstáculos que aparezcan e imponer tus posturas y tu visión de las cosas.'),
(12, 'Piscis', 'Semana muy favorable para el diálogo y la comunicación. E inicio también de un periodo muy positivo para los asuntos sentimentales y amorosos.'),
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
