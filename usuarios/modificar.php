<?php
include_once '../login/check.php';
$folder="../";
$titulo="Modificar Usuario";
$narchivo="usuarios";
include_once("../class/usuarios.php");
$usuarios1=new usuarios;
$cod=$_GET['id'];
$usu=array_shift($usuarios1->mostrar($cod));
include_once '../funciones/funciones.php';
include_once '../cabecerahtml.php';
?>
<?php include_once '../cabecera.php';?>
    	<div class="prefix_2 grid_4 suffix_3 imagenfondo">
			<fieldset>
				<div class="titulo"><?php echo $titulo;?></div>
                <form action="actualizar.php" method="post">
                <?php campos("","cod","hidden",$cod)?>
				<table class="tablareg">
                	<tr>
						<td><?php campos("Usuario","usuario","text",$usu['usuario'],1,array("required"=>"required","size"=>30));?></td>
						<td><?php campos("Contraseña","password","text","",0,array("required"=>"required","size"=>30));?></td>
					</tr>
                    <tr>
						<td><?php campos("Nombres","nombres","text",$usu['nombre'],0,array("required"=>"required","size"=>30));?></td>
						<td><?php campos("Apellido Paterno","paterno","text",$usu['paterno'],0,array("required"=>"required","size"=>30));?></td>
					</tr>
                    <tr>
                    	<td><?php campos("Apellido Materno","materno","text",$usu['materno'],0,array("required"=>"required","size"=>30));?></td>
                        <td><?php campos("CI","ci","text",$usu['ci'],0,array("size"=>30));?></td>
                    </tr>
                    <tr>
                        <td><?php campos("Dirección","direccion","text",$usu['direccion'],0,array("required"=>"required","size"=>30));?></td>
                        <td><?php campos("Teléfono","telefono","text",$usu['telefono'],0,array("size"=>30));?></td>
                    </tr>
                    <tr>
                    <tr>
            	<td><?php campos("Celular","celular","text",$usu['celular'],0,array("required"=>"required","size"=>30));?></td>
                
            </tr>
                    </tr>
                    <tr>
						<td><?php campos("Email","email","text",$usu['email'],0,array("size"=>30));?></td>
						<td><?php campos("Nivel","nivel","select",array("2"=>"Administrador","3"=>"Docente"),0,"",$usu['nivel']);?></td>
					</tr>
					<tr>
                <td colspan="2" class="centrar">
                   <h6>TURNO DE CLASES: </h6>
                   <center>
                    <table border="1" class="tabla">
                        <tr class="titulo">
                        <td>Turno</td>
                        <td>Lun.</td>
                        <td>Mar.</td>
                        <td>Mie.</td>
                        <td>Jue.</td>
                        <td>Vie.</td>
                        </tr>
                        <tr class="">
                        <td>Mañana</td>
                        <td><input type="checkbox" name="lm" value="1" <?php echo $usu['lm']==1?'checked':''?> ></td>
                        <td><input type="checkbox" name="mm" value="1" <?php echo $usu['mm']==1?'checked':''?> ></td>
                        <td><input type="checkbox" name="xm" value="1" <?php echo $usu['xm']==1?'checked':''?> ></td>
                        <td><input type="checkbox" name="jm" value="1" <?php echo $usu['jm']==1?'checked':''?> ></td>
                        <td><input type="checkbox" name="vm" value="1" <?php echo $usu['vm']==1?'checked':''?> ></td>
                        </tr>
                        <tr class="">
                        <td>Tarde</td>
                        <td><input type="checkbox" name="lt" value="1" <?php echo $usu['lt']==1?'checked':''?> ></td>
                        <td><input type="checkbox" name="mt" value="1"  <?php echo $usu['mt']==1?'checked':''?> ></td>
                        <td><input type="checkbox" name="xt" value="1"  <?php echo $usu['xt']==1?'checked':''?> ></td>
                        <td><input type="checkbox" name="jt" value="1"  <?php echo $usu['jt']==1?'checked':''?> ></td>
                        <td><input type="checkbox" name="vt" value="1"  <?php echo $usu['vt']==1?'checked':''?> ></td>
                        </tr>
                    </table>
                    </center>
                </td>
                
            </tr>
					<tr>
						<td colspan="2"><?php campos("Observación","observacion","textarea",$usu['obs'],"",array("rows"=>5,"cols"=>50,"size"=>30));?></td>
					</tr>
					<tr><td><?php campos("Guardar Usuario","guardar","submit");?></td><td></td></tr>
				</table>
                </form>
			</fieldset>
		</div>

<?php include_once '../piepagina.php';?>