<?php
include_once("../../login/check.php");
$titulo="Reporte de Notas";
$folder="../../";
include_once("../../funciones/funciones.php");

include_once("../../class/grado.php");
$grado=new grado;
$gra=todolista( $grado->mostrarTodos("","nombre"),"codgrado","nombre","");

include_once("../../class/materia.php");
$materia=new materia;
$mat=todolista( $materia->mostrarTodos("","nombre"),"codmateria","nombre,turno","-");


include_once "../../cabecerahtml.php";
$datos=todolista($usuarios->mostrarTodo("nivel!=1","paterno,materno,nombre"),"codusuarios","paterno,materno,nombre");
?>
<?php include_once "../../cabecera.php";?>
<div class="grid_12">
	<div class="contenido imagenfondo">
    	<div class="grid_8 prefix_2 alpha">
        	<fieldset>
        	<div class="titulo"><?php echo $titulo;?></div>
            <form id="busqueda" action="busqueda.php" method="post">
                <table class="tablabus">
                	
                    <tr>
                        <td colspan="4"><?php campos("Grado","codgrado","select",$gra,0)?></td>
                        <td colspan="4" width="300"><?php campos("Materia","codmateria","select",$mat,0)?></td>
                    </tr>
                    
                    <tr>
                        <td><?php campos("Ver Reporte","enviar","submit","",0,array("size"=>15));?></td>
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