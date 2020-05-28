-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2020 a las 06:37:38
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jaime_ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_15_050657_create_administradores_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `precio` int(10) NOT NULL,
  `seccion` int(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `name`, `precio`, `seccion`, `imagen`, `stock`) VALUES
(1, 'Receta', 575, 8, 'Cg167htA14enZYGvMJ9kMbZf6bL4lTRLIoeYfosC.jpeg', 50),
(2, 'Utensillos', 670, 8, 'NlvKRg2iZG7mF2fF6QjBfEqdMgdvlOk0tQRTOUEl.jpeg', 50),
(3, 'Bon Appetit!', 570, 8, 'yjIo3fOD9m9QAOHFS82ujLqkgFLt1EkyuuX3EWi0.jpeg', 50),
(4, 'Bon Appetit!', 480, 8, '9D3wqkKKQ7fIPBPeuVc8woSbGtOUa8JQJ6a23f2f.jpeg', 50),
(5, 'Condimentos', 505, 8, 'e6TTVC32NjFL0DdyAQ9kRieeqOElznUaF8qKrijU.jpeg', 50),
(6, 'El arte de Cocinar', 505, 8, 'Nrr80Uwhglbe0BayuRX7awKWiuqlYu7ngA66HhrV.jpeg', 50),
(7, 'Infantil 01', 650, 9, 'npvJMuNlrVhnm6oB0EDtRjsWyjzd4faVoSt72lGp.jpeg', 50),
(8, 'Infantil 02', 635, 9, 'yr8BstuiO8IzuCAjLFZRfxe1U2TdDN9uH4iXlImL.jpeg', 50),
(9, 'Infantil 03', 550, 9, 'hDmN8xPfmDqktwM5JcSb34Cb5ZSeU69t0qK6gQdD.jpeg', 50),
(10, 'Infantil 04', 570, 9, 'Ot1UQDU4h31mDQTrK0psyRX7Fz2fi1sqiEoMAEwC.jpeg', 50),
(11, 'Infantil 05', 470, 9, 'tHsqahvUxm0GTASpeCIk56NQLGgZ6FgnvjYjNGh4.jpeg', 50),
(12, 'Infantil 06', 490, 9, 'bESomo9bKBX9w5dwQ8q3i3MJIOwKiFWJocaD2kx5.jpeg', 50),
(13, 'Frase 01', 475, 12, 'JvmR2DH9ZB9bxdAb98WAYbdtmkOL4ELTpg2Ax11L.jpeg', 50),
(14, 'Frase 02', 480, 12, 'XIQO3QXnLfOazjtKOza89MX8daoWt03wLG59380x.jpeg', 50),
(15, 'Frase 03', 520, 12, 'VXmWFBTH7Bbh65RPRIqojPF4Y5TLbpi1kUwA96fL.jpeg', 50),
(16, 'Frase 04', 470, 12, 'm8v3ufejnuZDgKVciEcFWYkebtqIoc1acxUaLLt4.jpeg', 50),
(17, 'Frase 05', 520, 12, 'hGcU2ab9ZaT5D4k5fQL2rFwnaz6utEa9yvqV6owf.jpeg', 50),
(18, 'Frase 06', 550, 12, 'sXxJBbbAjf4fhLHfYpKRzME3IVRZJ2bFaeQRQzon.jpeg', 50),
(19, 'Zen 01', 580, 13, '1YTpUn2f0Nc6AftZLMMLMZoFAtQzL70FeCHd68P3.jpeg', 50),
(20, 'Zen 02', 540, 13, 'J6HMQMuISWZRxmetd4ezMDZ0D2UjNrBWeuGGg4SA.jpeg', 50),
(21, 'Mandala 03', 560, 13, 'zIfAr53kB65EOgwCpLdob7H6nOmA4TwzH46MUlFQ.jpeg', 50),
(22, 'Zen 04', 520, 13, '3WdbDAOhttKyJtUxZAni15jaZTwKMgEyQchDwGau.jpeg', 50),
(23, 'Zen 05', 570, 13, 'jXgj7eMksXKJ6pxDA7mRJBnws7i7Qd0kc0Sxa9ub.jpeg', 50),
(24, 'Zen 06', 560, 13, 'sanAHewTiTWxjq8Ri7dBO4PjvIJYRSn4RaVbCwCo.jpeg', 50),
(25, 'Musica 01', 830, 1, '63c8rwIS0yhZpEqLMCAgfSBPlZkxU6PtGvx84wS6.jpeg', 50),
(26, 'Musica 02', 800, 1, 'VGCeqTooOQOgsFsZlGj0DzpMCqkFyIyRAfew837k.jpeg', 50),
(27, 'Musica 03', 810, 1, 'QcCjhkuJZr0pHxWwMbZD04VPSkf6flkfFIvMb4Iy.jpeg', 50),
(28, 'Musica 04', 780, 1, 'aO25u9T7S5vh3yCJWicXWv5DUyzWpnQCfTnCb6N4.jpeg', 50),
(29, 'Guitarra 02', 810, 1, 'm2DKdYRkDLEpzjGlMHsXnSzc5WZnpGtKW1urLcDm.jpeg', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `name`) VALUES
(1, 'Musica'),
(8, 'Cocina'),
(9, 'Infantil'),
(12, 'Frases'),
(13, 'Zen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_de_usuario` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo_de_usuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'AdministradorPrincipal', 'mijael@mijael.com', NULL, '$2y$10$BIVUsFOxdWvPYS3HPLo7aO1cwCLbFVkxAdP/SU786hf0RI3i4zd5a', 'administrador', NULL, '2020-05-23 21:32:43', '2020-05-23 21:32:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seccion` (`seccion`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `test` FOREIGN KEY (`seccion`) REFERENCES `secciones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
