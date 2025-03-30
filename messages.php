<!-- messages.php -->
<?php
include 'db.php'; // Incluir a conexão com o banco de dados

$sql = "SELECT * FROM mensagens";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir as mensagens
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<strong>" . $row['nome'] . "</strong> (" . $row['email'] . ")<br>";
        echo "<p>" . $row['mensagem'] . "</p>";
        echo "</div><hr>";
    }
} else {
    echo "Nenhuma mensagem encontrada.";
}

$conn->close(); // Fechar a conexão
?>