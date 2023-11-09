<?php

    session_start();
    
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $identificacion = $_SESSION['identificacion'];
    $email = $_SESSION['email'];

    $nombre_completo = $nombre.' '.$apellido; 

?>