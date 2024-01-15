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

<h1 align="center">Personalização</h1>
Feita a base do site, cada grupo deveria personalizar seu chat, tanto esteticamente, quando com novas ideias e funções. Para tornar nosso chat mais bonito, utilizamos Figma para os designs e Bootstrap para os componentes, e adicionamos 3 funções novas, que são as seguintes:

<h1 align="center">Função: Cores nas Mensagens</h1>
A primeira atualização que fizemos foi a possiblidade de escolher a cor de fundo de suas mensagens, junto com seu nome de usuário.

Essa cor seria então salva no banco de dados junto com o comentário, e colocada no seu style sempre que apresentado.

Um problema que tivemos inicialmente foi que, ao mandar a cor em hexadecial (Ex: #FF0000) a # muitas vezes se perdia, tornando necessário funções do PHP de decode e encode para ela.

<h1 align="center">Função: Temas de Conversa</h1>
Nossa segunda novidade foi, ao invés de ter somente um chat geral, termos chats separados por temas, como Programadores, Livros, etc...

Para isso, a pessoa seleciona no começo do chat, junto com nome e cor, qual grupo ela deseja entrar, e então, o arquivo php irá apresentar somentes as mensagens daquele grupo.

Ao invés de criarmos uma nova tabela para cada grupo, na qual precisaria de um NxN, o que tornaria o código mais complexo, simplesmente adicionamos o atributo tema na tabela comentário, já que o projeto é simples.

Também adicionamos uma função que ao entrar na página, muda o fundo do chat para um correspondente ao tema.

<h1 align="center">Função: Avatares</h1>
Por fim, nossa última novidade foram avatares, fotos de personagens para nossos usuários, que podem ser selecionanos na tela inicial.

Existem 6 opções de avatares, que acompanham o usuário no decorrer do site.

Estes são até salvos no banco de dados, junto com os comentários, sendo salvos como números de 1 a 6. As imagens, em si, já estão salvas em uma pasta no código.

No código, esse número é pego e colocado no nome da imagem, pois estas são nomeadas como avatar1, avatar2 na pasta, e assim por diante.
