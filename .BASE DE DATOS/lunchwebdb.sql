-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 10:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lunchwebdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE `administradores` (
  `ID_administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` (`ID_administrador`) VALUES
(34),
(35);

-- --------------------------------------------------------

--
-- Table structure for table `almuerzos`
--

CREATE TABLE `almuerzos` (
  `ID_almuerzo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `almuerzos`
--

INSERT INTO `almuerzos` (`ID_almuerzo`, `nombre`, `descripcion`) VALUES
(1, 'Carne molida', 'fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet'),
(2, 'Carne asada', 'tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi'),
(3, 'Carne bistec', 'accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam'),
(4, 'Carne frita', 'ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit'),
(5, 'Carne a la plancha', 'aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi'),
(6, 'Carne guisada', 'sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus'),
(7, 'Pollo asada', 'varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non'),
(8, 'Pollo bistec', 'nullam orci pede venenatis non sodales sed tincidunt eu felis fusce'),
(9, 'Pollo frita', 'mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed'),
(10, 'Pollo a la plancha', 'maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum'),
(11, 'Pollo guisada', 'adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum'),
(12, 'Cerdo asada', 'rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta'),
(13, 'Cerdo bistec', 'ac est lacinia nisi venenatis tristique fusce congue diam id'),
(14, 'Cerdo frita', 'pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu'),
(15, 'Cerdo a la plancha', 'sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue'),
(16, 'Cerdo guisada', 'luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est'),
(17, 'Arroz de pollo', 'turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula'),
(18, 'Arroz trifasico', 'aliquet massa id lobortis convallis tortor risus dapibus augue vel'),
(19, 'Arroz de cerdo', 'donec dapibus duis at velit eu est congue elementum in hac'),
(20, 'Pescado', 'curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor');

-- --------------------------------------------------------

--
-- Table structure for table `almuerzos_en_menus`
--

CREATE TABLE `almuerzos_en_menus` (
  `ID_menu` int(11) NOT NULL,
  `ID_almuerzo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `almuerzos_en_menus`
--

INSERT INTO `almuerzos_en_menus` (`ID_menu`, `ID_almuerzo`) VALUES
(3, 1),
(4, 2),
(2, 3),
(3, 4),
(2, 5),
(2, 6),
(1, 7),
(2, 8),
(3, 9),
(2, 10),
(5, 11),
(2, 12),
(3, 13),
(2, 14),
(5, 15),
(2, 16),
(3, 17),
(3, 18),
(5, 19),
(3, 20),
(3, 1),
(2, 2),
(3, 3),
(5, 4),
(1, 5),
(4, 6),
(4, 7),
(1, 8),
(5, 9),
(5, 10),
(2, 11),
(4, 12),
(2, 13),
(2, 14),
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `calificaciones`
--

CREATE TABLE `calificaciones` (
  `ID_calificación` int(11) NOT NULL,
  `ID_estudiante` int(11) NOT NULL,
  `ID_almuerzo` int(11) NOT NULL,
  `calificación` int(11) NOT NULL,
  `descripción` varchar(255) DEFAULT NULL,
  `fecha_calificación` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calificaciones`
--

INSERT INTO `calificaciones` (`ID_calificación`, `ID_estudiante`, `ID_almuerzo`, `calificación`, `descripción`, `fecha_calificación`) VALUES
(1, 25, 17, 1, 'velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum', '2023-12-08'),
(2, 23, 4, 2, 'pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget', '2023-12-14'),
(3, 17, 14, 0, 'volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed', '2023-12-08'),
(4, 13, 2, 5, 'nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh in', '2023-06-21'),
(5, 17, 18, 3, 'donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia', '2023-09-15'),
(6, 33, 1, 1, 'ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est', '2023-11-21'),
(7, 28, 19, 2, 'ac lobortis vel dapibus at diam nam', '2023-02-13'),
(8, 32, 19, 2, 'augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus', '2023-02-18'),
(9, 25, 19, 4, 'ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam', '2023-07-09'),
(10, 25, 11, 0, 'luctus et ultrices posuere cubilia curae duis', '2023-02-02'),
(11, 19, 14, 0, 'tempus vivamus in felis eu sapien cursus vestibulum proin eu mi', '2023-02-25'),
(12, 32, 6, 1, 'pellentesque volutpat dui maecenas tristique est et', '2023-01-08'),
(13, 19, 8, 4, 'lacinia eget tincidunt eget tempus vel', '2023-02-22'),
(14, 6, 5, 1, 'augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent', '2023-01-26'),
(15, 6, 6, 5, 'porttitor id consequat in consequat', '2023-06-17'),
(16, 24, 4, 2, 'ut mauris eget massa tempor convallis nulla neque libero convallis', '2023-12-20'),
(17, 9, 4, 0, 'amet lobortis sapien sapien non mi integer ac', '2023-02-23'),
(18, 6, 8, 2, 'curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien', '2023-07-18'),
(19, 32, 14, 1, 'turpis elementum ligula vehicula consequat morbi a ipsum integer a', '2023-04-22'),
(20, 25, 6, 4, 'pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit', '2023-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `donaciones`
--

CREATE TABLE `donaciones` (
  `ID_donación` int(11) NOT NULL,
  `ID_donante` int(11) NOT NULL,
  `ID_beneficiario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `ID_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donaciones`
--

INSERT INTO `donaciones` (`ID_donación`, `ID_donante`, `ID_beneficiario`, `fecha`, `hora`, `ID_estado`) VALUES
(1, 12, 1, '2023-05-03', '04:28:12', 3),
(2, 3, 2, '2023-01-13', '02:46:42', 1),
(3, 25, 3, '2023-09-19', '12:25:47', 1),
(4, 7, 4, '2023-11-06', '03:19:37', 3),
(5, 27, 5, '2023-07-16', '21:26:46', 1),
(6, 10, 6, '2023-04-18', '20:03:28', 3),
(7, 14, 7, '2023-07-23', '19:22:29', 3),
(8, 10, 8, '2023-03-30', '19:34:12', 3),
(9, 11, 9, '2023-12-22', '11:44:37', 3),
(10, 5, 10, '2023-05-29', '19:16:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `días_almuerzos`
--

CREATE TABLE `días_almuerzos` (
  `ID_Día` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `ID_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `días_almuerzos`
--

INSERT INTO `días_almuerzos` (`ID_Día`, `nombre`, `ID_menu`) VALUES
(1, 'Lunes', 1),
(2, 'Martes', 2),
(3, 'Miercoles', 3),
(4, 'Jueves', 4),
(5, 'Viernes', 5);

-- --------------------------------------------------------

--
-- Table structure for table `días_almuerzos_estudiantes`
--

CREATE TABLE `días_almuerzos_estudiantes` (
  `ID_dia` int(11) NOT NULL,
  `ID_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `días_almuerzos_estudiantes`
--

INSERT INTO `días_almuerzos_estudiantes` (`ID_dia`, `ID_estudiante`) VALUES
(3, 1),
(4, 2),
(4, 3),
(5, 4),
(3, 5),
(4, 6),
(2, 7),
(3, 8),
(1, 9),
(4, 10),
(3, 11),
(3, 12),
(1, 13),
(5, 14),
(5, 15),
(2, 16),
(4, 17),
(4, 18),
(3, 19),
(4, 20),
(1, 21),
(5, 22),
(4, 23),
(3, 24),
(1, 25),
(2, 26),
(1, 27),
(2, 28),
(3, 29),
(4, 30),
(5, 31),
(3, 32),
(1, 33),
(5, 1),
(2, 2),
(3, 3),
(2, 4),
(4, 5),
(5, 6),
(3, 7),
(4, 8),
(4, 9),
(5, 10),
(4, 11),
(4, 12),
(2, 13),
(4, 14),
(4, 15),
(3, 16),
(2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE `estados` (
  `ID_estado` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`ID_estado`, `nombre`) VALUES
(1, 'Disponible'),
(2, 'En curso'),
(3, 'Recibido');

-- --------------------------------------------------------

--
-- Table structure for table `estados_donaciones`
--

CREATE TABLE `estados_donaciones` (
  `ID_donación` int(11) NOT NULL,
  `ID_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estados_donaciones`
--

INSERT INTO `estados_donaciones` (`ID_donación`, `ID_estado`) VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 3),
(6, 2),
(7, 1),
(8, 1),
(9, 2),
(10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `ID_estudiante` int(11) NOT NULL,
  `ID_Programa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`ID_estudiante`, `ID_Programa`) VALUES
(12, 1),
(17, 1),
(19, 1),
(32, 1),
(4, 2),
(7, 2),
(14, 2),
(15, 2),
(16, 2),
(21, 2),
(33, 2),
(1, 3),
(5, 3),
(11, 3),
(20, 3),
(25, 4),
(28, 4),
(31, 4),
(2, 5),
(3, 5),
(9, 5),
(13, 5),
(26, 5),
(29, 5),
(23, 6),
(24, 6),
(27, 6),
(8, 7),
(10, 7),
(18, 7),
(30, 7),
(6, 8),
(22, 8);

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes_en_fila`
--

CREATE TABLE `estudiantes_en_fila` (
  `ID_estudiante` int(11) NOT NULL,
  `ID_fila` int(11) NOT NULL,
  `turno` int(11) NOT NULL,
  `hora_ingreso` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estudiantes_en_fila`
--

INSERT INTO `estudiantes_en_fila` (`ID_estudiante`, `ID_fila`, `turno`, `hora_ingreso`) VALUES
(1, 1, 1, '19:58:21'),
(2, 1, 2, '20:00:21'),
(3, 1, 3, '20:01:21'),
(4, 1, 4, '20:02:21'),
(5, 1, 5, '20:03:21'),
(6, 1, 6, '20:04:21'),
(7, 1, 7, '20:05:21'),
(8, 1, 8, '20:06:21'),
(9, 1, 9, '20:07:21'),
(10, 1, 10, '20:08:21'),
(11, 1, 11, '20:09:21'),
(12, 1, 12, '20:10:21'),
(13, 1, 13, '20:11:21'),
(14, 1, 14, '20:12:21'),
(15, 1, 15, '20:13:21'),
(16, 1, 16, '20:14:21'),
(17, 1, 17, '20:15:21'),
(18, 1, 18, '20:16:21'),
(19, 1, 19, '20:17:21'),
(20, 1, 20, '20:18:21'),
(21, 1, 21, '20:19:21'),
(22, 1, 22, '20:20:21'),
(23, 1, 23, '20:21:21'),
(24, 1, 24, '20:22:21'),
(25, 1, 25, '20:23:21'),
(26, 1, 26, '20:24:21'),
(27, 1, 27, '20:25:21'),
(28, 1, 28, '20:26:21'),
(29, 1, 29, '20:27:21'),
(30, 1, 30, '20:28:21'),
(31, 1, 31, '20:29:21'),
(32, 1, 32, '20:30:21'),
(33, 1, 33, '20:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `facultades`
--

CREATE TABLE `facultades` (
  `ID_facultad` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultades`
--

INSERT INTO `facultades` (`ID_facultad`, `nombre`) VALUES
(3, 'Ciencias Básicas'),
(6, 'Ciencias de la Educación'),
(5, 'Ciencias de la Salud'),
(1, 'Ciencias Empresariales y Económicas'),
(4, 'Humanidades'),
(2, 'Ingeniería');

-- --------------------------------------------------------

--
-- Table structure for table `filas_virtuales`
--

CREATE TABLE `filas_virtuales` (
  `ID_fila` int(11) NOT NULL,
  `fecha_realización` date NOT NULL,
  `num_personas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filas_virtuales`
--

INSERT INTO `filas_virtuales` (`ID_fila`, `fecha_realización`, `num_personas`) VALUES
(1, '2023-10-12', 12);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `ID_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`ID_menu`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Table structure for table `modificaciones_menus`
--

CREATE TABLE `modificaciones_menus` (
  `ID_administrador` int(11) NOT NULL,
  `ID_menu` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modificaciones_menus`
--

INSERT INTO `modificaciones_menus` (`ID_administrador`, `ID_menu`, `fecha`, `hora`) VALUES
(35, 2, '2023-11-21', '19:53:49'),
(34, 1, '2023-07-29', '19:11:20'),
(35, 5, '2023-07-29', '09:46:58'),
(34, 3, '2023-03-07', '21:55:43'),
(35, 4, '2023-03-26', '19:56:19'),
(34, 2, '2023-05-01', '06:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `programas`
--

CREATE TABLE `programas` (
  `ID_programa` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `ID_facultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programas`
--

INSERT INTO `programas` (`ID_programa`, `nombre`, `ID_facultad`) VALUES
(1, 'Administración de Empresas', 1),
(2, 'Agronómica', 2),
(3, 'Biología', 3),
(4, 'Antropología', 4),
(5, 'Enfermería', 5),
(6, 'Licenciatura en Artes', 6),
(7, 'Contaduría Pública', 1),
(8, 'Sistemas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_user` int(11) NOT NULL,
  `Nombre` varchar(32) NOT NULL,
  `Apellido` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Contraseña` varchar(32) NOT NULL,
  `Celular` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID_user`, `Nombre`, `Apellido`, `Email`, `Contraseña`, `Celular`) VALUES
(1, 'Meredeth', 'Tregensoe', 'mtregensoe0@sphinn.com', 'sG2@Ri4L@HkpM#k', '3045901317'),
(2, 'Brook', 'Petre', 'bpetre1@imgur.com', 'tF0$!hIPZl7W?Fc', '3101541755'),
(3, 'Johann', 'Rowth', 'jrowth2@prweb.com', 'zD5<7yN79(+', '3003000313'),
(4, 'Alvinia', 'Cotsford', 'acotsford3@amazon.de', 'sA9_4i8<N<', '3258404652'),
(5, 'Fair', 'Kornyshev', 'fkornyshev4@yellowbook.com', 'xJ7%N07eu6', '3110661562'),
(6, 'Doralyn', 'Revington', 'drevington5@yellowpages.com', 'nX4@AT<m', '3026113197'),
(7, 'Mercie', 'Tabord', 'mtabord6@wp.com', 'jV9?U?x>B>', '3080877480'),
(8, 'Demetria', 'Brickwood', 'dbrickwood7@woothemes.com', 'vN9~E(}su\"5#nf22', '3096664279'),
(9, 'Aubert', 'Willetts', 'awilletts8@amazon.com', 'sB3\"rES\'C3mq&sCN', '3249405360'),
(10, 'Oriana', 'Linnane', 'olinnane9@disqus.com', 'xO6*{3<=WYyBHX6', '3247655344'),
(11, 'Lark', 'Alben', 'lalbena@icio.us', 'dY2,BLB+|_', '3181177985'),
(12, 'Doe', 'Goodboddy', 'dgoodboddyb@fastcompany.com', 'vL2(L1B~qf\"', '3220062201'),
(13, 'Allyn', 'Manntschke', 'amanntschkec@pcworld.com', 'qN0*qm,W', '3009160346'),
(14, 'Lanna', 'Keneforde', 'lkeneforded@wisc.edu', 'mT3!pYOzYgUBoG(', '3068250876'),
(15, 'Lannie', 'Barttrum', 'lbarttrume@moonfruit.com', 'jG2?1dy4*BIERA', '3033494550'),
(16, 'Augusto', 'Crowley', 'acrowleyf@constantcontact.com', 'lS5_&EX~p', '3095081625'),
(17, 'Lesly', 'Wyborn', 'lwyborng@google.com.br', 'nU4*j=Pe{', '3010253591'),
(18, 'Tiena', 'Olenov', 'tolenovh@w3.org', 'lY7@lX%Aj<@7', '3050986937'),
(19, 'Peirce', 'Heffron', 'pheffroni@blogspot.com', 'tS0/Sk$*zah&TC(', '3248477839'),
(20, 'Urbain', 'Guillem', 'uguillemj@nsw.gov.au', 'mX8!&8?E2>', '3238543456'),
(21, 'Lorelle', 'Gumme', 'lgummek@bandcamp.com', 'rS9?Eg4rA?rB', '3030539242'),
(22, 'Weylin', 'Easen', 'weasenl@pcworld.com', 'mH7!=s{To', '3095323473'),
(23, 'Deane', 'Sewter', 'dsewterm@intel.com', 'fI0/b+`oO', '3128306573'),
(24, 'Justen', 'Napleton', 'jnapletonn@canalblog.com', 'eK4(bnZUTa781o$', '3075882986'),
(25, 'Siana', 'Beckenham', 'e@e.com', '123456', '3099582861'),
(26, 'Alwyn', 'MacMorland', 'amacmorlandp@cloudflare.com', 'sE4+@ZK_', '3017213485'),
(27, 'Talbert', 'Engledow', 'tengledowq@geocities.com', 'zD7&}gLp', '3096383924'),
(28, 'Clea', 'Grant', 'cgrantr@japanpost.jp', 'yU5\'a/KH', '3135476257'),
(29, 'Marcello', 'Phillput', 'mphillputs@acquirethisname.com', 'uM9#IdL/', '3140913472'),
(30, 'Wilmar', 'Vaadeland', 'wvaadelandt@simplemachines.org', 'zK9`7vtm', '3105026028'),
(31, 'Ami', 'Phipard-Shears', 'aphipardshearsu@clickbank.net', 'rG3)fcr=sZW', '3143642005'),
(32, 'Ceil', 'Newick', 'cnewickv@mysql.com', 'mR1~V4lCTuoT$', '3176499209'),
(33, 'Falkner', 'Sheddan', 'fsheddanw@multiply.com', 'hL9%Bmfw+', '3021163292'),
(34, 'Verena', 'Heather', 'vheatherx@github.io', 'xN6\'5@1GXzb<Te', '3077749622'),
(35, 'Suzann', 'Darbishire', 'sdarbishirey@cloudflare.com', 'aR7/T=VR{vy', '3088604856');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`ID_administrador`);

--
-- Indexes for table `almuerzos`
--
ALTER TABLE `almuerzos`
  ADD PRIMARY KEY (`ID_almuerzo`);

--
-- Indexes for table `almuerzos_en_menus`
--
ALTER TABLE `almuerzos_en_menus`
  ADD KEY `Almuerzos_En_Menu_fk0` (`ID_menu`),
  ADD KEY `Almuerzos_En_Menu_fk1` (`ID_almuerzo`);

--
-- Indexes for table `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`ID_calificación`),
  ADD KEY `Calificacion_fk0` (`ID_estudiante`),
  ADD KEY `Calificacion_fk1` (`ID_almuerzo`);

--
-- Indexes for table `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`ID_donación`),
  ADD KEY `Donación_fk0` (`ID_donante`),
  ADD KEY `Donación_fk1` (`ID_beneficiario`),
  ADD KEY `Donación_fk2` (`ID_estado`);

--
-- Indexes for table `días_almuerzos`
--
ALTER TABLE `días_almuerzos`
  ADD PRIMARY KEY (`ID_Día`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `Dia_almuerzo_fk0` (`ID_menu`);

--
-- Indexes for table `días_almuerzos_estudiantes`
--
ALTER TABLE `días_almuerzos_estudiantes`
  ADD KEY `Dias_Almuerzos_Estudiantes_fk0` (`ID_dia`),
  ADD KEY `Dias_Almuerzos_Estudiantes_fk1` (`ID_estudiante`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`ID_estado`);

--
-- Indexes for table `estados_donaciones`
--
ALTER TABLE `estados_donaciones`
  ADD KEY `Estados_Donaciones_fk0` (`ID_donación`),
  ADD KEY `Estados_Donaciones_fk1` (`ID_estado`);

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`ID_estudiante`),
  ADD KEY `Estudiante_fk2` (`ID_Programa`);

--
-- Indexes for table `estudiantes_en_fila`
--
ALTER TABLE `estudiantes_en_fila`
  ADD KEY `Estudiantes_En_Fila_fk0` (`ID_estudiante`),
  ADD KEY `Estudiantes_En_Fila_fk1` (`ID_fila`);

--
-- Indexes for table `facultades`
--
ALTER TABLE `facultades`
  ADD PRIMARY KEY (`ID_facultad`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `filas_virtuales`
--
ALTER TABLE `filas_virtuales`
  ADD PRIMARY KEY (`ID_fila`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`ID_menu`);

--
-- Indexes for table `modificaciones_menus`
--
ALTER TABLE `modificaciones_menus`
  ADD KEY `Modificaciones_Menu_fk0` (`ID_administrador`),
  ADD KEY `Modificaciones_Menu_fk1` (`ID_menu`);

--
-- Indexes for table `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`ID_programa`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `Programa_fk0` (`ID_facultad`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_user`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Celular` (`Celular`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `almuerzos`
--
ALTER TABLE `almuerzos`
  MODIFY `ID_almuerzo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `ID_calificación` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `ID_donación` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `ID_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `ID_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `facultades`
--
ALTER TABLE `facultades`
  MODIFY `ID_facultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `filas_virtuales`
--
ALTER TABLE `filas_virtuales`
  MODIFY `ID_fila` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `ID_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `programas`
--
ALTER TABLE `programas`
  MODIFY `ID_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `almuerzos_en_menus`
--
ALTER TABLE `almuerzos_en_menus`
  ADD CONSTRAINT `Almuerzos_En_Menu_fk0` FOREIGN KEY (`ID_menu`) REFERENCES `menus` (`ID_menu`),
  ADD CONSTRAINT `Almuerzos_En_Menu_fk1` FOREIGN KEY (`ID_almuerzo`) REFERENCES `almuerzos` (`ID_almuerzo`);

--
-- Constraints for table `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `Calificacion_fk0` FOREIGN KEY (`ID_estudiante`) REFERENCES `estudiantes` (`ID_estudiante`),
  ADD CONSTRAINT `Calificacion_fk1` FOREIGN KEY (`ID_almuerzo`) REFERENCES `almuerzos` (`ID_almuerzo`);

--
-- Constraints for table `donaciones`
--
ALTER TABLE `donaciones`
  ADD CONSTRAINT `Donación_fk0` FOREIGN KEY (`ID_donante`) REFERENCES `estudiantes` (`ID_estudiante`),
  ADD CONSTRAINT `Donación_fk1` FOREIGN KEY (`ID_beneficiario`) REFERENCES `estudiantes` (`ID_estudiante`),
  ADD CONSTRAINT `Donación_fk2` FOREIGN KEY (`ID_estado`) REFERENCES `estados` (`ID_estado`);

--
-- Constraints for table `días_almuerzos`
--
ALTER TABLE `días_almuerzos`
  ADD CONSTRAINT `Dia_almuerzo_fk0` FOREIGN KEY (`ID_menu`) REFERENCES `menus` (`ID_menu`);

--
-- Constraints for table `días_almuerzos_estudiantes`
--
ALTER TABLE `días_almuerzos_estudiantes`
  ADD CONSTRAINT `Dias_Almuerzos_Estudiantes_fk0` FOREIGN KEY (`ID_dia`) REFERENCES `días_almuerzos` (`ID_Día`),
  ADD CONSTRAINT `Dias_Almuerzos_Estudiantes_fk1` FOREIGN KEY (`ID_estudiante`) REFERENCES `estudiantes` (`ID_estudiante`);

--
-- Constraints for table `estados_donaciones`
--
ALTER TABLE `estados_donaciones`
  ADD CONSTRAINT `Estados_Donaciones_fk0` FOREIGN KEY (`ID_donación`) REFERENCES `donaciones` (`ID_donación`),
  ADD CONSTRAINT `Estados_Donaciones_fk1` FOREIGN KEY (`ID_estado`) REFERENCES `estados` (`ID_estado`);

--
-- Constraints for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `Estudiante_fk2` FOREIGN KEY (`ID_Programa`) REFERENCES `programas` (`ID_programa`);

--
-- Constraints for table `estudiantes_en_fila`
--
ALTER TABLE `estudiantes_en_fila`
  ADD CONSTRAINT `Estudiantes_En_Fila_fk0` FOREIGN KEY (`ID_estudiante`) REFERENCES `estudiantes` (`ID_estudiante`),
  ADD CONSTRAINT `Estudiantes_En_Fila_fk1` FOREIGN KEY (`ID_fila`) REFERENCES `filas_virtuales` (`ID_fila`);

--
-- Constraints for table `modificaciones_menus`
--
ALTER TABLE `modificaciones_menus`
  ADD CONSTRAINT `Modificaciones_Menu_fk0` FOREIGN KEY (`ID_administrador`) REFERENCES `administradores` (`ID_administrador`),
  ADD CONSTRAINT `Modificaciones_Menu_fk1` FOREIGN KEY (`ID_menu`) REFERENCES `menus` (`ID_menu`);

--
-- Constraints for table `programas`
--
ALTER TABLE `programas`
  ADD CONSTRAINT `Programa_fk0` FOREIGN KEY (`ID_facultad`) REFERENCES `facultades` (`ID_facultad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
