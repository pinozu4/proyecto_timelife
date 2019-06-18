-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2019 a las 02:27:15
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_log` int(2) NOT NULL,
  `usuario_log` varchar(15) NOT NULL,
  `contra_log` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_log`, `usuario_log`, `contra_log`) VALUES
(1, 'DeporteRey', '1597210');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `titulo`, `texto`) VALUES
(1, 'ORIGEN', 'Desde tiempos inmemorables, los seres humanos mostraron interés por los juegos en los que se incluían objetos esféricos o semiesféricos, como frutos, semillas, piedras o bolas de nieve. Para indagar el origen historia y evolución del fútbol es necesario asomarse a las antiguas culturas, ya que allí yacen los cimientos del deporte que hoy en día llamamos fútbol.									'),
(2, 'EVOLUCIÓN', 'La evolución del fútbol no ha sido fácil, ha habido un constante cambio en su estructura. Las reglas del fútbol han evolucionado al igual que las sociedades, la manera en que se realiza el saque, tipos de faltas, e inclusive las dimensiones del campo y el balón, se han ajustado poco a poco para perfeccionar este deporte, como resultado de ello han surgido instituciones y entidades que cobijan este gran deporte, creando competiciones a nivel mundial e incluso ha sido un factor fundamental para el desarrollo del mundo durante el siglo XX.					'),
(3, 'JUEGOS OLÍMPICOS', 'El fútbol no estaba en el programa moderno original de los juegos olímpicos; debido a que, el fútbol internacional todavía estaba en su desarrollo en 1896. Sin embargo, un torneo fútbol fue organizado durante la primera competición de los Juegos Olímpicos. Los torneos de demostración también fueron jugados en 1900 y 1904, también como en los \"Juegos Intercaló\" de 1906, pero éstos fueron disputados por equipos, y no se consideran para ser acontecimientos olímpicos oficiales. No fue sino hasta los juegos de Londres de 1908 que un torneo internacional apropiado fue organizado, participando apenas seis equipos e incrementándose a 11 en 1912.\r\n					'),
(4, 'ACTUALIDAD', 'El fútbol actual está regido por una gran cantidad de factores, como lo son la tecnología, el mercado de fichajes y la prensa son los grandes protagonistas del Deporte Rey en la actualidad, cambiando de cierta forma la forma de jugarlo, claro esta que allí influye la tecnología, como lo es el VAR. El entorno al fútbol esta muy globalizado gracias a la prensa y el marketing que se le da,lo que nunca cambiara es el amor de los aficionados por su equipo.		');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `edad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `edad`) VALUES
(1, 'Daniela', 'daniela@gmail.com', 18),
(2, 'Leidy', 'lmam20412@gmail', 17),
(3, 'Julian', 'julian@gmail.com', 19),
(4, 'Mario', 'mario20@gmail.com', 11),
(5, 'Cristian Marin', 'juan20@gmail.com', 17),
(7, 'Esteban', 'Esteban@gmail.com', 18);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_log`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_log` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
