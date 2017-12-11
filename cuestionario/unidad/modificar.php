<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Modificar Unidad";
$id=$_GET['id'];
include_once '../../class/unidad.php';
$unidad=new unidad;
$uni=array_shift($unidad->mostrar($id));
/*include_once("../../class/proveedor.php");
$proveedor=new proveedor;
$prov=todolista($proveedor->mostrarTodo(),"codproveedor","nombre","");*/

include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class="contenido imagenfondo">
    	<div class="prefix_4 grid_4 alpha">
			<fieldset>
				<div class="titulo"><?php echo $titulo?></div>
                <form action="actualizar.php" method="post" enctype="multipart/form-data">
                <?php campos("","id","hidden",$id);?>
				<table class="tablareg">
					<tr>
						<td><?php campos("Titulo de la Unidad","titulo","text",$uni['titulo'],1,array("required"=>"required"));?></td>
					</tr>
                    <tr>
						<td><?php campos("Descripción","descripcion","textarea",$uni['descripcion'],1,array("required"=>"required","rows"=>8,"cols"=>"50"));?></td>
                       
					</tr>
                    <tr>
						<td><?php campos("Imágen 1","imagen1","file","",1,array(""=>""));?>
                            <br>
                            <img src="../../imagenes/unidad/<?php echo $uni['imagen1']?>" width="400">
						
						</td>
					
					</tr>
                   <tr>
						<td><?php campos("Imágen 2","imagen2","file","",1,array(""=>""));?>
						<br>
                            <img src="../../imagenes/unidad/<?php echo $uni['imagen2']?>" width="400">
                        </td>
					
					</tr>
                   <tr>
						<td><?php campos("Imágen 3","imagen3","file","",1,array(""=>""));?>
						<br>
                            <img src="../../imagenes/unidad/<?php echo $uni['imagen3']?>" width="400">
						</td>
					
					</tr>
                    <tr>
                       <td><?php campos("Archivo de Realidad Aumentada","ra","file","",1,array(""=>""));?>
                       <br>
                           <a href="../../realidadaumentada/<?php echo $uni['ra']?>" target="_blank">Enlace de Descarga</a>
                       </td>
                        
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