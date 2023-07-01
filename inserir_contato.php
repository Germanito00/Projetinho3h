<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    // Inserir o contato no banco de dados
    $sql = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirecionar para a página principal após a inserção
        exit;
    } else {
        echo "Erro ao inserir o contato: " . $conn->error;
    }
}
?>