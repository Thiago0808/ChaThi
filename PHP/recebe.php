<?php
require 'conexao.php';
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$texto = filter_input(INPUT_GET, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
$cor = filter_input(INPUT_GET, 'cor', FILTER_SANITIZE_SPECIAL_CHARS);
urldecode($cor);
//DATA E HORA ESTAO COM PROBLEMA
date_default_timezone_set('America/Sao_Paulo');
$data = date("Y-m-d H:i");

echo $data;

$conexao->query("INSERT INTO comentario (texto, dataHora, nome, cor) VALUES ('$texto', '$data', '$nome', '$cor')");



#redireciona
header('Location: ../interface/chat.php?nome='.$nome.'&cor='.urlencode($cor).' ');








?>