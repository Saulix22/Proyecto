<?php
require 'partials/db.php';
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<title></title>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body>
		<?php require 'components/navbar.php'; ?>

		<div class="container">
			<form class="loginForm" action="index.php" method="post">
				<h2 class="formTitle">Iniciar sesión</h2>

				<div class="inputWrapper">
					<label for="user">Usuario:</label>
					<input class="formField" type="text" name="user" required>
				</div>
				<div class="inputWrapper">
					<label for="password">Contraseña:</label>
					<input class="formField" type="password" name="password" required>
				</div>
				<div class="inputWrapper">
					<input class="formButton" type="submit" value="Iniciar sesión">
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>
