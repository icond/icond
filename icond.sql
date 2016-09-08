-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 08-Set-2016 às 11:50
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icond`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apartamentos`
--

CREATE TABLE `apartamentos` (
  `idApartamento` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `letra` varchar(255) NOT NULL,
  `nPredio` int(11) NOT NULL,
  `idCond` int(11) NOT NULL,
  `idParcela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `condominios`
--

CREATE TABLE `condominios` (
  `idCond` int(11) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `lote` varchar(255) NOT NULL,
  `codigoPostal` varchar(255) NOT NULL,
  `localidade` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `idPais` int(11) NOT NULL,
  `nifCond` varchar(255) NOT NULL,
  `nAndares` int(11) NOT NULL,
  `ibanCond` int(11) NOT NULL,
  `idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `condominios`
--

INSERT INTO `condominios` (`idCond`, `morada`, `lote`, `codigoPostal`, `localidade`, `cidade`, `idPais`, `nifCond`, `nAndares`, `ibanCond`, `idEmpresa`) VALUES
(1, 'Rua atec', '5', '2500-300', 'Lisboa', 'Lisboa', 1, '912312393', 5, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas`
--

CREATE TABLE `despesas` (
  `idDespesa` int(11) NOT NULL,
  `idCond` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `valor` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `idPagamento` int(11) NOT NULL,
  `quantia` int(11) NOT NULL,
  `data` date NOT NULL,
  `idParcela` int(11) NOT NULL,
  `isPaid` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL,
  `pais` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parcelas`
--

CREATE TABLE `parcelas` (
  `idParcela` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(4) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `idCond` int(11) NOT NULL,
  `nifParcela` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `comissaoMensal` int(11) NOT NULL,
  `organizacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `parcelas`
--

INSERT INTO `parcelas` (`idParcela`, `full_name`, `email`, `password`, `isAdmin`, `codigo`, `idCond`, `nifParcela`, `andar`, `comissaoMensal`, `organizacao`) VALUES
(1, '', '', '', 0, 'zN5c5', 1, 0, 1, 0, 'Esquerdo'),
(2, '', '', '', 0, 'maN5c', 1, 0, 1, 0, 'Direito'),
(3, '', '', '', 0, 'hLfhx', 1, 0, 1, 0, 'Frente'),
(4, '', '', '', 0, 'Vtnq4', 1, 0, 1, 0, 'Frente'),
(5, '', '', '', 0, 'tCuEU', 1, 0, 1, 0, 'Frente'),
(6, '', '', '', 0, 'AX9y9', 1, 0, 2, 0, 'Esquerdo'),
(7, '', '', '', 0, 'J5VNf', 1, 0, 2, 0, 'Direito'),
(8, '', '', '', 0, 'Y7rMb', 1, 0, 2, 0, 'Frente'),
(9, '', '', '', 0, 'B3VPk', 1, 0, 2, 0, 'Frente'),
(10, '', '', '', 0, 'sLLM8', 1, 0, 2, 0, 'Frente'),
(11, '', '', '', 0, 'OdJfQ', 1, 0, 3, 0, 'Esquerdo'),
(12, '', '', '', 0, 'DPOLm', 1, 0, 3, 0, 'Direito'),
(13, '', '', '', 0, 'VurQe', 1, 0, 3, 0, 'Frente'),
(14, '', '', '', 0, 'FOm4z', 1, 0, 3, 0, 'Frente'),
(15, '', '', '', 0, 'xDBst', 1, 0, 3, 0, 'Frente'),
(16, '', '', '', 0, 'TQbEC', 1, 0, 4, 0, 'Esquerdo'),
(17, '', '', '', 0, 'jsO2G', 1, 0, 4, 0, 'Direito'),
(18, '', '', '', 0, 'DDvsn', 1, 0, 4, 0, 'Frente'),
(19, '', '', '', 0, 'PmOda', 1, 0, 4, 0, 'Frente'),
(20, '', '', '', 0, '3RXpT', 1, 0, 4, 0, 'Frente'),
(21, '', '', '', 0, 'xSx6h', 1, 0, 5, 0, 'Esquerdo'),
(22, '', '', '', 0, 'WY87C', 1, 0, 5, 0, 'Direito'),
(23, '', '', '', 0, 'Jr3xr', 1, 0, 5, 0, 'Frente'),
(24, '', '', '', 0, 'H93bz', 1, 0, 5, 0, 'Frente'),
(25, '', '', '', 0, 'pYSbb', 1, 0, 5, 0, 'Frente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD PRIMARY KEY (`idApartamento`);

--
-- Indexes for table `condominios`
--
ALTER TABLE `condominios`
  ADD PRIMARY KEY (`idCond`);

--
-- Indexes for table `despesas`
--
ALTER TABLE `despesas`
  ADD PRIMARY KEY (`idDespesa`);

--
-- Indexes for table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`idPagamento`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idPais`);

--
-- Indexes for table `parcelas`
--
ALTER TABLE `parcelas`
  ADD PRIMARY KEY (`idParcela`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartamentos`
--
ALTER TABLE `apartamentos`
  MODIFY `idApartamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `condominios`
--
ALTER TABLE `condominios`
  MODIFY `idCond` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `despesas`
--
ALTER TABLE `despesas`
  MODIFY `idDespesa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `idPagamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parcelas`
--
ALTER TABLE `parcelas`
  MODIFY `idParcela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
