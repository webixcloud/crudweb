<?php 
	include('connection.php');
	session_start();

	if(isset($_SESSION['username'])){
		header("Location: http://localhost:8080/crudweb/index.php");
		exit();
	}

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = hash('sha256', $_POST['password']);

		$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql);

		if($result->num_rows > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['username'];
			header("Location: http://localhost:8080/crudweb/index.php");
			exit();
		}else{
			echo "<script>alert('Username atau password yang anda masukkan salah!')</script>";
			header("Location: ../login.php");
		}

	}
?>