-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2016 at 12:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

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
  `idEmpresa` int(11) NOT NULL,
  `saldo` decimal(10,0) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `condominios`
--

INSERT INTO `condominios` (`idCond`, `morada`, `lote`, `codigoPostal`, `localidade`, `cidade`, `idPais`, `nifCond`, `nAndares`, `ibanCond`, `idEmpresa`, `saldo`) VALUES
(2, 'Rua Atec', '5', '5555-555', 'Santos', 'Lisboa', 1, '999999999', 3, 0, 0, '0'),
(3, 'QWE', '1', '1-1', 'QWE', 'QWE', 1, '111212112', 3, 0, 0, '0');

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
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `idEmpresa` int(11) NOT NULL,
  `nomeEmpresa` varchar(255) NOT NULL,
  `teleEmpresa` varchar(255) NOT NULL,
  `emailEmpresa` varchar(255) NOT NULL,
  `passwordEmpresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `idOcorrencia` int(11) NOT NULL,
  `tituloOcorrencia` text NOT NULL,
  `ocorrencia` varchar(1000) NOT NULL,
  `idParcela` int(11) NOT NULL,
  `idCond` int(11) NOT NULL,
  `dataRegOcorrencia` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocorrencias`
--

INSERT INTO `ocorrencias` (`idOcorrencia`, `tituloOcorrencia`, `ocorrencia`, `idParcela`, `idCond`, `dataRegOcorrencia`, `estado`) VALUES
(19, 'tit1', 'Teste', 22, 2, '2016/09/22 11:36:18', 1),
(20, 'tit2', 'Teste', 22, 2, '2016/09/22 11:36:18', 1),
(21, 'tit3', 'Teste', 22, 2, '2016/09/22 11:36:18', 1),
(22, 'OOO', 'fasfsafsfasfasfasfasfasfasfsfasfasfsaf', 22, 2, '2016/09/22 11:36:18', 1),
(23, 'Titulo de ', 'OcorrÃªncia de teste.asdasfasasfasf', 22, 2, '2016/09/22 11:54:02', 0),
(24, 'David', 'Ã© gay', 22, 2, '2016/09/22 15:32:06', 1),
(25, 'fsdsdagertyt', 'gdrgareg43tgrgrg', 8, 4, '2016/09/23 11:01:40', 0),
(26, '3423r', 'grgergargargg', 8, 4, '2016/09/23 11:01:43', 0),
(27, 'afafasf', 'asafasfaf', 22, 2, '2016/09/23 11:03:17', 0);

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
(17, 'Rui Pereira Miguel', 'rui@atec.com', 'asd', '932564878', 0, 'nOL7x', 2, 987654321, 1, 0, 'Esquerdo'),
(18, 'Pedro Martins Pine', 'pedro@atec.com', 'asd', '915487845', 0, 'vp9JE', 2, 954865954, 1, 0, 'Direito'),
(19, 'Diogo Miguel Lopes', 'diogo@atec.com', 'asd', '925648754', 0, 'sFDFq', 2, 256984125, 1, 0, 'Frente'),
(20, 'Edson Silva', 'edson@atec.com', 'asd', '912563521', 0, 'KwmdY', 2, 251478541, 2, 0, 'Esquerdo'),
(21, 'Luis Miguel', 'luis@atec.com', 'asd', '935648512', 0, '33quu', 2, 256489654, 2, 0, 'Direito'),
(22, 'Marco Rafael Martins', 'marco@atec.com', 'asd', '911254878', 1, 'CSPwp', 2, 123456789, 2, 0, 'Frente'),
(23, 'Bruno Pereira', 'bruno@atec.com', 'asd', '965845213', 0, '97nc9', 2, 253632321, 3, 0, 'Esquerdo'),
(24, 'Fernando Martins', 'fernando@atec.com', 'asd', '965325145', 0, 'VMspq', 2, 142536985, 3, 0, 'Direito'),
(25, 'Jorge Mendes', 'jorge@atec.com', 'asd', '923654125', 0, 'VTN5A', 2, 362514456, 3, 0, 'Frente');

-- --------------------------------------------------------

--
-- Table structure for table `quotas`
--

CREATE TABLE `quotas` (
  `idQuota` int(11) NOT NULL,
  `idParcela` int(11) NOT NULL,
  `mesQuota` int(11) NOT NULL,
  `anoQuota` int(11) NOT NULL,
  `valorQuota` float NOT NULL,
  `pago` binary(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vistorias`
--

CREATE TABLE `vistorias` (
  `idVistoria` int(11) NOT NULL,
  `ocorrencias` text NOT NULL,
  `dataVistoria` varchar(50) NOT NULL,
  `idParcelaRegisto` int(11) NOT NULL,
  `idCond` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indexes for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD PRIMARY KEY (`idOcorrencia`);

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
-- Indexes for table `quotas`
--
ALTER TABLE `quotas`
  ADD PRIMARY KEY (`idQuota`);

--
-- Indexes for table `vistorias`
--
ALTER TABLE `vistorias`
  ADD PRIMARY KEY (`idVistoria`);

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
  MODIFY `idCond` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `despesas`
--
ALTER TABLE `despesas`
  MODIFY `idDespesa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `idOcorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
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
  MODIFY `idParcela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `quotas`
--
ALTER TABLE `quotas`
  MODIFY `idQuota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vistorias`
--
ALTER TABLE `vistorias`
  MODIFY `idVistoria` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
