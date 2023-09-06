<?php
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!trim($nome)){
        header("Location: index.html");
    }
    $cor = filter_input(INPUT_GET, 'cor', FILTER_SANITIZE_SPECIAL_CHARS);
    urldecode($cor);
    if (!trim($cor)){
        header("Location: index.html");
    }
?>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="style_chat.css">
    <link rel="icon" href="imagens/icone.png" type="image/x-icon">
    <title>ChaThi</title>
</head>
<body>
    
    <div class="container">
        <header>
            <h1><?=$nome?></h1>
        </header>

        <main>
            <?php
                require '../PHP/conexao.php';

                $sql = "SELECT * FROM comentario ORDER BY id DESC LIMIT 30";
                $comentarios = $conexao->query($sql);
                $comentarios = $comentarios->fetchAll();
                $comentarios = array_reverse($comentarios);
                foreach($comentarios as $c){

                    if ((($c["id"])%2)==0 ){
                        $lado="esq";
                    }
                    else{
                        $lado="dir";
                    }

                    echo '<div class="'.$lado.'">';
                        echo '<div class="coment" style="background:'.$c["cor"].'">';
                            echo '<h2>';
                                echo $c['nome'];
                            echo '</h2>';
                            echo '<p>';
                                echo $c['texto'];
                            echo '</p>';
                            echo '<h3>';
                                echo $c['dataHora'];
                            echo '</h3>';
                        echo '</div>';
                    echo '</div>';
                }


            ?>
        </main>

        <script>
            function scroll() {
                let main=document.querySelector("main");
                main.scrollTop=main.scrollHeight;
            }

            scroll();
        </script>

        <form action="../PHP/recebe.php" method="get">
            <input type="hidden" name="nome" value=<?=$nome?>>
            <input type="hidden" name="cor" value=<?=$cor?>>
            <div class="enviar-mensagem">
                <div class="input-group">
                    <textarea placeholder="Digite aqui..." class="form-control col-12" aria-label="With textarea" name="texto"></textarea>
                </div>
                <div class="botao">
                    <input type="submit" value="Enviar"  class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

     <!-- Boostrap -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>
</html>