-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Set-2023 às 21:16
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
  `dataHora` datetime DEFAULT current_timestamp(),
  `nome` varchar(100) NOT NULL,
  `cor` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id`, `texto`, `dataHora`, `nome`, `cor`) VALUES
(20, 'Oi tudo bom, como vocês estão cambada, To fazendo código, bla bla', '2023-09-06 15:36:00', 'Aline', '#000000'),
(21, 'Tudo bem aqui, e com você? &#13;&#10;Tô pensando na vida', '2023-09-06 15:37:00', 'Thiago', '#75507b'),
(22, 'PROCESSO!!!', '2023-09-06 15:37:00', 'Yuri', '#4e9a06'),
(23, 'vcs humanos são uns porcarias, quero comida, auuuuuuuuuuuu', '2023-09-06 15:39:00', 'Jack', '#ef2929'),
(24, 'auuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', '2023-09-06 15:39:00', 'Jack', '#ef2929'),
(25, 'sério&#13;&#10;', '2023-09-06 16:10:00', 'José', '#ef2929'),
(26, 'aaaaaaaaaaaaa', '2023-09-06 16:10:00', 'José', '#ef2929'),
(27, 'aaaaaaaaa', '2023-09-06 16:10:00', 'José', '#ef2929');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;