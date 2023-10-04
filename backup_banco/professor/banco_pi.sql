-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Set-2023 às 11:52
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
-- Banco de dados: `banco_pi`
--
CREATE DATABASE IF NOT EXISTS `banco_pi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `banco_pi`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id_nome` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `data` varchar(100) NOT NULL,
  `estado civil` varchar(300) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `procurar` varchar(100) NOT NULL,
  `mensagem` varchar(300) NOT NULL,
  PRIMARY KEY (`id_nome`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_nome`, `nome`, `email`, `data`, `estado civil`, `sexo`, `procurar`, `mensagem`) VALUES
(1, 'et', 't3tt', 'tt4t', 'tt4t', 'tt', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

DROP TABLE IF EXISTS `pagamento`;
CREATE TABLE IF NOT EXISTS `pagamento` (
  `id_nome` int(11) NOT NULL AUTO_INCREMENT,
  `nome do cartao` varchar(100) NOT NULL,
  `numero do cartao` varchar(300) NOT NULL,
  `validade` varchar(100) NOT NULL,
  `cvv` varchar(300) NOT NULL,
  `cpf do titular` varchar(100) NOT NULL,
  `bandeira` varchar(100) NOT NULL,
  PRIMARY KEY (`id_nome`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`id_nome`, `nome do cartao`, `numero do cartao`, `validade`, `cvv`, `cpf do titular`, `bandeira`) VALUES
(1, 'ww', 'ww', 'ww', 'q', 'd', 'aa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
