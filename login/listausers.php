<?php




//echo $usuario;
//echo $password;

$usuariosql = "root";
$passsql = "root";
$basededatos = "usuarios";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);

$select = "SELECT user FROM validacion";



$query = $mysqli -> query("$select");


if($query){
    while ($fila = $query->fetch_assoc()) {
       ?> 
        <?php echo $fila["user"];?>
        <form action='update.php' method='POST'>
        <input type= 'hidden' name="user" value= <?php echo $fila["user"];?>>
        <input type='submit' value='update'>
        </form>
        <form action='del.php' method='POST'>
        <input type= 'hidden' name="user" value= <?php echo $fila["user"];?>>
        <input type='submit' value='delete'>
        </form>
       <?php
        }
    }
?>