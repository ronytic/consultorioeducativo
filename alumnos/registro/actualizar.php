<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/alumno.php");
$alumno=new alumno;
extract($_POST);
//empieza la copia de archivos
$valores=array(	"nombres"=>"'$nombres'",
				"paterno"=>"'$paterno'",
				"materno"=>"'$materno'",
				"ci"=>"'$ci'",
               "sexo"=>"'$sexo'",
               "direccion"=>"'$direccion'",
               "codgrado"=>"'$codgrado'",
               "codmateria"=>"'$codmateria'",
               "nombrespadre"=>"'$nombrespadre'",
               "paternopadre"=>"'$paternopadre'",
               "maternopadre"=>"'$maternopadre'",
               "cipadre"=>"'$cipadre'",
               "sexopadre"=>"'$sexopadre'",
               "direccionpadre"=>"'$direccionpadre'",
               "direcciontrabajo"=>"'$direcciontrabajo'",
               "telefono"=>"'$telefono'",
               "tutor1"=>"'$tutor1'",
               "celtutor1"=>"'$celtutor1'",
               "tutor2"=>"'$tutor2'",
               "celtutor2"=>"'$celtutor2'",
				);
				
				$alumno->actualizar($valores,$id);
				$mensaje[]="SUS DATOS SE GUARDARON CORRECTAMENTE";


$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>