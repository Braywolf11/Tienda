<?php

    include("database.php");

//Validar usuario y contraseña
$email = $_POST["username"];
$pass = $_POST["password"];
 
$conexion=mysqli_connect($servername,$username,$password,$dbname);
$sql_validacion = "SELECT * FROM users WHERE email = '$email' AND password='$pass'";
$result=mysqli_query($conexion,$sql_validacion);

$filas= mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
			
			// Variable $hash hold the password hash on database
$hash = $row['fullname'];
if($filas>0)
{
    echo "<script languaje='javascript'>alert('Bienvenido')</script> ";
    header ("refresh:0; url=index.php");
   
}else{
    echo "<script languaje='javascript'>alert('USUARIO NO ENCONTRADO')</script> ";
    header ("refresh:0; url=login.php");
}
 mysqli_free_result($result);
 mysqli_close($conexion);


?>