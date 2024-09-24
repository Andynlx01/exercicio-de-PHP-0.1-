<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/736x/16/57/72/1657723c025259fe330e04f3e43b642c.jpg" type="image/x-icon">
    <link rel="stylesheet" href="site_styles.css"> <!-- Opcional para adicionar estilo -->
</head>

<!-- página principal (index)-->
<?php
include_once ('topo.php');
include_once ('menu.php');

if (empty($_SERVER["QUERY_STRING"])) {
    $pg = "principal.php";
    include_once($pg);
} else{
    $pg = $_GET["pg"];
    include_once("$pg.php");

}

include_once("rodape.php");

?>

</html>