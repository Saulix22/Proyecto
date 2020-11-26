<?php
require 'partials/db.php';
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<title>Panel de administración</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body style="height: 100vh; overflow-y: scroll;">
		<div class="row h-100">
			<div class="col-sm-3">
				<nav class="navbar navbar-light bg-light flex-column align-items-start justify-content-start h-100">
					<span class="navbar-brand">UACJ</span>

					<div class="navbar-header" style="margin-bottom: 1rem;">
						<div class="font-weight-bold text-primary">OSCAR ANTONIO MIRANDA GONZALEZ</div>
						<div class="font-weight-light small">al180165@alumnos.uacj.mx</div>
					</div>

					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" href="#">Pedidos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">En préstamo</a>
						</li>
					</ul>

					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#">Historial</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-sm-3"></div>
			<div class="col-sm-6"></div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>
