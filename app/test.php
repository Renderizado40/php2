<?php 
	var_dump($_POST);
	echo "<hr>";

	if ($_POST['operacion'] == 1){ 
		$res = 	$_POST['numberOne'] + $_POST['numberTwo'];
		echo $res;
	}elseif ($_POST['operacion'] == 2) {
		$res = 	$_POST['numberOne'] - $_POST['numberTwo'];
		echo $res;
	}elseif ($_POST['operacion'] == 3) {
		$res = 	$_POST['numberOne'] * $_POST['numberTwo'];
		echo $res;
	}else{
		$res = 	$_POST['numberOne'] / $_POST['numberTwo'];
		echo $res;
	}

	
?>