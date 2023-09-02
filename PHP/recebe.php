<?php
require 'conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
$data = date_default_timezone_set('America/Sao_Paulo');
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_SPECIAL_CHARS);

date_default_timezone_set('America/Sao_Paulo');

$data = date("Y-m-d H:i:s");  
$datahora=date("Y-m-d",strtotime($data));


$conexao->query("INSERT INTO comentario (texto, datahora, nome, cor) VALUES ('$texto', $datahora, '$nome', '$cor')");

#redireciona
header('Location: ../interface/chat.php');








?>