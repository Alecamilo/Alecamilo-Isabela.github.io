<?php 

	include '../db/conexion1.php';


	if(isset($_GET['id_paciente'])){
		$id_paciente=(int) $_GET['id_paciente'];
		$delete=$con->prepare('DELETE FROM pacientes WHERE 	id_paciente=:id_paciente');
		$delete->execute(array(
			':id_paciente'=>$id_paciente
		));
		header('location:../app/modulo1.php');
	}else{
		header('location:../app/modulo1.php');
	}

 ?>