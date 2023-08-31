<?php
require 'conexao.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


$sql = "SELECT * FROM comentario WHERE id>$id";
$mensagens = $conexao->query($sql);

foreach($mensagens as $m){
    echo $m['nome'];
    echo $m['datahora'];
    echo $m['texto'];
}

header('Location: ../interface/chat.php');
?>

