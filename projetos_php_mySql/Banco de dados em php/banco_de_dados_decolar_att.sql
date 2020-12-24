-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 08-Jun-2018 às 23:45
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decolar`
--
CREATE DATABASE IF NOT EXISTS `decolar` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `decolar`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aviao`
--

DROP TABLE IF EXISTS `aviao`;
CREATE TABLE IF NOT EXISTS `aviao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `lugares` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `aviao`
--

INSERT INTO `aviao` (`id`, `nome`, `lugares`) VALUES
(2, 'Malasia Airlines 355', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `passagem`
--

DROP TABLE IF EXISTS `passagem`;
CREATE TABLE IF NOT EXISTS `passagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `data_embarque` date NOT NULL,
  `destino` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `valor` float NOT NULL,
  `id_aviao` int(11) NOT NULL,
  `pago` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `passagem`
--

INSERT INTO `passagem` (`id`, `nome`, `data_embarque`, `destino`, `valor`, `id_aviao`, `pago`) VALUES
(1, 'Luiz Miguel Jarduli Leite', '2018-06-09', 'Paraguai', 15000, 2, b'1'),
(2, 'jacaré', '2018-06-09', 'piaui', 12356, 2, b'1'),
(4, 'ziul leugim iludraj etiel', '2018-06-09', 'macaré', 54654, 2, b'1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
