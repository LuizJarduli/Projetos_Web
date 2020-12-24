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
-- Banco de Dados: `rentacar`
--
CREATE DATABASE `rentacar` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `rentacar`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE IF NOT EXISTS `aluguel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_veiculo` int(11) NOT NULL,
  `valor_total` float NOT NULL,
  `data_retirada` date NOT NULL,
  `data_devolucao` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `aluguel`
--

INSERT INTO `aluguel` (`id`, `id_veiculo`, `valor_total`, `data_retirada`, `data_devolucao`) VALUES
(1, 10, 130, '2018-05-17', '2018-05-17'),
(2, 3, 74543200, '2018-05-11', '2018-05-11'),
(3, 9, 35184, '2018-05-07', '2018-05-13'),
(5, 11, 30, '2018-05-07', '2018-05-09'),
(7, 1, 18500, '2018-05-07', '2018-05-08'),
(9, 2, 277500, '2018-05-07', '2018-05-22'),
(10, 16, 1543690000, '2018-05-07', '2018-05-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE IF NOT EXISTS `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `placa` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `val_diaria` float NOT NULL,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `nome`, `placa`, `val_diaria`, `status`) VALUES
(1, 'Van -Tagem', 'Vi4G8m-Tr1P', 18500, b'0'),
(2, 'Van -Tagem', 'Vi4G8m-Tr1P', 18500, b'0'),
(3, 'Rótuils', '4CêLer4T10n', 18635800, b'0'),
(9, 'Caminhão Sem piloto', 'Cadjapoisdj-123', 5864, b'0'),
(10, 'Gato-Ajato', 'VrU-M2018', 13, b'0'),
(11, 'Siena-Fire', 'CSY-9600', 15, b'0'),
(12, 'Carro do batman', 'M0r-c3G0', 99999, b'1'),
(13, 'Carro Popular', 'Gol - 1234', 15000, b'1'),
(14, 'SprinterzinhaAzul', 'Blu-3Zul', 154623, b'1'),
(15, 'Kombi Branca', '231- KAJSD', 2131560, b'1'),
(16, 'Gou', 'sad-5456', 514565000, b'0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
