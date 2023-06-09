<?php
class JogoAdivinhacao {
    private $mysqli;

    public function __construct() {
        $host = 'localhost';
        $port = 3306;
        $db = 'jogos';
        $user = 'root';
        $password = '';

        $this->mysqli = new mysqli($host, $user, $password, $db, $port);

        if ($this->mysqli->connect_errno) {
            echo 'Falha ao conectar ao banco de dados: ' . $this->mysqli->connect_error;
            exit();
        }
    }

    public function verificarNumero($numero, $nome) {
        $query = "SELECT COUNT(*) as total FROM adivinha WHERE numero = $numero";

        $result = $this->mysqli->query($query);

        if (!$result) {
            echo 'Erro na consulta: ' . $this->mysqli->error;
            exit();
        }

        $row = $result->fetch_assoc();
        $total = $row['total'];

        echo 'Total: ' . $total; // Debug: exibir o total encontrado

        if ($total > 0) {
            echo 'Você ganhou!';
            $resultado = 'Você ganhou!';
            $pontuacao = 1; // Defina a pontuação desejada quando o número for correto
        } else {
            echo 'Poxa, número errado!';
            $resultado = 'Poxa, número errado!';
            $pontuacao = 0; // Defina a pontuação desejada quando o número for incorreto
        }

        $insertQuery = "INSERT INTO adivinha (nome, numero, pontuacao, resultado) VALUES ('$nome', '$numero', '$pontuacao', '$resultado')";

        if ($this->mysqli->query($insertQuery) === TRUE) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir os dados: " . $this->mysqli->error;
        }
    }

    public function fecharConexao() {
        $this->mysqli->close();
    }
}
?>
