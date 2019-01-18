<?php
  $mostrar=fopen('datos.txt','r');
    while(!feof($mostrar))
    {
      $id=fgets($mostrar);
      $nombre=fgets($mostrar);
      $calificacion=fgets($mostrar);
      if($id!=""){
        echo "<br> ID: ".$id."<br>";
        echo "<br> Nombre: ".$nombre."<br>";
        echo "<br> calificacion: ".$calificacion."<br>";
      }
    }
 ?>
