<?php
$espec=filter_input(INPUT_POST, 'espec', FILTER_SANITIZE_SPECIAL_CHARS);


if(isset($_GET['espec'])){
    $pelis=[
        ["titulo"=>"School of rock", "actor_protagonista"=>"Jack Black", "launch_year"=>"2003"], 
        ["titulo"=>"Spider-Man", "actor_protagonista"=>"Tom Holland", "launch_year"=>"2017"]
    ];
    foreach($pelis as $peli){
        if(array_search($espec, $peli)){
            $titulo=$peli['titulo'];
            $prota=$peli['actor_protagonista'];
            $lanzamiento=peli['launch_year'];
            echo "Has elegido <strong> ".$titulo."</strong> y esta es su info:<br>
            El protagonista es: ".$prota." y se lanzó el año: ".$lanzamiento;
        }
    }
}else{
    echo'Por favor introduce la pelicula de la que te quieres informar';
}



