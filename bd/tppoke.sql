-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2024 a las 23:24:36
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
(35, 'imagenes/charmander.png', 'imagenes/tipo/fuego.png', 4, 'Charmander', '  Charmander es un Pokémon de tipo Fuego de la primera generación (número 004 en la Pokédex), conocido por su apariencia similar a un pequeño dinosaurio bípedo con piel naranja. Tiene una cola característica con una llama en la punta, la cual refleja su estado de salud y emociones; si la llama se apaga, Charmander puede correr peligro. Es conocido por su naturaleza amigable y enérgica, pero también puede ser feroz en combate, especialmente cuando crece y evoluciona. Charmander es la primera etapa evolutiva de Charizard, evolucionando a Charmeleon en el nivel 16 y luego a Charizard en el nivel 36.'),
(37, 'imagenes/Bulbasaur.png', 'imagenes/tipo/hierba.png', 32, 'Bulbasaur ', ' Bulbasaur es un Pokémon cuadrúpedo de tipo hierba y veneno con una planta en su lomo. La planta crece junto a Bulbasaur, absorbiendo energía solar que utiliza para realizar movimientos como el Látigo Cepa y el Rayo Solar.'),
(38, 'imagenes/Squirtle.png', 'imagenes/tipo/agua.png', 87, 'Squirtle', ' Squirtle es una pequeña tortuga de tipo agua. Su caparazón le proporciona protección, y cuando retrae su cabeza y sus extremidades, es casi invulnerable a los ataques. Puede lanzar chorros de agua a alta presión desde su boca como ataque y es un excelente nadador.'),
(39, 'imagenes/Totodile.png', 'imagenes/tipo/agua.png', 77, 'Totodile', ' Totodile es un Pokémon cocodrilo de tipo agua. Aunque pequeño, tiene una mandíbula extremadamente fuerte que usa para morder y triturar objetos. Es juguetón y curioso, pero a veces no controla su fuerza, lo que lo lleva a causar accidentes.'),
(40, 'imagenes/Vulpix.png', 'imagenes/tipo/fuego.png', 434, 'Vulpix', ' Vulpix es un pequeño Pokémon parecido a un zorro con seis colas que, al evolucionar, se multiplican en nueve. Su poder principal es la capacidad de lanzar llamas y controlar el fuego a voluntad. Es conocido por su naturaleza elegante y misteriosa.'),
(41, 'imagenes/chikorita.png', 'imagenes/tipo/hierba.png', 54, 'Chikorita', 'Chikorita es un Pokémon de tipo hierba con apariencia de un pequeño dinosaurio cuadrúpedo. Tiene una gran hoja en su cabeza que usa para liberar dulces aromas calmantes. Chikorita es tranquila y pacífica, prefiriendo la armonía con la naturaleza.'),
(42, 'imagenes/Cyndaquil.png', 'imagenes/tipo/fuego.png', 567, 'Cyndaquil', 'Cyndaquil es un Pokémon tímido de tipo fuego con la capacidad de generar llamas en su espalda. Aunque parece tranquilo, si se siente amenazado o molesto, puede liberar ráfagas de fuego a través de su espalda, lo que lo convierte en un oponente peligroso.'),
(43, 'imagenes/Mudkip.png', 'imagenes/tipo/fuego.png', 877, 'Mudkip', 'Mudkip es un pequeño Pokémon anfibio de tipo agua. Puede moverse tanto en el agua como en la tierra con gran habilidad. Utiliza sus branquias para respirar bajo el agua, y tiene una fuerza sorprendente en su cuerpo pequeño, lo que lo hace ideal para cavar y nadar.'),
(44, 'imagenes/Treecko.png', 'imagenes/tipo/hierba.png', 454, 'Treecko', 'Treecko es un Pokémon lagarto de tipo hierba. Se le conoce por su agilidad y habilidades para escalar árboles. Treecko es extremadamente valiente y no retrocede ante el peligro. Tiene una cola fuerte que utiliza para mantener el equilibrio y atacar a sus enemigos.'),
(45, 'imagenes/Torchic.png', 'imagenes/tipo/fuego.png', 676, 'Torchic', 'Torchic es un Pokémon polluelo de tipo fuego. A pesar de su apariencia adorable y pequeña, Torchic puede lanzar llamas de su pico y acumular fuego dentro de su cuerpo. Es leal a su entrenador y disfruta de la compañía de otros, buscando siempre proteger a los suyos.'),
(46, 'imagenes/Ponyta.png', 'imagenes/tipo/fuego.png', 590, 'Ponyta', 'Ponyta es un Pokémon caballo con crines y cola de fuego. Es conocido por su velocidad y agilidad, que mejoran a medida que madura. Su cuerpo está cubierto por llamas que se intensifican cuando corre a toda velocidad. Aunque parece salvaje, es muy leal a su entrenador'),
(47, 'imagenes/Lapras.png', 'imagenes/tipo/agua.png', 112, 'Lapras', 'Lapras es un gran Pokémon similar a un plesiosaurio, capaz de transportar personas a través del agua. Es de tipo agua y hielo, y es conocido por su inteligencia y gentileza. Lapras es una criatura pacífica que disfruta del mar, aunque es capaz de defenderse con poderosos ataques como el Canto Helado.'),
(48, 'imagenes/Oddish.png', 'imagenes/tipo/agua.png', 888, 'Oddish', 'Oddish es un pequeño Pokémon con aspecto de planta bulbosa. Es de tipo hierba y veneno. Durante el día, se entierra en el suelo, y por la noche sale para absorber luz lunar. A medida que crece, puede evolucionar en Gloom y luego en Vileplume o Bellossom, dependiendo de su entrenamiento.'),
(49, 'imagenes/Growlithe.png', 'imagenes/tipo/fuego.png', 835, 'Growlithe', 'Growlithe es un Pokémon canino de tipo fuego. Es extremadamente leal y protector de su entrenador, lo que lo convierte en un excelente compañero. Aunque es feroz con sus enemigos, es amable y afectuoso con los suyos. Growlithe evoluciona en Arcanine, un Pokémon aún más majestuoso y poderoso.'),
(50, 'imagenes/Psyduck.png', 'imagenes/tipo/agua.png', 809, 'Psyduck', 'Psyduck es un Pokémon pato de tipo agua. Constantemente sufre de dolores de cabeza, que, al intensificarse, le permiten desatar poderosas habilidades psíquicas. Aunque parece desorientado y torpe, puede ser extremadamente poderoso cuando libera su energía oculta.'),
(51, 'imagenes/Gloom.png', 'imagenes/tipo/hierba.png', 935, 'Gloom', 'Gloom es la evolución de Oddish y sigue siendo de tipo hierba y veneno. Se distingue por la gran flor que crece en su cabeza y el olor desagradable que emite. A pesar de su apariencia, Gloom puede evolucionar en dos formas diferentes: Vileplume (tipo veneno) o Bellossom (tipo hierba puro).'),
(52, 'imagenes/Magmar.png', 'imagenes/tipo/fuego.png', 335, 'Magmar', 'Magmar es un Pokémon de tipo fuego con un cuerpo similar a la lava ardiente. Su temperatura interna es tan alta que puede derretir su entorno. Magmar se encuentra a menudo en zonas volcánicas y utiliza sus llamas para lanzar potentes ataques de fuego.'),
(53, 'imagenes/Bellsprout.png', 'imagenes/tipo/hierba.png', 389, 'Bellsprout', 'Bellsprout es un Pokémon planta con un cuerpo delgado y una cabeza en forma de flor. Es de tipo hierba y veneno. A pesar de su apariencia frágil, es bastante rápido y puede atacar con sus poderosas raíces y látigos. Evoluciona en Weepinbell y luego en Victreebel'),
(54, 'imagenes/venusar.png', 'imagenes/tipo/hierba.png', 312, 'Venusaur', '  Venusaur es un Pokémon de tipo Planta/Veneno de la primera generación (número 003 en la Pokédex), siendo la forma evolucionada final de Bulbasaur y su evolución intermedia, Ivysaur. Es un Pokémon grande y robusto con apariencia de reptil cuadrúpedo, cubierto por una flor gigante en su espalda. La flor crece gracias a la energía solar, y emite un dulce aroma que calma a otros seres vivos. Venusaur es conocido por su fuerte conexión con la naturaleza, capaz de controlar el crecimiento de plantas a su alrededor y aprovechar la luz solar para potenciar sus ataques. Es el símbolo de poder y madurez de la línea evolutiva, especialmente notable por sus movimientos como Rayo Solar y Terremoto.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
