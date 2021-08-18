-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2021 a las 09:28:09
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pharmatica_bd`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_contacto_general` (`var_nombre_contacto_general` VARCHAR(300), `var_correo_contacto_general` VARCHAR(200), `var_telefono_contacto_general` VARCHAR(30), `var_comentario_contacto_general` VARCHAR(1200), `var_fecha_registro_contacto` DATETIME)  BEGIN
	 INSERT INTO t_contacto(
	  nombre_contacto,
	  correo_contacto,
	  telefono_contacto,
	  comentario_contacto,
	  fecha_registro_contacto
      ) VALUES (
	  var_nombre_contacto_general, 
	  var_correo_contacto_general, 	
	  var_telefono_contacto_general,
      var_comentario_contacto_general,
	  var_fecha_registro_contacto);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_usuarios_general` (IN `var_nombre_user_general` VARCHAR(200), IN `var_email_general` VARCHAR(150), IN `var_clave_user_general` VARCHAR(150), IN `var_fecha_registro_user` DATETIME)  BEGIN
	 INSERT INTO t_usuarios_general(
	  nombre_user_general,
	  email_general,
      clave_user_general,
      tipo_usuario,
	  fecha_registro_user
      ) VALUES (
	  var_nombre_user_general, 
	  var_email_general, 	
	  var_clave_user_general,
      2,   
	  var_fecha_registro_user);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_sesion` (`var_nombre_user_general` VARCHAR(200), `var_clave_user_general` VARCHAR(150))  BEGIN
	 SELECT * from t_usuarios_general  
    where email_general = var_nombre_user_general
    AND clave_user_general = var_clave_user_general;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_contacto`
--

CREATE TABLE `t_contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(300) DEFAULT NULL,
  `correo_contacto` varchar(200) DEFAULT NULL,
  `telefono_contacto` varchar(30) DEFAULT NULL,
  `comentario_contacto` varchar(1200) DEFAULT NULL,
  `fecha_registro_contacto` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_contacto`
--

INSERT INTO `t_contacto` (`id_contacto`, `nombre_contacto`, `correo_contacto`, `telefono_contacto`, `comentario_contacto`, `fecha_registro_contacto`) VALUES
(1, 'randy', '1213@gmail', '121231231', '$ comentario_contacto', '2021-06-02 16:53:10'),
(2, 'dsdfsf', 'dsffdf@fsdf', '21515', '', '2021-06-02 16:59:05'),
(3, 'dsdadas', 'sadsadad@hkjsdfssdad', '122313213', 'dssjhdsd jdshjkshkjhd kjshdjs ks dladkljdjaslkdj lka kjadkalkdjl k', '2021-06-02 17:01:49'),
(4, 'alex', 'alex@gmail', '278956223', 'alex gaayalex gaayalex gaayalex gaay', '2021-06-02 17:09:22'),
(11, 'sdffsfaf', 'afasfaaf@dsda', '123456', 'asdkjkjdah j shdaskl alskajdkaj lkajdklasj dkasjdkasjd lka', '2021-06-02 17:11:04'),
(12, 'fdsfsdfd', 'hjghjgh@jhkj', '12345612', 'jdhjkashdh jah jkdhsajdhjashdjdhasjd hjashdjsahd ak', '2021-06-02 17:22:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_inventario_general_web`
--

