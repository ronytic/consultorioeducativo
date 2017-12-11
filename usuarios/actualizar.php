<?php
include_once("../login/check.php");
if(!empty($_POST)):
$narchivo="usuarios";
include_once("../class/".$narchivo.".php");
${$narchivo}=new $narchivo;
extract($_POST);
$valores=array("usuario"=>"'$usuario'",
			
			"nombre"=>"'$nombres'",
			"paterno"=>"'$paterno'",
			"materno"=>"'$materno'",
			"nivel"=>"'$nivel'",
			"ci"=>"'$ci'",
			"direccion"=>"'$direccion'",
			"telefono"=>"'$telefono'",
			"celular"=>"'$celular'",
			
			"email"=>"'$email'",
			
			"obs"=>"'$observacion'",
            "lm"=>"'$lm'",
            "mm"=>"'$mm'",
            "xm"=>"'$xm'",
            "jm"=>"'$jm'",
            "vm"=>"'$vm'",
            "lt"=>"'$lt'",
            "mt"=>"'$mt'",
            "xt"=>"'$xt'",
            "jt"=>"'$jt'",
            "vt"=>"'$vt'",
			);
			
			
if($password!=""){$valores=array_merge($valores,array("password"=>"MD5('$password')"));}
${$narchivo}->actualizar($valores,$cod);
$codinsercion=$cod;
$mensaje[]="EL USUARIO SE GUARDO CORRECTAMENTE";
$titulo="Confirmación de Guardado";
$folder="../";
include_once '../mensajeresultado.php';
endif;?>