<?php
require_once('conexion/Trabajo.php');
$t=new Trabajo();
$re=$t->consulta();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/estilos.css" type="text/css" rel="stylesheet" />
<title>Consulta</title>
<style type="text/css">

body
{
	/*background-image:url(ima/bkg_body.jpg);
	background-attachment:fixed;
	background-repeat:repeat;
	padding:0;
	margin:0 auto;
	width: 950px;
	color:#FFF;*/
	 
}

</style>
</head>

<body>
<!--<img src="ima/fondos2.png" width="1100px" width="790px" />-->
<div class="consulta">
    <?php if(sizeof($re)==0)
    {
        echo"Bienvenido";
    }else
    {
        
    ?>
	<?php
for($i=0;$i<sizeof($re);$i++)
{
	?>
<table border="1" width="780">
<tr>
<td>
Publicado el
</td>
<td>
<?php echo $re[$i]["fechas"]?>
</td>
<td>
<?php echo $re[$i]["user"]?>
</td>
<td>
<?php echo $re[$i]["host"]?>
</td>
<td>
Editar
</td>
<td>
Eliminar
</td>
</tr>
<tr>
<!--<td>id</td>-->

<td align="center"><?php echo '<img src="upload/'.$re[$i]["image1"].'" width="100px" height="100px" />';?></td>
<td align="center"><?php echo '<img src="upload/'.$re[$i]["image2"].'" width="100px" height="100px" />';?></td>
<td align="center"><?php echo '<img src="upload/'.$re[$i]["image3"].'" width="100px" height="100px" />';?></td>
 <td align="center"><?php echo '<img src="upload/'.$re[$i]["image4"].'" width="100px" height="100px" />';?></td>

<!--<td>PRE VISUALIZACION</td>-->
</tr>

<tr>
<!--<td>id</td>-->

<td  class="espacio" align="center"><?php echo $re[$i]["link1"]?></td>
<td class="espacio" align="center"><?php echo $re[$i]["link2"]?></td>
<td class="espacio" align="center"><?php echo $re[$i]["link3"]?></td>
<td class="espacio" align="center"><?php echo $re[$i]["link4"]?></td>
<td  class="espacio" align="center"><a href="javascript:void();"onclick="window.location='consultahomeid.php?idd=<?php echo $re[$i]["idd"];?>'"><img src="img/editar.png" width="16px" height="16px" /></a></td>
<td  class="espacio" align="center"><a href="javascript:void();" onclick="window.location='eliminardescrip.php?idd=<?php echo $re[$i]["idd"]; ?>'"><img src="img/eliminar.png" width="16px" height="16px" /></a></td>
<!--<td>PRE VISUALIZACION</td>-->
</tr>
</table>

    
    <?php
}
    
?>


    <?php
    }
    ?>
    </div>
</body>
</html>