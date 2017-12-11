<?php
include_once("../impresion/pdf.php");
$narchivo="usuarios";
include_once("../class/".$narchivo.".php");
${$narchivo}=new $narchivo;
extract($_GET);
$dato=array_shift(${$narchivo}->mostrar($id));

class PDF extends PPDF{
	
}
switch($dato['nivel']){
case 1:{$nivel="";}break;
case 2:{$nivel="Administrador";}break;	
case 3:{$nivel="Docente";}	break;


}
$titulo="Datos de $nivel";
$pdf=new PDF("P","mm","letter");
$pdf->AddPage();



mostrarI(array("Usuario"=>$dato['usuario'],
				"Nombres"=>ucwords($dato['nombre']),
				"Apellido Paterno"=>ucwords($dato['paterno']),
				"Apellido Materno"=>ucwords($dato['materno']),
				"C.I."=>$dato['ci'],
				"Dirección"=>$dato['direccion'],
				"Teléfono"=>$dato['telefono'],
				"Email"=>$dato['email'],
				"Nivel de Usuario:"=>$nivel,
				"Observaciones"=>$dato['obs'],
			));
$pdf->Linea();

$pdf->CuadroCuerpoPersonalizado(180,"TURNO DE CLASES",1,"C",1,"B");
$pdf->ln();
$pdf->CuadroCuerpoPersonalizado(30,"Turno",1,"",1,"B");
$pdf->CuadroCuerpoPersonalizado(30,"Lunes",1,"",1,"B");
$pdf->CuadroCuerpoPersonalizado(30,"Martes",1,"",1,"B");
$pdf->CuadroCuerpoPersonalizado(30,"Miercoles",1,"",1,"B");
$pdf->CuadroCuerpoPersonalizado(30,"Jueves",1,"",1,"B");
$pdf->CuadroCuerpoPersonalizado(30,"Viernes",1,"",1,"B");

$pdf->ln();


$pdf->CuadroCuerpoPersonalizado(30,"Mañana",1,"",1,"B");
$pdf->CuadroCuerpoPersonalizado(30,$dato['lm']?'Si':'',0,"",1);
$pdf->CuadroCuerpoPersonalizado(30,$dato['mm']?'Si':'',0,"",1);
$pdf->CuadroCuerpoPersonalizado(30,$dato['xm']?'Si':'',0,"",1);
$pdf->CuadroCuerpoPersonalizado(30,$dato['jm']?'Si':'',0,"",1);
$pdf->CuadroCuerpoPersonalizado(30,$dato['vm']?'Si':'',0,"",1);
$pdf->ln();
$pdf->CuadroCuerpoPersonalizado(30,"Tarde",1,"",1,"B");
$pdf->CuadroCuerpoPersonalizado(30,$dato['lt']?'Si':'',0,"",1);
$pdf->CuadroCuerpoPersonalizado(30,$dato['mt']?'Si':'',0,"",1);
$pdf->CuadroCuerpoPersonalizado(30,$dato['xt']?'Si':'',0,"",1);
$pdf->CuadroCuerpoPersonalizado(30,$dato['jt']?'Si':'',0,"",1);
$pdf->CuadroCuerpoPersonalizado(30,$dato['vt']?'Si':'',0,"",1);
$pdf->Output();
?>