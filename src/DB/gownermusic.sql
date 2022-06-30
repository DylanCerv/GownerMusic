-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2022 a las 01:23:45
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gownermusic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username_perfil` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text DEFAULT NULL,
  `img_perfil` varchar(255) DEFAULT NULL,
  `img_portada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `id_user`, `username_perfil`, `description`, `img_perfil`, `img_portada`) VALUES
(11, 56, 'admin', 'Amante de la música y tecnología, siempre innovando en todo.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `content` text CHARACTER SET utf8 DEFAULT NULL,
  `media_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `id_user`, `content`, `media_dir`) VALUES
(23, 56, 'Como mencionamos al inicio, los gustos en música son muy variados si eres amante del Hip Hop esta es una revista de música que te puede interesar , también tienes Hip Hop Nation, sin embargo está en transición y presenta dificultades en su página web.\r\n\r\nAsí que en Hip Hop Life, encuentras las secciones básicas, noticias, vídeos, entrevistas y agenda de conciertos. En su apartado de cosecha propia puedes leer reportajes, el top 5, en este apartado te brindan las 5 mejores canciones de artistas como Lucas Pulcro, y MKU .\r\n\r\n\r\n \r\nTambién te brindan un playlist y  tienes artículos de opinión. En el Bit Hop se dedican a hablar del campo de la producción musical, técnicas, herramientas y protagonistas.', 'x.files/image/088926bfa725ebcac8812ddcc2f.Bang-Olufsen.jpg'),
(24, 56, 'Tanto en el mundo digital como en el impreso, existe mucho contenido y no se queda corto para el sector de la música, en especial en las revistas, puedes encontrar revistas de música rock, pop, hip-hop, clásica, independientes, ópera, funk, electrónica, entre otras.', 'x.files/image/01b2427dff2a3286672b21babca.Vinilos-y-Casco.jpg'),
(25, 56, 'Volver hacia atrás (no vas a volver hacia delante, claro) es una práctica tan habitual como, a veces, beneficiosa para muchas formaciones que se han reformado. En el caso de xPropaganda, no es que se haya reformado Propaganda como tal, sino que pareciera que Claudia Brücken y SusanneFreytag, las dos vocalistas que dieron vida a aquel primer espléndido A SecretWish (ZTT, 1985) con Michael Merthens y Ralph Dörper en la instrumentación, regresaran del pasado para reclamar la continuidad que nunca tuvo aquel debut y que acabó con los alemanes como el rosario de la aurora tras haber facturado semejante delicatessen.', 'x.files/image/a0820f6729e9802ef03363266b2.xPropaganda.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `last_session` date DEFAULT current_timestamp(),
  `token` varchar(255) NOT NULL,
  `phone` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `passwords`, `last_session`, `token`, `phone`) VALUES
(56, 'admin', 'admin@admin.com', '$2y$10$Gm/qfeBasf4mDkZ1Nqe3EuOW1EILc4z.Ok1YsFVi0ZgydFzeexiqq', '2022-06-30', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
