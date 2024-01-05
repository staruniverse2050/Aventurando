// Funcionalidades de formulario

//objetos 
function persona(nombre,apellido,edad)
{
	this.nombre = nombre;
	this.apellido = apellido;
	this.edad = edad;
}

var lista = [];

var p1 = new persona("Reynado", "Rainos",34);	
var p2 = new persona("Juaquin", "Alvares",32);

lista.push(p1);
lista.push(p2);

$(document).ready(function(){
  btn_listar(); 
  $(".formulario_edicion").css("display","none");
});


function btn_registrar()
{   var nombre = $("#nombre").val();
	var apellido = $("#apellido").val();
	var edad = $("#edad").val();

	var p = new persona(nombre,apellido,edad);
	lista.push(p);
	$("#nombre").val("");
	$("#apellido").val("");
	$("#edad").val("");
	btn_listar();
	$("#nombre").focus();

	//alert("holas " +lista[0].nombre+" "+lista[0].apellido+" "+lista[0].edad);
}

function btn_listar()
{  
	var cadena ="<table class='tabla_formulario'> <tr><td> Nombre </td> <td> Apellido </td> <td> Edad </td> <td colspan='2'> </td></tr> ";
	for (var i = 0; i < lista.length; i++) {
		cadena = cadena + "<tr><td>"+lista[i].nombre+"</td><td>"+lista[i].apellido+"</td><td>"+lista[i].edad+"</td>"+
		"<td> <button class='btn_editar' onclick='btn_editar("+i+");'> Edit </button> <button class='btn_eliminar' onclick='btn_eliminar()'> Elim </button></td></tr>";
	}
	cadena = cadena+"</table>"

	$("#listar").html(cadena);

}


function btn_eliminar()
{
	lista.pop();
	btn_listar();


}

function btn_editar(id)
{
	$(".formulario_edicion").css("display","block");
	$(".formulario").css("display","none");
    
    $("#id").val(id);
	$("#nombre_ed").val(lista[id].nombre);
	$("#apellido_ed").val(lista[id].apellido);
	$("#edad_ed").val(lista[id].edad);
}

function btn_guardar()
{
   
    var id = $("#id").val();
	var nombre_ed = $("#nombre_ed").val();
	var apellido_ed = $("#apellido_ed").val();
	var edad_ed = $("#edad_ed").val();

    lista[id].nombre= nombre_ed;
    lista[id].apellido = apellido_ed;
    lista[id].edad = edad_ed;

    $(".formulario_edicion").css("display","none");
	$(".formulario").css("display","block");
	btn_listar();

}


