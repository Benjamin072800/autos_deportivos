<?php
$operacion = $_POST['lista'];
	if(isset($_POST['x']) && !empty($_POST['x']) &&
	isset($_POST['y']) && !empty($_POST['y'])){
		echo 'El resultado es: ';
		switch($operacion){
			case 'suma':
			echo $_POST['x'] + $_POST['y'];
			break;
			case 'resta':
			echo $_POST['x'] - $_POST['y'];
			break;
			case 'multiplicacion':
			echo $_POST['x'] * $_POST['y'];
			break;
			case 'division':
			if($_POST['y'] == 0){
				echo 'Error de operación: No se puede dividir entre 0';}
			else{
				echo $_POST['x'] / $_POST['y'];}
			break;
			default: 'No se ha podido realizar ninguna operación';
		}
	}
	echo '<br><hr>';
	if($_POST['x'] > $_POST['y']){
		echo $_POST['x'].' es mayor que '.$_POST['y'];
	}
	else if($_POST['x'] == $_POST['y']){
		echo $_POST['x'].' es igual que '.$_POST['y'];
	}
	else{
		echo $_POST['y'].' es mayor que '.$_POST['x'];
	}
?>