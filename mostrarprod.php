<?php
require_once('conexion/Trabajo.php');
$t=new Trabajo();
$cd=$t->consulta();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/estilos.css" type="text/css" rel="stylesheet" />
<title>Ofertas Marcimex</title>
</head>

<body>
<div id="contenedor">
<div class="botonProd">
<a href="http://www.marcimex.com.ec/ofertas/" target="_blank"><img src="img/botonmas.png" width="125" height="28" /></a>
</div>
<div id="maincontentmostrarproducto">
    <div class="ofertas">
        <div class="producto">
        <?php
			//for($i=0;$i<sizeof($cd);$i++)
			//{
		?>
        <img src="upload/<?php echo $cd[0]["image1"];?>" width="206px" height="206px" /><br />
       <a href="<?php echo"http://".$cd[0]["link1"];?>" target="_blank"><div class="colorl">ver detalles <img src="img/flecha_verde.png" width="11" height="7" /></div> </a>
        </div>
        <div class="producto">
        <img src="upload/<?php echo  $cd[0]["image2"];?>" width="206px" height="206px" /><br />
                 <a href="<?php echo "http://". $cd[0]["link2"];?>"target="_blank"><div class="colorl">ver detalles <img src="img/flecha_verde.png" width="11" height="7" /></div> </a>
        </div>
        <div class="producto">
        <img src="upload/<?php echo $cd[0]["image3"];?>" width="206px" height="206px" /><br />
                 <a href="<?php echo "http://". $cd[0]["link3"];?>" target="_blank"><div class="colorl">ver detalles <img src="img/flecha_verde.png" width="11" height="7" /></div> </a>
         </div>       
        <div class="producto">
       <img src="upload/<?php echo $cd[0]["image4"];?>" width="206px" height="206px" /><br />
                <a href="<?php echo "http://". $cd[0]["link4"];?>" target="_blank"><div class="colorl">ver detalles <img src="img/flecha_verde.png" width="11" height="7" /></div> </a>
                <?php
				//}
				?>
        </div>
    </div>
</div>
</div>
</body>
</html>