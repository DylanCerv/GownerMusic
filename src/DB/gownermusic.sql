-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2022 a las 19:45:22
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
(1, 43, 'power', 'Descripción del usuario 2, me gusta los negocios, soy una persona autodidacta y muy extrovertida', 'img/perfilmio.jpg', NULL),
(2, 42, 'dylan', 'Soy una persona de negocios pero también aprecio la música en cualquier momento', 'img/dylan.jpg', NULL),
(9, 54, 'an', NULL, NULL, NULL);

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
(3, 43, 'Hola chicos aca comparto mi proyecto que realize en google colab y con diversas librerias de python, esto es un colab de herramientas para poder manejar archivos desde el mismo drive :)', 'x.files/image/ab77f9309e38380614933f273a2.herramientas-drive.JPG'),
(7, 43, '2c1', 'x.files/image/6f5a5ccd23e30365b1015f6b892.composer.png'),
(8, 43, 'github', 'x.files/image/9c26356899120eed11f0c3ff02a.GitHub.png'),
(9, 43, 'https://web.telegram.org/k/', NULL),
(10, 42, 'dylan este es', 'x.files/application/ee66170fbbe9a80f7960c9a24d0.CV-C-(English).pdf'),
(11, 43, 'SUSUSUSUUSUSUSUUUUUUUUUUUUUUUU', NULL),
(13, 42, 'Paisaje', 'x.files/image/4926eed57c8d584bd15995f9884.paisaje-natural.jpg');

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
(42, 'dylan', 'dylan@gmail.com', '$2y$10$IawLbMAhizpuNKKY/vOBmOEyoejvunW/AJZRrkfIvPYTXP2wHE9aW', '2022-05-20', '', 0),
(43, 'po', 'power102004@gmail.com', '$2y$10$kQtrDPaGvNQVGD1sBmMNUOS4Uka5OVOT64iXfmomnlCHMZJdG1vfG', '2022-05-20', '', 0),
(54, 'an', 'dominograt@gmail.com', '$2y$10$gbcs5l12MftRD516cuTgU.DgubEbwDLDRAVPPG3Hw80wrglTKHC8i', '2022-05-05', '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
