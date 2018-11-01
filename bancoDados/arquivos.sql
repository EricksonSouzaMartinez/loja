-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de gera��o: 26/10/2018 �s 23:04
-- Vers�o do servidor: 10.1.36-MariaDB
-- Vers�o do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Pessoas`
--

CREATE TABLE `Pessoas` (
  `IDPessoa` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Telefone` varchar(255) NOT NULL,
  `acesso` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Produtos`
--

CREATE TABLE `Produtos` (
  `IDProduto` int(11) NOT NULL,
  `Nome_Produto` varchar(255) NOT NULL,
  `Preco_Produto` decimal(10,2) DEFAULT NULL,
  `Quantidade_Produto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- �ndices de tabelas apagadas
--

--
-- �ndices de tabela `Pessoas`
--
ALTER TABLE `Pessoas`
  ADD PRIMARY KEY (`IDPessoa`),
  ADD UNIQUE KEY `Telefone` (`Telefone`);

--
-- �ndices de tabela `Produtos`
--
ALTER TABLE `Produtos`
  ADD PRIMARY KEY (`IDProduto`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Pessoas`
--
ALTER TABLE `Pessoas`
  MODIFY `IDPessoa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Produtos`
--
ALTER TABLE `Produtos`
  MODIFY `IDProduto` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
create table Categorias (id integer auto_increment primary key,
Nome_categoria varchar(255));


insert into Categorias (Nome_categoria) values("Esporte"),("Automovel"),("Profiss�o"),("Escolar");
alter table Produtos add column categoria_id integer;

alter table Produtos add
column usado boolean;