<?php

$conexion = mysqli_connect('localhost','root', '', 'aventurando')
or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
   $departamento = $_POST['departamento'];
   $municipio = $_POST['municipio'];
   $nombreempresa = $_POST['nombreempresa'];
   $tipoempresa = $_POST['tipoempresa'];
   $servicio = $_POST['servicio'];
   $email = $_POST['email'];
   $direccion = $_POST['direccion'];
   $numerodecontacto = $_POST['numerodecontacto'];
   $consulta = "INSERT INTO patrocinadores(departamento, municipio, 
   nombreempresa, tipoempresa, servicio, email, direccion, numerodecontacto)
   VALUES('$departamento', '$municipio', '$nombreempresa', '$tipoempresa', '$servicio', '$email', '$direccion', '$numerodecontacto' )";
   mysqli_query($conexion, $consulta);
   mysqli_close($conexion);
}
?>