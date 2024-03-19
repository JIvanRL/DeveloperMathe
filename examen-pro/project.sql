-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-02-2024 a las 04:40:12
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(2, 'hola@configuroweb.com', '1234abcd..');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5f87bb9fb8c08', '5f87bb9fb92e8'),
('5f87bb9fbadb5', '5f87bb9fbb1e6'),
('5f87bb9fbc859', '5f87bb9fbd53b'),
('5f87bb9fbeb8d', '5f87bb9fbefe8'),
('5f87bb9fc0bb9', '5f87bb9fc10e8'),
('5f88b43712884', '5f88b43714dbe'),
('5f88b43761aa1', '5f88b437621f3'),
('65ced77fd9798', '65ced78000d8a'),
('65ced78052887', '65ced78062d90'),
('65ced7810199b', '65ced7812245a'),
('65ced78160e87', '65ced7816bc7e'),
('65ced781c0aa5', '65ced781ce415');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('5f87ca01c593b', 'Usuario', 'configuroweb@gmail.com', 'problemas con la pregunta 3', 'no estoy de acuerdo con la pregunta 3, no me parece una opción exacta, sería mejor una pregunta abierta.', '2020-10-15', '06:03:13am'),
('5f88c9bea1954', 'Juan Ramón', 'jramon@cweb.com', 'tengo problemas para registrarme', 'Realizo el proceso, pero no puedo acceder tal vez estoy haciendo algo mal, saludos.', '2020-10-16', '12:14:22am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('usuario@cweb.com', '5f87b7b0e5928', 1, 5, 3, 2, '2020-10-15 03:58:39'),
('operador@cweb.com', '5f87b7b0e5928', 1, 5, 3, 2, '2020-10-15 04:25:31'),
('migueliletl333@gmail.com', '5f88b3cd0a5d9', 2, 2, 2, 0, '2024-02-15 08:42:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5f87bb9fb8c08', 'si', '5f87bb9fb92e8'),
('5f87bb9fb8c08', 'no', '5f87bb9fb92f5'),
('5f87bb9fb8c08', 'son lenguajes similares que conservan ciertas diferencias en la ejecución', '5f87bb9fb92f6'),
('5f87bb9fb8c08', 'la opción a y la opción c son ciertas', '5f87bb9fb92f7'),
('5f87bb9fbadb5', 'Es un lenguaje de máquina', '5f87bb9fbb1e4'),
('5f87bb9fbadb5', 'Es un lenguaje interpretado', '5f87bb9fbb1e6'),
('5f87bb9fbadb5', 'Es un lenguaje orientado a objetos', '5f87bb9fbb1e7'),
('5f87bb9fbadb5', 'No es un lenguaje de último nivel', '5f87bb9fbb1e8'),
('5f87bb9fbc859', 'Verdadero', '5f87bb9fbd537'),
('5f87bb9fbc859', 'Falso', '5f87bb9fbd53b'),
('5f87bb9fbc859', 'Javascript tiene funciones que solo retornan valores', '5f87bb9fbd53c'),
('5f87bb9fbc859', 'Javascript es un lenguaje de programación orientada a objetos', '5f87bb9fbd53d'),
('5f87bb9fbeb8d', 'Los comentarios en javascript se habilitan con dos diagonales seguidas //', '5f87bb9fbefe5'),
('5f87bb9fbeb8d', 'Los comentarios se utilizan para poder darle claridad a los demás desarrolladores sobre el código', '5f87bb9fbefe7'),
('5f87bb9fbeb8d', 'La afirmación del planteamiento es totalmente falsa', '5f87bb9fbefe8'),
('5f87bb9fbeb8d', 'La afirmación del planteamiento es totalmente cierta', '5f87bb9fbefe9'),
('5f87bb9fc0bb9', 'La afirmación del planteamiento es totalmente cierta', '5f87bb9fc10e5'),
('5f87bb9fc0bb9', 'Javascript solo se utiliza para el usuario final', '5f87bb9fc10e8'),
('5f87bb9fc0bb9', 'Javascript se compila en un archivo ejecutable', '5f87bb9fc10e9'),
('5f87bb9fc0bb9', 'Javascript es un lenguaje muy similar a PHP y está orientado al servidor exclusivamente', '5f87bb9fc10ea'),
('5f88b43712884', 'p', '5f88b43714dba'),
('5f88b43712884', 'print', '5f88b43714dbe'),
('5f88b43712884', 'echo', '5f88b43714dbf'),
('5f88b43712884', 'console.log', '5f88b43714dc0'),
('5f88b43761aa1', '#', '5f88b437621f3'),
('5f88b43761aa1', '*', '5f88b437621f8'),
('5f88b43761aa1', '//', '5f88b437621fa'),
('5f88b43761aa1', '--', '5f88b437621fb'),
('65ced77fd9798', '12', '65ced78000d82'),
('65ced77fd9798', '20', '65ced78000d8a'),
('65ced77fd9798', '22', '65ced78000d8b'),
('65ced77fd9798', '100', '65ced78000d8c'),
('65ced78052887', 'dewdwe', '65ced78062d89'),
('65ced78052887', 'dedeaw', '65ced78062d90'),
('65ced78052887', 'dewdewd', '65ced78062d91'),
('65ced78052887', 'edwdewdwe', '65ced78062d92'),
('65ced7810199b', 'dedkekdaewd', '65ced78122452'),
('65ced7810199b', 'dmkedmkedmkwedmed', '65ced78122459'),
('65ced7810199b', 'mkdmekdmkemdew', '65ced7812245a'),
('65ced7810199b', 'kmdekdmwkedkc', '65ced7812245b'),
('65ced78160e87', 'dededew', '65ced7816bc74'),
('65ced78160e87', 'dewdedew', '65ced7816bc7c'),
('65ced78160e87', 'dewdewdewd', '65ced7816bc7d'),
('65ced78160e87', 'dedewdewd', '65ced7816bc7e'),
('65ced781c0aa5', 'dewdwed', '65ced781ce3fa'),
('65ced781c0aa5', 'cdscjsdcdsjmcjs', '65ced781ce402'),
('65ced781c0aa5', 'cjndsjcnsdjcnsjj', '65ced781ce414'),
('65ced781c0aa5', 'jnjksncjkscnksnc', '65ced781ce415');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5f87b7b0e5928', '5f87bb9fb8c08', '¿Javascript y Java son lo mismo?', 4, 1),
('5f87b7b0e5928', '5f87bb9fbadb5', '¿Javascript es un lenguaje de alto nivel?', 4, 2),
('5f87b7b0e5928', '5f87bb9fbc859', 'Una función en Javascript no es un tramo de código diseñado para ejecutar una tarea específica', 4, 3),
('5f87b7b0e5928', '5f87bb9fbeb8d', 'Los comentarios en Javascript se utilizan para optimizar la ejecución de sus scripts', 4, 4),
('5f87b7b0e5928', '5f87bb9fc0bb9', 'Javascript es un lenguaje de programación que se puede utilizar desde el lado del servidor', 4, 5),
('5f88b3cd0a5d9', '5f88b43712884', 'Para mostrar texto en la consola usamos el comando', 4, 1),
('5f88b3cd0a5d9', '5f88b43761aa1', '¿Qué símbolo se utiliza para comentar una línea de código?', 4, 2),
('65ced6cab4b3f', '65ced77fd9798', 'cuales mi cumpleaños', 4, 1),
('65ced6cab4b3f', '65ced78052887', 'edewded', 4, 2),
('65ced6cab4b3f', '65ced7810199b', 'dewdewkcf', 4, 3),
('65ced6cab4b3f', '65ced78160e87', 'mkcmksdcmkjcd', 4, 4),
('65ced6cab4b3f', '65ced781c0aa5', 'dewdewdwedewdw', 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('5f87b7b0e5928', 'Examen De Javascript', 1, 1, 5, 5, 'Examen de certificación de primer nivel de javascript', '#javascripttest', '2020-10-15 02:45:04'),
('5f88b3cd0a5d9', 'Python Básico', 1, 1, 2, 5, 'Examen básico de Python', '#pythontest', '2020-10-15 21:24:50'),
('65ced6cab4b3f', 'Algebra', 1, 1, 5, 10, 'prueba', 'prueba', '2024-02-16 03:30:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('usuario@cweb.com', 1, '2020-10-15 03:58:39'),
('operador@cweb.com', 1, '2020-10-15 04:25:31'),
('migueliletl333@gmail.com', 2, '2024-02-15 08:42:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Elizatbet Salinas Bell', 'F', 'Buap', 'eliza@gmail.com', 22334533, '57c121e25c962050269a0fedae41d5bf'),
('Kafka', 'Male', 'mkmo', 'gusgusgus671@gmail.com', 22344524242, '57c121e25c962050269a0fedae41d5bf'),
('Karen Ramures Villa ', 'F', 'Buap', 'kaka@gmail.com', 223445652, '57c121e25c962050269a0fedae41d5bf'),
('Miguel Angel Potrero', 'M', 'Universidad Tecnologica de Puebla ', 'migueliletl333@gmail.com', 22349483838, '57c121e25c962050269a0fedae41d5bf'),
('Operador', 'M', 'operador', 'operador@cweb.com', 3122344523, '4b67deeb9aba04a5b54632ad19934f26'),
('Usuario', 'M', 'usuario', 'usuario@cweb.com', 3102451327, '4b67deeb9aba04a5b54632ad19934f26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
