<?php 

	include '../db/conexion1.php';

	if(isset($_GET['id_tratamiento'])){
		$id_tratamiento=(int) $_GET['id_tratamiento'];
		$delete=$con->prepare('DELETE FROM tratamientos WHERE id_tratamiento =:id_tratamiento');
		$delete->execute(array(
			':id_tratamiento'=>$id_tratamiento 
		));
		header('location:../app/modulo5.php');
	}else{
		header('location:../app/modulo5.php');
	}

 ?>