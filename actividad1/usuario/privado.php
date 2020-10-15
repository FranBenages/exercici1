<?php
    echo "Nombre: ".filter_input(INPUT_COOKIE, 'username')."<br>";
    echo "Contraseña: ".filter_input(INPUT_COOKIE, 'pass')."<br>";
    echo "Ultima conexión: ".filter_input(INPUT_COOKIE, 'date')."<br>";
    
