-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Set-2023 às 20:10
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `texto` varchar(1000) DEFAULT NULL,
  `dataHora` datetime NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cor` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id`, `texto`, `dataHora`, `nome`, `cor`) VALUES
(1, 'rfdgdxzvsrt3634tfg423r', '2023-08-15 17:03:06', 'fadsfwa4f4wt4wt554', 'gsag435'),
(2, 'Testando', '2023-09-06 13:47:34', 'Thiago', '#ef2929'),
(3, 'fhhshfs', '2023-09-06 13:51:44', 'Thiago', '#ef2929'),
(4, 'Por favor funciona', '2023-09-06 14:01:22', 'Thiago', '#729fcf'),
(5, 'Estudem', '2023-09-06 14:04:56', 'IFSC', '#4e9a06'),
(6, 'Estudem', '2023-09-06 14:05:57', 'IFSC', '#4e9a06'),
(7, 'Estudis', '2023-09-06 14:06:26', 'IFSC', '#4e9a06'),
(8, 'Teste', '2023-09-06 14:48:00', 'Thiago', '#ef2929'),
(9, 'Teste', '2023-09-06 14:49:00', 'Thiago', '#ef2929'),
(10, 'Teste', '2023-09-06 14:51:00', 'Thiago', '#204a87'),
(11, 'ywyawr', '2023-09-06 14:51:00', 'Teste', '#8f5902'),
(12, 'fshsfh', '2023-09-06 14:51:00', 'hsfhs', '#fce94f'),
(13, 'rtrwtrwtRW', '2023-09-06 14:52:00', 'trtrtr', '#f57900'),
(14, 'oi', '2023-09-06 14:53:00', 'tESTANDO', '#75507b'),
(15, 'Ola', '2023-09-06 14:54:00', 'tESTANDO', ''),
(16, 'Bom dia', '2023-09-06 14:55:00', 'Thiago', '#ef2929'),
(17, 'Boa tarde', '2023-09-06 14:55:00', 'Thiago', ''),
(18, 'Estudem', '2023-09-06 14:57:00', 'Miguel', '#3465a4'),
(19, 'Estudem, com gentileza', '2023-09-06 14:57:00', 'Miguel', '#3465a4');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;