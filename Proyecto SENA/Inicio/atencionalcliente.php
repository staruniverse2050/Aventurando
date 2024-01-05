<html>
<head>
    <!--NO OLVIDAR QUE QUEDA CONVERTIDO EN PHP YA NOES HTML-->
    <title>Atencion al cliente </title>
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
    <div class="well" style="margin-top: 10%;">
    <h3>Buzon de quejas,sugerencias y agradecimientos</h3>
    <form method="post" role="form" id="Buzon de quejas,sugerencias y agradecimientos" data-toggle="validator" class="shake">
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="Nombre" class="h4">Nombre o apodo</label>
                <input type="" class="form-control" id="name" name="Nombre_apodo" placeholder="Digite su nombre o apodo" required data-error="NEW ERROR MESSAGE">
                
                <div class="help-block with-errors"></div>
                
            </div>
        <div>
            <!--borrar
            <form action="../../form-result.php" target="_blank"-->
                

            <!--dar estilos propios en el archivo css-->
           <label class="label"><p style="font-size: 16px; color:black;">Selecciona el motivo de tu mensaje:</p></label>
              

        
            <div>
            <input type="checkbox" name="Motivo" value="Quejas" name="Quejas"> Quejas
            <label for="quejas"></label><br>
              
            <input type="checkbox" name="Motivo" value="sugerecias" name="sugerecias" > Sugerencias
            <label for="sugerencis"></label><br>
              
            <input type="checkbox" name="Motivo" value="agradecimientos" name="agradecimientos"> Agradecimientos
            <label for="agradecimientos"></label><br>
            </div>
              
                      
              
        </div>
        </div>
        <div class="form-group">
            <label for="Mensaje" class="h4 ">Mensaje</label>
            <textarea name="Mensaje" id="Mensaje" class="form-control" rows="5" placeholder="Por favor ingresa lo que quieras decir" required></textarea>
            <span id="message_validation" class="error_message"></span>
            <div class="help-block with-errors"></div>
        </div>

        <input type="submit" name="btn_enviar" value="Enviar comentario" style="display: block; margin: 0 auto;"  class="btn btn-success btn-lg pull-tag "><br>

        <!--quitar button y demas. interrupe algunas funciones de archivo-->
    
        
        </div>
         
        <!--SIEMPRE METER EN htdcos y abrir desde firefox-->

        <?php
    $conexion = mysqli_connect("localhost", "root", "", "proyecto") or die ("Error")
?>


    <?php
        if(isset($_POST['btn_enviar'])){
            $apodo=$_POST["Nombre_apodo"];
            $motivos2=$_POST["Motivo"];
            $mensaje2=$_POST["Mensaje"];
            
            

            $insertsql = "INSERT INTO atencionalcliente (Nombre_apodo,Motivo,Mensaje) VALUES ('$apodo', '$motivos2', '$mensaje2')";

            $ejecutar = mysqli_query($conexion, $insertsql);


            //CAMBIAR EL ECHO//
            if($ejecutar){
                echo "<h1><center>GRACIAS POR DARNOS TU OPINION!</center></h1>";
            }
        }
    
    ?>

    </form>
    </div>
</div>
</div>
</body>
</form>
<script  type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/validator.min.js"></script>
<script type="text/javascript" src="js/form-scripts.js"></script>
</html>
