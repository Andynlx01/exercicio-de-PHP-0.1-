<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Serviços</title>
    <link rel="stylesheet" href="site_styles.css">
</head>
<body>

<?php
include_once 'topo.php';
include_once 'menu.php';
?>

<main>
    <h2>Fale Conosco</h2>
    <form action="envia_mensagem.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="5" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</main>

<?php
include_once 'rodape.php';
?>

</body>
</html>