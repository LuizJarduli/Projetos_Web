-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24-Jun-2018 às 04:25
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
-- Database: `lanchonet`
--
CREATE DATABASE IF NOT EXISTS `lanchonet` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `lanchonet`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `nome_usuario` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `cpf` char(11) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_usuario` (`nome_usuario`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `email`, `nome_usuario`, `senha`, `cpf`) VALUES
(1, 'admin2', 'admin2@admin.com', 'admin2', 'admin2', '89999999999'),
(2, 'Luiz Miguel', 'luiz.leite43@etec.sp.gov.br', 'LuizMiguel', '123456', '12312312312'),
(9, 'admin', 'admin@admin', '12345678912', 'admin', '12345678912'),
(4, 'lanchoNet', 'Lancho@fome.com', 'LanchoNET', '123456', '78978978912'),
(5, 'Larissa Cristina', 'larissa@assiral.com', 'LarissaC', '654321', '45645645612');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebidas`
--

DROP TABLE IF EXISTS `bebidas`;
CREATE TABLE IF NOT EXISTS `bebidas` (
  `id_bebida` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `imgBebida` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `fornecedor` int(11) NOT NULL,
  `data_fab` date NOT NULL,
  `data_val` date NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`id_bebida`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `bebidas`
--

INSERT INTO `bebidas` (`id_bebida`, `nome`, `imgBebida`, `fornecedor`, `data_fab`, `data_val`, `preco`) VALUES
(8, 'coca cola', 'img/1529745310.jpg', 1, '2018-06-10', '2018-06-22', 9),
(2, 'Guaraná antárctica-lata', 'img/1529687988.jpg', 4, '2018-06-18', '2018-06-30', 5),
(3, 'Fanta Guaraná', 'img/1529744995.jpg', 1, '2018-06-12', '2018-07-17', 6),
(4, 'fanta laranja', 'img/1529745021.jpg', 1, '2018-06-11', '2018-09-19', 6),
(5, 'sukita lata', 'img/1529745051.jpg', 2, '2018-06-13', '2018-08-23', 9),
(6, 'coca zero lata', 'img/1529745133.jpg', 1, '2018-06-21', '2018-09-25', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `cnpj` char(14) COLLATE utf8_swedish_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id_fornecedor`),
  UNIQUE KEY `cnpj` (`cnpj`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_fornecedor`, `nome`, `cnpj`, `logo`) VALUES
(1, 'coca cola', '12312312312312', 'img/1529678216.jpg'),
(2, 'Yoki', '14565236525123', 'img/1529679416.jpg'),
(3, 'Sadia', '45645645645632', 'img/1529680437.jpg'),
(4, 'Guaraná', '65498732112365', 'img/1529687940.jpg'),
(5, 'Perdigão', '89674185296332', 'img/1529811675.jpg'),
(6, 'seara', '15915915915915', 'img/1529813384.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `prato` int(11) NOT NULL,
  `bebida` int(11) NOT NULL,
  `preco_total` float NOT NULL,
  `pago` bit(1) NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `nome`, `prato`, `bebida`, `preco_total`, `pago`) VALUES
(3, 'joao', 8, 6, 37, b'0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prato`
--

DROP TABLE IF EXISTS `prato`;
CREATE TABLE IF NOT EXISTS `prato` (
  `id_prato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `imgPrato` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `imgPrato2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `imgPrato3` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `descricao` varchar(500) COLLATE utf8_swedish_ci NOT NULL,
  `fornecedor` int(11) NOT NULL,
  `preco` float NOT NULL,
  `data_fab` date NOT NULL,
  `validade` date NOT NULL,
  PRIMARY KEY (`id_prato`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `prato`
--

INSERT INTO `prato` (`id_prato`, `nome`, `imgPrato`, `imgPrato2`, `imgPrato3`, `descricao`, `fornecedor`, `preco`, `data_fab`, `validade`) VALUES
(1, 'Virada Paulista', 'img/2018.06.22-14.54.31-0.jpg', 'img/2018.06.22-14.54.31-1.jpg', 'img/2018.06.22-14.54.31-2.jpg', '				           					           	Virado a Paulista Acompanha Arroz, Tutu de Feijão, Banana a Milanesa, Ovo Frito, Couve, Linguiça Grelhada, Bisteca de Porco e Torresmo.				           				           ', 2, 15, '2018-06-22', '2018-06-29'),
(6, 'Feijoada', 'img/2018.06.22-19.47.35-0.jpg', 'img/2018.06.22-19.47.35-1.jpg', 'img/2018.06.22-19.47.35-2.jpg', 'A feijoada à brasileira é um prato que consiste num guisado de feijões-pretos com vários tipos de carne de porco e de boi. É servida com farofa, arroz branco, couve refogada e laranja fatiada, entre outros acompanhamentos. Trata-se de um prato popular, típico da culinária brasileira.', 3, 16, '2018-06-21', '2018-06-23'),
(7, 'Lasanha', 'img/2018.06.22-19.48.43-0.jpg', 'img/2018.06.22-19.48.43-1.png', 'img/2018.06.22-19.48.44-2.jpg', 'Lasanha (lasagna em italiano) é tanto um tipo de massa em folhas (normalmente onduladas na América do Norte mas não na Itália), como também um prato, por vezes chamado lasanha ao forno, feito com camadas alternadas de massa, queijo e molho de carne.', 2, 50, '2018-06-21', '2018-06-29'),
(8, 'Espaguete', 'img/2018.06.23-01.38.00-0.jpg', 'img/2018.06.23-01.38.00-1.jpg', 'img/2018.06.23-01.38.00-2.jpg', 'Espaguete (português brasileiro) ou esparguete (português europeu) (do italiano spaghetti) ou macarronete é uma pasta alimentícia desidratada e dura à base de sêmola de trigo, consumida sob a forma de fios. Há vários tipos de espaguete conforme o seu diâmetro (spaghettone, spaghettino, capellini, vermicelli, vermicelloni).', 2, 30, '2018-06-21', '2018-06-24'),
(9, 'Nhoque', 'img/2018.06.24-01.14.11-0.jpg', 'img/2018.06.24-01.14.11-1.jpg', 'img/2018.06.24-01.14.11-2.jpg', 'O nhoque ou inhoque, também conhecidos no termo do italiano gnocco, plural , é uma massa alimentícia preparada a base de batata, farinha de trigo ou mandioca, típica da culinária da Itália que pode ser servido ao molho sugo, bolonhesa e branco.', 6, 30, '2018-06-21', '2018-09-07'),
(13, 'churros', 'img/2018.06.24-01.22.38-0.jpg', 'img/2018.06.24-01.22.38-1.jpg', 'img/2018.06.24-01.22.38-2.jpg', 'Este doce é preparado com massa a base de farinha de trigo e água, em formato cilíndrico e frito em óleo vegetal. Logo após, ele pode ser salpicado com uma camada de açúcar por fora (opcionalmente, também com canela). ', 5, 36, '2018-06-12', '2018-11-14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
