<?php

    include '../db/conexion1.php';
    include '../db/perfil.php';

	$sentencia_select=$con->prepare('SELECT * FROM medicos ORDER BY id_medico DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('SELECT *FROM medicos WHERE nombre LIKE :campo OR apellido LIKE :campo OR especialidad LIKE :campo OR numero_de_colegiacion LIKE :campo OR horiario_de_consulta LIKE :campo OR contacto LIKE :campo;');

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
            <h2>Tabla de Médicos</h2>
                <div class="barra_buscador">
                    <form action="" class="formulario" method="post">
                        <input type="text" name="buscar" placeholder="buscar nombre o apellido" 
                        value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
                        <input type="submit" class="btn" name="btn_buscar" value="Buscar">
                        <a href="../db/insert2.php" class="btn btn__nuevo">Nuevo</a>
                    </form>
                </div>
                <table>
                    <tr class="head">
                        <td>Id_Medicos</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Especialidad</td>
                        <td>Numero de Colegiacion</td>
                        <td>Horiario de Consulta</td>
                        <td>Contacto</td>
                        <td colspan="2">Acción</td>
                    </tr>

                    <?php foreach($resultado as $fila):?>
                        <tr >
                            <td><?php echo $fila['id_medico']; ?></td>
					        <td><?php echo $fila['nombre']; ?></td>
					        <td><?php echo $fila['apellido']; ?></td>
					        <td><?php echo $fila['especialidad']; ?></td>
					        <td><?php echo $fila['numero_de_colegiacion']; ?></td>
					        <td><?php echo $fila['horiario_de_consulta']; ?></td>
					        <td><?php echo $fila['contacto']; ?></td>
					        <td><a href="../db/update2.php?id_medico=<?php echo $fila['id_medico']; ?>"  class="btn__update" >Editar</a></td>
					        <td><a href="../db/delete2.php?id_medico=<?php echo $fila['id_medico']; ?>" class="btn__delete">Eliminar</a></td>
				        </tr>
			        <?php endforeach ?>
                    
                </table>
            </div>
    
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