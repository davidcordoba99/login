<?php

$usuario = $_POST["nombre"];
$password = $_POST["pass"];


//echo $usuario;
//echo $password;

$usuariosql = "root";
$passsql = "root";
$basededatos = "usuarios";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);

$select = "SELECT user, pass FROM validacion WHERE user = '$usuario' AND pass = '$password'";



$query = $mysqli -> query("$select");
if ($query->num_rows > 0)
{
    header('Location: http://localhost/workspace/asir2-php/loginok.html');
}
else {
    header('Location: http://localhost/workspace/asir2-php/loginko.html');
}

/*
if($query){
    while ($fila = $query->fetch_assoc()) {
         $fila["user"].$fila["pass"];

            if($fila["user"] == $usuario && $fila["pass"] == $password){
                header('Location: http://localhost/workspace/asir2-php/loginok.html');
            }
            if ($fila["user"] != $usuario && $fila["pass"] != $password){
                header('Location: http://localhost/workspace/asir2-php/login.html');
            }
    }
    $query->free();
}
*/

?>