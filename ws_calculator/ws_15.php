<?php
  if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    parse_str(file_get_contents("php://input"), $inputArr);
    $num1 = (int)$inputArr['num1'];
    $num2 = (int)$inputArr['num2'];
    $num3 = (int)$inputArr['num3'];
    $func = $inputArr['func'];
  }
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