<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="<?= base_url()?>asset/css/bootstrap.min.css">
	<title>Inicio de Session</title>
</head>
<body>

<div id="container">
	<br><br><br><br>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading" style="height: 75px;">
					<h1>Iniciar Sesión</h1>
			</div>
			<div class="panel panel-body">
				<form method="post" action="">
					<table class="table">
						<tr>
							<td> <label> Usuario:</label> </td> 
							<td> <input type="text" class='form-control' name="user" id="user" required> </td>
						</tr>
						<tr>
							<td><label> Contraseña:</label></td>
							<td><input type="password" class='form-control' name="password" id="password" required></td>
						</tr>
						<tr>
							<td colspan="2"> <button type="button" class="btn btn-primary btn-lg" onclick='validar();'>Iniciar</button></td>
						</tr>
					</table>
					<div class="alert alert-danger text-center" id="error" style="display:none;"> Usuario y/o contraseña incorrectos</div>
				</form>
			</div>				
		</div>
	</div>
</div>
<script src="<?= base_url();?>/asset/js/jquery.min.js"></script>
<script src="<?= base_url();?>/asset/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>/asset/js/login.js"></script>

</body>
</html>