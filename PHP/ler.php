<?php
require 'conexao.php';

$tema=filter_input(INPUT_GET, 'tema', FILTER_SANITIZE_SPECIAL_CHARS);
$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT * FROM comentario WHERE tema='$tema' AND id>$id ORDER BY id DESC LIMIT 20";
$mensagens = $conexao->query($sql);
$dados = $mensagens->fetchAll(PDO::FETCH_ASSOC);
$dados = array_reverse($dados);
echo json_encode($dados);

?>

