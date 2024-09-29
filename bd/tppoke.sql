-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2024 a las 21:36:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tppoke`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(16) NOT NULL,
  `contraseña` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `contraseña`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `ruta_pokemon` varchar(255) NOT NULL,
  `ruta_tipo` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `ruta_pokemon`, `ruta_tipo`, `numero`, `nombre`, `descripcion`) VALUES
(35, 'imagenes/charmander.png', 'imagenes/tipo/fuego.png', 433, 'Charmander', ' Charmander es un Pokémon de tipo Fuego de la primera generación (número 004 en la Pokédex), conocido por su apariencia similar a un pequeño dinosaurio bípedo con piel naranja. Tiene una cola característica con una llama en la punta, la cual refleja su estado de salud y emociones; si la llama se apaga, Charmander puede correr peligro. Es conocido por su naturaleza amigable y enérgica, pero también puede ser feroz en combate, especialmente cuando crece y evoluciona. Charmander es la primera etapa evolutiva de Charizard, evolucionando a Charmeleon en el nivel 16 y luego a Charizard en el nivel 36.'),
(36, 'imagenes/venusar.png', 'imagenes/tipo/hierba.png', 76, 'Venusar', 'Venusaur es un Pokémon de tipo Planta/Veneno de la primera generación (número 003 en la Pokédex), siendo la forma evolucionada final de Bulbasaur y su evolución intermedia, Ivysaur. Es un Pokémon grande y robusto con apariencia de reptil cuadrúpedo, cubierto por una flor gigante en su espalda. La flor crece gracias a la energía solar, y emite un dulce aroma que calma a otros seres vivos. Venusaur es conocido por su fuerte conexión con la naturaleza, capaz de controlar el crecimiento de plantas a su alrededor y aprovechar la luz solar para potenciar sus ataques. Es el símbolo de poder y madurez de la línea evolutiva, especialmente notable por sus movimientos como Rayo Solar y Terremoto.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
