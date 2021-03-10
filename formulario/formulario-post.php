<?php

	
	echo 'Esta es la información introducida en el formulario: <br>';
	
	echo 'Nombre: '.$_POST['nombre'].'<br>';
	echo 'Apellido paterno: '.$_POST['ap'].'<br>';
	echo 'Apellido materno: '.$_POST['am'].'<br>';
	
	echo 'Elige tu fecha de nacimiento: '.$_POST['fecha'].'<br>';
	echo 'Edad: '.$_POST['edad'].'<br>';
	echo 'Sexo: '.$_POST['select'].'<br>';
	echo 'Nacionalidad: '.$_POST['nacionalidad'].'<br>';
	echo 'Estado: '.$_POST['estados'].'<br>';
	echo 'C.U.R.P.: '.$_POST['curp'].'<br>';
	echo 'Tipo de sangre: '.$_POST['sangre'].'<br>';
	echo 'Matricula: '.$_POST['matricula'].'<br>';
	echo 'Programa academico: '.$_POST['programa'].'<br>';
	echo 'N.S.S.I.: '.$_POST['nssi'].'<br>';
	echo 'Nombre del padre: '.$_POST['nom'].'<br>';
	echo 'Nombre de la madre: '.$_POST['nombr'].'<br>';
	
	echo 'Indica tu correo: '.$_POST['correo'].'<br>';
	echo 'Contraseña: '.$_POST['pass'].'<br>';
	
	echo 'Cosas extras'.'<br>';
	
	echo 'Elige un color: '.$_POST['color'].'<br>';
	echo 'Selecciona un archivo: '.$_POST['archivo'].'<br>';
	echo 'Indica el mes: '.$_POST['mes'].'<br>';
	echo 'Selecciona un número: '.$_POST['numero'].'<br>';
	echo 'Esto es un radio button: '.$_POST['radio'].'<br>';
	echo 'Selecciona un número de rango: '.$_POST['rango'].'<br>';
	echo 'Campo de búsqueda: '.$_POST['buscar'].'<br>';
	echo 'Indica tu teléfono: '.$_POST['telefono'].'<br>';
	echo 'Indica la hora: '.$_POST['hora'].'<br>';
	echo 'Indica una URL: '.$_POST['url'].'<br>';
	echo 'Indica la semana: '.$_POST['semana'].'<br>';
	echo 'Acepto condiciones '.$_POST['check'].'<br>';
	
?>