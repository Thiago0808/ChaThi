<?php
require 'conexao.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


$sql = "SELECT * FROM mensagens WHERE id>$id";
$mensagens = $conexao->query($sql);

foreach($mensagens as $m){
    echo $m['nome'];
    echo $m['datahora'];
    echo $m['texto'];
}

header('Location: chat.html');
?>

