<?php
include_once("../../login/check.php");
$titulo="Listado de Alumnos - Evaluación";
$folder="../../";

include_once("../../class/grado.php");
$grado=new grado;
$gra=todolista($grado->mostrarTodo(),"codgrado","nombre","");

include_once("../../class/materia.php");
$materia=new materia;
$mat=todolista($materia->mostrarTodo(),"codmateria","nombre,turno"," - ");

$dest=array("Procesado"=>"Procesado","Directo"=>"Directo");
include_once("../../funciones/funciones.php");
include_once "../../cabecerahtml.php";
?>
<?php include_once "../../cabecera.php";?>
<div class="grid_12">
	<div class="contenido imagenfondo">
    	<div class="grid_8 prefix_0 alpha">
        	<fieldset>
        	<div class="titulo"><?php echo $titulo?> - Criterio de Búsqueda</div>
            <form id="busqueda" action="busqueda.php" method="post" >
                <table class="tablabus">
                    <tr>
                        <td><?php campos("Nombres","nombres","text","",1,array("size"=>15));?></td>
                        <td><?php campos("Paterno","paterno","text","",1,array("size"=>15));?></td>
                        <td><?php campos("Materno","materno","text","",1,array("size"=>15));?></td>
                        <td width="250"><?php campos("Grado","codgrado","select",$gra);?></td>
                        <td width="250"><?php campos("Materia","codmateria","select",$mat);?></td>
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
