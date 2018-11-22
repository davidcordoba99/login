<?php
$usuario = $_POST["user"];
$password = $_POST["password"];
$usuariosql = "root";
$passsql = "root";
$basededatos = "usuarios";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);

$select = "UPDATE validacion SET pass = $password WHERE user = '$usuario'";

$query = $mysqli -> query("$select");

header('Location: http://localhost/workspace/asir2-php/listausers.php');

?>