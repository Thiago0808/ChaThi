<?php
    $tema = filter_input(INPUT_GET, 'tema', FILTER_SANITIZE_SPECIAL_CHARS);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="style_index.css">
    <link rel="icon" href="imagens/icone.png" type="image/x-icon">
    <title>ChaThi</title>
</head>

<body>
    <div class="container">
        <div id="colunas">
            <div class="esq">
                <img src="imagens/Chathi-removebg-preview 1.png" alt="">
    
                <form action="chat.php" method="get">
                    <div class="nome">
                        <label for="nome">Nome</label>
                        <input class= "colnom form-control" type="search" name="nome" id="nome" placeholder="" required>
                    </div>
                    <div class="cores">
                        <label for="cor">Cor da mensagem</label>
                        <input class= "colcor"  type="color" name="cor" id="cor" placeholder="" required>
                    </div>
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="dropdown p-2 bd-highlight">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                              Temas
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" id="dropdown" name="dropdown" value="estudos" href="?tema=estudos">Estudos</a>
                                <a class="dropdown-item" id="dropdown" name="dropdown" value="jogos" href="#">Jogos</a>
                                <a class="dropdown-item" id="dropdown" name="dropdown" value="trabalhos" href="#">Trabalho</a>
                                <a class="dropdown-item" id="dropdown" name="dropdown" value="cozinheiros" href="#">Cozinheiros</a>
                                <a class="dropdown-item" id="dropdown" name="dropdown" value="programadores" href="#">Programadores</a>
                                <a class="dropdown-item" id="dropdown" name="dropdown" value="livros" href="#">Livros</a>
                            </div>
                        </div> 
                        <div class="p-2 bd-highlight">
                            <input class="button btn btn-primary p-2 bd-highlight" type="submit" value="Conversar!">
                        </div>
                    </div>
                </form>

            </div>

            <div class="espaco"></div>
    
            <div class="dir">
                <img class="lado" src="imagens/undraw_chat_re_re1u 1.png" alt="">
            </div>
        </div>
        

    </div>



    <!-- Boostrap -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>

</html>  