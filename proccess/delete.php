<?php 
	include('connection.php');

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$sql = "DELETE FROM data WHERE id=$id";
		$query = mysqli_query($conn, $sql);

		if($query){
			header('Location: ../index.php');
		}else{
			die('Data gagal dihapus!');
		}
	}
?>