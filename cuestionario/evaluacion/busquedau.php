<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/unidad.php';
	extract($_POST);

	$unidad=new unidad;
	$u=$unidad->mostrarTodo("titulo LIKE '%$tiutlo%'");
    $datos=array();
    $i=0;
    foreach($u as $un){$i++;
        $datos[$i]['codunidad']=$un['codunidad'];
         $datos[$i]['titulo']=$un['titulo'];
        $datos[$i]['descripcion']=substr($un['descripcion'],0,200)."...";
    }
    
	$titulo=array("titulo"=>"Titulo","descripcion"=>"Descripción");
	listadoTabla($titulo,$datos,1,"","","",array("Revisar"=>"revisar.php"));
}
?>