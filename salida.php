<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
        $operativo = $_POST['operativo'];
        $terminos = $_POST['terminos'];
        echo $nombre;
        echo $pass;
        echo $operativo;
        echo $terminos;
    ?>


</body>    
</html>