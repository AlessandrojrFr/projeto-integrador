-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Ago-2023 às 16:57
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_dado`
--
CREATE DATABASE IF NOT EXISTS `banco_dado` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `banco_dado`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_produtos`
--

DROP TABLE IF EXISTS `cadastro_produtos`;
CREATE TABLE IF NOT EXISTS `cadastro_produtos` (
  `id_pedido` int(200) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_produtos`
--

INSERT INTO `cadastro_produtos` (`id_pedido`, `nome_produto`, `descricao`, `valor`, `arquivo_caminho`) VALUES
(1, 'akdkakdakdka', 'dadadadedaed', '222', 'dadadad'),
(2, 'tuezjk', 'eruzjrejz', 'jetjj', 'ererh'),
(3, 'edegwf', 'ewwegwge', 'wqqqrwwr', 'qqqww');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_pes`
--

DROP TABLE IF EXISTS `tabela_pes`;
CREATE TABLE IF NOT EXISTS `tabela_pes` (
  `id_pes` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `cpf` varchar(22) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `idade` varchar(200) NOT NULL,
  PRIMARY KEY (`id_pes`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabela_pes`
--

INSERT INTO `tabela_pes` (`id_pes`, `nome`, `email`, `cpf`, `senha`, `idade`) VALUES
(1, 'vital', 'matheusvital029@gmail.com', '', '4456642', '34'),
(2, 'matheus', 'zere@gmail.com', '', '2524365436', '23'),
(3, 'matheus', 'matheuszanoni84@gmail.com', '', '2352353532565', '10'),
(4, 'matheus', 'lionelmessi@gmail.com', '', '234436467476', '23'),
(5, 'zerer', 'matheussss@gmail.com', '', '234567', '29'),
(6, 'mathues', 'matheusaa@gmail.com', '', '1234567', '10'),
(7, 'matheus', 'matheuszanoni32@gmail.com', '', '2007', '10'),
(8, 'matheus', 'zere12@gmail.com', '', '24346443567', '10'),
(9, 'matheus', 'matheuszanoni884@gmail.com', '', '00967573', '33'),
(10, 'matheus', 'zere22@gmail.com', '', '0009', '10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
