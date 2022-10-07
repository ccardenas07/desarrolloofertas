<?php
require_once('conexion/Trabajo.php');
if (isset($_SESSION["admin"]))
{
/*$t=new Trabajo();
$nom=$t->saluda_al_usuario($_SESSION["admin"]);*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRACION</title>

<!--------->

<!------------>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />
<!--<link href="css/calendario.css" type="text/css" rel="stylesheet">
<script src="js/calendar.js" type="text/javascript"></script>
<script src="js/calendar-es.js" type="text/javascript"></script>
<script src="js/calendar-setup.js" type="text/javascript"></script>-->
<script src="js/funciones.js" type="text/javascript"></script>

</head>

<body>

<div id="maincontent">

  
<div id="fancymenu">

  <ul class="menudes">
    <li class="current" id="menu_home"><a href="home.php">Administrador</a></li>
    <li id="menu_plantatree"><a href="ingreso.php">Usuarios</a></li>
    <li id="menu_travel"><a href="mostrarprod1.php" target="_blank">Mostrar</a></li>
   <li id="menu_travel"><a href="salir.php">Salir</a></li>
  </ul>

</div>

<div class="panel">
<h1>Panel de Administraci&oacute;n</h1>
<form name="form" action="procesa.php" method="post" enctype="multipart/form-data">
<?php
if (isset($_GET["m"]) and $_GET["m"]==1)
{
	?>
	<h2 style="color:green;">Datos Guardados</h2>
	<?php
}
if (isset($_GET["m"]) and $_GET["m"]==2)
{
	?>
	<h2 style="color:green;">Dato Borrado</h2>
	<?php
}
if (isset($_GET["m"]) and $_GET["m"]==3)
{
	?>
	<h2 style="color:green;">Datos Modificados</h2>
	<?php
}
?>
 <!-- script que define y configura el calendario-->
  <div class="imagen1">
  Imagen (206x206)
  <input type="file" name="foto" />
  </div>
  <div class="linka1">
  Enlace(www.enlace.com)
<input type="text" name="linka1"  />
</div>
<div class="imagen1">
Imagen (206x206)
  <input type="file" name="foto2" />
</div>
<div class="linka1">
Enlace(www.enlace.com)
<input type="text" name="linka2"  />
</div>
<div class="imagen1">
Imagen (206x206)
  <input type="file" name="foto3" />
</div>
<div class="linka1">
Enlace(www.enlace.com)
<input type="text" name="linka3"  />
</div>
<div class="imagen1">
Imagen (206x206)
  <input type="file" name="foto4" />
</div>
<div class="linka1">
Enlace(www.enlace.com)
<input type="text" name="linka4"  />
</div> 
  <div class="clear"></div>
  <!--************************-->
</p>
<div class="boton">
  <input type="hidden" name="datehost" id="datehost"  value="<?php echo date("Y-m-d H:i:s");?>" />

<div id="error"></div>
<!--<input type="button" name="enviar" value="guardar" onclick="valida_descripcion()"  />-->
<input type="submit" name="Enviar" value="Guardar"  />
</div>

</form>
</div>

<div class="mostra">
<?php //include'consultauni.php'?>
<?php include'consulta.php'?>
</div>


</div><!--fin maincontent--->
</body>
</html>

<?php
}else
{
	echo "
	<script type='text/javascript'>
	alert('Debe loguearse primero para acceder a este contenido');
	window.location='index.php';
	</script>
	";
}
?>

