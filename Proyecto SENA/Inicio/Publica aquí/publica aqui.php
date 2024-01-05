<?php
    $conexion=mysqli_connect('localhost','root', '', 'proyecto')
                                                        /*este es el nombre de la base e datos en genereal*/

?>

<html>
<head>
    <title>Solicitud patrocinio</title>
    <link rel="icon" type="image/png" href="imagenes/favicon.png"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
</head>

<body style="background-color: #7e7e7e">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
    <div class="well" style="margin-top: 5%;">
    <div class="above" style="margin-top: 1%;">
    </div>
   
    <h1>Solicitud de patrocinio</h1>
    <h6>Diligencia este formulario para que tu negocio sea parte de nuestro catálogo, en breve recibirás una respuesta de nuestros administradores</h6>
    <form role="form" id="contactForm" data-toggle="validator" method="POST" class="shake">
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="Departamento" class="h5">Departamento:</label>
                <input type="Departamento" name="Departamento" class="form-control" id="Departamento" placeholder="Departamento/localidad de su empresa" required data-error="NEW ERROR MESSAGE">
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-6">
                <label for="Municipio" class="h5">Municipio:</label>
                <input type="Municipio" name="Municipio" class="form-control" id="Municipio"placeholder="Municipio/localidad de su empresa" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="Nombre de la empresa" class="h5 ">Nombre de la empresa:</label>
                <input type="NombreEmpresa" name="NombreEmpresa" class="form-control" id="NombreEmpresa" placeholder="Escriba el nombre de su empresa" required data-error="NEW ERROR MESSAGE">
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-6">
                <label for="Tipoempresa" class="h5">Tipo de empresa:</label>
                <input type="Tipoempresa" name="TipoEmpresa" class="form-control" id="Tipoempresa"placeholder="(Restaurante/Finca-Hotel/Bar/Parque)" required>
                <div class="help-block with-errors"></div>
            </div>
 
            <div class="form-group col-sm-6">
                <label for="Servicio" class="h5">Servicio que ofrece:</label>
                <input type="Servicio" name="servicios" class="form-control" id="Servicio"placeholder="(Alojamiento/Entretenimiento/Pasadìa)" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
            <label for="Email" class="h5 ">Email:</label>
            <input type="text" name="Email" class="form-control" id="Email"placeholder="Escriba el email de su empresa" required>
            <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
               <label for="Direcciòn" class="h5 ">Direcciòn:</label>
               <input type="Direcciòn" name="Dirección" class="form-control" id="Direcciòn"placeholder="Escriba la direcciòn de su empresa" required>
            <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
            <label for="NumeroContacto" class="h5 ">Numero de contacto:</label>
            <input type="NumeroContacto" name="NumeroContacto" class="form-control" id="NumeroContacto"placeholder="Digite un numero telefonico donde nos podamos contactar" required>
            <div class="help-block with-errors"></div>
            </div>
        </div>
        <input type="submit" name="insert" id="form-Enviar" value="Enviar" style="display: block; margin: 0 auto;" class="btn btn-success btn-lg pull-tag ">
        <div id="msgEnviar" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
    </form>
    <!--siempre METER EN htdocs y abrir desde firefox-->
    <?php
        if(isset($_POST['insert'])){
            $departamento0=$_POST['Departamento'];
            $municipio0=$_POST['Municipio'];
            $nombreempresa0=$_POST['NombreEmpresa'];
            $tipoempresa0=$_POST['TipoEmpresa'];
            $email0=$_POST['Email'];
            $direccion0=$_POST['Dirección'];
            $numerodecontacto0=$_POST['NumeroContacto'];

            $insertsql="INSERT INTO publica (Departamento, Municipio, NombreEmpresa, TipoEmpresa, Email, Dirección, NumeroContacto) VALUES ('$departamento0', '$municipio0', '$nombreempresa0', '$tipoempresa0', '$email0', '$direccion0', '$numerodecontacto0')";

            $ejecutar=mysqli_query($conexion, $insertsql);
            if($ejecutar){
                echo "<h1>Tu solicitud de patrocinio sera revisada por una de nuestras asesoras</h1>";
                /*cambiar el echo*/
            }
        }



    ?>
    
    </div>
</div>
</div>

<p>
</p>
</body>
<script  type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/validator.min.js"></script>
<script type="text/javascript" src="js/form-scripts.js"></script>
</html>