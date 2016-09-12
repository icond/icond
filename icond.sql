-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2016 at 04:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

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
-- Table structure for table `apartamentos`
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
-- Table structure for table `condominios`
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
-- Dumping data for table `condominios`
--

INSERT INTO `condominios` (`idCond`, `morada`, `lote`, `codigoPostal`, `localidade`, `cidade`, `idPais`, `nifCond`, `nAndares`, `ibanCond`, `idEmpresa`) VALUES
(1, 'Teste', '5', '5555-555', 'Teste', 'Teste', 1, '111111112', 7, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `despesas`
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
-- Table structure for table `pagamentos`
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
-- Table structure for table `pais`
--

CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL,
  `pais` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parcelas`
--

CREATE TABLE `parcelas` (
  `idParcela` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telemovel` varchar(255) NOT NULL,
  `isAdmin` tinyint(4) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `idCond` int(11) NOT NULL,
  `nifParcela` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `comissaoMensal` int(11) NOT NULL,
  `organizacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcelas`
--

INSERT INTO `parcelas` (`idParcela`, `full_name`, `email`, `password`, `telemovel`, `isAdmin`, `codigo`, `idCond`, `nifParcela`, `andar`, `comissaoMensal`, `organizacao`) VALUES
(1, '', '', '', '', 0, 'bvk2B', 1, 0, 1, 0, 'Esquerdo'),
(2, '', '', '', '', 0, 'bv25k', 1, 0, 1, 0, 'Direito'),
(3, '', '', '', '', 0, 'OpdEF', 1, 0, 2, 0, 'Esquerdo'),
(4, '', '', '', '', 0, 'B8nTB', 1, 0, 2, 0, 'Direito'),
(5, '', '', '', '', 0, 'paPT5', 1, 0, 3, 0, 'Esquerdo'),
(6, '', '', '', '', 0, 'jjsOw', 1, 0, 3, 0, 'Direito'),
(7, '', '', '', '', 0, 'GHFWO', 1, 0, 4, 0, 'Esquerdo'),
(8, '', '', '', '', 0, 'Efp2K', 1, 0, 4, 0, 'Direito'),
(9, 'Conta Teste', 'teste@teste.com', '123', '912345678', 1, 'F29Xv', 1, 111111111, 5, 0, 'Esquerdo'),
(10, '', '', '', '', 0, 'AzMOf', 1, 0, 5, 0, 'Direito'),
(11, '', '', '', '', 0, '59eO3', 1, 0, 6, 0, 'Esquerdo'),
(12, '', '', '', '', 0, 'zQskX', 1, 0, 6, 0, 'Direito'),
(13, '', '', '', '', 0, 'fRfPy', 1, 0, 7, 0, 'Esquerdo'),
(14, '', '', '', '', 0, 'hF8jt', 1, 0, 7, 0, 'Direito'),
(15, '', '', '', '', 0, '', 0, 0, 0, 0, '');

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
  MODIFY `idParcela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
