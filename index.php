<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<center>
    <form action="insert.php" method="post">
        <table border="2">
            <tr>
                <td colspan="4" >
                    <CEnter><B><H2>MI TIENDA-REGISTROS PRODUCTOS</H2></B></CEnter>
                </td>
                
                <tr>
                            <td bgcolor= "#183E26"><b>Codigo de Producto:</b><font color="red">*</font></td>
                            <td bgcolor= "#fbfbfb"><b><input type="text" name="cod_pro" placeholder="CODIGO" minlength="1" maxlength="30" pattern="[A-Za-z]{4-16}"  required></b></td>
                        </tr>
                        
                        <tr>
                            <td bgcolor= "#183E26"><b>Nombre Producto:</b><font color="red">*</font></td>
                            <td bgcolor= "#fbfbfb"><b><input type="text" name="nom_prod" placeholder="NOMBRE" minlength="1" maxlength="30" pattern="[A-Za-z]{4-16}" required></b></td>
                        </tr>
                        <tr>
                            <td bgcolor= "#183E26"><b>Catidad:</b><font color="red">*</font></td>
                            <td bgcolor= "#fbfbfb"><b><input type="text" name="Cantidad" placeholder="CANTIDAD" minlength="1" maxlength="30" pattern="[A-Za-z]{4-16}" required></b></td>
                        </tr>
                        <tr>
                            <td bgcolor= "#183E26"><b>Foto:</b><font color="red">*</font></td>
                            <td bgcolor= "#fbfbfb"><b><input type="text" name="foto"placeholder="Foto" minlength="" maxlength="30">
                            <input name="arch" type="file" size="2mb"></b><br></td>
                        </tr>
                        
                        <td colspan="2"><br>
                            <center><input type="submit" value="REGISTRARME"></center><br>
                        </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
