<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/materia.php';
	extract($_POST);

	$materia=new materia;
	$mat=$materia->mostrarTodo("nombre LIKE '%$nombre%'");
	$titulo=array("nombre"=>"Nombre","turno"=>"Turno");
	listadoTabla($titulo,$mat,1,"modificar.php","eliminar.php","");
}
?>