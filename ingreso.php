<?php
/*funcion que llama a la clase donde se ingresa los metodos de insercion*/
require_once'conexion/Trabajo.php';
/*condicional para guardadr el dato*/
if(isset($_POST) and $_POST["grabar"]=="si")
{
	//($_POST);
	/*instancia de la clase trabajo*/
	
	$tra=new Trabajo();
	$tra->insertusuario();
	exit; 
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel de Administraci&oacute;n</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js" ></script>
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript" src="js/md5.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>     
<script type="text/javascript" src="js/validCampoFranz.js"></script>

<script type="text/javascript">
            $(function(){
                //Para escribir solo letras
                $('#miuser').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
				$('#minombre').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
				$('#miciudad').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou');
                //Para escribir solo numeros    
                $('#mitelefono').validCampoFranz('0123456789'); 
				$('#micelular').validCampoFranz('0123456789');
				     
            });
        </script> 
        <style type="text/css">


.inscripcion
{
 margin: 70px auto;
    width: 472px;
}
.visualizacion
{
	 /*margin-left: 233px;
margin-top: 35px;*/
margin: 40px auto;
    width: 329px;
}

</style>
</head>

<body>
<div id="maincontent">
    
<div class="tit">
<h1>INGRESO DE USUARIO</h1>
</div>
<div class="inscripcion">
<form name="form" id="form" method="post" action="ingreso.php">
<?php
if (isset($_GET["m"]) and $_GET["m"]==1)
{
	?>
	<h2 style="color:green;">Usuario Ingresado</h2>
	<?php
}
if (isset($_GET["m"]) and $_GET["m"]==2)
{
	?>
	<h2 style="color:green;">Usuario Existente</h2>
	<?php
}
if (isset($_GET["m"]) and $_GET["m"]==3)
{
	?>
	<h2 style="color:green;">Usuario Borrado</h2>
	<?php
}
?>
<div class="lnom">Nombre:</div>
<div class="nombre"><input type="text" name="nombre" id="minombre"size="40px" /></div>
<div class="lemail">Correo:</div>
<div class="email"><input type="text" name="email" id="miemail"size="40px" /></div>
<div class="lusu">Usuario:</div>
<div class="usuario"><input type="text" name="usuario" id="miuser" size="40px"/></div>
<div class="lpass">Password:</div>
<div class="password"><input type="password" name="pass" id="mipass"  size="40px"/>
</div>
<div class="rpass">Repita el<br /> Password:</div>
<div class="rpassw"><input type="password" name="rpassw" id="mipassw"size="40px" /></div>

<div class="boton">
<input type="hidden" name="grabar" id="grabar"  value="si" />
<div id="error"></div>
<input type="button" name="enviar" value="Enviar" onclick="valida_registro();" />
</div>


</form>
</div>
<div class="regresar">
<a href="home.php">Regresar</a>
</div>
<div class="visualizacion">
<?php
include('consultausu.php');
?>
</div>


</div>

</body>
</html>


