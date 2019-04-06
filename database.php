<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tienda";

    //Create connction to datebase
    $conn = new mysqli($servername,$username,$password,$dbname);
    //cheking
    if($conn->connect_error)
    {
        die("connection failed: ". $conn->connect_error);
    }else
    {
        //echo "I am connected to tienda";
    }    



?>