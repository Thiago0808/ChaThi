<?php
require 'conexao.php';
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$texto = filter_input(INPUT_GET, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
$cor = filter_input(INPUT_GET, 'cor', FILTER_SANITIZE_SPECIAL_CHARS);
$tema = filter_input(INPUT_GET, 'tema', FILTER_SANITIZE_SPECIAL_CHARS);
$avatar = filter_input(INPUT_GET, 'avatar', FILTER_SANITIZE_NUMBER_INT);

urldecode($cor);

if ($nome && $texto && $tema){
    $conexao->query("INSERT INTO comentario (texto, nome, cor, tema, avatar) VALUES ('$texto', '$nome', '$cor', '$tema', $avatar)");
}

#redireciona
header('Location: ../interface/chat.php?nome='."$nome".'&cor='.urlencode($cor).'&tema='.$tema.'&avatar='.$avatar.' ');

?>