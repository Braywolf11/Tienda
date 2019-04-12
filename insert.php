<?php
        include("database.php");
    $codigo = $_POST ["cod_pro"];
    $nombre = $_POST ["nom_prod"];
    $cantidad = $_POST ["Cantidad"];

    $sql = "insert into productos (codigo_pro,nombre_pro,cantidad)
    values('$codigo','$nombre',$cantidad)";

    if ($conn->query($sql)===true) {
        echo "<script languaje='javascript'>alert('producto registrado satisfactoriamente')</script> ";
        //echo "<br><a href='index.php'>Regresar</a>";
        header ("refresh:0; url=index.php");
    } else {
        echo "Error: ".$sql . "<br>".$conn->error;
    }
    



?>