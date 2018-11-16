-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2018 às 04:59
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

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
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `ct_id` int(11) NOT NULL,
  `ct_ativo` int(11) NOT NULL DEFAULT '1',
  `Nome_categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` VALUES
(1, 1, 'Salgados'),
(2, 1, 'Doces'),
(3, 1, 'Automovel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `IDCompra` int(11) NOT NULL,
  `cp_ativo` int(11) NOT NULL DEFAULT '1',
  `Pessoa_nome` int(11) NOT NULL,
  `IDProduto` int(11) NOT NULL,
  `quantidade_compra` int(11) NOT NULL,
  `data_compra` date NOT NULL,
  `valor_compra` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `IDPessoa` int(11) NOT NULL,
  `ps_ativo` int(11) NOT NULL DEFAULT '1',
  `Nome` varchar(255) NOT NULL,
  `Telefone` varchar(255) NOT NULL,
  `acesso` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` VALUES
(7, 1, 'Erickson', '67999999999', 2),
(8, 1, 'Renan', '67988888888', 1),
(9, 1, 'Renato', '67989898989', 1),
(10, 1, 'Ana green', '67988989891', 1),
(11, 1, 'Jean', '67940546450', 1),
(12, 1, 'Iohan', '67990454640', 1),
(13, 1, 'Max Almeida', '67944604046', 1),
(14, 1, 'Roberto', '67999904546', 1),
(15, 1, 'Ana Rocha', '67984047848', 1),
(16, 1, 'Janaina Martinez', '67998406848', 1),
(17, 1, 'Kelvis', '67999948405', 1),
(18, 1, 'Vagner', '67998404984', 1),
(19, 1, 'Guilherme benites', '67984654016', 1),
(20, 1, 'Rafael', '67984098489', 1),
(21, 1, 'Roberta', '67977777777', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `IDProduto` int(11) NOT NULL,
  `pr_ativo` int(11) DEFAULT '1',
  `Nome_Produto` varchar(255) NOT NULL,
  `Preco_Produto` decimal(10,2) DEFAULT NULL,
  `Quantidade_Produto` int(10) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `usado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_funcao`
--

CREATE TABLE `ps_funcao` (
  `psf_id` int(11) NOT NULL,
  `psf_submenu_id` int(11) NOT NULL,
  `psf_ativo` int(11) NOT NULL,
  `psf_acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ps_funcao`
--

INSERT INTO `ps_funcao` VALUES
(1, 6, 1, 1),
(2, 7, 1, 1),
(3, 8, 1, 1),
(4, 9, 1, 1),
(5, 2, 1, 2),
(6, 3, 1, 2),
(7, 4, 1, 2),
(8, 5, 1, 2),
(9, 6, 1, 2),
(10, 7, 1, 2),
(11, 8, 1, 2),
(12, 9, 1, 2),
(13, 3, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sm_id` int(11) NOT NULL,
  `sm_ativo` int(11) NOT NULL,
  `sm_nome` varchar(255) NOT NULL,
  `sm_uri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sub_menu`
--

INSERT INTO `sub_menu` VALUES
(1, 0, 'Home', '../index.php'),
(2, 1, 'Cadastro Pessoa', '../public/form_pessoa.php'),
(3, 1, 'Lista de Pessoas', '../public/lista_pessoas.php'),
(4, 1, 'Cadastro Produtos', '../public/form_produto.php'),
(5, 1, 'Produtos', '../public/lista_produtos.php'),
(6, 1, 'Lista Produtos', '../public/produtoA_vender.php'),
(7, 1, 'Lista de Compra', '../public/lista_compra.php'),
(8, 1, 'Contato', '../public/contato.php'),
(9, 1, 'Desloga', '../public/logout.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`IDCompra`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`IDPessoa`),
  ADD UNIQUE KEY `Telefone` (`Telefone`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`IDProduto`);

--
-- Indexes for table `ps_funcao`
--
ALTER TABLE `ps_funcao`
  ADD PRIMARY KEY (`psf_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `IDCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `IDPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `IDProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ps_funcao`
--
ALTER TABLE `ps_funcao`
  MODIFY `psf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
