<?php
require 'partials/db.php';

if (isset($_POST['user']) && isset($_POST['password'])) {
	echo 'Inicio de sesión';	
}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title></title>

		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<nav class="navbar">Logo</nav>

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
	</body>
</html>
