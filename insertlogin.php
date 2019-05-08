<?php
        include("database.php");
    
    $firstname = $_POST ["firstnamesignup"];
    $lastname = $_POST ["lastnamesignup"];
    $email = $_POST ["emailsignup"];
    $contraseña = $_POST ["passwordsignup"];
    $conf_contra = $_POST ["passwordsignup_confirm"];
    
    $sql = "insert into usuarios (firstname,lastname,email,password)
    values('$firstname','$lastname','$email','$contraseña')";

    if ($conn->query($sql)===true) {
        echo "<script languaje='javascript'>alert('producto registrado satisfactoriamente')</script> ";
        //echo "<br><a href='index.php'>Regresar</a>";
        header ("refresh:0; url=login.php");
    } else {
        echo "Error: ".$sql . "<br>".$conn->error;
    }
    



?>