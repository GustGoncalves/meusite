<!-- send_message.php -->
<?php
include 'db.php'; // Incluir a conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

    // Validar os campos
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Todos os campos são obrigatórios!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, insira um e-mail válido!";
    } else {
        // Inserir dados no banco de dados
        $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

        if ($conn->query($sql) === TRUE) {
            echo "<h1>Mensagem Enviada com Sucesso!</h1>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close(); // Fechar a conexão
} else {
    echo "Erro ao enviar a mensagem!";
}
?>