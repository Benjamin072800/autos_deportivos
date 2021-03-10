<?php
	echo 'Esta es la tabla del '. $_POST['x']. '<br><br>';
	for($i=1; $i<=10; $i++){
		echo $_POST['x'].' x '.$i.' = '.($_POST['x']*$i).'<br>';
	}
	echo '<br><hr>';
?>