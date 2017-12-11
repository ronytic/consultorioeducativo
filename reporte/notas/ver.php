<?php
include_once("../../login/check.php");
include_once("../../impresion/pdf.php");
$titulo="Reporte de Notas";
extract($_GET);


class PDF extends PPDF{
	function Cabecera(){
        global $nombregrado,$nombremateria;
		$this->Ln();
		$this->CuadroCabecera(30,"Grado: ",20,$nombregrado);
        $this->CuadroCabecera(30,"Materia: ",20,$nombremateria);
		$this->Ln(15);
		$this->TituloCabecera(10,"N");
		$this->TituloCabecera(30,"Paterno");
		$this->TituloCabecera(30,"Materno");
		$this->TituloCabecera(40,"Nombres");
		$this->TituloCabecera(20,"Nota");
		
	}	
}



include_once("../../class/alumno.php");
include_once("../../class/calificacion.php");
include_once("../../class/grado.php");
include_once("../../class/materia.php");

$alumno=new alumno;
$calificacion=new calificacion;
$grado=new grado;
$materia=new materia;
$mat=array_shift($materia->mostrar($codmateria));
$gra=array_shift($grado->mostrar($codgrado));
$nombregrado=$gra['nombre'];
$nombremateria=$mat['nombre']." - ".$mat['turno'];
$where="codgrado=$codgrado and codmateria=$codmateria";

$pdf=new PDF("P","mm","letter");
$pdf->AddPage();

foreach($alumno->mostrarTodos($where,"paterno,materno,nombres") as $a){$i++;
	
	$calificacion->campos=array("codalumno,ROUND(AVG(puntaje)) as puntaje");
	$nota=array_shift($calificacion->getRecords("codalumno=".$a['codalumno']." and activo=1 GROUP BY codalumno "));
	//print_r($nota);
	
	$pdf->CuadroCuerpo(10,$i,0,"R",1);
	$pdf->CuadroCuerpo(30,ucwords($a['paterno']),0,"",1);
	$pdf->CuadroCuerpo(30,ucwords($a['materno']),0,"",1);
	$pdf->CuadroCuerpo(40,ucwords($a['nombres']),0,"",1);
	$pdf->CuadroCuerpo(20,$nota['puntaje'],1,"R",1);
	
	
	$pdf->ln();
}

$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();
$pdf->CuadroCuerpo("180","........................................................",0,"C");
$pdf->ln();
$pdf->CuadroCuerpo("180","Lic. Mayra Salet Laura",0,"C");
$pdf->ln();
$pdf->CuadroCuerpo("180","DIRECTORA",0,"C");

$pdf->Output();
?>