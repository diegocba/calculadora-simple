<?php

$v1 = $_POST["input1"];
$v2 = $_POST["input2"];
$operacion = $_POST["op"];

//calculo

switch($operacion)
{
	case "s":
			$_r =($v1) +($v2);
			$operador= "+";
			break;
	case "r":
			$_r = $v1 - $v2;
			$operador= "-";
			break;
	case "m":
			$_r = $v1 * $v2;
			$operador= "*";
			break;
	case "d":
			$_r = $v1 / $v2;
			$operador= "/";
			break;
}

?>

<!-- Esto es HTML dentro del PHP -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> calculadora2 </title>
</head>

<body>

<h1>calculadora on php </h1>
<h2> tu operacion </h2>
<p>
<?php echo $v1." ".$operador." ".$v2." = ".$_r; 
?> 
</p>
</body>
</html>