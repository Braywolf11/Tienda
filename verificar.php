<?php
// donde dice $variableUsuario tienes que poner la variable en la cual tienes el nombre del user para validarlo, supongo que ha de ser una POST, pero tu lo modificas
 
$email =$email = $_POST ["emailsignup"];
$contraseña = $_POST ["passwordsignup"];
 
 $q = mysql_query("SELECT * FROM usuarios WHERE email = '$email'")
 $c = mysql_query("SELECT * FROM usuarios WHERE password = '$contraseña'")
 //verificamos si el user exite con un condicional
 if( mysql_num_rows($q) == 0 && mysql_num_rows($c) == 0){
// mysql_num_rows <- esta funcion me imprime el numero de registro que encontro 
// si el numero es igual a 0 es porque el registro no exite, en otras palabras ese user no esta en la tabla miembro por lo tanto se puede registrar
 
echo "el user es valido";
}
else{
//caso contario (else) es porque ese user ya esta registrado
 
echo 'el user ya esta registrado, ingresa otro';
}
 
?>