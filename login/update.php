<?php



$usuario = $_POST["user"];


echo "datos del usuario ".$usuario.":";
?>
<form action = "cambiopass.php" method='POST'>
    <input type= "text" name="user" readonly value= <?php echo $usuario;?>>
    <input type= "password" name="password">
    <input type='submit' value='update'>
     </form>

