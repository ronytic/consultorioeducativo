<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Registro de Nuevo Alumno";

include_once("../../class/materia.php");
$materia=new materia;
$mat=todolista($materia->mostrarTodo(),"codmateria","nombre,turno"," - ");

include_once("../../class/grado.php");
$grado=new grado;
$gra=todolista($grado->mostrarTodo(),"codgrado","nombre","");

include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class="contenido imagenfondo">
       <form action="guardar.php" method="post" enctype="multipart/form-data">
    	<div class=" grid_5">
			<fieldset>
				<div class="titulo"><?php echo $titulo?></div>
                
				<table class="tablareg">
				    <tr>
						<td><?php campos("Nombres","nombres","text","",1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Apellido Paterno","paterno","text","",1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Apellido Materno","materno","text","",1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Ci","ci","text","",1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Sexo","sexo","select",array("F"=>"Femenino","M"=>"Masculino"));?></td>
					</tr>
                    <tr>
						<td><?php campos("Dirección","direccion","text","",1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Grado","codgrado","select",$gra);?></td>
					</tr>
                   <tr>
						<td><?php campos("Materia","codmateria","select",$mat);?></td>
					</tr>
                    
					<tr><td><?php campos("Guardar","guardar","submit");?></td></tr>
				</table>
                
			</fieldset>
		</div>
       <div class="prefix_1 grid_5 ">
			<fieldset>
				<div class="titulo">Datos de Padre de Familia o Tutor</div>
                
				<table class="tablareg">
				    <tr>
						<td><?php campos("Nombres","nombrespadre","text","",1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Apellido Paterno","paternopadre","text","",1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Apellido Materno","maternopadre","text","",1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Ci","cipadre","text","",1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Sexo","sexopadre","select",array("F"=>"Femenino","M"=>"Masculino"));?></td>
					</tr>
                    <tr>
						<td><?php campos("Dirección de Casa","direccionpadre","text","",1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Dirección de Trabajo","direcciontrabajo","text","",1,array(""=>""));?></td>
					</tr>
                   
                    <tr>
						<td><?php campos("Telefono","telefono","text","",1,array(""=>""));?></td>
					</tr>
                   <tr>
						<td><?php campos("Tutor Nº 1","tutor1","text","",1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Celular Tutor 1º Tutor","celtutor1","text","",1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Tutor Nº 2","tutor2","text","",1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Celular Tutor 2º Tutor","celtutor2","text","",1,array(""=>""));?></td>
					</tr>
                
	                
				</table>
                
			</fieldset>
		</div>
       </form>
    	<div class="clear"></div>
    </div>
</div>
<?php include_once '../../piepagina.php';?>