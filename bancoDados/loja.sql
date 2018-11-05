-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 20-Out-2018 às 13:18
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Categorias`
--

CREATE TABLE `Categorias` (
  `id` int(11) NOT NULL,
  `Nome_categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Compra`
--

CREATE TABLE `Compra` (
  `IDCompra` int(11) NOT NULL,
  `IDPessoa` int(11) NOT NULL,
  `IDProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Pessoas`
--

CREATE TABLE `Pessoas` (
  `IDPessoa` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Telefone` varchar(255) NOT NULL,
  `acesso` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Produtos`
--

CREATE TABLE `Produtos` (
  `IDProduto` int(11) NOT NULL,
  `Nome_Produto` varchar(255) NOT NULL,
  `Preco_Produto` decimal(10,2) DEFAULT NULL,
  `Quantidade_Produto` int(10) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `usado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Compra`
--
ALTER TABLE `Compra`
  ADD PRIMARY KEY (`IDCompra`);

--
-- Indexes for table `Pessoas`
--
ALTER TABLE `Pessoas`
  ADD PRIMARY KEY (`IDPessoa`),
  ADD UNIQUE KEY `Telefone` (`Telefone`);

--
-- Indexes for table `Produtos`
--
ALTER TABLE `Produtos`
  ADD PRIMARY KEY (`IDProduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Compra`
--
ALTER TABLE `Compra`
  MODIFY `IDCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Pessoas`
--
ALTER TABLE `Pessoas`
  MODIFY `IDPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Produtos`
--
ALTER TABLE `Produtos`
  MODIFY `IDProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

alter table Compra ADD COLUMN quantidade_compra integer NOT null
