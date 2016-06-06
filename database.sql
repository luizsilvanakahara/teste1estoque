-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2016 at 06:55 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `estoque`
--
CREATE DATABASE IF NOT EXISTS `estoque` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `estoque`;
-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Felipe Smith', 'felipe@teste.com', '40028922'),
(2, 'Hiago Ferreira Lopes', 'hiagolopes@teste.com', '6181690541'),
(3, 'Maria', 'maria@maria.com', '159874394');

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id_produto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`id_produto`, `id_cliente`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `preco` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id`, `nome`, `descricao`, `preco`) VALUES
(1, 'Carro', 'carro vermelho', '39999,99'),
(2, 'Revista', 'Revista 123', '5,99'),
(3, 'Celular', 'celular teste 123', '2500,00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
