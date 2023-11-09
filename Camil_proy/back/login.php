<?php

    include '../db/conexion.php';
    
    if (isset($_POST['login_btn'])) {
        $id = $_POST['email'];
        $pass = $_POST['pass'];
        

        $consulta = mysqli_query($conexion, "SELECT email, pass FROM users where email = '$id' and pass = '$pass'");

        $exist = mysqli_num_rows($consulta);

        if ($exist == 1){
            session_start();
            while ($datos = mysqli_fetch_array($consulta)) {
                $_SESSION['nombre'] = $datos['names'];
                $_SESSION['apellido'] = $datos['lastname'];
                $_SESSION['nacimiento'] = $datos['birth'];
                $_SESSION['identificacion'] = $datos['id_person'];
                $_SESSION['email'] = $datos['email'];
            }
            header('location:../app/modulo1.php');
        }else {
            header('location:../index.php?status=3');
        }
    }
?>