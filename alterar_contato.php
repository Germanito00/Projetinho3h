<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    // Atualizar o contato no banco de dados
    $sql = "UPDATE contatos SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirecionar para a página principal após a atualização
        exit;
    } else {
        echo "Erro ao atualizar o contato: " . $conn->error;
    }
}
?>