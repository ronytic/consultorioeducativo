<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/cuestionario.php");
$cuestionario=new cuestionario;

extract($_POST);
//empieza la copia de archivos
//print_r($_POST);

include_once("../../class/calificacion.php");
$calificacion=new calificacion;


$cue=array_shift($cuestionario->mostrarTodo("codcuestionario=$codcuestionario"));
$puntaje=0;
if($cue['r1']==$r1){
    $puntaje=$puntaje+10; 
    $p1=1;
}
if($cue['r2']==$r2){
    $puntaje=$puntaje+10;
    $p2=1;
}
if($cue['r3']==$r3){
    $puntaje=$puntaje+10;    
    $p3=1;
}
if($cue['r4']==$r4){
    $puntaje=$puntaje+10;    
    $p4=1;
}
if($cue['r5']==$r5){
    $puntaje=$puntaje+10;    
    $p5=1;
}
//echo $puntaje;
//print_r($cue);

$cal=$calificacion->updateRow(array("activo"=>"0"),"codunidad=$codunidad and codalumno=$codalumno");

$nuevo=1;


$valores=array(	"codunidad"=>"'$codunidad'",
				"codcuestionario"=>"'$codcuestionario'",
                "codalumno"=>"'$codalumno'",
				"r1"=>"'$r1'",
				"r2"=>"'$r2'",
				"r3"=>"'$r3'",
				"r4"=>"'$r4'",
				"r5"=>"'$r5'",
				"p1"=>"'$p1'",
                "p2"=>"'$p2'",
                "p3"=>"'$p3'",
                "p4"=>"'$p4'",
                "p5"=>"'$p5'",
                "puntaje"=>"$puntaje"
				);
				$calificacion->insertar($valores);
				$mensaje[]="SU EVALUACIÓN SE REGISTRO ADECUADAMENTE";

                $mensaje[]="Su Puntaje es de $puntaje Puntos";
    



$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>