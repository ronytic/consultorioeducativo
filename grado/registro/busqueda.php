<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/grado.php';
	extract($_POST);

	$grado=new grado;
	$gra=$grado->mostrarTodo("nombre LIKE '%$nombre%'");
	$titulo=array("nombre"=>"Nombre","descripcion"=>"Descripción");
	listadoTabla($titulo,$gra,1,"modificar.php","eliminar.php","");
}
?>