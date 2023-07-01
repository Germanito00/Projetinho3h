<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Excluir o contato do banco de dados
    $sql = "DELETE FROM contatos WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirecionar para a página principal após a exclusão
        exit;
    } else {
        echo "Erro ao excluir o contato: " . $conn->error;
    }
}
?>
