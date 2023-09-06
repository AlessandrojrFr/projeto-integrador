-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Jun-2023 às 14:49
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
-- Banco de dados: `projeto-intergrador`
--
CREATE DATABASE IF NOT EXISTS `projeto-intergrador` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projeto-intergrador`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `email`, `nome`, `senha`) VALUES
(1, 'matheus@gmail.com', 'matheus zanoni', ''),
(2, 'matheus@gmail.com', 'matheus zanoni', ''),
(3, '', '', ''),
(4, 'matheus@gmail.com', 'matheus zanoni', ''),
(5, '', '', ''),
(6, 'matheus@gmail.com', 'matheus zanoni', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, 'matheus@gmail.com2', 'matheus zanoni', 'dsfdsf'),
(12, 'matheus@gmail.com4', 'r', '222222'),
(13, 'matheus@gmail.com4', 'r', '222222'),
(14, 'matheus@gmail.com4', 'r', '222222'),
(15, 'matheus@gmail.com6', 'matheus zanoni', '1234567'),
(16, 'matheus@gmail.com', 'matheus zanono', '1234568'),
(17, 'matheus@gmail.com2', 'e', '2w233'),
(18, 'matheus@gmail.com4q', 'makyhs7yw', '09090909'),
(19, 'matheus@gmail.com', 'matheus zanoni', '121313333333'),
(20, 'matheus@gmail.com', 'matheus zanoni', '1221222');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
