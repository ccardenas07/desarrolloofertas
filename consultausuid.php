<?php
require_once('conexion/Trabajo.php');
$t=new Trabajo();
if (isset($_POST["grabar"]) and $_POST["grabar"]=="si")
	{
		//print_r($_POST);
		
		$t->editar_usuario();
		exit;
	}
$usu=$t->consultausuarioid($_GET["idu"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cosulta Usuario</title>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js" ></script>
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript" src="js/md5.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>     
<script type="text/javascript" src="js/validCampoFranz.js"></script>
<style type="text/css">
.nou
{
	margin-left: 91px;
    margin-top: 63px;

}
.usu
{
	margin-left: 95px;
margin-top: 20px;
}
.correo
{
	margin-left: 99px;
    margin-top: 19px;
}
.formu
{
	  margin: 12px auto;
      width: 406px;
}
.botonu
{
	margin-left: 109px;
    margin-top: 25px;
}
.pass
{
	margin-left: 85px;
    margin-top: 19px;
}
.passr
{
	margin-left: 38px;
    margin-top: 19px;
}
.titulo
{
	 margin: 12px auto;
     width: 289px;
}
</style>
</head>

<body>
<div id="maincontent">
<div class="formu">
<div class="titulo">
<h1>EDITAR USUARIO</h1>
</div>
<form name="form" id="form" action="consultausuid.php" method="post">
<?php
if (isset($_GET["m"]) and $_GET["m"]==1)
{
	?>
	<h2 style="color:green;">Usuario Modificado</h2>
	<?php
}
?>
<?php
for($i=0;$i<sizeof($usu);$i++)
{
?>
<div class="nou">
Usuario <input type="text" name="usuario" value="<?php echo $usu[$i]["user"]?>" />
</div>
<div class="usu">
Nombre <input type="text" name="nombre" value="<?php echo $usu[$i]["name"]?>" />
</div>
<div class="correo">
Correo <input type="text" name="correo" value="<?php echo $usu[$i]["email"]?>" />
</div>
<div class="pass">
Password <input type="password" name="pass" />
</div>
<div class="passr">
Repetir Password <input type="password" name="passr" />
</div>
<div class="botonu">
<input type="hidden" name="idu" value="<?php echo $usu[$i]["idu"]?>" />
<input type="hidden" name="grabar" value="si">
<input type="button" name="Enviar" value="Enviar" onclick="valida_ediusu();" />
</div>
<?php	
}
?>
</form>

</div>
<div class="regresar">
<a href="ingreso.php">regresar</a>
</div>
</div>
</body>
</html>