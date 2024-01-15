<div align="center">
<img style="width: 50%;" src="https://github.com/Thiago0808/ChaThi/assets/141963700/f84a5060-26e0-4e1d-b9c4-27e630621320" />
</div>

<h1 align="center">Como Começou?</h1>
O ChaThi começou como um projeto de Programação Web, no Curso Técnico em Informática do IFSC na qual eu estudava. Tratava-se de um trabalho em equipe que faríamos um chat online, seguindo inicialmente nosso professor para saber executar o projeto, e depois, inovando com nossas ideias.

<h1 align="center">Sistema Assíncrono</h1>

O foco deste trabalho era programar um sistema de chat assíncrono, ou seja, um sistema online que permite pessoas em computadores diferentes em tempo real. Para isso, fizemos uso de JavaScript, PHP e de um banco de dados SQL que armazena os comentários. 

Ao entrar no site, a pessoa seleciona seu nome (Não utilizamos um sistema de contas pois se tratava de um projeto mais simples).

Então, ao entrar no chat, uma função JS irá pegar os comentários do banco de dados com o arquivo ler.php e apresentar eles. O usuário então pode escrever seu comentário e o enviar, para o recebe.php que recebe os dados e os armazena no banco.

O que torna este sistema assíncrono é na realidade, bem simples. A função de apresentar todos os comentários é reativada a cada 1 segundo, através de JS, então os comentários recém adicionados já são apresentados para todo mundo.


