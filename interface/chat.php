<?php
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!trim($nome)){
        header("Location: index.php");
    }
    $cor = filter_input(INPUT_GET, 'cor', FILTER_SANITIZE_SPECIAL_CHARS);
    urldecode($cor);
    if (!trim($cor)){
        header("Location: index.php");
    }
    $tema = filter_input(INPUT_GET, 'tema', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!trim($tema)){
        header("Location: index.php");
    }

    $avatar = filter_input(INPUT_GET, 'avatar', FILTER_SANITIZE_NUMBER_INT);
    if (!trim($avatar)){
        header("Location: index.php");
    }
?>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonte Inter 400 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    
    <!-- Fonte Inter 200 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="style_chat.css">
    <link rel="icon" href="imagens/icone.png" type="image/x-icon">
    <title>ChaThi</title>
</head>
<body>
    
    <div class="container">
        <header>
            <div>
                <img src="avatares/avatar<?=$avatar?>.jpg" alt="" class="avatar-header">
            </div>
            <div>
                <h1><?=$nome?></h1>
                <h4>Tema: <?=$tema?></h4>
            </div>

        </header>

        <main>
            <?php
                $sql = "SELECT * FROM comentario WHERE tema='$tema' ORDER BY id DESC";
            ?>
      
        </main>

        <form action="../PHP/recebe.php" method="get">
            <input type="hidden" name="nome" value="<?php echo $nome?>" id="nome">
            <input type="hidden" name="cor" value=<?=urlencode($cor)?> id="cor">
            <input type="hidden" name="tema" value=<?=$tema?> id="tema">
            <input type="hidden" name="avatar" value=<?=$avatar?> id="avatar">
            <div class="enviar-mensagem">
                <div class="input-group">
                    <textarea placeholder="Digite aqui..." class="form-control col-12" aria-label="With textarea" name="texto" id = "texto"></textarea>
                </div>
                <div class="botao">
                    <input type="submit" value="Enviar"  class="btn btn-primary">
                </div>
            </div>
        </form>

        <script>
            let body=document.querySelector("body");
            let main=document.querySelector("main");
            const tema = document.getElementById("tema");
            const form = document.querySelector("form")
            body.style.backgroundImage = ` url(pattern/pattern${tema.value}.jpg)`;

            function scroll() {
                main.scrollTop=main.scrollHeight;
            }

            scroll();

            const nome = document.getElementById("nome")
            console.log(nome.value)
            const cor = document.getElementById("cor")
            console.log(cor.value)
            console.log(tema.value)
            const texto = document.getElementById("texto")
            const avatar = document.getElementById("avatar")
            const h1 = document.querySelector("h1")

            form.addEventListener("submit", function(e){
                e.preventDefault();
                enviar();
            });

            function enviar(){
                fetch(`../PHP/recebe.php?nome=${nome.value}&texto=${texto.value}&cor=${cor.value}&tema=${tema.value}&avatar=${avatar.value}`, {
                }).then(function(resposta){
                    if (!resposta.ok){
                        alert("Não foi possível enviar");
                    }
                    else{
                        texto.value="";
                    }
                });
            }

            let verificar =1;
            let id = 0

            function receber(){
                fetch (`../PHP/ler.php?tema=${tema.value}&id=${id}`,)
                .then(function(resposta){
                    return resposta.json();
                }).then(function(resposta){
                    resposta.forEach(function(r){
                        verificar =0;

                        let lado = "esq";
                        if (r.nome == h1.innerHTML){
                            lado = "dir";
                        }

                        main.innerHTML += `<div class=${lado}> 
                                                <img src="avatares/avatar${r.avatar}.jpg" alt="" class="avatar"> 
                                                <div class="coment" style="background:${r.cor}">  
                                                    <h2> ${r.nome} </h2> 
                                                    <p> ${r.texto} </p>  
                                                    <h3> ${r.dataHora} </h3>
                                                </div>
                                            </div>`;
                                            id = r.id;

                        scroll();
                    });
                    if (verificar==1){
                        verificar =0;
                        main.innerHTML += `<div class="esq">  
                                                <div class="coment" style="background:white">  
                                                    <h2> Mensagem Oficial </h2> 
                                                    <p> Não há mensagens neste grupo. Seja o primeiro a enviar! </p>  
                                                </div>
                                            </div>`;
                    }
                });
            }

            texto.addEventListener("keypress", function(e){
                if (e.key=="Enter"){
                    enviar()
                }
            })

            setInterval(receber, 1000)
            receber();

        </script>
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