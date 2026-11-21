<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor, debes iniciar sesion");
            </script>
        ';
        header("location: index.php");
        session_destroy();
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidoa</title>
</head>
<body>
    <h1>Bienvenido/a</h1>
    <a href="php/cerrar_sesion.php">cerrar Sesion</a>
</body>
</html>