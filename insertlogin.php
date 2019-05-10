<?php
        include("database.php");
    
        $firsname = $_POST ["firstnamesignup"];
        $lastname = $_POST ["lastnamesignup"];
        $sex=$_POST['sex'];
        $email = $_POST ["emailsignup"];
        $user_image="images/avatar_default.png";
        
        
        $pswd = password_hash($_POST["passwordsignup"],PASSWORD_DEFAULT);
         
        $sql_validacion = "SELECT * FROM usuarios WHERE email = '$email'";
        $result=$conn->query($sql_validacion);
        
        if ($result->num_rows == 0){
            $sql="INSERT INTO usuarios (firstname,lastname,sex,email,password,photo)
             VALUES('$firsname','$lastname','$sex','$email','$pswd','$user_image')";
        
            if ($conn->query($sql)===true) {
                echo "<script languaje='javascript'>alert('usuario registrado satisfactoriamente')</script> ";
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