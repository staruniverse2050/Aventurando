<?php
    $conexion=mysqli_connect("localhost", "root", "", "baselogin");
?>
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos se convierten descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
       
        
        <title> Iniciar sesion </title>
        <link rel="icon" type="image/png" href="imagenes/favicon.png"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Aventurando">
        <meta name="description" content="Inicio de sesion-formulario">
        <meta name="keywords" content="login,formulariode acceso html">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
    
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform" method="POST">
                        <label >USUARIO</label>
                        <input id="usuario" type="text" name="Usuario" placeholder="Usuario" required>
                        
                        <label >contraseña</label>
                          <input id="password" type="password" name="pass" placeholder="Contraseña" required>

                          <input type="submit" name="IniciarSesion" id="inicio" value="iniciar">
                          <?php

session_start();
if(!empty($_POST['IniciarSesion'])){

    $USUARIO=$_POST['Usuario'];
    $contraseña=$_POST['pass'];


    $sql2= "SELECT COUNT(*) as contar FROM login WHERE usuario='$USUARIO' AND pass='$contraseña' ";
    $consulta2 = mysqli_query($conexion, $sql2);

    $array=mysqli_fetch_array($consulta2);

    if($array['contar']>0){
        $_SESSION['username']=$USUARIO;
        header("location:Registro lugares.php");


    }else{
        echo "<h1>errorrrrrrrrr</h1>";
    }
}

?>
        


                    </form>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Bienvenido a Aventurando
                    </div>
                    <hr>
                    <div class="pie-form">
                        <href="#"><A HREF="inicio.html">«Volver</A>
                        <hr>
                    </div>
        </div>
        
    </body>
</html>