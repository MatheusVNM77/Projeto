<?php
//CONEXÃO
require_once 'db_connect.php';

//SESSÃO
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastre-se</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/registration-form-1.jpg" alt="">
				</div>
				<form method="POST" action="login.php">
					<h3>Formulário de Registro</h3>
					<div class="form-group">
						<input type="text" name="nome" placeholder="Nome" class="form-control" required>
						<input type="text" name="sobrenome" placeholder="Sobrenome" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<input type="text" name="login" placeholder="Nome de Login" class="form-control" required>
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="email" name="email" placeholder="Email" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gênero</option>
							<option value="asculino">Masculino</option>
							<option value="feminino">Feminino</option>
							<option value="outro">Outro</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="senha" placeholder="Senha" class="form-control" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="conf_senha" placeholder="Confirme sua Senha" class="form-control" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button name="btn-registro">Registrar
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>