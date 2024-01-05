<?php
    session_start();
    $usuario=$_SESSION['username'];

    if(!isset($usuario)){
        header("location:login.php");

    }else{

   
?>
<?php
    $conexion=mysqli_connect("localhost", "root", "", "proyecto");
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Registro Lugares</title>
<link rel="icon" type="image/png" href="imagenes/favicon.png"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}

.table-responsive {
    margin: 60px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 15px;
    background: #6cdfc2;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 5px 5px 1 1;
}
.table-title h2 {
    margin: 10px 0 0;
    font-size: 50px;
}
.table-title .btn {
    color: #566787;
    float: right;
    font-size: 15px;
    background: #fff;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}

.table-title .btn:hover, .table-title .btn:focus {
    color: #566787;
    background: #f2f2f2;
}
.table-title .btn i {
    float: left;
    font-size: 25px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 26px 9px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 15px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}	
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}
table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
}
table.table td a:hover {
    color: #65ddb5;
}
table.table td a.settings {
    color: #82d3c8;
}
table.table td a.delete {
    color: #F44336;
}
table.table td i {
    font-size: 19px;

}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
.text-success {
    color: #10c469;
}
.text-info {
    color: #8ce4bf;
}
.text-warning {
    color: #FFC107;
}
.text-danger {
    color: #ff5b5b;
}
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
    background: #52e2ab;
}
.pagination li.active a:hover {        
    background: #57e2bf;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
    $(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>
</head>
    <body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h1>REGISTRO <b>LUGARES</b></h1>
                        
                    </div>
                    <div class="col-sm-7">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar</span></a>                    </div>
                </div>
            </div>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>codigo</th>
						<th>Departamento</th>
						<th>Municipio</th>
						<th>Nombre comercial</th>
						<th>Tipo de lugar</th>
                        <th>direccion_lugar</th>
                        <th>telefono_lugar</th>

					</tr>
                    
				
    <?php
        $consulta = "SELECT * FROM lugares ";
        $ejecutarConsulta = mysqli_query($conexion, $consulta);
        $verFilas = mysqli_num_rows($ejecutarConsulta);
        $fila = mysqli_fetch_array($ejecutarConsulta);

        if(!$ejecutarConsulta){
            echo" error en la consulta";
        }else{
            if($verFilas<1){
                echo "<tr><td> sin registros</td></tr>";
            }else{
                for($i=0; $i<=$fila; $i++){
                    echo '
                        <tr>
                            <td>'.$fila[0].'</td>
                            <td>'.$fila[1].'</td>
                            <td>'.$fila[2].'</td>
                            <td>'.$fila[3].'</td>
                            <td>'.$fila[4].'</td>
                            <td>'.$fila[5].'</td>
                            <td>'.$fila[6].'</td>
                            
                            
                            <td>
                            <a class="add" name="" title="Add" data-toggle="tooltip"><i name="" class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="" data-toggle="tooltip"><i   class="material-icons">&#xE254;</i></a>
                            <a class="delete" name="Delete" title="Delete" data-toggle="tooltip"><i  name="Delete" class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>';
                    
                        $fila = mysqli_fetch_array($ejecutarConsulta);
                    }
                }
            }
    ?>

<?php
        if(isset($_POST['Delete'])){
            $CODIGO=$_POST['id_lugar'];
            $Nombre_comercial=$_POST['nombreComercial'];

            mysqli_query($conexion, "DELETE FROM lugares WHERE id_lugar='$CODIGO'")
                or die("<h1>ERROR AL ELIMINAR</H1>");

            mysqli_close($conexion);
            echo "<h1><center>DATOS ELIMINADOS CORRECTAMENTE</center></h1>";
        }


        

    ?>

<?php
            if(isset($_POST['edit'])){
                $CODIGO=$_POST["id_lugar"];
                $Departamento=$_POST["departamento_lugar"];
                $Municipio=$_POST["municipio_lugar"];
                $Nombre_comercial=$_POST["nombreComercial"];
                $tipo_lugar=$_POST["tipo_lugar"];
                $direccion_lugar=$_POST["direccion_lugar"];
                $telefono_lugar=$_POST["telefono_lugar"];

                mysqli_query ($conexion, "UPDATE lugares set departamento_lugar='$Departamento', Municipio='$municipio_lugar', Nombre_comercial='$nombreComercial', tipo_lugar='$tipo_lugar', direccion_lugar='$direccion_lugar', telefono_lugar='$telefono_lugar' where id_lugar='$CODIGO'")
                or die ("error al actualizar");


                mysqli_close($conexion);
                echo "<h1><center> DATOS ACTUALIZADOS CORRECTAMENTE</center></h1>";
            }



        ?>
                    <!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Esta seguro de querer eliminar este registro?</p>
					<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Demostracion <b>5</b> de <b>25</b> Entradas</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
                </ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="#">
				<div class="modal-header">						
					<h4 class="modal-title">Agregar nuevo lugar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                <div class="form-group">
						
                        <div class="form-group">
                            <label>Departamento</label>
                            <input type="text"  name="departamento_lugar" class="form-control" required>
                        </div>
                    <div class="form-group">
                            <label>Municipio</label>
                            <input type="text" name="municipio_lugar" class="form-control" required>
                        </div>
                    <div class="form-group">
                            <label>Nombre comercial</label>
                            <input type="text" name="nombreComercial" class="form-control" required>
                        </div>
                    <div class="form-group">
                            <label>Tipo de lugar</label>
                            <input type="text" name="tipo_lugar" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>direccion_lugar</label>
                            <input type="text" name="direccion_lugar" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>telefono_lugar</label>
                            <input type="text" name="telefono_lugar" class="form-control" required>
                        </div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" name="agregar" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Editar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
</body>


<?php
        if(isset($_POST['agregar'])){
            $CODIGO=$_POST["id_lugar"];
            $Departamento=$_POST["departamento_lugar"];
            $Municipio=$_POST["municipio_lugar"];
            $Nombre_comercial=$_POST["nombreComercial"];
            $tipo_lugar=$_POST["tipo_lugar"];
            $direccion_lugar=$_POST["direccion_lugar"];
            $telefono_lugar=$_POST["telefono_lugar"];
           
            

            $sql = "INSERT INTO lugares (id_lugar, departamento_lugar, municipio_lugar, nombreComercial, tipo_lugar, direccion_lugar, telefono_lugar) VALUES ('$CODIGO','$Departamento','$Municipio','$Nombre_comercial','$tipo_lugar','$direccion_lugar','$telefono_lugar')";

            $ejecutar = mysqli_query($conexion, $sql);

            if($ejecutar){
                echo "<h1><center>INSERTADO CORRECTAMENTE, ¡FELICITACIONES!</center></h1>";
            }
        }
    
    ?>

       

</html>
<?php
    }
?>