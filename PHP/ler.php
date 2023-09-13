<?php
require 'conexao.php';



$sql = "SELECT * FROM comentario ORDER BY id DESC";
$mensagens = $conexao->query($sql);

$dados = $mensagens->fetchAll(PDO::FETCH_ASSOC);
$dados = array_reverse($dados);
echo json_encode($dados);

// foreach($mensagens as $m){
//     echo $m['nome'];
//     echo $m['datahora'];
//     echo $m['texto'];
// }

//header('Location: ../interface/chat.php');
?>

