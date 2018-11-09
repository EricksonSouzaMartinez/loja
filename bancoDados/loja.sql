-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06/11/2018 às 22:38
-- Versão do servidor: 10.1.36-MariaDB
-- Versão do PHP: 7.2.10

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
-- Estrutura para tabela `Categorias`
--

CREATE TABLE `Categorias` (
  `id` int(11) NOT NULL,
  `Nome_categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Categorias`
--

INSERT INTO `Categorias` (ct_id, `Nome_categoria`) VALUES
(3, 'Automovel'),
(4, 'Doces'),
(5, 'Salgados');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Compra`
--

CREATE TABLE `Compra` (
  `IDCompra` int(11) NOT NULL,
  `Pessoa_nome` int(11) NOT NULL,
  `IDProduto` int(11) NOT NULL,
  `quantidade_compra` int(11) NOT NULL,
  `data_compra` date NOT NULL,
  `valor_compra` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Compra`
--

INSERT INTO `Compra` (`IDCompra`, `Pessoa_nome`, `IDProduto`, `quantidade_compra`, `data_compra`, `valor_compra`) VALUES
(1, 7, 4, 1, '2018-11-06', '0.00'),
(2, 7, 4, 8, '2018-11-06', '0.00'),
(3, 7, 5, 1, '2018-11-06', '0.00'),
(4, 7, 5, 1, '2018-11-06', '0.00'),
(5, 7, 5, 1, '2018-11-06', '0.00');

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

--
-- Fazendo dump de dados para tabela `Pessoas`
--

INSERT INTO `Pessoas` (`IDPessoa`, `Nome`, `Telefone`, `acesso`) VALUES
(7, 'Erickson', '67999999999', 1),
(8, 'Renan', '67988888888', 1),
(9, 'Renato', '67999999998', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Produtos`
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
-- Fazendo dump de dados para tabela `Produtos`
--

INSERT INTO `Produtos` (`IDProduto`, `Nome_Produto`, `Preco_Produto`, `Quantidade_Produto`, `categoria_id`, `usado`) VALUES
(4, 'Fiat uno', '11400.00', 0, 3, 1),
(5, 'Pao de mel', '5.00', 17, 4, 0),
(6, 'Esfiha', '2.00', 3, 5, 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (ct_id);

--
-- Índices de tabela `Compra`
--
ALTER TABLE `Compra`
  ADD PRIMARY KEY (`IDCompra`);

--
-- Índices de tabela `Pessoas`
--
ALTER TABLE `Pessoas`
  ADD PRIMARY KEY (`IDPessoa`),
  ADD UNIQUE KEY `Telefone` (`Telefone`);

--
-- Índices de tabela `Produtos`
--
ALTER TABLE `Produtos`
  ADD PRIMARY KEY (`IDProduto`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `Compra`
--
ALTER TABLE `Compra`
  MODIFY `IDCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `Pessoas`
--
ALTER TABLE `Pessoas`
  MODIFY `IDPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `Produtos`
--
ALTER TABLE `Produtos`
  MODIFY `IDProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
