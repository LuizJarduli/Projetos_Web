-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Set-2018 às 13:08
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
-- Database: `hotwheels`
--
CREATE DATABASE IF NOT EXISTS `hotwheels` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `hotwheels`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `idcarrinho` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `imgcarrinho` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `preco` float NOT NULL,
  `qtdcarrinho` int(11) NOT NULL,
  PRIMARY KEY (`idcarrinho`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`idcarrinho`, `nome`, `imgcarrinho`, `preco`, `qtdcarrinho`) VALUES
(1, 'evil racer', 'img/1536991967.jpg', 10, 10),
(2, 'Dodge Charger RT', 'img/1536993269.jpg', 15, 6),
(3, 'Amarelo Genérico', 'img/1536993918.jpg', 15, 5),
(4, 'Lamborguini Yellow', 'img/1536994155.jpg', 100, 10),
(7, 'caminhao', 'img/1537016642.jpg', 16, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `comprador` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `datacompra` timestamp NOT NULL,
  `idcarrinho` int(11) NOT NULL,
  `valor` float NOT NULL,
  `pago` bit(1) NOT NULL,
  PRIMARY KEY (`idpedido`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idpedido`, `comprador`, `datacompra`, `idcarrinho`, `valor`, `pago`) VALUES
(1, 'Luiz', '2018-09-15 09:21:46', 1, 10, b'1'),
(2, 'joao luiz', '2018-09-15 09:23:01', 1, 10, b'1'),
(3, 'Joel luiz', '2018-09-15 09:27:22', 1, 10, b'1'),
(4, 'asdadasdad', '2018-09-15 09:31:58', 2, 15, b'0'),
(5, 'antonio luiz', '2018-09-15 09:41:08', 1, 10, b'0'),
(6, 'Luiz miguel', '2018-09-15 09:43:59', 1, 10, b'0'),
(11, 'adasdasda', '2018-09-15 10:00:15', 1, 10, b'0'),
(18, '654654654654', '2018-09-15 10:31:36', 2, 15, b'0'),
(20, 'bartolomeu luiz', '2018-09-15 10:34:31', 4, 100, b'1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
