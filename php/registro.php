<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="../css/index.css" />
		<link rel="shortcut icon" href="https://www.revistaneo.com/sites/default/files/2018-02/shutterstock_deportivo.jpg" type="image/png">
		<?php require_once "scripts.php"; ?>
	</head>
<body style="background-color: gray">
		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="panel panel-danger">
						<div class="panel panel-heading">Registro de usuario</div>
						<div class="panel panel-body">
							<form id="frmRegistro">
								<label>Nombre</label>
								<input type="text" class="form-control input-sm" id="nombre" name="">
								<label>Apellido Paterno</label>
								<input type="text" class="form-control input-sm" id="ap" name="">
								<label>Apellido Materno</label>
								<input type="text" class="form-control input-sm" id="am" name="">
								<label>Usuario</label>
								<input type="text" class="form-control input-sm" id="usuario" name="">
								<label>Password</label>
								<input type="password" class="form-control input-sm" id="password" name="">
								<p></p>
								<span class="btn btn-primary" id="registrarNuevo">Registrar</span>
								</form>
							<div style="text-align: right;">
								<a href="login.php" class="btn btn-default">Login</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#ap').val()==""){
				alertify.alert("Debes agregar el apellido paterno");
				return false;
			}else if($('#am').val()==""){
				alertify.alert("Debes agregar el apellido materno");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&ap=" + $('#ap').val() +
					"&am=" + $('#am').val() +
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"registros.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>
