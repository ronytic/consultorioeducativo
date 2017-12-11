<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Modificar Datos del Alumno";
$id=$_GET['id'];

include_once '../../class/alumno.php';
$alumno=new alumno;
$al=array_shift($alumno->mostrar($id));

include_once("../../class/materia.php");
$materia=new materia;
$mat=todolista($materia->mostrarTodo(),"codmateria","nombre,turno"," - ");

include_once("../../class/grado.php");
$grado=new grado;
$gra=todolista($grado->mostrarTodo(),"codgrado","nombre","");

include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>

<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class="contenido imagenfondo">
    	<form action="actualizar.php" method="post" enctype="multipart/form-data">
    	<?php campos("","id","hidden",$id);?>
    	<div class=" grid_5">
			<fieldset>
				<div class="titulo"><?php echo $titulo?></div>
                
				<table class="tablareg">
				    <tr>
						<td><?php campos("Nombres","nombres","text",$al['nombres'],1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Apellido Paterno","paterno","text",$al['paterno'],1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Apellido Materno","materno","text",$al['materno'],1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Ci","ci","text",$al['ci'],1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Sexo","sexo","select",array("F"=>"Femenino","M"=>"Masculino"),"","",$al['sexo']);?></td>
					</tr>
                    <tr>
						<td><?php campos("Dirección","direccion","text",$al['direccion'],1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Grado","codgrado","select",$gra,"","",$al['codgrado']);?></td>
					</tr>
                   <tr>
						<td><?php campos("Materia","codmateria","select",$mat,"","",$al['codmateria']);?></td>
					</tr>
                    
					<tr><td><?php campos("Guardar","guardar","submit");?></td></tr>
				</table>
                
			</fieldset>
		</div>
       <div class="prefix_1 grid_5 ">
			<fieldset>
				<div class="titulo">Datos de Padre de Familia o Tutor</div>
                
				<table class="tablareg">
				    <tr>
						<td><?php campos("Nombres","nombrespadre","text",$al['nombrespadre'],1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Apellido Paterno","paternopadre","text",$al['paternopadre'],1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Apellido Materno","maternopadre","text",$al['maternopadre'],1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Ci","cipadre","text",$al['cipadre'],1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Sexo","sexopadre","select",array("F"=>"Femenino","M"=>"Masculino"),"","",$al['sexopadre']);?></td>
					</tr>
                    <tr>
						<td><?php campos("Dirección de Casa","direccionpadre","text",$al['direccionpadre'],1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Dirección de Trabajo","direcciontrabajo","text",$al['direcciontrabajo'],1,array(""=>""));?></td>
					</tr>
                   
                    <tr>
						<td><?php campos("Telefono","telefono","text",$al['telefono'],1,array(""=>""));?></td>
					</tr>
                   <tr>
						<td><?php campos("Tutor Nº 1","tutor1","text",$al['tutor1'],1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Celular Tutor 1º Tutor","celtutor1","text",$al['celtutor1'],1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Tutor Nº 2","tutor2","text",$al['tutor2'],1,array(""=>""));?></td>
					</tr>
                    <tr>
						<td><?php campos("Celular Tutor 2º Tutor","celtutor2","text",$al['celtutor2'],1,array(""=>""));?></td>
					</tr>
                
	                
				</table>
                
			</fieldset>
		</div>
       </form>
    	<div class="clear"></div>
    </div>
</div>
<?php include_once '../../piepagina.php';?>