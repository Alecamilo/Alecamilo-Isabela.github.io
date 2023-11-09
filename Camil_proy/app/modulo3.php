<?php

    include '../db/conexion1.php';
    include '../db/perfil.php';
    
    

	$sentencia_select=$con->prepare('SELECT * FROM citas ORDER BY id_cita DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('SELECT *FROM citas WHERE nombre LIKE :campo OR apellido LIKE :campo OR especialidad LIKE :campo OR numero_de_colegiacion LIKE :campo OR horiario_de_consulta LIKE :campo OR contacto LIKE :campo;');

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_app.css">
    <script src="https://kit.fontawesome.com/27010df775.js" crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <link rel="icon" type="image/png" href="../img/latido.png">
    <title>Medicina</title>
</head>
<body>
    <section id="general_section">
        <div class="left_menu">
            <menu-main></menu-main>
        </div>
        <div class="central">
            <h2>Tabla de Citas</h2>
            <div class="barra_buscador">
                <form action="" class="formulario" method="post">
                    <input type="text" name="buscar" placeholder="buscar nombre o apellido" 
                    value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
                    <input type="submit" class="btn" name="btn_buscar" value="Buscar">
                    <a href="../db/insert3.php" class="btn btn__nuevo">Nuevo</a>
                </form>
            </div>
            <table>
                <tr class="head">
                    <td>Id_Citas</td>
                    <td>Id_Paciente</td>
                    <td>Id_Medico</td>
                    <td>Fecha de la Cita</td>
                    <td>Motivo de la Cita</td>
                    <td>Estado de la Cita</td>
                    <td colspan="2">Acción</td>
                </tr>

                <?php foreach($resultado as $fila):?>
                    <tr >
                        <td><?php echo $fila['id_cita']; ?></td>
                        <td><?php echo $fila['id_paciente']; ?></td>
                        <td><?php echo $fila['id_medico']; ?></td>
                        <td><?php echo $fila['fecha_de_la_cita']; ?></td>
                        <td><?php echo $fila['motivo_de_la_cita']; ?></td>
                        <td><?php echo $fila['estado_de_la_cita']; ?></td>
                        <td><a href="../db/update3.php?id_cita=<?php echo $fila['id_cita']; ?>"  class="btn__update" >Editar</a></td>
                        <td><a href="../db/delete3.php?id_cita=<?php echo $fila['id_cita']; ?>" class="btn__delete">Eliminar</a></td>
                    </tr>
			    <?php endforeach ?>
            </table>
        </div>
        <div class="right_menu">
            <div class="profile">
                <img src="https://thispersondoesnotexist.com/" alt="">
                <p><?php echo $nombre_completo?></p>
                <span><?php echo $email?></span>
            </div>
            <hr class="sepa">
            <div class="last_tras">
                <h2>Ultimos movimientos</h2>
                <div class="t_i">
                    <span>18/10/2023</span>
                    <p>Lorem ipsum dolor, sit amet 
                        consectetur adipisicing elit. 
                        Cupiditate, excepturi.</p>
                </div>
                <div class="t_i">
                    <span>18/10/2023</span>
                    <p>Lorem ipsum dolor, sit amet 
                        consectetur adipisicing elit. 
                        Cupiditate, excepturi.</p>
                </div>
                <div class="t_i">
                    <span>18/10/2023</span>
                    <p>Lorem ipsum dolor, sit amet 
                        consectetur adipisicing elit. 
                        Cupiditate, excepturi.</p>
                </div>
                <div class="t_i">
                    <span>18/10/2023</span>
                    <p>Lorem ipsum dolor, sit amet 
                        consectetur adipisicing elit. 
                        Cupiditate, excepturi.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/componet_menu.js"></script>

</body>
</html>