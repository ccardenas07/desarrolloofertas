<?php
session_start();
require_once("conexion/Coneccion.php");
/*FOTO1*/

$foto=$_FILES["foto"]["name"];
$temp=$_FILES["foto"]["tmp_name"];
$tamano=$_FILES["foto"]["size"];
$tipo=$_FILES["foto"]["type"];
echo "el tamaño en bytes del archivo es <strong>$tamano</strong>";
echo "<br>";


/*foto2*/
$foto2=$_FILES["foto2"]["name"];
$temp2=$_FILES["foto2"]["tmp_name"];
$tamano2=$_FILES["foto2"]["size"];
$tipo2=$_FILES["foto2"]["type"];
echo "el archivo en el PC del cliente se llama: <strong>$foto2</strong>";
echo "<br>";
/*foto3*/
$foto3=$_FILES["foto3"]["name"];
$temp3=$_FILES["foto3"]["tmp_name"];
$tamano3=$_FILES["foto3"]["size"];
$tipo3=$_FILES["foto3"]["type"];
echo "el archivo en el PC del cliente se llama: <strong>$foto3</strong>";
echo "<br>";
/*foto4*/
$foto4=$_FILES["foto4"]["name"];
$temp4=$_FILES["foto4"]["tmp_name"];
$tamano4=$_FILES["foto4"]["size"];
$tipo4=$_FILES["foto4"]["type"];
echo "el archivo en el PC del cliente se llama: <strong>$foto3</strong>";
echo "<br>";
//if(!empty($foto)) // si esta lleno
//{
	//if ($tipo=="image/jpeg" or $tipo=="image/png")
	//{
		//**************************************************************************
		//Ahora podemos subir la imagen al servidor
		switch ($tipo)
		{
			case 'image/jpeg':
				$ext=".jpg";
			break;
			case 'image/png':
				$ext=".png";
			break;
		}		
		
		$nombre_foto=$foto;
		$nombre_foto2=$foto2;
		$nombre_foto3=$foto3;
		$nombre_foto4=$foto4;
		//$nombre_foto=str_replace(" ","_",$nombre_foto);
		//$nombre_foto=$nombre_foto.$ext;
		//sube al servidor la imagen
		copy($temp,"upload/$nombre_foto");
		copy($temp2,"upload/$nombre_foto2");
		copy($temp3,"upload/$nombre_foto3");
		copy($temp4,"upload/$nombre_foto4");
	//}

		$sql="insert into descripcion 	values (null,'$nombre_foto','".$_POST["linka1"]."','$nombre_foto2','".$_POST["linka2"]."','$nombre_foto3','".$_POST["linka3"]."','$nombre_foto4','".$_POST["linka4"]."','".$_POST["datehost"]."','".$_SESSION['admin']."','".$_SERVER['REMOTE_ADDR']."')";
	mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=1");
	
?>
