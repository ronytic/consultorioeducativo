<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/cuestionario.php");
$cuestionario=new cuestionario;
extract($_POST);
//empieza la copia de archivos
$cue=todolista($cuestionario->mostrarTodo("codunidad=$codunidad"),"codunidad","titulo"," - ");

if(count($cue)==1){
    
$valores=array(	"codunidad"=>"'$codunidad'",
				"pregunta1"=>"'$pregunta1'",
				"r1"=>"'$r1'",
				"pregunta2"=>"'$pregunta2'",
				"r2"=>"'$r2'",
                "pregunta3"=>"'$pregunta3'",
				"r3"=>"'$r3'",
                "pregunta4"=>"'$pregunta4'",
				"r4"=>"'$r4'",
                "pregunta5"=>"'$pregunta5'",
				"r5"=>"'$r5'",
				
				);



    
   
				
				
				



				$cuestionario->actualizar($valores,$id);

				$mensaje[]="SUS DATOS SE GUARDARON CORRECTAMENTE";
}else{
     $mensaje[]="ERROR YA EXISTE UN CUESTIONARIO REGISTRADO PARA ESTA UNIDAD";
}

$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>