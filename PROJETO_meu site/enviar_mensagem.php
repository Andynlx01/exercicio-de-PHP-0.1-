<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    echo "Obrigado, $nome! Sua mensagem foi enviada com sucesso.💕";
}
?>
