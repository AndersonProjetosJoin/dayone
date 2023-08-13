-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Ago-2023 às 02:33
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbdayone`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontatos`
--

DROP TABLE IF EXISTS `tbcontatos`;
CREATE TABLE IF NOT EXISTS `tbcontatos` (
  `idContato` int NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cpfContato` varchar(50) NOT NULL,
  `emailContato` varchar(100) NOT NULL,
  `telefoneContato` varchar(50) NOT NULL,
  `cepContato` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `enderecoContato` varchar(200) NOT NULL,
  `sexoContato` char(1) NOT NULL,
  `dataNascContato` date NOT NULL,
  `flagFavoritoContato` tinyint(1) NOT NULL,
  `nomeFotoContato` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=InnoDB AUTO_INCREMENT=1063 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbcontatos`
--

INSERT INTO `tbcontatos` (`idContato`, `nomeContato`, `cpfContato`, `emailContato`, `telefoneContato`, `cepContato`, `enderecoContato`, `sexoContato`, `dataNascContato`, `flagFavoritoContato`, `nomeFotoContato`) VALUES
(1, 'Anderson de Carvalho Fernandes', '00063626993', 'andersoncarvalhofer@gmail.com', '(47) 92000-9554', '89207050', 'Rua Doutor Arthur Costa', 'M', '1979-05-12', 1, '1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbeventos`
--

DROP TABLE IF EXISTS `tbeventos`;
CREATE TABLE IF NOT EXISTS `tbeventos` (
  `idEvento` int NOT NULL AUTO_INCREMENT,
  `tituloEvento` varchar(255) NOT NULL,
  `descricaoEvento` text,
  `dataInicioEvento` date NOT NULL,
  `horaInicioEvento` time DEFAULT NULL,
  `dataFimEvento` date DEFAULT NULL,
  `horaFimEvento` time DEFAULT NULL,
  `statusEvento` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`idEvento`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbeventos`
--

INSERT INTO `tbeventos` (`idEvento`, `tituloEvento`, `descricaoEvento`, `dataInicioEvento`, `horaInicioEvento`, `dataFimEvento`, `horaFimEvento`, `statusEvento`) VALUES
(10, 'Contratação do Anderson de Carvalho Fernandes', 'Depois deste teste o Sr. Adriano vai analisar o mesmo e solicitar \r\na contratação do Sr. Anderson para vaga requerida.', '2023-08-14', '10:30:00', '2023-08-15', '16:00:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtarefas`
--

DROP TABLE IF EXISTS `tbtarefas`;
CREATE TABLE IF NOT EXISTS `tbtarefas` (
  `idTarefa` int NOT NULL AUTO_INCREMENT,
  `tituloTarefa` varchar(255) NOT NULL,
  `descricaoTarefa` text NOT NULL,
  `dataConclusaoTarefa` date NOT NULL,
  `horaConclusaoTarefa` time NOT NULL,
  `dataLembreteTarefa` date NOT NULL,
  `horaLembreteTarefa` time NOT NULL,
  `recorrenciaTarefa` int NOT NULL DEFAULT '0',
  `statusTarefa` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idTarefa`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbtarefas`
--

INSERT INTO `tbtarefas` (`idTarefa`, `tituloTarefa`, `descricaoTarefa`, `dataConclusaoTarefa`, `horaConclusaoTarefa`, `dataLembreteTarefa`, `horaLembreteTarefa`, `recorrenciaTarefa`, `statusTarefa`) VALUES
(8, 'Reunião com equipe de Desenvolvimento', 'Reunião com equipe de Desenvolvimento', '2023-08-14', '19:00:00', '2023-08-14', '19:00:00', 0, 1),
(41, 'sd', 'sd', '2023-08-14', '22:36:00', '2023-08-14', '23:36:00', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuarios`
--

DROP TABLE IF EXISTS `tbusuarios`;
CREATE TABLE IF NOT EXISTS `tbusuarios` (
  `loginUser` varchar(45) NOT NULL,
  `senhaUser` varchar(64) NOT NULL,
  `nomeUser` varchar(45) NOT NULL,
  PRIMARY KEY (`loginUser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbusuarios`
--

INSERT INTO `tbusuarios` (`loginUser`, `senhaUser`, `nomeUser`) VALUES
('admin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Anderson de Carvalho Fernandes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
