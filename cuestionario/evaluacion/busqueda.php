<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/alumno.php';
    include_once '../../class/grado.php';
    include_once '../../class/materia.php';
    $grado=new grado;
    $materia=new materia;
	extract($_POST);
    //print_r($_POST);
	$codgrado=$codgrado!=""?"codgrado='$codgrado'":"codgrado LIKE '%'";
    $codmateria=$codmateria!=""?"codmateria='$codmateria'":"codmateria LIKE '%'";
	$alumno=new alumno;
	$al=$alumno->mostrarTodo("nombres LIKE '%$nombres%' and paterno LIKE '$paterno%' and materno LIKE '$materno%' and $codgrado and $codmateria");
    $datos=array();
    $i=0;
    foreach($al as $a){$i++;
        $m=array_shift($materia->mostrarTodo("codmateria=".$a['codmateria']));
        $g=array_shift($grado->mostrarTodo("codgrado=".$a['codgrado']));
                       
        $datos[$i]['codalumno']=$a['codalumno'];
        $datos[$i]['nombres']=$a['nombres'];
        $datos[$i]['paterno']=$a['paterno'];
        $datos[$i]['materno']=$a['materno'];
        $datos[$i]['ci']=$a['ci'];
        $datos[$i]['sexo']=$a['sexo'];
        $datos[$i]['nombrespadre']=$a['nombrespadre'];
        $datos[$i]['paternopadre']=$a['paternopadre'];
        $datos[$i]['telefono']=$a['telefono'];
        $datos[$i]['grado']=$g['nombre'];
        $datos[$i]['materia']=$m['nombre']." - ".$m['turno'];

    }
	$titulo=array("nombres"=>"Nombres","paterno"=>"Ap. Paterno","materno"=>"Ap. Materno","ci"=>"C.I.","sexo"=>"Sexo","grado"=>"Grado","materia"=>"Materia","nombrespadre"=>"Nombres Padre","paternopadre"=>"Paterno Padre","telefono"=>"Teléfono");
	listadoTabla($titulo,$datos,1,"","","",array("Evaluar"=>"listaru.php"));
}
?>