-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jan-2024 às 05:35
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

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
  `tema` varchar(100) NOT NULL,
  `avatar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id`, `texto`, `dataHora`, `nome`, `cor`, `tema`, `avatar`) VALUES
(33, 'Olá a todos! Espero que estejam tendo um ótimo dia. Tenho que compartilhar algo empolgante: comecei a ler &#34;Cem Anos de Solidão&#34; de Gabriel García Márquez e estou completamente cativada pela narrativa mágica deste livro.', '2023-09-13 21:12:21', 'Alice', '#ffd336', 'Livros', 5),
(34, 'Olá, Alice! Que escolha maravilhosa. &#34;Cem Anos de Solidão&#34; é uma obra-prima da literatura latino-americana. O realismo mágico de Márquez é fascinante. Como você descreveria a experiência de leitura até agora?', '2023-09-13 21:16:35', 'Bob', '#bbff65', 'Livros', 5),
(35, 'Uma das coisas que mais me impressionam é a linguagem de Márquez. Sua prosa é poética e evocativa. Ele cria imagens vívidas e emocionantes com suas palavras', '2023-09-13 21:17:22', 'Bob', '#bbff65', 'Livros', 5),
(36, 'Olá a todos! Fico feliz em participar desta conversa sobre um livro tão impactante. Li &#34;Cem Anos de Solidão&#34; há alguns anos e ainda me lembro da sensação de estar imerso em um mundo mágico e surreal. É impressionante como o livro reflete as complexidades da América Latina', '2023-09-13 21:20:35', 'David', '#6ffff6', 'Livros', 5),
(37, 'Há um outro livro que leram para compartilhar a experiência?', '2023-09-13 21:21:22', 'David', '#6ffff6', 'Livros', 5),
(38, 'Ou filme?', '2023-09-13 21:22:03', 'David', '#6ffff6', 'Livros', 5),
(39, 'Boa tarde', '2023-09-22 16:15:01', 'Thiago ', '#3465a4', 'Livros', 5),
(40, 'Boa tarde', '2023-09-22 16:16:14', 'Aline', '#ef2929', 'Livros', 5),
(42, 'shooooooooooooooooooooooooow', '2023-09-22 16:17:21', 'Aline', '#ef2929', 'Livros', 5),
(43, 'Olá', '2023-09-22 16:19:35', 'Thiago ', '#3465a4', 'Livros', 5),
(44, 'Oláaaaaaaa', '2023-09-22 16:21:07', 'Aline', '#ef2929', 'Estudos', 5),
(45, 'S2', '2023-09-22 16:22:02', 'Thiago ', '#3465a4', 'Estudos', 5),
(46, 'Como você está?', '2023-09-22 16:22:40', 'Thiago ', '#3465a4', 'Trabalhos', 5),
(47, 'Estou bem,Estou sem assunto', '2023-09-22 16:22:57', 'Aline', '#ef2929', 'Trabalhos', 5),
(48, 'Entendo', '2023-09-22 16:23:02', 'Thiago ', '#3465a4', 'Trabalhos', 5),
(51, 'não sei', '2023-09-22 16:36:36', 'Aline', '#ef2929', 'Cozinheiros', 5),
(53, ';-;', '2023-09-22 16:36:46', 'Aline', '#ef2929', 'Cozinheiros', 5),
(67, 'Party Animals é um jogo multijogador de festa desenvolvido pela Recreate Games e publicado pela Source Technology. Disponível para Xbox One, Xbox Series X|S e Microsoft Windows. ', '2023-09-22 16:47:43', 'Aline', '#ef2929', 'Trabalhos', 5),
(68, 'Data de lançamento inicial: 20 de setembro de 2023Plataformas: Xbox Series X e Series S, Microsoft WindowsDesenvolvedor: Recreate GamesGêneros: Jogo eletrônico casual, Jogo eletrônico de luta, Jogo eletrônico independente, Party gameModo: Jogo multijogadorEstúdios: Source Technology, Source Technology Inc.', '2023-09-22 16:47:56', 'Aline', '#ef2929', 'Trabalhos', 5),
(83, 'Finalmente', '2023-09-22 16:53:06', 'FBI', '#729fcf', 'Trabalhos', 5);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
