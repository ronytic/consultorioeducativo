<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Registro de Cuestionario";


include_once("../../class/unidad.php");
$unidad=new unidad;
$uni=todolista($unidad->mostrarTodo(),"codunidad","titulo"," - ");

$vf=array("v"=>"Verdad","f"=>"Falso");
include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class="contenido imagenfondo">
    	<div class="prefix_3 grid_4 alpha">
			<fieldset>
				<div class="titulo"><?php echo $titulo?></div>
                <form action="guardar.php" method="post" enctype="multipart/form-data">
				<table class="tablareg">
					<tr>
						<td colspan="2"><?php campos("Titulo de la Unidad","codunidad","select",$uni,1,array("required"=>"required"));?></td>
					</tr>
                    <tr>
						<td><?php campos("Pregunta 1","pregunta1","text","",1,array("required"=>"required","size"=>"40"));?></td>
                        <td><?php campos("Respuesta  1","r1","select",$vf,1,array("required"=>"required"));?></td>
					</tr>
                    <tr>
						<td><?php campos("Pregunta 2","pregunta2","text","",1,array("required"=>"required","size"=>"40"));?></td>
                        <td><?php campos("Respuesta  2","r2","select",$vf,1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Pregunta 3","pregunta3","text","",1,array("required"=>"required","size"=>"40"));?></td>
                        <td><?php campos("Respuesta  3","r3","select",$vf,1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Pregunta 4","pregunta4","text","",1,array("required"=>"required","size"=>"40"));?></td>
                        <td><?php campos("Respuesta  4","r4","select",$vf,1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Pregunta 5","pregunta5","text","",1,array("required"=>"required","size"=>"40"));?></td>
                        <td><?php campos("Respuesta  5","r5","select",$vf,1,array("required"=>"required"));?></td>
					</tr>
					<tr><td><?php campos("Guardar","guardar","submit");?></td></tr>
				</table>
                </form>
			</fieldset>
		</div>
    	<div class="clear"></div>
    </div>
</div>
<?php include_once '../../piepagina.php';?>