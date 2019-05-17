<?php

include('database.php');

$ident=$_POST['id'];
//guardar el nombre de el archivo
$name = $_FILES['foto']['name'];
//gt extension tipe name
$type = $_FILES['foto']['type'];
//get file size
$size = $_FILES['foto']['size'];
//get temp_file folder
$temp_folder= $_FILES['foto']['tmp_name'];

$ruta = "photos/".$name;


//echo $ident."<br>".$name."<br>".$type."<br>".$size."<br>".$temp_folder;

//upload file
move_uploaded_file($_FILES['foto']['tmp_name'],"photos/".$name = $_FILES['foto']['name']);


    $sql="INSERT INTO usuarios (identificacion,ruta_foto)
        VALUES('$ident','$ruta')";

    $conn->query($sql);

echo "<script languaje='javascript'>alert('Archivo cargado con exito')</script> ";
header ("refresh:0; url=index.html");
?>