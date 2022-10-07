<?php
/*funcion que llama a la clase donde se ingresa los metodos de insercion*/
require_once'conexion/Trabajo.php';
/*condicional para guardadr el dato*/
if(isset($_POST) and $_POST["grabar"]=="si")
{
	//($_POST);
	/*instancia de la clase trabajo*/
	
	$tra=new Trabajo();
	$tra->logeo();
	exit; 
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<style type="text/css">


.tit
{
	margin: 0px 51px;
width: 300px;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INGRESO PANEL ADMINISTRACION</title>

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
</head>

<body>
<div id="maincontent">

<div class="login">
<div class="tit">
<h1>Ingreso de Usuario</h1>
</div>
<form name="form" id="form" method="post" action="login.php">
<div class="lnom">Usuario:</div>
<div class="nombre"><input type="text" name="usuario" id="minombre"size="40px" /></div>
<div class="lemail">Contraseña:</div>
<div class="email"><input type="password" name="pass" id="miemail"size="40px" /></div>
<div class="boton">
<input type="hidden" name="grabar" id="grabar"  value="si" />
<div id="error"></div>
<input type="button" name="enviar" value="Ingresar" onclick="validar_logueo();" />
</div>

</form>
</div>
</div>
</body>
</html>