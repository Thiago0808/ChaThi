<?php
#actions/categoria_salvar.php
require 'conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
$datahora = filter_input(INPUT_POST, 'datahora', FILTER_SANITIZE_SPECIAL_CHARS);
$conexao->query("INSERT INTO mensagem (texto, datahora, nome) VALUES ('$texto', '$datahora', '$nome')");




#redireciona
header('Location: chat.html');








?>