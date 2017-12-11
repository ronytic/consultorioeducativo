<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/cuestionario.php';
	extract($_POST);

	$cuestionario=new cuestionario;
    
    include_once '../../class/unidad.php';
    $unidad=new unidad;
	$cue=$cuestionario->mostrarTodo("codunidad LIKE '%$codunidad'");
    $datos=array();
    $i=0;
    foreach($cue as $c){$i++;
        $u=$unidad->mostrarTodo("codunidad=".$c['codunidad']);
        $u=array_shift($u);              
                        
        $datos[$i]['codcuestionario']=$c['codcuestionario'];
        $datos[$i]['titulo']=$u['titulo'];
        $datos[$i]['pregunta1']=$c['pregunta1'];
        $datos[$i]['pregunta2']=$c['pregunta2'];
        $datos[$i]['pregunta3']=$c['pregunta3'];
        $datos[$i]['pregunta4']=$c['pregunta4'];
        $datos[$i]['pregunta5']=$c['pregunta5'];                
                        
    }
    
	$titulo=array("titulo"=>"Titulo","pregunta1"=>"Pregunta 1","pregunta2"=>"Pregunta 2","pregunta3"=>"Pregunta 3","pregunta4"=>"Pregunta 4","pregunta5"=>"Pregunta 5");
	listadoTabla($titulo,$datos,1,"modificar.php","eliminar.php","");
}
?>  