<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // pode fazer o processamento da mensagem, como enviá-la por e-mail ou armazená-la no banco de dados.
    echo "Obrigado, $nome! Sua mensagem foi enviada com sucesso.";
}
?>
