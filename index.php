<?php
include_once("login/check.php");
$titulo="Inicio";
$_SESSION['idmenu']=0;
$_SESSION['subm']=0;
?>
<?php include_once("cabecerahtml.php"); ?>
<link href="css/default/default.css" type="text/css" rel="stylesheet" />
<link href="css/light/light.css" type="text/css" rel="stylesheet" />
<link href="css/nivo-slider.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>
<?php include_once("cabecera.php");?>

<div class="grid_6">
    <div class="contenido textoinicio">
    	<h3>Misión</h3>
    Proporcionar a los niños y niñas de formación integral para que en un futuro puedan  desarrollar sus capacidades, encontrar la confianza y  seguridad personal que necesitan para su proceso de aprendizaje.
        <h3>Visión</h3>
        Ayudar a todos los niños y jóvenes que presentan una dificultad en el proceso de enseñanza aprendizaje,  realizando diagnósticos, intervenciones, y brindando asesoría personalizada, de esa manera poder apoyar y lograr una asimilación de conocimientos y llegar a la formación de  buenos estudiantes.
    </div>
</div>
<div class="grid_6">
    <div class="contenido">
    	<div class="theme-light">
    	<div id="slider" class="nivoSlider">
                <img src="imagenes/inicio/foto1.jpg" />
                <img src="imagenes/inicio/foto2.jpg" />
                <img src="imagenes/inicio/foto3.jpg" />
		</div>
        </div>
    </div>
</div>
<?php include_once("piepagina.php");?>