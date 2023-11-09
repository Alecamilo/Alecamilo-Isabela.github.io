<?php 
	include '../db/conexion1.php';
	
	if(isset($_POST['guardar'])){
		$fecha_del_diagnostico=$_POST['fecha_del_diagnostico'];
		$descripcion_del_diagnostico=$_POST['descripcion_del_diagnostico'];
		$tratamiento_recomendado=$_POST['tratamiento_recomendado'];


		if(!empty($fecha_del_diagnostico) && !empty($descripcion_del_diagnostico) && !empty($tratamiento_recomendado)){
			if(!filter_var($tratamiento_recomendado)){
				echo "<script> alert('Cedula no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO diagnosticos(fecha_del_diagnostico,descripcion_del_diagnostico,tratamiento_recomendado) VALUES(:fecha_del_diagnostico,:descripcion_del_diagnostico,:tratamiento_recomendado)');
				$consulta_insert->execute(array(
					
					':fecha_del_diagnostico' =>$fecha_del_diagnostico,
					':descripcion_del_diagnostico' =>$descripcion_del_diagnostico,
					':tratamiento_recomendado' =>$tratamiento_recomendado

				));
				header('location: ../app/modulo4.php');
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
		<h2>Diagnósticos</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="fecha_del_diagnostico" placeholder="Fecha del Diagnostico" class="input__text">
				<input type="text" name="descripcion_del_diagnostico" placeholder="Descripcion del Diagnostico" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="tratamiento_recomendado" placeholder="Tratamiento Recomendado" class="input__text">
			</div>
			
            <div class="btn__group">
				<a href="../app/modulo4.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>