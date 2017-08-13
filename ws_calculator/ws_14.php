<?php
	$num1 = (int)$_GET['num1'];
	$num2 = (int)$_GET['num2'];
	$num3 = (int)$_GET['num3'];
	$func = $_GET['func'];
	$retVal;
	
	if($func == "sum")
		$retVal = $num1+$num2+$num3;
	else if($func == "avg")
		$retVal = ($num1+$num2+$num3)/3;
	else if($func == "mult")
		$retVal = $num1*$num2*$num3;
		
	$a = array('retVal' => $retVal);
	header('Content-Type: application/json');
	echo json_encode($a);
?>