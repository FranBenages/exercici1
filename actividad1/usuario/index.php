<?php
    $usuario=filter_input(INPUT_POST, 'user');
    $pass=filter_input(INPUT_POST, 'pass');
    $fecha=date('l jS /of F Y h:i:s A');
    $recordar=filter_input(INPUT_POST, 'recordar');

    if($usuario){
        if(filter_input(INPUT_COOKIE, 'username')!=null){
            setcookie('username', $usuario, time()+(86400*365), '/', 'localhost');
            header('Location:usuario.php');
        }else{
            setcookie('username', $usuario, time()+(86400*365), '/', 'localhost');
        }
    }else{
        echo "Introduce un usuario";
    }
    
    if($pass){
        if(filter_input(INPUT_COOKIE, 'date')!=null){
            setcookie('date', $fecha, time()+(86400*365), '/', 'localhost');
        }else{
            setcookie('date', $fecha, time()+(86400*365), '/', 'localhost');
        }
    }else{
        echo "Introduce una contraseña";
    }
    
    if(filter_input(INPUT_COOKIE, 'pass')!=null){
        setcookie('pass', $pass, time()+(86400*365), '/', 'localhost');
    }else{
        setcookie('pass', $pass, time()+(86400*365), '/', 'localhost');
    }

?>
