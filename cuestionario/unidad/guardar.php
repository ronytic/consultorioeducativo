<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/unidad.php");
$unidad=new unidad;

extract($_POST);
//empieza la copia de archivos
/*
if(($_FILES['curriculum']['type']=="application/pdf" || $_FILES['curriculum']['type']=="application/msword" || $_FILES['curriculum']['type']=="application/vnd.openxmlformats-officedocument.wordprocessingml.document") && $_FILES['curriculum']['size']<="500000000"){
	@$curriculum=$_FILES['curriculum']['name'];
	@copy($_FILES['curriculum']['tmp_name'],"../curriculum/".$_FILES['curriculum']['name']);
}else{
	//mensaje que no es valido el tipo de archivo	
	$mensaje[]="Archivo no válido del curriculum. Verifique e intente nuevamente";
}
*/
if($_FILES['imagen1']['name']!=""){
    copy($_FILES['imagen1']['tmp_name'],"../../imagenes/unidad/".$_FILES['imagen1']['name']);
    $imagen1=$_FILES['imagen1']['name'];
}
if($_FILES['imagen2']['name']!=""){
    copy($_FILES['imagen2']['tmp_name'],"../../imagenes/unidad/".$_FILES['imagen2']['name']);
    $imagen2=$_FILES['imagen2']['name'];
}
if($_FILES['imagen3']['name']!=""){
    copy($_FILES['imagen3']['tmp_name'],"../../imagenes/unidad/".$_FILES['imagen3']['name']);
    $imagen3=$_FILES['imagen3']['name'];
}
if($_FILES['ra']['name']!=""){
    copy($_FILES['ra']['tmp_name'],"../../realidadaumentada/".$_FILES['ra']['name']);
    $ra=$_FILES['ra']['name'];
}
$valores=array(	"titulo"=>"'$titulo'",
				"descripcion"=>"'$descripcion'",
				
				"imagen1"=>"'$imagen1'",
				"imagen2"=>"'$imagen2'",
				"imagen3"=>"'$imagen3'",
				"ra"=>"'$ra'",
				
				);
				$unidad->insertar($valores);
				$mensaje[]="SUS DATOS SE GUARDARON CORRECTAMENTE";



$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>