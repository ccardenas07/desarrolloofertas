<?php
require_once('conexion/Trabajo.php');
$t=new Trabajo();
$usu=$t->consultausuario();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cosulta Usuario</title>

</head>

<body>
<table border="0" id="usuariol">
<tr>
<!--<td>id usuario</td>-->
<td align="center">Usuario</td>
<td align="center">Nombre</td>
<td align="center">Correo</td>
<td align="center">Editar</td>
<td align="center">Eliminar</td>
</tr>
<?php
for($i=0;$i<sizeof($usu);$i++)
{
	
?>
<tr>
<!--<td><?php //echo $usu[$i]["idu"]?></td>-->
<?php if($i%2!=0)
	{
	?>
<td  class="espacio color1" align="center"><?php echo $usu[$i]["user"]?></td>
<td class="espacio color1"  align="center"><?php echo $usu[$i]["name"]?></td>
<td class="espacio color1" align="center"><?php echo $usu[$i]["email"]?></td>
<td class="espacio color1" align="center"><a href="javascript:void" onclick="window.location='consultausuid.php?idu=<?php echo $usu[$i]["idu"];?>'"><img src="img/editar.png" width="16px" height="16px" /></a></td>
<td  class="espacio color1" align="center"><a href="javascript:void" onclick="window.location='eliminarusuario.php?idu=<?php echo $usu[$i]["idu"];?>'"><img src="img/eliminar.png" width="16px" height="16px" /></a></td>
<?php
	}else
	{
		
		
?>
<td  class="espacio color2" align="center"><?php echo $usu[$i]["user"]?></td>
<td class="espacio color2"  align="center"><?php echo $usu[$i]["name"]?></td>
<td class="espacio color2" align="center"><?php echo $usu[$i]["email"]?></td>
<td class="espacio color2" align="center"><a href="javascript:void" onclick="window.location='consultausuid.php?idu=<?php echo $usu[$i]["idu"];?>'"><img src="img/editar.png" width="16px" height="16px" /></a></td>
<td  class="espacio color2" align="center"><a href="javascript:void" onclick="window.location='eliminarusuario.php?idu=<?php echo $usu[$i]["idu"];?>'"><img src="img/eliminar.png" width="16px" height="16px" /></a></td>
</tr>
<?php
	}
?>
<?php	
	
}
?>
</table>
</body>
</html>