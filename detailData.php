<?php 
	include('proccess/connection.php');

	session_start();

	if(!isset($_SESSION['username'])){
		header("Location: login.php");
		exit();
	}

	$id = $_GET['id'];

	$sql = "SELECT * FROM data WHERE id=$id";
	$query = mysqli_query($conn, $sql);
	$employee = mysqli_fetch_assoc($query);

	if(mysqli_num_rows($query) < 1){
		die("Data tidak ditemukan!");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<!-- Navbar Start -->
	<nav class="navbar navbar-light bg-white shadow">
	  <div class="container">
	    <a class="navbar-brand" href="#">Manajemen Dashboard</a>
	  </div>
	</nav>
	<!-- Navbar End -->

	<!-- Detail Data Start -->
	<section id="detailData" class="mt-5">
		<div class="container">
			<a href="index.php" class="btn btn-dark btn-sm mb-3">Back</a>
			<div class="card border-0 shadow">
				<div class="card-body">
					<ul class="list-group list-group-flush">
					   <li class="list-group-item">
					   	 <h5 class="fw-bold">Name</h5>
					   	 <span class="text-capitalize"><?php echo $employee['name']; ?></span>
					   </li>
					   <li class="list-group-item">
					   	 <h5 class="fw-bold">Position</h5>
					   	 <span class="text-capitalize"><?php echo $employee['position']; ?></span>
					   </li>
					   <li class="list-group-item">
					   	 <h5 class="fw-bold">Office</h5>
					   	 <span class="text-capitalize"><?php echo $employee['office']; ?></span>
					   </li>
					   <li class="list-group-item">
					   	 <h5 class="fw-bold">Age</h5>
					   	 <span><?php echo $employee['age']; ?></span>
					   </li>
					   <li class="list-group-item">
					   	 <h5 class="fw-bold">Salary</h5>
					   	 <span><?php echo $employee['salary']; ?></span>
					   </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Detail Data End -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>