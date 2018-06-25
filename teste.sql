-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Jun-2018 às 17:38
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `telefone`, `created`, `modified`) VALUES
(8, 'teste', 'dadad@oiehoi', '0', '2018-04-16 17:32:01', NULL),
(9, 'teste', 'dadad@oiehoi', '0', '2018-04-16 17:32:08', NULL),
(7, 'teste', 'dadad@oiehoi', '0', '2018-04-16 17:31:51', NULL),
(6, 'teste', 'teteet@outlook.com', '0', '2018-04-16 15:54:19', NULL),
(11, 'FABIO OLIVEIRA SOUZA', 'vi.ni.cius4@hotmail.com', '12345', '2018-04-16 19:52:23', NULL),
(12, 'Fabio Oliveira Souza', 'joaopaulobenthin@hotmail.com', '991348086', '2018-04-16 19:57:51', NULL),
(13, 'teste', 'teste@hotmail.com', '9689595', '2018-04-16 19:58:05', NULL),
(14, '', 'vi.ni.cius5@hotmail.com', '789787879', '2018-04-16 20:21:13', NULL),
(15, '', 'vi.ni.cius5@hotmail.com', '789787879', '2018-04-16 20:21:59', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
