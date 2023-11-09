<?php 

	include '../db/conexion1.php';

	if(isset($_GET['id_cita'])){
		$id_cita=(int) $_GET['id_cita'];
		$delete=$con->prepare('DELETE FROM citas WHERE id_cita =:id_cita');
		$delete->execute(array(
			':id_cita'=>$id_cita
		));
		header('location:../app/modulo3.php');
	}else{
		header('location:../app/modulo3.php');
	}

 ?>