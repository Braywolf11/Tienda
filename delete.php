<?php
//1.connect
   include("database.php");
//2. import date
   $id=$_GET['id'];
   $cod=$_GET['cod'];

  // echo $id. "<br>" ;
   //echo $cod. "<br>" ;
//3. create sql   
   $sql = "DELETE FROM productos where id=$id";
//4. execute sql
      $conn->query($sql);
//5. show confirmation message
   echo "<script languaje='javascript'>alert('producto eliminado satisfactoriamente')</script> ";
        
        header ("refresh:0; url=index.php");
   

?>