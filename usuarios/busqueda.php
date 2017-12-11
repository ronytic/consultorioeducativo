<?php 
include_once '../login/check.php';
if (!empty($_POST)) {
	$folder="../";
	$narchivo="usuarios";
	include_once("../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	extract($_POST);
	$usus=${$narchivo}->mostrarTodo("nombre LIKE '%$nombre%' and paterno LIKE '%$paterno%' and materno LIKE '%$materno%' and nivel!=1");
    $i++;
    $datos=array();
    foreach($usus as $u){$i++;
        $datos[$i]['codusuarios']=$u['codusuarios'];
        $datos[$i]['paterno']=$u['paterno'];
        $datos[$i]['materno']=$u['materno'];
        $datos[$i]['nombre']=$u['nombre'];
        $datos[$i]['usuario']=$u['usuario'];
        switch($u['nivel']){
            case 2:{$datos[$i]['nivel']="Administrador";}break;
            case 3:{$datos[$i]['nivel']="Docente";} break;
        }
    }
	$titulo=array("usuario"=>"Usuario","nombre"=>"Nombre","paterno"=>"Paterno","materno"=>"Materno","nivel"=>"Nivel");
	listadoTabla($titulo,$datos,1,"modificar.php","eliminar.php","ver.php");
}
?>