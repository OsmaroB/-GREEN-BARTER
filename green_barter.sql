-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2020 a las 00:45:51
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `green_barter`
--
CREATE DATABASE IF NOT EXISTS `green_barter` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `green_barter`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id_blog` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8_unicode_ci NOT NULL,
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `blogs`:
--   `id_usuario`
--       `usuarios` -> `id_usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `categorias`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coment_blog`
--

CREATE TABLE `coment_blog` (
  `id_coment_blog` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `coment_blog`:
--   `id_usuario`
--       `usuarios` -> `id_usuario`
--   `id_blog`
--       `blogs` -> `id_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `estados`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE `paginas` (
  `id_pagina` int(11) NOT NULL,
  `pagina` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `paginas`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `usado` bit(1) NOT NULL,
  `producto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `precio` decimal(9,2) NOT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL,
  `id_estado` int(11) NOT NULL,
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `productos`:
--   `id_categoria`
--       `categorias` -> `id_categoria`
--   `id_estado`
--       `estados` -> `id_estado`
--   `id_usuario`
--       `usuarios` -> `id_usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id_red` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pagina` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `redes`:
--   `id_usuario`
--       `usuarios` -> `id_usuario`
--   `id_pagina`
--       `paginas` -> `id_pagina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tipos_usuario`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `usuarios`:
--   `id_tipo_usuario`
--       `tipos_usuario` -> `id_tipo_usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `val_prod`
--

CREATE TABLE `val_prod` (
  `id_val_prod` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `valoracion` int(1) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `val_prod`:
--   `id_producto`
--       `productos` -> `id_producto`
--   `id_usuario`
--       `usuarios` -> `id_usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `val_usu`
--

CREATE TABLE `val_usu` (
  `id_val_usu` int(11) NOT NULL,
  `id_usuario_val` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `valoracion` int(1) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `eliminado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `val_usu`:
--   `id_usuario`
--       `usuarios` -> `id_usuario`
--   `id_usuario_val`
--       `usuarios` -> `id_usuario`
--

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `coment_blog`
--
ALTER TABLE `coment_blog`
  ADD PRIMARY KEY (`id_coment_blog`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_blog` (`id_blog`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id_pagina`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id_red`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_pagina` (`id_pagina`);

--
-- Indices de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `val_prod`
--
ALTER TABLE `val_prod`
  ADD PRIMARY KEY (`id_val_prod`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `val_usu`
--
ALTER TABLE `val_usu`
  ADD PRIMARY KEY (`id_val_usu`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_usuario_val` (`id_usuario_val`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `coment_blog`
--
ALTER TABLE `coment_blog`
  MODIFY `id_coment_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id_red` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `val_prod`
--
ALTER TABLE `val_prod`
  MODIFY `id_val_prod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `val_usu`
--
ALTER TABLE `val_usu`
  MODIFY `id_val_usu` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `coment_blog`
--
ALTER TABLE `coment_blog`
  ADD CONSTRAINT `coment_blog_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `coment_blog_ibfk_2` FOREIGN KEY (`id_blog`) REFERENCES `blogs` (`id_blog`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `redes`
--
ALTER TABLE `redes`
  ADD CONSTRAINT `redes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `redes_ibfk_2` FOREIGN KEY (`id_pagina`) REFERENCES `paginas` (`id_pagina`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipos_usuario` (`id_tipo_usuario`);

--
-- Filtros para la tabla `val_prod`
--
ALTER TABLE `val_prod`
  ADD CONSTRAINT `val_prod_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `val_prod_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `val_usu`
--
ALTER TABLE `val_usu`
  ADD CONSTRAINT `val_usu_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `val_usu_ibfk_2` FOREIGN KEY (`id_usuario_val`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
