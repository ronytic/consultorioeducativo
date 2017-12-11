<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Unidad de Evaluación";
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
<link href="<?php echo $folder?>css/light/light.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $folder?>css/nivo-slider.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="<?php echo $folder?>js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class="contenido imagenfondo">
    	<div class=" grid_11 alpha">
			<fieldset>
				<div class="titulo"><?php echo $titulo?></div>
                <form action="actualizar.php" method="post" enctype="multipart/form-data">
                <?php campos("","id","hidden",$id);?>
				<table class="tablareg">
					<tr>
						<td colspan="2"><h3><?php echo $uni['titulo'];?></h3></td>
					</tr>
                    <tr>
						<td width="50%" style="text-align: justify;line-height: 2.0em;background-color:#B5DBB2"><?php echo $uni['descripcion'];?></td>

						<td>
                           <div class="theme-light">
    	                    <div id="slider" class="nivoSlider">
                            <img src="../../imagenes/unidad/<?php echo $uni['imagen1']?>" width="400">
						    <img src="../../imagenes/unidad/<?php echo $uni['imagen2']?>" width="400">
						    <img src="../../imagenes/unidad/<?php echo $uni['imagen3']?>" width="400">
                               </div>
                               </div>
						    <br>
						    <a href="../../realidadaumentada/<?php echo $uni['ra']?>" target="_blank" class="botonadicional boton botonplomo">Ingresar a APP RA</a>
						</td>
					
					</tr>
					<tr><td><a href="evaluar.php?codalumno=<?php echo $_SESSION['codalumno']?>&codunidad=<?php echo $_GET['id']?>" class=" btn enviar">Realizar Evaluación</a></td></tr>
				</table>
                </form>
			</fieldset>
		</div>
    	<div class="clear"></div>
    </div>
</div>
<?php include_once '../../piepagina.php';?>