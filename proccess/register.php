<?php 
	include 'connection.php';

	if(isset($_POST['register'])){
		$username 		= $_POST['username'];
		$email 			= $_POST['email'];
		$password 		= hash('sha256', $_POST['password']);
		$retype_pass 	= hash('sha256', $_POST['retype_password']);

		if($password == $retype_pass){
			$sql = "SELECT * FROM user WHERE email='$email' OR username='$username'";
			$result = mysqli_query($conn, $sql);
			if(!$result-> num_rows > 0){
				$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
				$result = mysqli_query($conn, $sql);
				if($result){
					echo "<script>alert('Registrasi berhasil!')</script>";
					header("Location: http://localhost:8080/crudweb/login.php");
				}else{
					echo "Terjadi kesalahan!";
				}
			}else{
				echo "<script>alert('Username atau Email sudah terdaftar!')</script>";
				header("Location: http://localhost:8080/crudweb/register.php");
			}
		}else{
			echo "<script>alert('Password tidak sesuai!')</script>";
			header("Location: http://localhost:8080/crudweb/register.php");
		}
	}
?>