<?php
require_once 'poo.php';

$jogo = new JogoAdivinhacao();

if (isset($_POST['guess']) && isset($_POST['nome'])) {
    $numero = $_POST['guess'];
    $nome = $_POST['nome'];

    $jogo->verificarNumero($numero, $nome);
}

$jogo->fecharConexao();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Advinhe um número</title>
    <link rel="stylesheet" href="stylejogos.css">
    <script src="javinha.js"></script>
</head>
<body>

<h1>Advinhe o número</h1>

<form method="post">
    <input type="text" name="nome" placeholder="Digite seu nome">
    <input type="number" name="guess" placeholder="Digite seu palpite" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>
