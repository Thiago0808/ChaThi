-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Set-2023 às 01:49
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
  `cor` varchar(8) NOT NULL,
  `tema` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id`, `texto`, `dataHora`, `nome`, `cor`, `tema`) VALUES
(33, 'Olá a todos! Espero que estejam tendo um ótimo dia. Tenho que compartilhar algo empolgante: comecei a ler &#34;Cem Anos de Solidão&#34; de Gabriel García Márquez e estou completamente cativada pela narrativa mágica deste livro.', '2023-09-13 21:12:21', 'Alice', '#ffd336', 'Livros'),
(34, 'Olá, Alice! Que escolha maravilhosa. &#34;Cem Anos de Solidão&#34; é uma obra-prima da literatura latino-americana. O realismo mágico de Márquez é fascinante. Como você descreveria a experiência de leitura até agora?', '2023-09-13 21:16:35', 'Bob', '#bbff65', 'Livros'),
(35, 'Uma das coisas que mais me impressionam é a linguagem de Márquez. Sua prosa é poética e evocativa. Ele cria imagens vívidas e emocionantes com suas palavras', '2023-09-13 21:17:22', 'Bob', '#bbff65', 'Livros'),
(36, 'Olá a todos! Fico feliz em participar desta conversa sobre um livro tão impactante. Li &#34;Cem Anos de Solidão&#34; há alguns anos e ainda me lembro da sensação de estar imerso em um mundo mágico e surreal. É impressionante como o livro reflete as complexidades da América Latina', '2023-09-13 21:20:35', 'David', '#6ffff6', 'Livros'),
(37, 'Há um outro livro que leram para compartilhar a experiência?', '2023-09-13 21:21:22', 'David', '#6ffff6', 'Livros'),
(38, 'Ou filme?', '2023-09-13 21:22:03', 'David', '#6ffff6', 'Livros');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
