<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Registro de Nueva Unidad de Avance";

include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class="contenido imagenfondo">
    	<div class="prefix_4 grid_4 alpha">
			<fieldset>
				<div class="titulo"><?php echo $titulo?></div>
                <form action="guardar.php" method="post" enctype="multipart/form-data">
				<table class="tablareg">
					<tr>
						<td><?php campos("Titulo de la Unidad","titulo","text","",1,array("required"=>"required"));?></td>
					</tr>
                    <tr>
						<td><?php campos("Descripción","descripcion","textarea","",1,array("required"=>"required","rows"=>8,"cols"=>"50"));?></td>
                       
					</tr>
                    <tr>
						<td><?php campos("Imágen 1","imagen1","file","",1,array("required"=>"required"));?></td>
					
					</tr>
                   <tr>
						<td><?php campos("Imágen 2","imagen2","file","",1,array("required"=>"required"));?></td>
					
					</tr>
                   <tr>
						<td><?php campos("Imágen 3","imagen3","file","",1,array("required"=>"required"));?></td>
					
					</tr>
                    <tr>
                       <td><?php campos("Archivo de Realidad Aumentada","ra","file","",1,array("required"=>"required"));?></td>
                        
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