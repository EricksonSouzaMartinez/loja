-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Nov-2018 às 05:38
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

INSERT INTO `categorias` (`ct_id`, `ct_ativo`, `Nome_categoria`) VALUES
(1, 1, 'Salgados'),
(2, 1, 'Doces');

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

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`IDCompra`, `cp_ativo`, `Pessoa_nome`, `IDProduto`, `quantidade_compra`, `data_compra`, `valor_compra`) VALUES
(1, 1, 7, 2, 1, '2018-11-10', '2.00'),
(2, 1, 7, 1, 2, '2018-11-10', '4.00'),
(3, 1, 7, 2, 3, '2018-11-10', '6.00'),
(4, 1, 9, 2, 2, '2018-11-10', '4.00'),
(5, 1, 9, 1, 1, '2018-11-10', '2.00');

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

INSERT INTO `pessoas` (`IDPessoa`, `ps_ativo`, `Nome`, `Telefone`, `acesso`) VALUES
(7, 1, 'Erickson', '67999999999', 1),
(8, 1, 'Renan', '67988888888', 1),
(9, 1, 'Junior', '67989898989', 0);

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

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`IDProduto`, `pr_ativo`, `Nome_Produto`, `Preco_Produto`, `Quantidade_Produto`, `categoria_id`, `usado`) VALUES
(1, 1, 'Risole', '2.00', 5, 1, 0),
(2, 1, 'Esfiha', '2.00', 1, 1, 0);

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

INSERT INTO `sub_menu` (`sm_id`, `sm_ativo`, `sm_nome`, `sm_uri`) VALUES
(1, 1, 'Home', '../index.php'),
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
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `IDCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `IDPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `IDProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
