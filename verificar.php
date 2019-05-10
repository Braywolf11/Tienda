<?php
// donde dice $variableUsuario tienes que poner la variable en la cual tienes el nombre del user para validarlo, supongo que ha de ser una POST, pero tu lo modificas
 
$firsname = $_POST ["firsnamesignup"];
$lastname = $_POST ["lastnamesignup"];
$email = $_POST ["emailsignup"];
$user_image="images/avatar_default.png";


$pswd = password_hash($_POST ["passwordsignup"],PASSWORD_DEFAULT);
 
$sql_validacion = "SELECT * FROM usuarios WHERE email = '$email'";
$result=$conn->query($sql_validacion);

if ($result->num_row == 0){
    $sql="INSERT INTO usuarios (firstname,lastname,email,pasdword,photo) VALUES('$firsname','$lastname','$email,$pswd,$user_image)"


  
 if ($conn->query($sql)===true) {
    echo "<script languaje='javascript'>alert('registrado registrado satisfactoriamente')</script> ";
    //echo "<br><a href='index.php'>Regresar</a>";
    header ("refresh:0; url=login.php");
} else {
    echo "Error: ".$sql . "<br>".$conn->error;
}
}else {
    echo "<script languaje='javascript'>alert('usuario ya existe')</script> ";
    //echo "<br><a href='index.php'>Regresar</a>";
    header ("refresh:0; url=login.php");
}

 
?>