<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Evaluación";
$id=$_GET['codunidad'];
$codalumno=$_GET['codalumno'];
    
include_once '../../class/cuestionario.php';
$cuestionario=new cuestionario;
$cue=array_shift($cuestionario->mostrarTodo("codunidad=$id"));

include_once("../../class/unidad.php");
$unidad=new unidad;
$uni=array_shift($unidad->mostrarTodo("codunidad=$id"));

$vf=array("v"=>"Verdad","f"=>"Falso");

include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class="contenido imagenfondo">
    	<div class="prefix_0 grid_11 alpha">
			<fieldset>
				<div class="titulo"><?php echo $titulo?></div>
                <form action="calificar.php" method="post" enctype="multipart/form-data">
                <?php campos("","codcuestionario","hidden",$cue['codcuestionario']);?>
                <?php campos("","codunidad","hidden",$id);?>
                <?php campos("","codalumno","hidden",$codalumno);?>
				<table class="tablareg">
					<tr>
						<td colspan="2"><h3><?php echo $uni['titulo']?></h3></td>
					</tr>
                    <tr>
						<td class="celda" width="50%"><h4><?php echo $cue['pregunta1'];?><br></h4>
						<label><input type="radio" name="r1" value="v">Verdad</label>
						<label><input type="radio" name="r1" value="f">Falso</label
                        </td>
						<td class="celda" width="50%">
                           <h4 class="azul"><?php echo $cue['pregunta2'];?><br></h4>
                            <label><input type="radio" name="r2" value="v">Verdad</label>
                            <label><input type="radio" name="r2" value="f">Falso</label>
                        </td>
					</tr>
					<tr>
						<td class="celda">
						    <h4 class="naranja"><?php echo $cue['pregunta3'];?><br></h4>
                            <label><input type="radio" name="r3" value="v">Verdad</label>
                            <label><input type="radio" name="r3" value="f">Falso</label>
						</td>

						<td class="celda"><h4 class="rojo"><?php echo $cue['pregunta4'];?><br></h4>
                            <label><input type="radio" name="r4" value="v">Verdad</label>
                            <label><input type="radio" name="r4" value="f">Falso</label>
                        </td>
					</tr>
					<tr>
						<td class="celda" colspan="2">
						    <h4><?php echo $cue['pregunta5'];?><br></h4>
                            <label><input type="radio" name="r5" value="v">Verdad</label>
                            <label><input type="radio" name="r5" value="f">Falso</label>
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