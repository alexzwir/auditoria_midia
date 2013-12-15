-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2013 at 03:40 PM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auditoria`
--

-- --------------------------------------------------------

--
-- Table structure for table `lista_contatos`
--

CREATE TABLE IF NOT EXISTS `lista_contatos` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `data_cadastro` date NOT NULL,
  `noma_cliente` int(11) NOT NULL,
  `email_cliente` int(11) NOT NULL,
  `tel_cliente` int(11) NOT NULL,
  `empresa_contato` int(11) NOT NULL,
  `utm_source` int(11) NOT NULL,
  `Utm_medium` int(11) NOT NULL,
  `utm_campaign` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela de registro de clientes' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
