-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2016 às 18:48
-- Versão do servidor: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emergencia`
--

CREATE TABLE IF NOT EXISTS `emergencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(300) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(60) NOT NULL,
  `numero` char(20) NOT NULL,
  `bairro` char(60) NOT NULL,
  `cidade` char(60) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paciente_id` (`paciente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` char(11) NOT NULL,
  `telefone` char(13) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hospital_id` (`hospital_id`),
  KEY `cargo_id` (`cargo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` char(14) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `telefone_f` char(13) NOT NULL,
  `telefone_c` char(13) NOT NULL,
  `emergencia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emergencia_id` (`emergencia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logar`
--

CREATE TABLE IF NOT EXISTS `logar` (
  `ID` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `logar`
--

INSERT INTO `logar` (`ID`, `login`, `senha`) VALUES
(0000000001, 'c', '900150983cd24fb0d6963f7d28e17f72'),
(0000000002, 'c', '900150983cd24fb0d6963f7d28e17f72'),
(0000000003, 'a', '123456'),
(0000000004, 'nadia', '202cb962ac59075b964b07152d234b70'),
(0000000005, 'nadia', 'e10adc3949ba59abbe56e057f20f883e'),
(0000000006, 'adm', '202cb962ac59075b964b07152d234b70'),
(0000000007, 'Lucas', '202cb962ac59075b964b07152d234b70'),
(0000000008, 'joao', '202cb962ac59075b964b07152d234b70'),
(0000000009, 'adm', 'e10adc3949ba59abbe56e057f20f883e'),
(0000000010, 'nadia', 'e10adc3949ba59abbe56e057f20f883e'),
(0000000011, 'mago', '202cb962ac59075b964b07152d234b70'),
(0000000012, 'nadia', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` char(11) NOT NULL,
  `telefone` char(13) NOT NULL,
  `emergencia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emergencia_id` (`emergencia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `retorno`
--

CREATE TABLE IF NOT EXISTS `retorno` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gravidade` varchar(45) NOT NULL,
  `retorno` varchar(100) NOT NULL,
  `emergencia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emergencia_id` (`emergencia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`id`),
  ADD CONSTRAINT `funcionario_ibfk_2` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`);

--
-- Limitadores para a tabela `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`emergencia_id`) REFERENCES `emergencia` (`id`);

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`emergencia_id`) REFERENCES `emergencia` (`id`);

--
-- Limitadores para a tabela `retorno`
--
ALTER TABLE `retorno`
  ADD CONSTRAINT `retorno_ibfk_1` FOREIGN KEY (`emergencia_id`) REFERENCES `emergencia` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
