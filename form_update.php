<?php
     $id=$_GET['id'];
     $cod=$_GET['cod'];
     $nom=$_GET['nom'];
     $cant=$_GET['can'];


    

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<center>
    <form action="update.php" method="POST">
    <input type="hidden" name="id" value=<?php echo $id;?> readonly="YES">
        <table border="2">
            <tr>
                <td colspan="2" >
                    <CEnter><B><H2>MI TIENDA-FORMULARIOS DE ACTUALIACION</H2></B></CEnter>
                </td>
                  
                        <tr>
                            <td bgcolor= "#183E26"><b>Codigo de Producto:</b><font color="red">*</font></td>

                            <td bgcolor= "#fbfbfb"><b><input type="text" name="cod_pro" placeholder="CODIGO" minlength="1" maxlength="30" pattern="[A-Za-z]{4-16}" value=<?php echo $cod;?>  required></b></td>
                        </tr>
                        
                        <tr>
                            <td bgcolor= "#183E26"><b>Nombre Producto:</b><font color="red">*</font></td>
                            <td bgcolor= "#fbfbfb"><b><input type="text" name="nom_prod" placeholder="NOMBRE" minlength="1" maxlength="30" pattern="[A-Za-z]{4-16}" value=<?php echo $nom;?> required></b></td>
                        </tr>
                        <tr>
                            <td bgcolor= "#183E26"><b>Catidad:</b><font color="red">*</font></td>
                            <td bgcolor= "#fbfbfb"><b><input type="text" name="Cantidad" placeholder="CANTIDAD" minlength="1" maxlength="30" pattern="[A-Za-z]{4-16}" value=<?php echo $cant;?> required></b></td>
                        </tr>
                      
                        
                        <td colspan="2"><br>
                            <center><input type="submit" value="ACTUALIZAR"></center><br>
                        </td>
            </tr>
        </table>
    </form>
</center>
<hr>

</body>
</html>