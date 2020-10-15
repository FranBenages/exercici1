<?php

echo "Buenas ".filter_input(INPUT_COOKIE, 'username')."<br>";
echo "Te has registrado por última vez: ".filter_input(INPUT_COOKIE, 'date')." Que quieres
hacer, cerrar sesión o ir a tu parte privada?";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><a href="privado.php">Parte privada</a><br>
    <a href="unset.php">Cerrar sesión</a>
</body>
</html>