<?php 
	include 'proccess/connection.php';
	session_start();

	if(isset($_SESSION['username'])){
		header("Location: index.php");
		exit();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.3/css/dataTables.bootstrap5.css">
</head>
<body>
	<!-- Navbar Start -->
	<nav class="navbar navbar-light bg-white shadow">
	  <div class="container">
	    <a class="navbar-brand" href="#">Halaman Login</a>
	  </div>
	</nav>
	<!-- Navbar End -->

	<!-- Register Start -->
	<section id="register" class="mt-5">
		<div class="container">
			<div class="row d-flex flex-align-center justify-content-center">
				<div class="col-12 col-md-6 col-lg-5">
					<div class="card border-0 shadow">
						<div class="card-body">
							<form action="proccess/login.php" method="POST">
								<div class="mb-3">
								  <label for="username" class="form-label">Username</label>
								  <input type="text" class="form-control" id="username" class="username" name="username" placeholder="Username">
								</div>
								<div class="mb-3">
								  <label for="password" class="form-label">Password</label>
								  <input type="password" class="form-control" id="password" class="password" name="password" placeholder="Password">
								</div>
								<div class="mb-2">
									<button type="submit" class="btn btn-dark btn-md w-100" name="login">Login</button>
								</div>
								<p class="m-0 text-center">Belum punya akun? <a href="register.php">Register</a></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Register End -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<!-- DataTables JS -->
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
	<script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap5.js"></script>
	<script type="text/javascript">
		new DataTable('#example');
	</script>
</body>
</html>