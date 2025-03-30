<!-- contact.php -->
<?php include 'includes/header.php'; ?>

<main>
    <h2>Fale Conosco</h2>
    <form action="send_message.php" method="POST">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Mensagem:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>