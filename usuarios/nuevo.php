<?php
include_once '../login/check.php';
$folder="../";
$titulo="Nuevo Usuario";
include_once '../funciones/funciones.php';
include_once $folder.'cabecerahtml.php';
?>
<?php include_once $folder.'cabecera.php';?>
<div class="prefix_2 grid_4 suffix_3 imagenfondo">
	<div class="">
    <fieldset class="contenido">
        <div class="titulo"><?php echo $titulo;?></div>
        <form action="guardar.php" method="post" enctype="multipart/form-data">
        <table class="tablareg">
            <tr>
                <td><?php campos("Usuario","usuario","text","",1,array("required"=>"required","size"=>30));?></td>
                <td><?php campos("Contraseña","password","text","",0,array("required"=>"required","size"=>30));?></td>
            </tr>
            <tr>
                <td><?php campos("Nombres","nombres","text","",0,array("required"=>"required","size"=>30));?></td>
                <td><?php campos("Apellido Paterno","paterno","text","",0,array("required"=>"required","size"=>30));?></td>
            </tr>
            <tr>
            	<td><?php campos("Apellido Materno","materno","text","",0,array("required"=>"required","size"=>30));?></td>
                <td><?php campos("CI","ci","text","",0,array("size"=>30));?></td>
            </tr>
            <tr>
            	<td><?php campos("Dirección","direccion","text","",0,array("required"=>"required","size"=>30));?></td>
                <td><?php campos("Teléfono","telefono","text","",0,array("size"=>30));?></td>
            </tr>
            <tr>
            	<td><?php campos("Celular","celular","text","",0,array("required"=>"required","size"=>30));?></td>
                
            </tr>
            
            <tr>
                <td><?php campos("Email","email","text","",0,array("size"=>30));?></td>
                <td><?php campos("Nivel","nivel","select",array("2"=>"Administrador","3"=>"Docente"));?></td>
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
                        <td><input type="checkbox" name="lm" value="1"></td>
                        <td><input type="checkbox" name="mm" value="1"></td>
                        <td><input type="checkbox" name="xm" value="1"></td>
                        <td><input type="checkbox" name="jm" value="1"></td>
                        <td><input type="checkbox" name="vm" value="1"></td>
                        </tr>
                        <tr class="">
                        <td>Tarde</td>
                        <td><input type="checkbox" name="lt" value="1"></td>
                        <td><input type="checkbox" name="mt" value="1"></td>
                        <td><input type="checkbox" name="xt" value="1"></td>
                        <td><input type="checkbox" name="jt" value="1"></td>
                        <td><input type="checkbox" name="vt" value="1"></td>
                        </tr>
                    </table>
                    </center>
                </td>
                
            </tr>
            
            <tr>
                <td colspan="2"><?php campos("Observación","observacion","textarea","","",array("rows"=>5,"cols"=>50,"size"=>30));?></td>
            </tr>
            <tr><td><?php campos("Guardar Usuario","guardar","submit");?></td><td></td></tr>
        </table>
        </form>
    </fieldset>
    </div>
</div>

<?php include_once $folder.'piepagina.php';?>