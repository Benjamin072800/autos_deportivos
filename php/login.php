<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="../css/index.css" />
		<link rel="shortcut icon" href="https://www.revistaneo.com/sites/default/files/2018-02/shutterstock_deportivo.jpg" type="image/png">
			<?php require_once "scripts.php"; ?>
	</head>
<body>
	<div id="menu">
		<ul>
			<li><a href="../index.html">Home</a></li>
			<li><a href="../acerca-del-sitio.html">Acerca del sitio</a></li>
			<li><a href="../galeria-de-imagenes.html">Galeria de imagenes</a></li>
			<li><a href="../acerca-del-autor.html">Acerca del autor</a></li>
			<li><a href="../contacto.html">Contacto</a></li>
			<li><a href="../visto-en-clase.html"> Visto en clase</a></li>
			<li><a href="../php/login.php">Login</a></li>
		</ul>
	</div>
		<hr>
		<p>
	<br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="panel panel-primary">
						<div class="panel panel-heading">Iniciar sesion</div>
						<div class="panel panel-body">
							<p></p>
							<label>Usuario</label>
							<input type="text" id="usuario" class="form-control input-sm" name="">
							<label>Password</label>
							<input type="password" id="password" class="form-control input-sm" name="">
							<p></p>
							<span class="btn btn-primary" id="entrarSistema">Entrar</span>
							<a href="registro.php" class="btn btn-danger">Registro</a>
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
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"sesion.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="inicio.php";
							}else{
								alertify.alert("Fallo al entrar");
							}
						}
					});
		});	
	});
</script>