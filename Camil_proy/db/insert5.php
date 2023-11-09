<?php 
	include '../db/conexion1.php';
	
	if(isset($_POST['guardar'])){
		$fecha_de_inicio=$_POST['fecha_de_inicio'];
		$fecha_de_finalziacion_del_tratamiento=$_POST['fecha_de_finalziacion_del_tratamiento'];
		$medicamientos_recetados=$_POST['medicamientos_recetados'];
		$instrucciones=$_POST['instrucciones'];


		if(!empty($fecha_de_inicio) && !empty($fecha_de_finalziacion_del_tratamiento) && !empty($medicamientos_recetados) && !empty($instrucciones)){
			if(!filter_var($instrucciones)){
				echo "<script> alert('Cedula no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO tratamientos(fecha_de_inicio,fecha_de_finalziacion_del_tratamiento,medicamientos_recetados,instrucciones) VALUES(:fecha_de_inicio,:fecha_de_finalziacion_del_tratamiento,:medicamientos_recetados,:instrucciones)');
				$consulta_insert->execute(array(
					':fecha_de_inicio' =>$fecha_de_inicio,
					':fecha_de_finalziacion_del_tratamiento' =>$fecha_de_finalziacion_del_tratamiento,
					':medicamientos_recetados' =>$medicamientos_recetados,
					':instrucciones' =>$instrucciones

				));
				header('location: ../app/modulo5.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Cliente</title>
	<link rel="stylesheet" href="../css/style_app.css">
</head>
<body>
	<div class="contenedor">
		<h2>Tratamientos</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="fecha_de_inicio" placeholder="Fecha de Inicio del Tratamiento" class="input__text">
				<input type="text" name="fecha_de_finalziacion_del_tratamiento" placeholder="Fecha de Finalizacion del Tratamiento" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="medicamientos_recetados" placeholder="Medicamentos Recetados" class="input__text">
				<input type="text" name="instrucciones" placeholder="Instrucciones" class="input__text">
			</div>
            <div class="btn__group">
				<a href="../app/modulo5.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>