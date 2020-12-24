-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `loja`
--
CREATE DATABASE `loja` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `modelo` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `preco` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `marca`, `modelo`, `preco`, `foto`) VALUES
(3, 'Acer', 'carroProcessador', '1589', 'img/1524529055.jpg'),
(4, 'ferrari Acer', 'Processador de 8 cavalÃºcleos', '55000', 'img/1524529283.jpg'),
(5, 'Samsung', 'lixo2000', '599', 'img/1524529338.jpg'),
(6, 'gamer Laptop', 'V8', '503.36', 'img/1524529408.jpg'),
(8, 'compaq', 't2000', '2000', 'img/1524530026.jpg'),
(9, 'Koalacer', 'koad-core', '8000', 'img/1524537396.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
