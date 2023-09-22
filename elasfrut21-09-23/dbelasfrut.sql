-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/09/2023 às 01:18
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `d`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `fornecedor` varchar(50) DEFAULT NULL,
  `origem` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcadadm`
--

CREATE TABLE `tblcadadm` (
  `id` int(11) NOT NULL,
  `nomeadm` varchar(100) DEFAULT NULL,
  `emailadm` varchar(50) DEFAULT NULL,
  `teladm` varchar(15) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcadadm`
--

INSERT INTO `tblcadadm` (`id`, `nomeadm`, `emailadm`, `teladm`, `senha`) VALUES
(1, 'dani', 'danielle@gmail.com', '21999999999', '123456'),
(2, '', '', '', ''),
(3, 'Danda', 'danda.dolls@hotmail.com', '21988888888', '123'),
(4, '', '', '', ''),
(5, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcadfornecedor`
--

CREATE TABLE `tblcadfornecedor` (
  `id` int(11) NOT NULL,
  `razaosocial` varchar(100) DEFAULT NULL,
  `cnpj` varchar(15) DEFAULT NULL,
  `forndtcad` date DEFAULT NULL,
  `emailforn` varchar(50) DEFAULT NULL,
  `telforn` varchar(15) DEFAULT NULL,
  `fotologo` varchar(100) DEFAULT NULL,
  `prod` varchar(100) DEFAULT NULL,
  `cepforn` varchar(10) DEFAULT NULL,
  `enderecoforn` varchar(100) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `complforn` varchar(50) DEFAULT NULL,
  `bairroforn` varchar(40) DEFAULT NULL,
  `cidadeforn` varchar(40) DEFAULT NULL,
  `msociaisforn` varchar(150) DEFAULT NULL,
  `quemsoueu` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcadfornecedor`
--

INSERT INTO `tblcadfornecedor` (`id`, `razaosocial`, `cnpj`, `forndtcad`, `emailforn`, `telforn`, `fotologo`, `prod`, `cepforn`, `enderecoforn`, `numero`, `complforn`, `bairroforn`, `cidadeforn`, `msociaisforn`, `quemsoueu`) VALUES
(4, 'Dandara do Amor', '33.034.000/0001', '2023-08-30', 'danda@hotmail.com ', '123456987', '', 'banana', '123456789', 'Rua do Amor', 12, 'Casa 8  ', 'Amor', 'Rio do Amor', 'Amor.com', ''),
(5, 'Dani dos Boldos', '123.456.789.000', '2023-09-18', 'daniboldo@gmail.com', '21997845867', '', 'Boldos', '418459742', 'Rua das neves', 115, 'Casa 420', 'Campo Grande', 'Rio de Janeiro', '@daniboldos', ''),
(8, 'dasuhdouhsd', '', '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', 'isdoisadosd');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tblcadadm`
--
ALTER TABLE `tblcadadm`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tblcadfornecedor`
--
ALTER TABLE `tblcadfornecedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblcadadm`
--
ALTER TABLE `tblcadadm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tblcadfornecedor`
--
ALTER TABLE `tblcadfornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
