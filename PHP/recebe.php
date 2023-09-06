<?php
require 'conexao.php';
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$texto = filter_input(INPUT_GET, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
$cor = filter_input(INPUT_GET, 'cor', FILTER_SANITIZE_SPECIAL_CHARS);
urldecode($cor);


if ($nome && $texto){
    $conexao->query("INSERT INTO comentario (texto, nome, cor) VALUES ('$texto', '$nome', '$cor')");
}



#redireciona
header('Location: ../interface/chat.php?nome='.$nome.'&cor='.urlencode($cor).' ');








?>