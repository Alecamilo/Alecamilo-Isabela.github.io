<?php 

	include '../db/conexion1.php';

	if(isset($_GET['id_diagnostico'])){
		$id_diagnostico=(int) $_GET['id_diagnostico'];
		$delete=$con->prepare('DELETE FROM diagnosticos WHERE id_diagnostico =:id_diagnostico');
		$delete->execute(array(
			':id_diagnostico'=>$id_diagnostico 
		));
		header('location:../app/modulo4.php');
	}else{
		header('location:../app/modulo4.php');
	}

 ?>