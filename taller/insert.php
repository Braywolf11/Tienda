<?php
       include("database.php");
        
        $fullname = $_POST ["fullname"];
        $email = $_POST ["email"];
        $pswd = $_POST["password"];
        $conf_pswd = $_POST["confirm_password"];
        $sex=$_POST['gender'];
        $user_image=$_POST['UploadedFile'];;
        if($pswd==$conf_pswd){        
            $sql_validacion = "SELECT * FROM users WHERE email = '$email'";
            $result=$conn->query($sql_validacion);
            
            if ($result->num_rows == 0){
                $sql="INSERT INTO users (fullname,email,password,gender,photo)
                    VALUES('$fullname','$email','$pswd','$sex','$user_image')";
            
                if ($conn->query($sql)===true) {
                    echo "<script languaje='javascript'>alert('usuario registrado satisfactoriamente')</script> ";
                    //echo "<br><a href='index.php'>Regresar</a>";
                    header ("refresh:0; url=index.php");
                } else {
                    echo "Error: ".$sql . "<br>".$conn->error;
                }
            }else {
                echo "<script languaje='javascript'>alert('usuario ya existe')</script> ";
                //echo "<br><a href='index.php'>Regresar</a>";
                header ("refresh:0; url=singup.php");
            }
        }else {
            echo "<script languaje='javascript'>alert('password does not match')</script> ";
            //echo "<br><a href='index.php'>Regresar</a>";
            header ("refresh:0; url=singup.php");
        }

    



?>