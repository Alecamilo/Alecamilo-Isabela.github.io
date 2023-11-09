<?php

    include '../db/conexion.php';

    if (isset($_POST['register_btn'])) {
        $names = $_POST['names'];
        $lastname = $_POST['lastname'];
        $birth = $_POST['birth'];
        $email = $_POST['email'];
        $id_person = $_POST['id_person'];
        $pass = $_POST['pass'];


        mysqli_query($conexion, "SELECT * FROM users where email = '$email'");
        

        if($cant == 1 ) {
            header('location: ../index.php?status=2');
        }else {
            $sql = mysqli_query($conexion, "INSERT INTO users(names, lastname, birth, id_person, email, pass) VALUES ('$names', '$lastname', '$birth', '$id_person', '$email', '$pass')");
            header('location: ../index.php?status=1');
        }

    }
?>