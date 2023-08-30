<?php
#actions/categoria_salvar.php
require 'conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_SPECIAL_CHARS);
$conexao->query("INSERT INTO usuario (nome, cor) VALUES ('$nome', '$cor')");

$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_SPECIAL_CHARS);
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$datahora = filter_input(INPUT_POST, 'datahora', FILTER_SANITIZE_SPECIAL_CHARS);
$conexao->query("INSERT INTO mensagem (msg, datahora, user) VALUES ('$msg', '$datahora', '$user')");




#redireciona
header('Location: chat.html');








?>