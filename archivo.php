<?php
$id=$_REQUEST['id'];
$nombre=$_REQUEST['nombre'];
$calificacion=$_REQUEST['matematicas'];

echo "id= ".$id."<br>";
echo "nombre= ".$nombre."<br>";
echo "Calificacion= ".$calificacion."<br>";

$fp=fopen('datos.txt', 'a+');
fputs($fp,$id."\n");
fputs($fp,$nombre."\n");
fputs($fp,$calificacion);

fclose($fp);

echo "Datos guardados correctamente"

 ?>
 <a href="formulario.html">Registrar al archivo</a>
