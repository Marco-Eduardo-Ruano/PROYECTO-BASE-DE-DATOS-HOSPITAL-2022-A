-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 05:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usuarios`
--

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

CREATE TABLE `citas` (
  `NOMBRE` varchar(100) NOT NULL,
  `ESPECIALIDAD` varchar(100) NOT NULL,
  `DOCTOR` varchar(100) NOT NULL,
  `DIA` varchar(100) NOT NULL,
  `MES` varchar(100) NOT NULL,
  `AÑO` varchar(100) NOT NULL,
  `HORA` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citas`
--

INSERT INTO `citas` (`NOMBRE`, `ESPECIALIDAD`, `DOCTOR`, `DIA`, `MES`, `AÑO`, `HORA`) VALUES
('0', 'Gastroenterologo', 'JOSUE FRANCISCO', '12', 'mayo', '2022', '2022'),
('0', 'Gastroenterologo', 'JOSUE FRANCISCO', '12', 'mayo', '2022', '2022'),
('juan jose', 'Gastroenterologo', 'JOSUE FRANCISCO', '12', 'mayo', '2022', '2022'),
('MARCO RUANO', 'Gastroenterologo', 'JOSUE FRANCISCO', '12', 'mayo', '2022', '2022'),
('Eduardo', 'Gastroenterologo', 'JOSUE FRANCISCO', '12', 'mayo', '2022', '2022'),
('Eduardo', 'Gastroenterologo', 'JOSUE FRANCISCO', '12', 'mayo', '2022', '6:00'),
('MARCO RUANO', 'Gastroenterologo', 'JOSUE FRANCISCO', '12', 'mayo', '2022', '5:30'),
('MARCO RUANO', 'Gastroenterologo', 'JOSUE FRANCISCO', '12', 'mayo', '2022', '6:00'),
('Ana Jazmin Guerrero Carlos', 'Gastroenterologo', 'Susana Hernandez Vargas', '12', 'mayo', '2022', '3:40');

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(50) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `CURP` varchar(100) NOT NULL,
  `DOMICILIO` varchar(100) NOT NULL,
  `AREA` varchar(100) NOT NULL,
  `DOCTOR` varchar(100) NOT NULL,
  `EXPEDIENTE` varchar(300) NOT NULL,
  `TELEFONO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`id`, `NOMBRE`, `CURP`, `DOMICILIO`, `AREA`, `DOCTOR`, `EXPEDIENTE`, `TELEFONO`) VALUES
(1, 'MARCO RUANO', 'RUVME981108HJ', 'ALVARO OBREGON 34', 'GASTROENTEROLOGO', 'JOSE FRANCISCO', 'DOLOR DE ESTOMAGO', '3323883167'),
(2, 'JUAN JOSE SANCHEZ HERNANDEZ', 'SHJJ9711HJM', 'ZAPOPAN #13', 'GASTROENTEROLOGO', 'JOSE FRANCISCO', 'DIARREA INFECCIOSA', '333382597'),
(3, 'AMERICA LIZETTE', 'AME9912DJFHKA', 'TONALA', 'REUMATOLOGA', 'CLAUDIA GOMEZ LOPEZ', 'TIENE REUMAS EN LAS MANOS, SE LE RECETO ANTI-REUMAS', '333445678'),
(4, 'ABRAHAM SALAS', 'ABHSAL28847JHD', 'TLAJOMULCO', 'CARDIOLOGIA', 'CHRISTOFER MENESES', 'CORAZON ROTO, SE RECOMIENDA ANTI-CORAZONES ROTOS', '33355667788'),
(5, 'LUIS SALCIDO', 'LUCZAJ9931KHJC', 'GUADALAJARA', 'PEDEATRIA', 'PAOLA DIAS ACEVES', 'SU HIJO ESTA MALO DE COVID Y YA SE LE DIO MEDICAMENTO', '3345689753'),
(6, 'Ana Jazmin Guerrero Carlos', 'ANMJJZT770421', 'ZAPOPAN', 'GASTROENTEROLOGO', 'Susana Hernandez Vargas', 'DOLOR DE ESTOMAGO', '3344857603');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(10) NOT NULL,
  `ESPECIALIDAD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usuario`, `contrasena`, `ESPECIALIDAD`) VALUES
(1, 'admin', '1234', NULL),
(2, 'doctor', '1234', NULL),
(3, 'Beatriz', '1234', 'RECEPCIONISTA '),
(4, 'Jose', '1234', 'GASTROENTEROLOGO'),
(5, 'Paola', '1234', 'PEDIATRIA'),
(6, 'Claudia ', '1234', 'REUMATOLOGA'),
(7, 'Christofer', '1234', 'CARDIOLOGO'),
(8, 'Susana', '1234', 'MEDICO GENERAL'),
(9, 'recepcionistaB', '1234', 'RECEPCIONISTA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
