<?php
#actions/categoria_salvar.php
require 'conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_SPECIAL_CHARS);
$datahora = filter_input(INPUT_POST, 'datahora', FILTER_SANITIZE_SPECIAL_CHARS);
$conexao->query("INSERT INTO mensagem (msg, datahora, nome) VALUES ('$msg', '$datahora', '$nome')");




#redireciona
header('Location: chat.html');








?>