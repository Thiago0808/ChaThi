<?php
require 'conexao.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


$sql = "SELECT * FROM mensagens WHERE id>$id";
$mensagens = $conexao->query($sql);

foreach($mensagens as $m){
    echo "<h5>$m[]</h5>"
}


?>

