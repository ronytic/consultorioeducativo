<?php
include_once("../../login/check.php");
$titulo="Listado de Unidades - Evaluación";
$folder="../../";

$_SESSION['codalumno']=$_GET['id'];

$dest=array("Procesado"=>"Procesado","Directo"=>"Directo");
include_once("../../funciones/funciones.php");
include_once "../../cabecerahtml.php";
?>
<?php include_once "../../cabecera.php";?>
<div class="grid_12">
	<div class="contenido imagenfondo">
    	<div class="grid_8 prefix_2 alpha">
        	<fieldset>
        	<div class="titulo"><?php echo $titulo?> - Criterio de Búsqueda</div>
            <form id="busqueda" action="busquedau.php" method="post" >
                <table class="tablabus">
                    <tr>
                        <td><?php campos("Titulo","titulo","text","",1,array("size"=>15));?></td>
                        
                        <td><?php campos("Buscar","enviar","submit","",0,array("size"=>15));?></td>
                    </tr>
                </table>
            </form>
            </fieldset>
        </div>
        <div class="clear"></div>
        <div id="respuesta"></div>
    </div>
</div>
<?php include_once "../../piepagina.php";?>
