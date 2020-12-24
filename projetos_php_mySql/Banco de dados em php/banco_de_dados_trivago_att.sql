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
-- Banco de Dados: `trivago`
--
CREATE DATABASE `trivago` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `trivago`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quartos`
--

CREATE TABLE IF NOT EXISTS `quartos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `descricao` varchar(500) COLLATE utf8_swedish_ci NOT NULL,
  `diaria` float NOT NULL,
  `status` bit(1) NOT NULL,
  `foto1` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `foto2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `foto3` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `quartos`
--

INSERT INTO `quartos` (`id`, `nome`, `descricao`, `diaria`, `status`, `foto1`, `foto2`, `foto3`) VALUES
(1, 'Quarto pequeno', 'Muito pequeno mesmo!', 500, b'1', 'img/15263500810.jpg', 'img/15263500811.jpg', 'img/15263500812.jpg'),
(2, 'Quarto dourado', 'Apenas folheado', 10000, b'1', 'img/15263502970.jpg', 'img/15263502971.jpg', 'img/15263502972.jpg'),
(4, 'Quarto parede de janela', 'uma bela vista!', 158900, b'1', 'img/15263507160.jpg', 'img/15263507161.jpg', 'img/15263507162.jpg'),
(5, 'Quarto direto de Anaheim', 'Anaheim!', 15630, b'1', 'img/15263509940.jpg', 'img/15263509941.jpg', 'img/15263509942.jpg'),
(6, 'Quarto simples', '\nBem simples\n', 12, b'1', 'img/15263511780.jpg', 'img/15263511781.jpg', 'img/15263511782.jpg'),
(7, 'Quarto do mato', 'SÃ­tio Verde!', 560, b'1', 'img/15263515390.jpg', 'img/15263515391.jpg', 'img/15263515392.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_quarto` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `valor` float NOT NULL,
  `pago` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `id_quarto`, `checkin`, `checkout`, `valor`, `pago`) VALUES
(2, 6, '2018-05-24', '2018-05-26', 24, b'1'),
(3, 1, '2018-05-25', '2018-05-31', 3000, b'1'),
(4, 4, '2018-05-24', '2018-05-26', 317800, b'1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
