<?php 

	include '../db/conexion1.php';

	if(isset($_GET['id_medico'])){
		$id_medico=(int) $_GET['id_medico'];
		$delete=$con->prepare('DELETE FROM medicos WHERE id_medico =:id_medico');
		$delete->execute(array(
			':id_medico'=>$id_medico
		));
		header('location:../app/modulo2.php');
	}else{
		header('location:../app/modulo2.php');
	}

 ?>