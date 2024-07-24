<?php
include 'conexao.php';

// Se a conexão foi bem-sucedida, exibe uma mensagem
if (!$mysqli->connect_error) {
    echo '<p>Conexão com o banco de dados estabelecida com sucesso.</p>';
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $comentarios = $_POST['comentarios'];

    // Inserção de dados na tabela
    $sql = "INSERT INTO cadastro (nome, email, cidade, estado, comentarios) VALUES ('$nome', '$email', '$cidade', '$estado', '$comentarios')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $mysqli->error;
    }
}
$mysqli->close();
?>
