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
-- Banco de Dados: `escola`
--
CREATE DATABASE `escola` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `escola`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `curso` int(11) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `curso`) VALUES
(5, 'Ricardo Odracir', 3),
(6, 'Larissa Cristina', 2),
(8, 'Luiz Miguel', 1),
(9, 'Assiral', 7),
(12, 'Megatron', 5),
(15, 'Fusca', 1),
(63, 'Ziul Leugim Iludraj Etiel', 9),
(85, 'Alemãozinho', 4),
(100, 'Zoraia aiaroz', 3),
(666, 'Unkindle One', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `periodo` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `periodo`) VALUES
(1, 'Informática', 'Noturno'),
(2, 'Meio-Ambiente', 'Integral'),
(3, 'AULA DE MATO', 'Vespertino'),
(4, 'Processamento de dados', 'Noturno'),
(5, 'Mecatrônica', 'Integral'),
(6, 'Informática para internet', 'Noturno'),
(7, 'Nutrição', 'Vespertino'),
(8, 'EletroTécnica', 'Integral'),
(9, 'edificações', 'Noturno');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
