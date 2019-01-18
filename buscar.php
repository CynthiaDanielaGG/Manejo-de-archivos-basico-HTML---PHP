<?php
$mostrar=fopen('datos.txt','r');
$nuevoid=$_REQUEST('buscar');
while(!feof($mostrar))
{
  $id=fgets($mostrar);
  $nombre=fgets($mostrar);
  $calificacion=fgets($mostrar);

  if($id == $nuevoid){
    echo "<br> ID: ".$id."<br>";
    echo "<br> Nombre: ".$nombre."<br>";
    echo "<br> calificacion: ".$calificacion."<br>";
  }
}

 ?>
