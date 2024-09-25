
<main class="form-container">
    <h2>Fale Conosco💬</h2>
    <form action="enviar_mensagem.php" method="POST" class="form-fale-conosco">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="5" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</main>