CREATE TABLE `t_inventario_general_web` (
  `id_prod_inv` int(11) NOT NULL,
  `nombre_prod_inv` varchar(300) DEFAULT NULL,
  `img_producto` varchar(300) DEFAULT NULL,
  `codigo_producto` varchar(100) DEFAULT NULL,
  `precio_unidad` varchar(100) DEFAULT NULL,
  `precio_caja` varchar(100) DEFAULT NULL,
  `detalle_prod` varchar(500) DEFAULT NULL,
  `ingrediente_prod` varchar(500) DEFAULT NULL,
  `contraindicaciones_prod` varchar(500) DEFAULT NULL,
  `img_producto2` varchar(300) DEFAULT NULL,
  `img_producto3` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_inventario_general_web`
--

INSERT INTO `t_inventario_general_web` (`id_prod_inv`, `nombre_prod_inv`, `img_producto`, `codigo_producto`, `precio_unidad`, `precio_caja`, `detalle_prod`, `ingrediente_prod`, `contraindicaciones_prod`, `img_producto2`, `img_producto3`) VALUES
(1, 'acetaminofen', 'acetaminofen.jpg', '121321313', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'viagra', 'viagra.jpg', '454564564', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'TABCIN', 'tabcin.jpg', '545646456', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'PANADOL', 'panadol.jpg', '213213214', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ALKADE', 'alka_ad.jpg', '5645478779', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'GEX', 'gex.png', '32123113213', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'hjkhfjdshfjhds', NULL, '23132113214564', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'ANTIFLUDES 2', 'antifludes2.jpg', '1212132154', '1000', '10000', 'SIN DETALLES', 'SIN INGREDIENTES', 'SIN EFECTOS SECUBNDFARIOS', NULL, NULL),
(9, 'CEBION', 'cebion.jpg', '7845142512', '5000', '', 'SIN DETALLES', '', '#', NULL, NULL),
(12, 'ko', 'gastric.jpg', '7845845123', '5', '10', 'popo', 'popo', 'popo', 'volteck.jpg', 'alka.jpg'),
(13, 'PRUEBA FINAL FINL', 'gastric.jpg', '789798798798', '1500', '8800', 'Q LE IMKPOR[TA', 'CACA', 'UD NO IMPORTA', 'volteck.jpg', 'alka.jpg'),
(14, 'a', 'Grqstric2.jpg', '8798787987', '1200', '2200', 'a', 'a', 'a', 'cebion.jpg', ''),
(15, 'PAQTE', 'alka.jpg', '789798798798', '1', '1', '1', '1', '1', 'cebion.jpg', 'antifludes2.jpg'),
(16, 'SUPOSITORIO', 'Grqstric2.jpg', '111111111111', '1000', '10000', 'POR LA BOCA NO55', 'ABANERO55', 'RELAJARSE55', 'gastric.jpg', 'volteck.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_tipo_acceso_usuario`
--

CREATE TABLE `t_tipo_acceso_usuario` (
  `id_tipo_user` int(11) NOT NULL,
  `nombre_tipo_user` varchar(50) DEFAULT NULL,
  `fecha_registro_tipo_acceso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios_general`
--

CREATE TABLE `t_usuarios_general` (
  `id_user_general` int(11) NOT NULL,
  `nombre_user_general` varchar(200) DEFAULT NULL,
  `numero_identificacion` varchar(80) DEFAULT NULL,
  `telefono1` varchar(25) DEFAULT NULL,
  `telefono2` varchar(25) DEFAULT NULL,
  `email_general` varchar(150) DEFAULT NULL,
  `clave_user_general` varchar(150) DEFAULT NULL,
  `foto_perfil` varchar(350) DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL,
  `fecha_registro_user` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_usuarios_general`
--

INSERT INTO `t_usuarios_general` (`id_user_general`, `nombre_user_general`, `numero_identificacion`, `telefono1`, `telefono2`, `email_general`, `clave_user_general`, `foto_perfil`, `tipo_usuario`, `fecha_registro_user`) VALUES
(7, 'david', NULL, NULL, NULL, 'david@gmail.com', 'VkhQUmhEREpSS2Z0dUxYRkc0NW4wZz09', NULL, 1, '2021-08-03 21:19:32'),
(12, 'Alexa', NULL, NULL, NULL, 'alexa@hotmail.com', 'VkhQUmhEREpSS2Z0dUxYRkc0NW4wZz09', NULL, 2, '2021-08-11 23:33:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_contacto`
--
ALTER TABLE `t_contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `t_inventario_general_web`
--
ALTER TABLE `t_inventario_general_web`
  ADD PRIMARY KEY (`id_prod_inv`);

--
-- Indices de la tabla `t_tipo_acceso_usuario`
--
ALTER TABLE `t_tipo_acceso_usuario`
  ADD PRIMARY KEY (`id_tipo_user`);

--
-- Indices de la tabla `t_usuarios_general`
--
ALTER TABLE `t_usuarios_general`
  ADD PRIMARY KEY (`id_user_general`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_contacto`
--
ALTER TABLE `t_contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `t_inventario_general_web`
--
ALTER TABLE `t_inventario_general_web`
  MODIFY `id_prod_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `t_tipo_acceso_usuario`
--
ALTER TABLE `t_tipo_acceso_usuario`
  MODIFY `id_tipo_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `t_usuarios_general`
--
ALTER TABLE `t_usuarios_general`
  MODIFY `id_user_general` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
