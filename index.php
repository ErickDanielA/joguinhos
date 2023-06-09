<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="stylejogos.css">
    <script src="javinha.js"></script>
</head>
<body>

<h1>Bem-vindo aos jogos!</h1>

<h2>Menu</h2>
<ul class="menu">
    <li>
        <a href="jokenpo.php" class="button" onclick="exibirIframe('jokenpo.php')">Jo Ken Po</a>
        <p class="caption">Regra: No Jo Ken Po (também conhecido como Pedra, Papel e Tesoura), os jogadores escolhem entre pedra, papel ou tesoura, e o vencedor é determinado pelas regras do jogo.</p>
    </li>
    <li>
        <a href="memoria.php" class="button" onclick="exibirIframe('memoria.php')">Jogo da Memória</a>
        <p class="caption">Regra: No Jogo da Memória, o objetivo é encontrar todos os pares de cartas idênticas em um conjunto de cartas viradas para baixo.</p>
    </li>
    <li>
        <a href="adivinhe.php" class="button" onclick="exibirIframe('adivinhe.php')">Adivinhe um número</a>
        <p class="caption">Regra: Neste jogo, um jogador escolhe um número entre 1 e 100, e o outro jogador deve tentar adivinhar o número escolhido.</p>
    </li>
    <li>
        <a href="imparpar.php" class="button" onclick="exibirIframe('imparpar.php')">Par ou Ímpar</a>
        <p class="caption">Regra: No jogo Par ou Ímpar, os jogadores escolhem entre par ou ímpar, e então mostram um número. O resultado é determinado pela soma dos números escolhidos pelos jogadores.</p>
    </li>
</ul>


<iframe id="meuIframe" name="meuIframe" src="" frameborder="0" width="1175" height="600"></iframe>

</body>
</html>
