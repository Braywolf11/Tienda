<?php
    //1.connect
   include("database.php");
   //2. import date
   $id=$_POST['id'];
   $cod=$_POST['cod_pro'];
   $nom=$_POST['nom_prod'];
   $cant=$_POST['Cantidad'];
     // echo $id. "<br>" ;
      //echo $cod. "<br>" ;
   //3. create sql   
      $sql = "UPDATE productos SET codigo_pro='$cod',nombre_pro='$nom',cantidad=$can where id=$id";
   //4. execute sql
         $conn->query($sql);
   //5. show confirmation message
      echo "<script languaje='javascript'>alert('producto actualizado satisfactoriamente')</script> ";
           
           header ("refresh:0; url=index.php");
      


?>