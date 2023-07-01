<?php
$servername = "localhost"; // Insira o nome do servidor do banco de dados
$username = "seu_usuario"; // Insira o nome de usuário do banco de dados
$password = "sua_senha"; // Insira a senha do banco de dados
$dbname = "nome_do_banco"; // Insira o nome do banco de dados

// Conectando ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>

<?php
// Recuperando os contatos do banco de dados
$sql = "SELECT id, nome, email, telefone FROM contatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibindo os contatos
    while ($row = $result->fetch_assoc()) {
        echo '<div class="contact">';
        echo '<img src="avatar.png" alt="Avatar">';
        echo '<div>';
        echo '<h3>' . $row["nome"] . '</h3>';
        echo '<p>Email: ' . $row["email"] . '</p>';
        echo '<p>Telefone: ' . $row["telefone"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>Nenhum contato encontrado.</p>';
}
?>