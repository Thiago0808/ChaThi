-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Set-2023 às 04:54
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
  `tema` varchar(100) NOT NULL,
  `avatar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(41, 'FUncionou', '2023-09-22 16:16:40', 'Aline', '#ef2929', 'Livros', 5),
(42, 'shooooooooooooooooooooooooow', '2023-09-22 16:17:21', 'Aline', '#ef2929', 'Livros', 5),
(43, 'Olá', '2023-09-22 16:19:35', 'Thiago ', '#3465a4', 'Livros', 5),
(44, 'Oláaaaaaaa', '2023-09-22 16:21:07', 'Aline', '#ef2929', 'Estudos', 5),
(45, 'S2', '2023-09-22 16:22:02', 'Thiago ', '#3465a4', 'Estudos', 5),
(46, 'Como você está?', '2023-09-22 16:22:40', 'Thiago ', '#3465a4', 'Trabalhos', 5),
(47, 'Estou bem,Estou sem assunto', '2023-09-22 16:22:57', 'Aline', '#ef2929', 'Trabalhos', 5),
(48, 'Entendo', '2023-09-22 16:23:02', 'Thiago ', '#3465a4', 'Trabalhos', 5),
(49, 'Testando', '2023-09-22 16:35:53', 'Pessoa Não Tão Inteligente', '#edd400', 'Estudos', 5),
(50, 'Olá', '2023-09-22 16:36:08', 'Pessoa Não Tão Inteligente', '#edd400', 'Estudos', 5),
(51, 'não sei', '2023-09-22 16:36:36', 'Aline', '#ef2929', 'Cozinheiros', 5),
(52, 'Tansa', '2023-09-22 16:36:40', 'Pessoa Não Tão Inteligente', '#edd400', 'Cozinheiros', 5),
(53, ';-;', '2023-09-22 16:36:46', 'Aline', '#ef2929', 'Cozinheiros', 5),
(54, 'AAAAAAAAAAAAAAAAAAAAAAAAAAA', '2023-09-22 16:36:56', 'Pessoa Não Tão Inteligente', '#edd400', 'Cozinheiros', 5),
(55, 'tividade de Programação Web 2023 ', '2023-09-22 16:37:13', 'Aline', '#ef2929', 'Cozinheiros', 5),
(56, 'Sabe nem copiar', '2023-09-22 16:37:24', 'Pessoa Não Tão Inteligente', '#edd400', 'Cozinheiros', 5),
(57, 'burro', '2023-09-22 16:37:55', 'Aline', '#ef2929', 'Programadores', 5),
(58, 'Corrige então se conseguir', '2023-09-22 16:38:18', 'Chefe', '#eeeeec', 'Programadores', 5),
(59, '😃🙃', '2023-09-22 16:39:25', 'Aline', '#ef2929', 'Livros', 5),
(60, '😀', '2023-09-22 16:40:16', 'Aline', '#ef2929', 'Livros', 5),
(61, '😬🥳😴🧐🫤🤧', '2023-09-22 16:40:55', 'Aline', '#ef2929', 'Livros', 5),
(65, '😀🤢🤢🤢🤢🤢🤢🤢🤢🤢🤢🤢🤢🤢🤢🤢', '2023-09-22 16:43:11', 'Aline', '#ef2929', 'Livros', 5),
(66, '😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀😀v', '2023-09-22 16:43:22', 'Aline', '#ef2929', 'Livros', 5),
(67, 'Party Animals é um jogo multijogador de festa desenvolvido pela Recreate Games e publicado pela Source Technology. Disponível para Xbox One, Xbox Series X|S e Microsoft Windows. ', '2023-09-22 16:47:43', 'Aline', '#ef2929', 'Trabalhos', 5),
(68, 'Data de lançamento inicial: 20 de setembro de 2023Plataformas: Xbox Series X e Series S, Microsoft WindowsDesenvolvedor: Recreate GamesGêneros: Jogo eletrônico casual, Jogo eletrônico de luta, Jogo eletrônico independente, Party gameModo: Jogo multijogadorEstúdios: Source Technology, Source Technology Inc.', '2023-09-22 16:47:56', 'Aline', '#ef2929', 'Trabalhos', 5),
(69, 'bom dia', '2023-09-22 16:49:16', 'Chico moedas', '#ff0000', 'Livros', 5),
(70, '&#60;h1&#62;oi&#60;/h1&#62;', '2023-09-22 16:49:26', 'Aline', '#ef2929', 'Trabalhos', 5),
(71, 'bom dia', '2023-09-22 16:49:34', 'Chico moedas', '#ff0000', 'Trabalhos', 5),
(72, 'te peguei kkkk', '2023-09-22 16:49:41', 'Chico moedas', '#ff0000', 'Trabalhos', 5),
(73, 'SAIA IMEDIATAMENTE', '2023-09-22 16:50:41', 'FBI', '#729fcf', 'Trabalhos', 5),
(74, 'Filho: mãe eu quero uma festa com todo mundo!!! 🥺🙏', '2023-09-22 16:51:11', 'contador de histórias', '#000000', 'Trabalhos', 5),
(75, 'Mãe: tá bom meu filho, eu farei 😘🥰', '2023-09-22 16:51:16', 'contador de histórias', '#000000', 'Trabalhos', 5),
(76, '*no dia da festa* Filho: pq ninguém veio?? 😭😭😭', '2023-09-22 16:51:24', 'contador de histórias', '#000000', 'Trabalhos', 5),
(77, 'Mãe: porque só convidei o seu mundo... 🌎 🥰', '2023-09-22 16:51:31', 'contador de histórias', '#000000', 'Trabalhos', 5),
(78, 'O tanso colocou cor preta pra mensagem', '2023-09-22 16:51:36', 'FBI', '#729fcf', 'Trabalhos', 5),
(79, '*a porta da sala se abre*', '2023-09-22 16:51:39', 'contador de histórias', '#000000', 'Trabalhos', 5),
(80, 'Neymar: eai campeão, vamo jogar um fut?', '2023-09-22 16:51:47', 'contador de histórias', '#000000', 'Trabalhos', 5),
(81, 'e assim me despeço', '2023-09-22 16:52:57', 'contador de histórias', '#000000', 'Trabalhos', 5),
(82, 'com minhas mensagens pretas', '2023-09-22 16:53:01', 'contador de histórias', '#000000', 'Trabalhos', 5),
(83, 'Finalmente', '2023-09-22 16:53:06', 'FBI', '#729fcf', 'Trabalhos', 5),
(84, '499999', '2023-09-22 16:53:28', 'Chico moedas', '#ff0000', 'Trabalhos', 5),
(85, 'teste', '2023-09-22 16:53:49', 'Aline Espindola', '#40ffe9', 'Trabalhos', 5),
(97, NULL, '2023-09-24 23:51:28', '', '', '', 5);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
