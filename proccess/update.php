<?php 
	include('connection.php');

	if(isset($_POST['update'])){
		$id 		= $_POST['id'];
		$name 		= $_POST['name'];
		$position 	= $_POST['position'];
		$office 	= $_POST['office'];
		$age 		= $_POST['age'];
		$salary 	= $_POST['salary'];

		$sql = "UPDATE data SET name='$name', position='$position', office='$office',
		age='$age', salary='$salary' WHERE id=$id";

		$query = mysqli_query($conn, $sql);

		if($query){
			header('Location: ../index.php');
		}else{
			die("Data gagal disimpan!");
		}

	}
?>