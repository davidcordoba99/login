<?php
$usuario = $_POST["user"];
$usuariosql = "root";
$passsql = "root";
$basededatos = "usuarios";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);

$select = "DELETE FROM validacion WHERE user = '$usuario'";

$query = $mysqli -> query("$select");
header('Location: http://localhost/workspace/asir2-php/listausers.php');








?>