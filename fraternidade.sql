-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 25-Mar-2019 às 18:33
-- Versão do servidor: 10.1.21-MariaDB
-- versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fraternidade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--
CREATE DATABASE fraternidade;

CREATE TABLE `fraternidade`.`pessoas` (
  `idpessoas` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `estado_civil` varchar(30) NOT NULL,
  `nome_conjuge` varchar(255),
  `rg` varchar(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(255),
  `telefone` varchar(50) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `moradia` varchar(30) NOT NULL,
  `nome_pa` varchar(100) NOT NULL,
  `rg_pa` varchar(11) NOT NULL,
  `informacao_adicional` varchar(255),
  `data_cadastro` datetime NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'fraternidade'.'dependente'(
  `id_dependente` int(11) NOT NULL AUTO_INCREMENT,
  `num_cadastro` varchar(255) NOT NULL,
  `nome_dependente` varchar(255) NOT NULL,
  `sexo_dependente` varchar(255) NOT NULL,
  `rg_dependente` varchar(11),
  `grau_parentenco` varchar(255) NOT NULL,
  'dependente_criança' varchar(255) NOT NULL,
  `num_crianca` varchar(255),
  `idade_C` varchar(255) NOT NULL,
  `tamanho_sapato` varchar(255),
  `tamanho_roupa` varchar(255),
  `data_nascimento_dependente` date NOT NULL,
  `fralda` varchar(50) NOT NULL,
  `data_nascimentoBB` date,
  `dificiencia` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoas`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`idpessoas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `idpessoas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
