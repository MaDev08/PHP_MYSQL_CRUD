-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Maio-2017 às 21:25
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `banco`
--
create database cars1;
use cars1;
-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelaimg`
--

CREATE TABLE `tabelaimg` (
  `id` int(11) NOT NULL,
  `montadora` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ano` int(4) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabelaimg`
--

INSERT INTO `tabelaimg` (`id`, `montadora`, `nome`, `ano`, `valor`, `imagem`) VALUES
(1, 'RENAULT', 'CAPTUR ZEN 1.6', 2023, '140000.00', 'captur.png'),
(2, 'GM', 'CRUZE', 2024, '153000.00', 'cruze.png'),
(3, 'DODGE', 'DODGE RAM', 2024, '440000.00', 'dodge_ram.png'),
(4, 'BYD', 'BYD', 2022, '120000.00', 'byd.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
