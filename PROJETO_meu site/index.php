<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesthetic life</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/736x/4a/0f/57/4a0f57b9d7b2ba918f59049200aa9c37.jpg" type="image/x-icon">
    <link rel="stylesheet" href="site_styles.css"> <!-- Opcional para adicionar estilo -->
</head>
<body>
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

include_once("rodape.php"); ?>
</div>

</body>
</html>