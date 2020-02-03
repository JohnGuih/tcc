-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 11:15 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--
CREATE DATABASE IF NOT EXISTS `tcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tcc`;

-- --------------------------------------------------------

--
-- Table structure for table `doencas`
--

CREATE TABLE `doencas` (
  `doenca` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doencas`
--

INSERT INTO `doencas` (`doenca`) VALUES
('Cancer'),
('Gripe'),
('Hipoglicemia'),
('Rinite alergica');

-- --------------------------------------------------------

--
-- Table structure for table `sintomadoenca`
--

CREATE TABLE `sintomadoenca` (
  `id` int(11) NOT NULL,
  `sintoma` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doenca` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sintomadoenca`
--

INSERT INTO `sintomadoenca` (`id`, `sintoma`, `doenca`) VALUES
(64, 'formigamento', 'Rinite alergica'),
(63, 'coceira', 'Rinite alergica'),
(62, 'espirro', 'Rinite alergica'),
(61, 'dor', 'Hipoglicemia'),
(55, 'coceira', 'Cancer'),
(54, 'formigamento', 'Cancer'),
(53, 'dor', 'Cancer'),
(52, 'sudorese', 'Cancer'),
(51, 'espirro', 'Cancer'),
(50, 'tosse', 'Cancer'),
(60, 'formigamento', 'Hipoglicemia'),
(59, 'sudorese', 'Hipoglicemia'),
(58, 'dor', 'Gripe'),
(57, 'espirro', 'Gripe'),
(56, 'tosse', 'Gripe');

-- --------------------------------------------------------

--
-- Table structure for table `sintomas`
--

CREATE TABLE `sintomas` (
  `sintoma` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sintomas`
--

INSERT INTO `sintomas` (`sintoma`) VALUES
('coceira'),
('dor'),
('espirro'),
('formigamento'),
('sudorese'),
('tosse');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `nascimento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `sangue` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`email`, `senha`, `nome`, `sobrenome`, `sexo`, `nascimento`, `peso`, `altura`, `sangue`, `id`) VALUES
('joaopessanhaalves@gmail.com', '123', 'João Guilherme', 'Pessanha Alves', 'M', '2000-05-17', 60, 180, 'O-', 1),
('joaopa17@gmail.com', '123', 'João', 'Guilherme', 'M', '2000-05-17', 60, 180, 'AB+', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doencas`
--
ALTER TABLE `doencas`
  ADD PRIMARY KEY (`doenca`);

--
-- Indexes for table `sintomadoenca`
--
ALTER TABLE `sintomadoenca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sintoma` (`sintoma`),
  ADD KEY `doenca` (`doenca`);

--
-- Indexes for table `sintomas`
--
ALTER TABLE `sintomas`
  ADD PRIMARY KEY (`sintoma`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sintomadoenca`
--
ALTER TABLE `sintomadoenca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
